<button type="button"class="btn bg02 rounded-circle btn-to-top shadow-none" onclick="topFunction()" id="myBtn"><i class="fa fa-chevron-up text-white" aria-hidden="true"></i></button>


<script>
//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>

<div class="sticky-top shadow-sm">
  <div class="container-fluid gradient py-0 my-0">
    <div class="row justify-content-end py-0 my-0">
      <div class="col-auto px-1">
        <span class="text-white"style="font-size:13px">โรงพยาบาลมหาราชนครราชสีมา</span>
      </div>
      <!-- <div class="col-auto px-0">
        <img class="me-0"src="Img/ImgWeb/line3.png" height="20" width="15"/>
      </div> -->
      <div class="col-auto px-0">
        <a class="txt01 text-decoration-none me-0 a_hover_red" href="https://web.facebook.com/ThaitraditionalMedicineMHR" target="_blank"><img class="shadow"src="Img/ImgWeb/facebook.png" height="20" width="auto"/></a>
      </div>
      <div class="col-auto px-0">
        <a class="txt01 text-decoration-none me-0 a_hover_red" href="https://liff.line.me/1645278921-kWRPP32q/?accountId=614vxpwr" target="_blank"><img class="shadow"src="Img/ImgWeb/line.png" height="20" width="auto"/></a>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
      <div class="navbar-brand txt01 text-decoration-none py-0 my-0">
          <div class="row">
            <div class="col-auto">
              <a class="text-decoration-none a_hover_red" href="Index.php"><img src="Img/ImgWeb/logo002.png" height="45" width="auto"/></a>
            </div>
            <div class="col-auto px-0 d-xl-block d-lg-block d-md-none d-sm-none d-none">
              <a class="text-decoration-none a_hover_red" href="Index.php">
                <span class="txt15 txt01 fw-bold">คลินิกการแพทย์แผนไทย โรงพยาบาลมหาราชนครราชสีมา</span><br/>
                <span class="txt11 txt01">Thai Traditional Medicine Maharat Nakhon Ratchasima Hospital</span>
              </a>
            </div>
            <div class="col-auto px-1 d-xl-block d-lg-block d-md-none d-sm-none d-none">
              <img class="me-0"src="Img/ImgWeb/line4.png" height="40" width="10"/>
            </div>
            <div class="col-auto my-auto px-0 d-xl-block d-lg-block d-md-none d-sm-none d-none">
              <a href="tel:044235972"class="text-decoration-none txt16 fw-bold txt01 a_hover_red txt15"><i class="fas fa-phone-alt txt01"></i> 044235972</a>
            </div>
            <div class="col-auto me-auto px-0 d-xl-none d-lg-none d-md-block d-sm-block d-block">
              <a class="text-decoration-none a_hover_red" href="Index.php">
                <span class="txt18 txt01 fw-bold">คลินิกการแพทย์</span><br/>
                <span class="txt18 txt01 fw-bold">แผนไทย</span>
              </a>
            </div>
            <div class="col-auto px-1 d-xl-none d-lg-none d-md-block d-sm-block d-block">
              <img class="me-0"src="Img/ImgWeb/line4.png" height="45" width="15"/>
            </div>
            <div class="col-auto my-auto px-0 d-xl-none d-lg-none d-md-block d-sm-block d-block">
              <a href="tel:044235972"class="text-decoration-none txt16 fw-bold txt01 a_hover_red "><i class="fas fa-phone-alt txt01"></i> โทร</a>
            </div>
          </div>
      </div>
      <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>

        <ul class="navbar-nav mb-2 mb-lg-0 d-flex">
          <li class="nav-item mt-2 pe-1">
            <a class="txt01 text-decoration-none pe-4 fw-bold a_hover_red txt13" href="Index.php"><i class="fa fa-home" aria-hidden="true"></i> หน้าหลัก</a>
          </li>
          <li class="nav-item mt-2 pe-1">
            <a class="txt01 text-decoration-none pe-4 fw-bold a_hover_red txt13" href="Index.php?action=News"><i class="fas fa-globe-americas"></i> ข่าวสารและกิจกรรม</a>
          </li>
          <li class="nav-item mt-2 pe-1">
              <a class="txt01 text-decoration-none pe-4 fw-bold a_hover_red txt13" href="Index.php?action=Reserve"><i class="fas fa-clipboard-list"></i> จองคิวรักษา</a>
          </li>
          <li class="nav-item dropdown mt-2 pe-1 dropdownmenuhome">
            <a class="dropdown-toggle txt01 text-decoration-none fw-bold a_hover_red txt13" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-hospital"></i> เกี่ยวกับเรา
            </a>
            <ul class="dropdown-menu dropdown-content-menuhome mt-0" aria-labelledby="navbarDropdown1" >
              <li class="mt-xl-0 mt-lg-0 mt-1 hover-red-bg"><a class="text-decoration-none px-3 my-1 hover-txt-red-to-white txt13 col-12 fw-bold" href="Index.php?action=HistoryHospital"><i class="fas fa-hospital-user"></i> ข้อมูลโรงพยาบาล</a></li>
              <li class="mt-xl-0 mt-lg-0 mt-1 hover-red-bg"><a class="text-decoration-none px-3 my-1 hover-txt-red-to-white txt13 col-12 fw-bold" href="Index.php?action=DataDoctor"><i class="fa fa-user-md" aria-hidden="true"></i> ข้อมูลแพทย์</a></li>
              <li class="mt-xl-0 mt-lg-0 mt-1 hover-red-bg"><a class="text-decoration-none px-3 my-1 hover-txt-red-to-white txt13 col-12 fw-bold" href="Index.php?action=Contact"><i class="fas fa-phone-alt"></i> ติดต่อเรา</a></li>
              <li class="mt-xl-0 mt-lg-0 mt-1 hover-red-bg"><a class="text-decoration-none px-3 my-1 hover-txt-red-to-white txt13 col-12 fw-bold" href="Index.php?action=Service"><i class="fa fa-bed" aria-hidden="true"></i> การให้บริการ</a></li>
            </ul>
          </li>
          <?php
            if (isset($_SESSION["user_id"])) {
              $user_id=$_SESSION["user_id"];
              $qry_show_name_user="SELECT * FROM user WHERE user_id ='$user_id'";
              $result_show_name_user = mysqli_query($dbcon,$qry_show_name_user);
              $row_show_name_user = mysqli_num_rows($result_show_name_user);
              if ($row_show_name_user > 0) {
              $row_user = mysqli_fetch_array($result_show_name_user,MYSQLI_ASSOC);
              $userid = $row_user['user_id'];
              $prefixname = $row_user['user_name_prefix'];
              $fname = $row_user['user_fname'];
              $lname = $row_user['user_lname'];
              $nameuser = $prefixname.$fname.' '.$lname;
              $menuaccount='
                  <li class="mt-xl-0 mt-lg-0 mt-1 hover-red-bg"><a class="text-decoration-none px-3 my-1 hover-txt-red-to-white txt13 col-12 fw-bold" href="Index.php?action=DataUser"><i class="fa fa-id-card-o" aria-hidden="true"></i> บัญชีผู้ใช้งาน</a></li>
                  <li class="mt-xl-0 mt-lg-0 mt-1 hover-red-bg"><a class="text-decoration-none px-3 my-1 hover-txt-red-to-white txt13 col-12 fw-bold" href="Index.php?action=HistoryReserve"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> ประวัติการจอง</a></li>
                  <li class="mt-xl-0 mt-lg-0 mt-1 hover-red-bg"><a class="text-decoration-none px-3 my-1 hover-txt-red-to-white txt13 col-12 fw-bold" data-bs-toggle="modal" data-bs-target="#modallogout"><i class="fas fa-power-off"></i> ออกจากระบบ</a></li>
              ';
            }
          }elseif (!isset($_SESSION["user_id"])) {
            $nameuser = '<span id="namesession">บัญชีผู้ใช้งาน</span>';
            $menuaccount='
            <li class="mt-xl-0 mt-lg-0 mt-1 hover-red-bg"><a class="text-decoration-none px-3 my-1 hover-txt-red-to-white txt13 col-12 fw-bold" data-bs-toggle="modal" data-bs-target="#modallogin"><i class="fas fa-sign-in-alt"></i> เข้าสู่ระบบ</a></li>
            <li class="mt-xl-0 mt-lg-0 mt-1 hover-red-bg"><a class="text-decoration-none px-3 my-1 hover-txt-red-to-white txt13 col-12 fw-bold" data-bs-toggle="modal" data-bs-target="#modalregister"><i class="fas fa-user-plus"></i> สมัครสมาชิก</a></li>
            ';
          }


          ?>
          <li class="nav-item dropdown ms-xl-4 ms-lg-4  mt-2 pe-xl-5 dropdownmenuhome">
            <a class="dropdown-toggle txt01 text-decoration-none fw-bold a_hover_red txt13" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-user-circle"></i> <?php echo $nameuser ; ?>
            </a>
            <ul class="dropdown-menu dropdown-content-menuhome mt-0" aria-labelledby="navbarDropdown2" id="menuregisterlogin">
              <?php echo $menuaccount ; ?>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
