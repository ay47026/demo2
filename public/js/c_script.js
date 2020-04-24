//number
jQuery.fn.ForceNumericOnly =
    function () {
        return this.each(function () {
            $(this).keydown(function (e) {
                var key = e.charCode || e.keyCode || 0;
                // allow backspace, tab, delete, enter, arrows, numbers and keypad numbers ONLY
                // home, end, period, and numpad decimal
                return (
                    key == 8 ||
                    key == 9 ||
                    key == 13 ||
                    key == 46 ||
                    key == 110 ||
                    key == 190 ||
                    (key >= 35 && key <= 40) ||
                    (key >= 48 && key <= 57) ||
                    (key >= 96 && key <= 105));
            });
        });
    };
//number

function display_error_select(v, e) {
    
    if (v.val() === null) {
        v.css("border", "1px solid red");
        e.css("display", "block");
    }
    v.click(function () {
        v.css("border", "");
        e.css("display", "none");
    });
}

function display_error_text(v, e) {
    if (v.val() === "") {
        v.css("border", "1px solid red");
        e.css("display", "block");
    }
    v.click(function () {
        v.css("border", "");
        e.css("display", "none");
    });
}

//step 1

$(document).ready(function () {
    function step1fieldval() {



        display_error_select($(".Year-of-Admission"), $("#Year-of-Admission-error"));
        display_error_select($(".Type-of-Admission"), $("#Type-of-Admission-error"));

        display_error_select($(".Allotted-Branch"), $("#Allotted-Branch-error"));

        display_error_select($(".Allotted-Category"), $("#Allotted-Category-error"));

        if ($(".Allotted-Sub-Category").val() === null) {
            $(".Allotted-Sub-Category").css("border", "1px solid red");
            $('#Allotted-Sub-Category-error').css("display", "block");
        }
        $(".Allotted-Sub-Category").click(function () {
            $(".Allotted-Sub-Category").css("border", "");
            $('#Allotted-Sub-Category-error').css("display", "none");
        });


        if ($(".Allotted-Roll-No").val() === "") {
            $(".Allotted-Roll-No").css("border", "1px solid red");
            $('#Allotted-Roll-No-error').css("display", "block");
        }
        $(".Allotted-Roll-No").click(function () {
            $(".Allotted-Roll-No").css("border", "");
            $('#Allotted-Roll-No-error').css("display", "none");
        });
    }

    $(" .Allotted-save").click(function () {
        step1fieldval();
    });


    $(".Allotted-save-next").click(function () {
        step1fieldval();
        if ($(".Year-of-Admission").val() != "" && $(".Allotted-Branch").val() != "" && $(".Allotted-Category").val() != "" && $(".Allotted-Sub-Category").val() != "" && $(".Allotted-Roll-No").val() != "") {

            document.getElementById("v-pills-step2-tab").click();
        }
    });
});




//step 2

