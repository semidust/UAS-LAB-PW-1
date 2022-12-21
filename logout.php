<?php
session_start();
session_destroy();
echo "<script>alert('Berhasil logout!')</script>;";
echo "<meta http-equiv='refresh' content='2;url=login.php'>";
?>