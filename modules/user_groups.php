<?php                        
                          $serverName = "10.100.26.34";
                          $connectionInfo = array( "Database"=>"Alibaba", "CharacterSet" => "UTF-8", "UID"=>"QuanLyTSCNTT", "PWD"=>"QuanLyTSCNTT");
                          $conn = sqlsrv_connect($serverName, $connectionInfo);
                                                      
                          $sql = "SELECT *
                                  FROM NHOM_NGUOI_DUNG";

                          $stmt = sqlsrv_query( $conn, $sql );                          
                          if( $stmt === false) {
                              die( print_r( sqlsrv_errors(), true) );
                          }                          
                        ?> 

<div class="content" style="background-color: #ecf0f5;">                         
  <main>      
      <section class="container" id="nguoi-dung">
          <h1 class="title">NHÓM NGƯỜI DÙNG</h1>
          <div class="div-nd">
              <div class="them-nd">
                  <h4 class="sub-title">
                      <span id="them-sua">Thêm</span> nhóm người dùng
                  </h4>
                  <form method="post" action="">  
                          <div class="form-group">
                              <label for="exampleInputEmail1">Mã nhóm người dùng</label>
                              <input class="form-control"
                                    id="MA_NHOM"
                                    name="MA_NHOM"
                                    aria-describedby="emailHelp"
                                    placeholder="" />
                          </div>

                          <div class="form-group">
                              <label for="exampleInputEmail1">Tên nhóm người dùng</label>
                              <input class="form-control"
                                    id="TEN_NHOM"
                                  name="TEN_NHOM"
                                  aria-describedby="emailHelp"
                                  placeholder="" />
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Ghi chú</label>
                            <textarea class="form-control"
                                      id="GHI_CHU"
                                      name="GHI_CHU"
                                      aria-describedby="emailHelp"
                                      placeholder=""></textarea>
                        </div>                                                                           
                    </form>                           
                    <button type="submit" class="btn btn-primary" id="SAVE" name="SAVE" value="save">THÊM</button>
                    <div id="e_NHOM_NGUOI_DUNG" >
                        <button type="submit" class="btn btn-primary"  id="EDIT" name="EDIT" value="edit">CẬP NHẬT</button>
                        <button type="submit" class="btn btn-default"  id="CANCEL" name="CANCEL">HỦY</button>
                    </div>                                 
              </div>
              <div class="ds-nd">
                  <h4 class="sub-title">
                      Danh sách Nhóm người dùng
                  </h4>                  
                    <table class="table table-hover table-dark">
                    <thead>
                        <tr style="background-color: #1297a1">
                            <th scope="col">Mã nhóm ND</th>
                            <th scope="col">Tên nhóm</th>
                            <th scope="col">Ghi chú</th>                                                     
                        </tr>
                    </thead>                    
                    <?php
                            while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC) ) {                              
                              echo '<tr>';                                                            
                              echo '<td scope="row">' .$row['MA_NHOM'] . '</td>';
                              echo '<td>' .$row['TEN_NHOM'] .  '</td>';
                              echo '<td>' .$row['GHI_CHU'] .  '</td>';                                                          
                              echo '<td> <i id="'
                                        .$row['MA_NHOM'] . ','                                       
                                        .$row['TEN_NHOM'] . ','
                                        .$row['GHI_CHU'] . ','                                        
                                        . '" class="fa fa-pencil-square-o" style="color: #17a2b8;font-size: 18px;cursor:pointer;" 
                                        onclick="Edit(this.id)"></i> 
                                    </td>';                              
                              echo '</tr>';                                                         
                            }                                                     
                    ?>                      
                  </table>
              </div>
          </div>
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
    sqlsrv_free_stmt( $stmt);
    sqlsrv_close($conn);
?>



<style type="text/css">
  main #nguoi-dung {
        margin-top: 50px;
        margin-bottom: 150px;
        background-color: #f9f9f9;
    }

        main #nguoi-dung .div-nd {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

            main #nguoi-dung .div-nd .them-nd {
                width: 22%;
                margin-right: 50px;
            }
              
            main #nguoi-dung .div-nd .ds-nd {
                width: 78%;
            }                
</style>


<script type="text/javascript">
  jQuery(document).ready(function() {
     jQuery(".main-table").clone(true).appendTo('#table-scroll').addClass('clone');
     document.getElementById("e_NHOM_NGUOI_DUNG").style.display = "none";
    
    //Thêm nhóm người dùng
    $("#SAVE").click(function(){
        var uSER_INFO = [$("#MA_NHOM").val(), $("#TEN_NHOM").val(), $("#GHI_CHU").val()];
        //uSER_INFO = "uSER_INFO="+uSER_INFO;

        $.ajax({
          type: "POST",
          url: "http://localhost/test11/modules/user_groups/insert_group.php",
          data: uSER_INFO,
          success: function(result){
            $('#attention').html(result);
            $('#attentionModal').modal('show');
          }
        });
      });

      //Sửa nhóm người dùng
      $("#EDIT").click(function(){
        var uSER_INFO = [$("#MA_NHOM").val(), $("#TEN_NHOM").val(), $("#GHI_CHU").val()];
        uSER_INFO = "uSER_INFO="+ uSER_INFO;

        $.ajax({
          type: "POST",
          url: "http://localhost/test11/modules/user_groups/edit_group.php",
          data: uSER_INFO,
          success: function(result){              
            $('#attention').html(result);
            $('#attentionModal').modal('show');            
          }
        });
      });

      //Cancel
      $("#CANCEL").click(function(){
        location.reload(true);
      });

      //Cancel
      $("#OK").click(function(){
        location.reload(true);
      });
   });

   function Edit(value) {        
        var sPLIT = value.split(",");
        $("#MA_NHOM").val(sPLIT[0]);
        $("#TEN_NHOM").val(sPLIT[1]);
        $("#GHI_CHU").val(sPLIT[2]);        
        document.getElementById("MA_NHOM").setAttribute("readonly", "readonly");


        //document.getElementById("EDIT").style.display = "block";
        document.getElementById("e_NHOM_NGUOI_DUNG").style.display = "block";
        document.getElementById("SAVE").style.display = "none";
    };


</script>        