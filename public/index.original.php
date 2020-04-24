<?php
require_once('../private/initialize.php');?>
<?php
// sleep(2);
require_once(SHARED_PATH . '/public_header.php');
require_once(SHARED_PATH . '/public_header_02.php');
 ?>
<div class="jumbotron p-0 m-0 " style="background-color:white">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-md-4 p-5">
            <div class="row d-flex flex-column justify-content-center align-items-center" style=" border-bottom: 1px solid #1f4a4d;">
                <span style="color:#1f4a2d;font-size:25px;font-weight:600; font-family: sans-serif;">STUDENT SECTION</span>
            </div>
            <div class="row mt-4">
                <div class="col-4 d-flex flex-column justify-content-center align-items-center ">
                    <img src="<?php echo url_for('/images/admssion_form-icon-4.jpg');?>" style="width: 60px;height: 70px;cursor: pointer" data-toggle="modal" data-target="#account">

                    <span style="color: black;font-size: 13px;text-align:center;">New student admission</span>
                </div>
                <div class="col-4 d-flex flex-column justify-content-center align-items-center">
                    <a href="#"><img src="<?php echo url_for('/images/images.png');?>" style="width: 67px;height: 70px;cursor: pointer"></a>

                    <span style="color: black;font-size: 13px;text-align:center;">Current<br> student</span></div>
                <div class="col-4 d-flex flex-column justify-content-center align-items-center">
                    <a href="#"><img src="<?php echo url_for('/images/Gradute_Student-512.png');?>" style="60px;height: 70px;cursor: pointer"></a>

                    <span style="color: black;font-size: 13px;text-align:center;">Old Student</span>
                </div>
            </div>
        </div>
        <div class="col-md-7 p-5">
            <div class="row d-flex flex-column justify-content-center align-items-center" style=" border-bottom: 1px solid #1f4a4d;">
                <span style="color:#1f4a2d;font-size:25px;font-weight:600; font-family: sans-serif;">OUR MENTOR</span>
            </div>
            <div class="row mt-4">
                <div class="col-md-3 d-flex flex-column justify-content-center align-items-center">
                    <a href="#"><img src="<?php echo url_for('/images/vinayji.jpg'); ?>" style="width: 160px;height: 195px;cursor: pointer"></a>

                    <span style="color: black;font-size: 13px;font-weight:  700">Smt. S. Radha Chauhan</span>
                    <span style="color: black;font-size: 12px;text-align:center" class="mt-1">Principal Secretary Technical Education

                        Govt. of.U.P.</span>
                    <button class="btn btn-info p-0 mt-1" style="width:100px;height:27px ;"> Read more</button>
                </div>
                <div class="col-md-3 d-flex flex-column justify-content-center align-items-center">
                    <a href="#"><img src="<?php echo url_for('/images/GovernancePic_20190826060904305.jpg'); ?>" style="width: 160px;height: 195px;cursor: pointer"></a>

                    <span style="color: black;font-size: 13px;font-weight:  700">Smt. S. Radha Chauhan</span>
                    <span style="color: black;font-size: 12px;text-align:center" class="mt-1">Principal Secretary Technical Education
                        Govt. of.U.P.</span>
                    <button class="btn btn-info p-0 mt-1" style="width:100px;height:27px ;"> Read more</button>
                </div>
                <div class="col-md-3 d-flex flex-column justify-content-center align-items-center">
                    <a href="#"><img src="<?php echo url_for('/images/GovernancePic_20190809092451339.jpg'); ?>" style="width: 160px;height: 195px;cursor: pointer"></a>

                    <span style="color: black;font-size: 13px;font-weight:  700">Smt. S. Radha Chauhan</span>
                    <span style="color: black;font-size: 12px;text-align:center" class="mt-1">Principal Secretary Technical Education

                        Govt. of.U.P.</span>
                    <button class="btn btn-info p-0 mt-1" style="width:100px;height:27px ;"> Read more</button>
                </div>
                <div class="col-md-3 d-flex flex-column justify-content-center align-items-center">
                    <a href="#"><img src="<?php echo url_for('/images/director.jpg'); ?>" style="width: 160px;height: 195px;cursor: pointer"></a>

                    <span style="color: black;font-size: 13px;font-weight:  700">Smt. S. Radha Chauhan</span>
                    <span style="color: black;font-size: 12px;text-align:center" class="mt-1">Principal Secretary Technical Education

                        Govt. of.U.P.</span>
                    <button class="btn btn-info p-0 mt-1" style="width:100px;height:27px ;"> Read more</button>
                </div>

            </div>
        </div>
    </div>
