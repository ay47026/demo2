<?php require_once('../../../private/initialize.php');
 ?>

<?php
// if not loggedin then redirect back to '/staff/main_admin/md_login.php' page.
// require_login(url_for('/staff/main_admin/md_login.php'));
?>
<?php require_once(SHARED_PATH . '/staff_header.php'); ?>

<style >
    .heading_row span{
         font-family: sans-serif;;
         font-size: 17px;
         font-weight: 600;
         color: #616665;
    }
    textarea{
         width: 90%;
         font-size: 14px;
         font-weight: 500;
         color: #262626;


 font-family: Verdana, Arial, Helvetica, sans-serif;
         
    }
    .custom-control-label{
  cursor: pointer;

 
  }
   
  .error .custom-control-label::before{
  cursor: pointer;
  background-color: green !important;
 
  }
   .error .custom-control-input:checked~.custom-control-label::before{
    background-color: red !important;
    border-color: red;

   }
   .error .custom-control-input:focus~.custom-control-label::before{
   box-shadow: none; !important;
   }
.btn {
            background-color: #1f4a4d !important;
            color: white;
            margin-left: 5px;
            font-weight: bold;;
            font-size: 15px !important;
            padding-top: 0;
            height: 26px;
        }

        .btn:hover {
            color: white;
            box-shadow: 4px solid gray;

        }
        .heading_row{

        padding-top: 5px;
            background-color: #fff;
            z-index: 120;
            position: sticky;
            top:0;
            left: 0;
        }
        .tab-pane{
            position:relative;
        }

        
        .name_fo_data_div{
            font-weight: bold;
            font-family: sans-serif;
        }
        .stu_data_div{
            font-family: sans-serif;
        } 
        
          /* end  header icon */
   
</style>

<body>
    <div class="jumbotron p-0 m-0" style="width: 100% ;height:100vh;">
        <!-- start  header-->
        <?php require_once(SHARED_PATH . '/staff_header_02.php'); ?>
        <!-- end header-->
        <div class="row p-0 m-0" style="width: 100%;height: 90vh;background:lightgray; ">
            <!-- start   navigation menu-->
            <?php require_once(SHARED_PATH . '/navigation.php'); ?>
            <!--  end navigation menu-->
            <!-- main content div-->
            <div class="col-md-11 p-0 m-0 boder" style=";margin-left: 10px;height: : 90vh">
                <div class="row m-c p-0 pt-1 m-0 d-flex flex-column justify-content-start align-items-start" style="height: : 90vh">
                    <ul class="nav nav-tabs pl-4" id="myTab" role="tablist" style="10vh;position: relative;">
                        <span class="employe_ad_span" title="student Roll No.">161661008</span>
                        <li class="nav-item" title="Allotment-tails-tab">
                            <a class="nav-link active" id="Allotment-details-tab" data-toggle="tab" href="#Allotment-details" role="tab" aria-controls="Allotment-details" aria-selected="true">Allotment datails</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="Personal-datails-tab" data-toggle="tab" href="#Personal-datails" role="tab" aria-controls="Personal-datails" aria-selected="false">Personal datails </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="Photo-and-Sign-tab" data-toggle="tab" href="#Photo-and-Sign" role="tab" aria-controls="Photo-and-Sign" aria-selected="false">Photo and Sign</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" id="D-Last-Attended-tab" data-toggle="tab" href="#D-Last-Attended" role="tab" aria-controls="D-Last-Attended" aria-selected="false">Details of Last Edu.</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" id="D-Fee-Payment-tab" data-toggle="tab" href="#D-Fee-Payment" role="tab" aria-controls="D-Fee-Payment" aria-selected="false">Details of Fee Payment </a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" id="Gaurdian-Details-tab" data-toggle="tab" href="#Gaurdian-Details" role="tab" aria-controls="Gaurdian-Details" aria-selected="false">Gaurdian Details </a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" id="Document-Checklist-tab" data-toggle="tab" href="#Document-Checklist" role="tab" aria-controls="Document-Checklist" aria-selected="false">Document Checklist</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" id="Final-verification-tab" data-toggle="tab" href="#Final-verification" role="tab" aria-controls="Final-verification" aria-selected="false">final verification</a>
                        </li>




        <div  class="contact_button_clickco  " style="position: absolute;top: 30px;right: 25px;z-index: 130;"> 
   <ul style="position: absolute;top: 0px;right: 0px;z-index: 131;">
      
            <li class="stu-phone-no" title="student phone Number" data-toggle="tooltip" data-placement="bottom" >   
                <a > <i class="fa fa-phone" aria-hidden="true"></i> </a></li> 

            <li  class="Stu-mail" title="Send mail to student">   <a >    <i class="fa fa-envelope-o" aria-hidden="true"></i> </a></li>
           
          </ul>
          <!-- student contact div -->
<div class="student-contact-div" style="display: none;">
    <div class="student-contact-box d-flex flex-column p-1 border justify-content-start " style="position: absolute;top:50px;right: 0px;z-index: 132;width: 200px;height: 180px;background-color: #fff;  box-shadow: 0 4px 6px rgba(0,0,0,0.3);">
           <span style="margin-bottom: 5px: "> <span>Student :  </span>8176042505</span>
            <span style="margin-bottom: 5px: "> <span>Gardian :  </span>9411862545</span>
          </div>
</div>

<!-- send mail icon div -->
<div class="send-maill-icon-div " style="display: none;">
    <div class="send-mail-box d-flex flex-column p-1 border justify-content-start " style="position: absolute;top:50px;right: 0px;z-index: 131;width: 300px;height: 280px;background-color: #fff;  box-shadow: 0 4px 6px rgba(0,0,0,0.3);">
           <span style="margin-bottom: 5px: "> <span>To :  </span>ay47026@gmail.com</span>
            <textarea class="send-mail-ta" style="width: 100%;border: 1px solid lightgray;" rows="8" >
                
            </textarea>

              <button class="btn s-m-to-stu-btn  w-25 mt-3" id="s-m-to-stu-btn" name="" data-src="s-m-to-stu_details" >
                  Send
              </button>

          </div>
