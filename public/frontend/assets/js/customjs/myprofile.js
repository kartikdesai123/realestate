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

        jQuery.validator.addMethod("notEqualToGroup", function (value, element, options) {
            // get all the elements passed here with the same class
            var elems = $(element).parents('form').find(options[0]);
            // the value of the current element
            var valueToCompare = value;
            // count
            var matchesFound = 0;
            // loop each element and compare its value with the current value
            // and increase the count every time we find one
            jQuery.each(elems, function () {
                thisVal = $(this).val();
                if (thisVal == valueToCompare) {
                    matchesFound++;
                }
            });
            // count should be either 0 or 1 max
            if (this.optional(element) || matchesFound <= 1) {
                //elems.removeClass('error');
                return true;
            } else {
                //elems.addClass('error');
            }
        });


        var form = $('#edit-password');
        var rules = {
            oldpassword:{required: true},
            newpassword:{required: true,notEqualToGroup: ['.password']},
            cnewpassword:{required: true,equalTo: "#newpassword"},
        };

        var messages = {
            oldpassword:{
                required: "Please enter your old password",
            },
            newpassword:{
                required: "Please enter your new password",
                notEqualToGroup : "Old password and new passwords must be different",
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