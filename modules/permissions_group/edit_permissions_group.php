<?php
		
	if(!empty($_POST["mA_NHOM"]))
	{
		$MA_NHOM = $_POST['mA_NHOM'];
		
		if(!empty($_POST["insert_PERMISSIONS"]))
		{
			foreach($_POST["insert_PERMISSIONS"] as $item)
			{				
				$sql = "INSERT INTO PHAN_QUYEN
						VALUES ('$MA_NHOM', '$item')";
				$iNSERT_PERS = sqlsrv_query( $conn, $sql );
				if($iNSERT_PERS === false) {
					die( print_r( sqlsrv_errors(), true) );
					echo "Không thể thêm, xin vui lòng liên hệ hỗ trợ";
					exit();
				}
			}
		}

		if(!empty($_POST["delete_PERMISSIONS"]))
		{
			foreach($_POST["delete_PERMISSIONS"] as $item)
			{
				$sql = "DELETE FROM PHAN_QUYEN
						WHERE MA_NHOM_NGUOI_DUNG = '$MA_NHOM' AND MA_CHUC_NANG = '$item' ";
				$dELETE_PERS = sqlsrv_query( $conn, $sql );
				if( $dELETE_PERS === false) {
					die( print_r( sqlsrv_errors(), true) );
					echo "Không thể xóa, xin vui lòng liên hệ hỗ trợ";
					exit();
				}
			}
		}
		echo "Lưu thành công!";
	}
	sqlsrv_free_stmt($iNSERT_PERS);
	sqlsrv_free_stmt($dELETE_PERS);
	sqlsrv_close($conn);
?>
