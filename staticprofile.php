<?php
include_once 'gpConfig.php';
include_once 'User.php';
include 'connectdb.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>resumere.in</title>

		<meta name="description" content="tottaly responsive personal portfolio website with live input data." />
		<meta name="keywords" content="responsive, template, portfolio, html, css, javascript" />
		
                <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<!-- Open Sans Google font -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
		<!-- Raleway Google font -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:700">
		<!-- Favicons -->
		<link rel="shortcut icon" href="favicon.jpg">
		<link rel="apple-touch-icon" sizes="60x60" href="favicon.jpg">
		<!-- Fontawesome fonts css file -->
		
                <link rel="stylesheet" href="Profile/css/font-awesome.min.css">
		<!-- Animate.css file -->
		<link rel="stylesheet" href="http://ahmedbeheiry.com/works/tf/marqa/css/animate.css">
		<!-- Owl carousel css file -->
		<link rel="stylesheet" href="http://ahmedbeheiry.com/works/tf/marqa/css/owl.carousel.css">
		<!-- Bootstrap file -->
		<link rel="stylesheet" href="http://ahmedbeheiry.com/works/tf/marqa/css/bootstrap.min.css">
		<!-- Custom styles css file -->
		<link rel="stylesheet" href="http://ahmedbeheiry.com/works/tf/marqa/css/style.css">
                <script src="moment.js"></script>
                <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
                <script>
                function ajax_func(){
                    var xmlhttp =new XMLHttpRequest();
                    xmlhttp.onreadystatechange=function(){
                        if(xmlhttp.readyState==4 && xmlhttp.status==200){
                            document.getElementById('ret_data').innerHTML=xmlhttp.responseText;
                            
                        }
                    }
                    xmlhttp.open("GET","backend.php",true);
                    xmlhttp.send();
                }
                
                function edit_form(){
                   
                    
                    var edit_form=document.getElementById('edit_form');
                    var loc=document.getElementById('loc').value,
                        coc=document.getElementById('coc').value,
                        projects=document.getElementById('projects').value;
                    
                    var xmlhttp =new XMLHttpRequest();
                    xmlhttp.onreadystatechange=function(){
                        if(xmlhttp.readyState==4 && xmlhttp.status==200){
                            document.getElementById('ret_data').innerHTML=xmlhttp.responseText;
                            }
                    }
                    xmlhttp.open("GET","backend.php?edit_user=yes&loc="+loc+"&coffee="+coc+"&projects="+projects,true);
                    xmlhttp.send();
                    $('#update_info1').modal('hide');
                    edit_form.reset();
                   return false;
                }
                function edit_form2(){
                   
                    
                   var edit_form=document.getElementById('edit_form2');
                    var ts1=document.getElementById('ts1v').value,
                        ts2=document.getElementById('ts2v').value,
                        ts3=document.getElementById('ts3v').value,
                        ts4=document.getElementById('ts4v').value,
                        os1=document.getElementById('os1v').value,
                        os2=document.getElementById('os2v').value,
                        os3=document.getElementById('os3v').value,
                        os4=document.getElementById('os4v').value,
                        os5=document.getElementById('os5v').value,
                        os6=document.getElementById('os6v').value;
                    var xmlhttp =new XMLHttpRequest();
                    xmlhttp.onreadystatechange=function(){
                        if(xmlhttp.readyState==4 && xmlhttp.status==200){
                            document.getElementById('ret_data2').innerHTML=xmlhttp.responseText;
                            }
                    }
                    xmlhttp.open("GET","tech_submit.php?edit_tech=yes&ts1="+ts1+"&ts2="+ts2+"&ts3="+ts3+"&ts4="+ts4+"&os1="+os1+"&os2="+os2+"&os3="+os3+"&os4="+os4+"&os5="+os5+"&os6="+os6,true);
                    xmlhttp.send();
                    $('#update_info2').modal('hide');
                    edit_form.reset();
                   return false;
                }
                function edit_form3(){
                   
                    
                   var edit_form=document.getElementById('edit_form3');
                    var fb=document.getElementById('fb').value,
                        tweet=document.getElementById('tweet').value,
                        github=document.getElementById('github').value,
                        linkedin=document.getElementById('linkedin').value,
                        gplus=document.getElementById('gplus').value,
                        pinterest=document.getElementById('pinterest').value;
                    var xmlhttp =new XMLHttpRequest();
                    xmlhttp.onreadystatechange=function(){
                        if(xmlhttp.readyState==4 && xmlhttp.status==200){
                            document.getElementById('ret_data3').innerHTML=xmlhttp.responseText;
                            }
                    }
                    
                    xmlhttp.open("GET","link_submit.php?edit_link=yes&fb="+fb+"&tweet="+tweet+"&github="+github+"&linkedin="+linkedin+"&gplus="+gplus+"&pinterest="+pinterest,true);
                    xmlhttp.send();
                    $('#update_info3').modal('hide');
                    edit_form.reset();
                   return false;
                }
                </script>
                <style>
                    #tsother { word-wrap: break-word; }
                </style>
        
        
	</head>
        <body id="container" onload="ajax_func();">
            <?php
            $uid=$_SESSION['u_id'];
            
            $select="SELECT * from user_skill where u_id='$uid'";
                $run_select= mysqli_query($connect, $select);
            while ($row= mysqli_fetch_assoc($run_select)){
    $_SESSION['ts1']=$row['ts1'];
    $_SESSION['ts2']=$row['ts2'];
    $_SESSION['ts3']=$row['ts3'];
    $_SESSION['ts4']=$row['ts4'];
    $_SESSION['os1']=$row['os1'];
    $_SESSION['os2']=$row['os2'];
    $_SESSION['os3']=$row['os3'];
    $_SESSION['os4']=$row['os4'];
    $_SESSION['os5']=$row['os5'];
    $_SESSION['os6']=$row['os6'];
};
$select="SELECT * from user_links where u_id='$uid'";
                $run_select= mysqli_query($connect, $select);
            while ($row= mysqli_fetch_assoc($run_select)){
    $_SESSION['fb']=$row['fb'];
    $_SESSION['tweet']=$row['tweet'];
    $_SESSION['github']=$row['github'];
    $_SESSION['linkedin']=$row['linkedin'];
    
    $_SESSION['gplus']=$row['gplus'];
    $_SESSION['pinterest']=$row['pinterest'];
}

            
            ?>
		<!-- Start Preloader Page --> 
		<div class="preloader">
			<div class="pulse"></div>
			<div class="pulse"></div>
		</div>
		<!-- End Preloader Page -->	

		<!-- Start Header Section -->
		<div class="header" id="header">
			<div id="large-header" class="large-header">
				<canvas id="demo-canvas"></canvas>
				<div class="content center">
					<div class="container">
						<p>Hello,<b>Happy New Year</b>, It's me</p>
						<h1 id="name"></h1>
						<p id="designation"></p>
						<a href="#about-me">Read more</a>
						<a href="#experiences">my works</a>
					</div> <!-- End container -->
				</div>
				<div class="mouse" id="mouse"></div>  <!-- Mouse Icon -->
			</div>
		</div>
		<!-- End Header Section -->
                
		<!-- Start Side Menu -->
		<nav id="top-nav">
			<div class="logo center"><a href="#">resumere.in</a></div> <!-- LOGO -->