$(document).ready(function () {
    function step2fieldval() {
        //Full-name

        display_error_text($(".First-Name"), $("#First-Name-error"));

        display_error_text($(".Last-Name"), $("#Last-Name-error"));
        //Gender

                        display_error_select($(".Gender"), $("#Gender-error"));
        //Student-Mobile-No
        if ($(".Student-Mobile-No").val() === "") {
            $(".Student-Mobile-No").css("border", "1px solid red");
            $('#Student-Mobile-No-error').css("display", "block");
        }
        $(".Student-Mobile-No").click(function () {
            $(".Student-Mobile-No").css("border", "");
            $('#Student-Mobile-No-error').css("display", "none");
        });
        //date
        if ($(".DOB").val() === "") {
            $(".DOB").css("border", "1px solid red");
            $('#DOB-error').css("display", "block");
        }
        $(".DOB").click(function () {
            $(".DOB").css("border", "");
            $('#DOB-error').css("display", "none");
        });
        //Student-E-Mail-Id
        if ($(".Student-E-Mail-Id").val() === "") {
            $(".Student-E-Mail-Id").css("border", "1px solid red");
            $('#Student-E-Mail-Id-error').css("display", "block");
        }
        $(".Student-E-Mail-Id").click(function () {
            $(".Student-E-Mail-Id").css("border", "");
            $('#Student-E-Mail-Id-error').css("display", "none");
        });
        //Student-ADHAR

        if ($(".Student-ADHAR").val() === "") {
            $(".Student-ADHAR").css("border", "1px solid red");
            $('#Student-ADHAR-error').css("display", "block");
        }
        $(".Student-ADHAR").click(function () {
            $(".Student-ADHAR").css("border", "");
            $('#Student-ADHAR-error').css("display", "none");
        });
        //Correspondence-Address
        if ($(".Correspondence-Address").val() === "") {
            $(".Correspondence-Address").css("border", "1px solid red");
            $('#Correspondence-Address-error').css("display", "block");
        }
        $(".Correspondence-Address").click(function () {
            $(".Correspondence-Address").css("border", "");
            $('#Correspondence-Address-error').css("display", "none");
        });
        //C-District
        if ($(".C-District").val() == null) {
            $(".C-District").css("border", "1px solid red");
            $('#C-District-error').css("display", "block");
        }
        $(".C-District").click(function () {
            $(".C-District").css("border", "");
            $('#C-District-error').css("display", "none");
        });
        //C-Pincode
        if ($(".C-Pincode").val() === "") {
            $(".C-Pincode").css("border", "1px solid red");
            $('#C-Pincode-error').css("display", "block");
        }
        $(".C-Pincode").click(function () {
            $(".C-Pincode").css("border", "");
            $('#C-Pincode-error').css("display", "none");
        });




        //Permanent-Address
        if ($(".Permanent-Address").val() === "") {
            $(".Permanent-Address").css("border", "1px solid red");
            $('#Permanent-Address-error').css("display", "block");
        }
        $(".Permanent-Address").click(function () {
            $(".Permanent-Address").css("border", "");
            $('#Permanent-Address-error').css("display", "none");
        });
        //P-District
        if ($(".P-District").val() == null) {
            $(".P-District").css("border", "1px solid red");
            $('#P-District-error').css("display", "block");
        }
        $(".P-District").click(function () {
            $(".P-District").css("border", "");
            $('#P-District-error').css("display", "none");
        });
        //P-Pincode
        if ($(".P-Pincode").val() === "") {
            $(".P-Pincode").css("border", "1px solid red");
            $('#P-Pincode-error').css("display", "block");
        }
        $(".P-Pincode").click(function () {
            $(".P-Pincode").css("border", "");
            $('#P-Pincode-error').css("display", "none");
        });

    }




    $(".Student-ADHAR").ForceNumericOnly();
    $(".Student-Mobile-No").ForceNumericOnly();
    //date
    $("#DOB").datepicker({

        yearRange: '-100:+0',

        showAnim: "fade",
        changeMonth: true,
        changeYear: true,
        duration: 300,
        dateFormat: 'yy-mm-dd'
    });

    //adhar space validate
    $(".Student-ADHAR").click(function () {
        if (document.getElementById("Student-ADHAR").value == "") {
            document.getElementById("Student-ADHAR").value = " ";
        }
        $(".Student-ADHAR").keyup(function () {
            var a = $(".Student-ADHAR").val();

            if ((a.length) % 5 == 0) {
                document.getElementById("Student-ADHAR").value = a + " ";
            }
        });
    });
    //adhar length validate
    document.getElementById("Student-ADHAR").addEventListener("change", function () {

        if (document.getElementById("Student-ADHAR").value.length != 21) {
            $('#Student-ADHAR-error').css("display", "block");
            document.getElementById("Student-ADHAR-error").innerHTML = "Adhar is not correct";
            $(".Student-ADHAR").css("border", "1px solid red");

        }
        $(".Student-ADHAR").click(function () {
            $(".Student-ADHAR").css("border", "");
            $('#Student-ADHAR-error').css("display", "none");
            document.getElementById("Student-ADHAR-error").innerHTML = "pleas fill";
        });

    });


    // same address

    $("#a-yes").click(function () {
        if (this.checked == true) {
            var ca = $(".Correspondence-Address").val();
            var cd = $(".C-District").val();
            var cp = $(".C-Pincode").val();

            $(".Permanent-Address").val(ca);
            $(".P-District").val(cd);
            $(".P-Pincode").val(cp);
        }

    });
    $("#a-no").click(function () {
        if (this.checked == true) {
            $(".Permanent-Address").val("");
            $(".P-District").val("");
            $(".P-Pincode").val("");
        }
    });


    //mobile
    //Student-Mobile-No
    document.getElementById("Student-E-Mail-Id").addEventListener("blur", function () {
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        if (reg.test(this.value) == false) {
            $(".Student-E-Mail-Id").css("border", "1px solid red");
            $('#Student-E-Mail-Id-error').css("display", "block");
            $('#Student-E-Mail-Id-error').html("email is not valid");
        }
        $(".Student-E-Mail-Id").click(function () {
            $(".Student-E-Mail-Id").css("border", "");
            $('#Student-E-Mail-Id-error').css("display", "none");
        });
    });


    //email
    function validateEmail(emailField) {


        if (reg.test(emailField.value) == false) {
            alert('Invalid Email Address');
            return false;
        }

        return true;

    }
    document.getElementById("Student-Mobile-No").addEventListener("blur", function () {
        if ($(".Student-Mobile-No").val().length != 10) {
            $(".Student-Mobile-No").css("border", "1px solid red");
            $('#Student-Mobile-No-error').css("display", "block");
            $('#Student-Mobile-No-error').html("mobile is not 10 digit");
        }
        $(".Student-Mobile-No").click(function () {
            $(".Student-Mobile-No").css("border", "");
            $('#Student-Mobile-No-error').css("display", "none");
        });
    });
    //----

    $(" .Personal-save").click(function () {
        step2fieldval();
    });

    // Personal nexr save
    $(" .Personal-save-next").click(function () {

        step2fieldval();

        if (($(".P-Pincode").val() != "") && ($(".P-District").val() != "") && ($(".Permanent-Address").val() != "") && ($(".C-Pincode").val() != "") && ($(".C-District").val() != "") && ($(".Correspondence-Address").val() != "") && ($(".Student-ADHAR").val() != "") && ($(".Student-E-Mail-Id").val() != "") && ($(".Student-Mobile-No").val() != "") && ($(".Gender").val() != "") && ($(".Full-Name").val() != "")) {

            document.getElementById("v-pills-step3-tab").click();
        }
    });


});





