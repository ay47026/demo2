<style >

.demo1 ul {

  list-style: none;
  padding: 0;
}
.demo1 li {
 
  width: 100%;
   list-style-type: none !important;
   font-size: 14px;
  border-bottom: 1px solid gray !important;
       margin-top: 5px !important;
}
.demo1 li div{
  
    margin-top:-22px !important;
}
.demo1 li a{

padding: 0;
margin:0;
margin-left: 5%;
  width: 90%;
    text-decoration:none;
    color: #072728;
   
}
.demo1 li:before {
  content: "\f0a4"; /* FontAwesome Unicode */
  font-family: FontAwesome;
  display: inline-block;
  margin-left: .3em; 
/* same as padding-left set on li */
  width: 1.3em; /* same as padding-left set on li */
}
</style>

<div class="row p-0 m-0 ">
        <div class="col-md-8 p-0 m-0 ">
            <div id="myclient" class="carousel  container slide p-0 m-0" data-ride="carousel">
                <ol class="carousel-indicators  ">
                    <li data-target="#myclient " data-slide-to="0" class="active"></li>
                    <li data-target="#myclient" data-slide-to="1"></li>
                    <li data-target="#myclient" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner animated fadeIn text-center">
                    <div class="carousel-item  active">
                        <div class="client-pic mx-auto" >
                            <img src="<?php echo url_for('/images/2019-01-31%20(1).jpg'); ?>" style="width:100%; height:350px ;" atl="pic ">
                        </div>
                    </div>
                    <div class="carousel-item animated fadeIn">
                        <div class="client-pic mx-auto">
                            <img src="<?php echo url_for('/images/2017-10-25.jpg'); ?>" style="width:100%; height:350px;" atl="pic ">
                        </div>

                    </div>
                    <div class="carousel-item animated fadeIn">
                        <div class="client-pic mx-auto">
                            <img src="<?php echo url_for('/images/teachers.jpg'); ?>" style="width:100%; height:350px;" atl="pic ">
                        </div>


                    </div>
                </div>

            </div>

        </div>
        <div class="col-md-4  p-0 d-flex flex-row justify-content-center  m-0 w-100" >
            <div class="panel " style="width:100% !important;border:1px solid #447677;background-color: #e3f6f7">
                <div class="panel-heading heading-news1new row p-0 m-0" style="width: 100%!important;background-color: #447677">
                   <div class="row d-flex pl-5 pt-1 pb-2" ><span style="font-weight: bold !important;font-family: sans-serif;font-size: 15 !important;color: #fff;"> Notes & Annausment</span></div>
                   
                    <ul style="margin-top: -4px;" class="pagination pull-right">
                        <li><a class="prev" href="#"><span class="glyphicon glyphicon-chevron-down"></span></a></li>
                        <li><a class="next" href="#"><span class="glyphicon glyphicon-chevron-up"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body p-0 m-0 ">
                    <div class="row p-0 m-0 ">
                        <div class="col-xs-12 p-0 m-0">
                            <ul class="demo1 pl-2 pr-2 m-0">

                          
                                <li class="news-item m-0 p-0 ">
                                    <div class=" p-0 m-0 d-flex justify-content-center"><a href="#">Sit amet, consectetur adipiscing elit. Nullam in venenatis enim... Read more...</a></div>
                                    
                                </li>
                                <li class="news-item">
                                     <div class=" p-0 m-0 d-flex justify-content-center"><a href="#"> Dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... Read more...</a></div>
                                </li>
                                <li class="news-item">
                                     <div class=" p-0 m-0 d-flex justify-content-center"><a href="#"> Lorem ipsem sit amet, consectetur adipiscing elit. Nullam in venenatis enim... Read more...</a></div>
                                </li>
                                <li class="news-item">
                                     <div class=" p-0 m-0 d-flex justify-content-center"><a href="#"> Consectetur adipiscing elit. Nullam in venenatis enim... Read more...<img src="https://aktu.ac.in/images/new_red.gif"></a></div>
                                </li>
                                <li class="news-item">
                                    <div class=" p-0 m-0 d-flex justify-content-center"><a href="#"> Amet, consectetur adipiscing elit. Nullam in venenatis enim... Read more...<img src="https://aktu.ac.in/images/new_red.gif"></a></div>
                                </li>
                                <li class="news-item">
                                   <div class=" p-0 m-0 d-flex justify-content-center"><a href="#"> dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... Read more...<img src="https://aktu.ac.in/images/new_red.gif"></a></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel-footer"> </div>
            </div>
        </div>
    </div>