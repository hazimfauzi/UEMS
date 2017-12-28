<?php 
include('header.php');
include('navbar.php');
include('slide.php');
error_reporting(E_ERROR | E_PARSE);

$k = $_GET['k'];?>

<!------------------------------------- Login Modal ---------------------------------
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     <div class="modal-dialog">
        <div class="modal-content">
             <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="panel-title">Please Sign In</h3>
             </div>
            <div class="modal-body">
				<form method="POST">
								<div class="form-group">
                               		<input class="form-control" name="username" type="text" id="username" placeholder="User ID" autofocus required>
								</div>
                                <div class="form-group">
                               		<input class="form-control" name="password" type="password" id="password" placeholder="Password" autofocus required>
								</div>
								<div class="control-group">
									<div class="controls">
                                   		<center><a href="recovery_password.php" class="list-inline">&nbsp;Forgotten password?</a>	</center>
									</div>
                                </div>
            </div>
            <div class="modal-footer">
                <button id="login" name="submit" type="submit" class="btn btn-success"><i class="icon-signin icon-large"></i>&nbsp;Submit</button>
         							<?php
										if (isset($_POST['submit'])){
											session_start();
											$username = $_POST['username'];
											$password = $_POST['password'];
											$query = "SELECT * FROM user WHERE userId='$username' AND password='$password'";
											$result = mysql_query($query)or die(mysql_error());
											$num_row = mysql_num_rows($result);
											$row=mysql_fetch_array($result);
											if( $row['status'] == 'Banned' ){ ?>
												<div class="alert alert-danger">You have been banned!!!</div><?php }
											else if( $row['level'] == 'Admin' ) {
												$_SESSION['id']=$row['userId'];
												header('Location:../user/index.php');
												exit;
												}
									
											else if( $row['level'] == 'User' ) {
												header('location:student_index.php');
												$_SESSION['id']=$row['userId'];
												}
									
											else if( $row['level'] == 'Organizer' ) {
												header('location:organizer_index.php');
												$_SESSION['id']=$row['userId'];
												}
									
											else{ ?>
												<div class="alert alert-danger">Access Denied</div>		
												<?php
												}}
												?>
        		
     							 </form>
				<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
     </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->	
	


<!---------- SIgn Up ---------------------------------------------------------->
<div class="modal fade" id="signup" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<center><h1 class="modal-title">Sign Up</h1></center>
			</div>
			<div class="modal-body">
						<form  method="POST" action="signUp.php" enctype="multipart/form-data">
						<div class="form-group">
							<label >Student Matric Number</label>
								<input class="form-control" type="text" id="inputEmail" name="matric_no"  placeholder="Matric Number" required>
							</div>
                            <div class="form-group">
								<label >Name</label>
								<input class="form-control" type="text" id="inputPassword" name="name"  placeholder="Full Name" required>
							</div>
							<div class="form-group">
								<label >IC number</label>
								<input class="form-control" type="text" id="inputPassword" name="ic_number"  placeholder="Ic Number" required>
							</div>
							<div class="form-group">
										<label>Password</label>
										<input class="form-control" type="password" id="pwd" name="password"  placeholder="Shh.... Do not let other people know your password!!!" required>
                                         <div class="pull-right">
                                         	<button type="button" onclick="showHide()" class="btn btn-outline btn-primary btn-sm" id="eye">
                                        		<i class="fa fa-eye">Show/Hide Password</i>
                                        	</button>
                                    	</div>
									</div>
                                    <script> 
									function show() {
										var p = document.getElementById('pwd');
										p.setAttribute('type', 'text');
									}
									
									function hide() {
										var p = document.getElementById('pwd');
										p.setAttribute('type', 'password');
									}
									
									var pwShown = 0;
									
									document.getElementById("eye").addEventListener("click", function () {
										if (pwShown == 0) {
											pwShown = 1;
											show();
										} else {
											pwShown = 0;
											hide();
										}
									}, false);
                                    </script>
                                    <div class="form-group">
                                    	<label>Email</label>
                                        <input class="form-control" type="email" id="imputEmail" name="email" placeholder="What your email?" required>
                                    </div>
							<div class="form-group">
								<label>Gender</label>
								<select class="form-control" name="gender" required>
									<option></option>
									<option>Male</option>
									<option>Female</option>
								</select>
							</div>
							<div class="form-group">
								<label>Adddress:</label>
								<textarea class="form-control" type="text" id="inputPassword" name="address"  placeholder="Home Address" required></textarea>
							</div>
							<div class="form-group">
								<label>Cellphone Number:</label>
								<input class="form-control" type='tel' pattern="[0-9]{10,10}" class="search" name="contact"  placeholder="Phone Number"  autocomplete="off"  maxlength="11" >
							</div>
                            <div class="form-group">
								<label>Year Level</label>
								<select class="form-control" name="yearLevel" required>
									<option></option>
									<option>First Year</option>
									<option>Second Year</option>
                                    <option>Third Year</option>
                                    <option>Fourth Year</option>
								</select>
							</div>
          
            </div>	
			<div class="modal-footer">
				<div class="pull-right">
					<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>Save</button>
					<button type="reset" class="btn btn-danger ">Reset Button</button>
					</form>
				</div>
			</div>
		</div>			
    </div>
