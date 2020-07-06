var Myprofile = function(){
    var updateProfile =  function(){
        var form = $('#edit-profile');
        var rules = {
            username:{required: true},
            phoneno:{required: true},
            aboutme:{required: true},
            email: {required: true,email:true},
        };

        var messages = {
            username:{
                required: "Please enter your user name",
            },
            aboutme:{
                required: "Please enter about you details",
            },
            email: {
                required: "Please enter your email",
                email: "Please enter vaild email",
            },
            phoneno: {
                required: "Please enter your phone number",
            },
        };
        handleFormValidateWithMsg(form, rules, messages, function (form) {
            handleAjaxFormSubmit(form,true);
        });
    }
    var password =  function(){
        var form = $('#edit-password');
        var rules = {
            oldpassword:{required: true},
            newpassword:{required: true},
            cnewpassword:{required: true,equalTo: "#newpassword"},
        };

        var messages = {
            oldpassword:{
                required: "Please enter your old password",
            },
            newpassword:{
                required: "Please enter your new password",
            },
            
            cnewpassword: {
                required: "Please enter your confirm new password",
            },
        };
        handleFormValidateWithMsg(form, rules, messages, function (form) {
            handleAjaxFormSubmit(form,true);
        });
    }
    return{
        init:function(){
            updateProfile();
        },
        changepassword:function(){
            password();
        },
    }
}();