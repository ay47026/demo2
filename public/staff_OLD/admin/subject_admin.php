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
                        <span class="employe_ad_span">Subject ADMIN :</span>
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add subject</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Veiw subjects</a>
                        </li>
                        <!--
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Search student</a>
                        </li>
-->
                    </ul>
                    <div class="tab-content p-1" id="myTabContent" style=" height: 80vh; width: 99%;margin-top: 5px;">
                        <div class="tab-pane  show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <from action="" method="post">
                                <div class="row pl-4">
                                    <div class="col-6">

                                        <div class="row ">

                                            <div class="col-4 mb-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text  border ">Year</span></div>
                                                    <select class="form-control border  admit-in" required="required">
                                                        <option>1st </option>
                                                        <option>2nd</option>
                                                        <option>3rd</option>
                                                        <option>Final</option>

                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-8 mb-3 ">
                                                <div class="input-group">
                                                    <div class="input-group-prepend"> <span class="input-group-text border ">Branch</span></div>
                                                    <select class="form-control border  " required="required">
                                                        <option>select </option>
                                                        <option>Computer science engineering </option>
                                                        <option>Electronic engineering</option>
                                                        <option>Biotect engineering</option>
                                                        <option> Electronics engineering</option>
                                                        <option>Chemical engineering </option>

                                                    </select>
                                                </div>
                                            </div>


                                        </div>

                                    <div class="row completeform">
                                        <div class="col-6">
                                            <div class="input-group mb-3 ">
                                                <div class="input-group-prepend "><span class="input-group-text m-0">Subject name</span></div>
                                                <input class="form-control s-name " required="required" placeholder="Subjct name" type="text" name="f_mobile">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="input-group mb-3 ">
                                                <div class="input-group-prepend "><span class="input-group-text m-0">Subject code</span></div>
                                                <input class="form-control s-name " required="required" placeholder="Subject code" type="text" name="s_mobile">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row completeform">
                                        <div class="col-6">
                                            <div class="input-group mb-3 ">
                                                <div class="input-group-prepend "><span class="input-group-text m-0">Elective name</span></div>
                                                <select class="form-control border  admit-in" required="required">
                                                    <option>select </option>
                                                    <option>Non elective</option>
                                                    <option>Elective</option>


                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="input-group mb-3 ">
                                                <div class="input-group-prepend "><span class="input-group-text m-0">Nummber of credits</span></div>
                                                <input class="form-control s-name " required="required" placeholder="Credit" type="number" name="s_mobile">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row completeform">
                                        <div class="col-6">
                                            <div class="input-group mb-3 ">
                                                      <div class="input-group-prepend "><span class="input-group-text m-0">Include in time table</span></div>
                                                <div class="form-check ml-3 ">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" style="width:25px; height:25px;">

                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                        <div class="row">
                                            <div class="col-9 admit-notice">

                                            </div>
                                            <div class="col-3 ">
                                                <button class="btn mt-4 btn-info text-light admit-now  " type="submit" style="font-weight:bold">Submit</button>
                                            </div>
                                        </div>
                                </div>

                                    <div class="col-6"></div>
                                </div>




                            </from>

                        </div>
                        <div class="tab-pane " id="profile" role="tabpanel" aria-labelledby="profile-tab"> abhisshhshhshhsh </div>
                        <!--                        <div class="tab-pane " id="contact" role="tabpanel" aria-labelledby="contact-tab"> kamal </div>-->
                    </div>


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










        <!-- jQuery first, then Popper.js, then Bootstrap JS -->


         <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="../../js/jquery.js"></script>
    <script src="../../js/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="../../js/wow.min.js"></script>
    <script src="../../js/script.js"></script>




</body>

</html>
