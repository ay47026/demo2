<?php require_once('../private/initialize.php'); ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<body>

    <div class="jumbotron p-0 m-0" style="width: 100% ;height:100vh;">

        <!-- start  header-->
        <?php include(SHARED_PATH . '/public_header_02.php'); ?>
        <!-- end header-->

        <div class="row" style="width: 100%;height: 90vh;background:lightgray; ">

            <!-- start   navigation menu-->
            <?php require_once(SHARED_PATH . '/navigation.php'); ?>
            <!--  end navigation menu-->

            <!-- main content div-->
            <div class="col-md-10 p-4" style="margin-left: 10px;">
                <div class="row">
                    <div class="col-md-4 d-flex flex-column justify-content-center align-items-center">
                        <a href="<?php echo url_for('/staff/admin/admin.php'); ?>">
                            <img src="images/admistratorjpg.jpg" style="width: 130px;height: 130px;border: 2px solid black;cursor: pointer">
                        </a>

                        <span style="color: black;font-size: 20px;">Administrator</span>
                    </div>
                    <div class="col-md-4 d-flex flex-column justify-content-center align-items-center">
                        <a href="admin/admin.html"> <img src="images/teacher.jpg" style="width: 130px;height: 130px;border: 2px solid black;cursor: pointer"></a>

                        <span style="color: black;font-size: 20px;">Teacher</span></div>
                    <div class="col-md-4 d-flex flex-column justify-content-center align-items-center">
                        <a href="#"> <img src="images/student.jpg" style="width: 130px;height: 130px;border: 2px solid black;cursor: pointer"></a>

                        <span style="color: black;font-size: 20px;">Student</span>
                    </div>


                </div>
                <div class="row mt-4">
                    <div class="col-md-4 d-flex flex-column justify-content-center align-items-center">
                        <a href="#"><img src="images/admistratorjpg.jpg" style="width: 130px;height: 130px;border: 2px solid black;cursor: pointer"></a>

                        <span style="color: black;font-size: 20px;">Administrator</span>
                    </div>
                    <div class="col-md-4 d-flex flex-column justify-content-center align-items-center">
                        <a href="#"><img src="images/teacher.jpg" style="width: 130px;height: 130px;border: 2px solid black;cursor: pointer"></a>

                        <span style="color: black;font-size: 20px;">Teacher</span></div>
                    <div class="col-md-4 d-flex flex-column justify-content-center align-items-center">
                        <a href="#"><img src="images/student.jpg" style="width: 130px;height: 130px;border: 2px solid black;cursor: pointer"></a>

                        <span style="color: black;font-size: 20px;">Student</span>
                    </div>


                </div>
            </div>
        </div>


    </div>










    <!-- jQuery first, then Popper.js, then Bootstrap JS -->


    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="js/wow.min.js"></script>
    <script src="js/script.js"></script>



</body>

</html>
