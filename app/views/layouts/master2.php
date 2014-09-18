<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
        <title><?php echo $title;?></title>

<link href="/fd/css/foundation.css" rel="stylesheet"/>
<link href="/fd/css/custom.css" rel="stylesheet"/>

<?php HTML::script('http://code.jquery.com/jquery-2.1.1.min.js');?>
</head>
<body>
<div class="row main">
    <div class="small-12 large-12 column" id="masthead">
        <header>
            <nav class="top-bar" data-topbar>
                <ul class="title-area">
                    <!-- Title Area -->
                    <li class="name"></li>
                    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
                </ul>
                <section class="top-bar-section">
                    <ul class="left">
                        <li class="{{(strcmp(URL::full(), URL::to('/')) == 0) ? 'active' : ''}}"><a href="{{URL::to('/')}}">Home</a></li>
                    </ul>
                    <ul class="right">
                        <?php if(Auth::check()): ?>
                            <li class="{{ (strpos(URL::current(), URL::to('admin/dash-board'))!== false) ? 'active' : '' }}">
                                <a href="admin/dash-board">Dashboard</a>
                            </li>
                            <li class="{{ (strpos(URL::current(), URL::to('logout'))!== false) ? 'active' : '' }}" >
                                <a href="admin/logout">Logout</a>
                            </li>
                        <?php else:?>
                            <li class="{{ (strpos(URL::current(), URL::to('login'))!== false) ? 'active' : '' }}">
                                <a href="admin/login">Login</a>
                            </li>
                        <?php endif;?>
                    </ul>
                </section>
            </nav>
            <div class="sub-header">
                <hgroup>
                    <h1><a href="/">Laravel 4 Blog</a></h1>
                    <h2>Laravel 4 Simple Blog tutorial</h2>
                </hgroup>
            </div>
        </header>
    </div>
    <div class="row">
        <?php echo $main;?>
    </div>
    <div class="row">
        <div class="small-12 large-12 column">
            <footer class="site-footer"></footer>
        </div>
    </div>
</div>
</body>
</html>