<div class="gradient-red" style="height:1px;"></div>

<!-- Modal login..................................................................-->
<div class="modal fade" id="modallogin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-titl fw-bold txt01 txt16">เข้าสู่ระบบ</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" novalidate id="SmFormLogin">

          <div class="form-floating mb-3">
            <input class="form-control txt13 shadow-none" id="login_card_id" placeholder="เลขบัตรประชาชน (ตัวเลข 13 หลัก)" maxlength="13" minlength="13" required></input>
            <label class="text-secondary txt13"for="floatingTextarea">เลขบัตรประชาชน</label>
            <div class="invalid-feedback">
              โปรดระบุเลขบัตรประชาชน 13 หลัก
            </div>
          </div>

          <div class="form-floating mb-3">
            <input class="form-control txt13 shadow-none" id="login_tel" placeholder="เบอร์โทรศัพท์ (ตัวเลข 0-9)" maxlength="10" minlength="10" required></input>
            <label class="text-secondary txt13"for="floatingTextarea">เบอร์โทรศัพท์</label>
            <div class="invalid-feedback">
              โปรดระบุเบอร์โทรศัพท์ 10 หลัก
            </div>
          </div>

            <span class="txt01 txt13">หรือ   <a type="button" class="text-decoration-none my-1 txt01 a_hover_red fw-bold" data-bs-toggle="modal" data-bs-target="#modalregister"data-bs-dismiss="modal">สมัครสมาชิก</a></span>
          <div class="modal-footer">
            <button type="button" onclick="SmFormLogin()" class="btn text-white bg02 txt13 shadow-none">ยืนยัน</button>
            <button type="button" class="btn btn-light border border-2 txt13 shadow-none" data-bs-dismiss="modal">ยกเลิก</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal register..................................................................-->
