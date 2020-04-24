
<div class="tab-pane fade" id="v-pills-step8" role="tabpanel" aria-labelledby="v-pills-step8-tab">

                     <div class="row mt-2 pb-2 p-0 m-0 w-100 ">
                        <span style=" color:gray; font-weight:660; font-size: 15px;border-bottom:1px solid lightgray;padding:1px;margin-left:22%;">  Declaration  :-</span>
                      </div>

                      

                     <div class="row mt-2 p-5 p-0 m-0 w-100 ">
                        <span style=" color:black;text-align:justify; font-weight:660; font-size: 17px;border-bottom:1px solid lightgray;padding:1px;margin-left:1%;font-family: sans-serif;">I am "<span class="student-name-declare" id="show_dynamic_name" style=" color:blue;">Abhishek yadav</span>"
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
                                <span class="today-date" id="final_submit_date">DD/MM/YYYY
                                    </span>
                                </div>
                                <div class="col-md-7 pl-5 m-0">
                                <span class="">Signature :
                                    </span><br><img src="" style="height:80px; " class="stu-sign-upload-view  border border-primary">
                                </div>
                            </div>
                        </div>


                        
                        <form class="take_a_form" id='final_submit_details' method='post'>
                             <!-- ERROR div -->
                            <div id="errors_for_final_submit_details" class="error_in_form"></div>
                             <!-- ERROR div  -----ENDS----- -->
                         
                     <div class="row mt-4 mb-2 p-2 m-0 w-100">
                            <div class="col-12 d-flex flex-row justify-content-center" >
                                           
                                        
<!--                                         <input type="radio" name="is_address_same" id="a-yes" class="custom-control-input mt-2">
 -->    <input type="radio" name="agree" id="a-agree" value="<?php echo StudentFinalSubmit::AGREE; ?>" class="mr-2 " style="width: 25px;height: 25px;" >
                                          <label for="a-agree" class=""style="border:none;cursor: pointer;font-weight: 600">I agree</label>

                                

                                           
                                      </div>
                                
                        </div>
                     <div class="row mt-4 mb-2 p-2 m-0 w-100">
                            <div class="input-group d-flex flex-row justify-content-center" id="form-field">

                                <button class="btn Gaurdian-Details-save  student_full_detail_btn" id="Gaurdian-Details-save" data-src="final_submit">Periview</button>

                                <button class="btn Gaurdian-Details-save  student_full_detail_btn" id="Gaurdian-Details-save" data-src="final_submit_details">Final Submit</button>

                                <!-- <button type="button" class="btn Gaurdian-Details-save-next" id="Gaurdian-Details-save-next">Final Submit</button> -->
                            </div>
                        </div>

                    </form>


                </div>