</div>

          
        </div>
               


                    </ul>
                    <div class="tab-content " id="myTabContent" style=" height: 80vh; width: 99%;margin-top: 5px;">
                    	   <!-- for Allotment-details [tab]  -->
                         <div class="tab-pane show active" id="Allotment-details" role="tabpanel" aria-labelledby="Allotment-details-tab"> 

                        <div class="row w-100  d-flex justify-content-center align-items-start">
                                    <span style="font-family:sans-serif;font-size: 17px;color:#616665;font-weight: 500; ">Allotment details</span>
                        </div>
                        <div class="row heading_row pl-4  w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 d-flex justify-content-start align-items-start"> <span>Name of data</span>
                                   </div>

                                   <div class="col-3 d-flex justify-content-start align-items-start"> <span>Data </span>
                                   </div>
                                       
                                        <div class="col-3 d-flex justify-content-start align-items-start"> <span>Error </span>
                                               <img src="images/i.png" class="textarea_i" style="width: 15px;height: 15px;" data-container="body"  data-toggle="popover" data-placement="right" data-content="Write about what the this error this this data for student to understand better that what is mistake i do">
                                   </div>

                                    <div class="col-3 d-flex justify-content-start align-items-start"> <span>Edit </span>
                                   </div>
                         </div>

                         <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 name_fo_data_div d-flex justify-content-start align-items-start"> <span>Year of Admission</span>
                                   </div>

                                   <div class="col-3 stu_data_div d-flex justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                             <div class="custom-control error custom-checkbox" style="position: relative;">
                                 <input type="checkbox"  class="custom-control-input" id="Year-of-Admission" name="" value="">
                                      <label class="custom-control-label" for="Year-of-Admission"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                       
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>

                                <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3  d-flex name_fo_data_div justify-content-start align-items-start"> <span>Type of Admission</span>
                                   </div>

                                   <div class="col-3 d-flex stu_data_div justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                             <div class="custom-control error custom-checkbox" style="position: relative;">
                                 <input type="checkbox" class="custom-control-input" id="Type-of-Admission-e" name="" value="">
                                      <label class="custom-control-label" for="Type-of-Admission-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                        
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>

                                <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3  d-flex name_fo_data_div justify-content-start align-items-start"> <span>Allotted Branch</span>
                                   </div>

                                   <div class="col-3 d-flex stu_data_div justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                             <div class="custom-control error custom-checkbox" style="position: relative;">
                                 <input type="checkbox" class="custom-control-input" id="Allotted-Branch-e" name="" value="">
                                      <label class="custom-control-label" for="Allotted-Branch-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                     
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>

                                <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3  d-flex name_fo_data_div justify-content-start align-items-start"> <span>Alloted Category</span>
                                   </div>

                                   <div class="col-3 d-flex stu_data_div justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                             <div class="custom-control error custom-checkbox" style="position: relative;">
                                 <input type="checkbox" class="custom-control-input" id="Alloted-Category-e" name="" value="">
                                      <label class="custom-control-label" for="Alloted-Category-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>

                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>

                                <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3  d-flex name_fo_data_div justify-content-start align-items-start"> <span>Allotted Sub Category</span>
                                   </div>

                                   <div class="col-3 d-flex stu_data_div justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                             <div class="custom-control error custom-checkbox" style="position: relative;">
                                 <input type="checkbox" class="custom-control-input" id="Allotted-Sub-Category-e" name="" value="">
                                      <label class="custom-control-label" for="Allotted-Sub-Category-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                        
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>

                                <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3  d-flex name_fo_data_div justify-content-start align-items-start"> <span>Allotted Roll No.</span>
                                   </div>

                                   <div class="col-3 d-flex stu_data_div justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                             <div class="custom-control error custom-checkbox" style="position: relative;">
                                 <input type="checkbox" class="custom-control-input" id="Allotted-Roll-No-e" name="" value="">
                                      <label class="custom-control-label" for="Allotted-Roll-No-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                        
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>
                                <!-- verify btn -->
                                 <div class="row mt-4 mb-3 d-flex flex-column justify-content-center align-items-center" >

                                  <div class="custom-control Allotted-All-right-div custom-checkbox mb-4">
                               <input type="checkbox" class="custom-control-input" id="Allotted-All-right" name="">
                                <label class="custom-control-label" for="Allotted-All-right" style="font-weight: bold;">All right</label>
                                 </div>
                                <button class="btn Allotted-verify-btn " id="Allotted-verify-btn" name="" data-src="allotement_details" >Verify</button>
                               <!--  <input type="submit" class="btn Allotted-save" id="save" name="allotment_details[save]" value="Save"> -->
                                
                            </div>


                                


                         </div>
                            <!-- For Personal-datails  [tab]  -->
                            <div class="tab-pane " id="Personal-datails" role="tabpanel" aria-labelledby="Personal-datails-tab">
                         <div class="row w-100  d-flex justify-content-center align-items-start">
                                    <span style="font-family:sans-serif;font-size: 17px;color:#616665;font-weight: 500; ">Personal datails</span>
                        </div>
                        <div class="row heading_row pl-4 mt-3 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 d-flex justify-content-start align-items-start"> <span>Name of data</span>
                                   </div>

                                   <div class="col-3 d-flex justify-content-start align-items-start"> <span>Data </span>
                                   </div>
                                       
                                        <div class="col-3 d-flex justify-content-start align-items-start"> <span>Error </span>
                                               <img src="images/i.png" class="textarea_i" style="width: 15px;height: 15px;" data-container="body"  data-toggle="popover" data-placement="right" data-content="Write about what the this error this this data for student to understand better that what is mistake i do">
                                   </div>

                                    <div class="col-3 d-flex justify-content-start align-items-start"> <span>Edit </span>
                                   </div>
                         </div>

                         <!-- first name -->
                         <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 name_fo_data_div d-flex justify-content-start align-items-start"> <span>First Name</span>
                                   </div>

                                   <div class="col-3 stu_data_div d-flex justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                             <div class="custom-control error custom-checkbox" style="position: relative;">
                                 <input type="checkbox" class="custom-control-input" id="First-Name-e" name="" value="">
                                      <label class="custom-control-label" for="First-Name-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                       
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>


                               <!-- Last Name -->
                         <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 name_fo_data_div d-flex justify-content-start align-items-start"> <span>Last Name</span>
                                   </div>

                                   <div class="col-3 stu_data_div d-flex justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                <div class="custom-control error custom-checkbox" style="position: relative;">

                                 <input type="checkbox" class="custom-control-input" id="Last-Name-e" name="" value="">
                                      <label class="custom-control-label" for="Last-Name-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                       
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>

                                  <!-- Gender -->
                         <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 name_fo_data_div d-flex justify-content-start align-items-start"> <span>Gender</span>
                                   </div>

                                   <div class="col-3 stu_data_div d-flex justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                <div class="custom-control error custom-checkbox" style="position: relative;">

                                 <input type="checkbox" class="custom-control-input" id="Gender-e" name="" value="">
                                      <label class="custom-control-label" for="Gender-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                       
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>
                                <!-- Date Of Birth -->
                         <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 name_fo_data_div d-flex justify-content-start align-items-start"> <span>Date Of Birth</span>
                                   </div>

                                   <div class="col-3 stu_data_div d-flex justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                <div class="custom-control error custom-checkbox" style="position: relative;">

                                 <input type="checkbox" class="custom-control-input" id="Date-Of-Birth-e" name="" value="">
                                      <label class="custom-control-label" for="Date-Of-Birth-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                       
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>
                                <!-- Student’s Mobile No -->
                         <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 name_fo_data_div d-flex justify-content-start align-items-start"> <span>Student’s Mobile No</span>
                                   </div>

                                   <div class="col-3 stu_data_div d-flex justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                <div class="custom-control error custom-checkbox" style="position: relative;">

                                 <input type="checkbox" class="custom-control-input" id="Student-Mobile-No-e" name="" value="">
                                      <label class="custom-control-label" for="Student-Mobile-No-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                       
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>
                                <!-- Student’s E-Mail Id -->
                         <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 name_fo_data_div d-flex justify-content-start align-items-start"> <span>Student’s E-Mail Id</span>
                                   </div>

                                   <div class="col-3 stu_data_div d-flex justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                <div class="custom-control error custom-checkbox" style="position: relative;">

                                 <input type="checkbox" class="custom-control-input" id="Student-E-Mail-Id-e" name="" value="">
                                      <label class="custom-control-label" for="Student-E-Mail-Id-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                       
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>
                                <!-- Student’s ADHAR -->
                         <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 name_fo_data_div d-flex justify-content-start align-items-start"> <span>Student’s ADHAR</span>
                                   </div>

                                   <div class="col-3 stu_data_div d-flex justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                <div class="custom-control error custom-checkbox" style="position: relative;">

                                 <input type="checkbox" class="custom-control-input" id="Student’s-ADHAR-e" name="" value="">
                                      <label class="custom-control-label" for="Student’s-ADHAR-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                       
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>
                                <!-- Correspondence Address -->
                         <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 name_fo_data_div d-flex justify-content-start align-items-start"> <span>Correspondence Address</span>
                                   </div>

                                   <div class="col-3 stu_data_div d-flex justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                <div class="custom-control error custom-checkbox" style="position: relative;">

                                 <input type="checkbox" class="custom-control-input" id="Correspondence-Address-e" name="" value="">
                                      <label class="custom-control-label" for="Correspondence-Address-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                       
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>

                                  <!-- corr District -->
                         <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 name_fo_data_div d-flex justify-content-start align-items-start"> <span>District</span>
                                   </div>

                                   <div class="col-3 stu_data_div d-flex justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                <div class="custom-control error custom-checkbox" style="position: relative;">

                                 <input type="checkbox" class="custom-control-input" id="C-District-e" name="" value="">
                                      <label class="custom-control-label" for="C-District-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                       
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>

                                <!--corr Pincode -->
                         <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 name_fo_data_div d-flex justify-content-start align-items-start"> <span>Pincode</span>
                                   </div>

                                   <div class="col-3 stu_data_div d-flex justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                <div class="custom-control error custom-checkbox" style="position: relative;">

                                 <input type="checkbox" class="custom-control-input" id="C-Pincode-e" name="" value="">
                                      <label class="custom-control-label" for="C-Pincode-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                       
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>
                                <!-- Permanent Address and Correspondence Address both are same ? -->
                         <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 name_fo_data_div d-flex justify-content-start align-items-start"> <span>Permanent Address and Correspondence Address both are same ?</span>
                          stu_data_div          </div>

                                   <div class="col-3 d-flex justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                <div class="custom-control error custom-checkbox" style="position: relative;">

                                 <input type="checkbox" class="custom-control-input" id="Addresses-both-are-same-e" name="" value="">
                                      <label class="custom-control-label" for="Addresses-both-are-same-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                       
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>

                                <!-- Permanent Address -->
                         <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 name_fo_data_div d-flex justify-content-start align-items-start"> <span>Permanent Address</span>
                                   </div>

                                   <div class="col-3 stu_data_div d-flex justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                <div class="custom-control error custom-checkbox" style="position: relative;">

                                 <input type="checkbox" class="custom-control-input" id="Permanent-Address-e" name="" value="">
                                      <label class="custom-control-label" for="Permanent-Address-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                       
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>

                                <!--parmanent District -->
                         <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 name_fo_data_div d-flex justify-content-start align-items-start"> <span>District</span>
                                   </div>

                                   <div class="col-3 stu_data_div d-flex justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                <div class="custom-control error custom-checkbox" style="position: relative;">

                                 <input type="checkbox" class="custom-control-input" id="P-District-e" name="" value="">
                                      <label class="custom-control-label" for="P-District-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                       
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>

                                <!--parmament Pincode -->
                         <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 name_fo_data_div d-flex justify-content-start align-items-start"> <span>Pincode</span>
                                   </div>

                                   <div class="col-3 stu_data_div d-flex justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                <div class="custom-control error custom-checkbox" style="position: relative;">

                                 <input type="checkbox" class="custom-control-input" id="P-Pincode-e" name="" value="">
                                      <label class="custom-control-label" for="P-Pincode-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                       
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>
                                <!-- verify btn -->
                                 <div class="row mt-4 mb-3 d-flex flex-column justify-content-center align-items-center" >

                                  <div class="custom-control Personal-All-right-div custom-checkbox mb-4">
                               <input type="checkbox" class="custom-control-input" id="Allotted-All-right" name="">
                                <label class="custom-control-label" for="Allotted-All-right" style="font-weight: bold;">All right</label>
                                 </div>
                                <button class="btn Personal-verify-btn " id="Personal-verify-btn" name="" data-src="Personal_details" >Verify</button>
                               <!--  <input type="submit" class="btn Allotted-save" id="save" name="allotment_details[save]" value="Save"> -->
                                
                            </div>

                            </div>

                            <!-- For Photo-and-Sign [tab]  -->
                            <div class="tab-pane " id="Photo-and-Sign" role="tabpanel" aria-labelledby="Photo-and-Sign-tab"> 

                            <div class="row w-100  d-flex justify-content-center align-items-start">
                                    <span style="font-family:sans-serif;font-size: 17px;color:#616665;font-weight: 500; ">Photo and Sign</span>
                        </div>
                        <div class="row heading_row pl-4 mt-3 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 d-flex justify-content-start align-items-start"> <span>Name of data</span>
                                   </div>

                                   <div class="col-3 d-flex justify-content-start align-items-start"> <span>Data </span>
                                   </div>
                                       
                                        <div class="col-3 d-flex justify-content-start align-items-start"> <span>Error </span>
                                               <img src="images/i.png" class="textarea_i" style="width: 15px;height: 15px;" data-container="body"  data-toggle="popover" data-placement="right" data-content="Write about what the this error this this data for student to understand better that what is mistake i do">
                                   </div>

                                    <div class="col-3 d-flex justify-content-start align-items-start"> <span>Edit </span>
                                   </div>
                         </div>
                            <!-- Student Photo  -->
                         <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 name_fo_data_div d-flex justify-content-start align-items-start"> <span>Student Photo</span>
                                   </div>

                                   <div class="col-3 stu_data_div d-flex justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                             <div class="custom-control error custom-checkbox" style="position: relative;">
                                 <input type="checkbox" class="custom-control-input" id="Student-Photo-e" name="" value="">
                                      <label class="custom-control-label" for="Student-Photo-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                       
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>

                                 <!-- Student Sign  -->
                         <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 name_fo_data_div d-flex justify-content-start align-items-start"> <span>Student Sign</span>
                                   </div>

                                   <div class="col-3 stu_data_div d-flex justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                             <div class="custom-control error custom-checkbox" style="position: relative;">
                                 <input type="checkbox" class="custom-control-input" id="Student-Sign-e" name="" value="">
                                      <label class="custom-control-label" for="Student-Sign-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                       
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>

                                <!-- verify btn -->
                                 <div class="row mt-4 mb-3 d-flex flex-column justify-content-center align-items-center" >

                                  <div class="custom-control P-a-S-All-right-div custom-checkbox mb-4">
                               <input type="checkbox" class="custom-control-input" id="P-a-S-All-right" name="">
                                <label class="custom-control-label" for="P-a-S-All-right" style="font-weight: bold;">All right</label>
                                 </div>
                                <button class="btn P-a-S-verify-btn " id="P-a-S-verify-btn" name="" data-src="P-a-S_details" >Verify</button>
                               <!--  <input type="submit" class="btn Allotted-save" id="save" name="allotment_details[save]" value="Save"> -->
                                
                            </div>

                            </div>
                            <!-- For D-Last-Attended edu.. [tab]  -->
                            <div class="tab-pane " id="D-Last-Attended" role="tabpanel" aria-labelledby="D-Last-Attended-tab">
                                <div class="row w-100  d-flex justify-content-center align-items-start">
                                    <span style="font-family:sans-serif;font-size: 17px;color:#616665;font-weight: 500; ">Details of School/college Last Attended</span>
                        </div>
                        <div class="row heading_row pl-4 mt-3 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 d-flex justify-content-start align-items-start"> <span>Name of data</span>
                                   </div>

                                   <div class="col-3 d-flex justify-content-start align-items-start"> <span>Data </span>
                                   </div>
                                       
                                        <div class="col-3 d-flex justify-content-start align-items-start"> <span>Error </span>
                                               <img src="images/i.png" class="textarea_i" style="width: 15px;height: 15px;" data-container="body"  data-toggle="popover" data-placement="right" data-content="Write about what the this error this this data for student to understand better that what is mistake i do">
                                   </div>

                                    <div class="col-3 d-flex justify-content-start align-items-start"> <span>Edit </span>
                                   </div>
                         </div>
                            <!-- Name of School/College Last Attended: -->
                         <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 name_fo_data_div d-flex justify-content-start align-items-start"> <span>Name of School/College Last Attended </span>
                                   </div>

                                   <div class="col-3 stu_data_div d-flex justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                             <div class="custom-control error custom-checkbox" style="position: relative;">
                                 <input type="checkbox" class="custom-control-input" id="Name-of-S_C-e" name="" value="">
                                      <label class="custom-control-label" for="Name-of-S_C-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                       
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>

                                 <!-- Exam Pass  -->
                         <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 name_fo_data_div d-flex justify-content-start align-items-start"> <span>Exam Pass</span>
                                   </div>

                                   <div class="col-3 stu_data_div d-flex justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                             <div class="custom-control error custom-checkbox" style="position: relative;">
                                 <input type="checkbox" class="custom-control-input" id="Exam-Pass-e" name="" value="">
                                      <label class="custom-control-label" for="Exam-Pass-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                       
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>

                                 <!-- Year of Passing  -->
                         <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 name_fo_data_div d-flex justify-content-start align-items-start"> <span>Year of Passing</span>
                                   </div>

                                   <div class="col-3 stu_data_div d-flex justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                             <div class="custom-control error custom-checkbox" style="position: relative;">
                                 <input type="checkbox" class="custom-control-input" id="Year-of-Passing-e" name="" value="">
                                      <label class="custom-control-label" for="Year-of-Passing-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                       
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>

                                 <!-- Roll No  -->
                         <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 name_fo_data_div d-flex justify-content-start align-items-start"> <span>Roll No</span>
                                   </div>

                                   <div class="col-3 stu_data_div d-flex justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                             <div class="custom-control error custom-checkbox" style="position: relative;">
                                 <input type="checkbox" class="custom-control-input" id="Roll-No-e" name="" value="">
                                      <label class="custom-control-label" for="Roll-No-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                       
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>

                                 <!-- Maximum Marks  -->
                         <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 name_fo_data_div d-flex justify-content-start align-items-start"> <span>Maximum Marks</span>
                                   </div>

                                   <div class="col-3 stu_data_div d-flex justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                             <div class="custom-control error custom-checkbox" style="position: relative;">
                                 <input type="checkbox" class="custom-control-input" id="Maximum-Marks-e" name="" value="">
                                      <label class="custom-control-label" for="Maximum-Marks-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                       
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>

                                 <!-- Marks Obtained  -->
                         <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 name_fo_data_div d-flex justify-content-start align-items-start"> <span>Marks Obtained</span>
                                   </div>

                                   <div class="col-3 stu_data_div d-flex justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                             <div class="custom-control error custom-checkbox" style="position: relative;">
                                 <input type="checkbox" class="custom-control-input" id="Marks-Obtained-e" name="" value="">
                                      <label class="custom-control-label" for="Marks-Obtained-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                       
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>

                                <!-- verify btn -->
                                 <div class="row mt-4 mb-3 d-flex flex-column justify-content-center align-items-center" >

                                  <div class="custom-control edu-All-right-div custom-checkbox mb-4">
                               <input type="checkbox" class="custom-control-input" id="edu-All-right" name="">
                                <label class="custom-control-label" for="edu-All-right" style="font-weight: bold;">All right</label>
                                 </div>
                                <button class="btn edu-verify-btn " id="edu-verify-btn" name="" data-src="edu_details" >Verify</button>
                               <!--  <input type="submit" class="btn Allotted-save" id="save" name="allotment_details[save]" value="Save"> -->
                                
                            </div>


                            </div>
                            <!-- For D-Fee-Payment [tab]  -->
                            <div class="tab-pane " id="D-Fee-Payment" role="tabpanel" aria-labelledby="D-Fee-Payment-tab"> 
                                  <div class="row w-100  d-flex justify-content-center align-items-start">
                                    <span style="font-family:sans-serif;font-size: 17px;color:#616665;font-weight: 500; ">AFee-Payment details</span>
                        </div>
                        <div class="row heading_row pl-4 mt-3 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 d-flex justify-content-start align-items-start"> <span>Name of data</span>
                                   </div>

                                   <div class="col-3 d-flex justify-content-start align-items-start"> <span>Data </span>
                                   </div>
                                       
                                        <div class="col-3 d-flex justify-content-start align-items-start"> <span>Error </span>
                                               <img src="images/i.png" class="textarea_i" style="width: 15px;height: 15px;" data-container="body"  data-toggle="popover" data-placement="right" data-content="Write about what the this error this this data for student to understand better that what is mistake i do">
                                   </div>

                                    <div class="col-3 d-flex justify-content-start align-items-start"> <span>Edit </span>
                                   </div>
                         </div>
                            <!-- Type of the Payment  -->
                         <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 name_fo_data_div d-flex justify-content-start align-items-start"> <span>Type of Payment</span>
                                   </div>

                                   <div class="col-3 stu_data_div d-flex justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                             <div class="custom-control error custom-checkbox" style="position: relative;">
                                 <input type="checkbox" class="custom-control-input" id="Type-of-Payment-e" name="" value="">
                                      <label class="custom-control-label" for="Type-of-Payment-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                       
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>

                                 <!-- Amount Deposited in Rs  -->
                         <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 name_fo_data_div d-flex justify-content-start align-items-start"> <span>Amount Deposited in Rs</span>
                                   </div>

                                   <div class="col-3 stu_data_div d-flex justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                             <div class="custom-control error custom-checkbox" style="position: relative;">
                                 <input type="checkbox" class="custom-control-input" id="Amount-Deposited-in-Rs-e" name="" value="">
                                      <label class="custom-control-label" for="Amount-Deposited-in-Rs-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                       
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>

                                 <!-- Serial Number of DD  -->
                         <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 name_fo_data_div d-flex justify-content-start align-items-start"> <span>Serial Number of DD</span>
                                   </div>

                                   <div class="col-3 stu_data_div d-flex justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                             <div class="custom-control error custom-checkbox" style="position: relative;">
                                 <input type="checkbox" class="custom-control-input" id="Serial-Number-of-DD-e" name="" value="">
                                      <label class="custom-control-label" for="Serial-Number-of-DD-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                       
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>

                                 <!-- Name of Issuer Bank  -->
                         <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 name_fo_data_div d-flex justify-content-start align-items-start"> <span>Name of Issuer Bank</span>
                                   </div>

                                   <div class="col-3 stu_data_div d-flex justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                             <div class="custom-control error custom-checkbox" style="position: relative;">
                                 <input type="checkbox" class="custom-control-input" id="Name-of-Issuer-Bank-e" name="" value="">
                                      <label class="custom-control-label" for="Name-of-Issuer-Bank-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                       
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>

                                 <!-- Date  -->
                         <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 name_fo_data_div d-flex justify-content-start align-items-start"> <span>Date</span>
                                   </div>

                                   <div class="col-3 stu_data_div d-flex justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                             <div class="custom-control error custom-checkbox" style="position: relative;">
                                 <input type="checkbox" class="custom-control-input" id="Date-e" name="" value="">
                                      <label class="custom-control-label" for="Date-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                       
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>

                                <!-- verify btn -->
                                 <div class="row mt-4 mb-3 d-flex flex-column justify-content-center align-items-center" >

                                  <div class="custom-control Payment-All-right-div custom-checkbox mb-4">
                               <input type="checkbox" class="custom-control-input" id="Payment-All-right" name="">
                                <label class="custom-control-label" for="Payment-All-right" style="font-weight: bold;">All right</label>
                                 </div>
                                <button class="btn Payment-verify-btn " id="Payment-verify-btn" name="" data-src="Payment_details" >Verify</button>
                               <!--  <input type="submit" class="btn Allotted-save" id="save" name="allotment_details[save]" value="Save"> -->
                                
                            </div>

                            </div>
                            <!-- For Gaurdian-Details [tab]  -->
                            <div class="tab-pane " id="Gaurdian-Details" role="tabpanel" aria-labelledby="Gaurdian-Details-tab">
                                <div class="row w-100  d-flex justify-content-center align-items-start">
                                    <span style="font-family:sans-serif;font-size: 17px;color:#616665;font-weight: 500; "> Gaurdian-Details </span>
                        </div>
                        <div class="row heading_row pl-4 mt-3 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 d-flex justify-content-start align-items-start"> <span>Name of data</span>
                                   </div>

                                   <div class="col-3 d-flex justify-content-start align-items-start"> <span>Data </span>
                                   </div>
                                       
                                        <div class="col-3 d-flex justify-content-start align-items-start"> <span>Error </span>
                                               <img src="images/i.png" class="textarea_i" style="width: 15px;height: 15px;" data-container="body"  data-toggle="popover" data-placement="right" data-content="Write about what the this error this this data for student to understand better that what is mistake i do">
                                   </div>

                                    <div class="col-3 d-flex justify-content-start align-items-start"> <span>Edit </span>
                                   </div>
                         </div>
                            <!-- Gaurdian Relation  -->
                         <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 name_fo_data_div d-flex justify-content-start align-items-start"> <span>Gaurdian Relation</span>
                                   </div>

                                   <div class="col-3 stu_data_div d-flex justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                             <div class="custom-control error custom-checkbox" style="position: relative;">
                                 <input type="checkbox" class="custom-control-input" id="Gaurdian-Relation-e" name="" value="">
                                      <label class="custom-control-label" for="Gaurdian-Relation-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                       
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>

                                 <!-- Gaurdian First Name  -->
                         <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 name_fo_data_div d-flex justify-content-start align-items-start"> <span>Gaurdian First Name</span>
                                   </div>

                                   <div class="col-3 stu_data_div d-flex justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                             <div class="custom-control error custom-checkbox" style="position: relative;">
                                 <input type="checkbox" class="custom-control-input" id="Gaurdian-First-Name-e" name="" value="">
                                      <label class="custom-control-label" for="Gaurdian-First-Name-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                       
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>

                                 <!-- Last Name  -->
                         <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 name_fo_data_div d-flex justify-content-start align-items-start"> <span>Last Name</span>
                                   </div>

                                   <div class="col-3 stu_data_div d-flex justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                             <div class="custom-control error custom-checkbox" style="position: relative;">
                                 <input type="checkbox" class="custom-control-input" id="f-Last-Name-e" name="" value="">
                                      <label class="custom-control-label" for="f-Last-Name-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                       
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>

                                 <!-- Gaurdian occupation  -->
                         <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 name_fo_data_div d-flex justify-content-start align-items-start"> <span>Gaurdian occupation</span>
                                   </div>

                                   <div class="col-3 stu_data_div d-flex justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                             <div class="custom-control error custom-checkbox" style="position: relative;">
                                 <input type="checkbox" class="custom-control-input" id="Gaurdian-occupation-e" name="" value="">
                                      <label class="custom-control-label" for="Gaurdian-occupation-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                       
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>

                                 <!-- Gaurdian Mobile No  -->
                         <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 name_fo_data_div d-flex justify-content-start align-items-start"> <span>Gaurdian Mobile No</span>
                                   </div>

                                   <div class="col-3 stu_data_div d-flex justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                             <div class="custom-control error custom-checkbox" style="position: relative;">
                                 <input type="checkbox" class="custom-control-input" id="Gaurdian-Mobile-No-e" name="" value="">
                                      <label class="custom-control-label" for="Gaurdian-Mobile-No-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                       
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>

                                 <!-- Gaurdian E-Mail  -->
                         <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 name_fo_data_div d-flex justify-content-start align-items-start"> <span>Gaurdian E-Mail</span>
                                   </div>

                                   <div class="col-3 stu_data_div d-flex justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                             <div class="custom-control error custom-checkbox" style="position: relative;">
                                 <input type="checkbox" class="custom-control-input" id="Gaurdian-E-Mail-e" name="" value="">
                                      <label class="custom-control-label" for="Gaurdian-E-Mail-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                       
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>

                                 <!-- Gaurdian Monthly Income in Rs.  -->
                         <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 name_fo_data_div d-flex justify-content-start align-items-start"> <span>Gaurdian Monthly Income in Rs.</span>
                                   </div>

                                   <div class="col-3 stu_data_div d-flex justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                             <div class="custom-control error custom-checkbox" style="position: relative;">
                                 <input type="checkbox" class="custom-control-input" id="Gaurdian-Monthly-Income-e" name="" value="">
                                      <label class="custom-control-label" for="Gaurdian-Monthly-Income-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                       
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>

                                 <!-- Gaurdian Residential/ correspondence Address  -->
                         <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 name_fo_data_div d-flex justify-content-start align-items-start"> <span>Gaurdian Residential/ correspondence Address</span>
                          stu_data_div          </div>

                                   <div class="col-3 d-flex justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                             <div class="custom-control error custom-checkbox" style="position: relative;">
                                 <input type="checkbox" class="custom-control-input" id="Gaurdian-C-Address-e" name="" value="">
                                      <label class="custom-control-label" for="Gaurdian-C-Address-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                       
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>

                                 <!-- Office Address and Correspondence Address both are same ?  -->
                         <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 name_fo_data_div d-flex justify-content-start align-items-start"> <span>Office Address and Correspondence Address both are same ?</span>
                          stu_data_div          </div>

                                   <div class="col-3 d-flex justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                             <div class="custom-control error custom-checkbox" style="position: relative;">
                                 <input type="checkbox" class="custom-control-input" id="G-A-both-are-same-e" name="" value="">
                                      <label class="custom-control-label" for="G-A-both-are-same-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                       
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>
                               

                                 <!-- Gaurdian Office Address  -->
                         <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 name_fo_data_div d-flex justify-content-start align-items-start"> <span>Gaurdian Office Address</span>
                                   </div>

                                   <div class="col-3 stu_data_div d-flex justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                             <div class="custom-control error custom-checkbox" style="position: relative;">
                                 <input type="checkbox" class="custom-control-input" id="Gaurdian-Office-Address-e" name="" value="">
                                      <label class="custom-control-label" for="Gaurdian-Office-Address-e"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                       
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>

                                 
                                <!-- verify btn -->
                                 <div class="row mt-4 mb-3 d-flex flex-column justify-content-center align-items-center" >

                                  <div class="custom-control Gaurdian-All-right-div custom-checkbox mb-4">
                               <input type="checkbox" class="custom-control-input" id="Gaurdian-All-right" name="">
                                <label class="custom-control-label" for="Gaurdian-All-right" style="font-weight: bold;">All right</label>
                                 </div>
                                <button class="btn Gaurdian-verify-btn " id="Gaurdian-verify-btn" name="" data-src="Gaurdian_details" >Verify</button>
                               <!--  <input type="submit" class="btn Allotted-save" id="save" name="allotment_details[save]" value="Save"> -->
                                
                            </div>


                            </div>
                            <!-- For Document-Checklist [tab]  -->
                            <div class="tab-pane " id="Document-Checklist" role="tabpanel" aria-labelledby="Document-Checklist-tab"> 
