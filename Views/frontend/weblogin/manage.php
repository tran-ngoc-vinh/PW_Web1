
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <title>Admin </title>

  <!-- Bootstrap core CSS -->
  <!-- <link href="./Public/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
  <!--external css-->
  <!-- Custom styles for this template -->
  <link href="./Public/css/frontend/manage.css" rel="stylesheet">
</head>

<body>
  <section id="container">
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="" class="logo"><b>PANT<span>WALL</span></b></a>
      <!--logo end-->
      <div class="top-menu1">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="?controller=WebLogin&action=logout">Logout</a></li>
        </ul>
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="chat" href="?action=chat">チャットワーク</a></li>
        </ul>
      </div>
    </header>
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <li class="sub-menu">
            <a href="?controller=Contract&action=contract">
              <i class="fa fa-desktop"></i>
              <span>契約書</span>
              </a>
          
          </li>
          <li class="sub-menu">
            <a href="?controller=Contract&action=homephoto">
              <i class="fa fa-cogs"></i>
              <span>家写真</span>
              </a>
           
          </li>
          <li class="sub-menu">
            <a href="?controller=Contract&action=carlapaint">
              <i class="fa fa-book"></i>
              <span>カーラペイント</span>
              </a>
            
          </li>
          <li class="sub-menu">
            <a href="?controller=Contract&action=quotation">
              <i class="fa fa-tasks"></i>
              <span>見積書</span>
              </a>
            
          </li>
          <li class="sub-menu">
            <a href="?controller=Contract&action=schedule">
              <i class="fa fa-th"></i>
              <span>工事スケジュール</span>
              </a>
          </li>
          
        </ul>

      </div>
    </aside>
 
    </footer>

  </section>

  
</body>

</html>
