<?php
    $serverName = "10.100.26.34";
    $connectionInfo = array("Database" => "Alibaba", "CharacterSet" => "UTF-8", "UID" => "QuanLyTSCNTT", "PWD" => "QuanLyTSCNTT");
    $conn = sqlsrv_connect($serverName, $connectionInfo);

    $q_NHOM_ND = "SELECT *
                FROM NHOM_NGUOI_DUNG";

    $NHOM_ND = sqlsrv_query($conn, $q_NHOM_ND);
    if ($NHOM_ND === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    $q_CHUC_NANG = "SELECT *
                    FROM PHAN_QUYEN";
    $r_CHUC_NANG = sqlsrv_query($conn, $q_CHUC_NANG);
    $cHUC_NANG = array();
    while ($item = sqlsrv_fetch_array($r_CHUC_NANG, SQLSRV_FETCH_ASSOC)) {
        array_push($cHUC_NANG, $item);
    }
?>

<div class="content" style="background-color: #ecf0f5;">
    <main>
        <section class="container" id="phan-quyen">
            <h1 class="title">PHÂN QUYỀN</h1>
            <form method="post" action="">
                <div class="chon-nhom">
                    <label for="">Chọn nhóm người dùng:</label>
                    <select class="form-control" name="MA_NHOM" id="MA_NHOM" onchange="Change(this.id)">
                        <?php
                            echo '<option value="0"> Xin chọn nhóm người dùng </option>';
                            $NHOM_ND = sqlsrv_query($conn, $q_NHOM_ND);
                            while ($row = sqlsrv_fetch_array($NHOM_ND, SQLSRV_FETCH_ASSOC)) {
                                $MA_NHOM = $row['MA_NHOM'];
                                foreach ($cHUC_NANG as $item) {
                                    if ($item['MA_NHOM_NGUOI_DUNG'] === $row['MA_NHOM']) {
                                        $MA_NHOM .= "_" .  $item['MA_CHUC_NANG'];
                                    }
                                }
                                echo '<option value="' . $MA_NHOM . '">' . $row['TEN_NHOM'] . '</option>';
                            }
                            sqlsrv_free_stmt($NHOM_ND);
                            sqlsrv_free_stmt($CHUC_NANG);
                        ?>

                        <?php
                            $q_DM_CHUC_NANG = "SELECT MA_CHUC_NANG
                                                FROM DM_CHUC_NANG";

                            $DM_CHUC_NANG = sqlsrv_query($conn, $q_DM_CHUC_NANG);
                            while ($item = sqlsrv_fetch_array($DM_CHUC_NANG, SQLSRV_FETCH_ASSOC)) {
                                $ds_CHUC_NANG .= $item['MA_CHUC_NANG'] . "_";
                            }
                            echo '<input type=hidden id="DM_CHUC_NANG" value="' . $ds_CHUC_NANG . '"/>';
                        ?>
                    </select>
                </div>

                <div class="phan-quyen">
                    <ul class="bang-pq">
                        <li class="rowc1">
                            <a class="menuc1">
                                <span>MENU</span>
                                <ul>
                                    <li>Quyền</li>
                                </ul>
                            </a>
                        </li>
                        <li class="rowc1">
                            <a class="menuc1">
                                <span>DANH MỤC</span>
                                <ul>
                                    <li>
                                        <div class="squaredcheck">
                                            <input type="checkbox" id="squaredcheck1" name="squaredcheck1" value="1" />
                                            <label for="squaredcheck1"></label>
                                        </div>
                                    </li>
                                </ul>
                            </a>
                        </li>
                        <li class="rowc1">
                            <a class="menuc1">
                                <span>BÁO CÁO</span>
                                <ul>
                                    <li>
                                        <div class="squaredcheck">
                                            <input type="checkbox" id="squaredcheck2" name="squaredcheck2" value="2" />
                                            <label for="squaredcheck2"></label>
                                        </div>
                                    </li>
                                </ul>
                            </a>
                        </li>
                        <li class="rowc1">
                            <a class="menuc1">
                                <span>DUYỆT</span>
                                <ul>
                                    <li>
                                        <div class="squaredcheck">
                                            <input type="checkbox" id="squaredcheck3" name="squaredcheck3" value="3" />
                                            <label for="squaredcheck3"></label>
                                        </div>
                                    </li>
                                </ul>
                            </a>
                        </li>
                    </ul>
                </div>
            </form>
            <button type="submit" class="btn btn-primary" id="SAVE" name="SAVE" value="save"">LƯU</button>
        <button type=" submit" class="btn btn-default" id="CANCEL" name="CANCEL" value="cancel">LÀM MỚI</button>
        </section>
    </main>
</div>

<div class="modal fade" id="attentionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="attention" class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" id="OK" class="btn btn-primary" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>

<?php
    sqlsrv_close($conn);
?>





<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery(".main-table").clone(true).appendTo('#table-scroll').addClass('clone');

        //Sửa phân quyền
        $("#SAVE").click(function() {
            if ($("#MA_NHOM").val() == 0) {
                $('#attention').html("Xin chọn nhóm người dùng");
                $('#attentionModal').modal('show');
            } else {
                var insert_PERMISSIONS = [];
                var check = $("#DM_CHUC_NANG").val();
                check = check.split("_");
                for (var i = 0; i < check.length - 1; i++) {
                    if (document.getElementById("squaredcheck" + check[i]).checked) {
                        insert_PERMISSIONS.push($("#squaredcheck" + check[i]).val());
                    }
                }

                var delete_PERMISSIONS = [];
                var oLD = $("#MA_NHOM").val();
                oLD = oLD.split("_");
                for (var i = 1; i < oLD.length; i++) {
                    if (!document.getElementById("squaredcheck" + oLD[i]).checked) {
                        delete_PERMISSIONS.push(oLD[i]);
                    }
                    if (jQuery.inArray(oLD[i], insert_PERMISSIONS) > -1) {
                        insert_PERMISSIONS.splice(jQuery.inArray(oLD[i], insert_PERMISSIONS), 1);
                    }
                }

                mA_NHOM = oLD[0];

                $.ajax({
                    type: "POST",
                    url: "http://localhost/phan_quyen_chi_phi/modules/permissions_group/edit_permissions_group.php",
                    data: {
                        mA_NHOM,
                        insert_PERMISSIONS,
                        delete_PERMISSIONS
                    },
                    success: function(result) {
                        $('#attention').html(result);
                        $('#attentionModal').modal('show');
                    }
                });
            }
        });

        //Cancel
        $("#OK").click(function() {
            location.reload(true);
        });

        //Cancel
        $("#CANCEL").click(function() {
            location.reload(true);
        });
    });

    function check() {
        var item = document.getElementsByName("check");
        for (var i = 0; i < item.length; i++) {
            if (item[i].checked == true) {
                console.log(item[i].value);
            };
        }
    };

    function Change(id) {
        var dm_CHUC_NANG = document.getElementById("DM_CHUC_NANG").value;
        dm_CHUC_NANG = dm_CHUC_NANG.split("_");
        for (var i = 0; i < dm_CHUC_NANG.length - 1; i++) {
            document.getElementById("squaredcheck" + dm_CHUC_NANG[i]).checked = false;
        }
        if (id != null) {
            var item = document.getElementById(id).value;
            item = item.split("_");
            for (var i = 1; i < item.length; i++) {
                document.getElementById("squaredcheck" + item[i]).checked = true;
            }
        }
    };
