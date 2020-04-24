<?php require_once('../../private/initialize.php');?>

<?php
 // If not loggedin then redirect back to '/public' page.
 require_login(url_for('/'));
 ?>

<?php
if (is_post_request()) {
 } else {
     $allotment_details = new StudentAllotmentDetails;
     $personal_details = new StudentPersonalDetails;
     $gaurdian_details = new StudentGaurdianDetails;
     $education_details = new StudentEducationDetails;
 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('/stylesheets/bootstrap.css');?>">
  <!--   <link rel="stylesheet" type="text/css" href="campus/style.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('/stylesheets/jquery-ui.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('/stylesheets/animate.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('/stylesheets/jquery-ui.css');?>">


    <script src="https://kit.fontawesome.com/e8019bc349.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:700&display=swap" rel="stylesheet">

    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


    <title>CMS</title>
    <style>
        /*given below CSS has already been declayred in '/public_header_02.php' and 'style.css'*/
        /*KAMAL css code --STARTS--*/

        #message {
          color: #0B61A5;
          background: #9dd879;
          border: 1px solid #0B61A5;
          padding: 5px;
          margin-bottom:10px;
      }
        .error_in_form {
            display: none;
            border: 2px solid red;
            color: red;
            padding: 1em;
            margin-bottom: 1em;
            font-weight: normal;
            /* animation: ff 1s ease-in-out 0s 4;*/

        }

        footer {
            color: red;
        }

        /*KAMAL css code --ENDS--*/

        .dropdown:hover>.dropdown-menu {
            display: block;
        }

        .dropdown>.dropdown-toggle:active {
            /*Without this, clicking will make it sticky*/
            pointer-events: none;
        }

        .navbar {
            background-color: #1f4a4d;
            height: 45px;
        }

        .navbar ul li a {
            color: white !important;
            font-weight: 500;
        }

        .navbar .dropdown-menu a {
            color: white;

            font-weight: 500;
        }

        .navbar .dropdown-menu a:hover {
            color: white;
            background-color: #1f4a2d;
            font-weight: 500;
        }

        .navbar .dropdown-menu {
            margin-top: -2px;
            background-color: #1f4a4d;
        }

        @media (max-width: 600px) {
            #img1 {
                width: 70%;
            }

            #img2 {
                width: 70%;
            }

            #img3 {
                width: 100%;
            }
        }

        @media (max-width: 768px) {
            #form-field span {
                margin-left: 4%;
                width: 80%;
                text-align: left !important;
            }


            .desktop_text {
                display: none;
            }

            #v-pills-tab {
                padding-left: 0 !important;
            }

            #stick_left_div {
                width: 10% !important;
            }

            .input-group input {
                width: 90% !important;
                margin-left: 5%;
            }

            .input-group .f-select {
                width: 90% !important;
                margin-left: 5%;

            }

            .input-group .f-textarea {
                width: 90% !important;
                margin-left: 5%;

            }

            .navbar ul li {
                color: white;
                background-color: #1f4a4d;
                z-index: 10;
                padding-left: 4px;
            }
        }

        .dropdown-toggle::after {
            content: none;
        }

        #v-pills-tab a {
            height: 50px;
            color: gray;
            font-weight: bold;
            font-size: 14px;
            background-color: whitesmoke;
            border-bottom: 1px solid lightgray;
        }

        #v-pills-tab a.active {
            height: 50px;
            color: black;
            font-weight: bold;
            background-color: whitesmoke;
            font-size: 16px;
        }



        #form-field span {
            color: black;
            font-size: 14px !important;
            padding: 5px;
            font-weight: 200 !important;
            width: 80%;
            text-align: right;
        }

        * {
            font-family: 'Open Sans', sans-serif;
        }

        .input-group .f-select {
            font-size: 14px !important;
            box-shadow: none !important;
            border: 1px solid gray;
            height: 30px !important;
            font-family: sans-serif;
            font-weight: 500;
            width: 60%;
            padding-top: 3px !important;

        }

        .input-group .f-textarea {
            font-size: 14px !important;
            box-shadow: none !important;
            border: 1px solid gray;

            font-family: sans-serif;
            font-weight: 500;
            width: 60%;
            padding-top: 3px !important;

        }

        .input-group .f-select option {

            font-family: sans-serif;
            font-weight: 500;

        }

        .input-group .f-select .op:hover {
            background-color: #1f4a2d !importnt;
        }

        .input-group input {
            font-size: 15px !important;
            box-shadow: none !important;
            border: 1px solid gray;
            height: 30px;
            font-family: sans-serif;
            font-weight: 500;
            width: 60%;
            color: black !important;
            padding-top: 3px !important;

        }
        .input-group label {
            font-size: 15px !important;
          height: 30px;
            text-overflow: ellipsis;
            box-shadow: none !important;
            border: 1px solid gray;
            overflow: hidden;
            font-family: sans-serif;
            font-weight: 500;
            width: 60%;
            color: black !important;
            padding-top: 3px !important;

        }

        .btn {
            background-color: #1f4a4d !important;
            color: white;
            margin-left: 5px;
            font-size: 13px !important;
            padding-top: 2px;
            height: 26px;
        }

        .btn:hover {
            color: white;
            box-shadow: 4px solid gray;

        }

        .val-error {

            height: 22px;

            position: absolute;
            color: red;
            font-size: 14px;
            display: none;
            width: 100%;
            font-family: sans-serif;
            font-weight: 500;
            left: 0;
            bottom: -20px;
        }

        #right-f {
            position: relative;
        }

        #stick_left_div {
            position: sticky;
            top: 0;
            left: 0;


        }

        ::-webkit-scrollbar {
            width: 5px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            border-radius: 10px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: black;
            border-radius: 10px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: black;
        }

        .custom-control-label::before {}

        .custom-control-input:checked~.custom-control-label::before {
            background-color: green !important;
            border-color: green !important;
        }

    </style>
