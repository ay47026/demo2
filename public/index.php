<?php
require_once('../private/initialize.php');?>
<?php
// sleep(2);
require_once(SHARED_PATH . '/public_header.php');


require_once(SHARED_PATH . '/public_header_02.php');
 ?>

<style>
    * {
        box-sizing: border-box;
    }

    @media (max-width: 768px) {
        .our_mantor {
            padding: 3px !important;
        }

        .directer_left_div_pic {
            margin-top: 20px !important;
        }

        .course_details_m {
            display: block !important;
            margin-bottom: 5px;
        }

        .course_details_d {
            display: none;
        }

        .Divyangs_pic_m {
            display: block !important;
        }

        .Divyangs_pic_d {
            display: none;
        }

        .t-p-m {
            display: block !important;
        }

        .t-p-d {
            display: none;
        }

    }

</style>
<div class="jumbotron p-0 mt-1  m-0 " style="background-color:white;border-top:2px dashed #1f4a4d;">
    <div class="row pb-2" style="box-shadow: 0 2px 4px lightgray">
        <div class="col-1"></div>
        <div class="col-md-4 p-3">
            <div class="row d-flex flex-column justify-content-center align-items-center" style=" border-bottom: 1px solid #1f4a4d;">
                <span style="color:#1f4a2d;font-size:25px;font-weight:600; font-family: sans-serif;">STUDENT SECTION</span>
            </div>
            <div class="row mt-4">
                <div class="col-4 d-flex flex-column justify-content-center align-items-center ">
                    <img src="<?php echo url_for('/images/admssion_form-icon-4.jpg');?>" style="width: 60px;height: 70px;cursor: pointer" data-toggle="modal" data-target="#account" id='new_student_admission'>

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

            <div class="row mt-4">
                <div class="col-4 d-flex flex-column justify-content-center align-items-center ">
                    <img src="<?php echo url_for('/images/admssion_form-icon-4.jpg');?>" style="width: 60px;height: 70px;cursor: pointer" data-toggle="modal" data-target="#account" id='new_student_admission'>

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
        <div class="col-md-7 p-3 our_mantor">
            <div class="row d-flex flex-column justify-content-center align-items-center" style=" border-bottom: 1px solid #1f4a4d;">
                <span style="color:#1f4a2d;font-size:25px;font-weight:600; font-family: sans-serif;">OUR MENTOR</span>
            </div>
            <div class="row mt-4">
                <div class="col-md-6 m-0 p-0">
                    <div class="row p-0 m-0">
                        <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                            <a href="#" class="mt-1 mb-1" style="box-shadow: 0 4px 6px gray"><img src="<?php echo url_for('/images/vinayji.jpg'); ?>" style="width: 160px;height: 195px;cursor: pointer"></a>

                            <span style="color: black;font-size: 13px;font-weight:  700">Prof. Vinay Kumar Pathak</span>
                            <span style="color: black;font-size: 12px;text-align:center" class="mt-1">Principal Secretary Technical Education

                                Govt. of.U.P.</span>
                            <button class="btn  p-0 mt-1" style="width:100px;height:25px;background-color: #3e9599;color: #fff ;font-size: 14px ;font-weight: bold;"> Read more</button>
                        </div>
                        <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                            <a href="#" class="mt-1 mb-1" style="box-shadow: 0 4px 6px gray"><img src="<?php echo url_for('/images/GovernancePic_20190826060904305.jpg'); ?>" style="width: 160px;height: 195px;cursor: pointer"></a>

                            <span style="color: black;font-size: 13px;font-weight:  700">Smt. Kamal Rani Varun</span>
                            <span style="color: black;font-size: 12px;text-align:center" class="mt-1">Principal Secretary Technical Education
                                Govt. of.U.P.</span>
                            <button class="btn  p-0 mt-1" style="width:100px;height:25px;background-color: #3e9599;color: #fff ;font-size: 14px ;font-weight: bold;"> Read more</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 p-0 m-0">
                    <div class="row p-0 directer_left_div_pic m-0">
                        <div class="col-6  d-flex flex-column justify-content-center align-items-center">
                            <a href="#" class="mt-1 mb-1" style="box-shadow: 0 4px 6px gray"><img src="<?php echo url_for('/images/GovernancePic_20190809092451339.jpg'); ?>" style="width: 160px;height: 195px;cursor: pointer"></a>

                            <span style="color: black;font-size: 13px;font-weight:  700">Smt. S. Radha Chauhan</span>
                            <span style="color: black;font-size: 12px;text-align:center" class="mt-1">Principal Secretary Technical Education

                                Govt. of.U.P.</span>
                            <button class="btn  p-0 mt-1" style="width:100px;height:25px;background-color: #3e9599;color: #fff ;font-size: 14px ;font-weight: bold;"> Read more</button>
                        </div>
                        <div class="col-6  d-flex flex-column justify-content-center align-items-center">
                            <a href="#" class="mt-1 mb-1" style="box-shadow: 0 4px 6px gray"><img src="<?php echo url_for('/images/director.JPG'); ?>" style="width: 160px;height: 195px;cursor: pointer"></a>

                            <span style="color: black;font-size: 13px;font-weight:  700">Prof. Rachna Asthana</span>
                            <span style="color: black;font-size: 12px;text-align:center" class="mt-1">Principal Secretary Technical Education

                                Govt. of.U.P.</span>
                            <button class="btn  p-0 mt-1" style="width:100px;height:25px;background-color: #3e9599;color: #fff ;font-size: 14px ;font-weight: bold;"> Read more</button>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<style>
    .Courses ul {

        list-style: none;
        padding: 0;
    }

    .Courses li {

        width: 100%;
        list-style-type: none !important;
        font-size: 15px;
        margin-top: 5px !important;
    }

    .Courses li div {

        margin-top: -22px !important;
    }

    .Courses a li {

        padding: 0;
        margin: 0;
        margin-left: 5%;
        width: 90%;
        text-decoration: none !important;
        color: #262626 !important;

    }

    .Courses li {

        padding: 0;
        margin: 0;
        margin-left: 5%;
        width: 90%;
        text-decoration: none !important;
        color: #262626 !important;

    }

    .Courses li:before {
        content: "\f101";
        /* FontAwesome Unicode */
        font-family: FontAwesome;
        display: inline-block;
        margin-left: .3em;

        /* same as padding-left set on li */
        width: 1.3em;
        /* same as padding-left set on li */
    }

    .Courses {
        color: black;
    }

