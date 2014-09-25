<?php echo $this->layout->doctype;?>
<html>
  <head>
<?php echo $this->layout->html_head();?>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	  <script src="http://getbootstrap.com/assets/js/html5shiv.js"></script>
	  <script src="http://getbootstrap.com/assets/js/respond.min.js"></script>
	<script>if(false) alert('Troque este browser por um mais novo.');</script>
    <![endif]-->
 </head>
 <body>
	<div class="header novisible-md">
	 <div class="container">
		<div class="col-xs-7" >
<a href="<?php echo base_url();?>">
<!--img src="<?php echo base_url() . 'assets/logo.png';?>"/-->
<img src="<?php echo base_url() . 'assets/logo.png';?>" class="logo"/>
</a>
		</div>
		<div class="col-mb-5">
<div class="social">
<a href="http://facebook.com/exitodocariri" class="tw"></a>
<a href="http://facebook.com/exitodocariri" class="fb"></a>
<a href="http://youtube.com/exitodocariri" class="yt"></a>
<div class="clearfix"></div>
</div>

		</div>

	 </div>
	</div>

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-static-top topbar" role="navigation">
      <div class="container">
        <div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
<a href="#">
<img src="<?php echo base_url() . 'assets/logomarca.png';?>" class="logomarca"/>
</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url();?>">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">A Escola <b class="caret"></b></a>
              <ul class="dropdown-menu">
<!--


-->
				<li><a href="<?php echo base_url() . 'escola/quem_somos';?>">Quem Somos</a></li>
				<li><a href="<?php echo base_url() . 'escola/missao';?>">Nossa missão</a></li>
				<li><a href="<?php echo base_url() . 'escola/equipe';?>">Nossa equipe</a></li>
				<li><a href="<?php echo base_url() . 'escola/instalacoes';?>">Nossas instalações</a></li>
				<li><a href="<?php echo base_url() . 'escola/horarios';?>">Nossos horários</a></li>
				<li><a href="<?php echo base_url() . 'escola/parceiros';?>">Nossos parceiros</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Acontece <b class="caret"></b></a>
              <ul class="dropdown-menu">
				<li><a href="<?php echo base_url() . 'acontece/noticias';?>">Notícias</a></li>
				<li><a href="<?php echo base_url() . 'acontece/eventos';?>">Eventos</a></li>
				<li><a href="<?php echo base_url() . 'acontece/calendario';?>">Calendário Escolar</a></li>
              </ul>
            </li>
            <li><a href="<?php echo base_url() . 'contato';?>">Contato</a></li>
          </ul>
<div class="navbar-right navbar-nav">
	<div class="btn-group navbar-btn">
	</div>
	<div class="btn-group navbar-btn">

		<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">Olá, usuario@gmail.com <span class="caret"></span></button>
		<ul class="dropdown-menu" role="menu">
		<li><a href="#">Minha conta</a></li>
		<li><a href="#">Sair</a></li>
		</ul>
	</div>
</div>
		</div><!--/.nav-collapse -->
      </div>
    </div>
	 <div class="container content">
<div class="row">
<?php $this->load->view($view['name']);?>
	 </div>
</div>

<footer id="footer">
	<div class="container">
		<div class="row">
			<aside class="footer-widget col-md-3 widget_text">
<h3>Exitod do cariri</h3>
<div><p><strong>Ward Pro</strong> comes with a extended widgetized footer. You can select the number of columns you want to appear in this area and fill it up with any custom widget you have installed.</p></div>

			</aside>
			<aside id="recent-posts-3" class="footer-widget col-md-3 widget_recent_entries">
<h3 class="widget-title">Posts Recentes</h3>
<ul>
	<li><a href="http://demos.bavotasan.com/ward-pro/2013/08/fully-responsive/">Fully Responsive</a></li>
	<li><a href="http://demos.bavotasan.com/ward-pro/2013/01/custom-css-editor/">Custom CSS Editor</a></li>
	<li><a href="http://demos.bavotasan.com/ward-pro/2013/01/custom-css-editor/">Custom CSS Editor</a></li>
	<li><a href="http://demos.bavotasan.com/ward-pro/2013/01/custom-css-editor/">Custom CSS Editor</a></li>
	<li><a href="http://demos.bavotasan.com/ward-pro/2013/01/custom-css-editor/">Custom CSS Editor</a></li>
	<li><a href="http://demos.bavotasan.com/ward-pro/2013/01/custom-css-editor/">Custom CSS Editor</a></li>
	<li><a href="http://demos.bavotasan.com/ward-pro/2013/01/custom-css-editor/">Custom CSS Editor</a></li>
			</aside>
<aside class="footer-widget col-md-3">
<h3 class="widget-title">Contato</h3>
<span>Endereço :<br>
<b>Rua Adalberto vieira lopes, 48, Novo Juazeiro - Juazeiro do Norte CE</b><br>
Telefones :<br>
<b>(21)3214-7402 e 3214-7474</b>
</span>
</aside>
<aside class="footer-widget col-md-3 widget_recent_comments">
<h3 class="widget-title">Comentários recentes</h3>
<ul>
<li><a href="http://example.org/" rel="external nofollow" class="url">Stivy Wenderson</a></li>
<li><a href="http://example.org/" rel="external nofollow" class="url">Stivy Wenderson</a></li>
<li><a href="http://example.org/" rel="external nofollow" class="url">Stivy Wenderson</a></li>
<li><a href="http://example.org/" rel="external nofollow" class="url">Stivy Wenderson</a></li>
<li><a href="http://example.org/" rel="external nofollow" class="url">Stivy Wenderson</a></li>
<li><a href="http://example.org/" rel="external nofollow" class="url">Stivy Wenderson</a></li>
<li><a href="http://example.org/" rel="external nofollow" class="url">Stivy Wenderson</a></li>
</ul>
</aside>
		</div><!-- .row -->

		<div class="row" style="padding-top:50px;">
			<div class="col-lg-12 text-center">
				<span>Copyright © 2013 Todos os direitos reservados.</span><br/>
				<span><i class="glyphicon glyphicon-tree-deciduous"></i> Desenvolvido por <a href="https://stivyw.com/">stivyw.com</a>.</span>
			</div>
		</div>
	</div><!-- #footer-content.container -->
</footer>	

  </body>
</html>
