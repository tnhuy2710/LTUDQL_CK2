<?php
    //include 'connect.php';
    $serverName = "10.100.26.34";
    $connectionInfo = array( "Database"=>"Alibaba", "CharacterSet" => "UTF-8", "UID"=>"QuanLyTSCNTT", "PWD"=>"QuanLyTSCNTT");
	$conn = sqlsrv_connect($serverName, $connectionInfo);
		
	if(!empty($_POST["gROUP_INFO"]))
	{
		$MA_NHOM = $_POST['gROUP_INFO'][0];
		$TEN_NHOM = $_POST["gROUP_INFO"][1];		
		$GHI_CHU = $_POST["gROUP_INFO"][2];		

		$sql = "SELECT *
				FROM NHOM_NGUOI_DUNG
				WHERE MA_NHOM = '$MA_NHOM'";
		$stmt = sqlsrv_query( $conn, $sql );
		if( $stmt === false) {
			die( print_r( sqlsrv_errors(), true) );
		}		
		if($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC))
		{
			echo "Đã có thông tin của nhóm người dùng này!";
		}		
		else
		{
			$sql = "INSERT INTO NHOM_NGUOI_DUNG
					VALUES ('$MA_NHOM', '$TEN_NHOM', '$GHI_CHU')";
			$iNSERT_NND = sqlsrv_query( $conn, $sql );
			if( $iNSERT_NND === false) {
				die( print_r( sqlsrv_errors(), true) );
				echo "Không thể thêm nhóm người dùng, xin vui lòng liên hệ hỗ trợ";
				exit();
			}

			echo "Thêm thành công!";
		}
	}
	sqlsrv_free_stmt($stmt);
	sqlsrv_free_stmt($iNSERT_ND);
	sqlsrv_free_stmt($iNSERT_NND);
	sqlsrv_close($conn);
?>
