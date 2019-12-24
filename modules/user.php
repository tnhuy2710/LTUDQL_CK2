<?php
  //include 'connect.php';
  $serverName = "10.100.26.34";
	$connectionInfo = array("Database" => "DB_PQChiPhi", "CharacterSet" => "UTF-8", "UID" => "user", "PWD" => "Klb123456");
	$conn = sqlsrv_connect($serverName, $connectionInfo);

  $q_DON_VI = "SELECT *
              FROM DON_VI";
  $DON_VI = sqlsrv_query($conn, $q_DON_VI);
  if ($DON_VI === false) {
    die(print_r(sqlsrv_errors(), true));
  }

  $q_NHOM_ND = "SELECT *
                FROM NHOM_NGUOI_DUNG";
  $NHOM_ND = sqlsrv_query($conn, $q_NHOM_ND);
  if ($NHOM_ND === false) {
    die(print_r(sqlsrv_errors(), true));
  }

  // $q_PHAN_NHOM = "SELECT nd.MA_ND, nnd.MA_NHOM, nnd.TEN_NHOM
  //                 FROM NGUOI_DUNG nd                
  //                 INNER JOIN PHAN_NHOM pn ON pn.MA_NGUOI_DUNG = nd.MA_ND
  //                 INNER JOIN NHOM_NGUOI_DUNG nnd ON nnd.MA_NHOM = pn.MA_NHOM_NGUOI_DUNG";
  // $PHAN_NHOM = sqlsrv_query( $conn, $q_PHAN_NHOM );
  // if( $PHAN_NHOM === false) {
  //   die( print_r( sqlsrv_errors(), true) );    
  // }



  //   $q_NGUOI_DUNG = "SELECT DISTINCT nd.*, dv.TEN_DON_VI, nnd.*
  //                   FROM NGUOI_DUNG nd
  //                   LEFT JOIN PHAN_NHOM pn ON nd.MA_ND = pn.MA_NGUOI_DUNG
  //                   LEFT JOIN NHOM_NGUOI_DUNG nnd ON nnd.MA_NHOM = pn.MA_NHOM_NGUOI_DUNG
  //                   LEFT JOIN DON_VI dv ON nd.MA_DON_VI = dv.MA_DON_VI;";
  //   $NGUOI_DUNG = sqlsrv_query( $conn, $q_NGUOI_DUNG );
  //   if( $NGUOI_DUNG === false) {
  //     die( print_r( sqlsrv_errors(), true) );
  //   }

  //   $array = array();
  //   $check = array();
  //   while( $row = sqlsrv_fetch_array( $NGUOI_DUNG, SQLSRV_FETCH_ASSOC) ) {    
  //     $new_array = array(
  //       'MA_ND' => $row['MA_ND'],
  //       'TEN_ND' => $row['TEN_ND'],
  //       'MA_DON_VI' => $row['MA_DON_VI'],
  //       'DIEN_THOAI' => $row['DIEN_THOAI'],
  //       'EMAIL' => $row['EMAIL']
  //     );


  //     $array[] = $new_array;      
  //     if(in_array($row['MA_ND'], $array[1]['MA_ND']))
  //     {
  //         echo "YeS";          
  //     }
  // }  
?>

