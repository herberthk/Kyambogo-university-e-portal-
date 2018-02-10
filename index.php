<!-- <?php
// include('connect.php')
?> -->

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="production/stylesheet.css">
	<!-- icon -->
	<link rel="icon" href="img/logo.jpg" >
	<title>Kyambogo universiy e-portal</title>
	<style>
		.carousel-inner > .item > img,
		.carousel-inner > .item > a > img {
			width: 70%;
			margin: auto;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Kyambogo university e-portal</a>
				<img src="img/logo.jpg" width="60" height="30">
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-dept" style="margin-top: 6px;">Log in </button>
				
				<!-- Modal -->
				<div class="modal fade" id="modal-dept">
					<div class="modal-dialog modal-md">
						<div class="modal-content">
							<!-- modal header -->
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h3>Log in</h3>
							</div>
							<!-- modal body -->
							<div class="modal-body">
								<ul class="nav nav-pills">
									<li class="active"><a data-toggle="pill" href="#home">Designee</a></li>
									<li><a data-toggle="pill" href="#menu2">Faculty</a></li>
									<li><a data-toggle="pill" href="#menu1">Admin</a></li>

								</ul>
								<div class="tab-content">
									<!-- Department -->
									<div id="home" class="tab-pane fade in active">
										<h3>Designee</h3>
										<form method="post" id="depat">
											<div class="form-group">
												<input type="text" class="form-control" id="deptName" placeholder="User name">
											</div>
											<div class="form-group">
												<input type="password" class="form-control" id="deptPass" placeholder="Password">
											</div>
											<div class="form-group">
												<button class="btn btn-block btn-primary" type="submit">Log in</button>
												<button class="btn btn-block btn-danger signin-button">Cancel</button>
											</div>
										</form>
									</div>
									<!-- Admin -->
									<div id="menu1" class="tab-pane fade">
										<h3>Admin</h3>
										<form method="post" id="adminform">
											<div class="form-group">
												<input type="text" class="form-control" id="admin_username" placeholder="Username">
											</div>
											<div class="form-group">
												<input type="password" class="form-control" id="adminPass" placeholder="Password">
											</div>
											<div class="form-group">
												<button class="btn btn-block btn-primary" type="submit">Log in</button>
												<button class="btn btn-block btn-danger signin-button">Cancel</button>
											</div>
										</form>
									</div>
									<!-- Teacher -->
									<div id="menu2" class="tab-pane fade">
										<h3>Faculty</h3>
										<form method="post" id="fuculty">
											<div class="form-group">
												<input type="text" class="form-control" id="teacherId" placeholder="Faculty Id">
											</div>
											<div class="form-group">
												<input type="password" class="form-control" id="TeacherPass" placeholder="Password">
											</div>
											<div class="form-group">
												<button type="submit" class="btn btn-block btn-primary">Log in</button>
												<button class="btn btn-block btn-danger signin-button">Cancel</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- ENNNNNNNNNND MODAL-->				

			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

	<div class="container">
		<!-- carousel -->
		<div class="row">
			<div id="myCarousel" class="carousel slide" data-ride="carousel" style="padding:20px 20px 20px 20px;">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="img/13.jpg" alt="Chania" width="460" height="200">
					</div>

					<div class="item">
						<img src="img/12.jpg" alt="Chania" width="460" height="200">
					</div>

					<div class="item">
						<img src="img/11.jpg" alt="Flower" width="460" height="200">
					</div>

					<div class="item">
						<img src="img/3.jpg" alt="Flower" width="460" height="200">
					</div>
					<div class="item">
						<img src="img/14.jpg" alt="Flower" width="460" height="200">
					</div>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="icon-prev" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="icon-next" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<br />
		<div class="row"> 
			<div class="col-md-5 mv">
				<center><h3>Mission</h3></center>
				<p>A leading green institution in higher and continuing education committed to engage in quality instruction, development-oriented research, sustainable lucrative economic enterprise, and responsive extension and training services through relevant academic programs to empower a human resource that responds effectively to challenges in life and act as catalyst in the holistic development of a humane society.</p>
			</div>
			<div class="col-md-5 mv">
				<center><h3>Vision</h3></center>
				<p>Kyambogo university is the center for
					Excellence, Competence, and Educational Leadership in Science and Technology.</p>
				</div>
			</div>
		</div>
		<script src="js/jquery-1.12.1.min.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<script>
			$('.carousel').carousel({
        interval: 3000 //changes the speed
    })
</script>
<script>
function _(x){return document.getElementById(x)}
	_('adminform').addEventListener('submit', loginAdmin, false);
		function loginAdmin(e) {
			e.preventDefault();
			let admin_username = _('admin_username').value,
				adminPass = _('adminPass').value;
				if (admin_username =='' || adminPass == ''){ alert('all required'); return false;}
				$.ajax({
				type: 'POST',
				url: 'login_parse.php',
				data: {admin_username: admin_username, adminPass: adminPass}
			})
			.done(function(res){
				// console.log(res);
				// alert(res);
				if (res == 1 ){
					window.location.href = "production/admin1.php";
				}else{
					alert('Login failed!');
					_('adminform').reset();
					_('admin_username').value = '';
					_('adminPass').value = '';
				}
			});
		}
		_('fuculty').addEventListener('submit', loginfaculty, false);
		function loginfaculty(e) {
			e.preventDefault();
			let teacherId = _('teacherId').value,
				TeacherPass = _('TeacherPass').value;
				if (teacherId =='' || TeacherPass == ''){ alert('all required'); return false;}
				// alert(adminPass);
				$.ajax({
				type: 'POST',
				url: 'login_parse.php',
				data: {teacherId: teacherId, TeacherPass: TeacherPass}
			})
			.done(function(res){
				console.log(res);
				// alert(res);
				if (res == 1 ){
					window.location.href = "production/faculty.php";
				}else if (res == 2){
					alert('The system is closed. Please process your clearance manually');
				}
				else{
					alert('Login failed!');
					_('fuculty').reset();
					_('TeacherPass').value = '';
					_('teacherId').value = '';
				}
			});
		}
		_('depat').addEventListener('submit', loginDepat, false);
		function loginDepat(e) {
			e.preventDefault();
			let deptName = _('deptName').value,
				deptPass = _('deptPass').value;
				if (deptName =='' || deptPass == ''){ alert('all required'); return false;}
				// alert(adminPass);
				$.ajax({
				type: 'POST',
				url: 'login_parse.php',
				data: {deptName: deptName, deptPass: deptPass}
			})
			.done(function(res){
				console.log(res);
				// alert(res);
				if (res == 1 ){
					window.location.href = "production/designee.php";
				}else{
					alert('Login failed!');
					_('depat').reset();
					_('deptName').value = '';
					_('deptPass').value = '';
				}
			});
		}
		// function renderajax(type,url,data) {
		// 	$.ajax({
		// 		type: type,
		// 		url: url,
		// 		data: data
		// 	}).done(function(res){
		// 		console.log(res);
		// 		// alert(res);
		// 		if (res == 1 ){
		// 			return 'yes';
		// 		}else return 'no';
		// 	}).error(function(){
		// 		alert('error try again');
		// 	});	
		// }
</script>
</body>
</html>