<?php


$cakeDescription = __d('cake_dev', 'DocAwards: Connecting you to award winning doctors');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('app');
		echo $this->Html->css('general_foundicons');
		echo $this->Html->css('chosen');
		echo $this->Html->css('base');

		 //external css
		echo $this->Html->css('elastislide');
		echo $this->Html->css('jquery-ui');

		echo $this->Html->script('foundation/modernizr.foundation');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
  <!-- Included JS Files (Uncompressed) -->
  <script src="js/foundation/jquery.js"></script>
  <script src="js/foundation/jquery.foundation.accordion.js"></script>
  <script src="js/foundation/jquery.foundation.alerts.js"></script>
  <script src="js/foundation/jquery.foundation.buttons.js"></script>
  <script src="js/foundation/jquery.foundation.forms.js"></script>
  <script src="js/foundation/jquery.foundation.mediaQueryToggle.js"></script>
  <script src="js/foundation/jquery.foundation.navigation.js"></script>
  <script src="js/foundation/jquery.foundation.orbit.js"></script>
  <script src="js/foundation/jquery.foundation.reveal.js"></script>
  <script src="js/foundation/jquery.foundation.tabs.js"></script>
  <script src="js/foundation/jquery.foundation.tooltips.js"></script>
  <script src="js/foundation/jquery.foundation.topbar.js"></script>
  <script src="js/foundation/jquery.placeholder.js"></script>
  
  
  <!-- Application Javascript -->
  <script src="js/foundation/app.js"></script>
  <script src="js/vendor/jquery-ui.js"></script>
  <script src="js/vendor/jquery.elastislide.js"></script>
  <script src="js/vendor/chosen.jquery.min.js"></script>
  <script src="js/libs/utils/autocomplete_chosen.js"></script>


  <script src="js/vendor/jquery.wrapinbox.js"></script>
  
  <!-- maps -->
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <script type="text/javascript" src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/infobubble/src/infobubble-compiled.js"></script>
  <script src="js/libs/utils/map.js"></script>

  <script src="js/libs/utils/serialize.js"></script>
  


</head>

<body class="landing_page">
  <div class="header_wrapper">
	<header id="header" class="fixed contain-to-grid">
	  <nav class="top-bar">

	    <ul>
	      <li class="name"><h1><a href="#"><span class="foundicon-plus"></span>DocAwards</a></h1></li>
	      <li class="toggle-topbar"><a href="#"></a></li>
	    </ul>
	    <section>
	      <ul class="left">
	        <li class="divider"></li>
	      </ul>
	      <ul class="right">
	        <li class="divider"></li>
	        <li class="active"><a href="#">Find Doctors</a></li>
	      </ul>
	    </section>
	  </nav>
	</header>
  </div>

  <div class="wrapper">
	<?php echo $this->Session->flash(); ?>
	<?php echo $this->fetch('content'); ?>
  </div>

  <div class="footer_wrapper">
	  <footer class="fade">
	      <div class="twelve columns">
	        <hr />
	        <div class="row">
	          <div class="five columns">
	            <p>&copy; Copyright DocAwards. All Rights Reserved.</p>
	          </div>
	          <div class="seven columns">
	            <ul class="link-list right">
	              <li><a href="#">Home</a></li>
	              <li><a href="#">About</a></li>
	              <li><a href="#faq">FAQs</a></li>
	              <li><a href="#">Privacy Policy</a></li>
	              <li><a href="#">Terms of Use</a></li>
	              <li><a href="#">Contact Us</a></li>
	            </ul>
	          </div>
	        </div>
	      </div> 
	    </footer>
	</div>
  <?php echo $this->element('sql_dump'); ?>

  
</body>
</html>
