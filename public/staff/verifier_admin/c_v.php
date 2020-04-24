<?php require_once('../../../private/initialize.php');
 ?>

<?php
// if not loggedin then redirect back to '/staff/main_admin/md_login.php' page.
// require_login(url_for('/staff/main_admin/md_login.php'));
?>
<?php require_once(SHARED_PATH . '/staff_header.php'); ?>

<style >
	

       
</style>
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
                        <span class="employe_ad_span">C Verifier: DK sachan</span>
                        <li class="nav-item" style="position: relative;">
                            <a class="nav-link active" id="Not-Verified-Stu-tab" data-toggle="tab" href="#Not-Verified-Stu" role="tab" aria-controls="Not-Verified-Stu" aria-selected="true">Not Verified Stu.</a>
                        </li>
                        <sup><span style="font-size: 12px;position: absolute;top: -3px;right: -2px;" class="badge badge-primary">9</span></sup>

                        <li class="nav-item">
                            <a class="nav-link" id="Verifing-stu-tab" data-toggle="tab" href="#Verifing-stu" role="tab" aria-controls="Verifing-stu" aria-selected="false">Verifing stu.</a>
                        </li>
                         <sup><span style="font-size: 12px;position: absolute;top: -3px;right: -2px;" class="badge badge-danger">339</span></sup>
                        <li class="nav-item">
                            <a class="nav-link" id="Verified-stu-tab" data-toggle="tab" href="#Verified-stu" role="tab" aria-controls="Verified-stu" aria-selected="false">Verified stu.</a>
                        </li>
                         <sup><span style="font-size: 12px;position: absolute;top: -3px;right: -2px;" class="badge badge-success">39</span></sup>

                     


        <div  class="contact_button_clickco  " style="position: absolute;top: 0px;right: 25px;z-index: 130;"> 
   <ul style="position: absolute;top: 0px;right: 0px;z-index: 131;">
      

            <li  class="All-Stu-mail" title="Send mail to all student">   <a >    <i class="fa fa-envelope-o" aria-hidden="true"></i> </a></li>
           
          </ul>
      </div>

                    </ul>
                    <div class="tab-content p-1" id="myTabContent" style=" height: 90vh; width: 99%;margin-top: 5px;">
                    	   <!-- For not verified stu [tab]  -->
                         <div class="tab-pane show active" id="Not-Verified-Stu" role="tabpanel" aria-labelledby="Not-Verified-Stu-tab"> not verified stu
                             <a href="view_stu.php">view_stu. page</a>
                         </div>
                            <!-- For verifing stu [tab]  -->
                            <div class="tab-pane " id="Verifing-stu" role="tabpanel" aria-labelledby="Verifing-stu-tab">verifing stu  </div>
                            <!-- For verified stu [tab]  -->
                            <div class="tab-pane " id="Verified-stu" role="tabpanel" aria-labelledby="Verified-stu-tab"> verified stu </div>
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
        <script src="../../js/script.js"></script>


<!-- KAMAL javascript for AJAX -->
<!-- AJAX request to show all subadmins --STARTS -->
<!-- JAVASCRIPT----------------------  -->
   <!--  <script>
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




    </script>-->
<!-- AJAX request to show all subadmins --ENDS------------------------->

<!-- JAVASCRIPT for captcha -->
<!-- <script>
    let input = document.getElementById('input_for_captcha');
    let refresh_img = document.getElementById('refresh_icon');
    function load_new_captcha(){
        input.value = '';
    }
    refresh_img.addEventListener('click',load_new_captcha,false);
</script>-->
<!-- ------------------------------->
<!-- FOOTER -->
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
  