<div class="content" style="background-color: #ecf0f5;">
  <main>
    <section class="container" id="nguoi-dung">
      <h1 class="title">NGƯỜI DÙNG</h1>
      <div class="div-nd">
        <div class="them-nd">
          <form method="post" action="">
            <div class="form-group">
              <label for="">Mã ND:</label>
              <div style="display: flex">
                <input class="form-control" style="width: 209px" id="MA_ND" name="MA_ND" placeholder="" />
                <div id="loading" class="lds-ring">
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="">Tên ND:</label>
              <input class="form-control" id="TEN_ND" name="TEN_ND" aria-describedby="emailHelp" placeholder="" readonly="readonly" />
            </div>
            <div style="display: inline">
              <label for="">Nhóm người dùng:</label>
              <?php
                while ($row = sqlsrv_fetch_array($NHOM_ND, SQLSRV_FETCH_ASSOC)) {
                  echo '<div class="form-check">';
                  echo '<label>';
                  echo '<input type="checkbox"
                                                    value="' . $row['MA_NHOM'] . '"
                                                    id="' . $row['MA_NHOM']    . '"
                                                    name="' . $row['MA_NHOM']  . '"/> <span class="label-text" style="font: message-box;">'
                    . $row['TEN_NHOM'] . '</span><br>';
                  $nHOM_ND .= $row['MA_NHOM'] . ',';
                  echo '</label>';
                  echo '</div>';
                }
                sqlsrv_free_stmt($NHOM_ND);
                echo '<input type="hidden" id="NHOM_ND" name="NHOM_ND" value="' . $nHOM_ND . '"/>';
              ?>
            </div>

            <div class="form-group">
              <input type="hidden" class="form-control" id="OLD_GROUPS" aria-describedby="emailHelp" placeholder="" readonly="readonly" />
            </div>

            <div class="form-group">
              <label for="">Đơn vị:</label>
              <option class="form-control" id="MA_DON_VI" name="MA_DON_VI" placeholder="" readonly="readonly"></option>
            </div>
            <div class="form-group">
              <label for="">Email:</label>
              <input type="email" class="form-control" id="EMAIL" name="EMAIL" aria-describedby="emailHelp" placeholder="" readonly="readonly">
            </div>
            <div class="form-group">
              <input type="hidden" class="form-control" id="d_MA_ND" aria-describedby="emailHelp" placeholder="" readonly="readonly" />
            </div>
            <input type="hidden" id="pageno" value="<?php echo $_GET["pageno"] ?>"/>
          </form>
          <button class="btn btn-primary" id="SAVE" name="SAVE" value="save">THÊM</button>
          <div id="e_NGUOI_DUNG">
            <button type="submit" class="btn btn-primary" id="EDIT" name="EDIT" value="edit">CẬP NHẬT</button>
            <button type="submit" class="btn btn-default" id="CANCEL" name="CANCEL">HỦY</button>
          </div>
        </div>
        <div class="ds-nd">
          <h4 class="sub-title">
            Danh sách người dùng
          </h4>
          <div class="loc" style="margin-bottom: 11px">
            <div class="div-filter">
              <div class="filter">
                <label for="">Đơn vị: </label>
                <select class="form-control" style="width: 20%; display: inline; margin-left: 10px" name="s_DON_VI" id="s_DON_VI">
                  <?php
                    echo '<option value="0"> Xin chọn đơn vị </option>';
                    $DON_VI = sqlsrv_query($conn, $q_DON_VI);
                    while ($row = sqlsrv_fetch_array($DON_VI, SQLSRV_FETCH_ASSOC)) {
                      echo '<option value="' . $row['MA_DON_VI'] . '">' . $row['MA_DON_VI'] . '--' . $row['TEN_DON_VI'] . '</option>';
                    }
                    sqlsrv_free_stmt($DON_VI);
                  ?>
                </select>
              </div>
            </div>
          </div>

          <div class="nguoi-dung">
            <div id="show">
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Bạn muốn xóa người dùng này hả?
      </div>
      <div class="modal-footer">
        <button type="submit" id="DELETE" name="DELETE" class="btn btn-primary">Đúng oy</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Không phải</button>
      </div>
    </div>
  </div>
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
    document.getElementById("e_NGUOI_DUNG").style.display = "none";
    $("#loading").hide();

    //Show người dùng
    var pageno = $("#pageno").val();
    var DON_VI = "";
    $.ajax({      
      type: "POST",
      url: "http://localhost/phan_quyen_chi_phi/modules/user/get_user_by_DV.php",
      data: {pageno, DON_VI},
      success: function(result) {
        $("#show").html(result);
      }
    });

    //Show người dùng theo mã người dùng
    $("#MA_ND").change(function() {
      $("#loading").show();
      var MA_ND = $(this).val();
      var i_MA_ND = "MA_ND=" + MA_ND;

      $.ajax({
        type: "POST",
        url: "http://localhost/phan_quyen_chi_phi/modules/user/login_webservice.php",
        data: i_MA_ND,
        success: function(result) {
          $("#loading").hide();

          result = result.split("^");

          $("#TEN_ND").val(result[2]);
          if (result[6] == null) {
            $("#MA_DON_VI").val(0);
            $("#MA_DON_VI").html("");
          } else {
            $("#MA_DON_VI").val(result[5]);
            $("#MA_DON_VI").html(result[6]);
          }
          $("#EMAIL").val(result[4]);
        }
      });
    });

    //Lấy người dùng theo đơn vị
    $("#s_DON_VI").change(function() {
      var DON_VI = $(this).val();

      $.ajax({
        type: "POST",
        url: "http://localhost/phan_quyen_chi_phi/modules/user/get_user_by_DV.php",
        data: {pageno, DON_VI},
        success: function(result) {
          $("#show").html(result);
        }
      });
    });

    //Thêm người dùng
    $("#SAVE").click(function() {
      if ($("#TEN_ND").val() == "") {
        $('#attention').html("Không có dữ liệu người dùng");
        $('#attentionModal').modal('show');
      } else {
        var uSER_INFO = [$("#MA_ND").val(), $("#TEN_ND").val(), $("#MA_DON_VI").val(), $("#EMAIL").val()];

        var new_GROUPS = [];
        var sPLIT = $("#NHOM_ND").val();
        sPLIT = sPLIT.split(",");
        for (var i = 0; i < sPLIT.length - 1; i++) {
          if (document.getElementById(sPLIT[i]).checked) {
            new_GROUPS.push($("#" + sPLIT[i]).val())
          }
        }

        $.ajax({
          type: "POST",
          url: "http://localhost/phan_quyen_chi_phi/modules/user/insert_user.php",
          data: {
            uSER_INFO,
            new_GROUPS
          },
          success: function(result) {
            $('#attention').html(result);
            $('#attentionModal').modal('show');
          }
        });
      }

    });

    //Xóa người dùng
    $("#DELETE").click(function() {
      var uSER_INFO = $("#d_MA_ND").val();
      uSER_INFO = "MA_ND=" + uSER_INFO;

      $.ajax({
        type: "POST",
        url: "http://localhost/phan_quyen_chi_phi/modules/user/delete_user.php",
        data: uSER_INFO,
        success: function(result) {
          console.log(result);
          $('#attention').html(result);
          $('#exampleModal').modal("hide");
          $('#attentionModal').modal();
        }
      });
    });

    //Sửa người dùng
    $("#EDIT").click(function() {
      var mA_ND = $("#MA_ND").val();

      var insert_GROUPS = [];
      var nEW = $("#NHOM_ND").val();
      nEW = nEW.split(",");
      for (var i = 0; i < nEW.length - 1; i++) {
        if (document.getElementById(nEW[i]).checked) {
          insert_GROUPS.push($("#" + nEW[i]).val());
          //insert_GROUPS.push(nEW[i]);
        }
      }

      var delete_GROUPS = [];
      var oLD = $("#OLD_GROUPS").val();
      oLD = oLD.split("_");
      for (var i = 0; i < oLD.length - 1; i++) {
        if (!document.getElementById(oLD[i]).checked) {
          delete_GROUPS.push($("#" + oLD[i]).val());
        }
        if (jQuery.inArray(oLD[i], insert_GROUPS) > -1) {
          insert_GROUPS.splice(jQuery.inArray(oLD[i], insert_GROUPS), 1);
        }
      }

      $.ajax({
        type: "POST",
        url: "http://localhost/phan_quyen_chi_phi/modules/user/edit_user_groups.php",
        data: {
          mA_ND,
          insert_GROUPS,
          delete_GROUPS
        },
        success: function(result) {
          $('#attention').html(result);
          $('#attentionModal').modal('show');
        }
      });
    });

    //Cancel
    $("#CANCEL").click(function() {
      location.reload(true);
    });

    //Cancel
    $("#OK").click(function() {
      location.reload(true);
    });
  });

  function Edit(value) {
    var item = document.getElementById("NHOM_ND").value;
    var sPLIT = item.split(",");
    for (var i = 0; i < sPLIT.length - 1; i++) {
      document.getElementById(sPLIT[i]).checked = false;
    }

    sPLIT = value.split(",");
    $("#MA_ND").val(sPLIT[0]);
    $("#TEN_ND").val(sPLIT[1]);
    $("#MA_DON_VI").val(sPLIT[2]);
    $("#MA_DON_VI").html(sPLIT[3]);
    $("#EMAIL").val(sPLIT[4]);
    $("#OLD_GROUPS").val(sPLIT[5]);

    document.getElementById("MA_ND").setAttribute("readonly", "readonly");

    var nHOM_ND = sPLIT[5].split("_");
    for (var i = 0; i < nHOM_ND.length - 1; i++) {
      document.getElementById(nHOM_ND[i]).checked = true;
    }

    document.getElementById("e_NGUOI_DUNG").style.display = "block";
    document.getElementById("SAVE").style.display = "none";
  };

  function Delete(value) {
    $("#d_MA_ND").val(value);
  }
