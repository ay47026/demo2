<?php require_once('../../private/initialize.php');?>

<?php
 // If not loggedin then redirect back to '/public' page.
 require_login(url_for('/'));
 ?>

<?php
 // unset($_SESSION);
// Checking for previous filled tables
$previous_checking = new CheckAllStudentDetail;
$get_array = $previous_checking->checking();
// print_array_using_pre_tag($get_array);

foreach ($get_array as $table_name => $boolean) {
    
        switch ($table_name) {
            case 'AllotmentDetails':
                if($boolean == 1){
                    // get previous data from table.
                    $fk_id = $session->get_id();
                    $allotment_details = StudentAllotmentDetails::find_by_attribute($set = ['attribute' => 'fk_id', 'id' => $fk_id]);
                }else{
                    $allotment_details = new StudentAllotmentDetails;
                }
                break;

            case 'PersonalDetails':
                if($boolean == 1){
                    // get previous data from table.
                    $fk_id = $session->get_id();
                    $personal_details = StudentPersonalDetails::find_by_attribute($set = ['attribute' => 'fk_id', 'id' => $fk_id]);
                }else{
                    $personal_details = new StudentPersonalDetails;
                }
                break;


            case 'PhotoSign':
                if($boolean == 1){
                    // get previous data from table.
                    $fk_id = $session->get_id();
                    $photo_details = StudentPhotoDetails::find_by_attribute($set = ['attribute' => 'fk_id', 'id' => $fk_id]);

                }else{
                    $photo_details = new StudentPhotoDetails;
                    // print_r();
                }
                    $bytes = $photo_details->get_max_file_size();
                    $max_file_size = $photo_details::convertFromBytes($bytes);
                break;

            case 'LastEducationDetails':
                if($boolean == 1){
                    // get previous data from table.
                    $fk_id = $session->get_id();
                    $education_details = StudentEducationDetails::find_by_attribute($set = ['attribute' => 'fk_id', 'id' => $fk_id]);
                }else{
                    $education_details = new StudentEducationDetails;
                }
                break;

            case 'FeeDetails':
                if($boolean == 1){
                    // get previous data from table.
                    $fk_id = $session->get_id();
                    $dynamic_obj = 'Student' . $get_array['fee_type'];
                    $bank_draft_details = $dynamic_obj::find_by_attribute($set = ['attribute' => 'fk_id', 'id' => $fk_id]);
                }else{
                    // $dynamic_obj = 'Student' . $get_array['fee_type'];
                    // $gaurdian_details = new $dynamic_obj;
                    $bank_draft_details = new StudentBankDraftDetails;
                }
                break;
            

            case 'GaurdianDetails':
                if($boolean == 1){
                    // get previous data from table.
                    $fk_id = $session->get_id();
                    $gaurdian_details = StudentGaurdianDetails::find_by_attribute($set = ['attribute' => 'fk_id', 'id' => $fk_id]);
                }else{
                    $gaurdian_details = new StudentGaurdianDetails;
                }
                break;


            case 'FinalSubmitDetails':
                if($boolean == 1){
                    // get previous data from table.
                    $fk_id = $session->get_id();
                    $final_submit_details = StudentFinalSubmit::find_by_attribute($set = ['attribute' => 'fk_id', 'id' => $fk_id]);
                }else{
                    $final_submit_details = new StudentFinalSubmit;
                }
                break;
            
            default:
                # code...
                break;
        }   
}
?>

