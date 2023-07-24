<?php

class Index_Model extends Model
{
	public function __construct()
      {
         // Call the Model constructor
         parent::__construct();
      }
      //we will use the select function
      public function all_user()
      {
				$query = $this->db->prepare("select * from users");
				$query->execute();
				$queryCount = $query->rowCount();
         return $queryCount;
      }
			public function active_user()
      {
				$query = $this->db->prepare("select * from users where enable='true'");
				$query->execute();
				$queryCount = $query->rowCount();
         return $queryCount;
      }
			public function deactive_user()
      {
				$query = $this->db->prepare("select * from users where enable!='true'");
				$query->execute();
				$queryCount = $query->rowCount();
         return $queryCount;
      }

            public function user_band()
    {
        $query = $this->db->prepare("select * from users,Traffic WHERE users.enable='true' AND users.username=Traffic.user AND Traffic.total!='0' ORDER BY Traffic.total DESC LIMIT 10");
        $query->execute();
        $queryCount = $query->fetchAll();
        return $queryCount;
    }
}
