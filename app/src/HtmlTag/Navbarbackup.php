<button type="button"class="btn bg02 rounded-circle btn-hover-to-top btn-to-top shadow-non" onclick="topFunction()"style="height:50px; width:50px;" id="myBtn"><i class="fa fa-chevron-up text-white" aria-hidden="true"></i></button>


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

<div class="sticky-top">
  <nav class="navbar navbar-expand-lg gradient d-none d-xl-block d-lg-none d-md-none d-sm-none my-0 py-0 mx-0">
    <div class="container-fluid">
      <div class="d-flex justify-content-between">
        <ul class="navbar-nav  me-auto">
        </ul>
        <div class="d-flex text-white me-0">
          <p class="m-0 p-0 me-0"style="font-size:13px">โรงพยาบาลมหาราชนครราชสีมา</p>
          <img class="me-0"src="Img/ImgWeb/line3.png" height="20" width="15"/>
          <a class="txt01 text-decoration-none me-0 a_hover_red" href="https://web.facebook.com/ThaitraditionalMedicineMHR" target="_blank"><img class="shadow "src="img/imgWeb/facebook.png" height="20" width="auto"/></a>
          <a class="txt01 text-decoration-none me-0 a_hover_red" href="https://liff.line.me/1645278921-kWRPP32q/?accountId=614vxpwr" target="_blank"><img class="shadow "src="Img/ImgWeb/line.png" height="20" width="auto"/></a>
        </div>
      </div>
    </div>
  </nav>

  <nav class="navbar navbar-expand-lg navbar-light bg-light d-none d-xl-block d-lg-none d-md-none d-sm-none py-1 shadow">
    <div class="container-fluid py-0 my-0">
      <a class="navbar-brand txt01 text-decoration-none py-0 my-0 a_hover_red" href="index.php">
          <div class="row">
            <div class="col-auto">
                <img src="Img/ImgWeb/logo002.png" height="45" width="auto"/>
            </div>
            <div class="col ps-0">
              <span class="p-0 m-0 txt15 txt01 fw-bold">คลินิกการแพทย์แผนไทย โรงพยาบาลมหาราชนครราชสีมา</span><br/>
              <span class="p-0 m-0 txt11 txt01">Thai Traditional Medicine Maharat Nakhon Ratchasima Hospital</span>
            </div>
          </div>
      </a>
      <img class="me-3"src="Img/ImgWeb/line4.png" height="40" width="10"/>
      <a href="tel:044235972"class="text-decoration-none txt16 fw-bold txt01 a_hover_red"><i class="fas fa-phone-alt"></i> 044-235972</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-0"></ul>
        <div class="d-flex ms-5">
          <a class="txt01 text-decoration-none pe-4 fw-bold a_hover_red" href="Index.php"><i class="fa fa-home" aria-hidden="true"></i> หน้าหลัก</a>
          <a class="txt01 text-decoration-none pe-4 fw-bold a_hover_red" href="Index.php?action=News"><i class="fas fa-globe-americas"></i> ข่าวสาร</a>
          <a class="txt01 text-decoration-none pe-4 fw-bold a_hover_red" href="Index.php?action=Reserve"><i class="fas fa-clipboard-list"></i> จองคิวรักษา</a>
          <div class="dropdown me-4">
            <a class="dropdown-toggle txt01 text-decoration-none fw-bold a_hover_red" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-hospital"></i>
              เกี่ยวกับเรา
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <div class="col-12 pt-1 hover-red">
                <li><a class="text-decoration-none px-3 my-1 hover-red" href="Index.php?action=DataDoctor"><i class="fa fa-user-md" aria-hidden="true"></i> ข้อมูลแพทย์</a></li>
              </div>
              <div class="col-12 pt-1 hover-red">
                <li><a class="text-decoration-none px-3 my-1 hover-red" href="Index.php?action=Contact"><i class="fas fa-phone-alt"></i> ติดต่อเรา</a></li>
              </div>
              <div class="col-12 pt-1 hover-red">
                <li><a class="text-decoration-none px-3 my-1 hover-red" href="Index.php?action=Service"><i class="fa fa-bed" aria-hidden="true"></i> การให้บริการ</a></li>
              </div>
            </ul>
          </div>
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
              $nameuser = $fname.' '.$lname;
              }
              echo '
              <div class="dropdown pe-4">
                <a class="dropdown-toggle txt01 text-decoration-none fw-bold a_hover_red" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user-circle"></i>
                '.$nameuser.'
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                  <div class="col-12 pt-1 hover-red">
                    <li><a class="text-decoration-none px-3 my-1 hover-red" href="Index.php?action=DataUser"><i class="fa fa-id-card-o" aria-hidden="true"></i> บัญชีผู้ใช้งาน</a></li>
                  </div>
                  <div class="col-12 pt-1 hover-red">
                    <li><a class="text-decoration-none px-3 my-1 hover-red" href="Index.php?action=HistoryReserve"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> ประวัติการจอง</a></li>
                  </div>
                  <div class="col-12 pt-1 hover-red">
                    <li><a class="text-decoration-none px-3 my-1 hover-red" data-bs-toggle="modal" data-bs-target="#modallogout"><i class="fa fa-sign-out" aria-hidden="true"></i> ออกจากระบบ</a></li>
                  </div>
                </ul>
              </div>';
          }elseif (!isset($_SESSION["user_id"])) {
              echo '
                <div class="dropdown pe-4">
                  <a class="dropdown-toggle txt01 text-decoration-none fw-bold a_hover_red" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user-circle"></i>
                    บัญชีผู้ใช้งาน
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                    <div class="col-12 pt-1 hover-red">
                      <li><a class="text-decoration-none px-3 my-1 hover-red" data-bs-toggle="modal" data-bs-target="#modallogin"><i class="fas fa-sign-in-alt"></i> เข้าสู่ระบบ</a></li>
                    </div>
                    <div class="col-12 pt-1 hover-red">
                      <li><a class="text-decoration-none px-3 my-1 hover-red" data-bs-toggle="modal" data-bs-target="#modalregister"><i class="fas fa-user-plus"></i> สมัครสมาชิก</a></li>
                    </div>
                    </ul>
                  </div>';
                }
              ?>
        </div>
      </div>
    </div>
  </nav>
