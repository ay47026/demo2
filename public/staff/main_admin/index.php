<?php require_once('../../../private/initialize.php');
 ?>

<?php
// if not loggedin then redirect back to '/staff/main_admin/md_login.php' page.
require_login(url_for('/staff/main_admin/md_login.php'));
?>
<?php require_once(SHARED_PATH . '/staff_header.php'); ?>

<?php
if(is_post_request()){
    
  // Create record using post parameters
  $args = $_POST['subadmin'];
  $args['captcha_code']= $_POST['captcha_code'];

  $subadmin = new SubAdmin($args);


  $result = $subadmin->save();
  if($result === true) {
    $new_id = $subadmin->id;
    // write to a log file
    $logger->get_activity_logger('NEW ACCOUNT','The new subadmin was created successfully with ID ='. $new_id . ' on '.date("j F Y, g:i:s A"));
    $session-> message('The subadmin was created successfully.');
    
    // reset/re-initialize object values.
    // so after creating account succesfully, it will not print the values in the form.
    // TODO : if you are redirecting to another page after creating an account then don't
    // need to reset the object (you can comment given below code).
    //$subadmin = new SubAdmin;

    //redirect_to(url_for('/staff/admins/show.php?id=' . $new_id));
   
  } else {
    // show errors
  }
    }else{
        $subadmin = new SubAdmin;
}
 ?>
