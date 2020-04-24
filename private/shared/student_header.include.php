<?php
  if(!isset($page_title)) { $page_title = 'Student Page'; }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('/stylesheets/bootstrap.css');?>">
    <!--   <link rel="stylesheet" type="text/css" href="campus/style.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('/stylesheets/jquery-ui.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('/stylesheets/animate.css');?>">
   
     <!-- <script src="https://kit.fontawesome.com/e8019bc349.js"></script> -->


    <!-- <script src="https://kit.fontawesome.com/e8019bc349.js"></script>-->


    <!-- <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>



    <title>CMS <?php if(isset($page_title)) { echo '- ' . h($page_title); } ?></title>
    <style>
        /*given below CSS has already been declayred in '/public_header_02.php' and 'style.css'*/
        /*KAMAL css code --STARTS--*/

        #message {
            color: #0B61A5;
            background: #9dd879;
            border: 1px solid #0B61A5;
            padding: 5px;
            margin-bottom: 10px;
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

       /* .dropdown:hover>.dropdown-menu {
            display: block;
        }

        .dropdown>.dropdown-toggle:active {
            /*Without this, clicking will make it sticky
            pointer-events: none;
        }*/
        .dropdown-menu {
    min-width: 6rem;
}
        .navbar {
            background-color: #1f4a4d;
            padding: 0 !important;
      /*      height: 45px;*/
        }
        
 .navbar ul li  a{
            cursor: pointer;
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

/* header icon */
 .header-icons ul{
           
         
        display: flex;
           margin: 0;
           padding: 0;
        
        }
        
        .header-icons ul li{
            list-style: none;
                
        }
        .header-icons ul li a{
            position: relative;
            width: 32px;
            text-decoration: none;
            height: 32px;
            background: #f1f1f1;
            display: block;
            text-align: center;
            margin: 0 5px;
            margin-bottom: 10px;
            border-radius: 6px;
            padding: 3px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.3);
            background: linear-gradient(0deg, #ddd, #fff);
            transition: .3s;
            
        }
       .header-icons ul li a:hover{
         box-shadow: 0 2px 5px rgba(0,0,0,0.3);
           
        }
        .header-icons ul li a .fa{
            width: 100%;
            height: 100%;
            display: block;
            background: #ff0;
              background: linear-gradient(0deg, #fff, #ddd);
            border-radius: 6px;
            line-height: calc(27px - 1px);
            font-size: 18px;
            color: #262626;
            transition: .5s;
            
        }
        
     .stu_profile_main_div{
              margin-top: 0px;
              padding: 4px !important;
              position: sticky !important;
               top:0px;left: 5px;
               z-index: 200;
                background-color: #1f4a4d;

            }
        
        .header-icons ul li:nth-child(1) a:hover .fa
        {
            color: #3b5998;
        }
        
        .header-icons ul li:nth-child(2) a:hover .fa
        {
            color: #00aced;
        }
         .show_v_e_div span{
              font-size: 16px;
              font-family: sans-serif;
              font-weight: 500;
              color: black;
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
            .custom-file-label{
                margin-left: 10px;
               margin-bottom: 10px;
                width: 90% !important;
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
               
                padding-left: 4px;
            }
            .navbar ul li a{
                color: lightgray !important;
              
            }
            .stu_profile_main_div{
              margin-top: 0px;
              padding: 4px !important;
              position: sticky !important;
               top:0px;left: 5px;
               z-index: 200;
                background-color: #1f4a4d;

            }
            #stu_header_collapse a{
                border-bottom: 0.5px solid #0b2a2b;
                width: 100%;

             
            }
            #stu_header_collapse li.selected{
              font-weight: 800;
              font-size: 18px;
            }
             #stu_header_collapse li.selected a{
              color: #fff !important;
            }
             #stu_header_collapse {
             background-color: #1f4a4d;
               padding-left: 5px;
               width: 100% !important;
               box-shadow: 0 4px 6px rgba(0,0,0,0.3);
              
           
            }
               .navbar {
            padding-left:0 !important;
              padding-right:0 !important;
              margin-bottom: 0 !important;
        }
        .menu_bar_btn_div{
            display: block !important;
          

        }
}
 .dropdown-menu span:hover{
         font-weight: 600;

 }
  .dropdown-menu span{
     cursor: pointer;

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
        .card-body span{
            font-size: 14px;font-family: sans-serif;
            text-align:justify !important;
        }

    </style>
</head>

<body>

    <?php if ($session->is_logged_in()) { ?>
    <!--  <navigation style="float: right;position: fixed;right: 0;z-index: 100;background-color: #ffc10799;padding-right: 5px;backdrop-filter: saturate(180%) blur(15px);">
      <ul style="padding-left: 25px;">

          <li>User: <?php echo $session->email . ' | student';  ?></li>
        <li><a href="<?php //echo url_for('/staff/main_admin/index.php');?>">Menu</a></li>
        <li><a href="<?php echo url_for('/student/logout.php'); ?>">Logout</a></li>
        <?php echo display_session_message(); ?>

      </ul>
    </navigation> -->
    <?php } ?>
    <?php echo display_session_message();
// print_r($session);
// echo $session->email;
//echo $_SESSION['id'];
    ?>

    <!-- ----------[]--------------------------- -->
    <!-- ----------[]--------------------------- -->


    <div class="row p-0 m-0" style="border-top:2px dashed #1f4a4d;position: ">
        <div class="col-2 pt-2"><img src="<?php echo url_for('/images/logo11.png'); ?>" id="img1" width="40%" style="float:right;"></div>
        <div class="col-8 d-flex flex-row justify-content-center "><img src="<?php echo url_for('/images/logo%20(2).png'); ?>" width="90%" height="80%" id="img3"></div>
        <div class="col-2 pt-2"><img src="<?php echo url_for('/images/logo%20(1).png'); ?>" id="img2" width="40%"></div>
    </div>

    <nav class="navbar navbar-expand-md pb-1 mt-4 ">

        <!-- student profile start -->
        <div class=" stu_profile_main_div d-flex justify-content-center align-items-center" style=" cursor: pointer;">

            <div class="show_profile_pic ml-2 mr-2" style="width: 40px ;height: 40px;  border-radius: 50%;">
                <img src="../../public/images/upload_pic.png" style="width: 40px ;height: 40px;border-radius: 50%;">
            </div>
            <div class="show_stu_name">
                <span style="color: white;font-size: 17px;font-weight: 600;font-family: sans-serif;">Abhishek yadav</span>
            </div>
            <div class="update_profile_div " style="display: none;">
    <div class="update_profile_box d-flex flex-column p-1 border justify-content-center align-items-center" style="position: absolute;top:40px;left:20px; border-radius:12px;z-index: 131;width: 300px;height: 280px;background-color: #fff;  box-shadow: 0 4px 6px rgba(0,0,0,0.3);">
 

 <div class="show_profile_pic ml-2 mr-2 p-1" style="width: 50px ;height: 50px;border-radius: 50%;border: 1px solid lightgray">
                <img src="../../public/images/upload_pic.png" style="width: 40px ;height: 40px;border-radius: 50%;">
            </div>

   <span style="color: #262626;font-size: 17px;font-weight: 600;font-family: sans-serif;">Abhishek yadav</span>
           <span style="margin-bottom: 5px;font-size: 15px;font-family:sans-serif; " class="mb-2"> ay47026@gmail.com</span>

              <button class="btn s-m-to-stu-btn  w-50 mt-3" id="s-m-to-stu-btn" name="" data-src="s-m-to-stu_details" >
              Update profile
              </button>

              <button class="btn s-m-to-stu-btn  w-25 mt-3" id="s-m-to-stu-btn" name="" data-src="s-m-to-stu_details" >
             Logout
              </button>

          </div>
</div>

        </div>
          <!-- student profile end -->

<div class="menu_bar_btn_div" style="display: none;position: sticky; top: 10px;right: : 5px;z-index: 200;">
    <button class="navbar-toggler d-flex mr-1 justify-content-center align-items-center" type="button" data-toggle="collapse" data-target="#stu_header_collapse" aria-controls="stu_header_collapse" aria-expanded="false" aria-label="Toggle navigation" style="width: 35px;border-radius:50%;box-shadow: 0 4px 6px rgba(255,255,255,0.3); height: 35px;margin-top: -9px;outline: none;" >
         <img src="../../public/images/icons8-menu%20(1).svg" class="navbar-toggler-icon" style="width: 38px;height: 38px;border-radius:50%;outline: none;margin-top: -5px;">
        </button>
</div>
        

        <div class="collapse  navbar-collapse justify-content-end"  id="stu_header_collapse" style=";">

            <ul class="navbar-nav">
           


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dashbord</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown02">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
              
                    </div>
                </li>
                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       
                    </a>
                   
                </li>
                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">News & Updates</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown02">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
              
                    </div>
                </li>
                             

            </ul>
                 <!-- <div  class="header-icons  " style="position: absolute;top: 0px;right: 25px;z-index: 130;"> 
              <ul style="position: absolute;top: 0px;right: 0px;z-index: 131;">
            <li  class="All-Stu-mail" title="Send mail to all student">   <a >   <img src="../../public/images/icons8-admin-settings-male-64.png" style="width:27px;height: 27px;">  </a></li>
           
          </ul>
      </div> -->
       <div  class="header-icons ml-2 mr-2 mt-1 " style=""> 
   <ul class="d-flex justify-content-end align-items-center" style="">
        
 
               <li  class="Stu_nsa_Support dropdown mr-1"  >   <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dropdown05">  <img src="../../public/images/help%20(1)%20(1).png" style="width:25px;height:25px"> </a>
                 <div class="dropdown-menu  dropdown-menu-left" aria-labelledby="dropdown05" style=" color: white;font-family: sans-serif;font-size: 16px;">
                    <div class="d-flex pl-2 flex-column justify-content-start align-items-start">
                          <span class="Stu_nsa_Support_help mb-1 w-100"  >Help</span> 
                                 <span class="Stu_nsa_Support_feedback" data-toggle="modal" data-target="#send_feedback_modal">Feedback</span> 
                    </div>
                      
        
              
                    </div>
              </li>
             
              <li  class="verifire_panel " data-toggle="modal" data-target="#verifire_panel_modal"title="verifire panel" style="position: relative;">  <a >  <img src="../../public/images/verifire.png" style="width:27px;height:25px">    </a>
                 <sup><span style="font-size: 12px;position: absolute;top:-47px;right: -50px;" class="badge badge-danger">39</span></sup>
              </li>

   
           
          </ul>
      </div>
        </div>
    </nav>

<div class="modal fade " id="verifire_panel_modal"  role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
         <div class="modal-header pt-1 pb-0 d-flex justify-content-center align-items-center" style="background-color: #1f4a4d;color: #fff">
        <h5 class="modal-title" id="exampleModalLongTitle" style="font-family: sans-serif;">Verifire Panel</h5>
        
      </div>
      <div class="modal-body d-flex flex-column ">
       <h6 style="color: red;font-family: sans-serif;font-weight: 600"> Your form error in..</h6>

       <div class="show_v_e_div  d-flex flex-row justify-content-start align-items-start"> 
        <span >1   
        <span class="tab_name" style="color: #1f4a4d;cursor: pointer;font-weight: 600">&nbsp Attotment detais </span><span style="margin-top: 2px;">&nbsp -> </span>

           <span class="name_of_data"  style="">&nbsp Attotment number </span><span style="margin-top: 2px;">&nbsp -> </span>

           <span class="e_message" style=""> &nbsp Again jjaBDMJAKbjsbbmn db aasmbdi bsdaksbdkauuss  aduskdjb  fill you are not fill correctjjhiu</span>
       </span>
         
       </div>
       <div class="row mt-2 d-flex flex-column  justify-content-center align-items-center" >
           <span style="font-size: 14px;font-family: sans-serif;font-weight: 500;color: black">
               Contact us -- 1800 7222 3773 , for any query <span class="send_mail_to_verifire_click" style="color: #1f4a4d; cursor: pointer;font-weight: 600">Send mail</span>
           </span>
           <!-- send mail icon div -->
<div class="send-mail-to-verifire-div " style="display: none;">
    <div class="send-mail-to-verifire-box d-flex flex-column p-1 border justify-content-center align-items-center" style="width: 300px;height: 280px;background-color: #fff;  box-shadow: 0 4px 6px rgba(0,0,0,0.3);">
        <span class="send_mail_to_verifire_span" style="color: #1f4a4d; cursor: pointer;font-weight: 600">Write your query here...</span>
            <textarea class="send-mail-to-verifire-ta" style="width: 100%;border: 1px solid lightgray;" rows="8" ></textarea>

              <button class="btn s-m-to-stu-btn  w-25 mt-3" id="s-m-to-stu-btn" name="" data-src="s-m-to-stu_details" >
                  Send
              </button>

          </div>
</div>
       </div>

       

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      
      </div>
    </div>
  </div>
</div>

<!-- send feedback modal -->

<div class="modal fade " id="send_feedback_modal"  role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
         <div class="modal-header pt-1 pb-0 d-flex justify-content-center align-items-center" style="background-color: #1f4a4d;color: #fff">
        <h5 class="modal-title" id="exampleModalLongTitle" style="font-family: sans-serif;">Send Feedback</h5>
      
      </div>
      <div class="modal-body d-flex flex-column ">
          <textarea class="send-feedback-ta" placeholder="Describe your issue or share your ideas" style="width: 100%;border: 1px solid lightgray;" rows="8" ></textarea>



      </div>
      <div class="modal-footer">
        
                  <button type="button" class="btn btn-secondary" >send</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      
      </div>
    </div>
  </div>
</div>

<!-- student page help code -->
<div class="drag " style=" border-radius: 10px 10px 0 0; width: 350px;height: 470px; border: 1px solid gray;z-index:400;position: fixed; top: 160px;right: 10px ; box-shadow: 2px 5px 6px rgba(0,0,0,0.3);background-color: #F5F5F5;">
    <div class="dra  p-2 d-flex justify-content-between align-items-center" style="width: 350px;height: 40px; ;z-index:400;background-color: #146568;color: #fff;border-radius: 10px 10px 0 0;cursor: move;">
   
     <button type="button" class="close help-close-btn" data-dismiss="modal" aria-label="Close" style="width: 40px;height: 40px;">
          <span aria-hidden="true" style="color: #FFF;font-size: 40px;">&times;</span>
        </button>
</div>
<div class="help_content d-flex align-items-end justify-content-end w-100   p-0 m-0" style="height:430px  ">
    <div class="search_div  pl-2 pr-2 d-flex align-items-center justify-content-between pb-2 " style="position: relative; width: 100%;"  >
        <input  id="search_input" type="text" placeholder="Search.." style="width: 85%;height: 35px; padding-left:  5px;"><i class="fa fa-search" aria-hidden="true" style="position: absolute;top: 10px;right: 10px;width: 30px;height: 30px;cursor: pointer;"></i>
    </div>
   
</div>

</div>


<script >
    $(document).ready(function(){
        // 
// search srcipt of help
$(".Stu_nsa_Support_help").click(function(){
 
     $(".drag").removeClass("d-none");
$(".help-close-btn").click(function(){
    $(".drag").addClass("d-none");

});
});



$(document).ready(function(){
  $("#search_input").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".card ").filter(function() {
      $(this).toggle($(this).find("h6").text().toLowerCase().indexOf(value) > -1)
    });
  });
});