</div>

<div class="sticky-top">
  <nav class="navbar navbar-expand-lg gradient d-block d-sm-block d-md-block d-lg-block d-xl-none p-0 m-0">
    <div class="container-flui">
      <div class="d-flex justify-content-between">
        <ul class="navbar-nav  me-auto">
        </ul>
        <div class="d-flex text-white me-0">
          <p class="m-0 p-0 me-0"style="font-size:13px">โรงพยาบาลมหาราชนครราชสีมา</p>
          <img class="me-0"src="Img/ImgWeb/line3.png" height="20" width="15"/>
          <a class="txt01 text-decoration-none me-0" href="https://web.facebook.com/ThaitraditionalMedicineMHR" target="_blank"><img class="shadow "src="img/imgWeb/facebook.png" height="20" width="auto"/></a>
          <a class="txt01 text-decoration-none me-0" href="https://liff.line.me/1645278921-kWRPP32q/?accountId=614vxpwr" target="_blank"><img class="shadow "src="Img/ImgWeb/line.png" height="20" width="auto"/></a>
        </div>
      </div>
    </div>
  </nav>

  <nav class="navbar navbar-expand-lg navbar-light bg01 d-block d-sm-block d-md-block d-lg-block d-xl-none py-2 shadow">
    <div class="container-fluid">
      <div class="navbar-brand py-0 my-0">
        <div class="row">
          <div class="col-auto">
            <div class="row">
              <div class="col-auto ps-1 p-0">
                <a class="text-decoration-none a_hover_red" href="index.php"><img src="Img/ImgWeb/logo002.png" height="50" width="auto"/></a>
              </div>
              <div class="col ps-1 p-0">
                <a class="h4 txt01 fw-bold text-decoration-none a_hover_red" href="index.php">
                  <span class="p-0 m-0 txt16 txt01 fw-bold">คลินิกการเเพทย์</span><br />
                  <span class="p-0 m-0 txt16 txt01 fw-bold">แผนไทย</span>
                </a>
              </div>
            </div>
          </div>
          <div class="col">
            <img class="pe-1"src="Img/ImgWeb/line4.png" height="45" width="8"/>
            <a href="tel:044235972"class="text-decoration-none txt16 fw-bold txt01 p-0 m-0 a_hover_red"><i class="fas fa-phone-alt"></i> โทร</a>
          </div>
        </div>
      </div>
      <button class="navbar-toggler bg02" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars px-2 py-2 text-light" aria-hidden="true"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent2">
        <div class="gradient3 mt-3 d-block d-sm-block d-md-block d-lg-block d-xl-none" style="height:2px;"></div>
        <ul class="navbar-nav me-auto mb-4 mb-lg-0 mt-3 pe-4">
          <li class="nav-item mb-3 pe-4 pt-xl-0 pt-lg-0 pt-md-0 pt-sm-0 pt-2 ps-lg-2">
            <a class="txt01 text-decoration-none px-lg-3 ps-0 pe-3 fw-bold a_hover_red" href="Index.php"><i class="fa fa-home" aria-hidden="true"></i> หน้าหลัก</a>
          </li>
          <li class="nav-item mb-3 pe-4 ">
            <a class="txt01 text-decoration-none pe-3 fw-bold a_hover_red" href="Index.php?action=News"><i class="fas fa-globe-americas"></i> ข่าวสาร</a>
          </li>
          <li class="nav-item mb-4 pe-4 ">
            <a class="txt01 text-decoration-none pe-3 fw-bold a_hover_red" href="Index.php?action=Reserve"><i class="fas fa-clipboard-list"></i> จองคิวรักษา</a>
          </li>

          <li class="nav-item dropdow mb-4 pe-4">
            <a class="txt01 dropdown-toggle text-decoration-none fw-bold a_hover_red" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-hospital"></i>
               เกี่ยวกับเรา</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
              <li><a class="dropdown-item my-1 txt01" href="Index.php?action=DataDoctor"><i class="fa fa-user-md" aria-hidden="true"></i> ข้อมูลแพทย์</a></li>
              <li><a class="dropdown-item my-1 txt01 pe-4"  href="Index.php?action=Contact"><i class="fas fa-phone-alt"></i> ติดต่อเรา</a></li>
              <li><a class="dropdown-item my-1 txt01 pe-4"  href="Index.php?action=Service"><i class="fa fa-bed" aria-hidden="true"></i> การให้บริการ</a></li>
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
              $nameuser = $fname.' '.$lname;
              }

              echo '
              <li class="nav-item dropdown mb-4 pe-4">
                <a class="dropdown-toggle txt01 text-decoration-none fw-bold a_hover_red"id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user-circle"></i>
                '.$nameuser.'
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                  <li><a class="dropdown-item my-1 txt01" href="Index.php?action=DataUser"><i class="fa fa-id-card-o" aria-hidden="true"></i> บัญชีผู้ใช้งาน</a></li>
                  <li><a class="dropdown-item my-1 txt01" href="Index.php?action=HistoryReserve"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> ประวัติการจอง</a></li>
                  <li><a class="dropdown-item my-1 txt01" data-bs-toggle="modal" data-bs-target="#modallogout"><i class="fa fa-sign-out" aria-hidden="true"></i> ออกจากระบบ</a></li>
                </ul>
              </li>';
          }elseif (!isset($_SESSION["user_id"])) {
              echo '
                <li class="nav-item dropdown mb-4 pe-4">
                  <a class="dropdown-toggle txt01 text-decoration-none fw-bold a_hover_red" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user-circle"></i>
                    บัญชีผู้ใช้งาน
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                    <li><a class="dropdown-item my-1 txt01" data-bs-toggle="modal" data-bs-target="#modallogin"><i class="fas fa-sign-in-alt"></i> เข้าสู่ระบบ</a></li>
                    <li><a class="dropdown-item my-1 txt01" data-bs-toggle="modal" data-bs-target="#modalregister"><i class="fas fa-user-plus"></i> สมัครสมาชิก</a></li>
                  </ul>
                </li>';
                }
              ?>
        </ul>
      </div>
    </div>
  </nav>