</script>

<style type="text/css">
    main #phan-quyen {
        margin-top: 50px;
        margin-bottom: 180px;
        background-color: #f9f9f9;
    }

    main #phan-quyen .chon-nhom {
        margin-bottom: 30px;
    }

    main #phan-quyen .chon-nhom select {
        width: 300px;
        height: 30px;
        margin-left: 10px;
    }

    main #phan-quyen .phan-quyen {
        width: 100%;
    }

    main #phan-quyen .phan-quyen a,
    main #phan-quyen .phan-quyen span {
        color: #353b3b;
        font-size: 0.9em;
        font-weight: 500;
        cursor: default;
    }

    main #phan-quyen .phan-quyen input {
        cursor: pointer;
    }

    main #phan-quyen .phan-quyen .bang-pq {
        width: 100%;
        margin-bottom: 50px;
    }

    main #phan-quyen .phan-quyen .bang-pq .rowc1 {
        width: 100%;
    }

    main #phan-quyen .phan-quyen .bang-pq .rowc1 .squaredcheck {
        position: relative;
        margin: 0px auto;
        width: 20px;
        height: 18px;
    }

    main #phan-quyen .phan-quyen .bang-pq .rowc1 .squaredcheck label {
        width: 21px;
        height: 21px;
        cursor: pointer;
        position: absolute;
        top: -3px;
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
        border: 2px solid gray;
        background: white;
        border-radius: 4px;
        z-index: 0;
    }

    main #phan-quyen .phan-quyen .bang-pq .rowc1 .squaredcheck label:after {
        content: "";
        width: 10px;
        height: 5px;
        position: absolute;
        top: 5px;
        left: 5px;
        border: 2px solid #fff;
        border-top: none;
        border-right: none;
        background: transparent;
        opacity: 0;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
    }

    main #phan-quyen .phan-quyen .bang-pq .rowc1 .squaredcheck label:hover::after {
        opacity: 0;
    }

    main #phan-quyen .phan-quyen .bang-pq .rowc1 .squaredcheck input[type="checkbox"] {
        visibility: hidden;
    }

    main #phan-quyen .phan-quyen .bang-pq .rowc1 .squaredcheck input[type="checkbox"]:checked+label {
        background: #d73347;
        border: none;
    }

    main #phan-quyen .phan-quyen .bang-pq .rowc1 .squaredcheck input[type="checkbox"]:checked+label:after {
        opacity: 1;
    }

    main #phan-quyen .phan-quyen .bang-pq .rowc1 .squaredcheck input[type="checkbox"].checkbox2+label {
        background: #67cead;
    }

    main #phan-quyen .phan-quyen .bang-pq .rowc1 .squaredcheck input[type="checkbox"].checkbox2:checked+label {
        background: #329d7b;
    }

    main #phan-quyen .phan-quyen .bang-pq .rowc1 .squaredcheck input[type="checkbox"].checkbox3+label {
        background: #eeccff;
    }

    main #phan-quyen .phan-quyen .bang-pq .rowc1 .squaredcheck input[type="checkbox"].checkbox3:checked+label {
        background: #cc66ff;
    }

    main #phan-quyen .phan-quyen .bang-pq .rowc1 .menuc1 {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        width: 100%;
        background-color: #daf1f3;
    }

    main #phan-quyen .phan-quyen .bang-pq .rowc1 .menuc1 span {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        width: 25%;
        min-height: 40px;
        border-bottom: 0.5px solid #555555;
        padding-left: 5px;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        cursor: pointer;
    }

    main #phan-quyen .phan-quyen .bang-pq .rowc1 .menuc1 ul {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        width: 75%;
    }

    main #phan-quyen .phan-quyen .bang-pq .rowc1 .menuc1 ul li {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        width: 20%;
        min-height: 40px;
        border-bottom: 0.5px solid #555555;
        padding-left: 5px;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    main #phan-quyen .phan-quyen .bang-pq .rowc1 ul .rowc2 {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        width: 100%;
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        justify-content: flex-end;
    }

    main #phan-quyen .phan-quyen .bang-pq .rowc1 ul .rowc2 .menuc2 {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        width: 22%;
        min-height: 40px;
        border-bottom: 0.5px solid #555555;
        padding-left: 5px;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    main #phan-quyen .phan-quyen .bang-pq .rowc1 ul .rowc2 ul {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        width: 75%;
    }

    main #phan-quyen .phan-quyen .bang-pq .rowc1 ul .rowc2 ul li {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        width: 20%;
        min-height: 40px;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        border-bottom: 0.5px solid #555555;
        padding-left: 5px;
        text-align: center;
    }

    main #phan-quyen .phan-quyen .bang-pq .rowc1::nth-type(1) {
        background-color: #daf1f3;
    }
</style>