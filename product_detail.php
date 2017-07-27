<?php
          require_once('../backoffice_new/assets/PHP-MySQLi-Database-Class-master/MysqliDb.php');
          require_once('../backoffice_new/ajax/connect.php');

          $img_path = "../backoffice_new/images/";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>CapitalPlaza</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="assets/css/style.css" media="screen,projection" />
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/supermarket/stylesheet.css">
</head>

<body>
 <header>

    <nav>
      <div class="nav-wrapper container">
        <a href="#" class="brand-logo" style="height:100%;"><img src="assets/images/logo.png"  class="responsive-img" style="height:70%; margin-top:8px;"></a>
        <div class="mini_iconSocial topicon">          
        <div class="wrapSocial">
              <a href="#">
                <div class="itemSocial">
                  <div class="itemIconSocial line"><img src="assets/images/line.png" alt="" /></div>
                </div>
              </a>
              <a href="#">
                <div class="itemSocial">
                  <div class="itemIconSocial facebook"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                </div>
              </a>
              <a href="#">
                <div class="itemSocial">
                  <div class="itemIconSocial phone"><i class="fa fa-phone" aria-hidden="true"></i></div>
                </div>
              </a>
              <a href="#">
                <div class="itemSocial">
                  <div class="itemIconSocial email"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                </div>
              </a>
              <a href="#">
                <div class="itemSocial">
                  <div class="itemIconSocial location"><img src="assets/images/placeholder.png" alt="" /></div>
                </div>
              </a>
            </div>
            </div>
      </div>
    </nav>
    <div class="bgcHeader">
      <div class="container menu">
        <ul class="menu-list">
          <a href="index.html"><li class="menu_item">หน้าแรก</li></a>
          <a href="about.html"><li class="menu_item">เกี่ยวกับเรา</li></a>
          <a href="hightlight.html"><li class="menu_item">ไฮไลท์</li></a>
          <a href="product.html"><li class="menu_item">สินค้าและโปรโมชั่น</li></a>
          <a href="store.html"><li class="menu_item">ร้านค้า</li></a>
          <a href="news.html"><li class="menu_item">ข่าวสาร/ประชาสัมพันธ์</li></a>
          <a href="activities.html"><li class="menu_item">กิจกรรม</li></a>
          <a href="join.html"><li class="menu_item">ร่วมเป็นส่วนหนึ่งกับเรา</li></a>
          <a href="contact.html"><li class="menu_item">ติดต่อเรา</li></a>
        </ul>

        <div class="search">
          <input type="text" name="" value="" placeholder="ค้นหาร้าน">
          <button class="search_btn"><i class="material-icons">search</i></button>
        </div>
      </div>
    </div>
  </header>
      <div class="padding_header">
        <div class="miniBanner" style="background-image:url('assets/images/background1.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <h2 style="font-size:42px;">ร่วมเป็นส่วนหนึ่ง<br/>กับเรา</h2>
                    </div>
                </div>
            </div>
        </div>
    <br/>
    <section>
        <div class="container">
            <div class="row">
              <div class="col s2"></div>
              <div class="col s8">
                <div class="imgProduct_detail"></div>
              </div>
              <div class="col s2"></div>
               <?php
                if(isset($_GET['id'])){
                    $id =  $_GET['id'];
                }else{
                    $id = 0;
                }
                $db->where('is_del',0);
                 $db->where('id',$id);
                 $result = $db->getOne('product_promotion');
              
          ?>
              <div class="col s12">
                <h2>test</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborumLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborumLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
              <div class="col s8"><div class="imgProduct_detail" style="height:460px"></div></div>
              <div class="col s4">
                <div class="col s12"><div class="imgProduct_detail" style="height:215px; margin-bottom:2.05em;"></div></div>
                <div class="col s12"><div class="imgProduct_detail" style="height:215px"></div></div>
              </div>
              <div class="col s6"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
                            <div class="col s6"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
            </div>
        </div>
    </section>
    <br/>


     <footer>
        <div class="footer_bar">
            <div class="container">
                <din class="row">
                    <div class="col s12">
                        <img src="assets/images/Asset1.png" alt="" class="responsive-img">
                    </div>
                </din>
            </div>
        </div>
        <div class="footer_detail">
            <div class="container">
                <div class="row">
                    <div class="col s4">
                        <p style="color:#152e70">บริษัท แคปปิตอลพลาซ่า จำกัด<br/> เลขที่ 311 ถนนเจริญกรุง 17<br/> แขวงป้อมปราบ เขตป้อมปราบศัตรูพ่าย
                            <br/> กรุงเทพมหานคร 10100</p>
                    </div>
                    <div class="col s4">
                        <p style="color:#152e70">Mobile : 085-176-3377<br/> Office : 02-224-3635<br/> Email : capital.klongthom@gmail.com<br/> Website
                            : www.capitalplaza.co.th</p>
                    </div>
                    <div class="col s4 mini_iconSocial">
                        <h6 style="color:#152e70">Website : www.capitalplaza.co.th </h6>
                        <div class="wrapSocial">
                            <a href="#">
                                <div class="itemSocial">
                                    <div class="itemIconSocial line"><img src="assets/images/line.png" alt="" /></div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="itemSocial">
                                    <div class="itemIconSocial facebook"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="itemSocial">
                                    <div class="itemIconSocial phone"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="itemSocial">
                                    <div class="itemIconSocial email"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="itemSocial">
                                    <div class="itemIconSocial location"><img src="assets/images/placeholder.png" alt="" /></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <br/>



                </div>
            </div>
        </div>
        <div class="footerCopy">
            <p>Copyright <span style="font-family:sans-serif; color:#FF962F">&copy;</span> 2017 CAPITAL PLAZA Co., LTD. All
                Right Reserved</p>
        </div>
    </footer>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="assets/js/myScript.js"></script>
    <script type="text/javascript" src="assets/js/lightbox/js/lightbox.js"></script>
</body>

</html>
