<?php require_once('../../../private/initialize.php'); ?>
<?php
if(is_post_request()){

    // Create record using post parameters
  $args = $_POST['student_admin'];
  
  $student = new Student($args);
  // echo "<hr><b><pre>";
  // print_r($student);
  // echo "</pre></b>";

  //exit;

  $result = $student->save();
  if($result === true) {
    $new_id = $student->id;
    //$session-> message('The Student was created successfully.');
    //redirect_to(url_for('/staff/admins/show.php?id=' . $new_id));
   // print_r($_POST['employer_admin']);
  } else {

    // show errors
  }

    }else{
        $student = new Student;
}


 ?>

<?php include(SHARED_PATH . '/public_header.php'); ?>

<body>

    <div class="jumbotron p-0 m-0" style="width: 100% ;height:100vh;">

        <!-- start  header-->
        <?php include(SHARED_PATH . '/public_header_02.php'); ?>
        <!-- end header-->

        <div class="row p-0 m-0" style="width: 100%;height: 90vh;background:lightgray; ">


            <!-- start   navigation menu-->
            <?php require_once(SHARED_PATH . '/navigation.php'); ?>
            <!--  end navigation menu-->

            <!--            main content div-->
            <div class="col-md-11 p-0 m-0 boder" style=";margin-left: 10px;height: : 90vh">
                <div class="row m-c p-0 pt-1 m-0 d-flex flex-column justify-content-start align-items-start" style="height: : 90vh">
                    <ul class="nav nav-tabs pl-4" id="myTab" role="tablist" style="10vh">
                        <span class="employe_ad_span">Student ADMIN :</span>
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add new student</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">All student</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Search student</a>
                        </li>
                    </ul>
                    <div class="tab-content p-1" id="myTabContent" style=" height: 80vh; width: 99%;margin-top: 5px;">
                        <div class="tab-pane  show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                            <!-- FORM --START -->
                            <?php include('./shared/student_admin_form.php'); ?>
                            <!-- FORM -----------------------ENDS -->

                        </div>
                        <div class="tab-pane " id="profile" role="tabpanel" aria-labelledby="profile-tab"> ALL STUDENTS DETAILS </div>
                        <div class="tab-pane " id="contact" role="tabpanel" aria-labelledby="contact-tab"> kamal </div>
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
                    <form action="main_admin.php" method="post" enctype="multipart/form-data" style="margin-top: -20px">
                        <div class="form-group">

                            <input type="text" class="form-control" id="user_id" aria-describedby="emailHelp" placeholder="user Id">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your id with anyone else.</small>
                        </div>
                        <div class="form-group">

                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>


                    </form>

                </div>
                <div class="modal-footer">
                    <a href="main_admin.php"> <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Login</button></a>

                </div>
            </div>
        </div>
    </div>





    <div class="modal fade " id="time_table_admin" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="position: relative">
                    <h5 class="modal-title" id="exampleModalLabel">Login Main Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: sticky;top: 0;right: 0;"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body ">
                    <form action="t_t_admin.php" method="post" enctype="multipart/form-data" style="margin-top: -20px">
                        <div class="form-group">

                            <input type="text" class="form-control" id="user_id" aria-describedby="emailHelp" placeholder="user Id">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your id with anyone else.</small>
                        </div>
                        <div class="form-group">

                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>


                    </form>

                </div>
                <div class="modal-footer">
                    <a href="main_admin.php"> <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Login</button></a>

                </div>
            </div>
        </div>
    </div>





    <div class="modal fade " id="employe_admin" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="position: relative">
                    <h5 class="modal-title" id="exampleModalLabel">Login Main Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: sticky;top: 0;right: 0;"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body ">
                    <form action="employer_admin.php" method="post" enctype="multipart/form-data" style="margin-top: -20px">
                        <div class="form-group">

                            <input type="text" class="form-control" id="user_id" aria-describedby="emailHelp" placeholder="user Id">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your id with anyone else.</small>
                        </div>
                        <div class="form-group">

                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>


                    </form>

                </div>
                <div class="modal-footer">
                    <a href="main_admin.php"> <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Login</button></a>

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
                    <form action="" method="post" enctype="multipart/form-data" style="margin-top: -20px">
                        <div class="form-group">

                            <input type="text" class="form-control" id="user_id" aria-describedby="emailHelp" placeholder="user Id">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your id with anyone else.</small>
                        </div>
                        <div class="form-group">

                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>


                    </form>

                </div>
                <div class="modal-footer">
                    <a href="main_admin.php"> <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Login</button></a>

                </div>
            </div>
        </div>
    </div>



<!-- AJAX request for all employees --STARTS -->

<!-- JAVASCRIPT----------------------  -->
    <script>
        let all_employee_btn = document.getElementById('profile-tab');
        let div1 = document.getElementById('profile');
        // submit_btn.disabled = true;


        function get_all_employees() {

            var xhr = new XMLHttpRequest();

            xhr.open("GET", "./process/get_all_students.php", true);
            xhr.setRequestHeader('X-Requested-with', 'XMLHttpRequest');

            /* --For POST request
            xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
            */


/* WHAT IS --
onreadystatechange
    Defines a function to be called when the readyState property changes.

readyState
    Holds the status of the XMLHttpRequest.
    0: request not initialized
    1: server connection established
    2: request received
    3: processing request
    4: request finished and response is ready
status
    200: "OK"
    403: "Forbidden"
    404: "Page not found"
*/
            xhr.onreadystatechange = function() {
                if(xhr.readyState < 4){
                    div1.innerHTML = 'LOADING...';
                }

                if (xhr.readyState == 4 && xhr.status == 200) {
                    //var j = show_json(xhr.responseText);
                    div1.innerHTML=xhr.responseText;
                    //console.log(xhr.responseText);
                };

            }
            /* Sending the request */
            xhr.send();

            //console.log('');



        }

        /* It converts the text values which is returned by the server into JSON */
        function show_json(data) {
            var jsonn = JSON.parse(data);
            return jsonn;
        }

        all_employee_btn.addEventListener('click',function(e){
                    get_all_employees();
                }
                    ,false);

    </script>


<!-- AJAX request for all employees --ENDS------------------------->








    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="../../js/jquery.js"></script>
    <script src="../../js/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="../../js/wow.min.js"></script>
        <script src="../../js/script/student_admin_script.js"></script>
    <script src="../../js/script.js"></script>




</body>

</html>