<div class="modal fade" id="modalregister" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title fw-bold txt01 txt16">สมัครสมาชิก</div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" novalidate id="formRegisterusermodal">

          <div class="form-floating mb-3">
            <input class="form-control txt13 shadow-none" id="prefixname" placeholder="คำนำหน้า (ภาษาไทย)" required></input>
            <label class="text-secondary txt13"for="floatingTextarea">คำนำหน้าชื่อ</label>
            <div class="invalid-feedback">
              โปรดระบุคำนำหน้าชื่อ
            </div>
          </div>

          <div class="form-floating mb-3">
            <input class="form-control txt13 shadow-none" id="fname" placeholder="ชื่อ (ภาษาไทย)" required></input>
            <label class="text-secondary txt13"for="floatingTextarea">ชื่อ</label>
            <div class="invalid-feedback">
              โปรดระบุชื่อ
            </div>
          </div>

          <div class="form-floating mb-3">
            <input class="form-control txt13 shadow-none" id="lname" placeholder="นามสกุล (ภาษาไทย)" required></input>
            <label class="text-secondary txt13"for="floatingTextarea">นามสกุล</label>
            <div class="invalid-feedback">
              โปรดระบุนามสกุล
            </div>
          </div>

          <div class="form-floating mb-3">
            <input class="form-control txt13 shadow-none" id="card_id" placeholder="เลขบัตรประชาชน (ตัวเลข 13 หลัก)" maxlength="13" minlength="13" required onkeypress="javascript:return isNumber(event)"></input>
            <label class="text-secondary txt13"for="floatingTextarea">เลขบัตรประชาชน</label>
            <div class="invalid-feedback">
              โปรดระบุเลขบัตรประชาชน 13 หลัก
            </div>
          </div>

          <div class="form-floating mb-3">
            <input class="form-control txt13 shadow-none" id="tel" placeholder="เบอร์โทรศัพท์ (ตัวเลข 0-9)" maxlength="10" minlength="10" required onkeypress="javascript:return isNumber(event)"></input>
            <label class="text-secondary txt13"for="floatingTextarea">เบอร์โทรศัพท์</label>
            <div class="invalid-feedback">
              โปรดระบุเบอร์โทรศัพท์ 10 หลัก
            </div>
          </div>

          <span class="txt01 txt13">หรือ <a type="button" class="text-decoration-none my-1 txt01 a_hover_red fw-bold" data-bs-toggle="modal" data-bs-target="#modallogin" data-bs-dismiss="modal"> เข้าสู่ระบบ</a></span>
          <div class="modal-footer">
            <button type="button" onclick="SmFormRegister()"class="btn text-white bg02 shadow-none txt13">ยืนยัน</button>
            <button type="button" class="btn btn-light border border-2 shadow-none txt13" data-bs-dismiss="modal">ยกเลิก</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Logout ...........................................................-->
<div class="modal fade" id="modallogout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="text-end p-3 pb-0">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="text-center h5 py-2">
        <p>ออกจากระบบหรือไม่</p>
      </div>
      <div class="py-3 text-center">
        <a href="User\Logout\Logout.php"class="text-decoration-none"><button type="button " class="btn text-white bg02 shadow-none">ยืนยัน</button></a>
        <a class="text-decoration-none me-3"><button type="button" class="btn btn-light border border-2 shadow-none" data-bs-dismiss="modal">ยกเลิก</button></a>
      </div>
    </div>
  </div>
</div>

<script src="User/Login/CheckLoginJs.js"></script>
<script src="User/RegisterUser/RegisterUserJs.js"></script>
<script>
// input เฉพาะ ตัวเลข.
function isNumber(evt) {
  var iKeyCode = (evt.which) ? evt.which : evt.keyCode
  if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
      return false;
  return true;
}
</script>
