

<div class="tab-pane fade" id="v-pills-step3" role="tabpanel" aria-labelledby="v-pills-step3-tab">
                 
                           <div class="row mt-2 pb-2 p-0 m-0 w-100 d-flex justify-content-center mb-2 mt-2 align-items-center">
                        <span style=" color:gray; font-weight:660; font-size: 17px;border-bottom:1px solid black;"> student photo and sign:-</span></div>
                    <form enctype="multipart/form-data" method="post" id='photo_details'>
                        <!-- ERROR div -->
                          <div class="row p-0 m-0 d-flex justify-content-center align-items-center">
                            <div id="errors_for_photo_details" class="error_in_form"></div>
                         </div>
                      
                         <!-- ERROR div  -----ENDS----- -->

                         <!-- show max file size to end user -->
                         
                         
                        <div class="row p-0   m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend"> <span class="">Upload Photo</span>
                                 <img src="../../images/iiiii%20(2).png" class="instraction_photo_sign_i" style="width: 25px;height: 25px;cursor: pointer;"  >
                                </div>
                                <div class="col-md-7 p-0 m-0" id="right-f">
                                    <div class="row p-0 m-0">
                                        <div class="col-md-9 p-0 m-0">
                                            <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max;?>">
                            <input class="custom-file-input stu-photo-upload" type="file" accept="image/*" id="stu-photo-upload" name="Photo" style="cursor: pointer;width: 100%">
                                <label for="stu-photo-upload" class="custom-file-label stu-photo-upload-label" style="width: 90% " >No file chosen</label>
                                        </div>
                                        <!-- start new update code for kamal -->
                                          <div class="col-md-3 p-0 m-0">
                                              <span class="d-none" style="font-size: 15px;font-weight: 600;font-family: sans-serif;">Uploaded</span>
                                               <button class="btn mt-1 Student-Photo-upload  student_full_detail_btn" id="upload-photo" data-src="">Upload</button>
                                                  <!-- end new update code for kamal -->
                                              
                                          </div>
                                    </div>
                                  
                                    
                                    <div class="val-error" id="stu-photo-upload-label-error">Please upload photo </div>
                                </div>
                            </div>
                        </div>

 <div class="row  p-0 m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend"> <span class="">Upload Sign</span>
                                 <img src="../../images/iiiii%20(2).png" class="instraction_photo_sign_i" style="width: 25px;height: 25px;cursor: pointer;"  >
                                </div>
                                <div class="col-md-7 p-0 m-0" id="right-f">
                        
                          <div class="row p-0 m-0">
                                        <div class="col-md-9 p-0 m-0">
                                            <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max;?>">
                             <input class="custom-file-input  stu-sign-upload" type="file" accept="image/*" id="stu-sign-upload" name="Sign" style="cursor: pointer;">
                                <label for="stu-sign-upload" class="custom-file-label stu-sign-upload-label" style="width: 90% " >No file chosen</label>
                                        </div>
                                        <!-- start new update code for kamal -->
                                          <div class="col-md-3 p- m-0">
                                              <span class="d-none" style="font-size: 15px;font-weight: 600;font-family: sans-serif;">Uploaded</span>
                                               <button class="btn mt-1 Student-Sign-upload  student_full_detail_btn" id="upload-sign" data-src="">Upload</button>
                                                  <!-- end new update code for kamal -->
                                              
                                          </div>
                                    </div>

                           
                                    <div class="val-error" id="stu-sign-upload-label-error">Please upload sign</div>
                                </div>
                            </div>
                        </div>
                         <div class="row  p-0  m-0 mt-2 mb-2 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend"> </div>
                                <div class="col-md-7 p-0 m-0" id="right-f">
                            <div class="row p-0">
                                    <div class="col-6 p-0 m-0">  <img src="" style=" " class="stu-photo-upload-view  border border-primary">
                                        <!-- KAMAL CODE_____KAMAL CODE_____KAMAL CODE_____ -->
                                        <div>
                                            <?php if(isset($photo_details->Photo)){
                                                echo 'Photo';
                                            } ?>

                                        </div>
                                </div>
                                <div class="col-6 p-0 m-0">  <img src="" style=" " class="stu-sign-upload-view  border border-primary">
                                    <!-- KAMAL CODE_____KAMAL CODE_____KAMAL CODE_____ -->
                                    <div>
                                        <?php if(isset($photo_details->Sign)){
                                            echo 'Signature';
                                        } ?>

                                    </div>
                                </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row mt-4 mb-2 p-2 m-0 w-100">
                            <div class="input-group d-flex flex-row justify-content-center" id="form-field">

                                <button class="btn Student-Photo-Sign-save  student_full_detail_btn" id="save" data-src="photo_details">Save</button>
                                <button type="button" class="btn Student-Photo-Sign-save-next" id="save-next">Save and Next</button>
                            </div>
                        </div>

                    </form>

                     <!-- instraction div code strat -->
                    <div class="custom_modal_for_ins d-none">
                      <div class="row w-100" style="position: absolute;top: 0;left: 0;height: 100vh;background-color: black;opacity: 0.4;z-index: 410"></div>
                     <div class="row w-100 d-flex flex-row justify-content-center align-items-center" style="position: absolute;top: 0;left: 0;height: 100vh;background:none;z-index: 411">
                      <div class="row">
                         <div class="ins_main_box col-md-8 p-3 " style="background-color: #fff;border-radius: 12px;box-shadow: 0 3px 6px gray">
                          <div class="row w-100 p-2">
                            
                       <h6 style="margin-left: 10%; font-size:15px; font-weight: 600; font-family: sans-serif;"> Instraction for document list</h6>

                       <ul class="d-flex flex-column justify-content-start align-items-start ">
                         <LI><span>documnet size not to greater then 500kb</span></LI>
                          <LI><span>documnet size not to greater then 500kb</span></LI>
                           <LI><span>documnet size not to greater then 500kb</span></LI>
                            <LI><span>documnet size not to greater then 500kb</span></LI>
                       </ul>
                       <button class="btn Ok-i-understood-btn" style="margin-left: 10%;"> Ok i understood</button>
                          </div>
                          </div>
                      </div>
                      
                     </div>
                    </div>
                    

                    <!-- instraction div code end -->
                </div>