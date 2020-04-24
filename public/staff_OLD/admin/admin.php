<?php require_once('../../../private/initialize.php'); ?>
<?php
if(is_post_request()){
    if($_POST['login_student_admin']){
        redirect_to(url_for('/staff/admin/student_admin.php'));
    }elseif($_POST['login_employee_admin']){
        redirect_to(url_for('/staff/admin/employer_admin.php'));
    }elseif($_POST['login_time_table_admin']){
        redirect_to(url_for('/staff/admin/time_table_admin.php'));
    }elseif($_POST['login_subject_admin']){
        redirect_to(url_for('/staff/admin/subject_admin.php'));
    }elseif($_POST['login_main_admin']){
        redirect_to(url_for('/staff/admin/main_admin.php'));
    }
    }
 ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>
<body>

    <div class="jumbotron p-0 m-0" style="width: 100% ;height:100vh;">

        <!--      start  header-->
        <?php include(SHARED_PATH . '/public_header_02.php'); ?>
        <!--        end header-->

        <div class="row p-0 m-0" style="width: 100%;height: 90vh;background:lightgray; ">


            <!--         start   navigation menu-->
            <?php require_once(SHARED_PATH . '/navigation.php'); ?>
            <!--            end navigation menu-->

            <!--            main content div-->
            <div class="col-md-11 p-0 m-0 boder" style="black;margin-left: 10px;height: : 90vh">
                <div class="row m-c p-0 pt-1 m-0 d-flex flex-column justify-content-start align-items-start" style="height: : 90vh">
                    <ul class="nav nav-tabs pl-4" id="myTab" role="tablist" style="10vh">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">All admin</a>
                        </li>


                    </ul>
                    <div class="tab-content border-top" id="myTabContent" style=" height: 80vh; width: 99%;margin-top: 5px;">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row " style="">
                                <div class="row table-con d-flex flex-column justify-content-center align-items-center" style="width: 100%;">
                                    <span style="color: black;font-size: 18px;font-weight: bold;text-transform: uppercase">Administrators</span>


                                </div>
                                <div class="row">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Job</th>
                                                    <th scope="col">Operation</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>DK Sachan</td>
                                                    <td>Main admin</td>
                                                    <td> <button type="button" style="width: 80px;" class="btn btn-primary" data-toggle="modal" data-target="#main_admin" style="cursor: pointer">login</button> </td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Abishek</td>
                                                    <td>Time table admin</td>
                                                    <a href="#">
                                                        <td> <button type="button" style="width: 80px;" class="btn btn-primary" data-toggle="modal" data-target="#time_table_admin" style="cursor: pointer">login</button> </td>
                                                    </a>

                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>kamal</td>
                                                    <td>Employer admin</td>
                                                    <a href="#">
                                                        <td><button type="button" style="width: 80px;" class="btn btn-primary" data-toggle="modal" data-target="#employe_admin" style="cursor: pointer">login</button> </td>
                                                    </a>

                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>mayak</td>
                                                    <td>student admin</td>
                                                    <a href="#">
                                                        <td> <button type="button" style="width: 80px;" class="btn btn-primary" data-toggle="modal" data-target="#student_admin" style="cursor: pointer">login</button> </td>
                                                    </a>

                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>preeti</td>
                                                    <td>Subject admin</td>
                                                    <a href="#">
                                                        <td> <button type="button" style="width: 80px;" class="btn btn-primary" data-toggle="modal" data-target="#subject_admin" style="cursor: pointer">login</button> </td>
                                                    </a>

                                                </tr>



                                            </tbody>
                                        </table>
                                    </div>


                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <!-- Inser content here -->
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>




    <div class="modal fade " id="main_admin" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="position: relative">
                    <h5 class="modal-title" id="exampleModalLabel">Login Main Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: sticky;top: 0;right: 0;"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body ">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" style="margin-top: -20px">
                        <div class="form-group">

                            <input type="text" class="form-control" id="user_id" aria-describedby="emailHelp" placeholder="user Id">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your id with anyone else.</small>
                        </div>
                        <div class="form-group">

                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn submit btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" value="Login" name="login_main_admin">

                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>





    <div class="modal fade " id="time_table_admin" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="position: relative">
                    <h5 class="modal-title" id="exampleModalLabel">Login time table admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: sticky;top: 0;right: 0;"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body ">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" style="margin-top: -20px">
                        <div class="form-group">

                            <input type="text" class="form-control" id="user_id" aria-describedby="emailHelp" placeholder="user Id">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your id with anyone else.</small>
                        </div>
                        <div class="form-group">

                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" value="Login" name="login_time_table_admin">
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>







    <div class="modal fade " id="employe_admin" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="position: relative">
                    <h5 class="modal-title" id="exampleModalLabel">Login Employee Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: sticky;top: 0;right: 0;"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body ">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" style="margin-top: -20px">
                        <div class="form-group">

                            <input type="text" class="form-control" id="user_id" aria-describedby="emailHelp" placeholder="user Id" name="admin[employee_id]">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your id with anyone else.</small>
                        </div>
                        <div class="form-group">

                            <input type="password" class="form-control" id="password" placeholder="Password" name="admin[employee_paswd]">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn submit btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" name="login_employee_admin" value="Login">

                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>





    <div class="modal fade " id="student_admin" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="position: relative">
                    <h5 class="modal-title" id="exampleModalLabel">Login Student admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: sticky;top: 0;right: 0;"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body ">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" style="margin-top: -20px">
                        <div class="form-group">

                            <input type="text" class="form-control" id="user_id" aria-describedby="emailHelp" placeholder="user Id">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your id with anyone else.</small>
                        </div>
                        <div class="form-group">

                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn submit btn-secondary" data-dismiss="modal">Close</button>
                            <!-- <button type="submit" class="btn btn-primary" name="login_student_admin">Login</button> -->
                            <input type="submit" class="btn btn-primary" name="login_student_admin" value="Login">

                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>






    <div class="modal fade " id="subject_admin" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="position: relative">
                    <h5 class="modal-title" id="exampleModalLabel">Login Subject admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: sticky;top: 0;right: 0;"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body ">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" style="margin-top: -20px">
                        <div class="form-group">

                            <input type="text" class="form-control" id="user_id" aria-describedby="emailHelp" placeholder="user Id">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your id with anyone else.</small>
                        </div>
                        <div class="form-group">

                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn submit btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" value="Login" name="login_subject_admin">

                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>








    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="../../js/jquery.js"></script>
    <script src="../../js/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="../../js/wow.min.js"></script>
    <script src="../../js/script.js"></script>



</body>

</html>