//photo and sign

// datails of last s-c
$(document).ready(function () {
    function step4fieldval() {

        //1
        if ($(".Name-of-S-C").val() === "") {
            $(".Name-of-S-C").css("border", "1px solid red");
            $('#Name-of-S-C-error').css("display", "block");
        }
        $(".Name-of-S-C").click(function () {
            $(".Name-of-S-C").css("border", "");
            $('#Name-of-S-C-error').css("display", "none");
        });

        //2
        if ($(".Exam-Pass").val() === "") {
            $(".Exam-Pass").css("border", "1px solid red");
            $('#Exam-Pass-error').css("display", "block");
        }
        $(".Exam-Pass").click(function () {
            $(".Exam-Pass").css("border", "");
            $('#Exam-Pass-error').css("display", "none");
        });
        //3
        if ($(".Year-of-Passing").val() === "") {
            $(".Year-of-Passing").css("border", "1px solid red");
            $('#Year-of-Passing-error').css("display", "block");
        }
        $(".Year-of-Passing").click(function () {
            $(".Year-of-Passing").css("border", "");
            $('#Year-of-Passing-error').css("display", "none");
        });
        //4
        if ($(".last-S-C-Roll-No").val() === "") {
            $(".last-S-C-Roll-No").css("border", "1px solid red");
            $('#last-S-C-Roll-No-error').css("display", "block");
        }
        $(".last-S-C-Roll-No").click(function () {
            $(".last-S-C-Roll-No").css("border", "");
            $('#last-S-C-Roll-No-error').css("display", "none");
        });
        //5
        if ($(".Maximum-Marks").val() === "") {
            $(".Maximum-Marks").css("border", "1px solid red");
            $('#Maximum-Marks-error').css("display", "block");
        }
        $(".Maximum-Marks").click(function () {
            $(".Maximum-Marks").css("border", "");
            $('#Maximum-Marks-error').css("display", "none");
        });
        //6
        if ($(".Marks-Obtained").val() === "") {
            $(".Marks-Obtained").css("border", "1px solid red");
            $('#Marks-Obtained-error').css("display", "block");
        }
        $(".Marks-Obtained").click(function () {
            $(".Marks-Obtained").css("border", "");
            $('#Marks-Obtained-error').css("display", "none");
        });
    }
    //key validation

    $(".last-S-C-Roll-No").ForceNumericOnly();
    $(".Maximum-Marks").ForceNumericOnly();
    $(".Marks-Obtained").ForceNumericOnly();


    document.getElementById("Marks-Obtained").addEventListener("input", function () {

        var mm = Number($(".Maximum-Marks").val());
        var mo = Number(this.value);
        document.getElementById("Per-of-Marks").value = (mo * 100) / mm;

    });

    $(" .Last-Edu-save").click(function () {
        step4fieldval();
    });
    $(".Last-Edu-save-next").click(function () {
        step4fieldval();
        if (($(".Name-of-S-C").val() != "") && ($(".Exam-Pass").val() != "") && ($(".Year-of-Passing").val() != "") && ($(".last-S-C-Roll-No").val() != "") && ($(".Maximum-Marks").val() != "") && ($(".Marks-Obtained").val() != "")) {

            document.getElementById("v-pills-step5-tab").click();
        }
    });
});



