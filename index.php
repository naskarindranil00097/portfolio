<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- -----------CSS LINKS--------------- -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/developer.css">
	<!-- ----------------------------------- -->

	<!-- --------------ICON----------------- -->
	<link rel="stylesheet" href="css/all.min.css">
	<script src="js/all.min.js"></script>
	<!-- ----------------------------------- -->

	<title>Indranil Naskar :: Portfolio</title>
</head>
<body>

	<div class="main">
		<div class="header">

			<a href="javascript:void(0)" class="nav-toggle" onclick="myFunction()"><i class="fa-solid fa-bars"></i></a>
			
			<div class="navbar">
				<div class="logo"><a href="index.php">Thought X</a></div>

				<div id="nav-item">
					<a href="index.php">HOME</a>
					<a href="#skill">ABOUT ME</a>
					<a href="#layout">PROJECTS LAYOUT</a>
					<a href="#contact">CONTACT</a>
				</div>
			</div>
		</div>

		<div class="name_plate">
			<h3><span>Hi,</span> This is</h3>
			<h4>Indranil Naskar</h4>
			<h5>Web Designer & Developer</h5>

			<div class="main_cv">
			<a href="#"><button class="cv" data-bs-toggle="modal" data-bs-target="">MAH RESUME</button></a>
			</div>
		</div>
	</div>


	<section id="skill" class="my-1">
	<div class="container">
		<div class="row">
			<div class="col-sm-3 my-1">
			<div class="card skill_card bg-dark shadow">
				<div class="card-body sub_skill_card">
					<div class="row">
					<div class="col-md-3"><i class="fa-solid fa-pen-nib fa-2x" style="color: #2660c5;"></i></div>
					<div class="col-md-9">
					<p>Web Designer</p>
					</div>
					</div>
				</div>
			</div>
			</div>

			<div class="col-sm-3 my-1">
			<div class="card skill_card bg-dark shadow">
				<div class="card-body sub_skill_card">
					<div class="row">
					<div class="col-md-3"><i class="fa-solid fa-computer fa-2x" style="color: #2660c5;"></i></div>
					<div class="col-md-9">
					<p>Web Developer</p>
					</div>
					</div>
				</div>
			</div>
			</div>

			<div class="col-sm-3 my-1">
			<div class="card skill_card bg-dark shadow">
				<div class="card-body sub_skill_card">
					<div class="row">
					<div class="col-md-3"><i class="fa-solid fa-paintbrush fa-2x" style="color: #2660c5;"></i></div>
					<div class="col-md-7">
					<p>Graphics</p>
					</div>
					</div>
				</div>
			</div>
			</div>

			<div class="col-sm-3 my-1">
			<div class="card skill_card bg-dark shadow">
				<div class="card-body sub_skill_card">
					<div class="row">
					<div class="col-md-3"><i class="fa-solid fa-file-powerpoint fa-2x" style="color: #2660c5;"></i></div>
					<div class="col-md-7">
					<p>Presentation</p>
					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
	</div>



	<section id="aboutme" class="my-5">
		<div class="container about_container p-2">
			<div class="row">
				<div class="col-md-4">
					<img src="img/passport_main.jpg" class="rounded img-fluid border border-3 border-secondary shadow-lg">
				</div>

				<div class="col-md-8 my-5">
					<h3 class="h10">ABOUT ME</h10>
					<p class="my-2 p-2">Hi. I am Indranil Naskar. I have completed my Engineering from JLD ENGINEERING AND MANAGEMENT COLLEGE, specializing in Computer science engineering. During my time in college, I got good grades.I have always been interested in WEB DEVELOPMENT and have done several projects.I have the necessary skills required for the role.I am currently improving my mobile app development skills by learning various new technologies. My problem-solving skills are a positive factor.I always put quality on top of anything, and whatever projects I made were real-life projects. I also possess good communication skills and would like to improve my skills by working in your company.I have always been a quick learner, readily grasping things, and my skills to work as a part of a team have been positive traits. </p>
				</div>
			</div>
		</div>
	</div>



	<section id="layout" class="my-5">
		<div class="container about_container py-2 px-3">
			<div class="row" align="center">
				<div class="col-sm-6 my-2">
					<img src="img/layout-one.png" class="img-fluid img-thumbnail shadow">
				</div>

				<div class="col-sm-6 my-2">
					<img src="img/layout-two.png" class="img-fluid img-thumbnail shadow">
				</div>

				<div class="col-sm-6 my-2">
					<img src="img/layout-three.png" class="img-fluid img-thumbnail shadow">
				</div>

				<div class="col-sm-6 my-2">
					<img src="img/layout-four.png" class="img-fluid img-thumbnail shadow">
				</div>
			</div>
		</div>
	</section>



	<br>
	<section id="contact" class="footer bg-dark py-1">
		<p>@ Indranil Naskar Resume 2023</p>
		<a href="https://www.facebook.com/profile.php?id=100090514083518&mibextid=ZbWKwL" target="_blank"><i class="fa-brands fa-facebook fa-beat-fade" style="color: #ff3300;"></i></a>&nbsp;
		<a href="#"><i class="fa-solid fa-envelope fa-beat-fade" style="color: #ff3300;" title="indranilnaskar00097@gmail.com"></i></a>
	</section>



	<script type="text/javascript">
		function myFunction(){
			var showhide = document.getElementById('nav-item');
			if(showhide.style.display === "none"){
				showhide.style.display = "block";
			}else{
				showhide.style.display ="none";
			}
		}
	</script>

	<!-- <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
	<script src="main.js"></script> -->

	<!-- CV -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  	<div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="font-family: 'Tektur', cursive; font-size: 18px; color: #ff3300; letter-spacing: 1px;">Indranil's Resume</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="Indranil Naskar.jpg" height="48%" width="100%">
      </div>
    </div>
  	</div>
	</div>
	<!-- --- -->

</body>
</html>