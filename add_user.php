<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/51a2430452.js"></script>
	<link rel="stylesheet" type="text/css" href="css/burgur.css">

<script type="text/javascript">
	$(document).ready(function(){
		
		$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(e){
			$(this).toggleClass('open');
			$('.menu').toggleClass('menu-open');
			e.stopPropagation();
		});
		$('body').click(function(){
			$('#nav-icon3').removeClass('open');
			$('.menu').removeClass('menu-open');
		});
	});
</script>
</head>
<body>
	<div class="container-fluid header-top">
		<div class="row">
			<div class="col-md-12">
				<div class="top_header">
					<div class="row">
						<div class="col-md-1 logo">
							<img src="images/7b31b5bc8d00fae91aecdeacb0ff7f53.png" alt="">
						</div>
						<div class="col-md-2 control-panel">
							<a href="">Control System</a>
						</div>
						
						<div class="col-md-3 ul right pull-right">
							<ul>
								<li><a href="#" class="active-lang">EN</a></li>
								<li><a href="#">FR</a></li>
								<li>About Collcom</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid header">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-2">
						<img src="http://apicellcom.inexxus.ca/uploads/users/70afd12fc14c2b9b28dafdb160536c54.jpeg" alt="">
						<h5>Karen Khzmalian</h5>
						<p class="role">ADMIN</p>
					</div>
					<div class="col-md-1 menu_icon">
						<div id="nav-icon3">
						  <span></span>
						  <span></span>
						  <span></span>
						  <span></span>
						</div>
					</div>
					<ul class="menu">
						<li><a href=""><i class="fa fa-user-plus" aria-hidden="true"></i>Add New User</a></li>
						<li><a href=""><i class="fa fa-user" aria-hidden="true"></i>Users</a></li>
						<li><a href=""><i class="fa fa-list" aria-hidden="true"></i>Manufactures</a></li>
						<li><a href=""><i class="fa fa-list" aria-hidden="true"></i>Models</a></li>
						<li><a href=""><i class="fa fa-pie-chart" aria-hidden="true"></i>Report</a></li>
						<li><a href=""><i class="fa fa-cog" aria-hidden="true"></i>My account</a></li>
						<li><a href=""><i class="fa fa-sign-out" aria-hidden="true"></i>Sign out</a></li>
					</ul>

					<div class="col-md-6 button_groups">
						<span>SUMMERY</span>
						<ul>
							<li><a href="">Today(00)</a> |</li>
							<li><a href="">News(00)</a> |</li>
							<li><a href="">Confirmed(00)</a> |</li>
							<li><a href="">Proroty(00)</a> |</li>
							<li><a href="">Processing(00)</a></li>
						</ul>
					</div>
					<div class="col-md-1 icon-exc">
						<i class="fa fa-exclamation" aria-hidden="true"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid content">
		<div class="row">
			<div class="col-md-6 col-centered">
				<h3>Add new user</h3>
				<div class="box">
					<div class="box-header">
						PLEASE SELECT USER ROLE
					</div>
					<div class="box-content">
						<div class="form-group">
						    <select class="form-control" id="exampleSelect1">
						      <option value="00">Admin</option>
						      <option value="01">Coordinator</option>
						      <option value="02">DDA</option>
						      <option value="03">Customer</option>
						    </select>
						</div>
					</div>
				</div>

				<div class="box">
					<div class="box-header">
						GENERAL INFO
					</div>
					<div class="box-content">
						<div class="form-group">
						    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name">
						</div>
						<div class="form-group">
						    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name">
						</div>
						<div class="form-group">
						    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone number ex: 123-456-7890">
						</div>
					</div>
				</div>

				<div class="box">
					<div class="box-header">
						PROFILE PICTURE
					</div>
					<div class="box-content">
						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<img src="images/user.png" width="200" />	
								</div>
								<div class="col-md-6">
									<input type="file" name="image" value="" />
								</div>
							</div>
						</div>
						
					</div>
				</div>

				<div class="box">
					<div class="box-header">
						SECURITY
					</div>
					<div class="box-content">
						<div class="form-group">
						    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
						</div>
						<div class="form-group">
						    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password">
						</div>
						<div class="form-group">
						    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Confirm password">
						</div>
					</div>
				</div>

				<div class="box">
					<div class="box-header">
						ADDITIONAL INFORMATION( OPTIONAL )
					</div>
					<div class="box-content">
						<div class="form-group">
						    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Company name">
						</div>
						<div class="form-group">
						    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Web site">
						</div>
						<div class="form-group">
						    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Company email">
						</div>
						<div class="form-group">
						    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Company phone ex: 123-456-7890">
						</div>
						<div class="form-group">
						    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Fax ex: 123-456-7890">
						</div>
					</div>
				</div>
				<button type="submit" class="btn btn-primary" style="margin-top: 2%;">Create User</button>
			</div>
		</div>
	</div>
	<div class="container footer">
		<div class="row">
			<div class="col-md-3 col-centered">
				<img src="images/footer.png" />
				<p>© 2016 Cellcom Communications.<br/>All rights reserved</p>
			</div>
		</div>
	</div>
</body>
</html>
