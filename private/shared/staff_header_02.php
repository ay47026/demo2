    <!--      start  header-->
        <div class="row p-0 m-0" style="width: 100% ;height:7vh;background-color: #1f4a4d;">

            <div class="col-2 d-flex flex-row justify-content-start align-items-center"><img src="<?php echo url_for('/images/logo11.png'); ?>" width="100%" style="width: 30%;margin-left: 2%">
                <span style="color:white;text-shadow: 2px 2px black; font-weight: bold;font-size: 30px;margin-left: 10px;">ERP<span style="color: #5C3384;color:white;text-shadow: 1px 1px black;font-weight: bold;font-size: 10px;">AITH</span></span>
            </div>
            <div class="col-10 d-flex justify-content-end"  style="text-align: center">
                 <div  class="header-icons  " style=""> 
   <ul class="d-flex justify-content-end align-items-center" style="height: 90%">
           <li  class="All-Stu-mail" title="Check status">   <a >  <i class="far fa-comment-alt"></i> </a></li>

              <li  class="All-Stu-mail" title="">   <a >    <i class="fas fa-user-cog"></i> </a></li>

                <li  class="All-Stu-mail" title="Send mail to all student">   <a >  <i class="fa fa-question-circle" aria-hidden="true"></i></a></li>
           
          </ul>
      </div>
            </div>
        </div>

 <!-- NEW CODE BY `KAMAL` FOR NAVIGATION MENU for main admin  -->
 <?php if($session->is_logged_in()){ ?>
        <navigation style="float: right;position: absolute;right: 0;z-index: 1">
      <ul style="padding-left: 15px;">
        
          <li>User: <?php echo $session->email . ' | main admin';  ?></li>
        <li><a href="<?php echo url_for('/staff/main_admin/index.php'); ?>">Menu</a></li>
        <li><a href="<?php echo url_for('/staff/main_admin/logout.php'); ?>">Logout</a></li>
      
      </ul>
    </navigation>
    <?php } ?>
    <?php echo display_session_message(); ?>

        <!-- end staff header-->