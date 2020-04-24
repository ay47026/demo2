<!doctype html>
<html lang="en">

<head>
    <!-- Req2uired meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="../stylesheets/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="campus/style.css">
    <link rel="stylesheet" type="text/css" href="../stylesheets/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="../stylesheets/animate.css">
    <link rel="stylesheet" type="text/css" href="../stylesheets/jquery-ui.css">


    <script src="https://kit.fontawesome.com/e8019bc349.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:700&display=swap" rel="stylesheet">

    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


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
            <span style=" color:#1f4a4d;opacity:0.5;  font-weight:660; font-size: 15px;margin-left:20%;padding:1px;" class="desktop_text">Fill form step by step</span>
            <div class="nav flex-column nav-pills pl-5" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link" id="v-pills-step1-tab"  href="#v-pills-step1" role="tab" aria-controls="v-pills-step1" aria-selected="true"><span> 1</span> <span class="desktop_text">Allotment details</span></a>
                <a class="nav-link" id="v-pills-step2-tab" data-toggle="pill" href="#v-pills-step2" role="tab" aria-controls="v-pills-step2" aria-selected="false"><span> 2</span> <span class="desktop_text">Personal details</span></a>
                <a class="nav-link" id="v-pills-step3-tab"  href="#v-pills-step3" role="tab" aria-controls="v-pills-step3" aria-selected="false"><span> 3</span> <span class="desktop_text">Photo sign</span></a>
                <a class="nav-link" id="v-pills-step4-tab"  href="#v-pills-step4" role="tab" aria-controls="v-pills-step4" aria-selected="false"><span> 4</span> <span class="desktop_text"> Last edu. details </span></a>
                <a class="nav-link" id="v-pills-step5-tab"  href="#v-pills-step5" role="tab" aria-controls="v-pills-step5" aria-selected="false"><span> 5</span> <span class="desktop_text">Fee details</span></a>
                <a class="nav-link" id="v-pills-step6-tab"  href="#v-pills-step6" role="tab" aria-controls="v-pills-step6" aria-selected="false"><span> 6</span> <span class="desktop_text">Gaurdian details</span></a>
                <a class="nav-link" id="v-pills-step7-tab"  href="#v-pills-step7" role="tab" aria-controls="v-pills-step" aria-selected="false"><span> 7</span> <span class="desktop_text">Final submit</span></a>

            </div>
        </div>
        <div class="col-9 right_div p-0 m-0" style="overflow-y: scroll;height:600px;">
            <div class="  tab-content" id="v-pills-tabContent">
                <div class="tab-pane  p-0 m-0 fade show active" id="v-pills-step1" role="tabpanel" aria-labelledby="v-pills-step1-tab">
                    <div class="row mt-2 pb-2 p-0 m-0 w-100 ">
                        <span style=" color:gray; font-weight:660; font-size: 15px;border-bottom:1px solid lightgray;padding:1px;margin-left:22%;"> Allotment datails :-</span></div>
                    <form return="false">
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend"> <span class="">Year of
                                        Admission</span></div>
                                <div class="col-md-7 p-0 m-0" id="right-f">
                                    <select class="form-control f-select Year-of-Admission " required="required" id="Year-of-Admission">
                                        <option>Select</option>
                                        <option>1st year</option>
                                        <option>2nd year lateral </option>
                                    </select>
                                    <div class="val-error" id="Year-of-Admission-error">Please select option</div>
                                </div>
                            </div>
                        </div>
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend"> <span class=""> Allotted Branch </span></div>
                                <div class="col-md-7 p-0 m-0 " id="right-f">
                                    <select class="form-control f-select Allotted-Branch" required="required" id="Allotted-Branch">
                                        <option>Select</option>
                                        <option style="     background-color: #1f4a2d !importnt;"> Computer science and engineering</option>
                                        <option class="op"> Information Technology</option>
                                        <option> Bio-technology engineering </option>
                                        <option> Chemical engineering </option>
                                        <option> Electronics engineering</option>

                                    </select>
                                    <div class="val-error" id="Allotted-Branch-error">Please select option</div>
                                </div>
                            </div>
                        </div>

                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend"> <span class=""> Alloted
                                        Category</span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <select class="form-control   f-select Allotted-Category" required="required" id="Allotted-Category">
                                        <option>Select</option>
                                        <option>OBC</option>
                                        <option> General</option>
                                        <option> SC</option>
                                        <option>ST</option>


                                    </select>
                                    <div class="val-error" id="Allotted-Category-error">Please select option</div>
                                </div>
                            </div>
                        </div>
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend"> <span class=""> Allotted
                                        Sub Category</span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <select class="form-control f-select Allotted-Sub-Category" required="required" id="Allotted-Sub-Category">
                                        <option>Select</option>
                                        <option>OBC</option>


                                    </select>
                                    <div class="val-error" id="Allotted-Sub-Category-error">Please select option</div>
                                </div>
                            </div>
                        </div>


                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Allotted Roll No. </span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <input type="number" name="" required="required" id="Allotted-Roll-No" class="form-control Allotted-Roll-No " placeholder="Allotted Roll No.">
                                    <div class="val-error" id="Allotted-Roll-No-error">Please write Allotted RollNo.</div>
                                </div>
                            </div>
                        </div>


                        <div class="row mt-4 mb-2 p-2 m-0 w-100">
                            <div class="input-group d-flex flex-row justify-content-center" id="form-field">

                                <button type="button" class="btn  Allotted-save" id="save">Save</button>
                                <button type="button" class="btn Allotted-save-next" id="save-next">Save and Next</button>
                            </div>
                        </div>

                    </form>
                </div>



                <div class="tab-pane fade" id="v-pills-step2" role="tabpanel" aria-labelledby="v-pills-step2-tab">
                    <div class="row mt-2 pb-2 p-0 m-0 w-100 ">
                        <span style=" color:gray; font-weight:660; font-size: 15px;border-bottom:1px solid lightgray;padding:1px;margin-left:22%;"> Personal datails :-</span></div>
                    <form>

                        <!-- 0-->
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class="">First Name</span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <input type="text" name="" required="required" id="First-Name" class="form-control  First-Name" placeholder="First Name">
                                    <div class="val-error" id="First-Name-error">Please write First name</div>
                                </div>
                            </div>

                        </div>
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class="">Last Name</span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <input type="text" name="" required="required" id="Last-Name" class="form-control  Last-Name" placeholder="Last Name">
                                    <div class="val-error" id="Last-Name-error">Please write Last name</div>
                                </div>
                            </div>

                        </div>
                        <!-- 1-->
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend"> <span class="">Gender</span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <select class="form-control f-select Gender" required="required" id="Gender">
                                        <option>Select</option>
                                        <option>Female </option>
                                        <option>Male </option>
                                        <option>Other </option>
                                    </select>
                                    <div class="val-error" id="Gender-error">Please select gender</div>
                                </div>
                            </div>
                        </div>

                        <!-- 2-->
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class="">Date Of Birth </span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <input type="date" name="" required="required" id="DOB" class="form-control DOB " placeholder="mm/dd/yyyy">
                                    <div class="val-error " id="DOB-error">Please filled this field</div>
                                </div>
                            </div>
                        </div>
                        <!-- 3-->
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Student’s Mobile No
                                    </span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <input type="text" name="" required="required" id="Student-Mobile-No" class="form-control Student-Mobile-No" placeholder="Mobile No" maxlength="10">
                                    <div class="val-error" id="Student-Mobile-No-error">Please write mobile no</div>
                                </div>
                            </div>
                        </div>
                        <!-- 3-->
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Student’s E-Mail Id </span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <input type="email" name="" required="required" id="Student-E-Mail-Id" placeholder="E-Mail Id" class="form-control Student-E-Mail-Id">
                                    <div class="val-error" id="Student-E-Mail-Id-error">Please write email</div>
                                </div>
                            </div>
                        </div>
                        <!-- 4-->
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Student’s ADHAR </span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <input type="text" name="" placeholder="Adhar" maxlength="20" value="" id="Student-ADHAR" class="form-control Student-ADHAR">
                                    <div class="val-error" id="Student-ADHAR-error">Please write adhar number</div>
                                </div>
                            </div>
                        </div>
                        <!-- 5-->
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Correspondence Address </span></div>
                                <div class="col-md-7 p-0 m-0">


                                    <textarea class="form-control f-textarea Correspondence-Address" id="Correspondence-Address" cols="4" rows="2"></textarea>
                                    <div class="val-error" id="Correspondence-Address-error">Please write address</div>
                                    <div class="row   pt-2 m-0 mt-2 mb-2 " style="width:80%">
                                        <div class="col-6 p-0 m-0">
                                            <div class="input-group p-0 m-0" id="form-field">

                                                <div class="col-12 p-0 m-0">
                                                    <select class="form-control f-select C-District" required="required" id="C-District">
                                                        <option>Select</option>
                                                        <option>Auraiya</option>
                                                        <option>kanpur</option>

                                                    </select>

                                                </div>
                                                <div class="col-12 p-0 m-0 " style=""> <span class=""> District </span></div>
                                            </div>
                                        </div>
                                        <div class="col-6 p-0 m-0">
                                            <div class="input-group p-0 m-0" id="form-field">
                                                <div class="col-12 p-0 m-0">
                                                    <input type="number" name="" id="C-Pincode" class="form-control C-Pincode ">
                                                    <div class="val-error" id="C-Pincode">Please write full name</div>
                                                </div>
                                                <div class="col-12 p-0 m-0 "> <span class=""> Pincode </span></div>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                        <!-- 6-->
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class="">Permanent Address and Correspondence Address both are same ?
                                    </span></div>
                                <div class="col-md-7 p-0 m-0">

                                    <div class="custom-control mt-2 custom-radio">
                                        <input type="radio" name="Address-same" id="a-yes" class="custom-control-input mt-2">
                                        <label for="a-yes" class="custom-control-label"><span>Yes</span></label>

                                    </div>
                                    <div class="custom-control mt-2 custom-radio">
                                        <input type="radio" checked="checked" name="Address-same" id="a-no" class="custom-control-input ">
                                        <label for="a-no" class="custom-control-label"><span>No</span></label>

                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- 7-->
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Permanent Address </span></div>
                                <div class="col-md-7 p-0 m-0">


                                    <textarea class="form-control f-textarea Permanent-Address" id="Permanent-Address" cols="4" rows="2"></textarea>
                                    <div class="val-error" id="Permanent-Address-error">Please write address</div>
                                    <div class="row   pt-2 m-0 mt-2 mb-2 " style="width:80%">
                                        <div class="col-6 p-0 m-0">
                                            <div class="input-group p-0 m-0" id="form-field">

                                                <div class="col-12 p-0 m-0">
                                                    <select class="form-control f-select P-District" required="required" id="P-District">
                                                        <option>Select</option>
                                                        <option>Auraiya</option>
                                                        <option>kanpur</option>

                                                    </select>

                                                </div>
                                                <div class="col-12 p-0 m-0 " style=""> <span class=""> District </span></div>
                                            </div>
                                        </div>
                                        <div class="col-6 p-0 m-0">
                                            <div class="input-group p-0 m-0" id="form-field">
                                                <div class="col-12 p-0 m-0">
                                                    <input type="number" name="" id="P-Pincode" class="form-control P-Pincode ">

                                                </div>
                                                <div class="col-12 p-0 m-0 "> <span class=""> Pincode </span></div>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                        <!-- 8-->
                        <div class="row mt-4 mb-2 p-2 m-0 w-100">
                            <div class="input-group d-flex flex-row justify-content-center" id="form-field">

                                <button type="button" class="btn Personal-save" id="save">Save</button>
                                <button type="button" class="btn Personal-save-next" id="">Save and Next</button>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="tab-pane fade" id="v-pills-step3" role="tabpanel" aria-labelledby="v-pills-step3-tab">
                  <div class="row mt-2 pb-2 p-0 m-0 w-100 ">
                        <span style=" color:gray; font-weight:660; font-size: 15px;border-bottom:1px solid lightgray;padding:1px;margin-left:22%;"> Student photo and sign:-</span></div>
                    <form return="false">
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend"> <span class="">Upload Photo</span></div>
                                <div class="col-md-7 p-0 m-0" id="right-f">
                            <input class="custom-file-input stu-photo-upload" type="file" accept="image/*" id="stu-photo-upload">
                                <label for="stu-photo-upload" class="custom-file-label stu-photo-upload-label" >Upload Photo</label>
                                    <div class="val-error" id="stu-photo-upload-label-error">Please upload photo </div>
                                </div>
                            </div>
                        </div>

 <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend"> <span class="">Upload Sign</span></div>
                                <div class="col-md-7 p-0 m-0" id="right-f">
                            <input class="custom-file-input  stu-sign-upload" type="file" accept="image/*" id="stu-sign-upload">
                                <label for="stu-sign-upload" class="custom-file-label stu-sign-upload-label" >Upload Sign</label>
                                    <div class="val-error" id="stu-sign-upload-label-error">Please upload sign</div>
                                </div>
                            </div>
                        </div>
                         <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend"> </div>
                                <div class="col-md-7 p-0 m-0" id="right-f">
                            <div class="row">
                                    <div class="col-6">  <img src="" style=" " class="stu-photo-upload-view  border border-primary">
                                </div>
                                <div class="col-6">  <img src="" style=" " class="stu-sign-upload-view  border border-primary">
                                </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row mt-4 mb-2 p-2 m-0 w-100">
                            <div class="input-group d-flex flex-row justify-content-center" id="form-field">

                                <button type="button" class="btn  Student-Photo-Sign-save" id="save">Save</button>
                                <button type="button" class="btn Student-Photo-Sign-save-next" id="save-next">Save and Next</button>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="tab-pane fade" id="v-pills-step4" role="tabpanel" aria-labelledby="v-pills-step4-tab">
                    <div class="row mt-2 pb-2 p-0 m-0 w-100 ">
                        <span style=" color:gray; font-weight:660; font-size: 15px;border-bottom:1px solid lightgray;padding:1px;margin-left:22%;"> Details of School/college Last Attended:
                            :-</span></div>
                    <form return="false">
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Name of School/College Last Attended: </span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <input type="text" name="" required="required" id="Name-of-S-C" class="form-control Name-of-S-C " placeholder="Name of S/C.">
                                    <div class="val-error" id="Name-of-S-C-error">Please filled this filed.</div>
                                </div>
                            </div>
                        </div>


                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend"> <span class="">Exam Pass
                                    </span></div>
                                <div class="col-md-7 p-0 m-0" id="right-f">
                                    <select class="form-control f-select Exam-Pass " required="required" id="Exam-Pass">
                                        <option>Select</option>
                                        <option>Intermediate (10+2)</option>
                                        <option> DIPLOMA</option>
                                        <option>B.Sc</option>
                                    </select>
                                    <div class="val-error" id="Exam-Pass-error">Please select option</div>
                                </div>
                            </div>
                        </div>
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend"> <span class="">Year of Passing
                                    </span></div>
                                <div class="col-md-7 p-0 m-0" id="right-f">
                                    <select class="form-control f-select Year-of-Passing " required="required" id="Year-of-Passing">
                                        <option>Select</option>
                                        <option>2019</option>
                                        <option>2018</option>
                                    </select>
                                    <div class="val-error" id="Year-of-Passing-error">Please select option</div>
                                </div>
                            </div>
                        </div>
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Roll No. </span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <input type="number" name="" required="required" id="last-S-C-Roll-No" class="form-control last-S-C-Roll-No " placeholder=" Roll No.">
                                    <div class="val-error" id="last-S-C-Roll-No-error">Please filled this filed.</div>
                                </div>
                            </div>
                        </div>
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Maximum Marks
                                    </span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <input type="number" name="" required="required" id="Maximum-Marks" class="form-control Maximum-Marks " placeholder="Maximum Marks No.">
                                    <div class="val-error" id="Maximum-Marks-error">Please filled this filed.</div>
                                </div>
                            </div>
                        </div>

                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Marks Obtained
                                    </span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <input type="number" name="" required="required" id="Marks-Obtained" class="form-control Marks-Obtained " placeholder="Marks Obtained.">
                                    <div class="val-error" id="Marks-Obtained-error">Please filled this filed.</div>
                                </div>
                            </div>
                        </div>
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> (%) of Marks obtained
                                    </span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <input type="number" name="" required="required" id="Per-of-Marks" class="form-control Per-of-Marks " placeholder="% Marks ">
                                    <div class="val-error" id="Per-of-Marks-error">Please filled this filed.</div>
                                </div>
                            </div>
                        </div>



                        <div class="row mt-4 mb-2 p-2 m-0 w-100">
                            <div class="input-group d-flex flex-row justify-content-center" id="form-field">

                                <button type="button" class="btn   Last-Edu-save" id="save">Save</button>
                                <button type="button" class="btn  Last-Edu-save-next" id="save-next">Save and Next</button>
                            </div>
                        </div>

                    </form>


                </div>
                <div class="tab-pane fade" id="v-pills-step5" role="tabpanel" aria-labelledby="v-pills-step5-tab">


                    <div class="row mt-2 pb-2 p-0 m-0 w-100 ">
                        <span style=" color:gray; font-weight:660; font-size: 15px;border-bottom:1px solid lightgray;padding:1px;margin-left:22%;"> Details of Fee Payment :-</span></div>
                    <div class="row mt-2 pb-2 p-0 m-0 w-100 ">
                        <span style=" color:black; font-weight:660; font-size: 15px;padding:1px;margin-left:2%;"> Mode of fee deposition </span></div>

                    <div class="accordion mb-5" id="accordionExample">
                        <!--                        mode1== bank drft-->
                        <div class="card" id="card1">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Bank Draft
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <form>

                                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                                            <!--                                            1-->
                                            <div class="input-group p-0 m-0" id="form-field">
                                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Amount Deposited in Rs </span></div>
                                                <div class="col-md-7 p-0 m-0">
                                                    <input type="text" name="" required="required" id="m1-Amount-Deposited" class="form-control m1-Amount-Deposited " placeholder="Amount Deposited">
                                                    <div class="val-error" id="m1-Amount-Deposited-error">Please fill this field.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--                                        2-->
                                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                                            <div class="input-group p-0 m-0" id="form-field">
                                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Serial Number of DD </span></div>
                                                <div class="col-md-7 p-0 m-0">
                                                    <input type="number" name="" required="required" id="m1-Serial-Number-of-DD" class="form-control m1-Serial-Number-of-DD " placeholder="Serial Number of DD">
                                                    <div class="val-error" id="m1-Serial-Number-of-DD-error">Please fill this field</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--                                        3-->
                                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                                            <div class="input-group p-0 m-0" id="form-field">
                                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class="">Name of Issuer Bank </span></div>
                                                <div class="col-md-7 p-0 m-0">
                                                    <input type="text" name="" required="required" id="m1-Name-of-Issuer-Bank" class="form-control m1-Name-of-Issuer-Bank " placeholder="Name of Issuer Bank ">
                                                    <div class="val-error" id="m1-Name-of-Issuer-Bank-error">Please write Allotted RollNo.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                                            <div class="input-group p-0 m-0" id="form-field">
                                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class="">Date </span></div>
                                                <div class="col-md-7 p-0 m-0">
                                                    <input type="date" name="" required="required" id="m1-fee-date" class="form-control m1-fee-date " placeholder="mm/dd/yyyy">
                                                    <div class="val-error " id="m1-fee-date-error">Please filled this field</div>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="row mt-4 mb-2 p-2 m-0 w-100">
                                            <div class="input-group d-flex flex-row justify-content-center" id="form-field">

                                                <button type="button" class="btn  mode1-fee-save" id="mode1-fee-save">Save</button>
                                                <button type="button" class="btn mode1-fee-save-next" id="mode1-fee-save-next">Save and Next</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>


                        <!--     mode2== sbi collect-->
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        SBI-E Collect
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <form>

                                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                                            <!--                                            1-->
                                            <div class="input-group p-0 m-0" id="form-field">
                                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Amount Deposited in Rs </span></div>
                                                <div class="col-md-7 p-0 m-0">
                                                    <input type="text" name="" required="required" id="m1-Amount-Deposited" class="form-control m1-Amount-Deposited " placeholder="Amount Deposited">
                                                    <div class="val-error" id="m1-Amount-Deposited-error">Please fill this field.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--                                        2-->
                                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                                            <div class="input-group p-0 m-0" id="form-field">
                                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Serial Number of DD </span></div>
                                                <div class="col-md-7 p-0 m-0">
                                                    <input type="number" name="" required="required" id="m1-Serial-Number-of-DD" class="form-control m1-Serial-Number-of-DD " placeholder="Serial Number of DD">
                                                    <div class="val-error" id="m1-Serial-Number-of-DD-error">Please fill this field</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--                                        3-->
                                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                                            <div class="input-group p-0 m-0" id="form-field">
                                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class="">Name of Issuer Bank </span></div>
                                                <div class="col-md-7 p-0 m-0">
                                                    <input type="text" name="" required="required" id="m1-Name-of-Issuer-Bank" class="form-control m1-Name-of-Issuer-Bank " placeholder="Name of Issuer Bank ">
                                                    <div class="val-error" id="m1-Name-of-Issuer-Bank-error">Please write Allotted RollNo.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                                            <div class="input-group p-0 m-0" id="form-field">
                                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class="">Date </span></div>
                                                <div class="col-md-7 p-0 m-0">
                                                    <input type="date" name="" required="required" id="m1-fee-date" class="form-control m1-fee-date " placeholder="mm/dd/yyyy">
                                                    <div class="val-error " id="m1-fee-date-error">Please filled this field</div>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="row mt-4 mb-2 p-2 m-0 w-100">
                                            <div class="input-group d-flex flex-row justify-content-center" id="form-field">

                                                <button type="button" class="btn  mode1-fee-save" id="mode1-fee-save">Save</button>
                                                <button type="button" class="btn mode1-fee-save-next" id="mode1-fee-save-next">Save and Next</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--    mode 3==  Online Transiction-->
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Online Transiction
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    <form>

                                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                                            <!--                                            1-->
                                            <div class="input-group p-0 m-0" id="form-field">
                                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Amount Deposited in Rs </span></div>
                                                <div class="col-md-7 p-0 m-0">
                                                    <input type="text" name="" required="required" id="m1-Amount-Deposited" class="form-control m1-Amount-Deposited " placeholder="Amount Deposited">
                                                    <div class="val-error" id="m1-Amount-Deposited-error">Please fill this field.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--                                        2-->
                                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                                            <div class="input-group p-0 m-0" id="form-field">
                                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Serial Number of DD </span></div>
                                                <div class="col-md-7 p-0 m-0">
                                                    <input type="number" name="" required="required" id="m1-Serial-Number-of-DD" class="form-control m1-Serial-Number-of-DD " placeholder="Serial Number of DD">
                                                    <div class="val-error" id="m1-Serial-Number-of-DD-error">Please fill this field</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--                                        3-->
                                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                                            <div class="input-group p-0 m-0" id="form-field">
                                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class="">Name of Issuer Bank </span></div>
                                                <div class="col-md-7 p-0 m-0">
                                                    <input type="text" name="" required="required" id="m1-Name-of-Issuer-Bank" class="form-control m1-Name-of-Issuer-Bank " placeholder="Name of Issuer Bank ">
                                                    <div class="val-error" id="m1-Name-of-Issuer-Bank-error">Please write Allotted RollNo.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                                            <div class="input-group p-0 m-0" id="form-field">
                                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class="">Date </span></div>
                                                <div class="col-md-7 p-0 m-0">
                                                    <input type="date" name="" required="required" id="m1-fee-date" class="form-control m1-fee-date " placeholder="mm/dd/yyyy">
                                                    <div class="val-error " id="m1-fee-date-error">Please filled this field</div>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="row mt-4 mb-2 p-2 m-0 w-100">
                                            <div class="input-group d-flex flex-row justify-content-center" id="form-field">

                                                <button type="button" class="btn  mode1-fee-save" id="mode1-fee-save">Save</button>
                                                <button type="button" class="btn mode1-fee-save-next" id="mode1-fee-save-next">Save and Next</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--    mode 3==  Any Other-->
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Any Other
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    <form>

                                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                                            <!--                                            1-->
                                            <div class="input-group p-0 m-0" id="form-field">
                                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Amount Deposited in Rs </span></div>
                                                <div class="col-md-7 p-0 m-0">
                                                    <input type="text" name="" required="required" id="m1-Amount-Deposited" class="form-control m1-Amount-Deposited " placeholder="Amount Deposited">
                                                    <div class="val-error" id="m1-Amount-Deposited-error">Please fill this field.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--                                        2-->
                                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                                            <div class="input-group p-0 m-0" id="form-field">
                                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Serial Number of DD </span></div>
                                                <div class="col-md-7 p-0 m-0">
                                                    <input type="number" name="" required="required" id="m1-Serial-Number-of-DD" class="form-control m1-Serial-Number-of-DD " placeholder="Serial Number of DD">
                                                    <div class="val-error" id="m1-Serial-Number-of-DD-error">Please fill this field</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--                                        3-->
                                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                                            <div class="input-group p-0 m-0" id="form-field">
                                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class="">Name of Issuer Bank </span></div>
                                                <div class="col-md-7 p-0 m-0">
                                                    <input type="text" name="" required="required" id="m1-Name-of-Issuer-Bank" class="form-control m1-Name-of-Issuer-Bank " placeholder="Name of Issuer Bank ">
                                                    <div class="val-error" id="m1-Name-of-Issuer-Bank-error">Please write Allotted RollNo.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                                            <div class="input-group p-0 m-0" id="form-field">
                                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class="">Date </span></div>
                                                <div class="col-md-7 p-0 m-0">
                                                    <input type="date" name="" required="required" id="m1-fee-date" class="form-control m1-fee-date " placeholder="mm/dd/yyyy">
                                                    <div class="val-error " id="m1-fee-date-error">Please filled this field</div>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="row mt-4 mb-2 p-2 m-0 w-100">
                                            <div class="input-group d-flex flex-row justify-content-center" id="form-field">

                                                <button type="button" class="btn  mode1-fee-save" id="mode1-fee-save">Save</button>
                                                <button type="button" class="btn mode1-fee-save-next" id="mode1-fee-save-next">Save and Next</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="tab-pane fade" id="v-pills-step6" role="tabpanel" aria-labelledby="v-pills-step6-tab">
                    <div class="row mt-2 pb-2 p-0 m-0 w-100 ">
                        <span style=" color:gray; font-weight:660; font-size: 15px;border-bottom:1px solid lightgray;padding:1px;margin-left:22%;"> Gaurdian Details
                            :-</span></div>
                    <form return="false">
                        <!--                        1-->
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend"> <span class="">Gaurdian Relation</span></div>
                                <div class="col-md-7 p-0 m-0" id="right-f">
                                    <select class="form-control f-select Gaurdian-Relation " required="required" id="Gaurdian-Relation">
                                        <option>Select</option>
                                        <option>father</option>
                                        <option>Mother </option>
                                        <option>Other </option>
                                    </select>
                                    <div class="val-error" id="Gaurdian-Relation-error">Please select option</div>
                                </div>
                            </div>
                        </div>
                         <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class="">Gaurdian  First Name</span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <input type="text" name="" required="required" id="Gaurdian-First-Name" class="form-control  Gaurdian-First-Name" placeholder="First Name">
                                    <div class="val-error" id="Gaurdian-First-Name-error">Please write First name</div>
                                </div>
                            </div>

                        </div>
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class="">Last Name</span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <input type="text" name="" required="required" id="Gaurdian-Last-Name" class="form-control  Gaurdian-Last-Name" placeholder="Last Name">
                                    <div class="val-error" id="Gaurdian-Last-Name-error">Please write Last name</div>
                                </div>
                            </div>

                        </div>
                        <!--                      2-->
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Gaurdian  occupation
                                    </span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <input type="text" name="" required="required" id="Gaurdian-occupation" class="form-control Gaurdian-occupation " placeholder="Gaurdian occupation">
                                    <div class="val-error" id="Gaurdian-occupation-error">Please write Gaurdian-occupation.</div>
                                </div>
                            </div>
                        </div>
                        <!--3-->
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Gaurdian  Mobile No
                                    </span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <input type="text" name="" required="required" id="Gaurdian-Mobile-No" class="form-control Gaurdian-Mobile-No" placeholder=" Mobile No">
                                    <div class="val-error" id="Gaurdian-Mobile-No-error">Please write Gaurdian  Mobile No</div>
                                </div>
                            </div>
                        </div>
                        <!--                           4-->
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Gaurdian E-Mail
                                    </span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <input type="text" name="" required="required" id="Gaurdian-E-Mail" class="form-control Gaurdian-E-Mail " placeholder=" E-Mail">
                                    <div class="val-error" id="Gaurdian-E-Mail-error">Please write Gaurdian E-Mail.</div>
                                </div>
                            </div>
                        </div>
                        <!--                        5-->
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Gaurdian Monthly
                                        Income in Rs.
                                    </span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <input type="text" name="" required="required" id="Gaurdian-Monthly-Income" class="form-control Gaurdian-Monthly-Income " placeholder="Income in Rs">
                                    <div class="val-error" id="Gaurdian-Monthly-Income-error">Please write Gaurdian Monthly
                                        Income in Rs..</div>
                                </div>
                            </div>
                        </div>

                        <!--                           6-->
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Gaurdian Residential/
                                        correspondence Address </span></div>
                                <div class="col-md-7 p-0 m-0">


                                    <textarea class="form-control f-textarea Gaurdian-Correspondence-Address" id="Gaurdian-Correspondence-Address" cols="4" rows="2"></textarea>
                                    <div class="val-error" id="Gaurdian-Correspondence-Address-error">Please write address</div>



                                </div>
                            </div>
                        </div>
                        <!-- 6-->
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class="">Office Address and Correspondence Address both are same ?
                                    </span></div>
                                <div class="col-md-7 p-0 m-0">

                                    <div class="custom-control mt-2 custom-radio">
                                        <input type="radio" name="g-Address-same" id="g-a-yes" class="custom-control-input mt-2">
                                        <label for="g-a-yes" class="custom-control-label"><span>Yes</span></label>

                                    </div>
                                    <div class="custom-control mt-2 custom-radio">
                                        <input type="radio" checked="checked" name="g-Address-same" id="g-a-no" class="custom-control-input ">
                                        <label for="g-a-no" class="custom-control-label"><span>No</span></label>

                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- 7-->
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Gaurdian  Office Address</span></div>
                                <div class="col-md-7 p-0 m-0">


                                    <textarea class="form-control f-textarea Gaurdian-Office-Address" id="Gaurdian-Office-Address" cols="4" rows="2"></textarea>
                                    <div class="val-error" id="Gaurdian-Office-Address-error">Please write address</div>




                                </div>
                            </div>
                        </div>

                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Gaurdian Pan No
                                    </span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <input type="text" name="" required="required" id="Gaurdian-Pan-No" class="form-control Gaurdian-Pan-No " placeholder="Gaurdian Pan No">
                                    <div class="val-error" id="Gaurdian-Pan-No-error">Please write Gaurdian Pan No.</div>
                                </div>
                            </div>
                        </div>

                        <!--                              7-->
                        <div class="row mt-4 mb-2 p-2 m-0 w-100">
                            <div class="input-group d-flex flex-row justify-content-center" id="form-field">

                                <button type="button" class="btn  Gaurdian-Details-save" id="Gaurdian-Details-save">Save</button>
                                <button type="button" class="btn Gaurdian-Details-save-next" id="Gaurdian-Details-save-next">Save and Next</button>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="tab-pane fade" id="v-pills-step7" role="tabpanel" aria-labelledby="v-pills-step7-tab">

                     <div class="row mt-2 pb-2 p-0 m-0 w-100 ">
                        <span style=" color:gray; font-weight:660; font-size: 15px;border-bottom:1px solid lightgray;padding:1px;margin-left:22%;">  Declaration  :-</span></div>
                     <div class="row mt-2 p-5 p-0 m-0 w-100 ">
                        <span style=" color:black;text-align:justify; font-weight:660; font-size: 17px;border-bottom:1px solid lightgray;padding:1px;margin-left:1%;font-family: sans-serif;">I "<span class="student-name-declare" style=" color:blue;">Abhishek yadav</span>"
 Hereby declare that;<br>
