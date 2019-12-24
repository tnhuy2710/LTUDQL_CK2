	<?php
	$serverName = "10.100.26.34";
	$connectionInfo = array("Database" => "DB_PQChiPhi", "CharacterSet" => "UTF-8", "UID" => "user", "PWD" => "Klb123456");
	$conn = sqlsrv_connect($serverName, $connectionInfo);

	if (isset($_POST["pageno"])) {
		$pageno = $_POST["pageno"];
	} else {
		$pageno = 1;
	}
	$limit = 5;
	$no_of_records_per_page = $pageno * $limit;
	$offset = ($pageno - 1) * $limit;

	$total_pages_sql = "SELECT COUNT(*) AS total FROM NGUOI_DUNG";
	$THIET_BI = sqlsrv_query($conn, $total_pages_sql);
	$total_rows = sqlsrv_fetch_array($THIET_BI, SQLSRV_FETCH_ASSOC);
	$total_pages = ceil($total_rows['total'] / $limit);

	$q_PHAN_NHOM = "SELECT pn.*, nnd.TEN_NHOM
						FROM PHAN_NHOM pn
						INNER JOIN NHOM_NGUOI_DUNG nnd ON nnd.MA_NHOM = pn.MA_NHOM_NGUOI_DUNG";

	$PHAN_NHOM = sqlsrv_query($conn, $q_PHAN_NHOM);
	if ($PHAN_NHOM === false) {
		die(print_r(sqlsrv_errors(), true));
	}

	$pHAN_NHOM = array();
	while ($pn = sqlsrv_fetch_array($PHAN_NHOM, SQLSRV_FETCH_ASSOC)) {
		array_push($pHAN_NHOM, $pn);
	}
	sqlsrv_free_stmt($PHAN_NHOM);

	$result .= '
		<table class="table table-hover table-dark">
		<thead>
			<tr style="background-color: #d9d9d9">
				<th scope="col">Mã người dùng</th>
				<th scope="col">Tên người dùng</th>
				<th scope="col">Đơn vị</th>
				<th scope="col">Nhóm</th>
				<th scope="col">Email</th>
			</tr>
		</thead>';

	if (!empty($_POST["DON_VI"])) {
		$DON_VI = $_POST["DON_VI"];
		$sql = "WITH pagination AS (
			SELECT 
				ROW_NUMBER() OVER(
					ORDER BY
					MA_ND
				) row_num, *
			FROM
				NGUOI_DUNG nd
		) SELECT *
		FROM 
			pagination
			INNER JOIN DON_VI dv ON pagination.MA_DON_VI = dv.MA_DON_VI
		WHERE 
			(row_num > $offset  AND
			row_num <= $no_of_records_per_page) AND			
			pagination.MA_DON_VI = $DON_VI";

		$stmt = sqlsrv_query($conn, $sql);
		if ($stmt === false) {
			die(print_r(sqlsrv_errors(), true));
		}

		while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
			$result .= '<tr>';
			$result .= '<td scope="row">' . $row['MA_ND'] . '</td>';
			$result .= '<td>' . $row['TEN_ND'] .  '</td>';
			$result .= '<td>' . $row['TEN_DON_VI'] .  '</td>';
			$result .= '<td>';
			$temp = "";
			foreach ($pHAN_NHOM as $item) {
				if ($item['MA_NGUOI_DUNG'] === $row['MA_ND']) {
					$result .= $item['TEN_NHOM'] . '<br>';
					$temp .= $item['MA_NHOM_NGUOI_DUNG'] . '_';
				}
			}

			$result .= '</td>';
			$result .= '<td>' . $row['EMAIL'] . '</td>';
			$result .= '<td> <i id="'
				. $row['MA_ND'] . ','
				. $row['TEN_ND'] . ','
				. $row['MA_DON_VI'] . ','
				. $row['TEN_DON_VI'] . ','
				. $row['EMAIL'] . ','
				. $temp
				. '" class="fa fa-pencil-square-o" style="color: #17a2b8;font-size: 18px;cursor:pointer;"
								onclick="Edit(this.id)"></i>
							</td>';
			$result .= '<td>
							<i type="button" data-toggle="modal" data-target="#exampleModal">
								<i id="' . $row['MA_ND']
				. '" class="fa fa-trash-o" style="color: red;font-size: 18px;cursor: pointer;" 
								onclick="Delete(this.id)"></i>
							</i>
						</td>';
			$result .= '</tr>';
		}
	} else {
		$sql = "WITH pagination AS (
			SELECT 
				ROW_NUMBER() OVER(
					ORDER BY
					MA_ND
				) row_num, *
			FROM
				NGUOI_DUNG nd
		) SELECT *
		FROM 
			pagination
		WHERE 
			row_num > $offset  AND
			row_num <= $no_of_records_per_page";


		$stmt = sqlsrv_query($conn, $sql);
		if ($stmt === false) {
			die(print_r(sqlsrv_errors(), true));
		}

		while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
			$result .= '<tr>';
			$result .= '<td scope="row">' . $row['MA_ND'] . '</td>';
			$result .= '<td>' . $row['TEN_ND'] .  '</td>';
			$result .= '<td>' . $row['TEN_DON_VI'] .  '</td>';
			$result .= '<td>';
			$temp = "";
			foreach ($pHAN_NHOM as $item) {
				if ($item['MA_NGUOI_DUNG'] === $row['MA_ND']) {
					$result .= $item['TEN_NHOM'] . '<br>';
					$temp .= $item['MA_NHOM_NGUOI_DUNG'] . '_';
				}
			}

			$result .= '</td>';
			$result .= '<td>' . $row['EMAIL'] . '</td>';
			$result .= '<td> <i id="'
				. $row['MA_ND'] . ','
				. $row['TEN_ND'] . ','
				. $row['MA_DON_VI'] . ','
				. $row['TEN_DON_VI'] . ','
				. $row['EMAIL'] . ','
				. $temp
				. '" class="fa fa-pencil-square-o" style="color: #17a2b8;font-size: 18px;cursor:pointer;"
							onclick="Edit(this.id)"></i>
						</td>';
			$result .= '<td>
						<i type="button" data-toggle="modal" data-target="#exampleModal">
							<i id="' . $row['MA_ND']
				. '" class="fa fa-trash-o" style="color: red;font-size: 18px;cursor: pointer;" 
							onclick="Delete(this.id)"></i>
						</i>
					</td>';
			$result .= '</tr>';
		}
	}
	$result .= '</table>';
	$result .= '<ul class="pagination">
					<li class="page-item"><a class="page-link" href="?pageno=1">First</a></li>';
	$result .= '<li class="page-item ';
	if ($pageno <= 1) {
		$result .= 'disabled';
	}
	$result .= '">';
	$result .= '<a class="page-link" href="';
	if ($pageno <= 1) {
		$result .= '#';
	} else {
		$result .= "?pageno=" . ($pageno - 1);
	}
	$result .= '">Prev</a>	</li>';

	for($i=1; $i <= $total_pages; $i++)
	{
		$result .= '<li class="page-item"><a class="page-link" href="?pageno=' . $i . '">' . $i .'</a></li>';		
	}

	$result .= '<li class="page-item ';
	if ($pageno >= $total_pages) {
		$result .= 'disabled';
	}
	$result .= '">';
	$result .= '<a class="page-link" href="';
	if ($pageno >= $total_pages) {
		$result .= '#';
	} else {
		$result .= "?pageno=" . ($pageno + 1);
	}
	$result .= '">Next</a>	</li>';
	$result .= '<li class="page-item"><a class="page-link" href="?pageno=' . $total_pages;	
	$result .= '">Last</a></li>		</ul>';

	echo $result;
	sqlsrv_free_stmt($stmt);
	sqlsrv_close($conn);
	?>
