<form action="<?php echo url_for('/staff/admin/student_admin.php'); ?>"  class="take_a_form"  method="post">
                                <div class="row">

                                    <div class="col-6 pl-4">

                                        <div class="row">
                                            <div class="col-3 p-0 d-flex flex-column align-items-center " style=" pointer:cursor">
                                                <img src="<?php echo url_for('/images/upload_pic.png'); ?>" style="width:100%; " class="upload-stu-pic border border-primary">
                                                <button class="btn bg-info text-light upload-photo-stu-btn mt-1" type="button">Upload Photo</button>

                                            </div>
                                            <div class="col-9 mt-2">

                                                <div class="input-group mb-3 ">
                                                    <div class="input-group-prepend "><span class="input-group-text m-0">First name</span></div>
                                                    <input class="form-control s-name " required="required" placeholder="First name" type="text" name="student_admin[first_name]">
                                                </div>


                                                <div class="input-group mb-3 ">
                                                    <div class="input-group-prepend "><span class="input-group-text  m-0">Last name</span></div>
                                                    <input class="form-control f-name " required="required" placeholder="Last name" type="text" name="student_admin[last_name]">
                                                </div>

                                                <div class="input-group mb-3 ">
                                                    <div class="input-group-prepend "><span class="input-group-text  m-0">Father's name</span></div>
                                                    <input class="form-control m-name " required="required" placeholder="Father's name" type="text" name="student_admin[father_name]">
                                                </div>
                                                <div class="input-group mb-3 ">
                                                    <div class="input-group-prepend "><span class="input-group-text  m-0">Email</span></div>
                                                    <input class="form-control m-name " required="required" placeholder="Email" type="email" name="student_admin[email]">
                                                </div>





                                            </div>

                                        </div>
                                        <div class="row completeform">
                                            <div class="col-6">
                                                <div class="input-group mb-3 ">
                                                    <div class="input-group-prepend "><span class="input-group-text m-0">First M/No.</span></div>
                                                    <input class="form-control s-name " required="required" placeholder="Mobile Number" type="number" name="student_admin[first_mob_no]">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="input-group mb-3 ">
                                                    <div class="input-group-prepend "><span class="input-group-text m-0">Father's M/No.</span></div>
                                                    <input class="form-control s-name " required="required" placeholder="Mobile Number" type="number" name="student_admin[father_mob_no]">
                                                </div>
                                            </div>




                                        </div>
                                        <div class="row ">
                                            <div class="col-md-6 mb-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend"> <span class="input-group-text border">Gender</span></div>
                                                    <select class="form-control border gender" required=" required" name="student_admin[gender]">
                                                        <?php
                            $genders = Student::GENDER;
                            sort($genders);
                            //$sorted_branch = sort($job_profiles);

                            foreach($genders as $gender) { ?>
                            <option value="<?php echo $gender;?>" <?php if($student->gender == $gender) { echo 'selected'; } ?>><?php echo ucfirst($gender); ?></option>
                            <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend"> <span class="input-group-text  border "> Dob</span></div>
                                                    <input type="text" id="stu_date" required="required" class="form-control border " placeholder="dd/mm/yyyy" name="student_admin[dob]">

                                                </div>
                                            </div>
                                        </div>
                                         <div class="row ">
                                            <div class="col-md-6 mb-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend"> <span class="input-group-text border ">Year</span></div>
                                                    <select class="form-control border  " required="required" name="student_admin[year]">
                                                        <?php
                            $years = Student::YEAR;
                            sort($years);
                            //$sorted_branch = sort($job_profiles);

                            foreach($years as $year) { ?>
                            <option value="<?php echo $year;?>" <?php if($student->year == $year) { echo 'selected'; } ?>><?php echo ucwords($year); ?></option>
                            <?php } ?>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text  border ">Disability percentage</span></div>
                                                    <input class="form-control s-name " required="required" placeholder="Mobile Number" type="number" name="student_admin[disability_percentage]">


                                                </div>
                                            </div>
                                        </div>



                                        <div class="row ">
                                            <div class="col-md-6 mb-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend"> <span class="input-group-text border ">Branch</span></div>
                                                    <select class="form-control border  " required="required" name="student_admin[branch]">
                                                        <?php
                            $branches = Student::BRANCH;
                            sort($branches);
                            //$sorted_branch = sort($job_profiles);

                            foreach($branches as $branch) { ?>
                            <option value="<?php echo $branch;?>" <?php if($student->branch == $branch) { echo 'selected'; } ?>><?php echo ucwords($branch); ?></option>
                            <?php } ?>


                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text  border ">Disability</span></div>
                                                    <select class="form-control border  admit-in" required="required" name="student_admin[disability]">
                                                        <?php
                            $disability = Student::DISABILITY;
                            sort($disability);
                            //$sorted_branch = sort($job_profiles);

                            foreach($disability as $disa) { ?>
                            <option value="<?php echo $disa;?>" <?php if($student->disability == $disa) { echo 'selected'; } ?>><?php echo ucfirst($disa); ?></option>
                            <?php } ?>



                                                    </select>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row pl-2" width="90%">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text text-dark">Address</span>
                                                </div>
                                                <textarea class="form-control address" name="student_admin[address]"></textarea>
                                            </div>



                                        </div>

                                    </div>
                                    <div class="col-6">
                                        <div class="input-group mb-3 ">
                                            <div class="input-group-prepend "><span class="input-group-text m-0">AKTU RollNo.</span></div>
                                            <input class="form-control s-name " required="required" placeholder="roll no." type="number" name="student_admin[aktu_roll_no]">
                                        </div>
                                        <div class="row pl-2" width="90%">


                                            <span class="input-group-text text-dark">Acadimic detail</span>

                                            <textarea rows="5" class="form-control address mt-2" name="student_admin[academic_detail]" style="width:97%"></textarea>
                                        </div>
                                        <!-- <div class="row pl-2" width="90%">
                                            <span class="input-group-text text-dark"></span>

                                            <textarea name="address" rows="5" class="form-control address mt-2" style="width:97%"></textarea>
                                        </div> -->

                                        <div class="row">
                                            <div class="col-9 admit-notice">

                                            </div>
                                            <div class="col-3 ">
                                                <button class="btn mt-4 btn-danger text-light admit-now  " type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </form>
