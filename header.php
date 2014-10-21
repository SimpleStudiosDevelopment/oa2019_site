<link href="/styles/styles.css" rel="stylesheet" />
<link href="/styles/bootstrap.css" rel="stylesheet"/>
<link href="/styles/bootswatch.css" rel="stylesheet" />
<script src="/config/jquery.js"></script>
<script src="/styles/bootstrap.js"></script>
<?php
define('IN_MYBB',NULL);
require_once '/var/www/oa/config/MyBBI.php';
$MyBBI = new MyBBIntegrator($mybb, $db, $cache, $plugins,$lang,$config);
?>

<div class="navbar navbar-default">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="http://oa2019.tk">OA Class of 2019</a>
  </div>
  <div class="navbar-collapse collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav">
      <li<?php echo $page == 'Home' ? ' class="active"' : '' ?>><a href="#">Home</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Classes <b class="caret"></b></a>
        <ul class="dropdown-menu">
        <li class="dropdown-header">English</li>
          <li><a href="/class/?tid=14">Royal</a></li>
          <li><a href="/class/?tid=15">Sesky</a></li>
          <li class="divider"></li>
          <li class="dropdown-header">Math</li>
          <li><a href="/class/?tid=1">Anderson</a></li>
          <li><a href="/class/?tid=2">Beckett</a></li>
          <li><a href="#">Patten</a></li>
          <li><a href="#">Wittman</a></li>
          <li class="divider"></li>
          <li class="dropdown-header">History</li>
          <li><a href="/class/?tid=12">Morris</a></li>
          <li><a href="/class/?tid=18">Taylor</a></li>
          <li class="divider"></li>
          <li class="dropdown-header">PE</li>
          <li><a href="/class/?tid=3">Clifton</a></li>
          <li class="divider"></li>
          <li class="dropdown-header">VAPA</li>
          <li><a href="/class/?tid=7">Handson</a></li>
          <li><a href="/class/?tid=8">Hogan</a></li>
          <li><a href="/class/?tid=11">Miner</a></li>
          <li class="divider"></li>
          <li class="dropdown-header">World Language</li>
          <li><a href="/class/?tid=9">Kim</a></li>
          <li><a href="/class/?tid=10">Matic</a></li>
          <li><a href="/class/?tid=16">Stephan</a></li>
          <li class="divider"></li>
          <li class="dropdown-header">Science</li>
          <li><a href="/class/?tid=5">Fournier</a></li>
          <li><a href="/class/?tid=4">Elemparo</a></li>
          <li><a href="/class/?tid=17">Stevens</a></li>
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