</style>
<div class="jumbotron p-2 m-1" style="background-color: whitesmoke;">
    <div class="row Courses d-flex flex-row justify-content-center align-items-center" style="">
        <div class="col-md-6 p-0 m-0">
            <div class="course_details_m" style="display: none;">
                <div class="row d-flex flex-column justify-content-center align-items-center" style=" border-bottom: 1px solid #1f4a4d;">
                    <span style="color:#1f4a4d;font-size:25px;font-weight:600; font-family: sans-serif;">Courses Details</span>
                </div>
            </div>
            <img src="images/course.jpg" width="100%">
        </div>
        <div class="col-md-6  d-flex flex-column justify-content-center align-items-center">
            <div class="course_details_d">
                <div class="row d-flex flex-column justify-content-center align-items-center" style=" border-bottom: 1px solid #1f4a4d;">
                    <span style="color:#262626;font-size:25px;font-weight:600; font-family: sans-serif;">Courses Details</span>
                </div>
            </div>

            <div class="row w-100 p-0 m-0">

                <div class="col-sm-6 p-0 m-0">
                    <span style="color:#262626;font-size:20px;font-weight:600; font-family: sans-serif;text-align: center;">Degree (B-tech)</span>
                    <ul class="">
                        <a href="">
                            <li>Computer Science & Engineering</li>
                        </a>
                        <a href="">
                            <li> Information Technology</li>
                        </a>
                        <a href="">
                            <li> Chemical Engineering</li>
                        </a>
                        <a href="">
                            <li> Electronics Engineering</li>
                        </a>
                        <a href="">
                            <li> Bio-Technology</li>
                        </a>
                    </ul>
                </div>
                <div class="col-sm-6 p-0 m-0">
                    <span style="color:#262626;font-size:20px;font-weight:600; font-family: sans-serif;text-align: center;">Deploma (Politacnic)</span>
                    <ul class="Degree-s">
                        <a href="">
                            <li> Computer Science & Engineering</li>
                        </a>
                        <a href="">
                            <li> Electronics Engineering</li>
                        </a>
                        <a href="">
                            <li> Architecture & Assistanceship</li>
                        </a>
                        <a href="">
                            <li>Modern Office Management & Secretarial Practice</li>
                        </a>

                    </ul>
                </div>


            </div>
        </div>

    </div>
</div>

