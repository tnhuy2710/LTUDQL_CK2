<!DOCTYPE html>
<html>
    

<body>
            <?php
            $serverName = "10.100.26.34";
            $connectionInfo = array("Database" => "QuanLyTaiSanCNTT", "CharacterSet" => "UTF-8", "UID" => "QuanLyTSCNTT", "PWD" => "QuanLyTSCNTT");
            $conn = sqlsrv_connect($serverName, $connectionInfo);

            if (isset($_GET['pageno'])) {
                $pageno = $_GET['pageno'];
            } else {
                $pageno = 1;
            }
            $limit = 5;
            $no_of_records_per_page = $pageno * $limit;
            $offset = ($pageno - 1) * $limit;

            $total_pages_sql = "SELECT COUNT(*) AS total FROM THIETBI";
            $THIET_BI = sqlsrv_query($conn, $total_pages_sql);
            $total_rows = sqlsrv_fetch_array($THIET_BI, SQLSRV_FETCH_ASSOC);
            $total_pages = ceil($total_rows['total'] / $limit);            

            $sql = "WITH pagination AS (
                        SELECT 
                            ROW_NUMBER() OVER(
                                ORDER BY
                                    MATB
                            ) row_num, *
                        FROM
                            THIETBI
                    ) SELECT *
                    FROM 
                        pagination
                    WHERE 
                        row_num > $offset  AND
                        row_num <= $no_of_records_per_page";
            $res_data = sqlsrv_query($conn, $sql);
            while ($row = sqlsrv_fetch_array($res_data, SQLSRV_FETCH_ASSOC)) {                
                echo $row['MATB'] . '</br>';
                echo $row['TENTB'] . '</br>';
            }
            //echo $result;
            sqlsrv_close($conn);
            ?>
    <ul class="pagination">
        <li><a href="?pageno=1">First</a></li>
        <li class="<?php if ($pageno <= 1) {
                        echo 'disabled';
                    } ?>">
            <a href="<?php if ($pageno <= 1) {
                            echo '#';
                        } else {
                            echo "?pageno=" . ($pageno - 1);
                        } ?>">Prev</a>
        </li>
        <li class="<?php if ($pageno >= $total_pages) {
                        echo 'disabled';
                    } ?>">
            <a href="<?php if ($pageno >= $total_pages) {
                            echo '#';
                        } else {
                            echo "?pageno=" . ($pageno + 1);
                        } ?>">Next</a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul>
</body>

</html>