</div>

<?php
    require_once(PUBLIC_PATH . '/student/includes/student_registration_form.inc.php');
?>



<script>

    $(function() {
        $(".demo1").bootstrapNews({
            newsPerPage: 3,
            autoplay: true,
            pauseOnHover: true,
            direction: 'up',
            newsTickerInterval: 1000,
            onToDo: function() {
                //console.log(this);
            }
        });

        $(".demo2").bootstrapNews({
            newsPerPage: 4,
            autoplay: true,
            pauseOnHover: true,
            navigation: false,
            direction: 'down',
            newsTickerInterval: 2500,
            onToDo: function() {
                //console.log(this);
            }
        });

        $("#demo3").bootstrapNews({
            newsPerPage: 3,
            autoplay: false,

            onToDo: function() {
                //console.log(this);
            }
        });
    });

</script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- AJAX request for new student registration --STARTS -->
<!-- JAVASCRIPT----------------------  -->
<script>
    var student_account_modal = document.getElementById('login_btn');
    if(student_account_modal !== null){
  
    let submit_btn = document.getElementById('reg_btn');
    console.log(document.getElementsByClassName('student_reg_login'));
    console.log(submit_btn);
    //let div1 = document.getElementById('profile');
    //var pagination,pagination_length;
    let request_in_progess = false;

    function get_form_data() {
        let input = document.querySelectorAll('#student_registration input');
        let input_length = input.length;
        let data = '';
        let data2;

        for (let i = 0; i < input_length; i++) {
            // prevent comma for last value.
            if ((i + 1) < input_length) {
                data += '"' + input[i].getAttribute('name') + '"' + ':' + '"' + input[i].value + '"' + ',';
            } else {
                data += '"' + input[i].getAttribute('name') + '"' + ':' + '"' + input[i].value + '"';
            }
        } //for loop ends

        //var data = JSON.stringify({"student_name": name, "roll_no": email});
        data2 = JSON.stringify({
            "data": data
        });
        //console.log(JSON.parse(data2).data);
        let dd = JSON.parse(data2).data;
        return ('{' + dd + '}');
    } //get_form_data() function ends

    function display_errors(errors) {
        console.log('reg_erors');

        let error_div = document.getElementById("errors_for_registration");
        error_div.style.display = 'inline-block'
        error_div.innerHTML = 'Please fix given below errors...';
        for (let i = 0; i < errors.length; i++) {
            error_div.innerHTML += '<li>' + errors[i] + '</li>';
            //console.log(errors[i]);
        }
    }

    //reset previosly defined errors
    function reset_errors() {
        let error_div = document.getElementById("errors_for_registration");
        error_div.innerHTML = '';

    }

    // When AJAX request is in progress then show loading in button
    function show_loading() {
        submit_btn.disabled = true;
        submit_btn.style.backgroundColor = '#c3c3ae';
        submit_btn.value = 'loading...';

    }


    // When AJAX request completed then stop loading in button
    function hide_loading() {
        submit_btn.disabled = false;
        submit_btn.style.backgroundColor = '#1f4a4d';
        submit_btn.value = 'submit';

    }

    /* It converts the text values which is returned by the server into JSON */
    function show_json(data) {
        let jsonn = JSON.parse(data);
        return jsonn;
    }

    // call this function whenever submit button cilcks
    function process_registration() {
        // Prevents multiple AJAX request.
        if (request_in_progess) {
            return;
        }

        request_in_progess = true;
        show_loading();

        let xhr = new XMLHttpRequest();
        xhr.open("POST", './student/process/student_registration_process.php', true);
        xhr.setRequestHeader('X-Requested-with', 'XMLHttpRequest');

        //--For POST request
        xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');

        xhr.onreadystatechange = function() {
            console.log(xhr.readyState, xhr.status);

            if (xhr.readyState == 4 && xhr.status == 200) {
                hide_loading();
                //console.log(xhr.responseText);
                let json = show_json(xhr.responseText);
                if (json.hasOwnProperty('errors') && json.errors.length > 0) {
                    reset_errors();
                    display_errors(json.errors);
                } else {
                if(json.hasOwnProperty('registration') && json.registration === true){
                    window.location.href = './student/nsa.php';
                }
                }

                // It means request has completed.
                request_in_progess = false;
            }

        };


        /* Sending the request */
        xhr.send(get_form_data());
    } // process_registration() function ends



    //addEventLinstener for click on a button
    submit_btn.addEventListener('click', function(e) {
        e.preventDefault();
        //console.log('clicked');
        process_registration();
    }, false);
      }

