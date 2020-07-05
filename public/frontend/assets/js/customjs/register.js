var Register = function(){
    var registeruses = function(){
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
            handleFormValidateWithMsg(form, rules, messages, function (form) {
                handleAjaxFormSubmit(form,true);
            });

             // Agent User register 

             var form = $('#agent-register');
            var rules = {
                agentusername: {required: true},
                agentemail: {required: true,email:true},
                agentpassword: {required: true,},
                agentcpassword: {required: true,equalTo: "#agentpassword"},
                agentphoneno: {required: true,},
                agentabout: {required: true,},
            };

            var messages = {
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
                agentabout: {
                    required: "Please enter about agent",
                },
            };
            handleFormValidateWithMsg(form, rules, messages, function (form) {
                handleAjaxFormSubmit(form,true);
            });


            // Agency User register 

            var form = $('#agency-register');
            var rules = {
                agencyusername: {required: true},
                agencyemail: {required: true,email:true},
                agencypassword: {required: true,},
                agencycpassword: {required: true,equalTo: "#agencypassword"},
                agencyphoneno: {required: true,},
                agencyabout: {required: true,},
            };

            var messages = {
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
                agencyabout: {
                    required: "Please enter about agency",
                },
            };
            handleFormValidateWithMsg(form, rules, messages, function (form) {
                handleAjaxFormSubmit(form,true);
            });
            // Company User register 

            var form = $('#company-register');
            var rules = {
                companyusername: {required: true},
                companyemail: {required: true,email:true},
                companypassword: {required: true,},
                companycpassword: {required: true,equalTo: "#companypassword"},
                companyphoneno: {required: true,},
                companyabout: {required: true,},
            };

            var messages = {
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
                companyabout: {
                    required: "Please enter about company",
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