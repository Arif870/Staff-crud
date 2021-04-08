<?php
	require_once "vendor/autoload.php";
	use App\Controller\Staff;

	$obj = new staff;

    if(isset($_GET['delete_id'])){
     $deleteId = $_GET['delete_id'];

     $obj -> deleteStaffData($deleteId);
     
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



    <div class="wrap-table ">
        <a class="btn btn-success" href="addStaff.php">Add new staff</a>
        <div class="card shadow">
            <div class="card-body">
                <h2>All Staff Information</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Cell</th>
                            <th>Photo</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                    
                    $data = $obj -> allStaffShow();
                    
                    $i = 1;
                    while( $fetcheddata = $data -> fetch_object()):
                    
                    ?>

                        <tr>
                            <td><?php echo $i; $i++?></td>
                            <td><?php echo $fetcheddata -> name;?></td>
                            <td><?php echo $fetcheddata -> email;?></td>
                            <td><?php echo $fetcheddata -> cell;?></td>
                            <td><img src="assets/media/<?php echo $fetcheddata -> photo;?>" alt=""></td>
                            <td>
                                <a class="btn btn-sm btn-info"
                                    href="view.php?view_id=<?php echo $fetcheddata -> id;?>">View</a>
                                <a class="btn btn-sm btn-warning" href="#">Edit</a>
                                <a class="btn btn-sm btn-danger"
                                    href="?delete_id=<?php echo $fetcheddata -> id;?>">Delete</a>
                            </td>
                        </tr>
                        <?php endwhile;?>

                    </tbody>
                </table>
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