</script>
<!-- AJAX request for new student registration --ENDS------------------------->
<!-- ------------------------------------------------- -->
<!-- AJAX request for login of new student --STARTS -->
<!-- JAVASCRIPT----------------------  -->
<script>

    // if user already logged-in then skip the javascript.
    if(student_account_modal !== null){

    let login_btn = document.getElementById('login_btn');
    //let div1 = document.getElementById('profile');
    //var pagination,pagination_length;

    let request_in_progess_for_login = false;


    function get_form_data_for_login() {
        let input = document.querySelectorAll('#student_login input');
        let input_length = input.length;
        let data = '';
        let data2;

        for (let i = 0; i < input_length; i++) {
            // prevent comma for last value.
            if ((i + 1) < input_length) {
                data += '"' + input[i].getAttribute('name') + '"' + ':' + '"' + input[i].value + '"' + ',';
            } else {
                data += '"' + input[i].getAttribute('name') + '"' + ':' + '"' + input[i].value + '"';
            }
        } //for loop ends

        //var data = JSON.stringify({"student_name": name, "roll_no": email});
        data2 = JSON.stringify({
            "data": data
        });
        //console.log(JSON.parse(data2).data);
        let dd = JSON.parse(data2).data;
        return ('{' + dd + '}');
    } //get_form_data_for_login() function ends

    function display_errors_for_login(errors) {
        console.log('login_erors');
        let error_div = document.getElementById("errors_for_login");
        error_div.style.display = 'inline-block'
        error_div.innerHTML = 'Please fix given below errors...';
        for (var i = 0; i < errors.length; i++) {
            error_div.innerHTML += '<li>' + errors[i] + '</li>';
            //console.log(errors[i]);
        }
    }

    //reset previosly defined errors
    function reset_errors_for_login() {
        let error_div = document.getElementById("errors_for_login");
        error_div.innerHTML = '';

    }

    // When AJAX request is in progress then show loading in button
    function show_loading_for_login() {
        login_btn.disabled = true;
        login_btn.style.backgroundColor = '#c3c3ae';
        login_btn.value = 'loading...';

    }



    // When AJAX request completed then stop loading in button
    function hide_loading_for_login() {
        login_btn.disabled = false;
        login_btn.style.backgroundColor = '#1f4a4d';
        login_btn.value = 'submit';

    }

    // call this function whenever submit button cilcks
    function process_login() {
        // Prevents multiple AJAX request.
        if (request_in_progess_for_login) {
            return;
        }

        request_in_progess_for_login = true;
        show_loading_for_login();

        let xhr = new XMLHttpRequest();
        xhr.open("POST", './student/process/student_login_process.php', true);
        xhr.setRequestHeader('X-Requested-with', 'XMLHttpRequest');

        //--For POST request
        xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');

        xhr.onreadystatechange = function() {
            console.log(xhr.readyState, xhr.status);

             if (xhr.readyState == 4 && xhr.status == 200) {
                hide_loading_for_login();
               let json = show_json(xhr.responseText);
                // console.log(xhr.responseText);
                console.log(json);

                if (json.hasOwnProperty('errors') && json.errors.length > 0) {
                    reset_errors_for_login();
                    display_errors_for_login(json.errors);
                } else {
                    console.log();
                    if(json.hasOwnProperty('login') && json.login === true){
                    window.location.href = './student/nsa.php';
                }
                }

                // It means request has completed.
                request_in_progess_for_login = false;
                 }

        };


        /* Sending the request */
        xhr.send(get_form_data_for_login());
    } // process_login() function ends



    //addEventLinstener for click on a button
    login_btn.addEventListener('click', function(e) {
        e.preventDefault();
        console.log('clicked');
        process_login();
    }, false);
        }

</script>
<!-- AJAX request for login of new student --ENDS------------------------->

<script>
    if(student_account_modal !== null){
        //when we refresh the captcha then clear the previous inputed value for captcha entered by user.
        let refresh_link = document.querySelectorAll('.captcha a');
        function refresh(e) {
           if (e.tagName == 'INPUT') {
            e.value = '';
           }
        }
        for (let i = 0; i < refresh_link.length; i++) {
            refresh_link[i].addEventListener('click', function(e){

                refresh(e.target.parentElement.parentElement.children[1]);

            },false);
        }
}


    </script>

<!-- FOOTER -->
<?php include(SHARED_PATH . '/public_footer.php'); ?>