</head>

<body>
    <!-- -----------[]-------------------------- -->
<!-- -----------[]-------------------------- -->

      <?php if ($session->is_logged_in()) { ?>
        <navigation style="float: right;position: fixed;right: 0;z-index: 100;background-color: #ffc10799;padding-right: 5px;backdrop-filter: saturate(180%) blur(15px);">
      <ul style="padding-left: 25px;">

          <li>User: <?php echo $session->email . ' | student';  ?></li>
        <li><a href="<?php //echo url_for('/staff/main_admin/index.php');?>">Menu</a></li>
        <li><a href="<?php echo url_for('/student/logout.php'); ?>">Logout</a></li>
        <?php echo display_session_message(); ?>

      </ul>
    </navigation>
    <?php } ?>
    <?php echo display_session_message();
print_r($session);
// echo $session->email;
//echo $_SESSION['id'];
echo $_SESSION['roll'] ?? 'ROLL NUMBER. NOT SET YET ';
    ?>

<!-- ----------[]--------------------------- -->
<!-- ----------[]--------------------------- -->


    <div class="row p-0 m-0" style="border-top:2px dashed #1f4a4d;">
        <div class="col-2 pt-2"><img src="images/logo11.png" id="img1" width="40%" style="float:right;"></div>
        <div class="col-8 d-flex flex-row justify-content-center "><img src="images/logo%20(2).png" width="90%" height="80%" id="img3"></div>
        <div class="col-2 pt-2"><img src="images/logo%20(1).png" id="img2" width="40%"></div>
    </div>

    <nav class="navbar navbar-expand-md mt-2 ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation" style="color ">
            <i class="fa fa-bars" aria-hidden="true" style="color:#ede7e7;"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample01">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="campus.php">Home <span class="sr-only">(current)</span></a>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>

            </ul>
        </div>
    </nav>
    <div class="row  p-0 m-0 w-100 d-flex flex-row justify-content-center " style=" background-color: whitesmoke;"><span style="
           color: #1f4a2d;
                font-weight:660;
            font-size: 18px;word-spacing: 4px;">NEW STUDENT ADMISSION FORM</span></div>
    <div class="row p-0 m-0">
        <div class=" col-3 p-0 m-0 " style=" background-color: whitesmoke;" id="stick_left_div">
            <span style=" color:#1f4a4d;opacity:0.5;  font-weight:660; font-size: 1Spx;margin-left:20%;padding:1px;" class="desktop_text">Fill form step by step</span>
            <div class="nav flex-column nav-pills pl-5" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-step1-tab" data-toggle="pill" href="#v-pills-step1" role="tab" aria-controls="v-pills-step1" aria-selected="true"><span> 1</span> <span class="desktop_text">Allotment details</span></a>
                <a class="nav-link" id="v-pills-step2-tab" data-toggle="pill" href="#v-pills-step2" role="tab" aria-controls="v-pills-step2" aria-selected="false"><span> 2</span> <span class="desktop_text">Personal details</span></a>
                <a class="nav-link" id="v-pills-step3-tab" data-toggle="pill" href="#v-pills-step3" role="tab" aria-controls="v-pills-step3" aria-selected="false"><span> 3</span> <span class="desktop_text">Photo sign</span></a>
                <a class="nav-link" id="v-pills-step4-tab" data-toggle="pill" href="#v-pills-step4" role="tab" aria-controls="v-pills-step4" aria-selected="false"><span> 4</span> <span class="desktop_text"> Last edu. details </span></a>
                <a class="nav-link" id="v-pills-step5-tab" data-toggle="pill" href="#v-pills-step5" role="tab" aria-controls="v-pills-step5" aria-selected="false"><span> 5</span> <span class="desktop_text">Fee details</span></a>
                <a class="nav-link" id="v-pills-step6-tab" data-toggle="pill" href="#v-pills-step6" role="tab" aria-controls="v-pills-step6" aria-selected="false"><span> 6</span> <span class="desktop_text">Gaurdian details</span></a>
                <a class="nav-link" id="v-pills-step7-tab" data-toggle="pill" href="#v-pills-step7" role="tab" aria-controls="v-pills-step" aria-selected="false"><span> 7</span> <span class="desktop_text">Final submit</span></a>

            </div>
        </div>

        <div class="col-9 right_div p-0 m-0" style="overflow-y: scroll;height:600px;">
            <div class="  tab-content" id="v-pills-tabContent">
                <!-- ** INCLUDE A HTML CONTENT of AllotementDetails ** -->
                <?php
                require_once(PUBLIC_PATH . '/student/includes/allotement_details.php');
                 ?>
                 <!---------------------------------->
                 <!-- ** INCLUDE A HTML CONTENT of PersonalDetails ** -->
                <?php
                require_once(PUBLIC_PATH . '/student/includes/personal_details.php');
                 ?>
                 <!---------------------------------->
                 <!-- ** INCLUDE A HTML CONTENT of PhotoSign ** -->
                <?php
                require_once(PUBLIC_PATH . '/student/includes/photo_sign.php');
                 ?>
                 <!---------------------------------->

                 <!-- ** INCLUDE A HTML CONTENT of LastEducation ** -->
                <?php
                require_once(PUBLIC_PATH . '/student/includes/last_education_details.php');
                 ?>
                 <!---------------------------------->

                 <!-- ** INCLUDE A HTML CONTENT of FeeDetails ** -->
                <?php
                require_once(PUBLIC_PATH . '/student/includes/fee_details.php');
                 ?>
                 <!---------------------------------->

                 <!-- ** INCLUDE A HTML CONTENT of FeeDetails ** -->
                <?php
                require_once(PUBLIC_PATH . '/student/includes/gaurdian_details.php');
                 ?>
                 <!---------------------------------->

                 <!-- ** INCLUDE A HTML CONTENT of FinalSubmit ** -->
                <?php
                require_once(PUBLIC_PATH . '/student/includes/final_submit.php');
                 ?>
                 <!---------------------------------->
            </div>
        </div>



    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="<?php echo url_for('/js/jquery-1.9.1.min.js');?>"></script>
    <script src="<?php echo url_for('/js/jquery-ui.js'); ?>"></script>
    <!-- script for validations using js -->
    <script src="<?php //echo url_for('/js/c_script.js');?>"></script>

