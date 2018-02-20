<?php 
error_reporting(1);
include "../admin_includes/config.php";
include "../admin_includes/common_functions.php";
//Set Array for list
$lists = array();
$response = array();
if($_SERVER['REQUEST_METHOD']=='POST'){

	if (isset($_REQUEST['userId']) && !empty($_REQUEST['userId'])  ) {
		 	
		 	$user_id = $_REQUEST['userId'];
		    
		    //$getLoginData = userLogin($user_email,$nik);
		    $getMerchantTransDetails = "SELECT * FROM user_transactions WHERE user_id='$user_id' ";
		    $gettransData = $conn->query($getMerchantTransDetails);
		    $getgettransDataDetails = $gettransData->fetch_assoc();
		    //Set variable for session
		    if($gettransData->num_rows > 0) {

		    	$response["debit_amount"] = $getgettransDataDetails['debit_amount'];
		    	$response["created_at"] = $getgettransDataDetails['created_at'];
		    	$response["merchant_id"] = $getgettransDataDetails['merchant_id'];
		    	$response["success"] = 0;
				$response["message"] = "Keberhasilan.";

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