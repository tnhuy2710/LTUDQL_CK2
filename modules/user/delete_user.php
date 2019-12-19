<?php
    //include 'connect.php';
    $serverName = "10.100.26.34";
    $connectionInfo = array( "Database"=>"Alibaba", "CharacterSet" => "UTF-8", "UID"=>"QuanLyTSCNTT", "PWD"=>"QuanLyTSCNTT");
	$conn = sqlsrv_connect($serverName, $connectionInfo);
		
	if(!empty($_POST["MA_ND"]))
	{
		$MA_ND = $_POST['MA_ND'];
		$sql = "DELETE FROM PHAN_NHOM
				WHERE MA_NGUOI_DUNG = '$MA_ND'";
		$dELETE_NND = sqlsrv_query( $conn, $sql );
		if( $dELETE_NND === false) {
			die( print_r( sqlsrv_errors(), true) );
			echo "Không thể xóa nhóm người dùng, xin vui lòng liên hệ hỗ trợ";
			exit();
		} 
		
      	$sql = "DELETE FROM NGUOI_DUNG
		  		WHERE MA_ND = '$MA_ND'";      
		$dELETE_ND = sqlsrv_query( $conn, $sql );
		if( $dELETE_ND === false) {
			die( print_r( sqlsrv_errors(), true) );
			echo "Không thể xóa người dùng, xin vui lòng liên hệ hỗ trợ";
			exit();
		}
				
		echo "Xóa thành công!";				
	}	
	sqlsrv_free_stmt($dELETE_ND);
	sqlsrv_free_stmt($dELETE_NND);
	sqlsrv_close($conn);
?>