1. I have not been debarred/restricted from any educational society/Institute/College.<br>
2. The details furnish in the application form are true to the best of my knowledge and belief and in case of
any false information’s admission will be treated cancelled.<br>
3. I shall abide by the rules and regulations of the institute and university.<br>
 </span></div>
                    <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class="">Date :
                                    </span><br>
                                <span class="today-date">11/11/2019
                                    </span>
                                </div>
                                <div class="col-md-7 pl-5 m-0">
                                <span class="">Signature :
                                    </span><br><img src="" style="height:80px; " class="stu-sign-upload-view  border border-primary">
                                </div>
                            </div>
                        </div>
                     <div class="row mt-4 mb-2 p-2 m-0 w-100">
                            <div class=" d-flex flex-row justify-content-center" >

                                 <div class="col-md-7 p-0 m-0">

                                    <div class="custom-control mt-2 custom-radio">
                                        <input type="radio" name="Address-same" id="a-yes" class="custom-control-input mt-2">
                                        <label for="a-yes" class="custom-control-label"><span>I agree</span></label>

                                    </div>



                                </div>
                            </div>
                        </div>
                     <div class="row mt-4 mb-2 p-2 m-0 w-100">
                            <div class="input-group d-flex flex-row justify-content-center" id="form-field">

                                <button type="button" class="btn  Gaurdian-Details-save" id="Gaurdian-Details-save">Periview</button>
                                <button type="button" class="btn Gaurdian-Details-save-next" id="Gaurdian-Details-save-next">Final Submit</button>
                            </div>
                        </div>


                </div>

            </div>
        </div>



    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/jquery-ui.js"></script>
    <script src="js/c_script.js"></script>


</body>

</html>