<!-- KAMAL AJAX FOR full student details---------------STARTS -->
    <script>
    window.addEventListener("DOMContentLoaded", function() {

    var submit_btn = document.getElementsByClassName('student_full_detail_btn');
    var original_btn_value, form_details, error_div, url;
    //let allotement_detail_form = document.getElementById('allotement_details');
    var request_in_progess = false;

    function set_dynamic_variables($this){
        if($this.hasAttribute("data-src")){
           let data_src = $this.getAttribute('data-src');
        switch (data_src) {
            case 'allotement_details':
                form_details = document.getElementById("allotement_details");
                error_div = document.getElementById("errors_for_allotement_details");
                url = './process/student_allotement_details_process.php';
                success_alert = 'Allotement details added succesfully';
                break;

            case 'personal_details':
                form_details = document.getElementById("personal_details");
                error_div = document.getElementById("errors_for_personal_details");
                url = './process/student_personal_details_process.php';
                success_alert = 'Personal details added succesfully';
                break;

            case 'gaurdian_details':
                form_details = document.getElementById("gaurdian_details");
                error_div = document.getElementById("errors_for_gaurdian_details");
                url = './process/student_gaurdian_details_process.php';
                success_alert = 'Gaurdian details added succesfully';
                break;

            case 'last_education_details':
                form_details = document.getElementById("last_education_details");
                error_div = document.getElementById("errors_for_education_details");
                url = './process/student_last_education_details_process.php';
                success_alert = 'Education details added succesfully';
                break;

                default:
                // statements_def
                break;
        }
        }
    }


    function display_errors(errors) {
        error_div.style.display = 'inline-block'
        error_div.innerHTML = 'Please fix given below errors...';
        for (let i = 0; i < errors.length; i++) {
            error_div.innerHTML += '<li>' + errors[i] + '</li>';
        }
    }

    //reset previosly defined errors
    function reset_errors() {
        error_div.innerHTML = '';
    }

    function hide_errors() {
        error_div.style.display = 'none';
    }

    function set_original_btn_value(e){
        original_btn_value = e.target.textContent;
    }

    // Don't remove the last space from `fill` value which is '#000 '
    function svg_loader(fill='#fff '){

        let svg = '<svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve" style="width: 25px; height: 25px;"> <path fill='+fill+ ' d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50"> <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="0.5s" from="0 50 50" to="360 50 50" repeatCount="indefinite"/> </path></svg>';

        return svg;
    }

    // When AJAX request is in progress then show loading in button
    function show_loading(e) {
        set_original_btn_value(e);
        e.target.disabled = true;
        e.target.style.backgroundColor = '#c3c3ae';
        e.target.innerHTML = svg_loader();
        //e.target.textContent = 'loading...';
    }


    // When AJAX request completed then stop loading in button
    function hide_loading(e) {
        e.target.disabled = false;
        e.target.style.backgroundColor = '#1f4a4d';
        e.target.textContent = original_btn_value;

    }

    /* It converts the text values which is returned by the server into JSON */
    function show_json(data) {
        let jsonn = JSON.parse(data);
        return jsonn;
    }

    // call this function whenever submit button cilcks
    function process_registration(e) {
        // Prevents multiple AJAX request.
        if (request_in_progess) {
            return;
        }

        request_in_progess = true;
        show_loading(e);

        let xhr = new XMLHttpRequest();
        xhr.open("POST", url, true);
        xhr.setRequestHeader('X-Requested-with', 'XMLHttpRequest');

        //--For POST request
        // Do not set content-type with FormData
        //xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');

        xhr.onreadystatechange = function() {

            console.log(xhr.readyState, xhr.status);

            if (xhr.readyState == 4 && xhr.status == 200) {
                hide_loading(e);
                console.log(xhr.responseText);
                let json = show_json(xhr.responseText);
                 //console.log(json);
                if (json.hasOwnProperty('errors') && json.errors.length > 0) {
                    reset_errors();
                    display_errors(json.errors);
                }else if (json == 'login_again') {
                  //window.location.href = '../';
                } else if(!json.hasOwnProperty('errors') && ((json != 'login_again') && (json != 'data_added'))){
                  alert('Something went wrong');
                  //window.location.href = '../';
                }else if (json == 'data_added') {
                  // code for it...
                  hide_errors();
                  alert(success_alert);
                }
                

                // It means request has completed.
                request_in_progess = false;
            }

        };

        let form_data = new FormData(form_details);
        // for ([key, value] of form_data.entries()) {
        //     console.log(key + ': ' + value);
        // }
        /* Sending the request */
        xhr.send(form_data);

    } // process_registration() function ends



    //addEventLinstener for click on a button
    for(let i=0; i< submit_btn.length; i++){
    submit_btn[i].addEventListener('click', function(e) {
        e.preventDefault();
        console.log(e);
        set_dynamic_variables(this);
        process_registration(e);
    }, false);
}

// KAMAL AJAX FOR full student details---------------ENDS -->

// KAMAL AJAX FOR final_submit ---------------STARTS -->

        let  url2 = './process/student_final_submit_process.php';
        let final_submit = document.getElementById('v-pills-step7-tab');
        let dynamic_name = document.getElementById('show_dynamic_name'); 
        let dynamic_date = document.getElementById('final_submit_date'); 

        function show_dynamic_name_and_date(json){
            if (json.hasOwnProperty('FullName') && json.FullName !== null) {
            let first_name = json.FullName.FirstName.toUpperCase();
            let last_name = json.FullName.LastName.toUpperCase();
            let full_name = first_name + ' ' + last_name;
            dynamic_name.textContent = full_name; 
        }else if(json.FullName === null){
            alert('Please fill your personal details');
            dynamic_name.style.backgroundColor = '#ff8989f7';
            dynamic_name.textContent = '______';
        }

        if(json.hasOwnProperty('date')){
            dynamic_date.textContent = json.date;
        }else{
            dynamic_name.textContent = 'DD/MM/YYYY';
        }
        }
        function show_loading_for_final(){
            dynamic_name.innerHTML = svg_loader('#0000ff');
            dynamic_date.innerHTML = svg_loader('#0000ff');
        }

        function show_full_name(){
            //Prevents multiple AJAX request.
            if (request_in_progess) {
                return;
            }
            request_in_progess = true;

            show_loading_for_final();

            let xhr = new XMLHttpRequest();
            xhr.open("GET", url2, true);
            xhr.setRequestHeader('X-Requested-with', 'XMLHttpRequest');

            xhr.onreadystatechange = function() {

            if (xhr.readyState == 4 && xhr.status == 200) {
                //console.log(xhr.responseText);
                let json = show_json(xhr.responseText);
                
                show_dynamic_name_and_date(json);

                // It means r'equest has completed.
                request_in_progess = false;
            }
        } // onreadystatechange()
        xhr.send();
    } // show_full_name()

        final_submit.addEventListener('click', show_full_name, false);


},false);

    </script>
<!-- KAMAL AJAX FOR final_submit---------------ENDS -->
</body>

</html>
