
<div class="tab-pane fade" id="v-pills-step7" role="tabpanel" aria-labelledby="v-pills-step7-tab" style="position: relative;">
    <div class="row p-0 m-0  mt-2 pb-2 p-0 m-0 w-100 d-flex justify-content-center mb-2 mt-2 align-items-center">
                        <span style=" color:gray; font-weight:660; font-size: 17px;border-bottom:1px solid black;"> Document list:-</span></div>
            

                        <!-- ye form code hata ke ajax se karo.. -->
                   <!--  <form enctype="multipart/form-data" method="post" id='photo_details'> -->
                        <!-- ERROR div -->
                        <!--   <div class="row p-0 m-0  p-0 m-0 d-flex justify-content-center align-items-center">
                            <div id="errors_for_photo_details" class="error_in_form"></div>
                         </div> -->
                      
                         <!-- ERROR div  -----ENDS----- -->
                         <!-- 1 document -->
                        <div class="row p-0 m-0    p-1 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend"> <span class=""> Copy of Allotment Letter given by Counselling Centre / UPSEE Website</span> 
                                  <img src="../../images/iiiii%20(2).png" class="instraction_photo_sign_i" style="width: 25px;height: 25px;cursor: pointer;"  >
                                </div>
                                <div class="col-md-7 p-0 m-0" id="right-f">
                                    
                                        <div class="col-md-8 p-0 m-0">
                                            <!-- <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max;?>"> -->
                            <input class="custom-file-input stu-d-1-upload" type="file" accept="image/*" id="stu-d-1-upload" name="" style="cursor: pointer;width: 100% !important">
                                <label for="stu-d-1-upload" class="custom-file-label stu-d-1-upload-label" style="width: 100% " >No file chosen</label>
                                        
                                        <!-- start new update code for kamal -->
                                          <div class="col-md-4 stu-d-1 d-flex flex-row p-1 m-0  justify-content-center align-items-center" style="display: none;">
                                              <span class="d-none" style="font-size: 15px;font-weight: 600;font-family: sans-serif;">Uploaded</span>
                                               <button class="btn stu-d-1-upload-btn  " id="stu-d-1" data-src="" >Upload</button>
                                              <button class="btn stu-d-0-preview-btn  " id="stu-d-4" data-src="" >Priview</button>
                                               
                                             
                                                  <!-- end new update code for kamal -->
                                              
                                          </div>
                                    </div>
                                  
                                    
                                    <div class="val-error" id="stu-d-1-error">Please upload photo </div>
                                </div>
                            </div>
                        </div>
                        <div class="row p-0 m-0    p-1 w-100">
                            <div class="input-group p-0 m-0" id="form-field" style="display: none !important;">
                                <div class="col-md-12  d-1-1mg-div d-flex w-100 flex-row p-0 m-0  justify-content-center align-items-center p-0 m-0 " > 
                                    <img src="" style=" " class="d-1-upload-view  border border-primary" style="margin-left: 10%;">
                                        <!-- KAMAL CODE_____KAMAL CODE_____KAMAL CODE_____ -->
                                        <!-- <div>
                                            <?php if(isset($photo_details->Photo)){
                                                echo 'Photo';
                                            } ?>

                                        </div> -->
                                

                                </div>
                                
                          
                                   
                            </div>
                        </div>
                        <!-- 2. document -->
                        <div class="row p-0 m-0    p-1 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend"> <span class=""> Copy of Qualifying Exam. (Intermediate/Diploma) Certificate </span> 
                                  <img src="../../images/iiiii%20(2).png" class="instraction_photo_sign_i" style="width: 25px;height: 25px;cursor: pointer;"  >
                                </div>
                                <div class="col-md-7 p-0 m-0" id="right-f">
                                    <div class="row p-0 m-0 ">
                                        <div class="col-md-8 p-0 m-0">
                                            <!-- <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max;?>"> -->
                            <input class="custom-file-input stu-d-2-upload" type="file" accept="image/*" id="stu-d-2-upload" name="" style="cursor: pointer;width: 100% !important">
                                <label for="stu-d-2-upload" class="custom-file-label stu-d-2-upload-label" style="width: 100% " >No file chosen</label>
                                        </div>
                                        <!-- start new update code for kamal -->
                                          <div class="col-md-4 stu-d-2 d-flex flex-row p-1 m-0  justify-content-center align-items-center" style="display: none;">
                                              <span class="d-none" style="font-size: 15px;font-weight: 600;font-family: sans-serif;">Uploaded</span>
                                               <button class="btn stu-d-2-upload-btn  " id="stu-d-2" data-src="" >Upload</button>
                                              <button class="btn stu-d-0-preview-btn  " id="stu-d-4" data-src="" >Priview</button>
                                               
                                             
                                                  <!-- end new update code for kamal -->
                                              
                                          </div>
                                    </div>
                                  
                                    
                                    <div class="val-error" id="stu-d-2-error">Please upload photo </div>
                                </div>
                            </div>
                        </div>
                        <div class="row p-0 m-0    p-1 w-100">
                            <div class="input-group p-0 m-0" id="form-field" style="display: none !important;">
                                <div class="col-md-12  d-2-1mg-div d-flex w-100 flex-row p-0 m-0  justify-content-center align-items-center p-0 m-0 " > 
                                    <img src="" style=" " class="d-2-upload-view  border border-primary" style="margin-left: 10%;">
                                        <!-- KAMAL CODE_____KAMAL CODE_____KAMAL CODE_____ -->
                                        <!-- <div>
                                            <?php if(isset($photo_details->Photo)){
                                                echo 'Photo';
                                            } ?>

                                        </div> -->
                                

                                </div>
                                
                          
                                   
                            </div>
                        </div>

                         <!-- 3 document -->
                        <div class="row p-0 m-0    p-1 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend"> <span class=""> Copy of HIGH SCHOOL Certificate</span> 
                                  <img src="../../images/iiiii%20(2).png" class="instraction_photo_sign_i" style="width: 25px;height: 25px;cursor: pointer;"  >
                                </div>
                                <div class="col-md-7 p-0 m-0" id="right-f">
                                    <div class="row p-0 m-0 ">
                                        <div class="col-md-8 p-0 m-0">
                                            <!-- <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max;?>"> -->
                            <input class="custom-file-input stu-d-3-upload" type="file" accept="image/*" id="stu-d-3-upload" name="" style="cursor: pointer;width: 100% !important">
                                <label for="stu-d-3-upload" class="custom-file-label stu-d-3-upload-label" style="width: 100% " >No file chosen</label>
                                        </div>
                                        <!-- start new update code for kamal -->
                                          <div class="col-md-4 stu-d-3 d-flex flex-row p-1 m-0  justify-content-center align-items-center" style="display: none;">
                                              <span class="d-none" style="font-size: 15px;font-weight: 600;font-family: sans-serif;">Uploaded</span>
                                               <button class="btn stu-d-3-upload-btn  " id="stu-d-3" data-src="" >Upload</button>
                                              <button class="btn stu-d-0-preview-btn  " id="stu-d-4" data-src="" >Priview</button>
                                               
                                             
                                                  <!-- end new update code for kamal -->
                                              
                                          </div>
                                    </div>
                                  
                                    
                                    <div class="val-error" id="stu-d-3-error">Please upload photo </div>
                                </div>
                            </div>
                        </div>
                        <div class="row p-0 m-0    p-1 w-100">
                            <div class="input-group p-0 m-0" id="form-field" style="display: none !important;">
                                <div class="col-md-12  d-3-1mg-div d-flex w-100 flex-row p-0 m-0  justify-content-center align-items-center p-0 m-0 " > 
                                    <img src="" style=" " class="d-3-upload-view  border border-primary" style="margin-left: 10%;">
                                        <!-- KAMAL CODE_____KAMAL CODE_____KAMAL CODE_____ -->
                                        <!-- <div>
                                            <?php if(isset($photo_details->Photo)){
                                                echo 'Photo';
                                            } ?>

                                        </div> -->
                                

                                </div>
                                
                          
                                   
                            </div>
                        </div>
                        
                         <!-- 4 document -->
                        <div class="row p-0 m-0    p-1 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend"> <span class="">Verification copy of Caste Certificate obtained from the website of respective department</span> 
                                  <img src="../../images/iiiii%20(2).png" class="instraction_photo_sign_i" style="width: 25px;height: 25px;cursor: pointer;"  >
                                </div>
                                <div class="col-md-7 p-0 m-0" id="right-f">
                                    <div class="row p-0 m-0 ">
                                        <div class="col-md-8 p-0 m-0">
                                            <!-- <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max;?>"> -->
                            <input class="custom-file-input stu-d-4-upload" type="file" accept="image/*" id="stu-d-4-upload" name="" style="cursor: pointer;width: 100% !important">
                                <label for="stu-d-4-upload" class="custom-file-label stu-d-4-upload-label" style="width: 100% " >No file chosen</label>
                                        </div>
                                        <!-- start new update code for kamal -->
                                          <div class="col-md-4 stu-d-4 d-flex flex-row p-1 m-0  justify-content-center align-items-center" style="display: none;">
                                              <span class="d-none" style="font-size: 15px;font-weight: 600;font-family: sans-serif;">Uploaded</span>
                                               <button class="btn stu-d-4-upload-btn  " id="stu-d-4" data-src="" >Upload</button>
                                              <button class="btn stu-d-0-preview-btn  " id="stu-d-4" data-src="" >Priview</button>
                                               
                                             
                                                  <!-- end new update code for kamal -->
                                              
                                          </div>
                                    </div>
                                  
                                    
                                    <div class="val-error" id="stu-d-4-error">Please upload photo </div>
                                </div>
                            </div>
                        </div>
                        <div class="row p-0 m-0    p-1 w-100">
                            <div class="input-group p-0 m-0" id="form-field" style="display: none !important;">
                                <div class="col-md-12  d-4-1mg-div d-flex w-100 flex-row p-0 m-0  justify-content-center align-items-center p-0 m-0 " > 
                                    <img src="" style=" " class="d-4-upload-view  border border-primary" style="margin-left: 10%;">
                                        <!-- KAMAL CODE_____KAMAL CODE_____KAMAL CODE_____ -->
                                        <!-- <div>
                                            <?php if(isset($photo_details->Photo)){
                                                echo 'Photo';
                                            } ?>

                                        </div> -->
                                

                                </div>
                                
                          
                                   
                            </div>
                        </div>
                        
                         <!-- 5 document -->
                        <div class="row p-0 m-0    p-1 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend"> <span class=""> first document</span> 
                                  <img src="../../images/iiiii%20(2).png" class="instraction_photo_sign_i" style="width: 25px;height: 25px;cursor: pointer;"  >
                                </div>
                                <div class="col-md-7 p-0 m-0" id="right-f">
                                    <div class="row p-0 m-0 ">
                                        <div class="col-md-8 p-0 m-0">
                                            <!-- <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max;?>"> -->
                            <input class="custom-file-input stu-d-5-upload" type="file" accept="image/*" id="stu-d-5-upload" name="" style="cursor: pointer;width: 100% !important">
                                <label for="stu-d-5-upload" class="custom-file-label stu-d-5-upload-label" style="width: 100% " >No file chosen</label>
                                        </div>
                                        <!-- start new update code for kamal -->
                                          <div class="col-md-4 stu-d-5 d-flex flex-row p-1 m-0  justify-content-center align-items-center" style="display: none;">
                                              <span class="d-none" style="font-size: 15px;font-weight: 600;font-family: sans-serif;">Uploaded</span>
                                               <button class="btn stu-d-5-upload-btn  " id="stu-d-5" data-src="" >Upload</button>
                                              <button class="btn stu-d-0-preview-btn  " id="stu-d-4" data-src="" >Priview</button>
                                               
                                             
                                                  <!-- end new update code for kamal -->
                                              
                                          </div>
                                    </div>
                                  
                                    
                                    <div class="val-error" id="stu-d-5-error">Please upload photo </div>
                                </div>
                            </div>
                        </div>
                        <div class="row p-0 m-0    p-1 w-100">
                            <div class="input-group p-0 m-0" id="form-field" style="display: none !important;">
                                <div class="col-md-12  d-5-1mg-div d-flex w-100 flex-row p-0 m-0  justify-content-center align-items-center p-0 m-0 " > 
                                    <img src="" style=" " class="d-5-upload-view  border border-primary" style="margin-left: 10%;">
                                        <!-- KAMAL CODE_____KAMAL CODE_____KAMAL CODE_____ -->
                                        <!-- <div>
                                            <?php if(isset($photo_details->Photo)){
                                                echo 'Photo';
                                            } ?>

                                        </div> -->
                                

                                </div>
                                
                          
                                   
                            </div>
                        </div>
                        
                         <!-- 6 document -->
                        <div class="row p-0 m-0    p-1 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend"> <span class=""> first document</span> 
                                  <img src="../../images/iiiii%20(2).png" class="instraction_photo_sign_i" style="width: 25px;height: 25px;cursor: pointer;"  >
                                </div>
                                <div class="col-md-7 p-0 m-0" id="right-f">
                                    <div class="row p-0 m-0 ">
                                        <div class="col-md-8 p-0 m-0">
                                            <!-- <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max;?>"> -->
                            <input class="custom-file-input stu-d-6-upload" type="file" accept="image/*" id="stu-d-6-upload" name="" style="cursor: pointer;width: 100% !important">
                                <label for="stu-d-6-upload" class="custom-file-label stu-d-6-upload-label" style="width: 100% " >No file chosen</label>
                                        </div>
                                        <!-- start new update code for kamal -->
                                          <div class="col-md-4 stu-d-6 d-flex flex-row p-1 m-0  justify-content-center align-items-center" style="display: none;">
                                              <span class="d-none" style="font-size: 15px;font-weight: 600;font-family: sans-serif;">Uploaded</span>
                                               <button class="btn stu-d-6-upload-btn  " id="stu-d-6" data-src="" >Upload</button>
                                              <button class="btn stu-d-0-preview-btn  " id="stu-d-4" data-src="" >Priview</button>
                                               
                                             
                                                  <!-- end new update code for kamal -->
                                              
                                          </div>
                                    </div>
                                  
                                    
                                    <div class="val-error" id="stu-d-6-error">Please upload photo </div>
                                </div>
                            </div>
                        </div>
                        <div class="row p-0 m-0    p-1 w-100">
                            <div class="input-group p-0 m-0" id="form-field" style="display: none !important;">
                                <div class="col-md-12  d-6-1mg-div d-flex w-100 flex-row p-0 m-0  justify-content-center align-items-center p-0 m-0 " > 
                                    <img src="" style=" " class="d-6-upload-view  border border-primary" style="margin-left: 10%;">
                                        <!-- KAMAL CODE_____KAMAL CODE_____KAMAL CODE_____ -->
                                        <!-- <div>
                                            <?php if(isset($photo_details->Photo)){
                                                echo 'Photo';
                                            } ?>

                                        </div> -->
                                

                                </div>
                                
                          
                                   
                            </div>
                        </div>
                        
                         <!-- 7 document -->
                        <div class="row p-0 m-0    p-1 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend"> <span class=""> first document</span> 
                                  <img src="../../images/iiiii%20(2).png" class="instraction_photo_sign_i" style="width: 25px;height: 25px;cursor: pointer;"  >
                                </div>
                                <div class="col-md-7 p-0 m-0" id="right-f">
                                    <div class="row p-0 m-0 ">
                                        <div class="col-md-8 p-0 m-0">
                                            <!-- <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max;?>"> -->
                            <input class="custom-file-input stu-d-7-upload" type="file" accept="image/*" id="stu-d-7-upload" name="" style="cursor: pointer;width: 100% !important">
                                <label for="stu-d-7-upload" class="custom-file-label stu-d-7-upload-label" style="width: 100% " >No file chosen</label>
                                        </div>
                                        <!-- start new update code for kamal -->
                                          <div class="col-md-4 stu-d-7 d-flex flex-row p-1 m-0  justify-content-center align-items-center" style="display: none;">
                                              <span class="d-none" style="font-size: 15px;font-weight: 600;font-family: sans-serif;">Uploaded</span>
                                               <button class="btn stu-d-7-upload-btn  " id="stu-d-7" data-src="" >Upload</button>
                                              <button class="btn stu-d-0-preview-btn  " id="stu-d-4" data-src="" >Priview</button>
                                               
                                             
                                                  <!-- end new update code for kamal -->
                                              
                                          </div>
                                    </div>
                                  
                                    
                                    <div class="val-error" id="stu-d-7-error">Please upload photo </div>
                                </div>
                            </div>
                        </div>
                        <div class="row p-0 m-0    p-1 w-100">
                            <div class="input-group p-0 m-0" id="form-field" style="display: none !important;">
                                <div class="col-md-12  d-7-1mg-div d-flex w-100 flex-row p-0 m-0  justify-content-center align-items-center p-0 m-0 " > 
                                    <img src="" style=" " class="d-7-upload-view  border border-primary" style="margin-left: 10%;">
                                        <!-- KAMAL CODE_____KAMAL CODE_____KAMAL CODE_____ -->
                                        <!-- <div>
                                            <?php if(isset($photo_details->Photo)){
                                                echo 'Photo';
                                            } ?>

                                        </div> -->
                                

                                </div>
                                
                          
                                   
                            </div>
                        </div>
                        
                         <!-- 8 document -->
                        <div class="row p-0 m-0    p-1 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend"> <span class=""> first document</span> 
                                  <img src="../../images/iiiii%20(2).png" class="instraction_photo_sign_i" style="width: 25px;height: 25px;cursor: pointer;"  >
                                </div>
                                <div class="col-md-7 p-0 m-0" id="right-f">
                                    <div class="row p-0 m-0 ">
                                        <div class="col-md-8 p-0 m-0">
                                            <!-- <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max;?>"> -->
                            <input class="custom-file-input stu-d-8-upload" type="file" accept="image/*" id="stu-d-8-upload" name="" style="cursor: pointer;width: 100% !important">
                                <label for="stu-d-8-upload" class="custom-file-label stu-d-8-upload-label" style="width: 100% " >No file chosen</label>
                                        </div>
                                        <!-- start new update code for kamal -->
                                          <div class="col-md-4 stu-d-8 d-flex flex-row p-1 m-0  justify-content-center align-items-center" style="display: none;">
                                              <span class="d-none" style="font-size: 15px;font-weight: 600;font-family: sans-serif;">Uploaded</span>
                                               <button class="btn stu-d-8-upload-btn  " id="stu-d-8" data-src="" >Upload</button>
                                              <button class="btn stu-d-0-preview-btn  " id="stu-d-4" data-src="" >Priview</button>
                                               
                                             
                                                  <!-- end new update code for kamal -->
                                              
                                          </div>
                                    </div>
                                  
                                    
                                    <div class="val-error" id="stu-d-8-error">Please upload photo </div>
                                </div>
                            </div>
                        </div>
                        <div class="row p-0 m-0    p-1 w-100">
                            <div class="input-group p-0 m-0" id="form-field" style="display: none !important;">
                                <div class="col-md-12  d-8-1mg-div d-flex w-100 flex-row p-0 m-0  justify-content-center align-items-center p-0 m-0 " > 
                                    <img src="" style=" " class="d-8-upload-view  border border-primary" style="margin-left: 10%;">
                                        <!-- KAMAL CODE_____KAMAL CODE_____KAMAL CODE_____ -->
                                        <!-- <div>
                                            <?php if(isset($photo_details->Photo)){
                                                echo 'Photo';
                                            } ?>

                                        </div> -->
                                

                                </div>
                                
                          
                                   
                            </div>
                        </div>
                        
                         <!-- 9 document -->
                        <div class="row p-0 m-0    p-1 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend"> <span class=""> first document</span> 
                                  <img src="../../images/iiiii%20(2).png" class="instraction_photo_sign_i" style="width: 25px;height: 25px;cursor: pointer;"  >
                                </div>
                                <div class="col-md-7 p-0 m-0" id="right-f">
                                    <div class="row p-0 m-0 ">
                                        <div class="col-md-8 p-0 m-0">
                                            <!-- <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max;?>"> -->
                            <input class="custom-file-input stu-d-9-upload" type="file" accept="image/*" id="stu-d-9-upload" name="" style="cursor: pointer;width: 100% !important">
                                <label for="stu-d-9-upload" class="custom-file-label stu-d-9-upload-label" style="width: 100% " >No file chosen</label>
                                        </div>
                                        <!-- start new update code for kamal -->
                                          <div class="col-md-4 stu-d-9 d-flex flex-row p-1 m-0  justify-content-center align-items-center" style="display: none;">
                                              <span class="d-none" style="font-size: 15px;font-weight: 600;font-family: sans-serif;">Uploaded</span>
                                               <button class="btn stu-d-9-upload-btn  " id="stu-d-9" data-src="" >Upload</button>
                                              <button class="btn stu-d-0-preview-btn  " id="stu-d-4" data-src="" >Priview</button>
                                               
                                             
                                                  <!-- end new update code for kamal -->
                                              
                                          </div>
                                    </div>
                                  
                                    
                                    <div class="val-error" id="stu-d-9-error">Please upload photo </div>
                                </div>
                            </div>
                        </div>
                        <div class="row p-0 m-0    p-1 w-100">
                            <div class="input-group p-0 m-0" id="form-field" style="display: none !important;">
                                <div class="col-md-12  d-9-1mg-div d-flex w-100 flex-row p-0 m-0  justify-content-center align-items-center p-0 m-0 " > 
                                    <img src="" style=" " class="d-9-upload-view  border border-primary" style="margin-left: 10%;">
                                        <!-- KAMAL CODE_____KAMAL CODE_____KAMAL CODE_____ -->
                                        <!-- <div>
                                            <?php if(isset($photo_details->Photo)){
                                                echo 'Photo';
                                            } ?>

                                        </div> -->
                                

                                </div>
                                
                          
                                   
                            </div>
                        </div>
                        
                         <!-- 10 document -->
                        <div class="row p-0 m-0    p-1 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend"> <span class=""> first document</span> 
                                  <img src="../../images/iiiii%20(2).png" class="instraction_photo_sign_i" style="width: 25px;height: 25px;cursor: pointer;"  >
                                </div>
                                <div class="col-md-7 p-0 m-0" id="right-f">
                                    <div class="row p-0 m-0 ">
                                        <div class="col-md-8 p-0 m-0">
                                            <!-- <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max;?>"> -->
                            <input class="custom-file-input stu-d-10-upload" type="file" accept="image/*" id="stu-d-10-upload" name="" style="cursor: pointer;width: 100% !important">
                                <label for="stu-d-10-upload" class="custom-file-label stu-d-10-upload-label" style="width: rtant" >No file chosen</label>
                                        </div>
                                        <!-- start new update code for kamal -->
                                          <div class="col-md-4 stu-d-10 d-flex flex-row p-1 m-0  justify-content-center align-items-center" style="display: none;">
                                              <span class="d-none" style="font-size: 15px;font-weight: 600;font-family: sans-serif;">Uploaded</span>
                                               <button class="btn stu-d-10-upload-btn  " id="stu-d-10" data-src="" >Upload</button>
                                               <button class="btn stu-d-0-preview-btn  " id="stu-d-4" data-src="" >Priview</button>
                                               
                                             
                                                  <!-- end new update code for kamal -->
                                              
                                          </div>
                                    </div>
                                  
                                    
                                    <div class="val-error" id="stu-d-10-error">Please upload photo </div>
                                </div>
                            </div>
                        </div>
                        <div class="row p-0 m-0    p-1 w-100">
                            <div class="input-group p-0 m-0" id="form-field" style="display: none !important;">
                                <div class="col-md-12  d-10-1mg-div d-flex w-100 flex-row p-0 m-0  justify-content-center align-items-center p-0 m-0 " > 
                                    <img src="" style=" " class="d-10-upload-view  border border-primary" style="margin-left: 10%;">
                                        <!-- KAMAL CODE_____KAMAL CODE_____KAMAL CODE_____ -->
                                        <!-- <div>
                                            <?php if(isset($photo_details->Photo)){
                                                echo 'Photo';
                                            } ?>

                                        </div> -->
                                

                                </div>
                                
                          
                                   
                            </div>
                        </div>
                         
                          <!-- 11 document -->
                        <div class="row p-0 m-0    p-1 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend"> <span class=""> first document</span> 
                                  <img src="../../images/iiiii%20(2).png" class="instraction_photo_sign_i" style="width: 25px;height: 25px;cursor: pointer;"  >
                                </div>
                                <div class="col-md-7 p-0 m-0" id="right-f">
                                    <div class="row p-0 m-0 ">
                                        <div class="col-md-8 p-0 m-0">
                                            <!-- <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max;?>"> -->
                            <input class="custom-file-input stu-d-11-upload" type="file" accept="image/*" id="stu-d-11-upload" name="" style="cursor: pointer;width: 100% !important">
                                <label for="stu-d-11-upload" class="custom-file-label stu-d-11-upload-label" style="width: rtant" >No file chosen</label>
                                        </div>
                                        <!-- start new update code for kamal -->
                                          <div class="col-md-4 stu-d-11 d-flex flex-row p-1 m-0  justify-content-center align-items-center" style="display: none;">
                                              <span class="d-none" style="font-size: 15px;font-weight: 600;font-family: sans-serif;">Uploaded</span>
                                               <button class="btn stu-d-11-upload-btn  " id="stu-d-11" data-src="" >Upload</button>
                                               <button class="btn stu-d-0-preview-btn  " id="stu-d-4" data-src="" >Priview</button>
                                               
                                             
                                                  <!-- end new update code for kamal -->
                                              
                                          </div>
                                    </div>
                                  
                                    
                                    <div class="val-error" id="stu-d-11-error">Please upload photo </div>
                                </div>
                            </div>
                        </div>
                        <div class="row p-0 m-0    p-1 w-100">
                            <div class="input-group p-0 m-0" id="form-field" style="display: none !important;">
                                <div class="col-md-12  d-11-1mg-div d-flex w-100 flex-row p-0 m-0  justify-content-center align-items-center p-0 m-0 " > 
                                    <img src="" style=" " class="d-11-upload-view  border border-primary" style="margin-left: 10%;">
                                        <!-- KAMAL CODE_____KAMAL CODE_____KAMAL CODE_____ -->
                                        <!-- <div>
                                            <?php if(isset($photo_details->Photo)){
                                                echo 'Photo';
                                            } ?>

                                        </div> -->
                                

                                </div>
                                
                          
                                   
                            </div>
                        </div>
                         
                          <!-- 12 document -->
                        <div class="row p-0 m-0    p-1 w-100">
                            <div class="input-group p-0 m-0" id="form-field">
                                <div class="col-md-4 p-0 m-0 input-group-prepend"> <span class=""> first document</span> 
                                  <img src="../../images/iiiii%20(2).png" class="instraction_photo_sign_i" style="width: 25px;height: 25px;cursor: pointer;"  >
                                </div>
                                <div class="col-md-7 p-0 m-0" id="right-f">
                                    <div class="row p-0 m-0 ">
                                        <div class="col-md-8 p-0 m-0">
                                            <!-- <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max;?>"> -->
                            <input class="custom-file-input stu-d-12-upload" type="file" accept="image/*" id="stu-d-12-upload" name="" style="cursor: pointer;width: 100% !important">
                                <label for="stu-d-12-upload" class="custom-file-label stu-d-12-upload-label" style="width: rtant" >No file chosen</label>
                                        </div>
                                        <!-- start new update code for kamal -->
                                          <div class="col-md-4 stu-d-12 d-flex flex-row p-1 m-0  justify-content-center align-items-center">
                                              <span class="d-none" style="font-size: 15px;font-weight: 600;font-family: sans-serif;">Uploaded</span>
                                               <button class="btn stu-d-12-upload-btn  " id="stu-d-12" data-src="" >Upload</button>
                                               <button class="btn stu-d-0-preview-btn  " id="stu-d-4" data-src="" >Priview</button>
                                               
                                             
                                                  <!-- end new update code for kamal -->
                                              
                                          </div>
                                    </div>
                                  
                                    
                                    <div class="val-error" id="stu-d-12-error">Please upload photo </div>
                                </div>
                            </div>
                        </div>
                        <div class="row p-0 m-0    p-1 w-100">
                            <div class="input-group p-0 m-0" id="form-field" style="display: none !important;">
                                <div class="col-md-12  d-12-1mg-div d-flex w-100 flex-row p-0 m-0  justify-content-center align-items-center p-0 m-0 " > 
                                    <img src="" style=" " class="d-12-upload-view  border border-primary" style="margin-left: 10%;">
                                        <!-- KAMAL CODE_____KAMAL CODE_____KAMAL CODE_____ -->
                                        <!-- <div>
                                            <?php if(isset($photo_details->Photo)){
                                                echo 'Photo';
                                            } ?>

                                        </div> -->
                                </div> 
                            </div>
                        </div>
     
     

                        <div class=" row p-0 m-0  p-1 mb-5 mt-2 m-0 w-100">
                            <div class="input-group d-flex flex-row p-0 m-0  justify-content-center" id="form-field">

                                <button class="btn document-list-save  student_full_detail_btn" id="save" data-src="">Save</button>
                                <button type="button" class="btn Student-Photo-Sign-save-next" id="save-next">Save and Next</button>
                            </div>
                        </div>

                  <!--   </form> -->

                    <!-- instraction div code strat -->
                    <div class="custom_modal_for_ins d-none">
                      <div class="row p-0 m-0  w-100" style="position: absolute;top: 0;left: 0;height: 100%;background-color: black;opacity: 0.4;z-index: 410"></div>
                     <div class="row p-0 m-0  w-100 d-flex flex-row p-0 m-0  justify-content-center align-items-center" style="position: absolute;top: 0;left: 0;height: 100vh;background:none;z-index: 411">
                      <div class="row p-0 m-0 ">
                         <div class="ins_main_box col-md-8 p-3 " style="background-color: #fff;border-radius: 12px;box-shadow: 0 3px 6px gray">
                          <div class="row p-0 m-0  w-100 p-2">
                            
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
                <script >
                  $(document).ready(function(){
                   
                     $(".instraction_photo_sign_i").click(function(){
                    $(".custom_modal_for_ins").removeClass("d-none");
                    $(".Ok-i-understood-btn").click(function(){
                        $(".custom_modal_for_ins").addClass("d-none");
                    });

                  });
                  });
                 
                </script>