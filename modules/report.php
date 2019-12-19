<div class="content" style="background-color: #ecf0f5;">
  <div class="container">

    <!-- <section class="content-header">
      <h1>
        Top Navigation
        <small>Example 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Layout</a></li>
        <li class="active">Top Navigation</li>
      </ol>
    </section> -->

    <!-- Main content -->
    <section class="content">

      <div class="row">

        <div class="col-md-12">
          <div class="box box-info" style="border-top-color: #0f848d;min-height: 400px;">
            <div class="box-header with-border">
              <h3 style="font-size: 15px;" class="box-title">CHỌN NĂM VÀ ĐƠN VỊ ĐỂ TẠO MỚI KẾ HOẠCH CHI PHÍ</h3>
            </div>

            <form class="form-horizontal" action="index.php?view=create_planning" method="POST">
              <div class="box-body">

                <div class="form-group">
                  <label class="col-md-2 control-label" style="font-size: 13px;font-weight: 600;width: 10%;">
                    CHỌN NĂM
                  </label>

                  <div class="col-sm-2">
                    <select class="form-control select2" style="width: 100%;" name="year" >
                      <option value="2017">2017</option>
                      <option value="2018">2018</option>
                      <option value="2019">2019</option>
                      <option value="2020">2020</option>
                      <option value="2021">2021</option>
                      <option value="2022">2022</option>
                      <option value="2023">2023</option>
                    </select>
                  </div>

                  <label class="col-sm-1 control-label" style="font-size: 13px;font-weight: 600;">
                    ĐƠN VỊ
                  </label>
                  <div class="col-sm-3">
                    <select class="form-control select2" style="width: 100%;" >
                      <option >HỘI SỞ</option>
                      <option data-select2-id="18">CHI NHÁNH SÀI GÒN</option>
                      <option data-select2-id="19">CHI NHÁNH NHÀ BÈ</option>
                    
                    </select>
                  </div>

                  <div class="col-sm-1">
                    <button type="submit" style="background-color: #0f848d;" name="submit" class="btn btn-info pull-right">
                      QUERY
                    </button>
                  </div>

                </div>


              </div>

            </form>
          </div>

        </div>

      </div>


    </section>

  </div>
</div>