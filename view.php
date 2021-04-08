<?php
	require_once "vendor/autoload.php";
	use App\Controller\Staff;

	$obj = new staff;

    if(isset($_GET['view_id'])){
    $view_id = $_GET['view_id'];

     $allstaff =  $obj -> viewStaffData($view_id);
     
    }
    
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


    <div class="container">

        <div class="card w-50 rounded shadow mx-auto mt-5 text-center">


            <?php 
            
            while($s = $allstaff -> fetch_object()) :
            
            ?>
            <div class="card-header">
                <h2 style="background-color: green; color:white"><?php echo $s -> name;?></h2>
                <img style="width: 200px; height: 250px" class="card-img-top mx-auto"
                    src="assets/media/<?php echo $s -> photo;?>" alt="">
            </div>
            <div class="card-body">
                <table class="table table-dark text-center table-striped">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Cell</th>
                    </tr>
                    <tr>
                        <td><?php echo $s -> name;?></td>
                        <td><?php echo $s -> email;?></td>
                        <td><?php echo $s -> cell;?></td>
                    </tr>
                </table>

                <?php endwhile;?>
            </div>
            <div class="card-footer">
                <a class="btn btn-danger" href="index.php">All Staff</a>
                <a class="btn btn-warning" href="addStaff.php">Add Staff</a>
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