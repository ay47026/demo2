<div class="tab-pane fade" id="v-pills-step6" role="tabpanel" aria-labelledby="v-pills-step6-tab">
                    

                         <div class="row mt-2 pb-2 p-0 m-0 w-100 d-flex justify-content-center mb-2 mt-2 align-items-center">
                        <span style=" color:gray; font-weight:660; font-size: 17px;border-bottom:1px solid black;">  Gaurdian Details :-</span></div>
                    <form return="false" id="gaurdian_details" method="post">

                        <!-- ERROR div -->
                        <div class="row p-0 m-0 d-flex justify-content-center align-items-center">
                           <div id="errors_for_gaurdian_details" class="error_in_form"></div>
                         </div>
                        
                        <!-- ERROR div  -----ENDS----- -->

                        <!--1-->
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend"> <span class="">Gaurdian Relation</span></div>
                                <div class="col-md-7 p-0 m-0" id="right-f">
                                    <select class="form-control f-select Gaurdian-Relation " required="required" id="Gaurdian-Relation" name="GaurdianRelation">
                                        <option selected disabled>---</option>

                                        <?php
                            $relations = StudentGaurdianDetails::GAURDIAN_RELATION;
                            sort($relations);
                            foreach ($relations as $relation) { ?>
                            <option value="<?php echo $relation;?>" <?php if ($gaurdian_details->GaurdianRelation == $relation) {
                                echo 'selected';
                            } ?>><?php echo ucwords($relation); ?></option>
                            <?php } ?>
                                    </select>
                                    <div class="val-error" id="Gaurdian-Relation-error">Please select option</div>
                                </div>
                            </div>
                        </div>
                         <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""><span class="g_relation_name">Gaudian</span> First Name</span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <input type="text" name="FirstName" required="required" id="Gaurdian-First-Name" class="form-control  Gaurdian-First-Name" placeholder="First Name" value="<?php echo h($gaurdian_details->FirstName); ?>">
                                    <div class="val-error" id="Gaurdian-First-Name-error">Please write First name</div>
                                </div>
                            </div>

                        </div>
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> <span class="g_relation_name">Gaudian</span>Last Name</span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <input type="text" name="LastName" required="required" id="Gaurdian-Last-Name" class="form-control  Gaurdian-Last-Name" placeholder="Last Name" value="<?php echo h($gaurdian_details->LastName); ?>">
                                    <div class="val-error" id="Gaurdian-Last-Name-error">Please write Last name</div>
                                </div>
                            </div>

                        </div>
                        <!--                      2-->
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> <span class="g_relation_name">Gaudian</span>  occupation
                                    </span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <input type="text" name="GaurdianOccupation" required="required" id="Gaurdian-occupation" class="form-control Gaurdian-occupation " placeholder="Gaurdian occupation" value="<?php echo h($gaurdian_details->GaurdianOccupation); ?>">
                                    <div class="val-error" id="Gaurdian-occupation-error">Please write Gaurdian-occupation.</div>
                                </div>
                            </div>
                        </div>
                        <!--3-->
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> <span class="g_relation_name">Gaudian</span>  Mobile No
                                    </span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <input type="text" name="GaurdianMobileNo" required="required" id="Gaurdian-Mobile-No" class="form-control Gaurdian-Mobile-No" placeholder=" Mobile No" value="<?php echo h($gaurdian_details->GaurdianMobileNo); ?>">
                                    <div class="val-error" id="Gaurdian-Mobile-No-error">Please write Gaurdian  Mobile No</div>
                                </div>
                            </div>
                        </div>
                        <!--                           4-->
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> <span class="g_relation_name">Gaudian</span> E-Mail
                                    </span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <input type="text" name="GaurdianEmail" required="required" id="Gaurdian-E-Mail" class="form-control Gaurdian-E-Mail " placeholder=" E-Mail" value="<?php echo h($gaurdian_details->GaurdianEmail); ?>">
                                    <div class="val-error" id="Gaurdian-E-Mail-error">Please write Gaurdian E-Mail.</div>
                                </div>
                            </div>
                        </div>
                        <!--                        5-->
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> <span class="g_relation_name">Gaudian</span> Monthly
                                        Income in Rs.
                                    </span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <input type="text" name="GaurdianMonthlyIncome" required="required" id="Gaurdian-Monthly-Income" class="form-control Gaurdian-Monthly-Income " placeholder="Income in Rs" value="<?php echo h($gaurdian_details->GaurdianMonthlyIncome); ?>">
                                    <div class="val-error" id="Gaurdian-Monthly-Income-error">Please write Gaurdian Monthly
                                        Income in Rs..</div>
                                </div>
                            </div>
                        </div>

                        <!--                           6-->
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> <span class="g_relation_name">Gaudian</span> Residential/
                                        correspondence Address </span></div>
                                <div class="col-md-7 p-0 m-0">


                                    <textarea class="form-control f-textarea Gaurdian-Correspondence-Address" id="Gaurdian-Correspondence-Address" cols="4" rows="2" name="CorrespondenceAddress"><?php echo h($gaurdian_details->CorrespondenceAddress);?></textarea>
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
                                        <input type="radio" name="PermanentAndCorrespondingAddSame" id="g-a-yes" class="" value="yes" <?php if ($gaurdian_details->PermanentAndCorrespondingAddSame == 'yes') {echo 'checked';} ?>>
                                        <label for="g-a-yes" class=""><span>Yes</span></label>

                                    </div>
                                    <div class="custom-control mt-2 custom-radio">
                                        <input type="radio" name="PermanentAndCorrespondingAddSame" id="g-a-no" class="" value="no" <?php if ($gaurdian_details->PermanentAndCorrespondingAddSame == 'no') {echo 'checked';} ?>>
                                        <label for="g-a-no" class=""><span>No</span></label>

                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- 7-->
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> <span class="g_relation_name">Gaudian</span>  Office Address</span></div>
                                <div class="col-md-7 p-0 m-0">


                                    <textarea class="form-control f-textarea Gaurdian-Office-Address" id="Gaurdian-Office-Address" cols="4" rows="2" name="GaurdianOfficeAdd"><?php echo h($gaurdian_details->GaurdianOfficeAdd); ?></textarea>
                                    <div class="val-error" id="Gaurdian-Office-Address-error">Please write address</div>
                                </div>
                            </div>
                        </div>

                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> <span class="g_relation_name">Gaudian</span> Pan No
                                    </span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <input type="text" name="GaurdianPanNo" required="required" id="Gaurdian-Pan-No" class="form-control Gaurdian-Pan-No " placeholder="Gaurdian Pan No" value="<?php echo h($gaurdian_details->GaurdianPanNo); ?>">
                                    <div class="val-error" id="Gaurdian-Pan-No-error">Please write Gaurdian Pan No.</div>
                                </div>
                            </div>
                        </div>

                        <!--                              7-->
                        <div class="row mt-4 mb-2 p-2 m-0 w-100">
                            <div class="input-group d-flex flex-row justify-content-center" id="form-field">

                                <button class="btn Gaurdian-Details-save  student_full_detail_btn" id="Gaurdian-Details-save" data-src="gaurdian_details">Save</button>
                                <button type="button" class="btn Gaurdian-Details-save-next" id="Gaurdian-Details-save-next">Save and Next</button>
                            </div>
                        </div>

                    </form>
                </div>