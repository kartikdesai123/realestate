var Register = function(){
    
    var registeruses = function(){

        $('.username').change(function(){
            var value = $(this).val();
            var extra3 = $('.extra3').val();
            var finalVal = extra3 +'-'+ value;
            $('.extra3').val(finalVal);
        });

        $('#email').change(function(){
            $('.buyerEmail').val($(this).val());
        });
        
        $('#phoneNo').change(function(){
            $('.phone').val($(this).val());
        });
        
        $('.password').change(function(){
            $('.passwords').val($(this).val());
        });
        
            // Normal User register 
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
            validateForm(form,rules,messages);
//            handleFormValidateWithMsg(form, rules, messages, function (form) {
//                handleAjaxFormSubmit(form,true);
//            });

             // Agent User register 

            var agentform = $('#agent-register');
            var agentrules = {
                agentusername: {required: true},
                agentemail: {required: true,email:true},
                agentpassword: {required: true,},
                agentcpassword: {required: true,equalTo: "#agentpassword"},
                agentphoneno: {required: true,},
                // agentabout: {required: true,},
            };

            var agentmessages = {
                agentusername: {
                    required: "Please enter agent's username",
                },
                agentemail: {
                    required: "Please enter agent's email",
                    email: "Please enter vaild email",
                },
                agentpassword: {
                    required: "Please enter agent's password",
                },
                agentcpassword: {
                    required: "Please enter agent's confirm password",
                    equalTo: "Confirm password and password must be same",
                },
                agentphoneno: {
                    required: "Please enter agent's phone no",
                },
                // agentabout: {
                //     required: "Please enter about agent",
                // },
            };
//            handleFormValidateWithMsg(form, rules, messages, function (form) {
//                handleAjaxFormSubmit(form,true);
//            });
              validateForm(agentform,agentrules,agentmessages);  

            // Agency User register 

        var agencyform = $('#agency-register');
        var agencyrules = {
            agencyusername: {required: true},
            agencyemail: {required: true, email: true},
            agencypassword: {required: true, },
            agencycpassword: {required: true, equalTo: "#agencypassword"},
            agencyphoneno: {required: true, },
            // agencyabout: {required: true, },
        };

        var agencymessages = {
            agencyusername: {
                required: "Please enter agency's username",
            },
            agencyemail: {
                required: "Please enter agency's email",
                email: "Please enter vaild email",
            },
            agencypassword: {
                required: "Please enter agency's password",
            },
            agencycpassword: {
                required: "Please enter agency's confirm password",
                equalTo: "Confirm password and password must be same",
            },
            agencyphoneno: {
                required: "Please enter agency's phone no",
            },
            // agencyabout: {
            //     required: "Please enter about agency",
            // },
        };

        validateForm(agencyform,agencyrules,agencymessages);
//            handleFormValidateWithMsg(form, rules, messages, function (form) {
//                handleAjaxFormSubmit(form,true);
//            });
            // Company User register 

            var companyform = $('#company-register');
            var companyrules = {
                companyusername: {required: true},
                companyemail: {required: true,email:true},
                companypassword: {required: true,},
                companycpassword: {required: true,equalTo: "#companypassword"},
                companyphoneno: {required: true,},
                // companyabout: {required: true,},
            };

            var companymessages = {
                companyusername: {
                    required: "Please enter company's name",
                },
                companyemail: {
                    required: "Please enter company's email",
                    email: "Please enter vaild email",
                },
                companypassword: {
                    required: "Please enter company's password",
                },
                companycpassword: {
                    required: "Please enter company's confirm password",
                    equalTo: "Confirm password and password must be same",
                },
                companyphoneno: {
                    required: "Please enter company's phone no",
                },
                // companyabout: {
                //     required: "Please enter about company",
                // },
            };
    
            validateForm(companyform,companyrules,companymessages);
//            handleFormValidateWithMsg(form, rules, messages, function (form) {
//                handleAjaxFormSubmit(form,true);
//            });
               
    }
    
    function validateForm(form,rules,messages){
         var error = $('.alert-danger', form);
        var success = $('.alert-success', form);
            
        form.validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: ":hidden",
            rules: rules,
            invalidHandler: function(event, validator) { //display error alert on form submit
                success.hide();
                error.show();
            },
            showErrors: function(errorMap, errorList) {
                if (typeof errorList[0] != "undefined") {
                    var position = $(errorList[0].element).offset().top - 70;
                    $('html, body').animate({
                        scrollTop: position
                    }, 300);
                }
                this.defaultShowErrors(); // keep error messages next to each input element
            },
            highlight: function(element) { // hightlight error inputs
                $(element)
                        .closest('.c-input, .form-control').addClass('has-error'); // set error class to the control group

                $(element).parent().parent().find('.select2').addClass('has-error');

            },
            unhighlight: function(element) { // revert the change done by hightlight
                $(element)
                        .closest('.c-input, .form-control').removeClass('has-error'); // set error class to the control group
            },
            success: function(label) {
                label
                        .closest('.c-input, .form-control').removeClass('has-error'); // set success class to the control group
            },
            errorPlacement: function(error, element) {
                return true;
            },
            messages: messages,
        });
    }
    
    return{
        init:function(){
            registeruses();
        }
    }
}();