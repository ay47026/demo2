


function textwrite() {

document.getElementById("r-m-n").oninput = function() {

  document.getElementById("r-nn").value=  this.value;
      document.getElementById("r-nn2").value=  this.value;
};
}
textwrite();

function to_int(float){
    var int=String(float);
    if(int.length == 1 ){
        return "0"+int;
    }
    else{
        return int;
    }
}

function set_time() {

document.getElementById("p-t").oninput = function() {

var t=540;
    var lu_t=60;


     var t_s_1=(((t)/60).toFixed(2)).split(".");
  document.getElementById("p1").innerHTML= t_s_1[0]+":"+to_int(parseInt(((t_s_1[1]/100)*60))) ;
    var t_s_2=(((t+Number(this.value))/60).toFixed(2)).split(".");
  document.getElementById("p2").innerHTML= t_s_2[0]+":"+ to_int(parseInt(((t_s_2[1]/100)*60))) ;
     var t_s_3=(((t+2*(Number(this.value)))/60).toFixed(2)).split(".");
  document.getElementById("p3").innerHTML= t_s_3[0]+":"+to_int(parseInt(((t_s_3[1]/100)*60))) ;
     var t_s_4=(((t+3*(Number(this.value)))/60).toFixed(2)).split(".");
  document.getElementById("p4").innerHTML= t_s_4[0]+":"+to_int(parseInt(((t_s_4[1]/100)*60))) ;
     var t_s_5=(((t+lu_t+4*(Number(this.value)))/60).toFixed(2)).split(".");
  document.getElementById("p5").innerHTML= t_s_5[0]+":"+to_int(parseInt(((t_s_5[1]/100)*60))) ;
     var t_s_6=(((t+lu_t+5*(Number(this.value)))/60).toFixed(2)).split(".");
  document.getElementById("p6").innerHTML= t_s_6[0]+":"+to_int(parseInt(((t_s_6[1]/100)*60))) ;
     var t_s_7=(((t+lu_t+6*(Number(this.value)))/60).toFixed(2)).split(".");
  document.getElementById("p7").innerHTML= t_s_7[0]+":"+to_int(parseInt(((t_s_7[1]/100)*60))) ;
// var t_s_2=(((t)/60).toFixed(2)).split(".");
//  document.getElementById("p1").innerHTML= t_s_2[0]+":"+ parseInt(((t_s_2[1]/100)*60)) ;
//    var t_s_2=(((t+Number(this.value))/60).toFixed(2)).split(".");
//  document.getElementById("p2").innerHTML= t_s_2[0]+":"+ parseInt(((t_s_2[1]/100)*60)) ;
//     var t_s_3=(((t+2*(Number(this.value)))/60).toFixed(2)).split(".");
//  document.getElementById("p3").innerHTML= t_s_3[0]+":"+parseInt(((t_s_3[1]/100)*60)) ;
//     var t_s_4=(((t+3*(Number(this.value)))/60).toFixed(2)).split(".");
//  document.getElementById("p4").innerHTML= t_s_4[0]+":"+parseInt(((t_s_4[1]/100)*60)) ;
//     var t_s_5=(((t+lu_t+4*(Number(this.value)))/60).toFixed(2)).split(".");
//  document.getElementById("p5").innerHTML= t_s_5[0]+":"+parseInt(((t_s_5[1]/100)*60)) ;
//     var t_s_6=(((t+lu_t+5*(Number(this.value)))/60).toFixed(2)).split(".");
//  document.getElementById("p6").innerHTML= t_s_6[0]+":"+parseInt(((t_s_6[1]/100)*60)) ;
//     var t_s_7=(((t+lu_t+6*(Number(this.value)))/60).toFixed(2)).split(".");
//  document.getElementById("p7").innerHTML= t_s_7[0]+":"+parseInt(((t_s_7[1]/100)*60)) ;




};
}
set_time();

