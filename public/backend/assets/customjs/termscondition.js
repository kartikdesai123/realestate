var Termscondition = function (){
    var addeditterms = function (){
        CKEDITOR.replace('terms_conditions');
        
        var form = $('#add-edit-terms');
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
            addeditterms();
        },
    }
}();
