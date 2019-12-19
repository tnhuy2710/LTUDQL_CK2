<?php
    //include 'connect.php';
    $serverName = "10.100.26.34";
    $connectionInfo = array( "Database"=>"Alibaba", "CharacterSet" => "UTF-8", "UID"=>"QuanLyTSCNTT", "PWD"=>"QuanLyTSCNTT");
	$conn = sqlsrv_connect($serverName, $connectionInfo);
		
	if(!empty($_POST["gROUP_INFO"]))
	{
		$MA_NHOM = $_POST['gROUP_INFO'][0];
		$TEN_NHOM = $_POST['gROUP_INFO'][1];
		$GHI_CHU = $_POST['gROUP_INFO'][2];		
		
		$sql = "UPDATE NHOM_NGUOI_DUNG
				SET	TEN_NHOM = '$TEN_NHOM',
					GHI_CHU = '$GHI_CHU'
				WHERE MA_NHOM = '$MA_NHOM'";
		$iNSERT_NND = sqlsrv_query( $conn, $sql );
		if( $iNSERT_NND === false) {
			die( print_r( sqlsrv_errors(), true) );
			echo "Không thể thêm nhóm người dùng, xin vui lòng liên hệ hỗ trợ";
			exit();
		}			

		echo "Cập nhật thành công!";
	}	
	sqlsrv_free_stmt($iNSERT_NND);	
	sqlsrv_close($conn);
?>
