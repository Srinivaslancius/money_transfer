<?php 
error_reporting(1);
include "../admin_includes/config.php";
include "../admin_includes/common_functions.php";
//Set Array for list
$lists = array();
$response = array();
if($_SERVER['REQUEST_METHOD']=='POST'){

	if (isset($_REQUEST['merchantEmail']) && !empty($_REQUEST['merchantPassword'])  ) {

		 	$merchant_email = $_REQUEST['merchantEmail'];
		    $merchant_password = encryptPassword($_REQUEST['merchantPassword']);
		    $getLoginData = merchantLogin($merchant_email,$merchant_password);
		    //Set variable for session
		    if($getLoggedInDetails = $getLoginData->fetch_assoc()) {
		    	$last_login_visit = date("Y-m-d h:i:s");
		    	$login_count = $getLoggedInDetails['login_count']+1;
		    	$sql = "UPDATE `merchants` SET login_count='$login_count', last_login_visit='$last_login_visit' WHERE user_email = '$user_email' ";
		    	$row = $conn->query($sql);	
		    	$response["id"] = $getLoggedInDetails['id'];	 
		    	$response["merchantId"] = $getLoggedInDetails['merchant_id'];
		    	$response["merchantName"] = $getLoggedInDetails['merchant_full_name'];
		    	$response["merchantEmail"] = $getLoggedInDetails['merchant_email'];
		    	$response["merchantMobile"] = $getLoggedInDetails['merchant_mobile'];
		    	$response["merchantAmount"] = $getLoggedInDetails['amount'];
				$response["authKey"] = $getLoggedInDetails['auth_key'];		    			    	
		    	$response["success"] = 0;
				$response["message"] = "Keberhasilan!.";
			} else {

				$response["success"] = 1;
				$response["message"] = "Harap masukkan credentails yang valid!";
			}	

	} else {

		$response["success"] = 2;
		$response["message"] = "Diperlukan Fields Missings!";
	}

} else {
	$response["success"] = 3;
	$response["message"] = "Permintaan tidak valid";

}
echo json_encode($response);

?>