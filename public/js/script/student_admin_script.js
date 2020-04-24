

//upload pic
$(document).ready(function () {

    $(".upload-photo-stu-btn").click(function () {

        var input = document.createElement("input");
        input.type = "file";
        input.accept = "image/*";
        input.click();
        input.onchange = function () {
            var file = this.files[0];
            var url = URL.createObjectURL(file);
            $(".upload-stu-pic").attr("src", url);
            $(".upload-stu-pic").attr("width", "100%");

            // blob :temporary url -used instantentaly present the pic
            //  'base64' this the datatype of the translation from operating system
            var reader = new FileReader();

            reader.readAsDataURL(file);
            //readAsDataURL is return the incoded string in the form of object of url which is read by the fileReader
            reader.onload = function () {
                sessionStorage.setItem("upload_pic", this.result);
            }
        }
    });
});
$(document).ready(function () {

    $("#stu_date").datepicker({
        //          dateFormat: 'dd/mm/yy',
        //                dayNames: ['Domingo', 'Lunes', 'Martes', 'MiÃ©rcoles', 'Jueves', 'Viernes', 'Sabado'],
        //                dayNamesMin: ['D', 'L', 'M', 'X', 'J', 'V', 'S'],
        //                dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
        //                firstDay: 1,
        //                monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        //                monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        //                changeYear: true,
        //                changeMonth: true,
        yearRange: '-100:+0',

        showAnim: "fade",
        changeMonth: true,
        changeYear: true,
        duration: 300,
        dateFormat: 'yy-mm-dd'
    });
});
//date formate
//
//$(document).ready(function(){
//    $("#stu_date").blur(function(){
//
//          var date_f =  $("#stu_date").val().split("/");
//                var date_f_ddmmyyy = date_f[1] + "/" + date_f[0] + "/" + date_f[2];
//                var date = new Date(date_f_ddmmyyy);
//                var dob_day = date.getDate();
//                //getmonth methed index start from '0' index
//                var dob_month = date.getMonth() + 1;
//                var dob_year = date.getFullYear();
//                var dob = dob_year + "/" + dob_month + "/" + dob_day;
//
//    });
//
//});