//fee diposit
$(document).ready(function () {
    //mode1==bank draft
    function step5fieldval_mode1() {

        //1
        if ($(".m1-Amount-Deposited").val() === "") {
            $(".m1-Amount-Deposited").css("border", "1px solid red");
            $('#m1-Amount-Deposited-error').css("display", "block");
        }
        $(".m1-Amount-Deposited").click(function () {
            $(".m1-Amount-Deposited").css("border", "");
            $('#m1-Amount-Deposited-error').css("display", "none");
        });

        //2
        if ($(".m1-Serial-Number-of-DD").val() === "") {
            $(".m1-Serial-Number-of-DD").css("border", "1px solid red");
            $('#m1-Serial-Number-of-DD-error').css("display", "block");
        }
        $(".m1-Serial-Number-of-DD").click(function () {
            $(".m1-Serial-Number-of-DD").css("border", "");
            $('#m1-Serial-Number-of-DD-error').css("display", "none");
        });
        //3
        if ($(".m1-Name-of-Issuer-Bank").val() === "") {
            $(".m1-Name-of-Issuer-Bank").css("border", "1px solid red");
            $('#m1-Name-of-Issuer-Bank-error').css("display", "block");
        }
        $(".m1-Name-of-Issuer-Bank").click(function () {
            $(".m1-Name-of-Issuer-Bank").css("border", "");
            $('#m1-Name-of-Issuer-Bank-error').css("display", "none");
        });
        //4
        if ($(".m1-fee-date").val() === "") {
            $(".m1-fee-date").css("border", "1px solid red");
            $('#m1-fee-date-error').css("display", "block");
        }
        $(".m1-fee-date").click(function () {
            $(".m1-fee-date").css("border", "");
            $('#m1-fee-date-error').css("display", "none");
        });


    }
    //date
    $("#m1-fee-date").datepicker({

        yearRange: '-100:+0',

        showAnim: "fade",
        changeMonth: true,
        changeYear: true,
        duration: 300,
        dateFormat: 'yy-mm-dd'
    });


    //key validation

    $(".m1-Amount-Deposited").ForceNumericOnly();
    $(".m1-Serial-Number-of-DD").ForceNumericOnly();





    $(" .mode1-fee-save").click(function () {
        step5fieldval_mode1();
    });
    $(".mode1-fee-save-next").click(function () {
        step5fieldval_mode1();
        if (($(".m1-Amount-Deposited").val() != "") && ($(".m1-Serial-Number-of-DD").val() != "") && ($(".m1-Name-of-Issuer-Bank").val() != "") && ($(".m1-fee-date").val() != "")) {
            document.getElementById("v-pills-step6-tab").click();
        }
    });
});


