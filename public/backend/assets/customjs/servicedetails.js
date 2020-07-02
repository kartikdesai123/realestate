var Servicedetails = function(){

    var details = function(){

        CKEDITOR.replace('service_details');
        
        var form = $('#add-edit-servicedetails');
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
    return{
        init:function(){
            details();
        },
    }
}();