</script>







<style type="text/css">
  input[type="checkbox"] {
    position: absolute;
    right: 9000px;
  }

  /*Check box*/
  input[type="checkbox"]+.label-text:before {
    content: "\f096";
    font-family: "FontAwesome";
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    width: 1em;
    display: inline-block;
    margin-right: 5px;
  }

  input[type="checkbox"]:checked+.label-text:before {
    content: "\f14a";
    color: #1297a1;
    animation: effect 250ms ease-in;
  }

  input[type="checkbox"]:disabled+.label-text {
    color: #aaa;
  }

  input[type="checkbox"]:disabled+.label-text:before {
    content: "\f0c8";
    color: #ccc;
  }

  #custom_checkbox {
    position: relative;
    margin: 0px auto;
    width: 20px;
    height: 18px;

  }

  main #nguoi-dung {
    margin-top: 50px;
    margin-bottom: 150px;
    background-color: #f9f9f9;
  }

  main #nguoi-dung .div-nd {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin: 20px
  }

  main #nguoi-dung .div-nd .them-nd {
    width: 22%;
    margin-right: 50px;
  }

  main #nguoi-dung .div-nd .ds-nd {
    width: 78%;
  }

  .lds-ring {
    display: inline-block;
    position: relative;
    width: 30px;
    height: 30px;
  }

  .lds-ring div {
    box-sizing: border-box;
    display: block;
    position: absolute;
    width: 20px;
    height: 20px;
    margin: 8px;
    border: 8px solid #fff;
    border-radius: 50%;
    animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
    border-color: #1297a1 transparent transparent transparent;
  }

  .lds-ring div:nth-child(1) {
    animation-delay: -0.45s;
  }

  .lds-ring div:nth-child(2) {
    animation-delay: -0.3s;
  }

  .lds-ring div:nth-child(3) {
    animation-delay: -0.15s;
  }

  @keyframes lds-ring {
    0% {
      transform: rotate(0deg);
    }

    100% {
      transform: rotate(360deg);
    }
  }
</style>