<div class="row w-100  d-flex justify-content-center align-items-start">
                                    <span style="font-family:sans-serif;font-size: 17px;color:#616665;font-weight: 500; ">Allotment details</span>
                        </div>
                        <div class="row heading_row pl-4 mt-3 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 d-flex justify-content-start align-items-start"> <span>Name of data</span>
                                   </div>

                                   <div class="col-3 d-flex justify-content-start align-items-start"> <span>Data </span>
                                   </div>
                                       
                                        <div class="col-3 d-flex justify-content-start align-items-start"> <span>Error </span>
                                               <img src="images/i.png" class="textarea_i" style="width: 15px;height: 15px;" data-container="body"  data-toggle="popover" data-placement="right" data-content="Write about what the this error this this data for student to understand better that what is mistake i do">
                                   </div>

                                    <div class="col-3 d-flex justify-content-start align-items-start"> <span>Edit </span>
                                   </div>
                         </div>
                            <!-- abhi  -->
                         <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 name_fo_data_div d-flex justify-content-start align-items-start"> <span>abhi</span>
                                   </div>

                                   <div class="col-3 stu_data_div d-flex justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                             <div class="custom-control error custom-checkbox" style="position: relative;">
                                 <input type="checkbox" class="custom-control-input" id="abhi" name="" value="">
                                      <label class="custom-control-label" for="abhi"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                       
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>

                                <!-- verify btn -->
                                 <div class="row mt-4 mb-3 d-flex flex-column justify-content-center align-items-center" >

                                  <div class="custom-control Document-All-right-div custom-checkbox mb-4">
                               <input type="checkbox" class="custom-control-input" id="Document-All-right" name="">
                                <label class="custom-control-label" for="Document-All-right" style="font-weight: bold;">All right</label>
                                 </div>
                                <button class="btn Document-verify-btn " id="Document-verify-btn" name="" data-src="Document_details" >Final Verify</button>
                               <!--  <input type="submit" class="btn Allotted-save" id="save" name="allotment_details[save]" value="Save"> -->
                                
                            </div>

                             </div>
                            <!-- For Final-verification [tab]  -->
                            <div class="tab-pane " id="Final-verification" role="tabpanel" aria-labelledby="Final-verification-tab"> 
