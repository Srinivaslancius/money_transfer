<?php 
error_reporting(1);
ob_start();
include_once('../admin_includes/config.php');
include_once('../admin_includes/common_functions.php');

if(!isset($_SESSION['admin_user_id'])) {
  header("Location: logout.php");
  exit;
}

?>
<?php $getSiteSettings = getAllDataWhere('site_settings','id',1); 
$getSiteSettingsData = $getSiteSettings->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/demo/favicon.png">    
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $getSiteSettingsData['admin_title'];?></title>