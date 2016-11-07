<?php
set_include_path($_SERVER['DOCUMENT_ROOT'].'/disman1.0/includes/');
include(get_include_path().'session.php');
include(get_include_path().'header.php');
if ($_SESSION['emp_type'] != 1) {
    header('location:../login.php');
}
?>
Driver
<?php
include(get_include_path().'footer.php');
?>
