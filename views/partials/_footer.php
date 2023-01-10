<script>
  <?php if (isset($_SESSION['success'])) { ?>
    toastr.success('<?php echo getSession('success') ?>');
  <?php }
  ?>
</script>
<?php
var_dump($_SESSION['success']);
?>
<script src="../public/assets/js/validation.js"></script>
</body>

</html>