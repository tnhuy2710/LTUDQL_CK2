<?php
	//include 'connect.php';
	$serverName = "10.100.26.34";
	$connectionInfo = array("Database" => "Alibaba", "CharacterSet" => "UTF-8", "UID" => "QuanLyTSCNTT", "PWD" => "QuanLyTSCNTT");
	$conn = sqlsrv_connect($serverName, $connectionInfo);

	if (!empty($_POST["uSER_INFO"])) {
		$MA_ND = $_POST['uSER_INFO'][0];
		$TEN_ND = $_POST['uSER_INFO'][1];
		$MA_DON_VI = $_POST['uSER_INFO'][2];
		$EMAIL = $_POST['uSER_INFO'][3];

		$sql = "SELECT *
					FROM NGUOI_DUNG
					WHERE MA_ND = '$MA_ND'";
		$stmt = sqlsrv_query($conn, $sql);
		if ($stmt === false) {
			die(print_r(sqlsrv_errors(), true));
		}
		if ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
			echo "Đã có thông tin của người dùng này!";
		} else {
			$sql = "INSERT INTO NGUOI_DUNG
						VALUES ('$MA_ND', '$TEN_ND', '$MA_DON_VI', '$EMAIL')";
			$iNSERT_ND = sqlsrv_query($conn, $sql);
			if ($iNSERT_ND === false) {
				die(print_r(sqlsrv_errors(), true));
				echo "Không thể thêm người dùng, xin vui lòng liên hệ hỗ trợ";
				exit();
			}

			if (!empty($_POST["new_GROUPS"])) {
				foreach ($_POST["new_GROUPS"] as $item) {
					$sql = "INSERT INTO PHAN_NHOM
								VALUES ('$MA_ND', '$item')";
					$iNSERT_NND = sqlsrv_query($conn, $sql);
					if ($iNSERT_NND === false) {
						die(print_r(sqlsrv_errors(), true));
						echo "Không thể thêm, xin vui lòng liên hệ hỗ trợ";
						exit();
					}
				}
			}

			echo "Thêm thành công!";
		}
	}
	sqlsrv_free_stmt($stmt);
	sqlsrv_free_stmt($iNSERT_ND);
	sqlsrv_free_stmt($iNSERT_NND);
	sqlsrv_close($conn);
?>
