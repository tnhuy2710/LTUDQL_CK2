<div class="content" style="background-color: #ecf0f5;">
  <div class="container">

    <section class="content-header">
      <h1>
        <small>TẠO MỚI KẾ HOẠCH CHI PHÍ HOẠT ĐỘNG</small>
      </h1>
      <ol class="breadcrumb">
        <li>Trang chủ</li>
        <li>Tạo mới</li>
      </ol>
    </section>


    <section class="content">


      <div class="box">

       <!--  <div class="box-header with-border">
          <h3 class="box-title">Tạo mới</h3>
        </div> -->

        <div class="box-body">
          


          <?php
            if(isset($_POST['year']))
            {
              $year = $_POST['year'];
            }
          ?>

          <div id="table-scroll" class="table-scroll" style="margin: 20px auto;">
            <div class="table-wrap">

              <table class="main-table">

                <tbody>
                  <tr>
                    <td colspan="11" class="fixed-side">NGÂN HÀNG THƯƠNG MẠI CỔ PHẦN KIÊN LONG</td>
                  </tr>

                  <tr>
                    <td colspan="11" class="fixed-side"><p style="font-weight: 500;">TÊN ĐƠN VỊ: HỘI SỞ KIENLONGBANK</p></td>
                  </tr>

                  <tr>
                    <td colspan="11" style="text-align: center;" class="fixed-side">
                      <p style="font-weight: 500">KẾ HOẠCH CHI PHÍ HOẠT ĐỘNG NĂM <?php echo $year; ?></p>
                    </td>
                  </tr>

                  <tr>
                    <td colspan="1" rowspan="3" style="text-align: center;" class="fixed-side">
                      <p style="font-weight: 600;font-size: 13px;"><br><br>TT</p>
                    </td>
                    <td colspan="1" rowspan="3" style="text-align: center;" class="fixed-side">
                      <p style="font-weight: 600;font-size: 13px;"><br><br>TK</p>
                    </td>
                    <td colspan="1" rowspan="3" style="text-align: center;" class="fixed-side">
                      <p style="font-weight: 600;font-size: 13px;"><br><br>Khoản Mục</p>
                    </td>
                    <td colspan="1" rowspan="3" style="text-align: center;">
                      <p style="font-weight: 600;font-size: 13px;"><br>Thực hiện<br><?php echo $year - 1; ?></p>
                    </td>
                    <td colspan="1" rowspan="3" style="text-align: center;">
                      <p style="font-weight: 600;font-size: 13px;"><br>Thực hiện 9<br>tháng <?php echo $year; ?></p>
                    </td>
                    <td colspan="3" rowspan="1" style="text-align: center;">
                      <p style="font-weight: 600;font-size: 13px;">Ước thực hiện <?php echo $year; ?></p>
                    </td>
                    <td colspan="3" rowspan="1" style="text-align: center;">
                      <p style="font-weight: 600;font-size: 13px;">Kế hoạch <?php echo $year + 1; ?></p>
                    </td>
                  </tr>

                  <tr>
                    <td colspan="1" rowspan="2" style="text-align: center;">
                      <p style="font-weight: 600;font-size: 13px;"><br>Số Dư</p>
                    </td>
                    <td colspan="2" rowspan="1" style="text-align: center;">
                      <p style="font-weight: 600;font-size: 13px;">Tăng/giảm so với <?php echo $year - 1; ?></p>
                    </td>
                    <td colspan="1" rowspan="2" style="text-align: center;">
                      <p style="font-weight: 600;font-size: 13px;"><br>Số Dư</p>
                    </td>
                    <td colspan="2" rowspan="1" style="text-align: center;">
                      <p style="font-weight: 600;font-size: 13px;">Tăng/giảm so với <?php echo $year; ?></p>
                    </td>
                  </tr>

                  <tr>
                    <td style="text-align: center;">
                      <p style="font-weight: 600;font-size: 13px;">Số Dư</p>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-weight: 600;font-size: 13px;">Tỉ Lệ</p>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-weight: 600;font-size: 13px;">Số Dư</p>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-weight: 600;font-size: 13px;">Tỉ Lệ</p>
                    </td>
                  </tr>

                  <tr>
                    <td style="text-align: center;" class="fixed-side">
                      <p style="font-size: 12px;"><em>(1)</em></p>
                    </td>
                    <td style="text-align: center;" class="fixed-side">
                      <p style="font-size: 12px;"><em>(2)</em></p>
                    </td>
                    <td style="text-align: center;" class="fixed-side">
                      <p style="font-size: 12px;"><em>(3)</em></p>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 12px;"><em>(4)</em></p>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 12px;"><em>(5)</em></p>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 12px;"><em>(6)</em></p>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 12px;"><em>(7)=(6)-(4)</em></p>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 12px;"><em>(8)=(7)/(4)</em></p>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 12px;"><em>(9)</em></p>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 12px;"><em>(10)=(9)-(6)</em></p>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 12px;"><em>(11)=(10)/(6)</em></p>
                    </td>
                  </tr>

                  <tr>
                    <th class="fixed-side"></th>
                    <td class="fixed-side"></td>
                    <td style="text-align: center;" class="fixed-side">
                      <p style="font-weight: 600;font-size: 13px;">Cộng</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="tong4" style="font-weight: 600;font-size: 13px;">248</p>
                      <!-- <input type="hidden" id="tong_4" value="248"/> -->
                    </td>
                    <td style="text-align: center;">
                      <p id="tong5" style="font-weight: 600;font-size: 13px;">172</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="tong6" style="font-weight: 600;font-size: 13px;">0</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="tong7" style="font-weight: 600;font-size: 13px;">0</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="tong8" style="font-weight: 600;font-size: 13px;">0%</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="tong9" style="font-weight: 600;font-size: 13px;">0</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="tong10" style="font-weight: 600;font-size: 13px;">0</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="tong11" style="font-weight: 600;font-size: 13px;">0%</p>
                    </td>
                  </tr>


                  <tr>
                    <th class="fixed-side">
                      <p style="font-weight: 600;font-size: 13px;">A</p>
                    </th>
                    <td class="fixed-side">
                      <p style="font-size: 13px;"></p>
                    </td>
                    <td class="fixed-side">
                      <p style="font-weight: 600;font-size: 13px;">Chi nộp thuế và các khoản phí, lệ phí</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="tongA_4" style="font-weight: 600;font-size: 13px;">248</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="tongA_5" style="font-weight: 600;font-size: 13px;">172</p>
                      </td>
                    <td style="text-align: center;">
                      <p id="tongA_6" style="font-weight: 600;font-size: 13px;">0</p>
                      <input type="hidden" name="tong6" value="0"/>
                    </td>
                    <td style="text-align: center;">
                      <p id="tongA_7" style="font-weight: 600;font-size: 13px;">0</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="tongA_8" style="font-weight: 600;font-size: 13px;">0%</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="tongA_9" style="font-weight: 600;font-size: 13px;">0</p>
                      <input type="hidden" name="tong9" value="0"/>
                    </td>
                    <td style="text-align: center;">
                      <p id="tongA_10" style="font-weight: 600;font-size: 13px;">0</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="tongA_11" style="font-weight: 600;font-size: 13px;">0%</p>
                    </td>
                  </tr>
                  
                  <tr>
                    <th class="fixed-side">
                      <p style="font-size: 13px;">1</p>
                    </th>
                    <td class="fixed-side">
                      <p style="font-size: 13px;">8242</p>
                    </td>
                    <td class="fixed-side">
                      <p style="font-size: 13px;">Chi nộp các khoản phí, lệ phí</p>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 13px;">62</p>
                      <input type="hidden" id="A_8242_4" name="8242" value="62"/>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 13px;">43</p>
                      <input type="hidden" id="A_8242_5" name="8242" value="43"/>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 13px;"><input type="number" id="A_8242_6" name="8242" oninput="TinhTien(this.id)" value="0"/></p>
                      <input type="hidden" name="A_6"/>
                    </td>
                    <td style="text-align: center;">
                      <p id="A_8242_7" name="8242" style="font-size: 13px;">0</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="A_8242_8" name="8242" style="font-size: 13px;">0%</p>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 13px;"><input type="number" id="A_8242_9" name="8242" oninput="TinhTien(this.id)" value="0"/></p>
                      <input type="hidden" name="A_9"/>                    
                    </td>
                    <td style="text-align: center;">
                      <p id="A_8242_10" name="8242" style="font-size: 13px;">0</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="A_8242_11" name="8242" style="font-size: 13px;">0%</p>
                    </td>
                  </tr>

                  <tr>
                    <th class="fixed-side">
                      <p style="font-size: 13px;">2</p>
                    </th>
                    <td class="fixed-side">
                      <p style="font-size: 13px;">8243</p>
                    </td>
                    <td class="fixed-side">
                      <p style="font-size: 13px;">Chi phí cho nhân viên</p>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 13px;">62</p>
                      <input type="hidden" id="A_8243_4" name="8243" value="62"/>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 13px;">43</p>
                      <input type="hidden" id="A_8243_5" name="8243" value="43"/>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 13px;"><input type="number" id="A_8243_6" name="8243" oninput="TinhTien(this.id)" value="0"/></p>
                      <input type="hidden" name="A_6"/>
                    </td>
                    <td style="text-align: center;">
                      <p id="A_8243_7" name="8243" style="font-size: 13px;">0</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="A_8243_8" name="8243" style="font-size: 13px;">0%</p>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 13px;"><input type="number" id="A_8243_9" name="8243" oninput="TinhTien(this.id)" value="0"/></p>
                      <input type="hidden" name="A_9"/>
                    </td>
                    <td style="text-align: center;">
                      <p id="A_8243_10" name="8243" style="font-size: 13px;">0</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="A_8243_11" name="8243" style="font-size: 13px;">0%</p>
                    </td>
                  </tr>

                  <tr>
                    <th class="fixed-side">
                      <p style="font-size: 13px;">3</p>
                    </th>
                    <td class="fixed-side">
                      <p style="font-size: 13px;">8244</p>
                    </td>
                    <td class="fixed-side">
                      <p style="font-size: 13px;">Chi phí cho nhân viên</p>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 13px;">62</p>
                      <input type="hidden" id="A_8244_4" name="8244" value="62"/>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 13px;">43</p>
                      <input type="hidden" id="A_8244_5" name="8244" value="43"/>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 13px;"><input type="number" id="A_8244_6" name="8244" oninput="TinhTien(this.id)" value="0"/></p>
                      <input type="hidden" name="A_6"/>
                    </td>
                    <td style="text-align: center;">
                      <p id="A_8244_7" name="8244" style="font-size: 13px;">0</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="A_8244_8" name="8244" style="font-size: 13px;">0%</p>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 13px;"><input type="number" id="A_8244_9" name="8244" oninput="TinhTien(this.id)" value="0"/></p>
                      <input type="hidden" name="A_9"/>
                    </td>
                    <td style="text-align: center;">
                      <p id="A_8244_10" name="8244" style="font-size: 13px;">0</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="A_8244_11" name="8244" style="font-size: 13px;">0%</p>
                    </td>
                  </tr>

                  <tr>
                    <th class="fixed-side">
                      <p style="font-size: 13px;">4</p>
                    </th>
                    <td class="fixed-side">
                      <p style="font-size: 13px;">8245</p>
                    </td>
                    <td class="fixed-side">
                      <p style="font-size: 13px;">Chi phí cho nhân viên</p>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 13px;">62</p>
                      <input type="hidden" id="A_8245_4" name="8245" value="62"/>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 13px;">43</p>
                      <input type="hidden" id="A_8245_5" name="8245" value="43"/>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 13px;"><input type="number" id="A_8245_6" name="8245" oninput="TinhTien(this.id)" value="0"/></p>
                      <input type="hidden" name="A_6"/>
                    </td>
                    <td style="text-align: center;">
                      <p id="A_8245_7" name="8245" style="font-size: 13px;">0</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="A_8245_8" name="8245" style="font-size: 13px;">0%</p>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 13px;"><input type="number" id="A_8245_9" name="8245" oninput="TinhTien(this.id)" value="0"/></p>
                      <input type="hidden" name="A_9"/>
                    </td>
                    <td style="text-align: center;">
                      <p id="A_8245_10" name="8245" style="font-size: 13px;">0</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="A_8245_11" name="8245" style="font-size: 13px;">0%</p>
                    </td>
                  </tr>

                  <tr>
                    <th class="fixed-side">
                      <p style="font-weight: 600;font-size: 13px;">C</p>
                    </th>
                    <td class="fixed-side">
                      <p style="font-size: 13px;"></p>
                    </td>
                    <td class="fixed-side">
                      <p style="font-weight: 600;font-size: 13px;">Chi cho hoạt động quản lý và công vụ</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="tongC_4" style="font-weight: 600;font-size: 13px;">543</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="tongC_5" style="font-weight: 600;font-size: 13px;">428</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="tongC_6" style="font-weight: 600;font-size: 13px;">0</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="tongC_7" style="font-weight: 600;font-size: 13px;">0</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="tongC_8" style="font-weight: 600;font-size: 13px;">0%</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="tongC_9" style="font-weight: 600;font-size: 13px;">0</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="tongC_10" style="font-weight: 600;font-size: 13px;">0</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="tongC_11" style="font-weight: 600;font-size: 13px;">0%</p>
                    </td>
                  </tr>
                  
                  <tr>
                    <th class="fixed-side">
                      <p style="font-weight: 600;font-size: 13px;">C1</p>
                    </th>
                    <td class="fixed-side">
                      <p style="font-size: 13px;"></p>
                    </td>
                    <td class="fixed-side">
                      <p style="font-weight: 600;font-size: 13px;">Chi xuất bản tài liệu</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="tongC_4_1" style="font-weight: 600;font-size: 13px;">543</p>                      
                    </td>
                    <td style="text-align: center;">
                      <p id="tongC_5_1" style="font-weight: 600;font-size: 13px;">428</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="tongC_6_1" style="font-weight: 600;font-size: 13px;">0</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="tongC_7_1" style="font-weight: 600;font-size: 13px;">0</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="tongC_8_1" style="font-weight: 600;font-size: 13px;">0%</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="tongC_9_1" style="font-weight: 600;font-size: 13px;">0</p>                      
                    </td>
                    <td style="text-align: center;">
                      <p id="tongC_10_1" style="font-weight: 600;font-size: 13px;">0</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="tongC_11_1" style="font-weight: 600;font-size: 13px;">0%</p>
                    </td>
                  </tr>

                  <tr>
                    <th class="fixed-side">
                      <p style="font-size: 13px;">1</p>
                    </th>
                    <td class="fixed-side">
                      <p style="font-size: 13px;">8660</p>
                    </td>
                    <td class="fixed-side">
                      <p style="font-size: 13px;">Chi xuất bản tài liệu</p>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 13px;">174</p>
                      <input type="hidden" id="C_8660_4_1" name="8660" value="174"/>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 13px;">140</p>
                      <input type="hidden" id="C_8660_5_1" name="8660" value="140"/>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 13px;"><input id="C_8660_6_1" name="8660" onchange="TinhTien(this.id)"/></p>                      
                    </td>
                    <td style="text-align: center;">
                      <p id="C_8660_7_1" name="8660" style="font-size: 13px;">0</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="C_8660_8_1" name="8660" style="font-size: 13px;">0%</p>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 13px;"><input id="C_8660_9_1" name="8660" onchange="TinhTien(this.id)"/></p>                      
                    </td>
                    <td style="text-align: center;">
                      <p id="C_8660_10_1" name="8660" style="font-size: 13px;">0</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="C_8660_11_1" name="8660" style="font-size: 13px;">0%</p>
                    </td>
                  </tr>

                  <tr>
                    <th class="fixed-side">
                      <p style="font-size: 13px;">2</p>
                    </th>
                    <td class="fixed-side">
                      <p style="font-size: 13px;">8694</p>
                    </td>
                    <td class="fixed-side">
                      <p style="font-size: 13px;">Lễ tân, khánh tiết</p>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 13px;">369</p>
                      <input type="hidden" id="C_8694_4_1" name="8694" value="369"/>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 13px;">288</p>
                      <input type="hidden" id="C_8694_5_1" name="8694" value="288"/>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 13px;"><input id="C_8694_6_1" name="8694" onchange="TinhTien(this.id)"/></p>                      
                    </td>
                    <td style="text-align: center;">
                      <p id="C_8694_7_1" name="8694" style="font-size: 13px;">0</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="C_8694_8_1" name="8694" style="font-size: 13px;">0%</p>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 13px;"><input id="C_8694_9_1" name="8694" onchange="TinhTien(this.id)"/></p>                      
                    </td>
                    <td style="text-align: center;">
                      <p id="C_8694_10_1" name="8694" style="font-size: 13px;">0</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="C_8694_11_1" name="8694" style="font-size: 13px;">0%</p>
                    </td>
                  </tr>

                  <tr>
                    <th class="fixed-side">
                      <p style="font-weight: 600;font-size: 13px;">C2</p>
                    </th>
                    <td class="fixed-side">
                      <p style="font-size: 13px;"></p>
                    </td>
                    <td class="fixed-side">
                      <p style="font-weight: 600;font-size: 13px;">Chi cho hoạt động quản lý, công vụ khác</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="tongC_4_2" style="font-weight: 600;font-size: 13px;">687</p>                      
                    </td>
                    <td style="text-align: center;">
                      <p id="tongC_5_2" style="font-weight: 600;font-size: 13px;">586</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="tongC_6_2" style="font-weight: 600;font-size: 13px;">0</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="tongC_7_2" style="font-weight: 600;font-size: 13px;">0</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="tongC_8_2" style="font-weight: 600;font-size: 13px;">0%</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="tongC_9_2" style="font-weight: 600;font-size: 13px;">0</p>                      
                    </td>
                    <td style="text-align: center;">
                      <p id="tongC_10_2" style="font-weight: 600;font-size: 13px;">0</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="tongC_11_2" style="font-weight: 600;font-size: 13px;">0%</p>
                    </td>
                  </tr>

                  <tr>
                    <th class="fixed-side">
                      <p style="font-size: 13px;">1</p>
                    </th>
                    <td class="fixed-side">
                      <p style="font-size: 13px;">8611</p>
                    </td>
                    <td class="fixed-side">
                      <p style="font-size: 13px;">Vật liệu văn phòng</p>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 13px;">136</p>
                      <input type="hidden" id="C_8611_4_2" name="8611" value="136"/>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 13px;">163</p>
                      <input type="hidden" id="C_8611_5_2" name="8611" value="163"/>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 13px;"><input id="C_8611_6_2" name="8611" onchange="TinhTien(this.id)"/></p>                      
                    </td>
                    <td style="text-align: center;">
                      <p id="C_8611_7_2" name="8611" style="font-size: 13px;">0</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="C_8611_8_2" name="8611" style="font-size: 13px;">0%</p>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 13px;"><input id="C_8611_9_2" name="8611" onchange="TinhTien(this.id)"/></p>                      
                    </td>
                    <td style="text-align: center;">
                      <p id="C_8611_10_2" name="8611" style="font-size: 13px;">0</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="C_8611_11_2" name="8611" style="font-size: 13px;">0%</p>
                    </td>
                  </tr>

                  <tr>
                    <th class="fixed-side">
                      <p style="font-size: 13px;">2</p>
                    </th>
                    <td class="fixed-side">
                      <p style="font-size: 13px;">8612</p>
                    </td>
                    <td class="fixed-side">
                      <p style="font-size: 13px;">Giấy tờ in</p>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 13px;">31</p>
                      <input type="hidden" id="C_8612_4_2" name="8612" value="31"/>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 13px;">6</p>
                      <input type="hidden" id="C_8612_5_2" name="8612" value="6"/>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 13px;"><input id="C_8612_6_2" name="8612" onchange="TinhTien(this.id)"/></p>                      
                    </td>
                    <td style="text-align: center;">
                      <p id="C_8612_7_2" name="8612" style="font-size: 13px;">0</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="C_8612_8_2" name="8612" style="font-size: 13px;">0%</p>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 13px;"><input id="C_8612_9_2" name="8612" onchange="TinhTien(this.id)"/></p>                      
                    </td>
                    <td style="text-align: center;">
                      <p id="C_8612_10_2" name="8612" style="font-size: 13px;">0</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="C_8612_11_2" name="8612" style="font-size: 13px;">0%</p>
                    </td>
                  </tr>

                  <tr>
                    <th class="fixed-side">
                      <p style="font-size: 13px;">3</p>
                    </th>
                    <td class="fixed-side">
                      <p style="font-size: 13px;">8613</p>
                    </td>
                    <td class="fixed-side">
                      <p style="font-size: 13px;">Xăng dầu</p>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 13px;">105</p>
                      <input type="hidden" id="C_8613_4_2" name="8613" value="105"/>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 13px;">97</p>
                      <input type="hidden" id="C_8613_5_2" name="8613" value="97"/>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 13px;"><input id="C_8613_6_2" name="8613" onchange="TinhTien(this.id)"/></p>                      
                    </td>
                    <td style="text-align: center;">
                      <p id="C_8613_7_2" name="8613" style="font-size: 13px;">0</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="C_8613_8_2" name="8613" style="font-size: 13px;">0%</p>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 13px;"><input id="C_8613_9_2" name="8613" onchange="TinhTien(this.id)"/></p>                      
                    </td>
                    <td style="text-align: center;">
                      <p id="C_8613_10_2" name="8613" style="font-size: 13px;">0</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="C_8613_11_2" name="8613" style="font-size: 13px;">0%</p>
                    </td>
                  </tr>

                  <tr>
                    <th class="fixed-side">
                      <p style="font-size: 13px;">4</p>
                    </th>
                    <td class="fixed-side">
                      <p style="font-size: 13px;">8614</p>
                    </td>
                    <td class="fixed-side">
                      <p style="font-size: 13px;">Xăng dầu</p>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 13px;">415</p>
                      <input type="hidden" id="C_8614_4_2" name="8614" value="415"/>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 13px;">320</p>
                      <input type="hidden" id="C_8614_5_2" name="8614" value="320"/>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 13px;"><input id="C_8614_6_2" name="8614" onchange="TinhTien(this.id)"/></p>                      
                    </td>
                    <td style="text-align: center;">
                      <p id="C_8614_7_2" name="8614" style="font-size: 13px;">0</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="C_8614_8_2" name="8614" style="font-size: 13px;">0%</p>
                    </td>
                    <td style="text-align: center;">
                      <p style="font-size: 13px;"><input id="C_8614_9_2" name="8614" onchange="TinhTien(this.id)"/></p>                      
                    </td>
                    <td style="text-align: center;">
                      <p id="C_8614_10_2" name="8614" style="font-size: 13px;">0</p>
                    </td>
                    <td style="text-align: center;">
                      <p id="C_8614_11_2" name="8614" style="font-size: 13px;">0%</p>
                    </td>
                  </tr>
      </tbody>
    </table>
  </div>
