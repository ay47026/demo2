<?php require_once('../../../private/initialize.php'); ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<body>

    <div class="jumbotron p-0 m-0" style="width: 100% ;height:100vh;">

        <!-- start  header-->
        <?php include(SHARED_PATH . '/public_header_02.php'); ?>
        <!-- end header-->

        <div class="row p-0 m-0" style="width: 100%;height: 90vh;background:lightgray; ">


            <!-- start   navigation menu-->
            <?php require_once(SHARED_PATH . '/navigation.php'); ?>
            <!--  end navigation menu-->

            <!--            main content div-->
            <div class="col-md-11 p-0 m-0 boder" style=";margin-left: 10px;height: : 90vh">
                <div class="row m-c p-0 pt-1 m-0 d-flex flex-column justify-content-start align-items-start" style="height: : 90vh">
                    <ul class="nav nav-tabs pl-4" id="myTab" role="tablist" style="10vh">
                        <span class="employe_ad_span">Time table ADMIN :</span>
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Create time table </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">View All time tables </a>
                        </li>

                    </ul>
                    <div class="tab-content p-1" id="myTabContent" style=" height: 80vh; width: 99%;margin-top: 5px;">
                        <div class="tab-pane  show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <from action="" method="post">
                                <div class="row pl-4">
                                    <div class="col-6">

                                        <div class="row ">

                                            <div class="col-3  m-0 p-1 mb-3">
                                                <div class="input-group">

                                                    <select class="form-control border  " required="required">
                                                         <option>Select year </option>
                                                        <option>1st year </option>
                                                        <option>2nd year</option>
                                                        <option>3rd year</option>
                                                        <option>Final year</option>

                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-5 m-0 p-1 mb-3 ">
                                                <div class="input-group">

                                                    <select class="form-control border  " required="required">
                                                        <option>Select Branch </option>
                                                        <option>Computer science engineering </option>
                                                        <option>Electronic engineering</option>
                                                        <option>Biotect engineering</option>
                                                        <option> Electronics engineering</option>
                                                        <option>Chemical engineering </option>

                                                    </select>
                                                </div>
                                            </div>
                                             <div class="col-4 m-0 p-1">
                                                <div class="input-group mb-3 ">

                                                    <input class="form-control  " id="r-m-n" required="required" placeholder="Room Number/note" type="text" name="" value="">
                                                </div>
                                            </div>


                                        </div>

                                    </div>

                                    <div class="col-6">
                                        <div class="row completeform">
                                            <div class="col-5 m-0 p-0">
                                                <div class="input-group mb-3 ">
                                              <div class="input-group-prepend"> <span class="input-group-text border ">Time in minutes</span></div>
                                                    <input class="form-control  " id="p-t" required="required" placeholder="Period" type="number" name="" value="">
                                                </div>
                                            </div>
                                            <div class="col-2 m-0 p-0">
                                                <div class="input-group mb-3 ">

                                                    <input class="form-control  " id="l-t" required="required" placeholder="Lunch" type="number" name="" value="">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="row">
                                                    <div class="col-5 admit-notice">

                                                    </div>
                                                    <div class="col-7  d-flex flex-row justify-content-start align-items-center">
                                                        <button class="btn  btn-info text-light admit-now  " type="submit" style="font-weight:bold">Preview</button>
                                                        <button class="btn ml-1 btn-danger text-light admit-now  " type="submit" style="font-weight:bold">Save</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table class="table sub table-dark">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col" id="p1">9 - 10</th>
                                                        <th scope="col" id="p2">10 - 11</th>
                                                        <th scope="col" id="p3">11 - 12</th>
                                                        <th scope="col" id="p4">12 - 1</th>

                                                        <th scope="col" id="lu">lunch</th>
                                                        <th scope="col" id="p5">2 - 3</th>
                                                        <th scope="col" id="p6">3 - 4</th>
                                                        <th scope="col" id="p7">4 - 5</th>


                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">monday</th>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0 " style="margin:1px;">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  " required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group  ">

                                                                        <input class=" select-text border " id="r-nn" required="required" placeholder="Room Number/note" type="text" name="" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group  ">

                                                                        <input class=" select-text border" id="r-nn2"required="required" placeholder="Room Number/note" type="text" name="f_mobile">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group  ">

                                                                        <input class=" select-text border" required="required" placeholder="Room Number/note" type="text" name="f_mobile">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group  ">

                                                                        <input class=" select-text border" required="required" placeholder="Room Number/note" type="text" name="f_mobile">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0" >
                                                           lunch
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group  ">

                                                                        <input class=" select-text border" required="required" placeholder="Room Number/note" type="text" name="f_mobile">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group  ">

                                                                        <input class=" select-text border" required="required" placeholder="Room Number/note" type="text" name="f_mobile">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group  ">

                                                                        <input class=" select-text border" required="required" placeholder="Room Number/note" type="text" name="f_mobile">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>





                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Tuesday</th>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Wednesday</th>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Thrasday</th>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>







                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Friday</th>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>





                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Saturday</th>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Sunday</th>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="m-0 p-0">
                                                            <div class="row w-100 p-0 m-0">
                                                                <div class="col-12 p-0 m-0  ">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Sub-code </option>
                                                                            <option>2nd</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 p-0 m-0" style="margin-top:-5px;">
                                                                <div class="col-12 p-0 m-0 mb-1">
                                                                    <div class="input-group p-0 m-0">

                                                                        <select class="select-text border  admit-in" required="required">
                                                                            <option>Teacher - name </option>
                                                                            <option>abhisek yadav ayadva</option>
                                                                            <option>3rd</option>
                                                                            <option>Final</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>


                                </div>

                            </from>

                        </div>
                        <div class="tab-pane " id="profile" role="tabpanel" aria-labelledby="profile-tab"> abhisshhshhshhsh </div>
                        <!--                        <div class="tab-pane " id="contact" role="tabpanel" aria-labelledby="contact-tab"> kamal </div>-->
                    </div>

                </div>
            </div>



        </div>




        <div class="modal fade " id="main_admin" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="position: relative">
                        <h5 class="modal-title" id="exampleModalLabel">Login Main Admin</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: sticky;top: 0;right: 0;"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body ">
                        <form action="main_admin.php" method="post" enctype="multipart/form-data" style="margin-top: -20px">
                            <div class="form-group">

                                <input type="text" class="form-control" id="user_id" aria-describedby="emailHelp" placeholder="user Id">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your id with anyone else.</small>
                            </div>
                            <div class="form-group">

                                <input type="password" class="form-control" id="password" placeholder="Password">
                            </div>


                        </form>

                    </div>
                    <div class="modal-footer">
                        <a href="main_admin.php"> <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Login</button></a>

                    </div>
                </div>
            </div>
        </div>





        <div class="modal fade " id="time_table_admin" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="position: relative">
                        <h5 class="modal-title" id="exampleModalLabel">Login Main Admin</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: sticky;top: 0;right: 0;"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body ">
                        <form action="t_t_admin.php" method="post" enctype="multipart/form-data" style="margin-top: -20px">
                            <div class="form-group">

                                <input type="text" class="form-control" id="user_id" aria-describedby="emailHelp" placeholder="user Id">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your id with anyone else.</small>
                            </div>
                            <div class="form-group">

                                <input type="password" class="form-control" id="password" placeholder="Password">
                            </div>


                        </form>

                    </div>
                    <div class="modal-footer">
                        <a href="main_admin.php"> <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Login</button></a>

                    </div>
                </div>
            </div>
        </div>





        <div class="modal fade " id="employe_admin" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="position: relative">
                        <h5 class="modal-title" id="exampleModalLabel">Login Main Admin</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: sticky;top: 0;right: 0;"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body ">
                        <form action="employer_admin.php" method="post" enctype="multipart/form-data" style="margin-top: -20px">
                            <div class="form-group">

                                <input type="text" class="form-control" id="user_id" aria-describedby="emailHelp" placeholder="user Id">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your id with anyone else.</small>
                            </div>
                            <div class="form-group">

                                <input type="password" class="form-control" id="password" placeholder="Password">
                            </div>


                        </form>

                    </div>
                    <div class="modal-footer">
                        <a href="main_admin.php"> <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Login</button></a>

                    </div>
                </div>
            </div>
        </div>





        <div class="modal fade " id="main_admin" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="position: relative">
                        <h5 class="modal-title" id="exampleModalLabel">Login Main Admin</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: sticky;top: 0;right: 0;"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body ">
                        <form action="" method="post" enctype="multipart/form-data" style="margin-top: -20px">
                            <div class="form-group">

                                <input type="text" class="form-control" id="user_id" aria-describedby="emailHelp" placeholder="user Id">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your id with anyone else.</small>
                            </div>
                            <div class="form-group">

                                <input type="password" class="form-control" id="password" placeholder="Password">
                            </div>


                        </form>

                    </div>
                    <div class="modal-footer">
                        <a href="main_admin.php"> <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Login</button></a>

                    </div>
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

    <script src="../../js/wow.min.js"></script>
    <script src="../../js/script/time_table_admin_script.js"></script>
    <script src="../../js/script.js"></script>




</body>

</html>
