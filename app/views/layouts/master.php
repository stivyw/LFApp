<!DOCTYPE html>
<html>
<head>
	<title>DashW</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="Get your life together.">
	<meta name="author" content="Stivy Wenderson Silveira Fernandes">
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width">
	<meta http-equiv="cache-control" content="no-cache">

		<meta property="og:title" content="SW">
		<meta property="og:type" content="website">
		<meta property="og:url" content="http://stivyw.com">
		<meta property="og:image" content="/">
		<meta property="og:site_name" content="SW">
		<meta property="og:description" content="Get your life together with SW.">

		<meta itemprop="image" content="/">
		<meta itemprop="name" content="SW">
		<meta itemprop="description" content="Get your life together with SW.">

		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="icon" type="image/png" href="/favicon.png">

		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="/assets/dash.css"/>

		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="/assets/sw.js"></script>
		<script src="/assets/main.js"></script>

</head>
<body>
	<header data-app='{"hello":"teste"}'></header>
	<section id="sw-side">
		<ul class="sidebar-menu">
			<li>
				<a class="jx" href="views/index.php">
					<i class="fa fa-dashboard"></i> <span>Dashboard</span>
				</a>
			</li>
			<li>
				<a class="jx" href="http://stivyw.com">
					<i class="fa fa-th"></i> <span>Widgets</span> <small class="badge pull-right bg-green">new</small>
				</a>
			</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-edit"></i> <span>Forms</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href="pages/forms/general.html" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> General Elements</a></li>
					<li><a href="pages/forms/advanced.html" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Advanced Elements</a></li>
					<li><a href="pages/forms/editors.html" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Editors</a></li>
				</ul>
			</li>
			<li>
				<a href="pages/calendar.html">
					<i class="fa fa-calendar"></i> <span>Calendar</span>
					<small class="badge pull-right bg-red">3</small>
				</a>
			</li>
			<li>
				<a href="pages/mailbox.html">
					<i class="fa fa-envelope"></i> <span>Mailbox</span>
					<small class="badge pull-right bg-yellow">12</small>
				</a>
			</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-folder"></i> <span>Examples</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href="pages/examples/invoice.html" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Invoice</a></li>
					<li><a href="pages/examples/login.html" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Login</a></li>
					<li><a href="pages/examples/register.html" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Register</a></li>
					<li><a href="pages/examples/lockscreen.html" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Lockscreen</a></li>
					<li><a href="pages/examples/404.html" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> 404 Error</a></li>
					<li><a href="pages/examples/500.html" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> 500 Error</a></li>
					<li><a href="pages/examples/blank.html" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Blank Page</a></li>
				</ul>
			</li>
		</ul>
	</section>
	<div id="sw-main">
		<!-- Static navbar -->
		<div class="navbar navbar-default navbar-static-top">
			<button type="button" class="square">
				<i></i>
			</button>
			<div class="navbar-right" data-app='{"List":""}'>
				<ul class="nav navbar-nav">
<?php if($user['login']): ?>
					<!-- User Account: style can be found in dropdown.less -->
					<li class="dropdown user user-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="glyphicon glyphicon-user"></i>
							<span><?php echo $user['name'];?> <i class="caret"></i></span>
						</a>
						<ul class="dropdown-menu">
							<!-- User image -->
							<li class="user-header bg-light-blue">
								<img src="<?php echo $user['avatar'];?>" class="img-circle" alt="User Image">
								<p>
									<?php echo $user['name'];?>
									<small>Member since Nov. 2012</small>
								</p>
							</li>
							<!-- Menu Body -->
							<li class="user-body">
								<div class="col-xs-4 text-center">
									<a href="#">Followers</a>
								</div>
								<div class="col-xs-4 text-center">
									<a href="#">Sales</a>
								</div>
								<div class="col-xs-4 text-center">
									<a href="#">Friends</a>
								</div>
							</li>
							<!-- Menu Footer-->
							<li class="user-footer">
								<div class="pull-left">
									<a href="#" class="btn btn-default btn-flat">Profile</a>
								</div>
								<div class="pull-right">
									<a href="<?php echo URL::to('/auth/logout');?>" class="btn btn-default btn-flat">Sign out</a>
								</div>
							</li>
						</ul>
					</li>
<?php else:?>
					<!-- User Account: style can be found in dropdown.less -->
					<li class="dropdown user user-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="glyphicon glyphicon-user"></i>
							<span>Entrar <i class="caret"></i></span>
						</a>

						<ul class="dropdown-menu">

							<!-- User image -->
							<li class="user-header bg-light-blue">
<?php echo Form::open(array('url' => '/auth/login', 'class' => 'box login')); ?>
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Seu email">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" placeholder="Senha">
  </div>
<div class="pull-left">
  <div class="checkbox">
    <label>
      <input type="checkbox"> Lembrar senha?
    </label>
  </div>
</div>
 <div class="pull-right">
	<button type="submit" class="btn btn-default">Submit</button>
 </div>
</form>
							</li>

							<!-- Menu Footer-->
							<li class="user-footer">
								<div class="pull-right">
									<a href="#" class="btn btn-default btn-flat">Nova conta</a>
								</div>
							</li>

						</ul>


					</li>
<?php endif;?>
				</ul>


			</div>
		</div>
		<div id="content"><?php  echo $main;?></div>
	</div>

</body>
</html>
