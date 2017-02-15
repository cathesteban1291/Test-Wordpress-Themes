<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>


<div id="our-company" class="page-wrapper full-width light-bg" style="background-color:#ffffff">
	<div class="page-fullwdth-content">	
		<div id="slider">
			<div id="carousel-main" class="carousel slide">
				<div class="carousel-inner">
					<div class="item active">
						<img width="2130" height="840" src="http://leadci.com/wp-content/uploads/2015/01/1.Company-Banner.jpg" class="img-responsive wp-post-image" alt="1.Company-Banner">
							<div class="carousel-caption">
								<div class="container">
									<h2>Our purpose</h2>
										<p class="lead">is to develop individuals and teams so they have the&nbsp;<strong>capabilities&nbsp;</strong>(abilities and willingness) to&nbsp;<strong>lead and manage change&nbsp;</strong>and&nbsp;<strong>continuous improvement&nbsp;</strong>in all aspects of business</p>
								</div>
							</div>
					</div>

					<div class="item">
						<img width="2130" height="840" src="http://leadci.com/wp-content/uploads/2015/01/2.Identify-Banner.jpg" class="img-responsive wp-post-image" alt="2.Identify-Banner">
							<div class="carousel-caption">
								<div class="container">
									<h2>We identify</h2>
										<p class="lead"><strong>opportunities, ideas and problems</strong> and work with you to <strong>quantify the possibilities</strong></p>
								</div>
							</div>
					</div>

					<div class="item">
						<img width="2130" height="840" src="http://leadci.com/wp-content/uploads/2015/01/3.Engage-Banner.jpg" class="img-responsive wp-post-image" alt="3.Engage-Banner">
							<div class="carousel-caption">
								<div class="container">
									<h2>We engage</h2>
										<p class="lead"><strong>individuals and teams</strong> in the change and <strong>continuous improvement process</strong></p>
								</div>
							</div>
					</div>

					<div class="item">
						<img width="2130" height="840" src="http://leadci.com/wp-content/uploads/2015/01/4.Develop-Banner.jpg" class="img-responsive wp-post-image" alt="4.Develop-Banner">
							<div class="carousel-caption">
								<div class="container">
									<h2>We develop</h2>
										<p class="lead">your people’s <strong>Leadership, Management and Continuous Improvement Skills</strong> and Capabilities</p>
								</div>
							</div>
					</div>

					<div class="item">
						<img width="2130" height="840" src="http://leadci.com/wp-content/uploads/2015/01/5.Deliver-Banner.jpg" class="img-responsive wp-post-image" alt="5.Deliver-Banner">
							<div class="carousel-caption">
								<div class="container">
									<h2>We deliver</h2>
										<p class="lead"><strong>results</strong> and build a <strong>continuous improvement culture</strong></p>
								</div>
							</div>
					</div>

				</div>

				<a class="left carousel-control" href="#carousel-main" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a class="right carousel-control" href="#carousel-main" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
			</div>
		</div>

		<div id="our-company-mobile" style="display:none; text-align:center;">
			<h2 style="margin-top:35px;">Our Purpose</h2>
				<p>is to develop individuals and teams so they have the&nbsp;<strong>capabilities&nbsp;</strong>(abilities and willingness) to&nbsp;<strong>lead and manage change&nbsp;</strong>and&nbsp;<strong>continuous improvement&nbsp;</strong>in all aspects of business.</p>

			<h2 style="margin-top:35px;">We Identify</h2>
			<p><strong>opportunities, ideas and problems</strong> and work with you to <strong>quantify the possibilities</strong></p>

			<h2 style="margin-top:35px;">We Engage</h2>
			<p><strong>individuals and teams</strong> in the change and <strong>continuous improvement process</strong></p>

			<h2 style="margin-top:35px;">We Develop</h2>
			<p>your people’s <strong>Leadership, Management and Continuous Improvement Skills</strong> and Capabilities</p>

			<h2 style="margin-top:35px;">We Deliver</h2>
			<p style="margin-bottom:45px;"><strong>results</strong> and build a <strong>continuous improvement culture</strong></p>
		</div>
	</div> <!-- .page-fullwdth-content -->
</div> <!-- .page-content -->


