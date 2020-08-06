<?php
Session_start();
Session_destroy();
echo '<script type="text/javascript">'; 
echo 'window.location.href = "home_dashboard.php";';
echo '</script>';
?>