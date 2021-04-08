<?php
	require_once "vendor/autoload.php";
	use App\Controller\Staff;

	$obj = new staff;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Development Area</title>
    <!-- ALL CSS FILES  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>


    <?php

if(isset($_POST['submit'])){
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$cell = $_POST['cell'];

	/**
	 * Photo upload
	 */

	$photo = $_FILES['photo'];
	$photoname = $photo['name'];
	$phototmpname = $photo['tmp_name'];
	move_uploaded_file($phototmpname,'assets/media/'.$photoname);


	$obj -> staffdatasent($name, $email, $cell, $photoname);
	
}
	
	
?>


    <div class="wrap ">
        <a class="btn btn-success shadow" href="index.php">Add Staff info</a>
        <div class="card">
            <div class="card-body">
                <h2>Sign Up</h2>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input name="name" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input name="email" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Cell</label>
                        <input name="cell" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Upload Photo</label> <br>
                        <input name="photo" style="display: none;" id="staff_img" class="form-control" type="file">
                        <label for="staff_img"><img style="width:70px; height:70px; display:block; cursor:pointer"
                                src="assets/media/img/icon.png" alt="icon"></label>
                    </div>
                    <div class="form-group">
                        <input name="submit" class="btn btn-primary w-100" type="submit" value="Sign Up">
                    </div>
                </form>
            </div>
        </div>
    </div>








    <!-- JS FILES  -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>