<section id="our-services" class="page-wrapper light-bg" style="background-color:#ffffff">
	<div class="container">				 
		<div class="title-area">
			<h2 class="title">Our Services </h2>
				<p class="subtitle">We develop your people's <b>leadership, management</b> and <b>continuous improvement</b> skills and capabilities to enable your organisation to achieve its <b>vision</b> and <b>purpose.</b></p>
		</div> <!-- .section-title -->
							
		<div class="row page-content">	
			<div class="content-column one_third">
				<div id="our-services-container">
					<div class="osc-img" style="float:left">
						<img style="max-width:100%;" src="http://leadci.com/wp-content/uploads/2015/05/leadership.png" alt="" title="">
					</div>
					<div class="leadership">
						<ul>
							<strong>Leadership</strong>
							<li>Influencing Others</li>
							<li>Communication</li>
							<li>Teamwork</li>
							<li>Situational Awareness</li>
							<li>Decision Making</li>
							<li>Self Awareness</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="content-column one_third">
				<div id="our-services-container">
					<div class="osc-img" style="float:left">
						<img style="max-width:100%;" src="http://leadci.com/wp-content/uploads/2015/05/management.png" alt="" title="">
					</div>
					<div class="management">
						<ul>
							<strong>Management</strong>
							<li>Planning and Prioritising</li>
							<li>Resourcing</li>
							<li>Goal Setting &amp; <br> Performance Management</li>
							<li>Problem Solving</li>
							<li>Time Management</li>
							<li>Risk Management</li>
							<li>Standardisation</li>
							<li>Business Acumen</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="content-column one_third last_column">
				<div id="our-services-container">
					<div class="osc-img" style="float:left">
						<img style="max-width:100%;" src="http://leadci.com/wp-content/uploads/2015/05/continuous-improvement.png" alt="" title="">
					</div>
					<div class="continuous">
						<ul>
							<strong>Continuous Improvement</strong>
							<li>PDCA Cycle</li>
							<li>Value Stream Mapping</li>
							<li>Benchmarking</li>
							<li>Using Data to create insight</li>
							<li>Idea generation &amp; Innovation</li>
							<li>Kaizen</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="clear_column"></div>
		</div> <!-- .page-content -->
	</div> <!-- .container -->
</section>

<section id="our-experience" class="parallax parallax-image dark-bg" style="background-color: #50617f; background-image:url('http://leadci.com/wp-content/uploads/2015/01/SLIDER-31.jpg');">
	<div class="overlay"></div>
		<div class="container">
			<div class="parallax-content">
				<div class="title-area">
					<h2 class="title">Our Experience </h2>
						<p class="subtitle">We work <b>globally</b> and have a significant track record in <b>facilitating</b> and <b>leading change</b> and <b>continuous improvement</b> in many business areas and industries.</p>
				</div> <!-- .section-title -->
				
				<div class="row">
					<div class="content-column one_half">
						<div id="our-experience-container" class="bus-areas">
							<div style="float:left">
								<img style="max-width:100%;" src="http://leadci.com/wp-content/uploads/2015/05/business-areas.png" alt="" title="">
							</div>
							<div class="bus-content">
								<ul>
									<li><strong>Business Areas</strong></li>
									<li>Productivity Improvement</li>
									<li>Sales &amp; Marketing</li>
								        <li>Business Restructuring</li>
									<li>Cost &amp; Waste Reduction</li>
									<li>Supply Chain Optimisation</li>
									<li>Healthy &amp; Safety</li>
									<li>Product &amp; Service Development</li>
									<li>Project Management</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="content-column one_half last_column">
						<div id="our-experience-container" class="industries">
							<div style="float:left">
								<img style="max-width:100%;" src="http://leadci.com/wp-content/uploads/2015/05/industries.png" alt="" title="">
							</div>
							<div class="ind-content">
								<ul>
									<li><strong>Industries</strong></li>
									<li>Manufacturing</li>
									<li>Telecommunications</li>
									<li>Oil and Gas</li>
									<li>Mining</li>
									<li>Engineering</li>
									<li>Health Insurance</li>
									<li>Government</li>
									<li>IT</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="clear_column"></div>								</div>
			</div> <!-- .parallax-content -->
		</div>
</section> <!-- .parallax -->
									