</div>
  
</div>
<!----------------------- SignUp end --------------------------------------->









<!--Top_content-->
<section id="top_content" class="top_cont_outer">
  <div class="top_cont_inner">
    <div class="container">
      <div class="top_content">
        <div class="row">
          <div class="col-lg-5 col-sm-7">
            <div class="top_left_cont flipInY wow animated">
              <h3>Colourful &amp; sexy!</h3>
              <h2>creating websites that
                make you stop &amp; stare</h2>
              <p> Accusantium quam, aliquam ultricies eget tempor id, aliquam eget nibh et. Maecen aliquam, risus at semper. Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum. </p>
              <a href="#service" class="learn_more2">Learn more</a> </div>
          </div>
          <div class="col-lg-7 col-sm-5"> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Top_content--> 

<!--Service-->
<section  id="service">
  <div class="container">
    <h2>Services</h2>
    <div class="service_area">
      <div class="row">
        <div class="col-lg-4">
          <div class="service_block">
            <div class="service_icon delay-03s animated wow  zoomIn"> <span><i class="fa-flash"></i></span> </div>
            <h3 class="animated fadeInUp wow">Quick TurnAround</h3>
            <p class="animated fadeInDown wow">Proin iaculis purus consequat sem cure digni. Donec porttitora entum suscipit  aenean rhoncus posuere odio in tincidunt.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="service_block">
            <div class="service_icon icon2  delay-03s animated wow zoomIn"> <span><i class="fa-comments"></i></span> </div>
            <h3 class="animated fadeInUp wow">Friendly Support</h3>
            <p class="animated fadeInDown wow">Proin iaculis purus consequat sem cure digni. Donec porttitora entum suscipit  aenean rhoncus posuere odio in tincidunt.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="service_block">
            <div class="service_icon icon3  delay-03s animated wow zoomIn"> <span><i class="fa-shield"></i></span> </div>
            <h3 class="animated fadeInUp wow">top Security</h3>
            <p class="animated fadeInDown wow">Proin iaculis purus consequat sem cure digni. Donec porttitora entum suscipit  aenean rhoncus posuere odio in tincidunt.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Service-->