</div>










<style type="text/css">
  .table-scroll {
    position:relative;
    max-width:1200px;
    margin:auto;
    overflow:hidden;
    border:1px solid #0f848d;
  }
  .table-wrap {
    width:100%;
    overflow:auto;
  }
  .table-scroll table {
    width:100%;
    margin:auto;
    border-collapse:separate;
    border-spacing:0;
  }
  .table-scroll th, .table-scroll td {
    padding:5px 10px;
    border-bottom: 1px solid #0f848d;
    border-right: 1px solid #0f848d;
    background:#fff;
    white-space:nowrap;
    vertical-align:top;
  }
  .table-scroll thead, .table-scroll tfoot {
    background:#f9f9f9;
  }
  .clone {
    position:absolute;
    top:0;
    left:0;
    pointer-events:none;
  }
  .clone th, .clone td {
    visibility:hidden
  }
  .clone td, .clone th {
    border-color:transparent
  }
  .clone tbody th {
    visibility:visible;
    /*color:red;*/
  }
  .clone .fixed-side {
    border-bottom: 1px solid #0f848d;
    border-right: 1px solid #0f848d;
    background:#daf1f3;
    visibility:visible;
  }

</style>

        </div>
      </div>
    </section>
  </div>
</div>

<script type="text/javascript">
  jQuery(document).ready(function() {
     jQuery(".main-table").clone(true).appendTo('#table-scroll').addClass('clone');   
   });

   function test()
   {
      var item = document.getElementsByName("A");
      
      for(var i in item)
      {
        console.log(i);
      }
   };

   function TinhTien(id)
   {      
      var sPLIT = id.split("_");
      var item = document.getElementsByName(sPLIT[0] + "_" + sPLIT[2]);
      item[0].value = $("#A_8242_6").val();
      item[1].value = $("#A_8243_6").val();
      item[2].value = $("#A_8244_6").val();
      item[3].value = $("#A_8245_6").val();      
      if(sPLIT[3] == null)
      {
        Bac3(sPLIT[0], sPLIT[1], sPLIT[2], 0);
      }
      else
      {
        Bac3(sPLIT[0], sPLIT[1], sPLIT[2], sPLIT[3]);
      }            
   };

  

   function Bac3(mA_NHOM, mA_ID, cOT, mA_BAC)
   {        
      var item = document.getElementsByName(mA_ID);
      if(cOT == 6)
      {
        if(mA_BAC == 0)
        {
          //Giá trị cột 7
          $("#" + mA_NHOM + "_" + mA_ID + "_" + "7").html(item[2].value - item[0].value);
          item[3].value = item[2].value - item[0].value;
          //item[2].value = parseInt(item[3].value) + parseInt(item[0].value);

          //Giá trị cột 8
          $("#" + mA_NHOM + "_" + mA_ID + "_" + "8").html(item[3].value / item[0].value + "%");
          item[4].value = item[3].value - item[0].value;
        
          Bac1(mA_NHOM , cOT, item[2].value);
        }
        else
        {
          //Giá trị cột 7 bậc 3
          $("#" + mA_NHOM + "_" + mA_ID + "_" + "7_" + mA_BAC).html(item[2].value - item[0].value);
          item[3].value = item[2].value - item[0].value;
          //item[2].value = parseInt(item[3].value) + parseInt(item[0].value);

          //Giá trị cột 8 bậc 3
          $("#" + mA_NHOM + "_" + mA_ID + "_" + "8_" + mA_BAC).html(item[3].value / item[0].value + "%");
          item[4].value = item[3].value - item[0].value;

          Bac2(mA_NHOM, cOT, mA_BAC, item[2].value);
        }
      }
      else if(cOT == 9)
      {
        if(mA_BAC == 0)
        {
            //Giá trị cột 10
          $("#" + mA_NHOM + "_" + mA_ID + "_" + "10").html(item[5].value - item[2].value);
          item[6].value = item[5].value - item[2].value;
          //item[5].value = parseInt(item[6].value) + parseInt(item[2].value);

          //Giá trị cột 11
          $("#" + mA_NHOM + "_" + mA_ID + "_" + "11").html(item[6].value / item[2].value + "%");
          item[7].value = item[6].value / item[2].value;

          Bac1(mA_NHOM , cOT, item[5].value);
        }
        else
        {
          //Giá trị cột 10 bậc 3
          $("#" + mA_NHOM + "_" + mA_ID + "_" + "10_" + mA_BAC).html(item[5].value - item[2].value);
          item[6].value = item[5].value - item[2].value;
          //item[5].value = parseInt(item[6].value) + parseInt(item[2].value);

          //Giá trị cột 11 bậc 3
          $("#" + mA_NHOM + "_" + mA_ID + "_" + "11_" + mA_BAC).html(item[6].value / item[2].value + "%");
          item[7].value = item[6].value / item[2].value;

          Bac2(mA_NHOM, cOT, mA_BAC, item[5].value);
        }
      }
   };   

   function Bac2(mA_NHOM, cOT, mA_BAC, tONG_BAC3)
   {
      //Tổng mã nhóm bậc 2
      var tONG = parseInt($("#tong" + mA_NHOM + "_" + cOT + "_" + mA_BAC).text()) + parseInt(tONG_BAC3);    
      $("#tong" + mA_NHOM + "_" + cOT + "_" + mA_BAC).html(tONG);
            
      var tONG_NHOM_COT_6_BAC2 = $("#tong" + mA_NHOM + "_" + "6_" + mA_BAC).text();

      if(cOT == 6)
      {
        var tONG_NHOM_COT_4_BAC2 = $("#tong" + mA_NHOM + "_" + "4_" + mA_BAC).text();
        var tONG_NHOM_COT_5_BAC2 = $("#tong" + mA_NHOM + "_" + "5_" + mA_BAC).text();

        //Tổng nhóm cột 7 bậc 2
        var tONG_NHOM_COT_7_BAC2 = tONG_NHOM_COT_6_BAC2 - tONG_NHOM_COT_4_BAC2;
        $("#tong" + mA_NHOM + "_" + "7_" + mA_BAC).html(tONG_NHOM_COT_7_BAC2);
        //Tổng nhóm cột 8 bậc 2
        var tONG_NHOM_COT_8_BAC2 = tONG_NHOM_COT_7_BAC2 / tONG_NHOM_COT_4_BAC2;
        $("#tong" + mA_NHOM + "_" + "8_" + mA_BAC).html(tONG_NHOM_COT_8_BAC2 + "%");
      }
      else if(cOT == 9)
      {
        var tONG_NHOM_COT_9_BAC2 = $("#tong_" + mA_NHOM + "_" + "9_" + mA_BAC).val();
        //Tổng nhóm cột 10 bậc 2
        var tONG_NHOM_COT_10_BAC2 = tONG_NHOM_COT_9_BAC2 / tONG_NHOM_COT_6_BAC2;
        $("#tong" + mA_NHOM + "_" + "10_" + mA_BAC).html(tONG_NHOM_COT_10_BAC2);
        //Tổng nhóm cột 11 bậc 2
        var tONG_NHOM_COT_11_BAC2 = tONG_NHOM_COT_10_BAC2 / tONG_NHOM_COT_6_BAC2;
        $("#tong" + mA_NHOM + "_" + "11_" + mA_BAC).html(tONG_NHOM_COT_11_BAC2 + "%");
      }            

      Bac1(mA_NHOM , cOT, tONG_BAC3);
   };

   function Bac1(mA_NHOM , cOT, tONG_BAC2)
   {       
     //Tổng mã nhóm bậc 1 (cột 6, cột 9)
     //var tONG = parseInt($("#tong" + mA_NHOM + "_" + cOT).text()) + parseInt(tONG_BAC2);     

     var item = document.getElementsByName(mA_NHOM + "_" + cOT);
     var tONG = 0;
     for(var i=0; i<item.length/2; i++)
     {
        tONG += parseInt(item[i].value);        
     }
     $("#tong" + mA_NHOM + "_" + cOT).html(tONG);
                                       
      var tONG_NHOM_COT_6_BAC2 = $("#tong" + mA_NHOM + "_6").text();     
      
      if(cOT == 6)
      {
        var tONG_NHOM_COT_4_BAC2 = $("#tong" + mA_NHOM + "_4").text();      
        var tONG_NHOM_COT_5_BAC2 = $("#tong" + mA_NHOM + "_5").text();

        //Tổng nhóm cột 7 bậc 2
        var tONG_NHOM_COT_7_BAC2 = tONG_NHOM_COT_6_BAC2 - tONG_NHOM_COT_4_BAC2;
        $("#tong" + mA_NHOM + "_7").html(tONG_NHOM_COT_7_BAC2);        
        //Tổng nhóm cột 8 bậc 2
        var tONG_NHOM_COT_8_BAC2 = tONG_NHOM_COT_7_BAC2 / tONG_NHOM_COT_4_BAC2;
        $("#tong" + mA_NHOM + "_8").html(tONG_NHOM_COT_8_BAC2 + "%");
      }
      else if(cOT == 9)
      {
        var tONG_NHOM_COT_9_BAC2 = $("#tong" + mA_NHOM + "_9").text();

        //Tổng nhóm cột 10 bậc 2
        var tONG_NHOM_COT_10_BAC2 = tONG_NHOM_COT_9_BAC2 - tONG_NHOM_COT_6_BAC2;
        $("#tong" + mA_NHOM + "_10").html(tONG_NHOM_COT_10_BAC2);
        //Tổng nhóm cột 11 bậc 2
        var tONG_NHOM_COT_11_BAC2 = tONG_NHOM_COT_10_BAC2 / tONG_NHOM_COT_6_BAC2;
        $("#tong" + mA_NHOM + "_11").html(tONG_NHOM_COT_11_BAC2 + "%");
      }      

      Final(cOT, tONG_BAC2);
   };

   function Final(cOT, tONG_BAC1)
   {      
      var fINAL_TONG = parseInt($("#tong" + cOT).text()) + parseInt(tONG_BAC1);         
      $("#tong" + cOT).html(fINAL_TONG);
      
      var tONG_COT_6 = $("#tong6").text();

      if(cOT == 6)
      {
        var tONG_COT_4 = $("#tong4").text();
        var tONG_COT_5 = $("#tong5").text();

        //Tổng cột 7
        var tONG_COT_7 = tONG_COT_6 - tONG_COT_4;
        $("#tong7").html(tONG_COT_7);
        //Tổng cột 8
        var tONG_COT_8 = tONG_COT_7 / tONG_COT_4;
        $("#tong8").html(tONG_COT_8 + "%");
      }
      else if(cOT == 9)
      {
        var tONG_COT_9 = $("#tong9").text();

        //Tổng cột 10
        var tONG_COT_10 = tONG_COT_9 - tONG_COT_6;
        $("#tong10").html(tONG_COT_10);
        //Tổng cột 11
        var tONG_COT_11 = tONG_COT_10 / tONG_COT_6;
        $("#tong11").html(tONG_COT_11);
      }  
   }
</script>