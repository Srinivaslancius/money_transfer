<?php 
error_reporting(1);
include "../admin_includes/config.php";
include "../admin_includes/common_functions.php";
//Set Array for list
$lists = array();
$response = array();
if($_SERVER['REQUEST_METHOD']=='POST'){

	if (isset($_REQUEST['merchantId']) && !empty($_REQUEST['merchantId'])  ) {
		 	
		 	$merchant_id = $_REQUEST['merchantId'];
		    
		    //$getLoginData = userLogin($user_email,$nik);
		    $getMerchantTransDetails = "SELECT * FROM merchant_transactions WHERE merchant_id='$merchant_id' ";
		    $gettransData = $conn->query($getMerchantTransDetails);
		    $getgettransDataDetails = $gettransData->fetch_assoc();
		    //Set variable for session
		    if($gettransData->num_rows > 0) {

		    	$response["credit_amount"] = $getgettransDataDetails['credit_amount'];
		    	$response["created_at"] = $getgettransDataDetails['created_at'];
		    	$response["user_id"] = $getgettransDataDetails['user_id'];
		    	$response["success"] = 0;
				$response["message"] = "Keberhasilan!.";

		    } else {

		    	$response["success"] = 1;
				$response["message"] = "Tidak ditemukan rekaman!";
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