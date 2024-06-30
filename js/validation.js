$(function(){
    $("form[name='reg']").validate({
        rules:{
            name:{
                required:true,
                namechk:true
            },
            email:{
                required:true,
                emailchk:true
            },
            pass:{
                required:true,
                minlength:8,
                maxlength:75,
                capital:true,
                simple:true,
                digits:true,
                special:true
            },
            cpass:{
                required:true,
                equalTo: '#pass'
            }
        },
        messages:{
            name:{
                required:"<img src='img/caution.png' heigth='16px' width='16px'>"+"Please enter your name",
                namechk:"<img src='img/caution.png' heigth='16px' width='16px'>"+"Invalid name"
            },
            email:{
                required:"<img src='img/caution.png' heigth='16px' width='16px'>"+"Please enter your email",
                emailchk:"<img src='img/caution.png' heigth='16px' width='16px'>"+"Invalid email"
            },
            pass:{
                required:"<img src='img/caution.png' heigth='16px' width='16px'>"+"Please enter your pass",
                minlength:"<img src='img/caution.png' heigth='16px' width='16px'>"+"Minimum length not achieved",
                maxlength:"<img src='img/caution.png' heigth='16px' width='16px'>"+"Minimum length not achieved",
                capital:"<img src='img/caution.png' heigth='16px' width='16px'>"+"Please use capital letters",
                simple:"<img src='img/caution.png' heigth='16px' width='16px'>"+"Please use simple letters",
                digits:"<img src='img/caution.png' heigth='16px' width='16px'>"+"Please use digits",
                special:"<img src='img/caution.png' heigth='16px' width='16px'>"+"Please use special characters"
            },
            cpass:{
                required:"<img src='img/caution.png' heigth='16px' width='16px'>"+"Please enter the same pass",
                equalTo:"<img src='img/caution.png' heigth='16px' width='16px'>"+"Passwords do not match"
            }
    }
    });
    $.validator.addMethod("namechk", function(){
        var Regex = /^[A-Z\sa-z]{3,75}$/;
        if($('#name').val().match(Regex)){
            return true;
        }else{
            return false;
        }
    });
    $.validator.addMethod("emailchk", function(){
        var Regex = /^([A-Za-z0-9#$%^&*_-]+)(@gmail\.com)$/;
        if($('#email').val().match(Regex)){
            return true;
        }else{
            return false;
        }
    });
    $.validator.addMethod("capital", function(){
        var Regex = /[A-Z]+/;
        if($('#pass').val().match(Regex)){
            return true;
        }else{
            return false;
        }
    });
    $.validator.addMethod("simple", function(){
        var Regex = /[a-z]+/;
        if($('#pass').val().match(Regex)){
            return true;
        }else{
            return false;
        }
    }); 
    $.validator.addMethod("digits", function(){
        var Regex = /[0-9]+/;
        if($('#pass').val().match(Regex)){
            return true;
        }else{
            return false;
        }
    });   
    $.validator.addMethod("special", function(){
        var Regex = /[`~!@#$%^&*_+=|;:,.?]+/;
        if($('#pass').val().match(Regex)){
            return true;
        }else{
            return false;
        }
    });
});