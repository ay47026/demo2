<?php
$is_logged_in = $session->is_logged_in();
?>
<style >
     .val-error {
            height: 22px;
           
            color: red;
            font-size: 14px;
        display: none;
             margin-left: 5%;
            width: 100%;
            font-family: sans-serif;
            font-weight: 500;
          

        }
</style>

<div class="modal fade " id="account">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header border-0 d-flex align-items-center flex-column justify-content-center ">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: sticky;top: 0;right: 0;"><span aria-hidden="true">&times;</span></button>
                    <div class="row ">
                        <img src="<?php echo url_for('/images/logo11.png');?>">
                    </div>
                    <h5 class="modal-title" id="exampleModalLabel" style="font-size:28px;">Dr A.I.T.H</h5>

                </div>
                <?php if($is_logged_in === false){ ?>
                <div class="modal-body ">
                    <ul class="nav nav-tabs pl-5" style=" background-color: #1f4a4d;border:1px solid #1f4a4d;">
                        <li class="nav-item"><a class="nav-link active signin" href="#signin" data-toggle="tab">Registration</a></li>
                        <li class="nav-item"><a class="nav-link signup" href="#signup" data-toggle="tab">Login</a></li>
                    </ul>
                    <!--                start tab content-->
                    <div class="tab-content " style="overflow: hidden">

                        <div class="tab-pane active animated  p-2" id="signin">
                                <div class="row p-0 m-0 d-flex justify-content-center align-items-center">
                             <div id="errors_for_registration" class="error_in_form"></div>
                         </div>
                           

                            <form method='post' id='student_registration'>
                                
                                <div class="row mt-2 mb-2" >
                                    <div class="col-md-12  ">
                                        <div class="input-group" id="res-student-name">
                                            <div class="input-group-prepend"> <span class="input-group-text border "> Student name </span></div>
                                            <input type="text" name="student_name" id="student-name" class="form-control border " placeholder="Student name">
                                              
                                        </div>
                                    </div>
                                     <div class="val-error"  id="res-student-name-e">Please fill this field</div>

                                </div>
                                <div class="row mt-2 mb-2">
                                    <div class="col-md-12  ">
                                        <div class="input-group " id="res-Upse-Roll-No">
                                            <div class="input-group-prepend"> <span class="input-group-text border ">Upse Roll No. </span></div>
                                            <input type="number" name="roll_no" id="upse_ro_no" class="form-control border " placeholder="Upse Roll N0.">
                                        </div>
                                    </div>
                                    <div class="val-error"  id="res-Upse-Roll-No-e">Please fill this field</div>

                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12  ">
                                        <div class="input-group" id="res-Email">
                                            <div class="input-group-prepend"> <span class="input-group-text border "> Email</span></div>
                                            <input type="email" name="email" id="email" class="form-control border " placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="val-error"  id="res-Email-e">Please fill this field</div>
                                </div>

                                <div class="row mt-2 mb-2">
                                    <div class="col-md-12  ">
                                        <div class="input-group" id="res-Mobile-No">
                                            <div class="input-group-prepend"> <span class="input-group-text border "> Mobile No. </span></div>
                                            <input type="number" name="mobile_no" id="Mobile-No" class="form-control border " placeholder="Mobile No.">
                                        </div>
                                    </div>
                                    <div class="val-error"  id="res-Mobile-No-e">Please fill this field</div>
                                </div>

                                <div class="row mt-2 mb-2">
                                    <div class="col-md-12  ">
                                        <div class="input-group" id="res-Password">
                                            <div class="input-group-prepend"> <span class="input-group-text border "> Password </span></div>
                                            <input type="number" name="password" id="password" class="form-control border " placeholder="password">
                                        </div>
                                    </div>
                                    <div class="val-error"  id="res-Password-e">Please fill this field</div>
                                </div>

                                <div class="row mt-2 mb-2">
                                    <div class="col-md-12  ">
                                        <div class="input-group" id="res-Confirm-Password">
                                            <div class="input-group-prepend"> <span class="input-group-text border "> Confirm Password </span></div>
                                            <input type="number" name="confirm_password" id="confirm_password" class="form-control border " placeholder="confirm password">
                                        </div>
                                    </div>

                                    <div class="val-error"  id="res-Confirm-Password-e">Please fill this field</div>
                                </div>

                                 <!-- FOR CAPTCHA---------------- -->
                                            
                                <?php 
                                require(PUBLIC_PATH . '/shared/captcha.php');
                                 ?>
                                               
                                  <!-- CAPTCHA ENDS---------------->


                                <div class="row mt-2 d-flex align-items-center flex-column justify-content-center w-100">
                                    <!-- <input type="submit" class="form-control border mt-2 text-white w-25 " name="reg_submit" style="  background-color: #1f4a4d;" id="reg_btn" value="submit"> -->
                                    <button class=" btn form-control border mt-2 text-white w-25 student_reg_login d-flex flex-row justify-content-center align-items-center" id="reg_btn" name="reg_submit" style=" background-color: #1f4a4d;color:white" data-src="student_registration">submit</button>
                                    <p>If you Register then <span  class="login_a"  style="cursor: pointer;color: #1f4a4d">Login</span></p>
                                </div>
                            </form>
                        </div>
                        <!-- Rgistration form --ENDS-- -->

                        <div class="tab-pane animated " id="signup">
                            <!-- display error -->
                           <div class="d-flex row justify-content-center align-items-center ">
                                <div id="errors_for_login" class="error_in_form"></div>
                           </div>
                            <!-- login-form-----------------STARTS-- -->
                            <form id ="student_login" method="post" style="margin-top: 20px">

                                <div class="form-group d-flex align-items-center flex-column justify-content-center" >
                                    <input type="text" name='roll_no' class="form-control" id="user_id" aria-describedby="emailHelp" placeholder="roll no" style="width: 80% !important; height: 50px  !important;font-size:17px; box-shadow:none">
                                   
                                        
                                </div>
                                 <div class="col-12 ">
                                        <div class="val-error"  id="log-user_id-e">Please fill this field</div>
                                 </div>
                               

                                <div class="form-group d-flex align-items-center flex-column justify-content-center" >
                                    <input type="password" name="password" class="form-control" id="password_for_login" placeholder="Password" style="width: 80% !important; height: 50px !important;font-size:17px; box-shadow:none">

                               
                                </div>
                                <div class="col-12 ">
                                        <div class="val-error"  id="log-password_for_login-e">Please fill this field</div>

                             </div>

                                
                                <small id="emailHelp" class="form-text text-muted" style="margin-left:10%;">We'll never share your id with anyone else.</small>
                                 <!-- FOR CAPTCHA---------------- -->
                                            
                                <?php 
                                require(PUBLIC_PATH . '/shared/captcha.php');
                                 ?>
                                               
                                  <!-- CAPTCHA ENDS---------------->

                                <div class="modal-footer border-0 d-flex align-items-center flex-column justify-content-center ">

                                    <!-- <input type="submit" id="login_btn" class="btn " value="Login" name="login_btn" style=" background-color: #1f4a4d;color:white"> -->

                                    <button class="btn student_reg_login mb-2 d-flex flex-row justify-content-center align-items-center" id="login_btn" style=" background-color: #1f4a4d;color:white" name="login_btn" data-src="student_login">Login</button>
                                    <a href="#" style="  text-decoration: none;"> <span style="font-size:14px;color:black;">Password forgeted</span></a>
                                </div>
                            </form>
                            <p style="text-align:center">You did't register yet , <span class="register_a" style="cursor: pointer;color: #1f4a4d">Register now</span></p>
                        </div>
                    </div>
                    <!--                end tab content-->
                </div>
            <?php }else{
                $logout = '<div class="modal-body text-center">';
                $logout .= '<pre> You already logged-in, Please Logout first !</pre>';
                $logout .= '<img style= "width:14%;" src=' . url_for('/images/unavailable_symbolic.svg') .'><br><br>';
                $logout .= '<h3><a href=' . url_for('/student/nsa.php') . '>Go to Dashboard</a></h3>';
                $logout .= '<h4>OR</h4>';
                $logout .= '<h1><a href=' . url_for('/student/logout.php') . '>Logout</a></h1>';
                $logout .= '</div>';
                
                echo $logout;
            } ?>

            </div>
        </div>
    </div>
    <script >
        $(".login_a").click(function(){
            $(".signup").click();
        });
         $(".register_a").click(function(){
            $(".signin").click();
        });
         function display_error_text(v, e) {
    if (v.val() === "") {
        v.css("border", "1px solid red");
        e.css("display", "block");
    }
    v.click(function () {
        v.css("border", "");
        e.css("display", "none");
    });
}
$("#reg_btn").click(function(){
display_error_text($("#res-student-name"),$("#res-student-name-e"));
display_error_text($("#res-Upse-Roll-No"),$("#res-Upse-Roll-No-e"));
display_error_text($("#res-Email"),$("#res-Email-e"));
display_error_text($("#res-Mobile-No"),$("#res-Mobile-No-e"));
display_error_text($("#res-Password"),$("#res-Password-e"));
display_error_text($("#res-Confirm-Password"),$("#res-Confirm-Password-e"));
});

$("#login_btn").click(function(){
display_error_text($("#user_id"),$("#log-user_id-e"));
display_error_text($("#password_for_login"),$("#log-password_for_login-e"));
});
    </script>