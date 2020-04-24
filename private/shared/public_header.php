<?php
  if(!isset($page_title)) { $page_title = 'Public Page'; }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?php echo url_for('/stylesheets/bootstrap.css'); ?>" />
    <link rel="stylesheet" href="<?php echo url_for('/stylesheets/jquery-ui.css'); ?>" />
    <link rel="stylesheet" href="<?php echo url_for('/stylesheets/animate.css'); ?>" />



    <!-- <script src="https://kit.fontawesome.com/e8019bc349.js"></script> -->

    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:700&display=swap" rel="stylesheet">

    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo url_for('/js/jquery.bootstrap.newsbox.min.js'); ?>"></script>
    <!--  <script src="<?php echo url_for('/js/jquery-1.9.1.min.js'); ?>" /></script>-->

    <title>CMS <?php if(isset($page_title)) { echo '- ' . h($page_title); } ?></title>
    <style>
        /*KAMAL css code --STARTS--*/
        .error_in_form {
            display: none;
            border: 2px solid red;
            color: red;
            padding: 1em;
            margin-bottom: 1em;
            /* animation: ff 1s ease-in-out 0s 4;*/

        }

        footer {
            color:darkgray;
            font-size: 12px;
        }

        /* #account form .btn{
            height: 35px;
        }
*/
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
            padding: 0;
            margin: 0;
         
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


        .dropdown-toggle::after {
            content: none;
        }

        .carousel-indicators li {
            margin-top: 100px;
            border: 2px solid black;
            background: white !important;
            z-index: 2222;

            width: 15px !important;
            color: white;
            height: 15px !important;
            box-sizing: border-box;
            border-radius: 50%;



        }

        .input-group-prepend {
            width: 25% !important;
        }

        .input-group-prepend span {
            width: 100% !important;
        }

        .nav-tabs li a {
            color: white;
            font-weight: 600 !important;
        }

        .nav-tabs li a:active {
            color: black !important;
            font-weight: 700 !important;
        }

        .nav-tabs li a:hover {}


        @media (max-width: 768px) {
               .client-pic img{
        height: 195px !important;
             }
                #aith_header_collapse {
                   background-color: #1f4a4d;
               padding-left: 5px;
               width: 100% !important;
               box-shadow: 0 4px 6px rgba(0,0,0,0.3);
              
            }
             #aith_header_collapse a{
                border-bottom: 0.5px solid #0b2a2b;
                width: 100%;
            }
             .navbar {
            padding-left:0 !important;
              padding-right:0 !important;
              margin-bottom: 0 !important;
        }
            .navbar ul li {
                color: white;
                background-color: #1f4a4d;
                z-index: 10;
                padding-left: 4px;
            }

            /* width */
            ::-webkit-scrollbar {
                width: 5px;
            }

            /* Track */
            ::-webkit-scrollbar-track {
                background: #f1f1f1;
            }

             Handle 
            ::-webkit-scrollbar-thumb {
                background: #262626;
            }

            /* Handle on hover */
            ::-webkit-scrollbar-thumb:hover {
                background: #ddd;
            }
            #img1{
                display: none;
            }
            #logo_for_mobile{
                display: block !important;
            }
            .aktu_pic{
                 display: none;
            }
            #img3{
                height: 50px;
            }

        }

         .aith_web_social_icon ul{
           
         
        display: flex;
           margin: 0;
           padding: 0;
        
        }
        
        .aith_web_social_icon ul li{
            list-style: none;
                
        }
        .aith_web_social_icon ul li a{
            position: relative;
            width: 44px;
            text-decoration: none;
            height: 44px;
            background: #f1f1f1;
            display: block;
            text-align: center;
            margin: 0 4px;
            margin-bottom: 10px;
            border-radius: 50%;
            padding: 4px;
            box-shadow: 0 6px 8px rgba(0,0,0,0.3);
            background: linear-gradient(0deg, #ddd, #fff);
            transition: .3s;
            
        }
       .aith_web_social_icon ul li a:hover{
         box-shadow: 0 2px 5px rgba(0,0,0,0.3);
           
        }
        .aith_web_social_icon ul li a .fab{
            width: 100%;
            height: 100%;
            display: block;
            background: #ff0;
              background: linear-gradient(0deg, #fff, #ddd);
            border-radius: 50%;
            line-height: calc(40px - 1px);
            font-size: 22px;
            color: #262626;
            transition: .5s;
            
        }
        
     
        
        .aith_web_social_icon ul li a:hover .fa
        {
            color: #1f4a4d;
        }
        
       .row{
        padding: 0;
        margin:0;
       }
    

    </style>
</head>

<body>
    <!-- top header -->
    <!-- for start desktop -->
    <div class="row p-0 m-0 d-flex flex-row justify-content-center align-items-center" style="border-top:2px dashed #1f4a4d;">
        <div class="col-md-1 p-0 m-0 pt-1">
            <img src="<?php echo url_for('/images/logo11.png'); ?>" id="img1" width="82%" style="float:right;">
            <div class="row p-0 pl-2 pr-2" id="logo_for_mobile" style="display: none;">
                <div class="col-12 p-0 m-0 w-100 d-flex flex-row justify-content-between">
                   <img src="<?php echo url_for('/images/logo11.png'); ?>"  width="25%" style="">
                    <img src="<?php echo url_for('/images/logo%20(1).png'); ?>"  width="25%">
                </div>
            </div>
        </div>

        <div class="col-md-7 d-flex flex-row justify-content-center ">
            <img src="<?php echo url_for('/images/logo%20(2).png'); ?>" width="100%"  id="img3">
        </div>

        <div class="col-md-3 d-flex flex-column justify-content-center align-items-center p-0 m-0">
            <div class="row d-flex flex-row justify-content-center w-100">
                <div class="aith_web_social_icon">
                    <ul>

                        <li>
                            <a href="https://www.facebook.com/ay47026/?modal=admin_todo_tour"> <i class="fab fa-facebook-f" style="color: #3b5998;margin-top: 5px;"></i> </a></li>
                        <li>
                            <a href="#"> <i class="fab fa-twitter" style="color: #00aced; margin-top: 5px;"></i> </a></li>
                        <li>
                            <a href="https://plus.google.com/118342854229122579627"> <i class="fab fa-google-plus" aria-hidden="true" style=" color: #dd4b39;margin-top: 5px;"></i> </a></li>
                        <li>
                            <a href="https://www.linkedin.com/in/abhishek-yadav-626a42171/"> <i class="fab fa-linkedin" aria-hidden="true" style=" color: #dd4b39;margin-top: 5px;"></i> </a></li>
                        <li>
                            <a href="https://www.instagram.com/ay47026/"> <i class="fab fa-instagram" aria-hidden="true" style="color: #bc2a8d;margin-top: 5px;"></i> </a></li>
                    </ul>
                </div>

            </div>
            <div class="row d-flex flex-row justify-content-center w-100">
                <div class=" search_div m-1" style="position: relative;border-radius: 12px;width: 75%;border: 2px solid #1f4a4d">
                    <input id="search_input" type="text" placeholder="Search.." style="width: 100%;border:none;height: 30px; padding-left:  5px;border-radius: 12px;"><i class="fa fa-search" aria-hidden="true" style="position: absolute;top: 5px;right: 0px;width: 30px;height: 30px;cursor: pointer;"></i>
                </div>
            </div>

        </div>

        <div class="col-md-1 p-0 m-0 pt-1 aktu_pic">
            <img src="<?php echo url_for('/images/logo%20(1).png'); ?>" id="img2" width="82%">
        </div>
    </div>
    <!-- for  end desktop -->
     <!-- top header --ENDS-->

        <!-- public navigation -->
        <nav class="navbar navbar-expand-md mt-2 ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#aith_header_collapse" aria-controls="aith_header_collapse" aria-expanded="false" aria-label="Toggle navigation" style="outline: none;">
                <i class="fa fa-bars" aria-hidden="true" style="color:#ede7e7;"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-md-center" id="aith_header_collapse">
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
        <!-- pubic navigation --ENDS------------>