<div class="row w-100  d-flex justify-content-center align-items-start">
                                    <span style="font-family:sans-serif;font-size: 17px;color:#616665;font-weight: 500; ">Allotment details</span>
                        </div>
                        <div class="row heading_row pl-4 mt-3 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 d-flex justify-content-start align-items-start"> <span>Name of data</span>
                                   </div>

                                   <div class="col-3 d-flex justify-content-start align-items-start"> <span>Data </span>
                                   </div>
                                       
                                        <div class="col-3 d-flex justify-content-start align-items-start"> <span>Error </span>
                                               <img src="images/i.png" class="textarea_i" style="width: 15px;height: 15px;" data-container="body"  data-toggle="popover" data-placement="right" data-content="Write about what the this error this this data for student to understand better that what is mistake i do">
                                   </div>

                                    <div class="col-3 d-flex justify-content-start align-items-start"> <span>Edit </span>
                                   </div>
                         </div>
                            <!-- abhi  -->
                         <div class="row detail_show_row pb-1 pl-4 mt-2 w-100 d-flex justify-content-start border-bottom align-items-start" style="">
                                   <div class="col-3 name_fo_data_div d-flex justify-content-start align-items-start"> <span>abhi</span>
                                   </div>

                                   <div class="col-3 stu_data_div d-flex justify-content-start align-items-start"> <span>yahai_kamal_ka_kam_h</span>
                                   </div>
                                       
                                        <div class="col-3 d-flex row justify-content-between align-items-start">

                                             <div class="custom-control error custom-checkbox" style="position: relative;">
                                 <input type="checkbox" class="custom-control-input" id="abhi" name="" value="">
                                      <label class="custom-control-label" for="abhi"><span class="label_span">Error</span></label>
                                       </div>
                                         <textarea  class="massage_for_error d-none"  rows="2"></textarea>
                                       
                                   </div>
                                    
                                    <div class="col-3 d-flex justify-content-start align-items-start"> 
                                        <!--  <input type="checkbox" name="" >
                                         <input type="text" name=""> -->
                                   </div>
                                </div>

                                <!-- verify btn -->
                                 <div class="row mt-4 mb-3 d-flex flex-column justify-content-center align-items-center" >

                                  <div class="custom-control Final-All-right-div custom-checkbox mb-4">
                               <input type="checkbox" class="custom-control-input" id="Final-All-right" name="">
                                <label class="custom-control-label" for="Final-All-right" style="font-weight: bold;">All right</label>
                                 </div>
                                <button class="btn Final-verify-btn " id="Final-verify-btn" name="" data-src="Final_details" >Final Verify</button>
                               <!--  <input type="submit" class="btn Allotted-save" id="save" name="allotment_details[save]" value="Save"> -->
                                
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="position:absolute; top: 0;left: 0;">
            <h4></h4>
        </div>
        
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <script src="../../js/jquery.js"></script>
        <script src="../../js/jquery-ui.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="../../js/script.js"></script>
        <script >
            $(document).ready(function(){
               function all_right_checkbox_hide(i,r){
                var a,b=0;
                for(a=0;a<i.length-1;a++){
                     if(i[a].checked){
                       b++;
                    }
                }
                  if(b == 0){
                 r.removeClass("d-none");
                
                  }
                  else{
                      r.addClass("d-none");
                  }

               }
              $(".error .custom-control-label").each(function(){
                $(this).click(function(){
                   
                    setTimeout(function(){
                    all_right_checkbox_hide($("#Allotment-details input"),$(".Allotted-All-right-div")); 
                    all_right_checkbox_hide($("#Personal-datails input"),$(".Personal-All-right-div")); 
                    all_right_checkbox_hide($("#Photo-and-Sign input"),$(".P-a-S-All-right-div")); 
                    all_right_checkbox_hide($("#D-Last-Attended input"),$(".edu-All-right-div")); 
                    all_right_checkbox_hide($("#D-Fee-Payment input"),$(".Payment-All-right-div")); 
                    all_right_checkbox_hide($("#Gaurdian-Details input"),$(".Gaurdian-All-right-div")); 
                    all_right_checkbox_hide($("#Document-Checklist input"),$(".Document-All-right-div")); 
                    all_right_checkbox_hide($("#Final-verification input"),$(".Final-All-right-div")); 

                        }, 10);
                   
                    if($(this).siblings().is(":checked") == false){
                          $(this).find('span').addClass("d-none");
                    $(this).parent().parent().siblings().find('span').css("color","red");
                 var textarea = $(this).parent().siblings();
                     textarea.removeClass("d-none");
                     setTimeout(function(){
                             textarea.focus();
                        }, 5);
                    }
                       else{
                    $(this).find('span').removeClass("d-none");
                    $(this).parent().parent().siblings().find('span').css("color","black");
                 var textarea = $(this).parent().siblings();
                     textarea.addClass("d-none");
                       }
                

                });
              });
            });

