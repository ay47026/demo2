<div class="tab-pane fade" id="v-pills-step2" role="tabpanel" aria-labelledby="v-pills-step2-tab">
                  
                           <div class="row mt-2 pb-2 p-0 m-0 w-100 d-flex justify-content-center mb-2 mt-2 align-items-center">
                        <span style=" color:gray; font-weight:660; font-size: 17px;border-bottom:1px solid black;"> Personal datails :-</span></div>
                    <form method="post" id="personal_details">
                        <!-- ERROR div -->
                         <div class="row p-0 m-0 d-flex justify-content-center align-items-center">
                                 <div id="errors_for_personal_details" class="error_in_form"></div>
                         </div>
                  
                        <!-- ERROR div  -----ENDS----- -->

                        <!-- 0-->
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class="">First Name</span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <input type="text" name="FirstName" required="required" id="First-Name" class="form-control  First-Name" placeholder="First Name" value="<?php echo h($personal_details->FirstName); ?>">
                                    <div class="val-error" id="First-Name-error">Please write First name</div>
                                </div>
                            </div>

                        </div>
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class="">Last Name</span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <input type="text" name="LastName" required="required" id="Last-Name" class="form-control  Last-Name" placeholder="Last Name" value="<?php echo h($personal_details->LastName); ?>">
                                    <div class="val-error" id="Last-Name-error">Please write Last name</div>
                                </div>
                            </div>

                        </div>
                        <!-- 1-->
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend"> <span class="">Gender</span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <select class="form-control f-select Gender" required="required" id="Gender" name="Gender">
                                        <option selected disabled>---</option>
                                        <?php
                                        $genders = StudentPersonalDetails::GENDER;
                                        sort($genders);
                                        foreach($genders as $gender) { ?>
                                        <option value="<?php echo $gender;?>" <?php if($personal_details->Gender == $gender) { echo 'selected'; } ?>><?php echo ucwords($gender); ?></option>
                                        <?php } ?>
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
                                    <input type="date" name="DateOfBirth" required="required" id="DOB" class="form-control DOB " placeholder="mm/dd/yyyy" value="<?php echo h($personal_details->DateOfBirth); ?>">
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
                                    <input type="text" name="StudentMobileNo" required="required" id="Student-Mobile-No" class="form-control Student-Mobile-No" placeholder="Mobile No" maxlength="10" value="<?php echo h($personal_details->StudentMobileNo); ?>">
                                    <div class="val-error" id="Student-Mobile-No-error">Please write mobile no</div>
                                </div>
                            </div>
                        </div>
                        <!-- 3-->
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Student’s E-Mail Id </span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <input type="email" name="StudentEmail" required="required" id="Student-E-Mail-Id" placeholder="E-Mail Id" class="form-control Student-E-Mail-Id" value="<?php echo h($personal_details->StudentEmail); ?>">
                                    <div class="val-error" id="Student-E-Mail-Id-error">Please write email</div>
                                </div>
                            </div>
                        </div>
                        <!-- 4-->
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Student’s ADHAR </span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <input type="text" name="StudentAdharNo" placeholder="Adhar" maxlength="20" id="Student-ADHAR" class="form-control Student-ADHAR" value="<?php echo h($personal_details->StudentAdharNo); ?>">
                                    <div class="val-error" id="Student-ADHAR-error">Please write adhar number</div>
                                </div>
                            </div>
                        </div>
                        <!-- 5-->
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Correspondence Address </span></div>
                                <div class="col-md-7 p-0 m-0">


                                    <textarea class="form-control f-textarea Correspondence-Address" name="CorrespondenceAddress" id="Correspondence-Address" cols="4" rows="2"><?php echo h($personal_details->CorrespondenceAddress); ?></textarea>
                                    <div class="val-error" id="Correspondence-Address-error">Please write address</div>
                                    <div class="row   pt-2 m-0 mt-2 mb-2 " style="width:80%">
                                        <div class="col-6 p-0 m-0">
                                            <div class="input-group p-0 m-0" id="form-field">

                                                <div class="col-12 p-0 m-0">
                                                    <select class="form-control f-select C-District" required="required" id="C-District" name="District">
                                                        <option selected disabled>---</option>
                                        <?php
                                        $districts = StudentPersonalDetails::DISTRICT;
                                        sort($districts);
                                        //$sorted_branch = sort($districts);
                                        foreach($districts as $district) { ?>
                                        <option value="<?php echo $district;?>" <?php if($personal_details->District == $district) { echo 'selected'; } ?>><?php echo ucwords($district); ?></option>
                                        <?php } ?>

                                                    </select>

                                                </div>
                                                <div class="col-12 p-0 m-0 " style=""> <span class=""> District </span></div>
                                            </div>
                                        </div>
                                        <div class="col-6 p-0 m-0">
                                            <div class="input-group p-0 m-0" id="form-field">
                                                <div class="col-12 p-0 m-0">
                                                    <input type="number" name="Pincode" id="C-Pincode" class="form-control C-Pincode " value="<?php echo h($personal_details->Pincode); ?>">
                                                    <div class="val-error" id="C-Pincode-error">Please write full name</div>
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
                                <div class="row">
                                    <div class="col-4">
                                        <div class="custom-control mt-2 custom-radio d-flex flex-row justify-content-center align-items-center">
