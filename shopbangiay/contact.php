<?php
require "config/constants.php";
session_start();
if ( isset( $_SESSION[ "uid" ] ) ) {
  header( "location:profile.php" );
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Thông tin liên hệ</title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<script src="js/jquery2.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="main.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="css2.css">
<style></style>
</head>
<body>
<div class="wait overlay">
  <div class="loader"></div>
</div>
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false"> <span class="sr-only">navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a href="index.php" class="navbar-brand">Jagermeister</a> </div>
    <div class="collapse navbar-collapse" id="collapse">
      <ul class="nav navbar-nav">
        <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="sanpham.php"><span class="glyphicon glyphicon-modal-window"></span>Sản Phẩm</a></li>
        <li><a href="contact.php"><span class="glyphicon glyphicon-modal-window"></span> Thông tin liên hệ</a></li>
        <li><a href="media.php"><span class="glyphicon glyphicon-modal-window"></span>Tin Tức</a></li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" id="search">
        </div>
        <button type="submit" class="btn btn-primary" id="search_btn"><span class="glyphicon glyphicon-search"></span></button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span> Cart <span class="badge" >0</span></a>
          <div class="dropdown-menu" style="width:400px;">
            <div class="panel panel-success">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-md-3">Sl.No</div>
                  <div class="col-md-3">Product Image</div>
                  <div class="col-md-3">Product Name</div>
                  <div class="col-md-3">Price in <?php echo CURRENCY; ?></div>
                </div>
              </div>
              <div class="panel-body">
                <div id="cart_product"> 
                  <!--<div class="row">
                  <div class="col-md-3">Sl.No</div>
                  <div class="col-md-3">Product Image</div>
                  <div class="col-md-3">Product Name</div>
                  <div class="col-md-3">Price in VND.</div>
                </div>--> 
                </div>
              </div>
              <div class="panel-footer"></div>
            </div>
          </div>
        </li>
        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Login/Register</a>
          <ul class="dropdown-menu">
            <div style="width:300px;">
              <div class="panel panel-primary">
                <div class="panel-heading">Login</div>
                <div class="panel-heading">
                  <form onsubmit="return false" id="login">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" required/>
                    <label for="email">Password</label>
                    <input type="password" class="form-control" name="password" id="password" required/>
                    <p><br/>
                    </p>
                    <input type="submit" class="btn btn-warning" value="Login">
                    <a href="customer_registration.php?register=1" style="color: blue; text-decoration:none;">Tạo tài khoản mới</a>
                  </form>
                </div>
                <div class="panel-footer" id="e_msg"></div>
              </div>
            </div>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
<p><br/>
</p>
<p><br/>
</p>
<p><br/>
</p>
<div id="talk" class="talk">
         <div class="container">
            <div class="row ">
               <div class="col-md-6 ">
                  <div class="wines">
                     <h3>Thông Tin Liên Hệ</h3>
                     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem  ere, content here', making itIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem  ere, content here', making it</p>
                     <h3>Cảm ơn bạn đã cùng đồng hành<br>
                        với chúng tôi trong năm <?php  echo date("Y").'</h3>'; ?>
                     </div>
                  </div>
                  <div class="col-md-6 ">
                     <form class="main_form " action="upload.php" method="post" enctype="multipart/form-data" >
                        <div class="row">  
                           <div class="nice-select col-md-12 " tabindex="0">
                              <span class="current">--- Chọn chủ đề---</span>
                              <ul class="list" >
                                 <li class="option " data-value="1" >Tư Vấn</li>
                                 <li class="option " data-value="2">Khuyến nại - Phản ánh</li>
                                 <li class="option " data-value="3">Góp ý cải tiến</li>
                              </ul>
                           </div>
                           <div class="col-md-12 ">
                              <input class="form_contril" placeholder="Tiêu đề " type="text" name="txt_tieude">
                           </div>
                           <div class="col-md-12">
                              <textarea class="textarea" placeholder="Nội dung" type="text" name="txt_message"></textarea>
                           </div>
                           <div class="col-md-12 ">
                              <input class="form_contril" placeholder="Tên " type="text" name="txt_name">
                           </div>
                           <div class="col-md-12">
                              <input class="form_contril" placeholder="Số điện thoại" type="mobile" name="txt_mobile">
                           </div>
                           <div class="col-md-12">
                              <input class="form_contril" placeholder="Email" type="email" name="txtemail">
                           </div> 
                           <div class="col-md-12">
                            <input type="file" name="file_upload" id="fileToUpload">
                           </div>
                           <div class="col-sm-12">
                              <button class="send_btn">GỬI LIÊN HỆ</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
        <div class="panel-footer text-center text-white">&copy; Copyright by We shoes <?php echo date("Y");?>
          <p class="m-0 text-center text-white"><a href=""></a></p>
        </div>
      </div>
    </div>
    <div class="col-md-1"></div>
  </div>
</div>
</body>
</html>
