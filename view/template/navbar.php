<header class="main-container header fixed classic">
  <div class="flex-grid  navbar">
    <!-- Mobile Menu -->
    <input type="checkbox" id="mobileMenu" class="hide">
    <label id="mobileMenuLabel" class="mobile-menu left-side" for="mobileMenu">
    	<i class="hamburger"></i>
    </label>
    <label class="full-screen" for="mobileMenu"></label>
    <!-- /Mobile Menu -->
    <div class="col-2 col-12-md logo">
    	<a href="/"><img src="dist/img/MF.png" alt="" style="width: 60px;"> </a>
    </div>
    <nav class="col-7 col-12-md navbar-right" id="topMenuNav">
    	<div class="navbar-links">
    		<input type="radio" class="hide" name="navbar-menu" id="navbarDropHide" checked="">
    		<a href="#" class="active">Link 1</a>
    		<a href="#">Link 2</a>
    		<a href="#">Link 3</a>
    		<a href="#">Link 4</a>
    		<div class="has-drop-menu hover-menu">
    			<input type="radio" id="navbarDropLink1" class="drop-menu-input hide" name="navbar-menu">
    			<label for="navbarDropLink1" class="menu-label"></label>
    			Hover Menu <i class="arrow-down"></i>
    			<label class="full-screen" for="navbarDropHide"></label>
    			<ul class="drop-menu">
    				<li><a href="#">Sub Menu Link</a></li>
    				<li><a href="#">Sub Menu Link</a></li>
    				<li><a href="#">Sub Menu Link</a></li>
    			</ul>
    		</div>
    	</div>
    </nav>
    <!-- Second menu -->
    <!-- Second Mobile Menu -->
    <input type="checkbox" id="mobileMenu2" class="hide">
    <label id="mobileMenuLabel2" class="mobile-menu right-side" for="mobileMenu2">
    	<i class="profile"></i>
    </label>
    <label class="full-screen" for="mobileMenu2"></label>
    <!-- /Second Mobile Menu -->
    <nav class="col-3 col-12-md text-right" id="topMenuNav2">
    	<div class="navbar-links">
    		<a href="#">Right Link</a>
    		<!-- Click Drop Menu -->
    		<div class="has-drop-menu">
    			<input type="radio" id="navbarDropLink2" class="drop-menu-input hide" name="navbar-menu">
    			Right Click Menu <i class="arrow-down"></i>
    			<label for="navbarDropLink2" class="menu-label"></label>
    			<label class="full-screen" for="navbarDropHide"></label>
    			<ul class="drop-menu drop-menu-left">
    				<li><a href="#">Sub Menu Link</a></li>
    				<li><a href="#">Sub Menu Link</a></li>
    				<li class="sep"></li>
    				<li><a href="#">Sub Menu Link</a></li>
    			</ul>
    		</div>
    	</div>
    </nav><!-- /Second menu -->
  </div>
</header>
<div class="fixed-nav-space" id="top"></div>
