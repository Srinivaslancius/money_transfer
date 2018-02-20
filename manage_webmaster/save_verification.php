<?php
//echo "<pre>"; print_r($_POST); die;
error_reporting(1);
ob_start();
include_once('../admin_includes/config.php');
include_once('../admin_includes/common_functions.php');

if(!isset($_SESSION['admin_user_id'])) {
  header("Location: logout.php");
  exit;
}


/*
 * PHP QR Code encoder
 *
 * Exemplatory usage
 *
 * PHP QR Code is distributed under LGPL 3
 * Copyright (C) 2010 Dominik Dzienia <deltalab at poczta dot fm>
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
 */
    
    echo "<h1>PHP QR Code</h1><hr/>";
    
    //set it to writable location, a place for temp generated PNG files
    $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'qr_code/temp'.DIRECTORY_SEPARATOR;
    
    //html PNG location prefix
    $PNG_WEB_DIR = 'qr_code/temp/';

    include "qr_code/qrlib.php";    
    
    //ofcourse we need rights to create temp dir
    if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);
    
    
    $filename = $PNG_TEMP_DIR.'test.png';
    
    //processing form input
    //remember to sanitize user input in real-life solution !!!
    $errorCorrectionLevel = 'L';
    if (isset($_REQUEST['level']) && in_array($_REQUEST['level'], array('L','M','Q','H')))
        $errorCorrectionLevel = $_REQUEST['level'];    

    $matrixPointSize = 4;
    if (isset($_REQUEST['size']))
        $matrixPointSize = min(max((int)$_REQUEST['size'], 1), 10);


    if (isset($_REQUEST['data'])) { 
    
        //it's very important!
        if (trim($_REQUEST['data']) == '')
            die('data cannot be empty! <a href="?">back</a>');
            
        // user data
        $filename = $PNG_TEMP_DIR.'test'.md5($_REQUEST['data'].'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';
        QRcode::png($_REQUEST['data'], $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
        
    } else {    
    
        //default data
        echo 'You can provide data in GET parameter: <a href="?data=like_that">like that</a><hr/>';    
        QRcode::png('PHP QR Code :)', $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
        
    }    
        
    //display generated file
    echo '<img src="'.$PNG_WEB_DIR.basename($filename).'" /><hr/>';  

    $qrCodefilename = basename($filename);
    $created_at = date("Y-m-d h:i:s");
    //Generatre random id   
    $randomDate = date("Ymd h:i:s");
    $user_id = "QRSCAN_".$randomDate.uniqid();

    $dob=$_REQUEST['dob'];
    //User Image saving 

    $user_image = uniqid().$_FILES["user_image"]["name"];
    $target_dir = "../uploads/user_images/";
    $target_file = $target_dir . basename(uniqid().$_FILES["user_image"]["name"]);
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    move_uploaded_file($_FILES["user_image"]["tmp_name"], $target_file);

    $generateAuthKey = bin2hex(random_bytes(32));

    //Save Data into Db with qr scan code data
    $saveQrcodeData = "INSERT INTO `users`(`user_id`, `user_full_name`, `user_email`, `user_mobile`, `login_count`, `last_login_visit`, `created_at`, `user_password`, `birth_place`, `dob`, `gender`, `address`, `rt/rw`, `ex/village`, `lkp_district_id`, `lkp_religion_id`, `martial_status`, `work`, `nik`, `amount`, `qr_img_code`, `user_image`,`valid_until`,`auth_key`) VALUES ('$user_id','".$_REQUEST["name"]."','".$_REQUEST["user_email"]."','".$_REQUEST["user_mobile"]."','1','1','$created_at','".encryptPassword($_REQUEST["user_mobile"])."','".$_REQUEST["birth_place"]."','".$dob."','".$_REQUEST["gender"]."','".$_REQUEST["address"]."','".$_REQUEST["rt/rw"]."','".$_REQUEST["ex/village"]."','".$_REQUEST["lkp_district_id"]."','".$_REQUEST["lkp_religion_id"]."','".$_REQUEST["martial_status"]."','".$_REQUEST["work"]."','".$_REQUEST["data"]."','".$_REQUEST["amount"]."','$qrCodefilename','$user_image','".$_REQUEST["valid_until"]."','$generateAuthKey')";
    $conn->query($saveQrcodeData);
    //echo "<pre>"; print_r($_POST); die;
    header("Location:user.php");

?>