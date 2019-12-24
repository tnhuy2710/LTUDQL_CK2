<?php
		
	if(!empty($_POST["mA_ND"]))
	{
		$MA_ND = $_POST['mA_ND'];

		if(!empty($_POST["insert_GROUPS"]))
		{
			foreach($_POST["insert_GROUPS"] as $item)
			{
				$sql = "INSERT INTO PHAN_NHOM
						VALUES ('$MA_ND', '$item')";
				$iNSERT_NND = sqlsrv_query( $conn, $sql );
				if( $iNSERT_NND === false) {
					die( print_r( sqlsrv_errors(), true) );
					echo "Không thể thêm, xin vui lòng liên hệ hỗ trợ";
					exit();
				}
			}
		}

		if(!empty($_POST["delete_GROUPS"]))
		{
			foreach($_POST["delete_GROUPS"] as $item)
			{
				$sql = "DELETE FROM PHAN_NHOM
						WHERE MA_NGUOI_DUNG = '$MA_ND' AND MA_NHOM_NGUOI_DUNG = '$item' ";
				$dELETE_NND = sqlsrv_query( $conn, $sql );
				if( $dELETE_NND === false) {
					die( print_r( sqlsrv_errors(), true) );
					echo "Không thể xóa, xin vui lòng liên hệ hỗ trợ";
					exit();
				}
			}
		}
		echo "Cập nhật thành công!";
	}
	sqlsrv_free_stmt($iNSERT_NND);
	sqlsrv_free_stmt($iNSERT_NND);
	sqlsrv_close($conn);
?>
