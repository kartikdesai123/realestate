var Register = function(){
    var registeruses = function(){

            var form = $('#user-register');
            var rules = {
                username: {required: true},
                email: {required: true,email:true},
                password: {required: true,},
                cpassword: {required: true,equalTo: "#password"},
                phoneno: {required: true,},
            };
            var messages = {
                username: {
                    required: "Please enter your username",
                },
                email: {
                    required: "Please enter your email",
                    email: "Please enter vaild email",
                },
                password: {
                    required: "Please enter your password",
                },
                cpassword: {
                    required: "Please enter your confirm password",
                    equalTo: "Confirm password and password must be same",
                },
                phoneno: {
                    required: "Please enter your phone no",
                },
            };
            handleFormValidateWithMsg(form, rules, messages, function (form) {
                handleAjaxFormSubmit(form,true);
            });
    }
    return{
        init:function(){
            registeruses();
        }
    }
}();