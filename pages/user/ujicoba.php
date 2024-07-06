<?php if(@$_SESSION['sukses']){ ?>
<script>
  Swal.fire(
  'Good job!',
  "<?php echo $_SESSION['sukses']; ?>",
  'success'
)
</script>
<?php unset($_SESSION['sukses']); } ?>