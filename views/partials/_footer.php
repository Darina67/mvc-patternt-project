<script>
  <?php
  if (isset($_SESSION['success'])) {  ?>
    toastr.success('<?php echo getSession('success') ?>');
  <?php
    unsetSession('success');
  } ?>
</script>


<script src="../public/assets/js/validation.js"></script>
</body>

</html>