var loginStart,
    emailStart,
    passwordStart;

$(document).ready(function(){
    var reglogin = $("#reglogin");
    var regemail = $("#regemail");
    var regpassword = $("#regpassword");
    //Логин
    reglogin.blur(function () {
    var inplogin = reglogin.val();
    var explRegLogin = /^[a-zA-Z0-9_]+$/g;
    var resRegLogin = inplogin.search(explRegLogin);
    if(resRegLogin == -1){
        reglogin.next().hide().text("Неверный логин").css({'color': 'red'}).fadeIn(400);
        reglogin.removeClass().addClass("inputRed");
        loginStart = 0;
        buttonOnAndOff();
    }
    else {
        $.ajax({
            type: "POST",
            data: "reglogin=" + inplogin,
            url: "\save_user_ajax.php",
            error: funcError,
            beforeSend: funcBefore,
            success: funcSuccess
        });
    }
    reglogin.mousedown(function(){
        reglogin.removeClass();
        reglogin.next().text("");
    });
    });
    //Email
    regemail.blur(function () {
        var inpemail = regemail.val();
        var expemail = /[-0-9a-z_]+@[-0-9a-z_]+\.[a-z]{2,6}/i;
        var resemail = inpemail.search(expemail);
        if(resemail == -1){
            
        }
        else{

        }
    });
    //Пароль
    regpassword.blur(function () {

    });
}); //конец ready

function funcSuccess(data) {
    var reglogin = $("#reglogin");
    if (data == "no") {
        reglogin.next().hide().text("Указанный логин уже занят").css({'color': 'red'}).fadeIn(400);
        reglogin.removeClass().addClass("inputRed");
        loginStart = 0;
        buttonOnAndOff();
    } else {
        reglogin.next().text("");
        reglogin.removeClass().addClass("inputGreen");
        loginStart = 1;
        buttonOnAndOff();
    }
}

function funcError() {
    alert("Запрос к серверу завершился неудачей!");
}

function funcBefore() {
    $("#reglogin").next().text("Проверка ...").css({'color': 'black'});
}

function buttonOnAndOff() {
    if(loginStart == 1 && emailStart == 1 && passwordStart == 1){
        $("#regsubmit").removeAttr("disabled");
    }
}