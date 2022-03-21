<?php
require 'includes/init.php';
if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
    $user_data = $user_obj->find_user_by_id($_SESSION['id']);
    if ($user_data ===  false) {
        header('Location: logout.php');
        exit;
    }
    // FETCH ALL USERS WHERE ID IS NOT EQUAL TO MY ID
    $all_users = $user_obj->all_users($_SESSION['id']);
} else {
    header('Location: logout.php');
    exit;
}
// REQUEST NOTIFICATION NUMBER
$get_req_num = $frnd_obj->request_notification($_SESSION['id'], false);
// TOTAL FRIENDS
$get_frnd_num = $frnd_obj->get_all_friends($_SESSION['id'], false);
?>
<?php
include 'header.php';
?>
<div class="container">
    <div class="row">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <img src="img/logo.png" alt="" class="img-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto mb-2 mb-1g-0">
                        <nav class="navbar navbar-light ">
                            <form class="container-fluid justify-content-start">
                                <button class="btn me-2" type="button" href="#"><a href="Index.php" style="text-decoration: none; color:grey;">Logout</a></button>
                            </form>
                        </nav>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="col-md-4 mt-1">
            <div class="card texr-center sidebar">
                <div class="card-body">
                    <img src="img/avatar-user.png" alt="" class="rounded-circle" width="150">
                    <div class="mt-3">
                        <h3><?php echo  $user_data->username; ?></h3>
                        <a href="Home-user.php">Home</a>
                        <hr>
                        <a href="Contact.php">Contact</a>
                        <hr>
                        <a href="Edit.php">Edit</a>
                    </div>

                </div>

            </div>
        </div>
        <div class="col-md-8 mt-1">
            <div class="card mb-3 content">
                <h1 class="m-3 pt-3">Edit</h1>
                <div class="card-body">
                    <form action="process-add-employee.php" method="post">
                        <div class="form-group row">
                            <label for="empName" class="col-sm-2 col-form-label">Full Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="empName" name="empName">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="empPosition" class="col-sm-2 col-form-label">Sex</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="empPosition" name="empPosition">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="empEmail" class="col-sm-2 col-form-label">Job</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="empEmail" name="empEmail">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="empMobile" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                                <input type="tel" class="form-control" id="empMobile" name="empMobile">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="empMobile" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <input type="tel" class="form-control" id="empMobile" name="empMobile">
                            </div>
                        </div>
                        <div>
                            <form class="d-flex">
                                <button class="btn btn-outline-success" type="submit">Post</button>
                            </form>
                        </div>
                </div>

            </div>
        </div>
    </div>