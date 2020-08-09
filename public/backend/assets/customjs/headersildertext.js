var Headersildertext = function(){

    var textaddedit = function(){
        var form = $('#add-slider-text');
            var rules = {
                    text: {required: true},
            };
           
            var messages = {
                text: {
                        required: "Please enter your slider text"}
            };
            handleFormValidateWithMsg(form, rules, messages, function (form) {
                for (instance in CKEDITOR.instances) {
                    CKEDITOR.instances[instance].updateElement();
                }
                handleAjaxFormSubmit(form);
            });
    }
    return{
        init:function(){
            textaddedit();
        }
    }
}();