<!--                                         <input type="radio" name="is_address_same" id="a-yes" class="custom-control-input mt-2">
 -->                                        <input type="radio" name="PermanentAndCorrespondingAddSame" value='yes' class="" id="a-yes" <?php if ($personal_details->PermanentAndCorrespondingAddSame == 'yes') {
  echo 'checked';
} ?>>
                                        <label for="a-yes" class="" style="border:none;cursor: pointer;"><span>Yes</span></label>

                                    </div></div>
                                     <div class="col-4 " >
                                          <div class="custom-control mt-2 custom-radio d-flex flex-row justify-content-center align-items-center">
                                         <input type="radio" name="PermanentAndCorrespondingAddSame" class="" id="a-no" value='no' <?php if ($personal_details->PermanentAndCorrespondingAddSame == 'no') {echo 'checked';} ?>>
                                        <label for="a-no" class="" style="border:none;cursor: pointer;"><span>No</span> </label>
                                       

                                    </div>
                                     </div>
                                </div>
                                    
                                   
                                </div>
                            </div>
                        </div>
                        <!-- 7-->
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Permanent Address </span></div>
                                <div class="col-md-7 p-0 m-0">


                                    <textarea class="form-control f-textarea Permanent-Address" name="PermanentAdd" id="Permanent-Address" cols="4" rows="2"><?php echo h($personal_details->PermanentAdd); ?></textarea>
                                    <div class="val-error" id="Permanent-Address-error">Please write address</div>
                                    <div class="row   pt-2 m-0 mt-2 mb-2 " style="width:80%">
                                        <div class="col-6 p-0 m-0">
                                            <div class="input-group p-0 m-0" id="form-field">

                                                <div class="col-12 p-0 m-0">
                                                    <select class="form-control f-select P-District" required="required" name="DistrictPermanent" id="P-District">
                                                      <option selected disabled>---</option>
                                        <?php
                                        $districts = StudentPersonalDetails:: DISTRICT_PERMANENT;
                                        sort($districts);
                                        //$sorted_branch = sort($districts);
                                        foreach($districts as $district) { ?>
                                        <option value="<?php echo $district;?>" <?php if($personal_details->DistrictPermanent == $district) { echo 'selected'; } ?>><?php echo ucwords($district); ?></option>
                                        <?php } ?>

                                                    </select>

                                                </div>
                                                <div class="col-12 p-0 m-0 " style=""> <span class=""> District </span></div>
                                            </div>
                                        </div>
                                        <div class="col-6 p-0 m-0">
                                            <div class="input-group p-0 m-0" id="form-field">
                                                <div class="col-12 p-0 m-0">
                                                    <input type="number" name="PincodePermanent" id="P-Pincode" class="form-control P-Pincode" value="<?php echo h($personal_details->PincodePermanent); ?>">

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

                                <button class="btn Personal-save student_full_detail_btn" id="save" name="save" data-src="personal_details">Save</button>
                                <button type="button" class="btn Personal-save-next" id="">Save and Next</button>
                            </div>
                        </div>

                    </form>
                </div>