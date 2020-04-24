<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="../stylesheets/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="../stylesheets/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="../stylesheets/animate.css">


    <script src="https://kit.fontawesome.com/e8019bc349.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">



    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>

    <title>CMS</title>
    <style>
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

             .navbar ul li{
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

/* Handle */
::-webkit-scrollbar-thumb {
    background: #262626;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #ddd;
}

        }


    </style>
</head>

<body>


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
    <div class="row p-0 m-0 ">
        <div class="col-md-8 p-0 m-0 ">
            <div id="myclient" class="carousel  container slide p-0 m-0" data-ride="carousel">
                <ol class="carousel-indicators  ">
                    <li data-target="#myclient " data-slide-to="0" class="active"></li>
                    <li data-target="#myclient" data-slide-to="1"></li>
                    <li data-target="#myclient" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner animated fadeIn text-center">
                    <div class="carousel-item  active">
                        <div class="client-pic mx-auto">
                            <img src="images/2019-01-31%20(1).jpg" style="width:100%; height:350px ;" atl="pic ">
                        </div>
                    </div>
                    <div class="carousel-item animated fadeIn">
                        <div class="client-pic mx-auto">
                            <img src="images/2017-10-25.jpg" style="width:100%; height:350px;" atl="pic ">
                        </div>

                    </div>
                    <div class="carousel-item animated fadeIn">
                        <div class="client-pic mx-auto">
                            <img src="images/teachers.jpg" style="width:100%; height:350px;" atl="pic ">
                        </div>


                    </div>
                </div>

            </div>

        </div>
        <div class="col-md-3 p-0 m-0">
            <div class="panel " style="width:100% !important;" width="100%">
                <div class="panel-heading heading-news1new">
                    Notes & Annausment
                    <ul style="margin-top: -4px;" class="pagination pull-right">
                        <li><a class="prev" href="#"><span class="glyphicon glyphicon-chevron-down"></span></a></li>
                        <li><a class="next" href="#"><span class="glyphicon glyphicon-chevron-up"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <ul class="demo1">

                                <li class="news-item">
                                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... Read more...</span>
                                </li>
                                <li class="news-item">
                                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... Read more...</span>
                                </li>
                                <li class="news-item">
                                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... Read more...</span>
                                </li>
                                <li class="news-item">
                                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... Read more...</span>
                                </li>
                                <li class="news-item">
                                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... Read more...</span>
                                </li>
                                <li class="news-item">
                                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... Read more...</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel-footer"> </div>
            </div>
        </div>
    </div>

    <div class="jumbotron p-0 m-0 " style="background-color:white">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-md-4 p-5">
                <div class="row d-flex flex-column justify-content-center align-items-center" style=" border-bottom: 1px solid #1f4a4d;">
                    <span style="color:#1f4a2d;font-size:25px;font-weight:600; font-family: sans-serif;">STUDENT SECTION</span>
                </div>
                <div class="row mt-4">
                    <div class="col-4 d-flex flex-column justify-content-center align-items-center ">
                        <img src="images/admssion_form-icon-4.jpg" style="width: 60px;height: 70px;cursor: pointer" data-toggle="modal" data-target="#account">

                        <span style="color: black;font-size: 13px;text-align:center;">New student admission</span>
                    </div>
                    <div class="col-4 d-flex flex-column justify-content-center align-items-center">
                        <a href="#"><img src="images/images.png" style="width: 67px;height: 70px;cursor: pointer"></a>

                        <span style="color: black;font-size: 13px;text-align:center;">Current<br> student</span></div>
                    <div class="col-4 d-flex flex-column justify-content-center align-items-center">
                        <a href="#"><img src="images/Gradute_Student-512.png" style="60px;height: 70px;cursor: pointer"></a>

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
                        <a href="#"><img src="images/vinayji.jpg" style="width: 160px;height: 195px;cursor: pointer"></a>

                        <span style="color: black;font-size: 13px;font-weight:  700">Smt. S. Radha Chauhan</span>
                        <span style="color: black;font-size: 12px;text-align:center" class="mt-1">Principal Secretary Technical Education

                            Govt. of.U.P.</span>
                        <button class="btn btn-info p-0 mt-1" style="width:100px;height:27px ;"> Read more</button>
                    </div>
                    <div class="col-md-3 d-flex flex-column justify-content-center align-items-center">
                        <a href="#"><img src="images/GovernancePic_20190826060904305.jpg" style="width: 160px;height: 195px;cursor: pointer"></a>

                        <span style="color: black;font-size: 13px;font-weight:  700">Smt. S. Radha Chauhan</span>
                        <span style="color: black;font-size: 12px;text-align:center" class="mt-1">Principal Secretary Technical Education
                            Govt. of.U.P.</span>
                        <button class="btn btn-info p-0 mt-1" style="width:100px;height:27px ;"> Read more</button>
                    </div>
                    <div class="col-md-3 d-flex flex-column justify-content-center align-items-center">
                        <a href="#"><img src="images/GovernancePic_20190809092451339.jpg" style="width: 160px;height: 195px;cursor: pointer"></a>

                        <span style="color: black;font-size: 13px;font-weight:  700">Smt. S. Radha Chauhan</span>
                        <span style="color: black;font-size: 12px;text-align:center" class="mt-1">Principal Secretary Technical Education

                            Govt. of.U.P.</span>
                        <button class="btn btn-info p-0 mt-1" style="width:100px;height:27px ;"> Read more</button>
                    </div>
                    <div class="col-md-3 d-flex flex-column justify-content-center align-items-center">
                        <a href="#"><img src="images/director.jpg" style="width: 160px;height: 195px;cursor: pointer"></a>

                        <span style="color: black;font-size: 13px;font-weight:  700">Smt. S. Radha Chauhan</span>
                        <span style="color: black;font-size: 12px;text-align:center" class="mt-1">Principal Secretary Technical Education

                            Govt. of.U.P.</span>
                        <button class="btn btn-info p-0 mt-1" style="width:100px;height:27px ;"> Read more</button>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <div class="modal fade " id="account">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header border-0 d-flex align-items-center flex-column justify-content-center ">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: sticky;top: 0;right: 0;"><span aria-hidden="true">&times;</span></button>
                    <div class="row ">
                        <img src="campus/images/logo11.png">
                    </div>
                    <h5 class="modal-title" id="exampleModalLabel" style="font-size:28px;">Dr A.I.T.H</h5>

                </div>
                <div class="modal-body ">
                    <ul class="nav nav-tabs pl-5" style=" background-color: #1f4a4d;border:1px solid #1f4a4d;">
                        <li class="nav-item"><a class="nav-link active" href="#login" data-toggle="tab">Registration</a></li>
                        <li class="nav-item"><a class="nav-link" href="#signup" data-toggle="tab">Login</a></li>
                    </ul>
                    <!--                start tab content-->
                    <div class="tab-content " style="overflow: hidden">

                        <div class="tab-pane active animated  p-2" id="login">
                            <form>
                                <div class="row mt-2">
                                    <div class="col-md-12  ">
                                        <div class="input-group">
                                            <div class="input-group-prepend"> <span class="input-group-text border "> Student name </span></div>
                                            <input type="text" name="" id="student-name" class="form-control border " placeholder="Student name">
                                        </div>
                                    </div>

                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12  ">
                                        <div class="input-group">
                                            <div class="input-group-prepend"> <span class="input-group-text border ">Upse Roll No. </span></div>
                                            <input type="number" name="" id="upse_ro_no" class="form-control border " placeholder="Upse Roll N0.">
                                        </div>
                                    </div>

                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12  ">
                                        <div class="input-group">
                                            <div class="input-group-prepend"> <span class="input-group-text border "> Email</span></div>
                                            <input type="email" name="" id="email" class="form-control border " placeholder="Email">
                                        </div>
                                    </div>

                                </div>
                                <div class="row mt-2 mb-2">
                                    <div class="col-md-12  ">
                                        <div class="input-group">
                                            <div class="input-group-prepend"> <span class="input-group-text border "> Mobile No. </span></div>
                                            <input type="number" name="" id="Mobile-No" class="form-control border " placeholder="Mobile No.">
                                        </div>
                                    </div>

                                </div>
                                <div class="row mt-2 d-flex align-items-center flex-column justify-content-center w-100">
                                    <input type="submit" class="form-control border mt-2 text-white w-25 " style="  background-color: #1f4a4d;">
                                    <p>You don't register then , Register now</p>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane animated " id="signup">
                            <form action="nsa.php" method="post" enctype="multipart/form-data" style="margin-top: 20px">
                                <div class="form-group d-flex align-items-center flex-column justify-content-center">
                                    <input type="text" class="form-control" id="user_id" aria-describedby="emailHelp" placeholder="user id" style="width: 80% !important; height: 50px !important;font-size:17px; box-shadow:none">

                                </div>
                                <div class="form-group d-flex align-items-center flex-column justify-content-center">
                                    <input type="password" class="form-control" id="password" placeholder="Password" style="width: 80% !important; height: 50px !important;font-size:17px; box-shadow:none">
                                </div>

                                <small id="emailHelp" class="form-text text-muted" style="margin-left:10%;">We'll never share your id with anyone else.</small>

                                <div class="modal-footer border-0 d-flex align-items-center flex-column justify-content-center ">

                                    <input type="submit" class="btn " value="Login" name="login_main_admin" style=" background-color: #1f4a4d;color:white">
                                    <a href="#" style="  text-decoration: none;"> <span style="font-size:13px;;color:black;">Password forgeted</span></a>
                                </div>
                            </form>
                            <p style="text-align:center">You don't register then , Register now</p>
                        </div>
                    </div>
                    <!--                end tab content-->
                </div>

            </div>
        </div>
    </div>
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
</body>
</html>
