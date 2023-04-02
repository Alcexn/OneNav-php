<?php
if (isset($_COOKIE["admin"]))
    echo '<script>window.location.href="admin.php";</script>';
else
    echo '<script type="text/javascript">
window.open("admin/login.php")
</script>';
  ?>