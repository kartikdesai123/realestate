var Login = function(){
    var loginvalidation = function(){
        // Normal User register 
        var form = $('#login-form');
        var rules = {
           
            email: {required: true,email:true},
            password: {required: true,}
        };

        var messages = {
            
            email: {
                required: "Please enter your email",
                email: "Please enter vaild email",
            },
            password: {
                required: "Please enter your password",
            },
        };
        handleFormValidateWithMsg(form, rules, messages, function (form) {
            handleAjaxFormSubmit(form);
        });
    };
    return{
        init:function(){
            loginvalidation();
        },
    }
}();