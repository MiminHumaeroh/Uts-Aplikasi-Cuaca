<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Web Service</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection, tv" />
<link rel="stylesheet" href="css/style-print.css" type="text/css" media="print" />
</head>
<body>
<div id="wrapper">
  <div class="title">
    <div class="title-top">
      <div class="title-left">
        <div class="title-right">
          <div class="title-bottom">
            <div class="title-top-left">
              <div class="title-bottom-left">
                <div class="title-top-right">
                  <div class="title-bottom-right">
                    <h1>Mimin Humaeroh</h1>
                    <p>15.01.53.0156</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr class="noscreen" />
  <div class="content">
    <div class="column-left">
      <h3>MENU</h3>
      <a href="#skip-menu" class="hidden">Skip menu</a>
      <ul class="menu">
        <li><a href="?menu=home" class="active">Home</a></li>
        <li><a href="?menu=ungaran">Ungaran</a></li>
		<li><a href="?menu=bogor">Bogor</a></li>
		<li><a href="?menu=Demak">Demak</a></li>
        </ul>
    </div>
    <div id="skip-menu"></div>
    <div class="column-right">
      <div class="box">
        <div class="box-top"></div>
        <div class="box-in">
          <?php
		  error_reporting(0);
		  if($_GET[menu==''])
		  {
		  include('home.php');
		  }
		  else
		  {
		  include($_GET[menu].'.php');
		  }
		  ?>
		  <br />          
		  </div>
      </div>
      </div>
  </div>
</div>
</html>
