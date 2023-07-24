<footer class="pc-footer">
  <div class="footer-wrapper container-fluid">
    <div class="row">
      <div class="col my-1">
        <p class="m-0"
          >طراحی و توسعه <a href="https://github.com/Alirezad07/" target="_blank">Alirezad07</a></p
        >
      </div>
      <div class="col-auto my-1">
        <ul class="list-inline footer-link mb-0">
            <li class="list-inline-item"><a href="http://chk1.iklak.com:4034/cp/protection">حمایت</a></li>
            <li class="list-inline-item"><a href="https://github.com/Alirezad07/X-Panel-SSH-User-Management">GitHub</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>

<!-- [Page Specific JS] start -->
<script src="<?php echo path ?>assets/js/plugins/apexcharts.min.js"></script>

<!-- [Page Specific JS] end -->
<!-- Required Js -->
<script src="<?php echo path ?>assets/js/plugins/popper.min.js"></script>
<script src="<?php echo path ?>assets/js/plugins/simplebar.min.js"></script>
<script src="<?php echo path ?>assets/js/plugins/bootstrap.min.js"></script>
<script src="<?php echo path ?>assets/js/fonts/custom-font.js"></script>
<script src="<?php echo path ?>assets/js/config.js?v=2.8"></script>
<script src="<?php echo path ?>assets/js/pcoded.js"></script>
<script src="<?php echo path ?>assets/js/plugins/feather.min.js"></script>
<!-- [Page Specific JS] start -->
  <script src="<?php echo path ?>assets/js/plugins/simple-datatables.js"></script>
  <script src="<?php echo path ?>assets/js/clipboard.min.js"></script>
<script>
    // basic example
    new ClipboardJS('[data-clipboard=true]').html()('success', function (e) {
        e.clearSelection();
        alert('Copied!');
    });
</script>
  <script>
    const dataTable = new simpleDatatables.DataTable('#pc-dt-simple', {
      sortable: true,
      perPage: 10
    });
  </script>

  <!-- [Page Specific JS] end -->
</body>
<!-- [Body] end -->

</html>
