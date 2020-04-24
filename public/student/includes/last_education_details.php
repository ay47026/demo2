<div class="tab-pane fade" id="v-pills-step4" role="tabpanel" aria-labelledby="v-pills-step4-tab">
                   
                      
                           <div class="row mt-2 pb-2 p-0 m-0 w-100 d-flex justify-content-center mb-2 mt-2 align-items-center">
                        <span style=" color:gray; font-weight:660; font-size: 17px;border-bottom:1px solid black;"> Details of School/college Last Attended :-</span></div>
                    <form return="false" id="last_education_details" method="post">
                         <!-- ERROR div -->
                         <div class="row p-0 m-0 d-flex justify-content-center align-items-center">
                             <div id="errors_for_education_details" class="error_in_form"></div>
                         </div>
                   
                         <!-- ERROR div  -----ENDS----- -->
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Name of School/College Last Attended: </span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <input type="text" name="NameOfSchoolLastAttended" required="required" id="Name-of-S-C" class="form-control Name-of-S-C " placeholder="Name of S/C." value="<?php echo h($education_details->NameOfSchoolLastAttended); ?>">
                                    <div class="val-error" id="Name-of-S-C-error">Please filled this filed.</div>
                                </div>
                            </div>
                        </div>


                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend"> <span class="">Exam Pass
                                    </span></div>
                                <div class="col-md-7 p-0 m-0" id="right-f">
                                    <select class="form-control f-select Exam-Pass " required="required" id="Exam-Pass" name="ExamPass">
                                        <option selected disabled>---</option>
                                        <?php
                                        $genders = StudentEducationDetails::EXAM_PASS;
                                        sort($genders);
                                        foreach($genders as $gender) { ?>
                                        <option value="<?php echo $gender;?>" <?php if($education_details->ExamPass == $gender) { echo 'selected'; } ?>><?php echo ucwords($gender); ?></option>
                                        <?php } ?>
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
                                    <select class="form-control f-select Year-of-Passing " required="required" id="Year-of-Passing" name="YearOfPassing">
                                        <option selected disabled>---</option>

                                        <?php
                            $job_profiles = $education_details->bound_year;
                            foreach ($job_profiles as $job_profile) { ?>
                            <option value="<?php echo $job_profile;?>" <?php if ($education_details->YearOfPassing == $job_profile) {
                                echo 'selected';
                            } ?>><?php echo $job_profile; ?></option>
                            <?php } ?>
                                    </select>
                                    <div class="val-error" id="Year-of-Passing-error">Please select option</div>
                                </div>
                            </div>
                        </div>
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Roll No. </span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <input type="number" name="RollNumber" required="required" id="last-S-C-Roll-No" class="form-control last-S-C-Roll-No " placeholder=" Roll No." value="<?php echo h($education_details->RollNumber); ?>">
                                    <div class="val-error" id="last-S-C-Roll-No-error">Please filled this filed.</div>
                                </div>
                            </div>
                        </div>
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Maximum Marks
                                    </span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <input type="number" name="MaximumMarks" required="required" id="Maximum-Marks" class="form-control Maximum-Marks " placeholder="Maximum Marks No." value="<?php echo h($education_details->MaximumMarks); ?>">
                                    <div class="val-error" id="Maximum-Marks-error">Please filled this filed.</div>
                                </div>
                            </div>
                        </div>

                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Marks Obtained
                                    </span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <input type="number" name="MarksObtained" required="required" id="Marks-Obtained" class="form-control Marks-Obtained " placeholder="Marks Obtained." value="<?php echo h($education_details->MarksObtained); ?>">
                                    <div class="val-error" id="Marks-Obtained-error">Please filled this filed.</div>
                                </div>
                            </div>
                        </div>
                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> (%) of Marks obtained
                                    </span></div>
                                <div class="col-md-7 p-0 m-0">
                                    <input type="number" name="PercentOfMarksObtained" required="required" id="Per-of-Marks" class="form-control Per-of-Marks " placeholder="% Marks" value="<?php echo h($education_details->PercentOfMarksObtained); ?>">
                                    <div class="val-error" id="Per-of-Marks-error">Please filled this filed.</div>
                                </div>
                            </div>
                        </div>



                        <div class="row mt-4 mb-2 p-2 m-0 w-100">
                            <div class="input-group d-flex flex-row justify-content-center" id="form-field">

                                <button class="btn Last-Edu-save  student_full_detail_btn" id="save" data-src="last_education_details" data-src="last_education_details">Save</button>
                                <button type="button" class="btn  Last-Edu-save-next" id="save-next">Save and Next</button>
                            </div>
                        </div>

                    </form>


                </div>