//gaurdian details
$(document).ready(function () {
      $(".Gaurdian-Relation").change(function(){
            $(".g_relation_name").html($(this).val());
       });

    function step6fieldval() {


        display_error_text($(".Gaurdian-First-Name"), $('#Gaurdian-First-Name-error'));

        display_error_text($(".Gaurdian-Last-Name"), $('#Gaurdian-Last-Name-error'));

        display_error_($(".Gaurdian-Relation"), $('#Gaurdian-Relation-error'));



        display_error_text($(".Gaurdian-occupation"), $('#Gaurdian-occupation-error'));

        //
        display_error_text($(".Gaurdian-Mobile-No"), $('#Gaurdian-Mobile-No-error'));

        //
        display_error_text($(".Gaurdian-E-Mail"), $('#Gaurdian-E-Mail-error'));

        display_error_text($(".Gaurdian-Monthly-Income"), $('#Gaurdian-Monthly-Income-error'));

        display_error_text($(".Gaurdian-Correspondence-Address"), $('#Gaurdian-Correspondence-Address-error'));
        display_error_text($(".Gaurdian-Office-Address"), $('#Gaurdian-Office-Address-error'));
        display_error_text($(".Gaurdian-Pan-No"), $('#Gaurdian-Pan-No-error'));

    }
    //date
    //    $("#m1-fee-date").datepicker({
    //
    //        yearRange: '-100:+0',
    //
    //        showAnim: "fade",
    //        changeMonth: true,
    //        changeYear: true,
    //        duration: 300,
    //        dateFormat: 'yy-mm-dd'
    //    });

    // same address

    $("#g-a-yes").click(function () {

        if (this.checked == true) {

            var ca = $(".Gaurdian-Correspondence-Address").val();

            $(".Gaurdian-Office-Address").val(ca);
        }

    });
    $("#g-a-no").click(function () {
        if (this.checked == true) {
            $(".Gaurdian-Office-Address").val("");
        }
    });



    //key validation

    $(".m1-Amount-Deposited").ForceNumericOnly();
    $(".m1-Serial-Number-of-DD").ForceNumericOnly();
    $(" .Gaurdian-Details-save").click(function () {
        step6fieldval();
    });
    $(".Gaurdian-Details-save-next").click(function () {
        step6fieldval();
        if (
            $(".Gaurdian-First-Name").val() != "" &&
            $(".Gaurdian-Last-Name").val() != "" &&
            $(".Gaurdian-Relation").val() != "" &&
            $(".Gaurdian-occupation").val() != "" &&
            $(".Gaurdian-Mobile-No").val() != "" &&
            $(".Gaurdian-E-Mail").val() != "" &&
            $(".Gaurdian-Monthly-Income").val() != "" &&
            $(".Gaurdian-Correspondence-Address").val() != "" &&
            $(".Gaurdian-Office-Address").val() != "" &&
            $(".Gaurdian-Pan-No").val() != ""
        ) {
            document.getElementById("v-pills-step7-tab").click();
        }
    });
});