<div class="logo right" style="margin-top: -30px;margin-right: 10px;">Create your own =><?php echo $_SESSION['gsign'] ?></div>
			<div class="menu" id="menu">
				<span class="bar b1"></span>
				<span class="bar b2"></span>
				<span class="bar b3"></span>
			</div>
			<div class="side-menu" id="side-menu"> <!-- Menu items -->
				<a href="#header">Home</a>
				<a href="#about-me">about me</a>
				
				<a href="#skills">skills</a>
				<a href="#experiences">experiences</a>
				
				<a href="#contact-me">Contact Me</a>
			</div>
		</nav>
		<!-- End Side Menu -->

		<!-- Start About Me Section -->
		<div class="about-me clearfix" id="about-me">
			<div class="container">
				<div class="row">
					<!-- Profile Pic -->
                                        <?php
                                        $uid=$_SESSION['u_id'];
                                        $query1 = "SELECT * FROM users where oauth_uid=$uid ";
                                        $result1 = mysqli_query($connect, $query1);
                                        $num1 = mysqli_num_rows($result1);
                                        if ($num1 == 0) {
                                           echo 'not found';
                                        } else {
                                               while ($row= mysqli_fetch_assoc($result1)){
                                                $dp=$row['picture'];
    }
                                          }
                                        ?>
                                        
                                        
					<div class="my-pic center col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-offset="200">
                                            <img src="<?php echo $dp?>" alt="my profile" style="width:300px;height:300px">
					</div>
					<div class="introduction col-sm-8 col-xs-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-offset="200">
						<h2 class="h2" id="name1"></h2>
						<div class="heading-line"></div>
                                                <p class="introduce" id="designation1"></p>
						<p class="intro">Introduction</p>
					</div>
				</div>
				<div class="row">
					<div class="profile col-sm-4 col-xs-12 wow fadeInUp text-center" data-wow-duration="0.5s" data-wow-offset="200">
						<h3>personal info</h3>
						<div class="heading-line"></div>
						<div class="personal-wrapper">
                                                    <span><strong>name: </strong><span id="name2"></span></span>
							<span><strong>E-mail: </strong><a id="email"></a></span>
                                                        <span><strong>phone number: </strong><span id="ph1"></span></span>
							<span><strong>website: </strong><a href="#" id="website"></a></span>
						</div>
					</div>
					<div class="why-me col-sm-8 col-xs-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-offset="200">
						<!-- Start Accordion -->
						<div class="accordion">
							<div class="acc-item">
								<div class="acc-title"><i class="fa fa-plus"></i> Who am i?</div>
								<div class="acc-content" id="wai"></div>
							</div>
							<div class="acc-item">
								<div class="acc-title"><i class="fa fa-plus"></i> What I'm really good at?</div>
								<div class="acc-content" id="rga"></div>
							</div>
							
							<div class="acc-item">
								<div class="acc-title"><i class="fa fa-plus"></i> What is my hobbies</div>
								<div class="acc-content" id="hobbies"></div>
							</div>
						</div> <!-- End Accordion -->
					</div>
				</div>
			</div>
		</div>
                
		<!-- End About Me Section -->
                <?php
                $uid=$_SESSION['u_id'];
                $select="SELECT * FROM `user_number_data`";
                $run_select= mysqli_query($connect, $select);
                while ($row= mysqli_fetch_assoc($run_select)){
                    $_SESSION['loc']=$row['loc'];
                    $_SESSION['projects']=$row['projects'];
                    $_SESSION['coffee']=$row['coffee'];
                }
                ?>
		<!-- Start Fun Facts Section -->
		<div class="fun-facts center" id="facts">
			<div class="pattern"></div>
			<div class="container">
                            <div class='row'>
				

