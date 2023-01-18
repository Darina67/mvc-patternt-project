<script>
  <?php
  if (isset($_SESSION['success'])) {  ?>
    toastr.success('<?php echo getSession('success') ?>');
  <?php
    unsetSession('success');
  }
  ?>
  <?php
  if (isset($_SESSION['deleted'])) {  ?>
    toastr.info('<?php echo getSession('deleted') ?>');
  <?php
    unsetSession('deleted');
  }
  ?>
</script>

<script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="../public/assets/js/app.js"></script>
<script src="../public/assets/js/validation.js"></script>
</body>

</html>