<body>
    <div class="jumbotron p-0 m-0" style="width: 100% ;height:100vh;">
        <!-- start  header-->
        <?php require_once(SHARED_PATH . '/staff_header_02.php'); ?>
        <!-- end header-->
        <div class="row p-0 m-0" style="width: 100%;height: 90vh;background:lightgray; ">
            <!-- start   navigation menu-->
            <?php require_once(SHARED_PATH . '/navigation.php'); ?>
            <!--  end navigation menu-->
            <!-- main content div-->
            <div class="col-md-11 p-0 m-0 boder" style=";margin-left: 10px;height: : 90vh">
                <div class="row m-c p-0 pt-1 m-0 d-flex flex-column justify-content-start align-items-start" style="height: : 90vh">
                    <ul class="nav nav-tabs pl-4" id="myTab" role="tablist" style="10vh">
                        <span class="employe_ad_span">MAIN ADMIN :</span>
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add new Subadmin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">All subadmin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Change job</a>
                        </li>
                    </ul>
                    <div class="tab-content p-1" id="myTabContent" style=" height: 80vh; width: 99%;margin-top: 5px;">
                        <div class="tab-pane  show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                               <?php
                               // Display form errors----------------
                               echo display_errors($subadmin->errors);
                               ?>
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="take_a_form" method="post">
                                <div class="row">
                                    <div class="col-6 pl-4">
                                        <div class="row completeform">
                                            <div class="col-6">
                                                <div class="input-group mb-3 ">
                                                    <div class="input-group-prepend "><span class="input-group-text m-0">First Name</span></div>
                                                    <input class="form-control  " id="first_name" required="required" placeholder="First Name" type="text" name="subadmin[first_name]" value="<?php echo h($subadmin->first_name); ?>">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="input-group mb-3 ">
                                                    <div class="input-group-prepend "><span class="input-group-text m-0">Last Name</span></div>
                                                    <input class="form-control  "   id="last_name" placeholder="Last Name" type="text" name="subadmin[last_name]" value="<?php echo h($subadmin->last_name); ?>">
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="input-group mb-3 ">
                                                    <div class="input-group-prepend "><span class="input-group-text m-0">Gender</span></div>
                                                    <select class="form-control  " id="gender" name="subadmin[gender]">
                                                        <option value="" disabled selected>--select--</option>
                                                        <?php
                                                        $genders = SubAdmin::GENDER;
                                                        sort($genders);
                                                        
                                                        foreach($genders as $gender) { ?>
                                                        <option value="<?php echo $gender;?>" <?php if($subadmin->gender == $gender) { echo 'selected'; } ?>><?php echo ucfirst($gender); ?></option>
                                                        <?php } ?>
                                                        
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="input-group mb-3 ">
                                                    <div class="input-group-prepend "><span class="input-group-text m-0">Email</span></div>
                                                    <input class="form-control " id="email" required="required" placeholder="email" type="email" name="subadmin[email]" value="<?php echo h($subadmin->email); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row completeform">
                                            <div class="col-6">
                                                <div class="input-group mb-3 ">
                                                    <div class="input-group-prepend "><span class="input-group-text m-0">M/No.</span></div>
                                                    <input class="form-control  " id="mobile_number" maxlength="10" required="required" placeholder="Mobile Number" type="text" name="subadmin[mobile_number]" value="<?php echo h($subadmin->mobile_number); ?>">
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="input-group mb-3 ">
                                                    <div class="input-group-prepend "><span class="input-group-text m-0">Employe Id</span></div>
                                                    <input class="form-control " id="employer_id" required="required" placeholder="employe id" type="text" name="subadmin[employer_id]" value="<?php echo h($subadmin->employer_id); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row completeform">
                                            <div class="col-6">
                                                <div class="input-group mb-3 ">
                                                    <div class="input-group-prepend "><span class="input-group-text m-0">Job assign</span></div>
                                                    <select class="form-control  " id="job_assign" required="required" name="subadmin[job_assign]">

                                                        <option value="" disabled selected>--select--</option>

                                                        <?php
                                                        $job_assigns = SubAdmin::JOB_ASSIGN;
                                                        sort($job_assigns);
                                                        
                                                        foreach($job_assigns as $job_assign) { ?>
                                                        <option value="<?php echo $job_assign;?>" <?php if($subadmin->job_assign == $job_assign) { echo 'selected'; }
                                                        if ($subadmin->has_uniqueness($job_assign, 'job_assign') == false) {
                                                            //TODO : uncomment below
                                                            //echo 'disabled';
                                                        } ?>><?php echo ucwords($job_assign); ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text  border ">Job designation</span></div>
                                                        <select class="form-control border  admit-in" id="job_designation" name="subadmin[job_designation]">
                                                            <option value="" disabled selected>--select--</option>
                                                        <?php
                                                        $job_designations = SubAdmin::JOB_DESIGNATION;
                                                        sort($job_designations);
                                                        
                                                        foreach($job_designations as $job_designation) { ?>
                                                        <option value="<?php echo $job_designation;?>" <?php if($subadmin->job_designation == $job_designation) { echo 'selected'; } ?>><?php echo ucfirst($job_designation); ?></option>
                                                        <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- FOR CAPTCHA -->
                                            <div class="row">
                                                <div class="col-4 ">
                                                    <?php 
                                                    require_once(PUBLIC_PATH . '/shared/captcha.php');
                                                     ?>
                                                </div>
                                                
                                            </div>
                                            <!-- CAPTCHA ENDS---------------->

                                            <div class="row">
                                                <div class="col-3 ">
                                                    <input class="btn mt-4 btn-danger text-light admit-now  " id="submit"  type="submit" name="subadmin[submit]">
                                                </div>
                                                <div class="col-9 admit-notice">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- FORM -----------------------ENDS -->
                            </div>
                            <!-- For All employee [tab]  -->
                            <div class="tab-pane " id="profile" role="tabpanel" aria-labelledby="profile-tab"> </div>
                            <!-- For search employee [tab]  -->
                            <div class="tab-pane " id="contact" role="tabpanel" aria-labelledby="contact-tab"> kamal </div>
                        </div>
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
        <script src="../../js/script/employee_admin_script.js"></script>
        <script src="../../js/script.js"></script>


<!-- KAMAL javascript for AJAX -->
<!-- AJAX request to show all subadmins --STARTS -->
<!-- JAVASCRIPT----------------------  -->
    <script>
        let all_subadmins_btn = document.getElementById('profile-tab');
        let div1 = document.getElementById('profile');
        var pagination,pagination_length;
        let request_in_progess = false;

        function get_all_subadmins(eve) {
            // Prevents multiple AJAX request.
            if (request_in_progess) {return;}
            request_in_progess = true;

            var xhr = new XMLHttpRequest();
            if (Number.isInteger(eve) == false) {
                eve = 'a';
            }
            xhr.open("GET", '../process/get_all_subadmins.php?page=' + eve, true);
            xhr.setRequestHeader('X-Requested-with', 'XMLHttpRequest');

            /* --For POST request
            xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
            */
            if(xhr.readyState < 4){
            div1.innerHTML = "<div class='spinner_div'><img src='/demo1/public/images/spinner.gif' class='spinner'></div>";
            }
            xhr.onreadystatechange = function() {

                // NOT WORKING HERE
                // WORKING OUTSIDE OF THIS FUNCTION
               /* if(xhr.readyState <4){
                    div1.innerHTML = 'LOADING...LOADING...';
                    }*/

                if (xhr.readyState == 4 && xhr.status == 200) {
                    //var j = show_json(xhr.responseText);
                    //console.log(xhr.responseText);
                    if (xhr.responseText == 'false') {
                        window.location.href= '/';
                        return;
                    }else{
                    div1.innerHTML=xhr.responseText;
                }
                // **FOR PAGINATION
                // given below variables must be initialised here
                // so do not move this part in somewhere place.
                pagination = document.querySelectorAll('.pagination span');
                pagination_length = pagination.length;
                        //addEventListener for click on a pagination
                        for (var i = 0; i < pagination_length; i++) {
                        pagination[i].addEventListener('click',function(e){
                            e.preventDefault();
                            let send_value = parseInt(e.toElement.attributes[0].value);
                            get_all_subadmins(send_value);
                        },false);
                    }

                    // It means request has completed.
                    request_in_progess = false;
                }

            }
            /* Sending the request */
            xhr.send();

            
        }

        /* It converts the text values which is returned by the server into JSON */
        function show_json(data) {
            var jsonn = JSON.parse(data);
            return jsonn;
        }

        //addEventLinstener for click on a button
        all_subadmins_btn.addEventListener('click',function(e){
            e.preventDefault();
            get_all_subadmins(e);
                },false);




    </script>
<!-- AJAX request to show all subadmins --ENDS------------------------->

<!-- JAVASCRIPT for captcha -->
<script>
    let input = document.getElementById('input_for_captcha');
    let refresh_img = document.getElementById('refresh_icon');
    function load_new_captcha(){
        input.value = '';
    }
    refresh_img.addEventListener('click',load_new_captcha,false);
</script>
<!-- ------------------------------->
<!-- FOOTER -->
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