<!-- Browse Event -->
<section id="browse_event" class="content"> 
  
  <!-- Container -->
  <div class="container browse_event-title"> 
    
    <!-- Section Title -->
    <div class="section-title">
      <h2>Browse Event</h2>
    </div>
    <!--/Section Title --> 
    
  </div>
  <!-- Container -->
  
  <div class="browse_event-top"></div>
  
  <!-- Portfolio Plus Filters -->
  <div class="browse_event"> 
    
    <!-- Portfolio Filters -->
    <div id="filters" class="sixteen columns">
      <ul class="clearfix">
        <li><a id="all" href="#" data-filter="*" class="active">
          <h5>All</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".branding">
          <h5>Seminar</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".design">
          <h5>Concerts</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".photography">
          <h5>Festival</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".videography">
          <h5>Compatition</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".web">
          <h5>Other</h5>
          </a></li>
      </ul>
    </div>
    <!--/Portfolio Filters --> 
    
    <!-- Portfolio Wrap -->
    <div class="isotope" style="position: relative; overflow: hidden; height: 480px;" id="portfolio-wrap"> 
      
      <!-- Portfolio Item With PrettyPhoto  -->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   videography isotope-item">
        <div class="portfolio-image"> <img src="img/portfolio_pic1.jpg"  alt="Portfolio 1"> </div>
        <a title="Starbucks Coffee" rel="prettyPhoto[galname]" href="http://clapat.ro/themes/newave/images/portfolio/portfolio2.jpg">
        <div class="project-overlay">
          <div class="project-info">
            <div class="zoom-icon"></div>
            <h4 class="project-name">Leica Camera</h4>
            <p class="project-categories">Videography</p>
          </div>
        </div>
        </a> </div>
      <!--/Portfolio Item With PrettyPhoto  --> 
      
      <!-- Portfolio Item Video Expander  -->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(337px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  design isotope-item">
        <div class="portfolio-image"> <img src="img/portfolio_pic2.jpg" alt="Portfolio 1"> </div>
        <div class="project-overlay">
          <div class="open-project-link"> <a class="open-project" href="http://clapat.ro/themes/newave/project-video-expander.html" title="Open Project"></a> </div>
          <div class="project-info">
            <div class="zoom-icon"></div>
            <h4 class="project-name">Foto Template</h4>
            <p class="project-categories">Design</p>
          </div>
        </div>
      </div>
      <!--/Portfolio Item Video Expander  --> 
      
      <!-- Portfolio Item Normal Expander -->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(674px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  design  isotope-item">
        <div class="portfolio-image"> <img src="img/portfolio_pic3.jpg" alt="Portfolio 1"> </div>
        <div class="project-overlay">
          <div class="open-project-link"> <a class="open-project" href="http://clapat.ro/themes/newave/project-normal-expander-1.html" title="Open Project"></a> </div>
          <div class="project-info">
            <div class="zoom-icon"></div>
            <h4 class="project-name">Sony Phone</h4>
            <p class="project-categories">Design</p>
          </div>
        </div>
      </div>
      <!--/Portfolio Item Normal Expander --> 
      
      <!-- Portfolio Item FullScreen Expander -->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  photography  branding web isotope-item">
        <div class="portfolio-image"> <img src="img/portfolio_pic4.jpg" alt="Portfolio 1"> </div>
        <div class="project-overlay">
          <div class="open-project-link"> <a class="open-project" href="http://clapat.ro/themes/newave/project-fullscreen-expander-1.html" title="Open Project"></a> </div>
          <div class="project-info">
            <div class="zoom-icon"></div>
            <h4 class="project-name">Nike Shoes</h4>
            <p class="project-categories">Photography, Web, Branding</p>
          </div>
        </div>
      </div>
      <!-- Portfolio Item FullScreen Expander --> 
      
      <!-- Portfolio Item FullScreen Expander -->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  design isotope-item">
        <div class="portfolio-image"> <img src="img/portfolio_pic5.jpg" alt="Portfolio 1"> </div>
        <div class="project-overlay">
          <div class="open-project-link"> <a class="open-project" href="http://clapat.ro/themes/newave/project-fullscreen-expander-2.html" title="Open Project"></a> </div>
          <div class="project-info">
            <div class="zoom-icon"></div>
            <h4 class="project-name">Vinyl Record</h4>
            <p class="project-categories">Design</p>
          </div>
        </div>
      </div>
      <!--/Portfolio Item FullScreen Expander --> 
      
      <!-- Portfolio Item Normal Expander -->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(337px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  web isotope-item">
        <div class="portfolio-image"> <img src="img/portfolio_pic6.jpg" alt="Portfolio 1"> </div>
        <div class="project-overlay">
          <div class="open-project-link"> <a class="open-project" href="http://clapat.ro/themes/newave/project-normal-expander-2.html" title="Open Project"></a> </div>
          <div class="project-info">
            <div class="zoom-icon"></div>
            <h4 class="project-name">iPhone</h4>
            <p class="project-categories">Web</p>
          </div>
        </div>
      </div>
      <!--/Portfolio Item Normal Expander --> 
      
      <!-- Portfolio Item External Project  -->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(674px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  design web isotope-item">
        <div class="portfolio-image"> <img src="img/portfolio_pic7.jpg" alt="Portfolio 1"> </div>
        <a href="http://clapat.ro/themes/newave/project-external-1.html" class="external">
        <div class="project-overlay">
          <div class="project-info">
            <div class="zoom-icon"></div>
            <h4 class="project-name">Nexus Phone</h4>
            <p class="project-categories">Design, Web</p>
          </div>
        </div>
        </a> </div>
      <!--/Portfolio Item External Project  --> 
      
      <!-- Portfolio Item With PrettyPhoto  -->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   photography isotope-item">
        <div class="portfolio-image"> <img src="img/portfolio_pic8.jpg" alt="Portfolio 1"> </div>
        <a title="Stereo Headphones" rel="prettyPhoto[galname]" href="http://clapat.ro/themes/newave/images/portfolio/portfolio8.jpg">
        <div class="project-overlay">
          <div class="project-info">
            <div class="zoom-icon"></div>
            <h4 class="project-name">Art Frame</h4>
            <p class="project-categories">Photography</p>
          </div>
        </div>
        </a> </div>
      <!--/Portfolio Item With PrettyPhoto  --> 
      
    </div>
    <!--/Portfolio Wrap --> 
    
  </div>
  <!--/Portfolio Plus Filters -->
  
  <div class="portfolio-bottom"></div>
  
  <!-- Project Page Holder-->
  <div id="project-page-holder">
    <div class="clear"></div>
    <div id="project-page-data"></div>
  </div>
  <!--/Project Page Holder--> 
  
</section>
<!--/Portfolio --> 








<!-- Latest WORK -->

<section id="work_outer"><!--main-section-start-->
<div class="top_cont_latest">
  <div class="container">
    <h2>Last Work</h2>
    <div class="work_section">
      <div class="row">
        <div class="col-lg-6 col-sm-6 wow fadeInLeft delay-05s">
          <div class="service-list">
            <div class="service-list-col1"> <i class="icon-doc"></i> </div>
            <div class="service-list-col2">
              <h3>Process Walkthrough</h3>
              <p>Proin iaculis purus digni consequat sem digni ssim. Donec entum digni ssim.</p>
            </div>
          </div>
          <div class="service-list">
            <div class="service-list-col1"> <i class="icon-comment"></i> </div>
            <div class="service-list-col2">
              <h3>24/7 support</h3>
              <p>Proin iaculis purus consequat sem digni ssim. Digni ssim porttitora .</p>
            </div>
          </div>
          <div class="service-list">
            <div class="service-list-col1"> <i class="icon-database"></i> </div>
            <div class="service-list-col2">
              <h3>Hosting & Storage</h3>
              <p>Proin iaculis purus consequat digni sem digni ssim. Purus donec porttitora entum.</p>
            </div>
          </div>
          <div class="service-list">
            <div class="service-list-col1"> <i class="icon-cog"></i> </div>
            <div class="service-list-col2">
              <h3>Customization options</h3>
              <p>Proin iaculis purus consequat sem digni ssim. Sem porttitora entum.</p>
            </div>
          </div>
          <div class="work_bottom"> <span>Ready to take the plunge?</span> <a href="#contact" class="contact_btn">Contact Us</a> </div>
        </div>
        <figure class="col-lg-6 col-sm-6  text-right wow fadeInUp delay-02s"> </figure>
      </div>
    </div>
  </div>
  <!--<div class="work_pic"><img src="img/dashboard_pic.png" alt=""></div>-->
  </div>
</section>
<!--main-section-end--> 

   
</section>  






 

<!-- Client -->

<section class="main-section" id="client_outer"><!--main-section client-part-start-->
  <h2>Happy Clients</h2>
  <div class="client_area ">
    <div class="client_section animated  fadeInUp wow">
      <div class="client_profile">
        <div class="client_profile_pic"><img src="img/client-pic1.jpg" alt=""></div>
        <h3>Saul Goodman</h3>
        <span>Lawless Inc</span> </div>
      <div class="quote_section">
        <div class="quote_arrow"></div>
        <p><b><img src="img/quote_sign_left.png" alt=""></b> Proin iaculis purus consequat sem cure  digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper. <small><img src="img/quote_sign_right.png" alt=""></small> </p>
      </div>
      <div class="clear"></div>
    </div>
    <div class="client_section animated  fadeInDown wow">
      <div class="client_profile flt">
        <div class="client_profile_pic"><img src="img/client-pic2.jpg" alt=""></div>
        <h3>Marie Schrader</h3>
        <span>DEA Foundation</span> </div>
      <div class="quote_section flt">
        <div class="quote_arrow2"></div>
        <p><b><img src="img/quote_sign_left.png" alt=""></b> Proin iaculis purus consequat sem cure  digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper. <small><img src="img/quote_sign_right.png" alt=""></small> </p>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</section>
<!--main-section client-part-end-->

<div class="c-logo-part"><!--c-logo-part-start-->
  <div class="container">
    <ul class="delay-06s animated  bounce wow">
      <li><a href="javascript:void(0)"><img src="img/c-liogo1.png" alt=""></a></li>
      <li><a href="javascript:void(0)"><img src="img/c-liogo2.png" alt=""></a></li>
      <li><a href="javascript:void(0)"><img src="img/c-liogo3.png" alt=""></a></li>
      <li><a href="javascript:void(0)"><img src="img/c-liogo5.png" alt=""></a></li>
    </ul>
  </div>
</div>
<!--c-logo-part-end-->
<section class="main-section team" id="team"><!--main-section team-start-->
  <div class="container">
    <h2>Amazing Team</h2>
    <h6>Take a closer look into our amazing team. We won’t bite.</h6>
    <div class="team-leader-block clearfix">
      <div class="team-leader-box">
        <div class="team-leader wow fadeInDown delay-03s">
          <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
          <img src="img/team-leader-pic1.jpg" alt="">
          <ul>
            <li><a href="javascript:void(0)" class="fa-twitter"></a></li>
            <li><a href="javascript:void(0)" class="fa-facebook"></a></li>
            <li><a href="javascript:void(0)" class="fa-pinterest"></a></li>
            <li><a href="javascript:void(0)" class="fa-google-plus"></a></li>
          </ul>
        </div>
        <h3 class="wow fadeInDown delay-03s">Walter White</h3>
        <span class="wow fadeInDown delay-03s">Chief Executive Officer</span>
        <p class="wow fadeInDown delay-03s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
      </div>
      <div class="team-leader-box">
        <div class="team-leader  wow fadeInDown delay-06s">
          <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
          <img src="img/team-leader-pic2.jpg" alt="">
          <ul>
            <li><a href="javascript:void(0)" class="fa-twitter"></a></li>
            <li><a href="javascript:void(0)" class="fa-facebook"></a></li>
            <li><a href="javascript:void(0)" class="fa-pinterest"></a></li>
            <li><a href="javascript:void(0)" class="fa-google-plus"></a></li>
          </ul>
        </div>
        <h3 class="wow fadeInDown delay-06s">Jesse Pinkman</h3>
        <span class="wow fadeInDown delay-06s">Product Manager</span>
        <p class="wow fadeInDown delay-06s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
      </div>
      <div class="team-leader-box">
        <div class="team-leader wow fadeInDown delay-09s">
          <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
          <img src="img/team-leader-pic3.jpg" alt="">
          <ul>
            <li><a href="javascript:void(0)" class="fa-twitter"></a></li>
            <li><a href="javascript:void(0)" class="fa-facebook"></a></li>
            <li><a href="javascript:void(0)" class="fa-pinterest"></a></li>
            <li><a href="javascript:void(0)" class="fa-google-plus"></a></li>
          </ul>
        </div>
        <h3 class="wow fadeInDown delay-09s">Skyler white</h3>
        <span class="wow fadeInDown delay-09s">Accountant</span>
        <p class="wow fadeInDown delay-09s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
      </div>
    </div>
  </div>
</section>
<!--main-section team-end-->

<section class="twitter-feed"><!--twitter-feed-->
  <div class="container  animated fadeInDown delay-07s wow">
    <div class="twitter_bird"><span><i class="fa-twitter"></i></span></div>
    <p> When you're the underdog, your only option is to make #waves if you want to succeed. How much <br>
      and how often should you be drinking coffee?</p>
    <span>About 28 mins ago</span> </div>
</section>
<!--twitter-feed-end-->
<footer class="footer_section" id="contact">
  <div class="container">
    <section class="main-section contact" id="contact">
      <div class="contact_section">
        <h2>Contact Us</h2>
        <div class="row">
          <div class="col-lg-4">
            <div class="contact_block">
              <div class="contact_block_icon rollIn animated wow"><span><i class="fa-home"></i></span></div>
              <span> 308 Negra Arroyo Lane, <br>
              Albuquerque, NM, 87104 </span> </div>
          </div>
          <div class="col-lg-4">
            <div class="contact_block">
              <div class="contact_block_icon icon2 rollIn animated wow"><span><i class="fa-phone"></i></span></div>
              <span> 1-800-BOO-YAHH </span> </div>
          </div>
          <div class="col-lg-4">
            <div class="contact_block">
              <div class="contact_block_icon icon3 rollIn animated wow"><span><i class="fa-pencil"></i></span></div>
              <span> <a href="mailto:hello@butterfly.com"> hello@butterfly.com</a> </span> </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 wow fadeInLeft">
          <div class="contact-info-box address clearfix">
            <h3>Don’t be shy. Say hello!</h3>
            <p>Accusantium quam, aliquam ultricies eget tempor id, aliquam eget nibh et. Maecen aliquam, risus at semper. Accusantium quam, aliquam ultricies eget tempor id, aliquam eget nibh et. Maecen aliquam, risus at semper.</p>
            <p>Accusantium quam, aliquam ultricies eget tempor id, aliquam eget nibh et. Maecen aliquampor id.</p>
          </div>
          <ul class="social-link">
            <li class="twitter animated bounceIn wow delay-02s"><a href="javascript:void(0)"><i class="fa-twitter"></i></a></li>
            <li class="facebook animated bounceIn wow delay-03s"><a href="javascript:void(0)"><i class="fa-facebook"></i></a></li>
            <li class="pinterest animated bounceIn wow delay-04s"><a href="javascript:void(0)"><i class="fa-pinterest"></i></a></li>
            <li class="gplus animated bounceIn wow delay-05s"><a href="javascript:void(0)"><i class="fa-google-plus"></i></a></li>
            <li class="dribbble animated bounceIn wow delay-06s"><a href="javascript:void(0)"><i class="fa-dribbble"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-6 wow fadeInUp delay-06s">
          <div class="form">
            <input class="input-text animated wow flipInY delay-02s" type="text" name="" value="Your Name *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
            <input class="input-text animated wow flipInY delay-04s" type="text" name="" value="Your E-mail *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
            <textarea class="input-text text-area animated wow flipInY delay-06s" cols="0" rows="0" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">Your Message *</textarea>
            <input class="input-btn animated wow flipInY delay-08s" type="submit" value="send message">
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="container">
    <div class="footer_bottom"> <span>Copyright © 2015 | <a href="http://bootstraptaste.com/">Bootstrap Themes</a> by BootstrapTaste </span> </div>
    <!-- 
        All links in the footer should remain intact. 
        Licenseing information is available at: http://bootstraptaste.com/license/
        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Butterfly
    -->
  </div>
</footer>
<script type="text/javascript">
    $(document).ready(function(e) {
        $('#header_outer').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false    
            
        });
        
    });
</script> 
<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();
    document.getElementById('').onclick = function() {
      var section = document.createElement('section');
      section.className = 'wow fadeInDown';
	  section.className = 'wow shake';
	  section.className = 'wow zoomIn';
	  section.className = 'wow lightSpeedIn';
      this.parentNode.insertBefore(section, this);
    };
  </script> 
<script type="text/javascript">
	$(window).load(function(){
		
		$('a').bind('click',function(event){
			var $anchor = $(this);
			
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 91
			}, 1500,'easeInOutExpo');
			/*
			if you don't want to use the easing effects:
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1000);
			*/
			event.preventDefault();
		});
	})