</div>

<!-- Modal login..................................................................-->
<div class="modal fade" id="modallogin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-titl fw-bold txt01">เข้าสู่ระบบ</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" novalidate id="SmFormLogin">

          <div class="form-floating mb-3">
            <input class="form-control" id="login_card_id" placeholder="เลขบัตรประชาชน (ตัวเลข 13 หลัก)" maxlength="13" minlength="13" required onkeypress="javascript:return isNumber(event)"></input>
            <label class="text-secondary"for="floatingTextarea">เลขบัตรประชาชน</label>
            <div class="invalid-feedback">
              โปรดระบุเลขบัตรประชาชน 13 หลัก
            </div>
          </div>

          <div class="form-floating mb-3">
            <input class="form-control" id="login_tel" placeholder="เบอร์โทรศัพท์ (ตัวเลข 0-9)" maxlength="10" minlength="10" required onkeypress="javascript:return isNumber(event)"></input>
            <label class="text-secondary"for="floatingTextarea">เบอร์โทรศัพท์</label>
            <div class="invalid-feedback">
              โปรดระบุเบอร์โทรศัพท์ 10 หลัก
            </div>
          </div>

            <span class="txt01">หรือ</span>
            <a type="button" class="text-decoration-none my-1 txt01 a_hover_red" data-bs-toggle="modal" data-bs-target="#modalregister"data-bs-dismiss="modal">สมัครสมาชิก</a>
          <div class="modal-footer">
            <button type="button" onclick="SmFormLogin()" class="btn text-white bg02">ยืนยัน</button>
            <button type="button" class="btn btn-light border border-2" data-bs-dismiss="modal">ยกเลิก</button>
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
        <h5 class="modal-title fw-bold txt01">สมัครสมาชิก</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" novalidate id="formRegisterusermodal">

          <div class="form-floating mb-3">
            <input class="form-control" id="prefixname" placeholder="คำนำหน้า (ภาษาไทย)" required></input>
            <label class="text-secondary"for="floatingTextarea">คำนำหน้า</label>
            <div class="invalid-feedback">
              โปรดระบุคำนำหน้า
            </div>
          </div>

          <div class="form-floating mb-3">
            <input class="form-control" id="fname" placeholder="ชื่อ (ภาษาไทย)" required></input>
            <label class="text-secondary"for="floatingTextarea">ชื่อ</label>
            <div class="invalid-feedback">
              โปรดระบุชื่อ
            </div>
          </div>

          <div class="form-floating mb-3">
            <input class="form-control" id="lname" placeholder="นามสกุล (ภาษาไทย)" required></input>
            <label class="text-secondary"for="floatingTextarea">นามสกุล</label>
            <div class="invalid-feedback">
              โปรดระบุนามสกุล
            </div>
          </div>

          <div class="form-floating mb-3">
            <input class="form-control" id="card_id" placeholder="เลขบัตรประชาชน (ตัวเลข 13 หลัก)" maxlength="13" minlength="13" required onkeypress="javascript:return isNumber(event)"></input>
            <label class="text-secondary"for="floatingTextarea">เลขบัตรประชาชน</label>
            <div class="invalid-feedback">
              โปรดระบุเลขบัตรประชาชน 13 หลัก
            </div>
          </div>

          <div class="form-floating mb-3">
            <input class="form-control" id="tel" placeholder="เบอร์โทรศัพท์ (ตัวเลข 0-9)" maxlength="10" minlength="10" required onkeypress="javascript:return isNumber(event)"></input>
            <label class="text-secondary"for="floatingTextarea">เบอร์โทรศัพท์</label>
            <div class="invalid-feedback">
              โปรดระบุเบอร์โทรศัพท์ 10 หลัก
            </div>
          </div>

          <span class="txt01">หรือ</span>
          <a type="button" class="text-decoration-none my-1 txt01 a_hover_red" data-bs-toggle="modal" data-bs-target="#modallogin" data-bs-dismiss="modal"> เข้าสู่ระบบ</a>
          <div class="modal-footer">
            <button type="button" onclick="SmFormRegister()"class="btn text-white bg02">ยืนยัน</button>
            <button type="button" class="btn btn-light border border-2" data-bs-dismiss="modal">ยกเลิก</button>
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
        <a href="User\Logout\Logout.php"class="text-decoration-none"><button type="button " class="btn text-white bg02">ยืนยัน</button></a>
        <a class="text-decoration-none me-3"><button type="button" class="btn btn-light border border-2" data-bs-dismiss="modal">ยกเลิก</button></a>
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
