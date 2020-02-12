<?php

?>

<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Profile</title>
   <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		
	<!-- MD for Bootstrap -->
	<link rel="stylesheet" href="mdb.min.css">
	
    <!-- Awesome Font(Icons) -->
    <link href="fontawesome/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- Gordon -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="profile.css">
	
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 
</head>
<body>
	<div class="container-fluid p-0" id="outer">
    	<!-- Nav bar -->
		<!-- In reference to https://www.codeply.com/go/QAXbNGbWPA/bootstrap-4-navbar-transparent -->
		<nav class="navbar navbar-toggleable-sm navbar-expand-lg navbar-inverse p-0 p-lg-4">
			<div class="container-fluid p-0 justify-content-between">
				<a class="navbar-brand" href="home.html">
					<img class="img-fluid pr-3 pb-1 d-none d-lg-inline" src="images/home/logo2.png"
						alt="sushi-sama-logo" /><span class="px-2">Sushi Sama</span>
				</a>
				<button class="navbar-toggler btn" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<i class="fas fa-bars"></i>
				</button>
				<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
					<ul class="navbar-nav">
						<li class="nav-item px-2 mt-1">
							<a class="nav-link" href="home.html">Home</a>
						</li>
						<li class="nav-item px-2 mt-1">
							<a class="nav-link" href="menu.html">Menu</a>
						</li>
						<li class="nav-item px-2 mt-1">
							<a class="nav-link" href="order.html">Order</a>
						</li>
						<li class="nav-item px-2 mt-1">
							<a class="nav-link" href="career.html">Career</a>
						</li>
						<li class="nav-item px-2 mt-1 active">
							<a class="nav-link" href="profile.html">Profile</a>
						</li>
						<li class="nav-item px-2 mt-1 d-lg-none">
							<a class="nav-link" data-toggle="modal" data-target="#loginModal">Login </a>
						</li>
						<li class="nav-item pl-2 d-none d-lg-block">
							<button class="btn btn-outline-white btn-outline" data-toggle="modal"
								data-target="#loginModal"><i class="fa fa-user"></i> Login
							</button>
						</li>
					</ul>
				</div>
			</div>
		</nav>
        <!-- End of Nav Bar -->
        <div class="container my-5">
            <div class="row flex-lg-nowrap justify-content-center">
                <div class="col-12 col-lg-9 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="e-profile">
                                <div class="row">
                                    <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                        <div class="text-center text-sm-left mb-2 mb-sm-0">
                                            <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">Chai Kar Sing</h4>
                                            <p class="mb-0">@karsing123</p>
                                        <div class="text-muted"><small>Last seen 21 years ago</small></div>
                                    </div>
                                    <div class="text-center text-sm-right">
                                        <span class="badge badge-secondary">administrator</span>
                                    <div class="text-muted"><small>Joined 01 Jan 1999</small></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content pt-3">
                            <div class="tab-pane active">
                                <fieldset class="form p-2">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label>Full Name</label>
                                                    <input class="form-control" type="text" name="name" placeholder="Chai Kar Sing" value="Chai Kar Sing" readonly>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input class="form-control" type="text" name="username" placeholder="karsing123" value="karsing123" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control" type="text" placeholder="karsing123@gmail.com" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Birthday</label>
                                                    <input class="form-control" type="text" placeholder="1/1/1999" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Contact</label>
                                                    <input class="form-control" type="text" placeholder="012-3456789" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <button class="btn btn-primary">Edit Profile</button>
                                                </div>
                                            </div>
                                        </div>
                               </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 mb-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="px-xl-3">
                        <button class="btn btn-block btn-secondary">
                            <i class="fa fa-sign-out"></i>
                            <span>Logout</span>
                        </button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title font-weight-bold">Support</h6>
                        <p class="card-text">Get fast, free help from our friendly assistants.</p>
                        <button type="button" class="btn btn-primary">Contact Us</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

<!--Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="loginModalLabel">Login</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label for="usernameInput"><i class="fas fa-user mr-2 px-1"></i>Username</label>
						<input type="text" class="form-control" id="usernameInput" placeholder="Username">
					</div>
					<div class="form-group">
						<label for="passwordInput"><i class="fas fa-lock mr-2 px-1"></i>Password</label>
						<input type="password" class="form-control" id="passwordInput" placeholder="Password">
					</div>
					<small id="registerLink" class="form-text text-muted">Not a member yet? <a
							href="Registration.html">Sign up here</a></small>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary rounded">Login</button>
				<button type="button" class="btn rounded" data-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>
</div>
</div>
</body>
</html>