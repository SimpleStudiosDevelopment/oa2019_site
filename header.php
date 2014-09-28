<link href="/styles/styles.css" rel="stylesheet" />
<link href="/styles/bootstrap.css" rel="stylesheet"/>
<link href="/styles/bootswatch.css" rel="stylesheet" />
<script src="/config/jquery.js"></script>
<script src="/styles/bootstrap.js"></script>
<?php
define('IN_MYBB',NULL);
require_once '/var/www/html/oa/config/MyBBI.php';
$MyBBI = new MyBBIntegrator($mybb, $db, $cache, $plugins,$lang,$config);
?>

<div class="navbar navbar-default">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">OA Class of 2019</a>
  </div>
  <div class="navbar-collapse collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav">
      <li<?php echo $page == 'Home' ? ' class="active"' : '' ?>><a href="#">Home</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Classes <b class="caret"></b></a>
        <ul class="dropdown-menu">
        <li class="dropdown-header">English</li>
          <li><a href="#">Royal</a></li>
          <li><a href="#">Sesky</a></li>
          <li class="divider"></li>
          <li class="dropdown-header">Math</li>
          <li><a href="#">Anderson</a></li>
          <li><a href="#">Beckett</a></li>
          <li><a href="#">Patten</a></li>
          <li><a href="#">Wittman</a></li>
          <li class="divider"></li>
          <li class="dropdown-header">History</li>
          <li><a href="#">Groover</a></li>
          <li><a href="#">St. Clair</a></li>
          <li><a href="#">Taylor</a></li>
          <li class="divider"></li>
          <li class="dropdown-header">PE</li>
          <li><a href="#">Clifton</a></li>
          <li class="divider"></li>
          <li class="dropdown-header">VAPA</li>
          <li><a href="#">Groover</a></li>
          <li><a href="#">Handson</a></li>
          <li><a href="#">Miner</a></li>
          <li class="divider"></li>
          <li class="dropdown-header">World Language</li>
          <li><a href="#">Kim</a></li>
          <li><a href="#">Matic</a></li>
          <li><a href="#">Stephan</a></li>
          <li class="divider"></li>
          <li class="dropdown-header">Science</li>
          <li><a href="#">Fournier</a></li>
          <li><a href="#">Elemparo</a></li>
          <li><a href="#">Stevens</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <?php
	if($MyBBI->isLoggedIn()){
		$userinfo = $MyBBI->getUser(0);
		echo 'Welcome, ' . $userinfo['as'];
	}elseif(!$MyBBI->isLoggedIn()){
	?>
      <li><a href="#">Register</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
        <ul class="dropdown-menu">
        <p>To be developed</p>
        </ul>
      </li>
      <?php
	}else{
		echo 'System Error.';
	}
	?>
    

    </ul>
  </div>
</div>