<div class="jumbotron p-2 m-1" style="  background-color:beige">
    <div class="row Courses d-flex flex-row justify-content-center align-items-center" style="">


        <div class="col-md-6 order-sm-1 d-flex flex-column justify-content-center align-items-center">
            <div class="row d-flex  p-0 m-0 flex-column justify-content-center align-items-center" style=" border-bottom: 1px solid #1f4a4d;">
                <span style="color:#262626;font-size:25px;font-weight:600; font-family: sans-serif;">Salient Features/ Facilities to Divyangs</span>
            </div>

            <div class="row w-100 p-0 m-0">
                <div class="col-md-6 order-sm-1 w-100 p-0 m-0 Divyangs_pic_m" style="display: none;">
                    <img src="images/handicap.jpg" style="width: 100%">
                </div>
                <div class="col-sm-6 p-0 m-0">
                    <span style="color:#262626;font-size:20px;font-weight:600; font-family: sans-serif;text-align: center;">Deploma</span>
                    <ul class="deploma-s p-0 m-0">
                        <li>100% seats are reserved for Divyang students with No Tuition Fees.</li>
                        <li>Specially designed Barrier Free unique infrastructure.</li>
                        <li>Food subsidy of Rs. 250/- per month to every Divyang students.</li>
                        <li>Food subsidy of Rs. 250/- per month to every Divyang students.</li>
                        <li>Almost 100% previous years placement record of Divyangs students.</li>
                    </ul>
                </div>
                <div class="col-sm-6 p-0 m-0">
                    <span style="color:#262626;font-size:20px;font-weight:600; font-family: sans-serif;text-align: center;">Degree</span>
                    <ul class="Degree-s p-0 m-0">
                        <li>60% seats reserved for Divyangs students (in case of unavailability of Divyang's vacant seats are filled by general students through UPSEE only).</li>
                        <li>Scholarship/fees reimbursement to eligible students as per the rules of Social Welfare Department.</li>
                        <li>25% deduction in tution fee for newly admitted Divyang students.</li>
                        <li>Specially designed Barrier Free unique infrastructure.</li>
                        <li>Almost 100% previous years placement record of Divyangs students.</li>

                    </ul>



                </div>
            </div>
        </div>
        <div class="col-md-6 order-sm-1 p-0 m-0 Divyangs_pic_d">
            <img src="images/handicap.jpg" style="width: 100%">
        </div>
    </div>
</div>

<!-- placement -->

<div class="jumbotron p-2 m-1" style="  background-color:whitesmoke">
    <div class="row Courses d-flex flex-row justify-content-center align-items-center" style="">
        <div class="col-md-6 p-0 m-0">
            <div class="row  w-100 p-0 m-0 t-p-m" style="display: none; border-bottom: 1px solid #1f4a4d;">
                <span style="color:#262626;font-size:21px;font-weight:600; font-family: sans-serif;text-align: center;margin-left: 20%">Training & Placement</span>
            </div>
            <img src="images/placement.jpg" style="width: 100%">
        </div>

        <div class="col-md-6 d-flex flex-column justify-content-start align-items-start">
            <div class="row  p-0 m-0 t-p-d" style=" border-bottom: 1px solid #1f4a4d;">
                <span style="color:#262626;font-size:21px;font-weight:600; font-family: sans-serif;">Training & Placement</span>
            </div>
            <div class="row p-2  m-0">
                <span style="color:#262626;font-size:14px; font-family: sans-serif;">We believe that like every industry the institute is also known by its quality products. The students are the quality products of an institute. We take utmost care in providing rich quality to our students. Every effort is made to make the student have a sound personality by imbibing not only technical skills but also social adaptability & human sensibility. The training is provided to the students such that they become globally acceptable personalities with proper communication skill, attitudes and aptitudes to become leader. To provide a reputed employment to the students is our primary aim.</span>
            </div>
            <span style="color:#262626;font-size:21px;font-weight:500; font-family: sans-serif; text-align: left !important">Student's Placement</span>
            <span style="color:#262626;font-size:14px; font-family: sans-serif;">Placement cell of AITH has taken upon itself the onerous yet fulfilling task of assisting the students bettering their career prospect by providing them need..</span>
            <button class="btn  p-0 mt-1" style="width:100px;height:25px;background-color: #3e9599;color: #fff ;font-size: 14px ;font-weight: bold;"> Read more</button>

        </div>
    </div>
</div>

<style>
    .photos ul img {
        border-radius: 6px 6px 0 0;
        width: 100%;
        margin-bottom: 2px;
    }

    .photos ul li {
        list-style: none;
        ;

    }

    .vedios ul iframe {

        width: 100%;
        margin-bottom: 2px;
    }

    .vedios ul li {
        list-style: none;
        width: 100% !important;

    }

</style>
<div class="jumbotron p-3 m-3" style="background-color: #FFF">
    <div class="row d-flex flex-column justify-content-center align-items-center" style=" border-bottom: 1px solid #1f4a4d;">
        <span style="color:#1f4a4d;font-size:25px;font-weight:600; font-family: sans-serif;">Media Gallary</span>
    </div>
    <div class="row p-0 m-0">

        <div class="col-md-4 p-4  photos  d-flex flex-row justify-content-center  m-0 w-100" style="position: relative;">
            <div class=" row w-100 d-flex justify-content-center align-items-center" style="position: absolute;bottom: 26px;left:0;"> <button class="btn p-0 " style="width:124px;height:35px;background-color:#262626;color: #fff ;font-size: 16px ;font-weight: bold;margin-top: 2px;z-index: 130; border-radius: 18px 18px 0 0 "> More...</button></div>

            <div class="panel row p-0 m-0" style="width:100% !important;height: 480px;overflow: hidden;border:15px solid #262626;border-radius: 40px">
                <div class="panel-body p-0 m-0 ">
                    <div class="row p-0 m-0 ">
                        <div class="col-xs-12 p-0 m-0">
                            <ul class="gallary m-0" style="width:100%;padding:1px ;border-radius: 30px">


                                <li class="news-item m-0 p-0 ">
                                    <img src="images/func1.jpg">
                                </li>


                                <li class="news-item m-0 p-0 ">
                                    <img src="images/campus1.png">
                                </li>

                                <li class="news-item m-0 p-0 ">
                                    <img src="images/campus2.jpg">
                                </li>

                                <li class="news-item m-0 p-0 ">
                                    <img src="images/PhotoGallery4.jpeg">
                                </li>
                                </li>
                                <li class="news-item m-0 p-0 ">
                                    <img src="images/gallary1_aith.jpg">
                                </li>
                                </li>

                                </li>
                                <li class="news-item m-0 p-0 ">
                                    <img src="images/2019-10-30.jpg">
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="col-md-4 p-4  vedios  d-flex flex-row justify-content-center  m-0 w-100" style="position: relative;">

            <div class=" row w-100 d-flex justify-content-center align-items-center" style="position: absolute;bottom: 26px;left:0;"> <button class="btn p-0 " style="width:124px;height:35px;background-color:#262626;color: #fff ;font-size: 16px ;font-weight: bold;margin-top: 2px;z-index: 130; border-radius: 18px 18px 0 0 "> More...</button></div>
            <div class="panel row p-0 m-0" style="width:100% !important;height: 480px;overflow: hidden;border:15px solid #262626;border-radius: 40px">
                <div class="panel-body p-0 m-0 w-100">
                    <div class="row p-0 m-0 w-100">
                        <div class="col-xs-12 p-0 m-0 w-100">
                            <ul class="vedio m-0" style="width:100% !important;padding:1px ;border-radius: 30px">


                                <li class="news-item m-0 p-0 ">


                                    <iframe src="https://www.youtube.com/embed/0nVu6jVJ5Xc?list=TLPQMTYwMjIwMjDRbh950mUjMg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </li>
                                <li class="news-item m-0 p-0 ">


                                    <iframe src="https://www.youtube.com/embed/YeMh47exhNU?list=TLPQMTYwMjIwMjDRbh950mUjMg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </li>
                                <li class="news-item m-0 p-0 ">
                                    <iframe src="https://www.youtube.com/embed/eMwO3uMflJ4?list=TLPQMTYwMjIwMjDRbh950mUjMg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </li>
                                <li>
                                    <iframe src="https://www.youtube.com/embed/dSLOueSAifQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-4 p-4  photos  d-flex flex-row justify-content-center  m-0 w-100" style="position: relative;">

            <div class=" row w-100 d-flex justify-content-center align-items-center" style="position: absolute;bottom: 26px;left:0;"> <button class="btn p-0 " style="width:124px;height:35px;background-color:#262626;color: #fff ;font-size: 16px ;font-weight: bold;margin-top: 2px;z-index: 130; border-radius: 18px 18px 0 0 "> More...</button></div>
            <div class="panel row p-0 m-0" style="width:100% !important;height: 480px;overflow: hidden;border:15px solid #262626;border-radius: 40px">
                <div class="panel-body p-0 m-0 ">
                    <div class="row p-0 m-0 ">
                        <div class="col-xs-12 p-0 m-0">
                            <ul class="gallary m-0" style="width:100%;padding:1px ;border-radius: 30px">


                                <li class="news-item m-0 p-0 ">

                                    <img src="images/media1.jpg">
                                </li>
                                <li class="news-item m-0 p-0 ">

                                    <img src="images/media1.jpg">
                                </li>


                            </ul>

                        </div>
                    </div>
                </div>
            </div>

        </div>



    </div>
</div>

<div class="jumbotron p-0  m-0">
    <div class="row p-0 m-0 w-100" style="position: relative;">
        <div class="col-12 w-100"></div>
        <img src="images/2019-06-29.jpg" style="width: 100%;height: 270px;">
        <div class="col-12" style="width: 100%;height: 100%;position: absolute;top: 0;left: 0;background-color: black;opacity: 0.3;"></div>
        <div class="col-12 d-flex flex-column justify-content-end align-items-center" style="width: 100%;height: 100%;position: absolute;top: 0;left: 0;background:none;color: #fff">
            <h3 style="font-weight: bold;font-family: cursive;">About AITH</h3>
            <span style="font-size: 14px;line-height: 17px; font-family: sans-serif;margin-bottom: 7px;"> Dr. Ambedkar Institute of Technology for Handicapped (A.I.T.H.) was established in 1997 at Kanpur, (U.P., India) by Government of Uttar Pradesh under World Bank assisted project through Technical Education Program. A.I.T.H. is an autonomous institute imparting technical education to students through undergraduate (B.Tech.) and Diploma level courses. The entire facility is barrier free and committed to global vision, where normal and disabled students study together. The Undergraduate level course is open for both (normal and disabled) where as the diploma level course is exclusively for physically disabled.</span>
        </div>
    </div>

</div>

</div>

<style>
    .footer span {
        font-size: 12px;
        color: darkgray;
        font-family: sans-serif;
    }

    .footer h6 {
        margin-top: 5px;
        font-size: 14px;
        margin-bottom: -1px;
    }

</style>
<div class="jumbotron footer p-4 m-0" style="background-color: #1f4a4d; color: #fff">
    <div class="row p-0 m-0 w-100">
        <div class="col-md-3 d-flex flex-column justify-content-start align-items-start">
            <h6>ALUMNI</h6>
            <span>Constitutions</span>
            <span>Rules & By-Laws</span>
            <span>Executive Committee</span>
            <h6>STUDENTS CORNER</h6>
            <span>Anti-Ragging</span>
            <span>Co-curricular Activities</span>
            <span>Students Councellling Services</span>
        </div>

        <div class="col-md-3 d-flex flex-column justify-content-start align-items-start">
            <h6>ALUMNI</h6>
            <span>About Us</span>
            <span>History</span>
            <span>Facilities</span>
            <span>AICTE NORMS</span>
            <span>Vacancy</span>
            <span>Sitemap</span>
            <span>SRTI-Act</span>
        </div>
        <div class="col-md-3 d-flex flex-column justify-content-start align-items-start">

            <h6> ADMISSION</h6>
            <span>Degree Wing</span>
            <span>Diploma Wing</span>
            <h6> FEE STRUCTURE</h6>
            <span>Degree Student Fee</span>

            <span>Diploma Student Fee</span>
            <h6>PLACEMENT</h6>
            <span>Training & Placement</span>
            <span>Students Councellling Services</span>
            <span>Campus Recruitment</span>
            <span>Download Brochure</span>
        </div>
        <div class="col-md-3 d-flex flex-column justify-content-start align-items-start">

            <h6> GOVERNANCE</h6>
            <span>Director's Desk</span>
            <span>Dean Committee</span>
            <span>Academic Committee</span>
            <span>Examination Committee</span>
            <h6> GALLERY</h6>
            <span>Photo gallary</span>
            <span>Vedio gallary</span>
            <span>Media gallary</span>

        </div>
    </div>
    <div class="row d-flex flex-row justify-content-center mt-2">
        <?php
    require_once(PUBLIC_PATH . '/student/includes/student_registration_form.inc.php');
?>
        <?php include(SHARED_PATH . '/public_footer.php'); ?>
    </div>

</div>

    


<script>
    $(function() {
        $(".vedio").bootstrapNews({
            newsPerPage: 4,
            autoplay: false,
            pauseOnHover: true,
            navigation: false,
            direction: 'up',
            newsTickerInterval: 2500,
            onToDo: function() {

            }
        });
    });


    $(function() {
        $(".gallary").bootstrapNews({
            newsPerPage: 4,
            autoplay: true,
            pauseOnHover: true,
            navigation: false,
            direction: 'up',
            newsTickerInterval: 3000,
            onToDo: function() {
                console.log(this);
            }
        });
    });

    $(function() {
        $(".demo1").bootstrapNews({
            newsPerPage: 6,
            autoplay: true,
            pauseOnHover: true,
            navigation: false,
            direction: 'up',
            newsTickerInterval: 3000,
            onToDo: function() {
                console.log(this);
            }
        });
    });

</script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="js/jquery.js"></script>
<!--   <script src="js/jquery-ui.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- AJAX request for new student registration --STARTS -->
<!-- JAVASCRIPT----------------------  -->
<script>
    var student_account_modal = document.getElementById('login_btn');
    // TODO : submit_btn is not getting the value
    var submit_btn = document.getElementsByClassName('student_reg_login'); // problem
    var original_btn_value, form_details, error_div, url;

    if (student_account_modal !== null) {

        // let submit_btn = document.getElementById('reg_btn');

        //let div1 = document.getElementById('profile');
        //var pagination,pagination_length;
        let request_in_progess = false;

        function set_dynamic_variables($this) {
            if ($this.hasAttribute("data-src")) {
                let data_src = $this.getAttribute('data-src');
                switch (data_src) {
                    case 'student_registration':
                        form_details = document.getElementById("student_registration");
                        error_div = document.getElementById("errors_for_registration");
                        url = './student/process/student_registration_process.php';
                        break;

                    case 'student_login':
                        form_details = document.getElementById("student_login");
                        error_div = document.getElementById("errors_for_login");
                        url = './student/process/student_login_process.php';
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

        function set_original_btn_value(e) {

            original_btn_value = e.target.textContent;
        }
        // Don't remove the last space from `fill` value which is '#fff '
        function svg_loader(fill = '#fff ') {

            let svg = '<svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve" style="width: 25px; height: 25px;"> <path fill=' + fill + ' d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50"> <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="0.5s" from="0 50 50" to="360 50 50" repeatCount="indefinite"/> </path></svg>';

            return svg;
        }

        // When AJAX request is in progress then show loading in button
        function show_loading(e) {
            set_original_btn_value(e);
            e.target.disabled = true;
            e.target.style.backgroundColor = '#8a8a8a';
            e.target.innerHTML = 'loading ';
            e.target.innerHTML += svg_loader();
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

                    // console.log('xhr.responseText___________________________________');
                    // console.log(xhr.responseText);
                    let json = show_json(xhr.responseText);
                    // console.log('json___________________________________');
                    // console.log(json);
                    if (json.hasOwnProperty('errors') && json.errors.length > 0) {
                        reset_errors();
                        display_errors(json.errors);
                    } else if (json.hasOwnProperty('registration') && json.registration === true) {
                        hide_errors();
                        window.location.href = './student/nsa.php';
                    } else if (json.hasOwnProperty('login') && json.login === true) {
                        hide_errors();
                        request_in_progess = false;
                        window.location.href = './student/nsa.php';
                        return true;
                    }
                    hide_loading(e);
                } // if

                // It means request has completed.
                request_in_progess = false;

            }; // onreadystatechange()
            let form_data = new FormData(form_details);

            // for ([key, value] of form_data.entries()) {
            //     console.log(key, value);
            //     }

            /* Sending the request */
            xhr.send(form_data);
        } // process_to_save_data() function ends

        // addEventLinstener for click on a save button for saving the details (7 tables)
        // addEventLinstener for click on a save button for saving the details (7 tables)
        for (let i = 0; i < submit_btn.length; i++) {
            submit_btn[i].addEventListener('click', function(e) {
                e.preventDefault();
                set_dynamic_variables(this);
                process_to_save_data(e);
            }, false);
        }

    }

</script>
<!-- AJAX request for new student registration --ENDS------------------------->
<!-- AJAX request for login of new student --ENDS------------------------->

<script>
    if (student_account_modal !== null) {
        //when we refresh the captcha then clear the previous inputed value for captcha entered by user.
        let refresh_link = document.querySelectorAll('.captcha a');

        function refresh(e) {
            if (e.tagName == 'INPUT') {
                e.value = '';
            }
        }
        for (let i = 0; i < refresh_link.length; i++) {
            refresh_link[i].addEventListener('click', function(e) {

                refresh(e.target.parentElement.parentElement.children[1]);

            }, false);
        }
    }

</script>

<!-- FOOTER -->