</script> 

<!--<script type="text/javascript">

$(window).load(function(){
  
  
  var $container = $('.portfolioContainer'),
      $body = $('body'),
      colW = 350,
      columns = null;

  
  $container.isotope({
    // disable window resizing
    resizable: true,
    masonry: {
      columnWidth: colW
    }
  });
  
  $(window).smartresize(function(){
    // check if columns has changed
    var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
    if ( currentColumns !== columns ) {
      // set new column count
      columns = currentColumns;
      // apply width to container manually, then trigger relayout
      $container.width( columns * colW )
        .isotope('reLayout');
    }
    
  }).smartresize(); // trigger resize to set container width
  $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
			
            filter: selector,
         });
         return false;
    });
  
});

</script>


--> 

<script type="text/javascript">

   
  jQuery(document).ready(function($){     
// Portfolio Isotope
	var container = $('#portfolio-wrap');	
	

	container.isotope({
		animationEngine : 'best-available',
	  	animationOptions: {
	     	duration: 200,
	     	queue: false
	   	},
		layoutMode: 'fitRows'
	});	

	$('#filters a').click(function(){
		$('#filters a').removeClass('active');
		$(this).addClass('active');
		var selector = $(this).attr('data-filter');
	  	container.isotope({ filter: selector });
        setProjects();		
	  	return false;
	});
		
		
		function splitColumns() { 
			var winWidth = $(window).width(), 
				columnNumb = 1;
			
			
			if (winWidth > 1024) {
				columnNumb = 4;
			} else if (winWidth > 900) {
				columnNumb = 2;
			} else if (winWidth > 479) {
				columnNumb = 2;
			} else if (winWidth < 479) {
				columnNumb = 1;
			}
			
			return columnNumb;
		}		
		
		function setColumns() { 
			var winWidth = $(window).width(), 
				columnNumb = splitColumns(), 
				postWidth = Math.floor(winWidth / columnNumb);
			
			container.find('.portfolio-item').each(function () { 
				$(this).css( { 
					width : postWidth + 'px' 
				});
			});
		}		
		
		function setProjects() { 
			setColumns();
			container.isotope('reLayout');
		}		
		
		container.imagesLoaded(function () { 
			setColumns();
		});
		
	
		$(window).bind('resize', function () { 
			setProjects();			
		});

});
$( window ).load(function() {
	jQuery('#all').click();
	return false;
});
</script>
<?php
if($_GET['k'] != NULL){?>
	<script>
          alert("You are now successful register to our system. \n Please check your email : <?php echo $k ?>");
    </script>
<?php }?>

</body>
</html>