<?php 
error_reporting(1);
include "../admin_includes/config.php";
include "../admin_includes/common_functions.php";
//Set Array for list
$lists = array();
$response = array();
if($_SERVER['REQUEST_METHOD']=='POST'){

	if (isset($_REQUEST['nik']) && !empty($_REQUEST['nik'])  ) {
		 	
		 	$nik = $_REQUEST['nik'];
		    
		    //$getLoginData = userLogin($user_email,$nik);
		    $getLoginData1 = "SELECT * FROM users WHERE nik='$nik' AND lkp_status_id=0";
		    $getLoginData = $conn->query($getLoginData1);
		    //Set variable for session
		    if($getLoggedInDetails = $getLoginData->fetch_assoc()) {
		    	$last_login_visit = date("Y-m-d h:i:s");
		    	$login_count = $getLoggedInDetails['login_count']+1;
		    	$sql = "UPDATE `users` SET login_count='$login_count', last_login_visit='$last_login_visit' WHERE user_email = '$user_email' ";
		    	$row = $conn->query($sql);		 
		    	$response["id"] = $getLoggedInDetails['id'];
		    	$response["userId"] = $getLoggedInDetails['user_id'];
		    	$response["userName"] = $getLoggedInDetails['user_full_name'];
		    	$response["userEmail"] = $getLoggedInDetails['user_email'];
		    	$response["userMobile"] = $getLoggedInDetails['user_mobile'];
		    	$response["amount"] = $getLoggedInDetails['amount'];
		    	$response["authKey"] = $getLoggedInDetails['auth_key'];
		    	$response["createdAt"] = $getLoggedInDetails['created_at'];
		    	$response["birthPlace"] = $getLoggedInDetails['birth_place'];
		    	$response["dob"] = $getLoggedInDetails['dob'];
		    	$response["validUntil"] = $getLoggedInDetails['valid_until'];
		    	if($getLoggedInDetails['valid_until'] == 1) {
		    		$gender = "Male";
		    	} else {
		    		$gender = "Female";
		    	}
		    	$response["gender"] = $gender;
		    	$response["address"] = $getLoggedInDetails['address'];
		    	$response["rt/rw"] = $getLoggedInDetails['rt/rw'];
		    	$response["ex/village"] = $getLoggedInDetails['ex/village'];		    	
		    	$response["userImage"] = $base_url."uploads/user_images/".$getLoggedInDetails["user_image"];
		    	$response["success"] = 0;
				$response["message"] = "Keberhasilan!.";
			} else {

				$response["success"] = 1;
				$response["message"] = "Silahkan masukkan nomor NIK yang valid!";
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