$(document).ready(function () {

function e_p_hide(v, l, l_e, u_b){

              v.attr("src","");
           l.html("No file chosen");
l.css("border", "");
 l_e.html("");
           l_e.css("display", "none");
            u_b.css("display", "none !important");
}

function e_p_show(e,i,v, l, l_e, u_b,p){
  var filename = (e.files[i].name);
        var file = e.files[i];
        var url = URL.createObjectURL(file);
           if (file.size <= (500 * 1024)) {
            p.click(function(){
              v.parent().parent().toggle();
            });
          v.attr("src", url);
           v.attr("width", "60%");
           l.html(filename);
            u_b.css("display", "block");

        } else {
            l.css("border", "1px solid red");
            l_e.css("display", "block");
            l_e.html("Please upload photo less then 50kb");
        }
}
// 1. document
 $("#stu-d-1-upload").on("change", function () {
   
    e_p_hide( $(".d-1-upload-view"), $(".stu-d-1-upload-label"), $(".stu-d-1-error"), $(".stu-d-1"));
   
       e_p_show(this,0, $(".d-1-upload-view"), $(".stu-d-1-upload-label"), $(".stu-d-1-error"), $(".stu-d-1"),$(".stu-d-1-preview-btn"));
 });
 // 2. document
 $("#stu-d-2-upload").on("change", function () {
   
    e_p_hide( $(".d-2-upload-view"), $(".stu-d-2-upload-label"), $(".stu-d-2-error"), $(".stu-d-2"));
   
       e_p_show(this,0, $(".d-2-upload-view"), $(".stu-d-2-upload-label"), $(".stu-d-2-error"), $(".stu-d-2"),$(".stu-d-2-preview-btn"));
 });

// 3. document
 $("#stu-d-3-upload").on("change", function () {
   
    e_p_hide( $(".d-3-upload-view"), $(".stu-d-3-upload-label"), $(".stu-d-3-error"), $(".stu-d-3"));
   
       e_p_show(this,0, $(".d-3-upload-view"), $(".stu-d-3-upload-label"), $(".stu-d-3-error"), $(".stu-d-3"),$(".stu-d-3-preview-btn"));
 });
 // 4. document
 $("#stu-d-4-upload").on("change", function () {
   
    e_p_hide( $(".d-4-upload-view"), $(".stu-d-4-upload-label"), $(".stu-d-4-error"), $(".stu-d-4"));
   
       e_p_show(this,0, $(".d-4-upload-view"), $(".stu-d-4-upload-label"), $(".stu-d-4-error"), $(".stu-d-4"),$(".stu-d-4-preview-btn"));
 });
 // 5. document
 $("#stu-d-5-upload").on("change", function () {
   
    e_p_hide( $(".d-5-upload-view"), $(".stu-d-5-upload-label"), $(".stu-d-5-error"), $(".stu-d-5"));
   
       e_p_show(this,0, $(".d-5-upload-view"), $(".stu-d-5-upload-label"), $(".stu-d-5-error"), $(".stu-d-5"),$(".stu-d-5-preview-btn"));
 });
// 6. document
 $("#stu-d-6-upload").on("change", function () {
   
    e_p_hide( $(".d-6-upload-view"), $(".stu-d-6-upload-label"), $(".stu-d-6-error"), $(".stu-d-6"));
   
       e_p_show(this,0, $(".d-6-upload-view"), $(".stu-d-6-upload-label"), $(".stu-d-6-error"), $(".stu-d-6"),$(".stu-d-6-preview-btn"));
 });
 // 7. document
 $("#stu-d-7-upload").on("change", function () {
   
    e_p_hide( $(".d-7-upload-view"), $(".stu-d-7-upload-label"), $(".stu-d-7-error"), $(".stu-d-7"));
   
       e_p_show(this,0, $(".d-7-upload-view"), $(".stu-d-7-upload-label"), $(".stu-d-7-error"), $(".stu-d-7"),$(".stu-d-7-preview-btn"));
 });
 // 8. document
 $("#stu-d-8-upload").on("change", function () {
   
    e_p_hide( $(".d-8-upload-view"), $(".stu-d-8-upload-label"), $(".stu-d-8-error"), $(".stu-d-8"));
   
       e_p_show(this,0, $(".d-8-upload-view"), $(".stu-d-8-upload-label"), $(".stu-d-8-error"), $(".stu-d-8"),$(".stu-d-8-preview-btn"));
 });
 // 9. document
 $("#stu-d-9-upload").on("change", function () {
   
    e_p_hide( $(".d-9-upload-view"), $(".stu-d-9-upload-label"), $(".stu-d-9-error"), $(".stu-d-9"));
   
       e_p_show(this,0, $(".d-9-upload-view"), $(".stu-d-9-upload-label"), $(".stu-d-9-error"), $(".stu-d-9"),$(".stu-d-9-preview-btn"));
 });
 // 10. document
 $("#stu-d-10-upload").on("change", function () {
   
    e_p_hide( $(".d-10-upload-view"), $(".stu-d-10-upload-label"), $(".stu-d-10-error"), $(".stu-d-10"));
   
       e_p_show(this,0, $(".d-10-upload-view"), $(".stu-d-10-upload-label"), $(".stu-d-10-error"), $(".stu-d-10"),$(".stu-d-10-preview-btn"));
 });
 // 11. document
 $("#stu-d-11-upload").on("change", function () {
   
    e_p_hide( $(".d-11-upload-view"), $(".stu-d-11-upload-label"), $(".stu-d-11-error"), $(".stu-d-11"));
   
       e_p_show(this,0, $(".d-11-upload-view"), $(".stu-d-11-upload-label"), $(".stu-d-11-error"), $(".stu-d-11"),$(".stu-d-11-preview-btn"));
 });
 // 12. document
 $("#stu-d-12-upload").on("change", function () {
   
    e_p_hide( $(".d-12-upload-view"), $(".stu-d-12-upload-label"), $(".stu-d-12-error"), $(".stu-d-12"));
   
       e_p_show(this,0, $(".d-12-upload-view"), $(".stu-d-12-upload-label"), $(".stu-d-12-error"), $(".stu-d-12"),$(".stu-d-12-preview-btn"));
 });












//student photo and sign
    $("#stu-photo-upload").on("change", function () {
      
       
              $(".stu-photo-upload-view").attr("src","");
            $(".stu-photo-upload-label").html("No file chosen");
 $(".stu-photo-upload-label").css("border", "");
 $('#stu-photo-upload-label-error').html("");
            $("#stu-photo-upload-label-error").css("display", "none");
            
     
        var filename = (this.files[0].name);
        var file = this.files[0];
        var url = URL.createObjectURL(file);
        if (file.size <= (50 * 1024)) {
            $(".stu-photo-upload-label").html(filename);
            $(".stu-photo-upload-view").attr("src", url);
            $(".stu-photo-upload-view").attr("width", "60%");

        } else {
            $(".stu-photo-upload-label").css("border", "1px solid red");

            $("#stu-photo-upload-label-error").css("display", "block");
            $('#stu-photo-upload-label-error').html("Please upload photo less then 50kb");
        }

    });
    $("#stu-sign-upload").on("change", function () {
        $(".stu-sign-upload-label").html("No file chosen");
            $(".stu-sign-upload-view").attr("src", "");
            $(".stu-sign-upload-label").css("border", "");
            $("#stu-sign-upload-label-error").css("display", "none");
            $('#stu-sign-upload-label-error').html("");
      
         var filename = (this.files[0].name);
        var file = this.files[0];
        var url = URL.createObjectURL(file);
        if (file.size <= (50 * 1024)) {
            $(".stu-sign-upload-label").html(filename);
            $(".stu-sign-upload-view").attr("src", url);
            $(".stu-sign-upload-view").attr("width", "60%");

        } else {
            $(".stu-sign-upload-label").css("border", "1px solid red");
            $("#stu-sign-upload-label-error").css("display", "block");
            $('#stu-sign-upload-label-error').html("Please upload sign less then 50kb");
        }
    });


    function step3fieldval() {


        if ($(".stu-sign-upload-label").html() == "Upload Sign") {
            $(".stu-sign-upload-label").css("border", "1px solid red");
            $('#stu-sign-upload-label-error').css("display", "block");

        }
        $(".stu-sign-upload").click(function () {
            $(".stu-sign-upload-label").css("border", "");
            $('#stu-sign-upload-label-error').css("display", "none");
        });

        if ($(".stu-photo-upload-label").html() == "Upload Photo") {
            $(".stu-photo-upload-label").css("border", "1px solid red");
            $('#stu-photo-upload-label-error').css("display", "block");
        }
        $(".stu-photo-upload").click(function () {
            $(".stu-photo-upload-label").css("border", "");
            $('#stu-photo-upload-label-error').css("display", "none");
        });



    }

    $(" .Student-Photo-Sign-save").click(function () {
        step3fieldval();
    });
    $(".Student-Photo-Sign-save-next").click(function () {
        step3fieldval();
        if (
            ($(".stu-sign-upload-label").html() != "Upload Sign") && ($(".stu-photo-upload-label").html() != "Upload Photo")

        ) {
            document.getElementById("v-pills-step4-tab").click();
        }
    });
});







//  --date--
//$(document).ready(function () {
//
//    $("#stu_date").datepicker({
//                  dateFormat: 'dd/mm/yy',
//                        dayNames: ['Domingo', 'Lunes', 'Martes', 'MiÃ©rcoles', 'Jueves', 'Viernes', 'Sabado'],
//                        dayNamesMin: ['D', 'L', 'M', 'X', 'J', 'V', 'S'],
//                        dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
//                        firstDay: 1,
//                        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
//                        monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
//                        changeYear: true,
//                        changeMonth: true,
//        yearRange: '-100:+0',
//
//        showAnim: "fade",
//        changeMonth: true,
//        changeYear: true,
//        duration: 300,
//        dateFormat: 'yy-mm-dd'
//    });
//});
//v-pills-step1

//v-pills-step1
