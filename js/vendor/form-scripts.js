$("#contactForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Did you fill in the form properly?");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});

$("#contactForm2").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError2();
        submitMSG2(false, "Did you fill in the form properly?");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm2();
    }
});

$("#contactForm3").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError3();
        submitMSG3(false, "Did you fill in the form properly?");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm3();
    }
});


function submitForm(){
    // alert("We are here");
    // Initiate Variables With Form Content
    var name = $("#p_name").val();
    var email = $("#p_email").val();
    var phone = $("#p_phone").val();
    var subject = $("#p_subject").val();
    var city = $("#p_city").val();
    var message = $("#p_message").val();

    $.ajax({
        type: "POST",
        url: "php/form-process.php",
        data: "name=" + name + "&email=" + email + "&subject=" + subject + "&phone=" + phone + "&city=" + city + "&message=" + message,
        success : function(text){
            if (text == "success"){
                formSuccess();
            } else {
                formError();
                submitMSG(false,text);
            }
        }
    });
}

function submitForm2(){
    // alert("We are here");
    // Initiate Variables With Form Content
    var name = $("#p_name2").val();
    var email = $("#p_email2").val();
    var phone = $("#p_phone2").val();
    var subject = $("#p_subject2").val();
    var city = $("#p_city2").val();
    var message = $("#p_message2").val();

    $.ajax({
        type: "POST",
        url: "php/form-process.php",
        data: "name=" + name + "&email=" + email + "&subject=" + subject + "&phone=" + phone + "&city=" + city + "&message=" + message,
        success : function(text){
            if (text == "success"){
                formSuccess2();
            } else {
                formError2();
                submitMSG2(false,text);
            }
        }
    });
}

function submitForm3(){
    // alert("We are here");
    // Initiate Variables With Form Content
    var name = $("#p_name3").val();
    var email = $("#p_email3").val();
    var phone = $("#p_phone3").val();
    var subject = $("#p_subject3").val();
    var city = $("#p_city3").val();
    var message = $("#p_message3").val();

    $.ajax({
        type: "POST",
        url: "php/form-process.php",
        data: "name=" + name + "&email=" + email + "&subject=" + subject + "&phone=" + phone + "&city=" + city + "&message=" + message,
        success : function(text){
            if (text == "success"){
                formSuccess3();
            } else {
                formError3();
                submitMSG3(false,text);
            }
        }
    });
}

function formSuccess(){
    $("#contactForm")[0].reset();
    submitMSG(true, "Message Submitted!")
}

function formError(){
    $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}

function formSuccess2(){
    $("#contactForm2")[0].reset();
    submitMSG2(true, "Message Submitted!")
}

function formError2(){
    $("#contactForm2").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}

function formSuccess3(){
    $("#contactForm3")[0].reset();
    submitMSG3(true, "Message Submitted!")
}

function formError3(){
    $("#contactForm3").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}

function submitMSG(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#success").removeClass().addClass(msgClasses).text(msg);
}

function submitMSG2(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#success2").removeClass().addClass(msgClasses).text(msg);
}

function submitMSG3(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#success3").removeClass().addClass(msgClasses).text(msg);
}

