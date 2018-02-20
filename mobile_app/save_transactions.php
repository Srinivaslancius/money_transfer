<?php 
error_reporting(1);
include "../admin_includes/config.php";
include "../admin_includes/common_functions.php";
//Set Array for list
$lists = array();
$response = array();
if($_SERVER['REQUEST_METHOD']=='POST'){

	if (isset($_REQUEST['nik']) && !empty($_REQUEST['nik']) && !empty($_REQUEST['merchantId']) && !empty($_REQUEST['amount'])) {
		 	
		 	$user_nik_code = $_REQUEST['nik'];
		 	$merchantId = $_REQUEST['merchantId'];
		 	$userId = $_REQUEST['userId'];
		 	$debitAmount = $_REQUEST['amount'];		 	
		 	$created_at = date('Y-m-d H:i:s', time() + 24 * 60 * 60);

		 	$string1 = str_shuffle('abcdefghijklmnopqrstuvwxyz');
			$random1 = substr($string1,0,3);
			$string2 = str_shuffle('1234567890');
			$random2 = substr($string2,0,3);
			$contstr = "MONEY_TRANSFAR_ARBEIT";
			$transaction_id = $contstr.$random1.$random2;
		    
		    $saveTransactions = "INSERT INTO `user_transactions`(`merchant_id`, `user_id`, `debit_amount`, `transaction_id`, `user_nik_code`, `created_at`) VALUES ('$merchantId','$userId','$debitAmount','$transaction_id','$user_nik_code','$created_at')";
		    if($conn->query($saveTransactions) === TRUE) {

		    	$saveMerchantTransactions = "INSERT INTO `merchant_transactions`(`merchant_id`, `user_id`, `credit_amount`, `transaction_id`, `user_nik_code`, `created_at`) VALUES ('$merchantId','$userId','$debitAmount','$transaction_id','$user_nik_code','$created_at')";
		    	$conn->query($saveMerchantTransactions);

		    	$getUserAmount = getIndividualDetails('users','nik',$user_nik_code);
		    	$getUamnt=$getUserAmount['amount'];
		    	$getTotalamnt=$getUamnt-$debitAmount;
		    	//Update amount in users table
		    	$updateUserTransamnt = "UPDATE users SET amount='$getTotalamnt' WHERE nik='$user_nik_code' ";
		    	$conn->query($updateUserTransamnt);

		    	//Update amount in Merchants table
		    	$getMerchantAmount = getIndividualDetails('merchants','merchant_id',$merchantId);
		    	$getMeramnt=$getMerchantAmount['amount'];
		    	$getMerTotalamnt=$getMeramnt+$debitAmount;
		    	$updateMerchantTransamnt = "UPDATE merchants SET amount='$getMerTotalamnt' WHERE merchant_id='$merchantId' ";
		    	$conn->query($updateMerchantTransamnt);

		    	$response["success"] = 0;
		    	$response["transactionId"] = $transaction_id;
				$response["message"] = "Keberhasilan!";

		    } else {

		    	$response["success"] = 1;
				$response["message"] = "kesalahan!";
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