<section id="our-people" class="page-wrapper light-bg" style="background-color:#f5f5f5">
	<div class="container">				 
		<div class="title-area">
			<h2 class="title">Our People </h2>
				<p class="subtitle">Our team of consultants are <b>experienced professionals</b> and all have over <b>20 years' management</b> and <b>consulting experience.</b> We are committed to delivering <b>high quality results</b> and building long term relationships with all our clients.</p>
																		
		</div> <!-- .section-title -->
							
		<div class="row page-content">	
			<div class="content-column one_fourth">
				<a href="http://leadci.com/john-costley/" target="_blank">
					<div id="team-profile" style="width: 90%; margin-left: 10%; float: left;">
						<p style="text-align:center;">
							<img style="width: 150px; max-width: 100%;" title="John Costley" src="http://leadci.com/wp-content/uploads/2015/05/john-costley.png" alt="John Costley">
						</p>
						<h2 style="margin-top: 0; text-align:center;">John Costley</h2>
						<h4 style="margin-top: 0; text-align:center;">Professional Experience</h4>
					</div>
				</a>
			</div>

			<div class="content-column one_fourth">
				<a href="http://leadci.com/david-llewellyn/" target="_blank">
					<div id="team-profile" style="width:90%; margin-left: 10%; float:left;">
						<p style="text-align:center;">
							<img style="width: 150px; max-width:100%;" src="http://leadci.com/wp-content/uploads/2015/05/david-llewellyn.png" alt="David Llewellyn" title="David Llewellyn">
						</p>
						<h2 style="margin-top: 0; text-align:center;">David Llewellyn</h2>
						<h4 style="margin-top: 0; text-align:center;">Professional Experience</h4>
					</div>
				</a>
			</div>

			<div class="content-column one_fourth">
				<a href="http://leadci.com/graeme-fitzgerald/" target="_blank">
					<div id="team-profile" style="width:90%; margin-left: 10%; float:left;">
						<p style="text-align:center;">
							<img style="width: 150px; max-width:100%;" src="http://leadci.com/wp-content/uploads/2016/11/Graeme-300.png" alt="Graeme Fitzgerald" title="Graeme Fitzgerald">
						</p>
						<h2 style="margin-top: 0; text-align:center;">Graeme Fitzgerald</h2>
						<h4 style="margin-top: 0; text-align:center;">Professional Experience</h4>
					</div>
				</a>
			</div>

			<div class="content-column one_fourth last_column">
				<a href="http://leadci.com/scott-oconnor/" target="_blank">
					<div id="team-profile" style="width: 90%; margin-left: 10%; float: left;">
						<p style="text-align:center;">
							<img style="width: 150px; max-width: 100%;" title="Scott O’Connor" src="http://leadci.com/wp-content/uploads/2016/11/Scott-300.png" alt="Scott O’Connor">
						</p>
						<h2 style="margin-top: 0; text-align:center;">Scott O’Connor</h2>
						<h4 style="margin-top: 0; text-align:center;">Professional Experience</h4>
					</div>
				</a>
			</div>

			<div class="clear_column"></div>

			<p>&nbsp;</p>

			<div id="col-first-child" class="content-column one_third">
				<a href="http://leadci.com/grant-wiltshire/" target="_blank">
					<div id="team-profile" style="width:90%; margin-left: 10%; float:left;">
						<p style="text-align:center;">
							<img style="width: 150px; max-width:100%;" src="http://leadci.com/wp-content/uploads/2016/11/Grant-300.png" alt="Grant Wiltshire" title="Grant Wiltshire">
						</p>
						<h2 style="margin-top: 0; text-align:center;">Grant Wiltshire</h2>
						<h4 style="margin-top: 0; text-align:center;">Professional Experience</h4>
					</div>
				</a>
			</div>

			<div class="content-column one_third">
				<a href="http://leadci.com/nigel-beaman/" target="_blank">
					<div id="team-profile" style="width:90%; margin-left: 10%; float:left;">
						<p style="text-align:center;">
							<img style="width: 150px; max-width:100%;" src="http://leadci.com/wp-content/uploads/2016/11/Nigel-plant.png" alt="Nigel Beaman" title="Nigel Beaman">
						</p>
						<h2 style="margin-top: 0; text-align:center;">Nigel Beaman</h2>
						<h4 style="margin-top: 0; text-align:center;">Professional Experience</h4>
					</div>
				</a>
			</div>

			<div class="content-column one_third last_column">
				<a href="http://leadci.com/allan-rathjen/" target="_blank">
					<div id="team-profile" style="width: 90%; margin-left: 10%; float: left;">
						<p style="text-align:center;">
							<img style="width: 150px; max-width: 100%;" title="Allan Rathjen" src="http://leadci.com/wp-content/uploads/2016/12/Allan-Rathgen-300.png" alt="Allan Rathjen">
						</p>
						<h2 style="margin-top: 0; text-align:center;">Allan Rathjen</h2>
						<h4 style="margin-top: 0; text-align:center;">Professional Experience</h4>
					</div>
				</a>
			</div>

			<div class="clear_column"></div>
		</div> <!-- .page-content -->
	</div> <!-- .container -->
</section>

