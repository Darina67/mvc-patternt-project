<script>
  <?php if (isset($_SESSION['msg'])) { ?>
    toastr.success('<?php echo getSession('success'); ?>')
  <?php
    unsetSession('success');
    // unset($_SESSION['success']);
  } ?>
</script>
<script src="../public/assets/js/validation.js"></script>
</body>

</html>