//drage script
$(function () {
        $(".drag").draggable({
            handle: ".dra",
             cursor: "move",
                containment: "body",
                scroll: false,
                
        });
})

        $(".stu_profile_main_div").click(function(){
          $(".update_profile_div").toggle();
        });
        $(document).on("click", ".send_mail_to_verifire_click", function(e){

  $(".send-mail-to-verifire-div").toggle('show',function(){
                            setTimeout(function(){
                              $(".send-mail-to-verifire-ta").focus();
                              }, 5);
                        });

});
        $(".Stu_nsa_Support_feedback").click(function(){
     
                            setTimeout(function(){

                              $(".send-feedback-ta").focus();
                              }, 600);
                        });
      
          // $(".send_mail_to_verifire_click").click(function(){
          //  $(this).css({"color","red"});
          //              $(".send-mail-to-verifire-div").toggle('show',function(){
          //                   setTimeout(function(){
          //                     $(".send-mail-to-verifire-ta").focus();
          //                     }, 5);
    });

    


    // Add active class to the current button (highlight it)
var header = document.getElementById("stu_header_collapse");
var nav_link = header.getElementsByClassName("nav-item");
var nav_link_length =nav_link.length;
for (var i = 0; i < nav_link_length; i++) {
  nav_link[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("selected");
  current[0].className = current[0].className.replace(" selected", "");
  this.className += " selected";
  });
}

</script>