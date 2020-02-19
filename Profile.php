<?php

	session_start();
	$_SESSION['page'] = "profile";
	require 'includes/dbh.inc.php';
	$username = $_SESSION['username'];
	if(!isset($_SESSION['username'])){
		header("Location: ./Registration.php");
	}
	$sql = "SELECT name,email,birthday,contact,is_admin FROM user WHERE username='$username'";
	$result = mysqli_query($conn, $sql);
	if (!$result) {
		echo 'Could not run query: ' . mysql_error();
		exit;
	}
	$row = mysqli_fetch_row($result);

	$name = $row[0];
	$email = $row[1];
	$birthday = $row[2];
	$contact = $row[3];
	$admin = $row[4];

	if($admin == 1){
		$user = "administrator";
	}
	else{
		$user = "customer";
	}
   
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
	<link rel="stylesheet" href="css/mdb.min.css">
	
    <!-- Awesome Font(Icons) -->
    <link href="fontawesome/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- Gordon -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/profile.css">
</head>
<body>
	<div class="container-fluid p-0" id="outer">
    	<!-- Nav bar -->
        <!-- In reference to https://www.codeply.com/go/QAXbNGbWPA/bootstrap-4-navbar-transparent -->
        <div class="text-center">
        <?php include('navbar.php'); ?>
</div>
        <!-- End of Nav Bar -->
        <?php
        echo '
            <div class="container my-5">
                <div class="row flex-lg-nowrap justify-content-center">
                    <div class="col-12 col-lg-9 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                        <div class="text-center text-sm-left mb-2 mb-sm-0">
                                            <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">'.$name.'</h4>
                                            <p class="mb-0">@'.$username.'</p>
                                    </div>
                                    <div class="text-center text-sm-right">
                                        <span class="badge badge-secondary">'.$user.'</span>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content pt-3">
                            <div class="tab-pane active">
                                <fieldset class="form p-2">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input class="form-control" type="text" value="'.$username.'" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input class="form-control" type="text" value="'.$email.'" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Birthday</label>
                                                <input class="form-control" type="text" value="'.$birthday.'" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Contact</label>
                                                <input class="form-control" type="text" value="'.$contact.'" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <a class="btn btn-primary" href="edit-profile.php">Edit Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        '; ?>
        <div class="col-12 col-lg-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title font-weight-bold">Support</h6>
                    <p class="card-text">Get fast, free help from our friendly assistants.</p>
                    <button type="button" class="btn btn-primary">Contact Us</button>
                </div>
            </div>
        </div>
    </div>

<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 </body>
</html>