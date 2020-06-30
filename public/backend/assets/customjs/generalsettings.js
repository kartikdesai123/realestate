var Generalsettings = function (){
    var add = function (){
            
            var form = $('#add-genaral-setting');
            var rules = {
                    facebook: {required: true,url: true},
                    youTube: {required: true,url: true},
                    instagram: {required: true,url: true},
                    twitter: {required: true,url: true},
                    linkedin: {required: true,url: true},
                    address: {required: true},
                    contactNumber: {required: true},
                    email: {required: true,email:true},
            };
           
            var messages = {
                    facebook: {
                        required: "Please enter your facebook url",
                        url: "Please enter vaild your facebook url"},
                    youTube: {
                        required: "Please enter your youtube url",
                        url: "Please enter vaild your youTube url"},
                    instagram: {
                        required: "Please enter your instagram url" ,
                        url: "Please enter vaild your instagram url"},
                    twitter: {
                        required: "Please enter your twitter url",
                        url: "Please enter vaild your twitter url"},
                    linkedin: {
                        required: "Please enter your linkedin url",
                        url: "Please enter vaild your linkedin url"},
                    address: {
                        required: "Please enter your address",
                    },
                    contactNumber: {
                        required: "Please enter your contact number",
                    },
                    email: {
                        required: "Please enter your contact email",
                        email:"Please enter vaild your contact email",
                    }, 
            };
            handleFormValidateWithMsg(form, rules, messages, function (form) {
                for (instance in CKEDITOR.instances) {
                    CKEDITOR.instances[instance].updateElement();
                }
                handleAjaxFormSubmit(form);
            });
    };
    return {
        init : function (){
            add();
        },
    }
}();