<!-- Fact No. 1 -->
					<div class='col-md-4 col-sm-6'>
						<div class='fact'>
							<i class='fa fa-code'></i>
							<p id='number_1'>0</p>
							<span>lines of code</span>
						</div>
					</div>
					<!-- Fact No. 2 -->
					<div class='col-md-4 col-sm-6'>
						<div class='fact'>
							<i class='fa fa-code-fork'></i>
							<p id='number_2'>0</p>
							<span>projects done</span>
						</div>
					</div>
					<!-- Fact No. 3 -->
					<div class='col-md-4 col-sm-6'>
						<div class='fact'>
							<i class='fa fa-coffee'></i>
							<p id='number_3'>0</p>
							<span>cups of coffee</span>
						</div>
					</div>
					<!-- Fact No. 4 -->
					
				</div>
			</div>
		</div>
		<!-- End Fun Facts Section -->

		<!-- Start Services Section -->
		<div class="services center" id="services">
			<div class="container">
				<!-- Title -->
				<div class="title">
					<h2 class="h2">Here's what i'm doing</h2>
					<div class="heading-line"></div>
					<p class="main-para"></p>
				</div>	
				<div class="row">
					<!-- Service No. 1 -->
					<div class="col-md-4 col-sm-6">
						<div class="service">
							<i class="fa fa-hashtag"></i>
							<h3 id='act1'></h3>
							<p id='dact1'></p>
						</div>
					</div>
					<!-- Service No. 2 -->
					<div class="col-md-4 col-sm-6">
						<div class="service">
							<i class="fa fa-hashtag"></i>
							<h3 id='act2'></h3>
							<p id='dact2'></p>
						</div>
					</div>
					<!-- Service No. 3 -->
					<div class="col-md-4 col-sm-6">
						<div class="service">
							<i class="fa fa-hashtag"></i>
							<h3 id='act3'></h3>
							<p id='dact3'></p>
						</div>
					</div>
					<!-- Service No. 4 -->
					<div class="col-md-4 col-sm-6">
						<div class="service">
							<i class="fa fa-hashtag"></i>
							<h3 id='act4'></h3>
							<p id='dact4'></p>
						</div>
					</div>
                                        <!-- Service No. 5 -->
					<div class="col-md-4 col-sm-6">
						<div class="service">
							<i class="fa fa-hashtag"></i>
							<h3 id='act5'></h3>
							<p id='dact5'></p>
						</div>
					</div>
                                        <!-- Service No. 6-->
					<div class="col-md-4 col-sm-6">
						<div class="service">
							<i class="fa fa-hashtag"></i>
							<h3 id='act6'></h3>
							<p id='dact6'></p>
						</div>
					</div>
                                        
				</div>
			</div>
		</div>
		<!-- End Services Section -->

		<!-- Start Technical Skills Section -->
		<div class="technical-skills center" id="skills">
			<div class="pattern"></div>
			<div class="container">
				<!-- Title -->
				<div class="title">
					<h2 class="h2">technical skills</h2>
					<div class="heading-line"></div>
					<p class="title">Authoritatively foster bricks-and-clicks networks rather than superior architectures. Compellingly mesh frictionless imperatives vis-a-vis emerging.</p>
				</div>	
				<!-- Start main skills -->
				<div class="skills-wrapper row" >
                                    
					<!-- main skill No. 1 -->
                                       <div class='skill col-md-3 col-sm-6'>
						<div class='chart center' data-percent='<?php echo $_SESSION['ts1'];?>'>
							<span><span id='chart_num_1'>0</span> %</span>
						</div>
						<h2 id='ts1'></h2>
					</div>
					<!-- main skill No. 2 -->					
					<div class='skill col-md-3 col-sm-6'>
						<div class='chart center' data-percent='<?php echo $_SESSION['ts2'];?>'>
							<span><span id='chart_num_2'>0</span> %</span>
						</div>
                                            <h2 id="ts2"></h2>
					</div>
					<!-- main skill No. 3 -->
					<div class='skill col-md-3 col-sm-6'>
						<div class='chart center' data-percent='<?php echo $_SESSION['ts3'];?>'>
							<span><span id='chart_num_3'>0</span> %</span>
						</div>
						<h2 id='ts3'></h2>
					</div>
					<!-- main skill No. 4 -->
					<div class='skill col-md-3 col-sm-6'>
						<div class='chart center' data-percent='<?php echo $_SESSION['ts4'];?>'>
							<span><span id='chart_num_4'>0</span> %</span>
						</div>
						<h2 id='ts4'></h2>
					</div>
					
                                        <div class='skill col-md-12 col-sm-6'>
						
						<h2 id='tsother'></h2>
					</div>
				</div> <!-- End main skills -->
				<div class="other-skills">
					<h2 class="h2">other skills</h2>
					<div class="heading-line"></div>
					<p class="title">Distinctively implement granular e-commerce whereas business innovation. Rapidiously unleash viral niches vis-a-vis real-time catalysts.</p>
					<!-- Start other skills -->
					<div class="skills-wrapper row">
						<!-- Skill No. 1 -->
						<div class='bar_group col-md-6 col-xs-12' data-max="100">
							<div class=" bar_group__bar thick elastic" data-value="<?php echo $_SESSION['os1']?>" data-tooltip="true" data-label="communication" data-show-values="true" data-unit="%"></div>
						</div>
                                                <div class='bar_group col-md-6 col-xs-12' data-max="100">
							<div class=" bar_group__bar thick elastic" data-value="<?php echo $_SESSION['os2']?>" data-tooltip="true" data-label="organisation" data-show-values="true" data-unit="%"></div>
						</div>
						<div class='bar_group col-md-6 col-xs-12' data-max="100">
							<div class=" bar_group__bar thick elastic" data-value="<?php echo $_SESSION['os3']?>" data-tooltip="true" data-label="visual design" data-show-values="true" data-unit="%"></div>
						</div>
						
						<!-- Skill No. 4 -->
						<div class='bar_group col-md-6 col-xs-12' data-max="100">
							<div class=" bar_group__bar thick elastic" data-value="<?php echo $_SESSION['os4']?>" data-tooltip="true" data-label="programming" data-show-values="true" data-unit="%"></div>
						</div>
						<!-- Skill No. 5 -->
						<div class='bar_group col-md-6 col-xs-12' data-max="100">
							<div class=" bar_group__bar thick elastic" data-value="<?php echo $_SESSION['os5']?>" data-tooltip="true" data-label="planning" data-show-values="true" data-unit="%"></div>
						</div>
						<!-- Skill No. 6 -->
						<div class='bar_group col-md-6 col-xs-12' data-max="100">
							<div class=" bar_group__bar thick elastic" data-value="<?php echo $_SESSION['os6']?>" data-tooltip="true" data-label="learning" data-show-values="true" data-unit="%"></div>
						</div>
						<!-- Skill No. 7 -->
						
						
					</div>	<!-- End other skills -->
				</div>	
			</div>
		</div>
		<!-- End Technical Skills Section -->

		<!-- Start Experience Section -->
		<div class="experiences center" id="experiences">
			<div class="container">
				<!-- Title -->
				<div class="title wow fadeIn" data-wow-duration="0.5s" data-wow-offset="200">
					<h2 class="h2">Qualification/Projects</h2>
					<div class="heading-line"></div>
					<p class="main-para"></p>
				</div>	
				<!-- start timeline -->
				<div class="timeline wow fadeIn" data-wow-duration="0.5s" data-wow-offset="200">
					<!-- Event No. 1 -->
					<div class="timeline-block clearfix wow fadeInLeft" data-wow-duration="0.5s" data-wow-offset="200">
						<div class="icon">
							<i class="fa fa-graduation-cap"></i>
						</div>
						<div class="content left round-corners">
                                                    <h3 id="institute"></h3><br>
                                                        <span class="duration center" id="isd">Start</span>::::::<span class="duration center" id="ied">End</span>
                                                        <span class="job-title" id="idesc"> Computer Science and Engg.</span>
							<p></p>
						</div>
					</div>
					<!-- Event No. 2 -->
					<div class="timeline-block clearfix wow fadeInRight" data-wow-duration="0.5s" data-wow-offset="200">
						<div class="icon">
							<i class="fa fa-briefcase"></i>
						</div>
						<div class="content right round-corners">
                                                    <h3 id="project1"></h3><br>
							<span class="duration center" id="p1sd">Start</span>::::::<span class="duration center" id="p1ed">End</span>
							<span class="job-title" id="pname1">Chat Bot</span>
							<p id="p1desc"></p>
						</div>
					</div>
                                        
					<!-- Event No. 3 -->
					<div class="timeline-block clearfix wow fadeInLeft" data-wow-duration="0.5s" data-wow-offset="200">
						<div class="icon">
							<i class="fa fa-archive"></i>
						</div>
						<div class="content left round-corners">
                                                    <h3 id='project2'></h3><br>
							<span class="duration center" id="p2sd">Start</span>::::::<span class="duration center" id="p2ed">End</span>
							<span class="job-title" id="p2name"></span>
							<p id="p2desc"></p>
						</div>
					</div>
					<!-- Event No. 4 -->
					<div class="timeline-block clearfix wow fadeInRight" data-wow-duration="0.5s" data-wow-offset="200">
						<div class="icon">
							<i class="fa fa-star"></i>
						</div>
						<div class="content right round-corners">
                                                    <h3 id="projectc"></h3><br>
							<span class="duration center" id="pcsd">Start</span>::::::<span class="duration center" id="pced">End</span>
							<span class="job-title" id='pcname'></span>
							<p id='pcdesc'></p>
						</div>
					</div>
				</div> <!-- End Timeline -->
			</div>
		</div>
		<!-- End Experience Section -->

		<!-- Start Quote Section -->
		<div class="quote">
			<div class="overlay"></div>
			<div class="container">
				<div class="qoute-wrapper">
                                    <p class="words"><span class="quote-mark open">"</span><span id="quote"></span><span class="quote-mark end">"</span></p>
					<p class="author" id='qgivenby'></p>
				</div>
			</div>
		</div>
		<!-- End Quote Section -->

		<!-- Start Portfolio Section -->
                

		<!-- Start Testmonials Section -->
		
		<!-- End Testmonials Section -->

		<!-- Start Contact Section -->
		<div class="contact center" id="contact-me">
			<div class="container">
				<!-- Title -->
				<div class="title wow fadeInUp" data-wow-duration="0.5s" data-wow-offset="200">
					<h2 class="h2">Get in touch</h2>
					<div class="heading-line"></div>
					<p class="main-para"></p>
				</div>
				<div class="row form-wrapper">
					<div class="col-md-8 col-md-offset-2 wow fadeInUp" data-wow-duration="0.5s" data-wow-offset="200">
						<!-- Contact-Me Form -->
						<form data-toggle="validator" role="form" id="contact-form">
							<div class="form-group has-feedback">
								<input type="text" name="name" id="name" class="form-control" data-error="Please, Enter Your Name." required>
								<label for="name">Your Name</label>
								<span class="help-block with-errors"></span>
							</div>
							<div class="form-group has-feedback">
								<input type="email" name="mail" id="mail" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" data-error="Your E-mail isn't correct" required>
								<label for="mail">Your E-mail</label>
								<span class="help-block with-errors"></span>
							</div>
							<div class="form-group has-feedback">
								<textarea name="message" id="message" class="form-control" data-error="Please, Type Your Message" required></textarea>
								<label for="message">Your Message Here</label>
								<span class="help-block with-errors"></span>
							</div>
							<div class="submit-container">
								<button type="submit" class="btn submit-btn">Send Your Message</button>
							</div>
							<p class="form-response"></p>
						</form> <!-- End Form -->
					</div>
				</div>
				<!-- Contact Details -->
				<div class="row contact-info">
					<div class="col-md-4 col-sm-6 col-xs-12 info">
						<i class="fa fa-phone center"></i>
						<div class="info-content">
							<h3>call me</h3>
							<span id="cph1"></span>
                                                        <span id="ph2"></span>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 info">
						<i class="fa fa-envelope center"></i>
						<div class="info-content">
							<h3>Send a message</h3>
							<span id="email1"></span>
							<span id="email2"></span>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 info">
						<i class="fa fa-home center"></i>
						<div class="info-content">
							<h3>Visit me</h3>
							<span id="address"></span>
						</div>
					</div>
					
				</div>				
			</div>
			<!-- Google Map -->
			
		</div>
		<!-- End Contact Section -->

		<!-- Start Partners Section -->
				
		<!-- End Partners Section -->

		<!-- Start Footer Section -->
		<div class="footer center">
			<div class="container">
				<div class="row">
					<div class="follow-me">follow me</div>
					<div class="col-md-12 col-xs-12 links">
						
                                            
                                            <!-- Social links -->
						<div class="icon-wrapper center">
							<!-- Facebook Link -->
							<a href="<?php echo $_SESSION['fb'];?>" class="icon fb">
								<i class="fa fa-facebook"></i>
								<i class="fa fa-facebook"></i>
							</a>
							<!-- Twitter Link -->
                                                        <a href="<?php echo $_SESSION['tweet'];?>" class="icon tw">
								<i class="fa fa-twitter"></i>
								<i class="fa fa-twitter"></i>
							</a>
							<!-- Github Link -->
							<a href="<?php echo $_SESSION['github'];?>" class="icon gh">
								<i class="fa fa-github"></i>
								<i class="fa fa-github"></i>
							</a>
							<!-- Google Plus Link -->
							<a href="<?php echo $_SESSION['gplus'];?>" class="icon gp">
								<i class="fa fa-google-plus"></i>
								<i class="fa fa-google-plus"></i>
							</a>
							<!-- Linkedin Link -->
							<a href="<?php echo $_SESSION['linkedin'];?>" class="icon lin">
								<i class="fa fa-linkedin"></i>
								<i class="fa fa-linkedin"></i>
							</a>
							<!-- Pinterest Link -->
							<a href="<?php echo $_SESSION['pinterest'];?>" class="icon pin">
								<i class="fa fa-pinterest"></i>
								<i class="fa fa-pinterest"></i>
							</a>
						</div>
					</div>
					<div class="col-md12 col-xs-12 copyright">
						<h6>&copy;2017</h6>
					</div>
				</div>	
			</div>
		</div>

		<!-- End Footer Section -->			

		<!-- Start To Top button -->
		<div class="back-to-top center">
			<i class="fa fa-long-arrow-up"></i>
		</div>
		<!-- End To Top button -->	

		<!-- Start scroll percentage -->
		<div id="scroll"></div>
		<!-- End scroll percentage -->		
		


		<!-- Including jQuery file -->
		<script src="http://ahmedbeheiry.com/works/tf/marqa/js/jquery-1.12.1.min.js"></script>
		<!-- Including jQuery.appear file -->
		<script src="http://ahmedbeheiry.com/works/tf/marqa/js/jquery.appear.js"></script>
		<!-- Bootstrap js file -->
		<script src="http://ahmedbeheiry.com/works/tf/marqa/js/bootstrap.min.js"></script>
		<!-- easy pie chart -->
		<script src="http://ahmedbeheiry.com/works/tf/marqa/js/jquery.easypiechart.min.js"></script>
		<!-- NiceScroll plugin -->
		<script src="http://ahmedbeheiry.com/works/tf/marqa/js/jquery.nicescroll.min.js"></script>
		<!-- animate numbers plugin -->
		<script src="http://ahmedbeheiry.com/works/tf/marqa/js/jquery.animatenumber.min.js"></script>
		<!-- Horizontal bar chart -->
		<script src="http://ahmedbeheiry.com/works/tf/marqa/js/bars.js"></script>
		<!-- mixitup plugin -->
		<script src="http://ahmedbeheiry.com/works/tf/marqa/js/jquery.mixitup.min.js"></script>
		<!-- animated background header -->
		<script src="http://ahmedbeheiry.com/works/tf/marqa/js/tweenlite.min.js"></script>
		<!-- form validation file -->
		<script src="http://ahmedbeheiry.com/works/tf/marqa/js/validator.min.js"></script>
		<!-- Owl carousel js file -->
		<script src="http://ahmedbeheiry.com/works/tf/marqa/js/owl.carousel.min.js"></script>
		<!-- Google Map -->
		<!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script> -->
                <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAc389p23bRcItSbIphXNgH6UDmZgam_xI"></script>
   
                
		<!-- Custom file  -->
		<script src="Profile/js/main.js"></script>
		<!-- Wow.js file -->
		<script src="http://ahmedbeheiry.com/works/tf/marqa/js/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>
                
                <script src="main.js"></script>
                <script>
                    

              $("#skills").appear(function() {
		$(".chart").easyPieChart({
			barColor: "#eaeaea",
			trackColor: false,
			scaleColor: false,
			lineWidth: 10,
			lineCap: "round",
			size: 150,
			animate: 1500
		});
                    var ts1 =<?php echo $_SESSION['ts1'];?>,
                        ts2 =<?php echo $_SESSION['ts2'];?>,
                        ts3 =<?php echo $_SESSION['ts3'];?>,
                        ts4 =<?php echo $_SESSION['ts4'];?>;
		// start numbers animate at skills section //
		$("#chart_num_1").animateNumber({
			number: ts1		// Change to your number
		}, 1500);
		$("#chart_num_2").animateNumber({
			number: ts2		// Change to your number
		}, 1500);
		$("#chart_num_3").animateNumber({
			number: ts3		// Change to your number
		}, 1500);
		$("#chart_num_4").animateNumber({
			number: ts4	// Change to your number
		}, 1500);
	}, {
		accX: 0,
		accY: -150
	});

                </script>
                <script>
                    var loc = <?php echo $_SESSION['loc']; ?>;
                    var projects = <?php echo $_SESSION['projects']; ?>;
                    var coffee = <?php echo $_SESSION['coffee']; ?>;
                    
                $("#facts").appear(function() {
		$("#number_1").animateNumber({
			number: loc	// Change to your number			
		}, 2200);
		$("#number_2").animateNumber({
			number: projects		// Change to your number	
		}, 2200);
		$("#number_3").animateNumber({
			number: coffee		// Change to your number
		}, 2200);
		$("#number_4").animateNumber({
			number: 195		// Change to your number
		}, 2200);
	}, {
		accX: 0,
		accY: -150
	});
                </script>
                
	</body>
</html>