<section id="contact-us" class="page-wrapper light-bg" style="background-color:#ffffff">
	<div class="container">
		<div class="title-area">
			<h2 class="title">Contact Us </h2>
		</div> <!-- .section-title -->
		
		<div class="row page-content">	
			<div class="content-column one_half">
				<div id="contact-content">
					<div style="float:left">
						<img style="max-width:100%;" src="http://leadci.com/wp-content/uploads/2015/05/contact-us.png" alt="" title="">
					</div>
					<div style="float:left;position:relative;padding-left: 20px;">
						<h3>John Costley</h3>Email: 
							<a style="color: #43B1DB;" href="mailto:john.costley@leadci.com">john.costley@leadci.com</a>
								<p style="color: #555555;">Phone: 
									<a href="tel:+610488584111" style="color: #55556A;">+61 (0) 488 584 111</a>
								</p>
					</div>
				</div>
			</div>

			<div class="content-column one_half last_column">
				<div id="contact-content">
					<div style="float:left">
						<img style="max-width:100%;" src="http://leadci.com/wp-content/uploads/2015/05/contact-us.png" alt="" title="">
					</div>
					<div style="float:left;position:relative;padding-left: 20px;">
						<h3>David Llewellyn</h3>Email: 
							<a style="color: #43B1DB;" href="mailto:david.llewellyn@leadci.com">david.llewellyn@leadci.com</a>
								<p style="color: #555555;">Phone: 
									<a href="tel:+610428777000" style="color: #55556A;">+61 (0) 428 777 000</a>
								</p>
					</div>
				</div>
			</div>

			<div class="clear_column"></div>

			<p>&nbsp;</p>

			<div class="content-column one_half">
				<div id="contact-content">
					<div style="float:left">
						<img style="max-width:100%;" src="http://leadci.com/wp-content/uploads/2015/05/contact-us.png" alt="" title="">
					</div>
					<div style="float:left;position:relative;padding-left: 20px;">
						<h3>Graeme Fitzgerald</h3>Email: 
						<a style="color: #43B1DB;" href="mailto:graeme.fitzgerald@leadci.com">graeme.fitzgerald@leadci.com</a>
							<p style="color: #555555;">Phone: 
								<a href="tel:+610407093662" style="color: #55556A;">+61 (0) 407 093 662</a>
							</p>
					</div>
				</div>
			</div>

			<div class="content-column one_half last_column">
				<div id="contact-content">
					<div style="float:left">
						<img style="max-width:100%;" src="http://leadci.com/wp-content/uploads/2015/05/contact-us.png" alt="" title="">
					</div>
					<div style="float:left;position:relative;padding-left: 20px;">
						<h3>Scott O’Connor</h3>Email: 
							<a style="color: #43B1DB;" href="mailto:scott.oconnor@leadci.com">scott.oconnor@leadci.com</a>
								<p style="color: #555555;">Phone: 
									<a href="tel:+610409802862" style="color: #55556A;">+61 (0) 409 802 862</a>
								</p>
					</div>
				</div>
			</div>

			<div class="clear_column"></div>

			<p>&nbsp;</p>

			<div class="content-column one_half">
				<div id="contact-content">
					<div style="float:left">
						<img style="max-width:100%;" src="http://leadci.com/wp-content/uploads/2015/05/contact-us.png" alt="" title="">
					</div>
					<div style="float:left;position:relative;padding-left: 20px;">
						<h3>Grant Wiltshire</h3>Email: 
						<a style="color: #43B1DB;" href="mailto:grant.wiltshire@leadci.com">grant.wiltshire@leadci.com</a>
							<p style="color: #555555;">Phone: 
								<a href="tel:+610418509003" style="color: #55556A;">+61 (0) 418 509 003</a>
							</p>
					</div>
				</div>
			</div>

			<div class="content-column one_half last_column">
				<div id="contact-content">
					<div style="float:left">
						<img style="max-width:100%;" src="http://leadci.com/wp-content/uploads/2015/05/contact-us.png" alt="" title="">
					</div>
					<div style="float:left;position:relative;padding-left: 20px;">
						<h3>Nigel Beaman</h3>Email: 
							<a style="color: #43B1DB;" href="mailto:grant.wiltshire@leadci.com">nigel.beaman@leadci.com</a>
								<p style="color: #555555;">Phone: 
									<a href="tel:+610419499953" style="color: #55556A;">+61 (0) 419 499 953</a>
								</p>
					</div>
				</div>
			</div>

			<div class="clear_column"></div>

			<p>&nbsp;</p>

			<div class="content-column one_half">
				<div id="contact-content">
					<div style="float:left">
						<img style="max-width:100%;" src="http://leadci.com/wp-content/uploads/2015/05/contact-us.png" alt="" title="">
					</div>
					<div style="float:left;position:relative;padding-left: 20px;">
						<h3>Allan Rathjen</h3>Email: 
							<a style="color: #43B1DB;" href="mailto:allan.rathjen@leadci.com">allan.rathjen@leadci.com</a>
								<p style="color: #555555;">Phone: 
									<a href="tel:+610418509003" style="color: #55556A;">+61 (0) 418 739 998</a>
								</p>
					</div>
				</div>
			</div>
		</div> <!-- .page-content -->
	</div> <!-- .container -->
</section>
				
<section id="bottom" class="footer-wiget-area">
    <div class="container">
        <div class="row"></div>
    </div>
</section>






<?php get_footer(); ?>
