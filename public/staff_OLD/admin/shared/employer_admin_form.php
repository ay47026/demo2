<form action="<?php echo url_for('/staff/admin/employer_admin.php'); ?>" class="take_a_form" method="post">
    <div class="row">
        <div class="col-6 pl-4">
            <div class="row">
                <div class="col-3 p-0 d-flex flex-column align-items-center " style=" pointer:cursor">
                    <img src="<?php echo url_for('/images/upload_pic.png'); ?>" style="width:100%; " class="upload-emp-pic border border-primary">
                    <button class="btn bg-info text-light upload-photo-emp-btn mt-1" type="button">Upload Photo</button>
                </div>
                <div class="col-9 mt-2">
                    <div class="input-group mb-3 ">
                        <div class="input-group-prepend "><span class="input-group-text m-0">First name</span></div>
                        <input class="form-control s-name " required="required" placeholder="First name" type="text" name="employer_admin[first_name]">
                    </div>
                    <div class="input-group mb-3 ">
                        <div class="input-group-prepend "><span class="input-group-text  m-0">Last name</span></div>
                        <input class="form-control f-name " required="required" placeholder="Last name" type="text" name="employer_admin[last_name]">
                    </div>
                    <div class="input-group mb-3 ">
                        <div class="input-group-prepend "><span class="input-group-text  m-0">Father's name</span></div>
                        <input class="form-control m-name " required="required" placeholder="Father's name" type="text" name="employer_admin[father_name]">
                    </div>
                    <div class="input-group mb-3 ">
                        <div class="input-group-prepend "><span class="input-group-text  m-0">Email</span></div>
                        <input class="form-control m-name " required="required" placeholder="Email" type="email" name="employer_admin[email]">
                    </div>
                </div>
            </div>
            <div class="row completeform">
                <div class="col-6">
                    <div class="input-group mb-3 ">
                        <div class="input-group-prepend "><span class="input-group-text m-0">First M/No.</span></div>
                        <input class="form-control s-name " required="required" placeholder="Mobile Number" type="number" name="employer_admin[first_mob_no]">
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group mb-3 ">
                        <div class="input-group-prepend "><span class="input-group-text m-0">Second M/No.</span></div>
                        <input class="form-control s-name " required="required" placeholder="Mobile Number" type="number" name="employer_admin[second_mob_no]">
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-6 mb-3">
                    <div class="input-group">
                        <div class="input-group-prepend"> <span class="input-group-text border">Gender</span></div>
                        <select class="form-control border gender" required=" required" name="employer_admin[gender]">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="input-group">
                        <div class="input-group-prepend"> <span class="input-group-text  border "> Dob</span></div>
                        <input type="text" id="emp_date" required="required" class="form-control border " placeholder="dd/mm/yyyy" name="employer_admin[dob]">
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-6 mb-3">
                    <div class="input-group">
                        <div class="input-group-prepend"> <span class="input-group-text border ">Job profille</span></div>
                        <select class="form-control border  " required="required" name="employer_admin[job_profile]">
                            <?php
                            $job_profiles = Admin::JOB_PROFILES;
                            sort($job_profiles);
                            //$sorted_branch = sort($job_profiles);

                            foreach($job_profiles as $job_profile) { ?>
                            <option value="<?php echo $job_profile;?>" <?php if($admin->job_profile == $job_profile) { echo 'selected'; } ?>><?php echo ucwords($job_profile); ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text  border ">Job designation</span></div>
                            <select class="form-control border  admit-in" required="required" name="employer_admin[job_designation]">
                                <option>professor</option>
                                <option>Asistant professor</option>
                                <option>Guest</option>
                                <option>Deen</option>
                                <option>HOD</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row pl-2" width="90%">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text text-dark">Address</span>
                        </div>
                        <textarea class="form-control address" name="employer_admin[address]"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="row pl-2" width="90%">
                    <span class="input-group-text text-dark">Acadimic detail</span>
                    <textarea rows="5" class="form-control address mt-2" name="employer_admin[acadmic_detail]" style="width:97%"></textarea>
                </div>
                <div class="row pl-2" width="90%">
                    <span class="input-group-text text-dark">Work experience</span>
                    <textarea rows="5" class="form-control address mt-2" name="employer_admin[work_experience]" style="width:97%"></textarea>
                </div>
                <div class="row">
                    <div class="col-9 admit-notice">
                    </div>
                    <div class="col-3 ">
                        <button class="btn mt-4 btn-danger text-light admit-now  " type="submit">Submit</button>
                        <!-- <button class="btn mt-4 btn-danger text-light admit-now  " type="submit" name="employer_admin[submit]">Submit</button> -->

                    </div>
                </div>
            </div>
        </div>
    </form>
