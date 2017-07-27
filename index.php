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
  <link rel="stylesheet" href="assets/js/lightbox/css/lightbox.css">
</head>

<body>
 <div class="overlay overlay-mbl">
<div class="dialog-inner">
<div class="dialog-box">
<h2>Enter your keyword</h2>
<form method="get" action='/search' class="search-popup-inner">
<input type="text" name="q" onblur='if (this.value == &#39;&#39;) {this.value = &#39;Search the site&#39;;}' onfocus='if (this.value == &#39;Search the site&#39;) {this.value = &#39;&#39;;}' value='Search the site' />
<button type="submit">Search</button>
</form>
<div><button type="button" class="overlay-close">X</button></div>
</div>
</div>
</div>
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
    <div class="banner headBanner"></div>
  </div>

  <div class="titleBar">
    <div class="container title">
      <img src="assets/images/mascot1.png" alt="" class="responsive-img" style="height:80%">
      <label for="">Capital Plaza</label>

    </div>
  </div>

  

  <a href="assets/images/map.jpg" data-lightbox="image-1" data-title="Map">
    <div class="banner" style="background-image:url('assets/images/map.jpg'); height:450px;"></div>
  </a>
  <br/>
  <section>
    <div class="container detail">
      <div class="row">
        <div class="col s12">
          <p>ตู้เซฟ แคร์โปสเตอร์ ช็อปปิ้ง โมเดลเซ็นทรัลเหมย เพนตากอนแจ๊กเก็ตรองรับ พอเพียงโปร การันตีฮวงจุ้ย เป็นไง เที่ยงคืน
            ระโงกเทคโนแครตเทอร์โบ กลาสอุปการคุณไทม์ผลักดัน สเตเดียมปัจฉิมนิเทศชาร์จ เพลซเซ็กส์ไฮไลท์ เสกสรรค์รีดไถ วโรกาสช็อปฮาราคีรี
            ติวเตอร์นายพราน โปรดักชั่นบอยคอตต์ เฝอวิภัชภาคบูม ครัวซองซีรีส์อุปัทวเหตุโค้ช อึ้มคอร์รัปชั่นเคลม อุปสงค์จูเนียร์ติงต๊องพรีเซ็นเตอร์แพนงเชิญ
            ระโงก อวอร์ด โยเกิร์ตวีซ่าคาแรคเตอร์สเปกพาเหรด สตูดิโอ สติ๊กเกอร์เธคโมจิ แจ๊กพ็อต พงษ์อุเทนฮันนีมูนวิว อพาร์ตเมนต์สมิติเวชคอรัปชัน
            อิมพีเรียลมลภาวะลอร์ดโฮลวีต กุมภาพันธ์จิ๊กโอเพ่น ซัพพลายเออร์โบว์ คอมเพล็กซ์ผิดพลาดลิสต์ มัฟฟิน มิวสิคโดมิโนขั้นตอนแอโรบิคโมหจริต
            โบรชัวร์ไมค์เพียบแปร้ไง ออกแบบคอนเซ็ปต์ โต๋เต๋ จิ๊กซอว์แอลมอนด์นู้ด แทงกั๊กซังเต เบิร์ดดีกรี ปักขคณนาเอาท์เกมส์อพาร์ทเมนต์สหัสวรรษ
            ฟลุกเวอร์ว้อย ฟีดตรวจทาน แทงกั๊กหมายปองมิวสิค รามาธิบดี สตูดิโอช็อคสเปกฟลุท คอนโดสโตนเฟอร์นิเจอร์เป่ายิงฉุบคอร์ป
            แล็บ ฮ่องเต้ดั๊มพ์แมนชั่นเบญจมบพิตร </p>
          <div class="col s12 label"> <label for="อ่านเพิ่มเติม">คลิกอ่านเพิ่มเติม...</label></div>
        </div>



      </div>
    </div>
  </section>
  <br/>
  <br/>
  <section>
    <div class="container">
      <div class="row">
        <div class="col s5" style="padding:0">
        <div class="col s12" style="padding:0">

          <?php
                $db->where('is_del',0);
                 $db->where('is_hightlight',1);
                 $result = $db->getOne('hightlight');
              
          ?>
          <div class="image_thumnail" style="background-image:url('<?php echo $img_path."hightlight/desktop/".$result['desktop_img']; ?>')">
            <div class="bgOpacity">
              <div class="itemTitle">
                <h2><?php  echo $result['title']; ?></h2>
              </div>
              <p><?php  echo $result['detail']; ?></p>
            </div>
          </div>
        </div>
        </div>

      <div class="col s7">
                <?php
                $db->where('is_hightlight',0);
                 $db->where('is_del',0);
                $db->where('is_random',0);
                $items_notrandom = $db->get('hightlight');

                 $db->where('is_hightlight',0);
                 $db->where('is_del',0);
                $db->where('is_random',1);
                $db->orderBy("RAND ()");
                $items_random = $db->get('hightlight');
                    $setMargin = "";
                    $num_itemRandom = 0;

                  for ($i=0; $i < 6 ; $i++) { 
                      if(isset($items_notrandom[$i])){
                        $item_hightligh = $items_notrandom[$i];   
                        if (strlen($item_hightligh['detail']) > 105){
                            $item_hightligh['detail'] = mb_substr($item_hightligh['detail'], 0, 102,'UTF-8') . '...';
                        }
                        
                      }else{
             
                        if(isset($items_random[$num_itemRandom])){
                         $item_hightligh = $items_random[$num_itemRandom];   
                         $num_itemRandom++;
                        }else{
                        $item_hightligh['title'] = "";
                        $item_hightligh['detail'] = "";
                        $item_hightligh['desktop_img'] = "";
                        }
                     
                      }                   
                    if($i>2){
                        $setMargin = "margin-top:25px;";
                    }
                    ?>

                            <div class="col s4">
          <div class="image_mini_thumnail" style="<?php echo $setMargin; ?> background-image:url('<?php  echo $img_path."hightlight/desktop/".$item_hightligh['desktop_img']; ?>')">
            <div class="bgOpacity">
              <div class="itemTitle">
                <h2><?php echo $item_hightligh['title'];?></h2>
              </div>
              <p><?php echo $item_hightligh['detail'];?></p>
            </div>
          </div>
         
        </div>
        <?php
                  
                  }
                ?>



        </div>
      </div>
    </div>
  </section>
  <br/>
  
  <div class="moreicon">
    <a href="">
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle"></div>
    </a>
  </div>
  <br/>
  <div class="titleBar">
    <div class="container title">
      <img src="assets/images/mascot_01.png" alt="" class="responsive-img" style="height:80%">
      <label for="" style="color:#d7fae3;">สินค้าและโปรโมชั่น</label>

    </div>
  </div>
  <section>
    <div class="container">
      <div class="row">
      <?php

               $db->where('is_del',0); 
              $db->orderBy("create_date","DESC");
                $items_product = $db->get('product_promotion',6);
              for ($i_product=0; $i_product < count($items_product); $i_product++) { 

                $item_product = $items_product[$i_product];
                 if (strlen($item_product['detail']) > 200){
                            $item_product['detail'] = mb_substr($item_product['detail'], 0, 197,'UTF-8') . '...';
                     
                        }
             
      ?>
        <div class="col s6">
          <div class="product">
            <div class="container">
              <div class="row">
                <div class="col s4 product_img" style="background-image:url('<?php  echo  $img_path."product/desktop/".$item_product['desktop_img']?>')"></div>
                <div class="col s8 product_detail">
                  <div class="wrapProduct_detail">
                    <h5><?php  echo $item_product['title']?></h5>
                    <p><?php  echo $item_product['detail']?></p>

                  </div>
                  <div class="col s12 label"> <label for="อ่านเพิ่มเติม">คลิกอ่านเพิ่มเติม...</label></div>
                </div>
              </div>
            </div>
          </div>
        </div>
              <?php } ?>
        
       
      </div>
    </div>
  </section>
  <div class="moreicon">
    <a href="">
      <div class="circle" style="background-color:#5bc8b3;"></div>
      <div class="circle" style="background-color:#5bc8b3;"></div>
      <div class="circle" style="background-color:#5bc8b3;"></div>
    </a>
  </div>
  <div class="mini_banner">
    <div class="container">
      <div class="row">
        <div class="col s4"><img src="assets/images/message.png" class="responsive-img"></div>
        <div class="col s4"><img src="assets/images/messageLOGO.png" class="responsive-img"></div>
        <div class="col s4"><img src="assets/images/messageTime.png" class="responsive-img"></div>
      </div>  
    </div>
  </div>
  <div class="parallax-container">
    <div class="parallax"><img src="assets/images/IMG_5607.jpg"></div>
  </div>
  <div class="titleBar">
    <div class="container title">
      <img src="assets/images/mascot_06.png" alt="" class="responsive-img" style="height:80%">
      <label for="" style="color:#f8ed9a;">ร้านค้า</label>

    </div>
  </div>
  <section>
    <div class="container">
      <div class="row">
       <?php

               $db->where('is_del',0); 
              $db->orderBy("create_date","DESC");
                $items_store = $db->get('store',6);
              for ($i_store=0; $i_store < count($items_store); $i_store++) { 

                $item_store = $items_store[$i_store];
                 if (strlen($item_store['detail']) > 200){
                            $item_store['detail'] = mb_substr($item_store['detail'], 0, 197,'UTF-8') . '...';
                     
                        }
             
      ?>


        <div class="col s6">
          <div class="product">
            <div class="container">
              <div class="row">
                <div class="col s4 product_img" style="background-image:url('<?php  echo  $img_path."store/desktop/".$item_store['desktop_img']?>')"></div>
                <div class="col s8 product_detail">
                  <div class="wrapProduct_detail">
                    <h5 style="color:#152e6f;"><?php  echo $item_store['title']?></h5>
                    <p><?php  echo $item_store['detail']?></p>

                  </div>
                  <div class="col s12 label"> <label for="อ่านเพิ่มเติม">คลิกอ่านเพิ่มเติม...</label></div>
                </div>
              </div>
            </div>
          </div>
        </div>

              <?php } ?>
      </div>
    </div>
  </section>
  <div class="moreicon">
    <a href="">
      <div class="circle" style="background-color:#152e6f;"></div>
      <div class="circle" style="background-color:#152e6f;"></div>
      <div class="circle" style="background-color:#152e6f;"></div>
    </a>
  </div>
  <section>
    <div class="parallax-container bannerText">
      <div class="parallax"><img src="assets/images/IMG_5583.jpg"></div>
      <div class="bgOpacity_bannerText">
        <div class="container">
          <div class="row">
            <div class="col s12">
              <p>แคปปิตอล พลาซ่า เราเป็นศูนย์รวมร้าน จำหน่ายอุปกรณ์มือถือที่รวมอยู่ในสถาน ที่เดียวกัน มากที่สุด บนถนนเจริญกรุงท่านสามารถหาอุปกรณ์มือถือ
                และ Gadget ได้ครบ จบในที่เดียว</p>

            </div>

          </div>
        </div>
      </div>
    </div>


  </section>

  <div class="titleBar">
    <div class="container title">
      <img src="assets/images/mascot_04.png" alt="" class="responsive-img" style="height:80%">
      <label style="color:#eecef7;">ข่าวสาร ประชาสัมพันธ์</label>

    </div>
  </div>
  <br/>
  <section>
    <div class="container">
      <div class="row setTable">
      <?php

               $db->where('is_del',0); 
              $db->orderBy("create_date","DESC");
                $items_news = $db->get('news',6);
              for ($i_news=0; $i_news < count($items_news); $i_news++) { 

                $item_news = $items_news[$i_news];
                 if (strlen($item_news['detail']) > 200){
                            $item_news['detail'] = mb_substr($item_news['detail'], 0, 197,'UTF-8') . '...';
                     
                        }
             
      ?>
        <div class="col s4">
          <div class="news">
            <div class="news_img" style="background-image:url('<?php  echo  $img_path."news/desktop/".$item_news['desktop_img']?>')"></div>
            <h5><?php  echo $item_news['title']?></h5>
            <hr/>
            <p><?php  echo $item_news['detail']?></p>
          </div>
        </div>
    <?php } ?>
      </div>
    </div>
  </section>
  <div class="moreicon">
    <a href="">
      <div class="circle" style="background-color:#b45dcc;"></div>
      <div class="circle" style="background-color:#b45dcc;"></div>
      <div class="circle" style="background-color:#b45dcc;"></div>
    </a>
  </div>
  <div class="titleBar">
    <div class="container title">
      <img src="assets/images/mascot_02.png" alt="" class="responsive-img" style="height:80%">
      <label for="">กิจกรรม</label>

    </div>
  </div>
  <br/>
  <section>
    <div class="container">
      <div class="row setTable">
      <?php

               $db->where('is_del',0); 
              $db->orderBy("create_date","DESC");
                $items_activity = $db->get('activity',6);
              for ($i_activity=0; $i_activity < count($items_activity); $i_activity++) { 

                $item_activity = $items_activity[$i_activity];
                 if (strlen($item_activity['detail']) > 200){
                            $item_activity['detail'] = mb_substr($item_activity['detail'], 0, 197,'UTF-8') . '...';
                     
                        }
             
      ?>
        <div class="col s4">
          <div class="news">
            <div class="news_img" style="background-image:url('<?php  echo  $img_path."activity/desktop/".$item_activity['desktop_img']?>')"></div>
            <h5><?php  echo $item_activity['title']?></h5>
            <hr/>
            <p><?php  echo $item_activity['detail']?></p>
          </div>
        </div>
              <?php } ?>
      </div>
    </div>
  </section>
  <div class="moreicon">
    <a href="">
      <div class="circle" style="background-color:#152e6f;"></div>
      <div class="circle" style="background-color:#152e6f;"></div>
      <div class="circle" style="background-color:#152e6f;"></div>
    </a>
  </div>
  <div class="titleBar">
    <div class="container title">
      <img src="assets/images/mascot_03.png" alt="" class="responsive-img" style="height:80%">
      <label for="">ร่วมเป็นส่วนหนึ่งกับเรา</label>

    </div>
  </div>
  <div class="banner" style="background-image:url('assets/images/IMG_5615.jpg'); height:600px; background-position:bottom;" ></div>
  <br/>
  <section>
    <div class="container detail">
      <div class="row">
        <div class="col s12">
          <p style="text-align:left">ตู้เซฟ แคร์โปสเตอร์ ช็อปปิ้ง โมเดลเซ็นทรัลเหมย เพนตากอนแจ๊กเก็ตรองรับ พอเพียงโปร การันตีฮวงจุ้ย เป็นไง เที่ยงคืน
            ระโงกเทคโนแครตเทอร์โบ กลาสอุปการคุณไทม์ผลักดัน สเตเดียมปัจฉิมนิเทศชาร์จ เพลซเซ็กส์ไฮไลท์ เสกสรรค์รีดไถ วโรกาสช็อปฮาราคีรี
            ติวเตอร์นายพราน โปรดักชั่นบอยคอตต์ เฝอวิภัชภาคบูม ครัวซองซีรีส์อุปัทวเหตุโค้ช อึ้มคอร์รัปชั่นเคลม อุปสงค์จูเนียร์ติงต๊องพรีเซ็นเตอร์แพนงเชิญ
            ระโงก อวอร์ด โยเกิร์ตวีซ่าคาแรคเตอร์สเปกพาเหรด สตูดิโอ สติ๊กเกอร์เธคโมจิ แจ๊กพ็อต พงษ์อุเทนฮันนีมูนวิว อพาร์ตเมนต์สมิติเวชคอรัปชัน
            อิมพีเรียลมลภาวะลอร์ดโฮลวีต กุมภาพันธ์จิ๊กโอเพ่น ซัพพลายเออร์โบว์ คอมเพล็กซ์ผิดพลาดลิสต์ มัฟฟิน มิวสิคโดมิโนขั้นตอนแอโรบิคโมหจริต
            โบรชัวร์ไมค์เพียบแปร้ไง ออกแบบคอนเซ็ปต์ โต๋เต๋ จิ๊กซอว์แอลมอนด์นู้ด แทงกั๊กซังเต เบิร์ดดีกรี ปักขคณนาเอาท์เกมส์อพาร์ทเมนต์สหัสวรรษ
            ฟลุกเวอร์ว้อย ฟีดตรวจทาน แทงกั๊กหมายปองมิวสิค รามาธิบดี สตูดิโอช็อคสเปกฟลุท คอนโดสโตนเฟอร์นิเจอร์เป่ายิงฉุบคอร์ป
            แล็บ ฮ่องเต้ดั๊มพ์แมนชั่นเบญจมบพิตร </p>
        </div>



      </div>
    </div>
    <div class="moreicon">
      <a href="">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
      </a>
    </div>
  </section>

  <div class="fixed-action-btn" style="display: none;">
    <a class="btn-floating btn-large grey totop">
      <i class="large material-icons">arrow_upward</i>
    </a>
  </div>
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
            <p style="color:#152e70">บริษัท แคปปิตอลพลาซ่า จำกัด<br/> เลขที่ 311 ถนนเจริญกรุง 17<br/> แขวงป้อมปราบ เขตป้อมปราบศัตรูพ่าย <br/> กรุงเทพมหานคร
              10100</p>
          </div>
          <div class="col s4">
            <p style="color:#152e70">Mobile : 085-176-3377<br/> Office : 02-224-3635<br/> Email : capital.klongthom@gmail.com<br/> Website : www.capitalplaza.co.th</p>
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
      <p>Copyright <span style="font-family:sans-serif; color:#FF962F">&copy;</span> 2017 CAPITAL PLAZA Co., LTD. All Right
        Reserved</p>
    </div>
  </footer>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
  <script type="text/javascript" src="assets/js/myScript.js"></script>
  <script type="text/javascript" src="assets/js/lightbox/js/lightbox.js"></script>

</body>

</html>
