var Aboutus = function (){
    var addeditAboutus = function (){
        CKEDITOR.replace('about_us');
        
        var form = $('#add-edit-about-us');
        var rules = {
           
            

        };
        var messages = {
           
            
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
            addeditAboutus();
        },
    }
}();
