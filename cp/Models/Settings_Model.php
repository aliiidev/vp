<?php

class Settings_Model extends Model
{
    public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function Get_settings()
    {
        $query = $this->db->prepare("select * from setting");
        $query->execute();
        $queryCount = $query->fetchAll();
        return $queryCount;
    }
    public function submit_pass($data_sybmit)
    {
        $sql = "UPDATE setting SET adminpassword=? WHERE id=?";
        $this->db->prepare($sql)->execute([$data_sybmit['password'], '1']);
        file_put_contents("/var/www/html/cp/Config/database.php", str_replace("\$password = \"".$data_sybmit['password_old']."\"", "\$password = \"".$data_sybmit['password']."\"", file_get_contents("/var/www/html/cp/Config/database.php")));
        shell_exec("htpasswd -b -c /etc/apache2/.htpasswd " . $data_sybmit['username_r'] . " " . $data_sybmit['password']);
        $restpass = $this->db->prepare("SET PASSWORD FOR '" . $data_sybmit['username_r'] . "'@'localhost' = PASSWORD('" . $data_sybmit['password'] . "');");
        $restpass->execute();
        $fixpass = $this->db->prepare("GRANT ALL ON *.* TO '".$data_sybmit['username_r']."'@'localhost'");
        $fixpass->execute();
        header("Location: Settings&sort=chengepass&pos=success");
    }

    public function submit_port($data_sybmit)
    {
        $sshport= $data_sybmit['sshport'];
        $sql = "UPDATE setting SET sshport=? WHERE id=?";
        $this->db->prepare($sql)->execute([$sshport, '1']);
        shell_exec("sudo sed -i \"s/".$data_sybmit['sshport_old']."/".$data_sybmit['sshport']."/g\" /var/www/html/cp/Config/database.php &");
        shell_exec("sudo sed -i 's@Port " . $data_sybmit['sshport_old'] . "@Port " . $data_sybmit['sshport'] . "@g' /etc/ssh/sshd_config");
        shell_exec("sudo reboot");
        header("Location: Settings&sort=port");
    }

    public function submit_multiuser_on_limit($data_sybmit)
    {
        shell_exec("(crontab -l ; echo \"* * * * * bash /var/www/html/cp/Libs/sh/killusers.sh >/dev/null 2>&1\") | crontab -");
        header("Location: Settings&sort=user");
    }

    public function submit_multiuser_off_limit($data_sybmit)
    {
        shell_exec("crontab -l | grep -v '/var/www/html/cp/Libs/sh/killusers.sh'  | crontab  -");
        header("Location: Settings&sort=user");
    }

    public function submit_restor_backup($data_sybmit)
    {
        echo $data_sybmit['name'];
        if (strpos($data_sybmit['name'], ".sql") !== false) {
            shell_exec("mysql -u '".DB_USER."' --password='".DB_PASS."' XPanel < /var/www/html/cp/storage/backup/".$data_sybmit['name']);
            $stmt = $this->db->prepare("SELECT * FROM users where enable='true'");
            $stmt->execute();
            $data=$stmt->fetchAll();
            foreach ($data as $row) {
                shell_exec("bash Libs/sh/adduser " . $row["username"] . " " . $row["password"]);
            }
            echo '
            <div class="p-4 mb-2" style="position: fixed;z-index: 9999;left: 0;">
              <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                  <img src="' . path . 'assets/images/xlogo.png" class="img-fluid m-r-5" alt="XPanel" style="width: 17px">
                  <strong class="me-auto">XPanel</strong>
                  <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">عملیات با موفقیت انجام شد</div>
              </div>
            </div>';
        }
    }

    public function submit_fakeurl($data_sybmit)
    {
        file_put_contents("/var/www/html/cp/Config/define.php", str_replace("\$fakeurl = \"".$data_sybmit['fake_address_old']."\"", "\$fakeurl = \"".$data_sybmit['fake_address']."\"", file_get_contents("/var/www/html/cp/Config/define.php")));
        file_put_contents("/var/www/html/example/index.php", str_replace("\$site = \"".$data_sybmit['fake_address_old']."\"", "\$site = \"".$data_sybmit['fake_address']."\"", file_get_contents("/var/www/html/example/index.php")));
        header("Location: Settings&sort=fakeaddress");
    }

    public function submit_blockip($data_sybmit)
    {
        $list_block= $data_sybmit['list_block'];
        $fp = fopen('/var/www/html/cp/Libs/iplist.txt', 'w');
        fwrite($fp, $list_block);
        fclose($fp);
        header("Location: Settings&sort=block");
    }
}
