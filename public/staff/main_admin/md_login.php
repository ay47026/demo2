<?php require_once('../../../private/initialize.php'); ?>
<?php
/* If already loggin then redirect back to index page.
   It means you can't open this page if you have already logged-in.
*/
is_already_login('/staff/main_admin/index.php');

if(is_post_request()){
  // Create record using post parameters
  $args = $_POST['main_admin'];
  $args['captcha_code']= $_POST['captcha_code'];

  $main_admin = new MainAdmin($args);
  //print_array_using_pre_tag($main_admin,$exit= true);
  $errors = $main_admin->get_errors();

  if(empty($errors)) {
    $admin = MainAdmin::find_by_email($args['user_id']);

    // test if admin found and password is correct
    if($admin !=false && $admin->verify_password($args['password'])) {
      // Mark admin as logged in

      $session->login($admin);
      $session-> message('The main admin logged-in successfully.');
      // write to a log file
      $logger->get_activity_logger('LOGIN','The Main Admin logedin successfully on '.date("j F Y, g:i:s A"));
      redirect_to(url_for('/staff/main_admin/index.php'));
    } else {

      // username not found or password does not match
      $main_admin->errors[] = 'Log in was unsuccessful.';
      
      // write to a log file
    $logger->get_activity_logger('LOGIN FAILED','The Main Admin was not Log-in unsuccessful on '.date("j F Y, g:i:s A"));
    }
    
    // reset/re-initialize object values.
    // so after creating account succesfully, it will not print the values in the form.
    // TODO : if you are redirecting to another page after creating an account then don't
    // need to reset the object (you can comment given below code).
    //$main_admin = new MainAdmin;

    //redirect_to(url_for('/staff/admins/show.php?id=' . $new_id));
   
  } else {
    // show errors
  }
    }else{
        $main_admin = new MainAdmin;
}

/*
**SET MANUALLY main_admin credentials
    $args['email'] = 'demo@gmail.com';
    $args['hased_password'] = '123456';
    $admin = new MainAdmin($args);
    $result = $admin->save();
*/


/*if(is_post_request()){
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
    }*/
 ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<body>

    <div class="jumbotron p-0 m-0" style="width: 100% ;height:100vh;">

        <!--      start  header-->
        <?php include(SHARED_PATH . '/staff_header_02.php'); ?>
        <!--        end header-->

        <div class="row p-0 m-0" style="width: 100%;height: 90vh;background:lightgray; ">


            <!--         start   navigation menu-->
            <?php require_once(SHARED_PATH . '/navigation.php'); ?>
            <!--            end navigation menu-->

            <!--            main content div-->
            <div class="col-md-11 p-0 m-0 boder" style="black;margin-left: 10px;height: : 90vh">
                <div class="row m-c p-0 pt-1 m-0 d-flex flex-column justify-content-start align-items-start" style="height: : 90vh">

                </div>

            </div>
        </div>


    </div>

    <div class="modal " id="main_admin" role="dialog">

        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center flex-column justify-content-center ">
                    <div class="row ">
                        <img src="<?php echo url_for('/images/logo11.png'); ?>">
                    </div>
                    <h5 class="modal-title" id="exampleModalLabel" style="font-size:28px;">E. R. P. LOGIN </h5>

                </div>

                    <?php 
                    /* Display login errors */
                    echo display_errors($main_admin->errors); ?>
                <div class="modal-body ">
                    <form action="" method="post" enctype="multipart/form-data" style="margin-top: -20px">
                        <div class="form-group d-flex align-items-center flex-column justify-content-center">

                            <input type="text" class="form-control" name="main_admin[user_id]" id="user_id" value="demo@gmail.com" aria-describedby="emailHelp" placeholder="USER ID" style="width: 80% !important; height: 50px !important;font-size:17px; box-shadow:none">

                        </div>
                        <div class="form-group d-flex align-items-center flex-column justify-content-center">

                            <input type="password" class="form-control" id="password" value="123456" placeholder="PASSWORD" name="main_admin[password]" style="width: 80% !important; height: 50px !important;font-size:17px; box-shadow:none">
                        </div>

                        <small id="emailHelp" class="form-text text-muted" style="margin-left:10%;">We'll never share your id with anyone else.</small>

                        <!-- FOR CAPTCHA -->
                        <div class="row">
                            <div class="col-4 ">
                                <?php 
                                require_once(PUBLIC_PATH . '/shared/captcha.php');
                                 ?>
                            </div>
                            
                        </div>
                        <!-- CAPTCHA ENDS---------------->


                        <div class="modal-footer d-flex align-items-center flex-column justify-content-center ">

                            <input type="submit" class="btn " value="Login" name="main_admin[login_main_admin]" style=" background-color: #1f4a4d;color:white">
                            <a href="#" style="  text-decoration: none;"> <span style="font-size:13px;;color:black;">Password forgeted</span></a>

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

    <script>
        $(document).ready(function() {

            $('#main_admin').modal('show',{
                keyboard: false,
                backdrop: false
            });
        });

    </script>

   <!-- kamal javascript for always open login popup modal  -->
    <script>
        let modal = document.getElementById("main_admin");
        let body = document.querySelector('body');
        let cc = document.createElement('div');
        var  i =0;
        
       
        // When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    i++;
  if (event.target == modal) {
    modal.style.display = "block";
    // run only a single time
    
    cc.className="modal-backdrop show";
    body.appendChild(cc);

    //document.querySelector(".show").style.opacity = 0.5;
  }
}
    </script>
<!-- FOOTER -->
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
