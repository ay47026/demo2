<?php require_once('../../../private/initialize.php'); ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<body data-spy="scroll" data-target=".navbar" data-offset="450">

    <div class="jumbotron p-4 m-0" style="">
        <div class="row">
            <div class="col-md-8"><img src="../images/logo.png" width="100%"></div>
            <div class="col-md-4" style="text-align: center"><span style="color: blue;font-weight: bold;font-size: 30px;">College ERP</span></div>
        </div>
    </div>
    <div class="jumbotron p-2 m-0" style="width: 100% ;height:100vh">
        <div class="row" style="width: 100% ;height:100vh;margin-left: 5px;">
            <div class="col-md-2 p-4 d-flex flex-column justify-content-start align-items-start " style="border: 2px solid black;">
         <a href="../index.html" style="font-size: 20px; font-weight: bold;">HOME</a>
            </div>
            <div class="col-md-9 p-4" style="border: 2px solid black;margin-left: 10px;">
                <div class="row d-flex flex-row justify-content-between align-items-center" style="width: 100%;">
                    <span style="color: black;font-size: 23px;text-transform: uppercase">Main Admin</span>
                     <span style="color: black;font-size: 15px;font-weight:bold" data-toggle="modal" data-target="#add_admin"><a href="#">Add new administrator</a></span>

                </div>
                <div class="row">
                      <div class="table-responsive"><table class="table">
       <thead>
           <tr>
               <th scope="col">#</th>
               <th scope="col">Name</th>
               <th scope="col">Job</th>
                         <th scope="col">Id</th>
               <th scope="col">Password</th>
               <th scope="col">Operation</th>

           </tr>
       </thead>
       <tbody>
           <tr>
               <th scope="row">1</th>
               <td>DK Sachan</td>
               <td>Main admin</td>
                 <td>8ssk</td>
               <td>4555456</td>
               <a href="#"> <td> <button type="button" style="width: 80px;" class="btn btn-primary">Edit </button>  </td></a>
                <a href="#"> <td> <button type="button" style="width: 80px;" class="btn btn-primary">Delete </button>  </td></a>


           </tr>
           <tr>
               <th scope="row">1</th>
               <td>DK Sachan</td>
               <td>Main admin</td>
                 <td>8ssk</td>
               <td>4555456</td>
               <a href="#"> <td> <button type="button" style="width: 80px;" class="btn btn-primary">Edit </button>  </td></a>
                <a href="#"> <td> <button type="button" style="width: 80px;" class="btn btn-primary">Delete </button>  </td></a>


           </tr>

       </tbody>
   </table>
</div>


                </div>

            </div>
        </div>
    </div>




    <div class="modal fade " id="add_admin" role="dialog" >
       <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header" style="position: relative">
               <h5 class="modal-title" id="exampleModalLabel">Login Main Admin</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: sticky;top: 0;right: 0;"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body ">
        <form action="" method="post" enctype="multipart/form-data">
       <div class="form-group">

           <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="admin Name">
       </div>
            <div class="form-group">

           <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Job Title">
       </div>
       <div class="form-group">

           <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Set id">
       </div>
       <div class="form-group">

       <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
   </div>


   </form>


            </div>
            <div class="modal-footer">
                <a href="main_admin.php"> <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
 <button type="submit" class="btn btn-primary">Submit</button></a>

            </div>
         </div>
      </div>
   </div>










    <!-- jQuery first, then Popper.js, then Bootstrap JS -->


     <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="../../js/jquery.js"></script>
    <script src="../../js/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="../../js/wow.min.js"></script>
    <script src="../../js/script.js"></script>





</body></html>
