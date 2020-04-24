<div class="tab-pane  p-0 m-0 fade" id="v-pills-step1" role="tabpanel" aria-labelledby="v-pills-step1-tab">
                  
                           <div class="row mt-2 pb-2 p-0 m-0 w-100 d-flex justify-content-center mb-2 mt-2 align-items-center">
                        <span style=" color:gray; font-weight:660; font-size: 17px;border-bottom:1px solid black;"> Allotment datails :-</span></div>
                    <form return="false" class="take_a_form"  method="post" id='allotement_details'>
                         <!-- ERROR div -->
                       <!--   <div class="row p-0 m-0 d-flex justify-content-center align-items-center">
                              <div id="errors_for_allotement_details" class="error_in_form row " ></div>
                         </div> -->
                       
                         <!-- ERROR div  -----ENDS----- -->
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend"> <span class="">Year of
                                        Admission</span></div>
                                <div class="col-md-7 p-0 m-0" id="right-f">
                                    <select class="form-control f-select Year-of-Admission " required="required" id="Year-of-Admission" name="YearOfAdmission">
                                        <option selected disabled>---</option>

                                        <?php
                            $years = $allotment_details->year_batch;
                            foreach ($years as $year) { ?>
                            <option value="<?php echo $year;?>" <?php if ($allotment_details->YearOfAdmission == $year) {
                                echo 'selected';
                            } ?>><?php echo $year; ?></option>
                            <?php } ?>
                        </select>
                                    <div class="val-error" id="Year-of-Admission-error">Please select option</div>
                                </div>
                            </div>
                        </div>

                        <!-- NEW KAMAL HTML ------------- -->

                            <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend"> <span class="">Type of
                                        Admission</span></div>
                                <div class="col-md-7 p-0 m-0" id="right-f">
                                    <select class="form-control f-select Type-of-Admission " required="required" id="Type-of-Admission" name="type">
                                    <option selected disabled>---</option>
                            <?php
                            $types = StudentAllotmentDetails::TYPE;
                            sort($types);
                            //$sorted_branch = sort($types);
                            foreach ($types as $type) { ?>
                            <option value="<?php echo $type;?>" <?php if ($allotment_details->Type == $type) {
                                echo 'selected';
                            } ?>><?php echo ucwords($type); ?></option>
                            <?php } ?>
                        </select>
                              <div class="val-error" id="Type-of-Admission-error">Please select option</div>
                                </div>
                            </div>
                        </div>
                        <!-- NEW KAMAL HTML --------------------ENDS------>
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend"> <span class=""> Allotted Branch </span></div>
                                <div class="col-md-7 p-0 m-0 " id="right-f">
                                    <select class="form-control f-select Allotted-Branch" required="required" id="Allotted-Branch" name="AllotedBranch">
                                        <option selected disabled>---</option>
                                        <?php
                            $all_branch = StudentAllotmentDetails::BRANCH;
                            sort($all_branch);
                            foreach ($all_branch as $branch) { ?>
                            <option value="<?php echo $branch;?>" <?php if ($allotment_details->AllotedBranch == $branch) {
                                echo 'selected';
                            } ?>><?php echo ucwords($branch); ?></option>
                            <?php } ?>
                        </select>

                                    <div class="val-error" id="Allotted-Branch-error">Please select option</div>
                                </div>
                            </div>
                        </div>

                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend"> <span class=""> Alloted Category</span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <select class="form-control  f-select Allotted-Category" required="required" id="Allotted-Category" name="AllotedCategory">
                                        <option selected disabled>---</option>
                                        <?php
                            $categories = StudentAllotmentDetails::CATEGORY;
                            sort($categories);
                            foreach ($categories as $category) { ?>
                            <option value="<?php echo $category;?>" <?php if ($allotment_details->AllotedCategory == $category) {
                                echo 'selected';
                            } ?>><?php echo ucwords($category); ?></option>
                            <?php } ?>
                        </select>
                                    <div class="val-error" id="Allotted-Category-error">Please select option</div>
                                </div>
                            </div>
                        </div>
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend"> <span class=""> Allotted Sub Category</span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <select class="form-control f-select Allotted-Sub-Category" required="required" id="Allotted-Sub-Category" name="AllotedSubCategory">
                                        <option selected disabled>---</option>
                                                    <?php
                                        $sub_categories = StudentAllotmentDetails::SUBCATEGORY;
                                        sort($sub_categories);
                                        foreach ($sub_categories as $category) { ?>
                                        <option value="<?php echo $category;?>" <?php if ($allotment_details->AllotedSubCategory == $category) {
                                            echo 'selected';
                                        } ?>><?php echo ucwords($category); ?></option>
                                        <?php } ?>



                                    </select>
                                    <div class="val-error" id="Allotted-Sub-Category-error">Please select option</div>
                                </div>
                            </div>
                        </div>


                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Allotted Roll No. </span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <input type="number" name="AllotedRollNo" required="required" id="Allotted-Roll-No" class="form-control Allotted-Roll-No " placeholder="Allotted Roll No." value="<?php echo h($allotment_details->AllotedRollNo); ?>">
                                    <div class="val-error" id="Allotted-Roll-No-error">Please write Allotted RollNo.</div>
                                </div>
                            </div>
                        </div>


                        <div class="row mt-4 mb-2 p-2 m-0 w-100">
                            <div class="input-group d-flex flex-row justify-content-center" id="form-field">

                                <button class="btn Allotted-save student_full_detail_btn" id="save" name="save" data-src="allotement_details">Save</button>
                               <!--  <input type="submit" class="btn Allotted-save" id="save" name="allotment_details[save]" value="Save"> -->
                                <button class="btn Allotted-save-next" id="save-next" name="save_next">Save and Next</button>
                            </div>
                        </div>

                    </form>
                </div>