<?php
require_once(SHARED_PATH . '/student_header.include.php');
?>
<!-- -----------[]-------------------------- -->
<!-- -----------[]-------------------------- -->

    <div class="row  p-0 m-0 w-100 d-flex flex-row justify-content-center " style=" background-color: whitesmoke;"><span style="
           color: #1f4a2d;
                font-weight:660;
            font-size: 18px;word-spacing: 4px;">NEW STUDENT ADMISSION FORM</span></div>
    <div class="row p-0 m-0">
        <div class=" col-3 p-0 m-0 " style=" background-color: whitesmoke;" id="stick_left_div">
            <span style=" color:#1f4a4d;opacity:0.5;  font-weight:660; font-size: 1Spx;margin-left:20%;padding:1px;" class="desktop_text">Fill form step by step</span>
            <div class="nav flex-column nav-pills pl-5" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link table_left_nav" id="v-pills-step1-tab" href="#v-pills-step1" role="tab" aria-controls="v-pills-step1" aria-selected="true"><span> 1</span> <span class="desktop_text">Allotment details</span></a>
                <a class="nav-link table_left_nav " id="v-pills-step2-tab" href="#v-pills-step2" role="tab" aria-controls="v-pills-step2" aria-selected="false"><span> 2</span> <span class="desktop_text">Personal details</span></a>
                <a class="nav-link table_left_nav " id="v-pills-step3-tab" href="#v-pills-step3" role="tab" aria-controls="v-pills-step3" aria-selected="false"><span> 3</span> <span class="desktop_text">Photo sign</span></a>
                <a class="nav-link table_left_nav " id="v-pills-step4-tab" href="#v-pills-step4" role="tab" aria-controls="v-pills-step4" aria-selected="false"><span> 4</span> <span class="desktop_text"> Last edu. details </span></a>
                <a class="nav-link table_left_nav " id="v-pills-step5-tab" href="#v-pills-step5" role="tab" aria-controls="v-pills-step5" aria-selected="false"><span> 5</span> <span class="desktop_text">Fee details</span></a>
                <a class="nav-link table_left_nav" id="v-pills-step6-tab" href="#v-pills-step6" role="tab" aria-controls="v-pills-step6" aria-selected="false"><span> 6</span> <span class="desktop_text">Gaurdian details</span></a>
                <!-- new code document list strat -->
                <a class="nav-link table_left_nav" id="v-pills-step7-tab" href="#v-pills-step7" role="tab" aria-controls="v-pills-step7" aria-selected="false"><span> 7</span> <span class="desktop_text">Document list</span></a>
                  <!-- new  code document list end -->
                <a class="nav-link table_left_nav" id="v-pills-step8-tab" href="#v-pills-step8" role="tab" aria-controls="v-pills-step8" aria-selected="false"><span> 8</span> <span class="desktop_text">Final submit</span></a>
                  <!-- new  code preview end -->
                <a class="nav-link table_left_nav" id="v-pills-step9-tab" href="#v-pills-step9" role="tab" aria-controls="v-pills-step9" aria-selected="false"><span> 9</span> <span class="desktop_text">Preview</span></a>


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

                 <!-- ** INCLUDE A HTML CONTENT of Document list ** -->
                <?php
                require_once(PUBLIC_PATH . '/student/includes/document_list.php');
                 ?>
                 
                 <!---------------------------------->

                 <!-- ** INCLUDE A HTML CONTENT of FinalSubmit ** -->
                <?php
                require_once(PUBLIC_PATH . '/student/includes/final_submit.php');
                 ?>
                 <!---------------------------------->
                 
                    <!-- ** INCLUDE A HTML CONTENT of preview ** -->
                <?php
                require_once(PUBLIC_PATH . '/student/includes/preview.php');
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
    <!-- Yadav student form validation for nsa.php -->
    <script src="<?php echo url_for('/js/c_script.js');?>"></script>

    <!-- KAMAL AJAX FOR full student details---------------STARTS -->
    <script>
     
    window.addEventListener("DOMContentLoaded", function() {
        var default_show, json_table_name, success_image;
        var all_nav_link_length,right_tab,all_nav_link;
        var photo, signature;

        // used for final submit
        let  url2 = './process/student_final_submit_process.php';
        let final_submit = document.getElementById('v-pills-step7-tab');
        let dynamic_name = document.getElementById('show_dynamic_name'); 
        let dynamic_date = document.getElementById('final_submit_date');
        
        // getting all submit buttons from FORM
        var submit_btn = document.getElementsByClassName('student_full_detail_btn');
        

        // The very first step is to identify that how many tables have
        // have already filled completly.
        //* If no table filled yet then the very first table will be fill by the user.
        //* If table 1 has already filled then -
        //* table 2 will be the default page which user see.

        function show_green_symbol(i){
            // all_nav_link[i].removeChild(create_img);
            // => Very IMPORTANT step...
            // prevents multi insertion of green image.

            let green_image = document.querySelector('#v-pills-step' + ++i + '-tab' + ' .green_image');
            
            if(green_image === null){
                let create_img = document.createElement('img');
                create_img.src=success_image;
                create_img.className='green_image';
                create_img.style.float = 'right';
                all_nav_link[--i].appendChild(create_img);
            }
        }

            function access_process(json){
                // json_to_array = Object.keys(json).map(function(_) { return json[_]; })[0];
                json_to_array = Object.keys(json.has_access).map(function(_) { return json.has_access[_]; });
                //console.log(json_to_array[6]);

                all_nav_link = document.getElementsByClassName('table_left_nav');
                all_nav_link_length = all_nav_link.length;
                right_tab = document.getElementsByClassName('tab-pane');
                default_show  = json.default;
                json_table_name = json.table_name;
                success_image = json.success_image;

                // removing the element from the array.
                if ("indexOf" in Array.prototype){
                    let index = json_to_array.indexOf('BankDraftDetails');
                    json_to_array.splice(index, 1);
                    // console.log(json_to_array);
                }else{
                    alert('Your browser does not support all features...\n please use another browser');
                }

                for(let i = 0; i< json_to_array.length; i++){
                    // console.log(json.has_access,json_to_array[i]);

                    
                    if(json_to_array[i] == 1){
                        
                         // console.log('json_to_array.length = ' + json_to_array.length);
                        show_green_symbol(i);
                        if(i == 2){
                            photo = document.querySelector('#v-pills-step3 .stu-photo-upload-view');
                            signature = document.querySelectorAll('.stu-sign-upload-view');
                            photo.src = json.uploads_path + json.photo_name;
                            photo.style.width = '60%';
                            
                            signature.forEach(function(element){ 
                            element.src = json.uploads_path + json.signature_name;
                            element.style.width = '60%';
                        }
                            );
                            
                            // signature.src = json.uploads_path + json.signature_name;
                            // signature.style.width = '60%';
                            // console.log(photo, signature);

                        }
                        // console.log(json_to_array.length);

                        if(i == 6 && json.default == 7){
                            setTimeout(function() {
                            // alert('Your form has completely filled.');
                        },10);
                            
                        }
                        submit_btn[i].textContent = 'Update';
                    }else{
                        // for loop will jump to next element if the current table is not filled yet.
                        continue;
                    }
                }

                for(let i=0; i< all_nav_link_length; i++){

                    if(all_nav_link[i].classList.contains('active') || right_tab[i].classList.contains('show') || right_tab[i].classList.contains('active')){
                        //*************
                        // TODO : uncomment after developement
                        //*************

                        all_nav_link[i].classList.remove('active');
                        right_tab[i].classList.remove('active', 'show');

                }
                    // Show the default open tab to fill their data.
                    if(i == default_show){
                    // console.log(all_nav_link_length, all_nav_link[i]);
                                        // reseting

                        all_nav_link[i].classList.add('active');
                        right_tab[i].classList.add('active', 'show');
                    
                }
                    if(i<= default_show){
                        // User can access
                        all_nav_link[i].setAttribute('data-toggle','pill');
                        all_nav_link[i].style.cursor ='pointer';
                        

                        // console.log(create_img);
                    }else{
                        // User can NOT access
                        all_nav_link[i].style.cursor ='default';

                        //*************
                        // TODO : remove below lines after developement
                        //*************
                        //all_nav_link[i].setAttribute('data-toggle','pill');
                    }
                    
                } // for

                //* We can't fetch the variables initialized in Ajax, becasue AJAX is
                //by-default asynchronous process.
                //* To fetch those varibales, we need to turn the AJAX asynchronous to synchronous.
                /*
                |----------------\
                |***EXAMPLE       )
                |----------------/
                var it_works = false;

                $.ajax({
                  url: 'some_file.php',
                  async: true,  # makes request synchronous
                  success: function() {
                    it_works = true;
                  }
                });

                alert(it_works);

                ***OUTPUT - false
                */

                if(final_submit.classList.contains('active') &&  default_show == 6){
                    show_full_name();
                    //final_submit.addEventListener('click', show_full_name, false);
    }
            } // access_process()


        function run_it_first(ascynnc = true){
            console.log('The very first time function ran......');
            let xhr = new XMLHttpRequest();
            xhr.open("GET", './process/student_access_process.php', ascynnc);
            xhr.setRequestHeader('X-Requested-with', 'XMLHttpRequest');

            xhr.onreadystatechange = function() {

                // console.log(xhr.readyState, xhr.status);

                if (xhr.readyState == 4 && xhr.status == 200) {
                    
                    console.log('xhr.responseText = '+ xhr.responseText);
                    //alert('message?: DOMString');
                    let json = JSON.parse(xhr.responseText);
                   access_process(json);

                     // console.log(json);
                     // console.log(json.has_access);
                     // console.log(json.default);


                    // // if (json.hasOwnProperty('errors') && json.errors.length > 0) {
                    //     reset_errors();
                    //     display_errors(json.errors);
                    // }else if (json == 'login_again') {
                    //   //window.location.href = '../';
                    // } else if(!json.hasOwnProperty('errors') && ((json != 'login_again') && (json != 'data_added'))){
                    //   alert('Something went wrong');
                    //   //window.location.href = '../';
                    // }else if (json == 'data_added') {
                    //   // code for it...
                    //   hide_errors();
                    //   alert(success_alert);
                    // }
                    
                } // main if

            }; // onreadystatechange()

            /* Sending the request */
            xhr.send();
            } // run_it_first()

            run_it_first();
      

            //-------------------------------------------------\
            //              When save button cilcks             )
            //-------------------------------------------------/

    
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

            case 'photo_details':
                form_details = document.getElementById("photo_details");
                error_div = document.getElementById("errors_for_photo_details");
                url = './process/student_photo_details_process.php';
                success_alert = 'Photos added succesfully';
                break;

            case 'bank_draft':
                form_details = document.getElementById("bank_draft");
                error_div = document.getElementById("errors_for_bank_draft_details");
                url = './process/student_bank_draft_bank_details_process.php';
                success_alert = 'Bank-draft bank details added succesfully';
                break;

            case 'SBIeCollect':
                form_details = document.getElementById("SBIeCollect");
                error_div = document.getElementById("errors_for_SBIeCollect_details");
                url = './process/student_SBIeCollect_bank_details_process.php';
                success_alert = 'SBI-e-Collect bank details added succesfully';
                break;

            case 'online_transaction':
                form_details = document.getElementById("online_transaction");
                error_div = document.getElementById("errors_for_online_transaction_details");
                url = './process/student_online_transaction_bank_details_process.php';
                success_alert = 'Online-transaction bank details added succesfully';
                break;

            case 'any_other':
                form_details = document.getElementById("any_other");
                error_div = document.getElementById("errors_for_any_other_details");
                url = './process/student_any_other_bank_details_process.php';
                success_alert = 'Any-other bank details added succesfully';
                break;

            case 'final_submit_details':
                form_details = document.getElementById("final_submit_details");
                error_div = document.getElementById("errors_for_final_submit_details");
                url = './process/student_final_submit_process.php';
                success_alert = 'Final submit added succesfully';
                break;

            

                default:
                // statements_def
                break;
        } // switch()
        } // if
    } // set_dynamic_variables()


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
        // alert('success_alert____________hide_error_function');
        error_div.style.display = 'none';
    }

    function set_original_btn_value(e){
        original_btn_value = e.target.textContent;
    }

    // Don't remove the last space from `fill` value which is '#fff '
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

    //****************************
    // ...


    // call this function whenever submit button cilcks
    function process_to_save_data(e) {
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
                console.log('xhr.responseText___________________________________');
                console.log(xhr.responseText);

                let json = show_json(xhr.responseText);
                console.log('json___________________________________');
                 console.log(json);
                if (json.hasOwnProperty('errors') && json.errors.length > 0) {
                    reset_errors();
                    display_errors(json.errors);
                }else if (json == 'login_again') {
                  window.location.href = '../';
                  alert('Please log in again....!');
                  return false;
                } else if(!json.hasOwnProperty('errors') && ((json != 'login_again') && (json != 'data_added'))){
                  alert('Something went wrong');
                  //window.location.href = '../';
                }else if (json == 'data_added') {
                  // code for it...
                  hide_errors();
                  setTimeout(function() {
                  alert(success_alert);
                  },10);
                }
            
                // It means request has completed.
                request_in_progess = false;
                if(!json.hasOwnProperty('errors')){
                run_it_first();
            }
            } // main if

        }; // onreadystatechange()

        let form_data = new FormData(form_details);
            // console.log(json_table_name,default_show);

            // for ([key, value] of form_data.entries()) {
            //     console.log(key , value);
            // } // for

        
        if ((e.target.getAttribute('data-src') == 'photo_details')) {
        for ([key, value] of form_data.entries()) {
            //console.log(key + ': ' + value);
            if(key == 'MAX_FILE_SIZE') continue;
            //console.log(key, value.name);
            form_data.append(key,value.name);
            if(key == 'Sign'){
            // This step is very important because it prevennts from infinite loop
                break;
            }
        } // for
    } // if
        /* Sending the request */
        xhr.send(form_data);

    } // process_to_save_data() function ends


    // addEventLinstener for click on a save button for saving the details (7 tables)
    for(let i=0; i< submit_btn.length; i++){
    submit_btn[i].addEventListener('click', function(e) {
        e.preventDefault();
        set_dynamic_variables(this);
        process_to_save_data(e);
    }, false);
}

// KAMAL AJAX FOR full student details---------------ENDS -->

// KAMAL AJAX FOR final_submit ---------------STARTS -->

        

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
                // console.log(xhr.responseText);
                let json = show_json(xhr.responseText);
                // console.log(json);
                
                show_dynamic_name_and_date(json);

                // It means r'equest has completed.
                request_in_progess = false;
            }
        } // onreadystatechange()
        xhr.send();
    } // show_full_name()

    // console.log(json_table_name,default_show);


    


},false);

    </script>
<!-- KAMAL AJAX FOR final_submit---------------ENDS -->

</body>

</html>