// show icons divs
            $(document).ready(function(){

                  $(".Stu-mail").click(function(){
                       $(".send-maill-icon-div").toggle('show',function(){
                            setTimeout(function(){
                              $(".send-mail-ta").focus();
                              }, 5);
 
   
 });

                     
  // $(".send-maill-icon-div").blur(function(){
  //       $(".send-maill-icon-div").css("display","none");
  //   });
                  });
                             $(".stu-phone-no").click(function(){
                       $(".student-contact-div").toggle('show',function(){
                            
  }); 
   
 });

               
               
            });


        </script>


<!-- KAMAL javascript for AJAX -->
<!-- AJAX request to show all subadmins --STARTS -->
<!-- JAVASCRIPT----------------------  -->
   <!--  <script>
        let all_subadmins_btn = document.getElementById('profile-tab');
        let div1 = document.getElementById('profile');
        var pagination,pagination_length;
        let request_in_progess = false;

        function get_all_subadmins(eve) {
            // Prevents multiple AJAX request.
            if (request_in_progess) {return;}
            request_in_progess = true;

            var xhr = new XMLHttpRequest();
            if (Number.isInteger(eve) == false) {
                eve = 'a';
            }
            xhr.open("GET", '../process/get_all_subadmins.php?page=' + eve, true);
            xhr.setRequestHeader('X-Requested-with', 'XMLHttpRequest');

            /* --For POST request
            xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
            */
            if(xhr.readyState < 4){
            div1.innerHTML = "<div class='spinner_div'><img src='/demo1/public/images/spinner.gif' class='spinner'></div>";
            }
            xhr.onreadystatechange = function() {

                // NOT WORKING HERE
                // WORKING OUTSIDE OF THIS FUNCTION
               /* if(xhr.readyState <4){
                    div1.innerHTML = 'LOADING...LOADING...';
                    }*/

                if (xhr.readyState == 4 && xhr.status == 200) {
                    //var j = show_json(xhr.responseText);
                    //console.log(xhr.responseText);
                    if (xhr.responseText == 'false') {
                        window.location.href= '/';
                        return;
                    }else{
                    div1.innerHTML=xhr.responseText;
                }
                // **FOR PAGINATION
                // given below variables must be initialised here
                // so do not move this part in somewhere place.
                pagination = document.querySelectorAll('.pagination span');
                pagination_length = pagination.length;
                        //addEventListener for click on a pagination
                        for (var i = 0; i < pagination_length; i++) {
                        pagination[i].addEventListener('click',function(e){
                            e.preventDefault();
                            let send_value = parseInt(e.toElement.attributes[0].value);
                            get_all_subadmins(send_value);
                        },false);
                    }

                    // It means request has completed.
                    request_in_progess = false;
                }

            }
            /* Sending the request */
            xhr.send();

            
        }

        /* It converts the text values which is returned by the server into JSON */
        function show_json(data) {
            var jsonn = JSON.parse(data);
            return jsonn;
        }

        //addEventLinstener for click on a button
        all_subadmins_btn.addEventListener('click',function(e){
            e.preventDefault();
            get_all_subadmins(e);
                },false);




    </script>-->
<!-- AJAX request to show all subadmins --ENDS------------------------->

<!-- JAVASCRIPT for captcha -->
<!-- <script>
    let input = document.getElementById('input_for_captcha');
    let refresh_img = document.getElementById('refresh_icon');
    function load_new_captcha(){
        input.value = '';
    }
    refresh_img.addEventListener('click',load_new_captcha,false);
</script>-->
<!-- ------------------------------->
<!-- FOOTER -->
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
  