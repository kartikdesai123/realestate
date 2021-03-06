var PropertyDetails = function() {
    var addpropertyDetails = function() {

        }
        //    return{
        //        add:function(){
        //            addpropertyDetails();
        //            
        //        },
        //    }
    return {
        //main function to initiate the module
        init: function() {
            if (!jQuery().bootstrapWizard) {
                return;
            }

            var form = $('#submit_form');
            var error = $('.alert-danger', form);
            var success = $('.alert-success', form);

            form.validate({
                doNotHideMessage: true, //this option enables to show the error/success messages on tab switch.
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                rules: {
                    //account
                    propertyTitle: {
                        required: true
                    },
                    offer: {
                        required: true
                    },
                    type: {
                        required: true
                    },
                    price: {
                        required: true
                    },
                    area: {
                        required: true
                    },
                    rooms: {
                        required: true
                    },
                    map_address: {
                        required: true
                    },
                    friendly_address: {
                        required: true
                    },
                    longitude: {
                        required: true
                    },
                    latitiude: {
                        required: true
                    },
                    regions: {
                        required: true
                    },


                },

                errorPlacement: function(error, element) { // render error placement for each input type
                    return true;
                },

                invalidHandler: function(event, validator) { //display error alert on form submit   
                    success.hide();
                    error.show();
                    // App.scrollTo(error, -200);
                },

                highlight: function(element) { // hightlight error inputs
                    var elem = $(element);
                    if (elem.hasClass("basic-select")) {
                        $(element).next(".select2-container").removeClass('has-success').addClass('has-error');
                    }
                    $(element)
                        .closest('.form-control').removeClass('has-success').addClass('has-error'); // set error class to the control group
                },

                unhighlight: function(element) { // revert the change done by hightlight
                  
                    $(element)
                        .closest('.form-control').removeClass('has-error'); // set error class to the control group
                },

                success: function(label) {
                    
                    if (label.attr("for") == "gender" || label.attr("for") == "payment[]") { // for checkboxes and radio buttons, no need to show OK icon
                        label
                            .closest('.form-control').removeClass('has-error').addClass('has-success');
                        label.remove(); // remove error label here
                    } else { // display success icon for other inputs
                        label
                            .addClass('valid') // mark the current input as valid and display OK icon
                            .closest('.form-control').removeClass('has-error').addClass('has-success'); // set success class to the control group
                        label
                            .addClass('valid') // mark the current input as valid and display OK icon
                            .closest('.select2-container').removeClass('has-error').addClass('has-success'); // set success class to the control group
                    }
                },

                submitHandler: function(form) {
                    success.show();
                    error.hide();
                    form[0].submit();
                    //add here some ajax code to submit your form or just call form.submit() if you want to submit the form without ajax
                }

            });

            var displayConfirm = function() {
                $('#tab6 .form-control-static', form).each(function() {
                    var input = $('[name="' + $(this).attr("data-display") + '"]', form);
                    if (input.is(":radio")) {
                        input = $('[name="' + $(this).attr("data-display") + '"]:checked', form);
                    }
                    if (input.is(":text") || input.is("textarea")) {
                        $(this).html(input.val());
                    } else if (input.is("select")) {
                        $(this).html(input.find('option:selected').text());
                    }
                });
            }

            var handleTitle = function(tab, navigation, index) {
                var total = navigation.find('li').length;
                var current = index + 1;
                // set wizard title
                $('.step-title', $('#form_wizard_1')).text('Step ' + (index + 1) + ' of ' + total);
                // set done steps
                jQuery('li', $('#form_wizard_1')).removeClass("done");
                var li_list = navigation.find('li');
                for (var i = 0; i < index; i++) {
                    jQuery(li_list[i]).addClass("done");
                }

                if (current == 1) {
                    $('#form_wizard_1').find('.button-previous').hide();
                } else {
                    $('#form_wizard_1').find('.button-previous').show();
                }

                if (current >= total) {
                    $('#form_wizard_1').find('.button-next').hide();
                    $('#form_wizard_1').find('.button-submit').show();
                    displayConfirm();
                } else {
                    $('#form_wizard_1').find('.button-next').show();
                    $('#form_wizard_1').find('.button-submit').hide();
                }
                //                App.scrollTo($('.page-title'));
            }

            // default form wizard
            $('#form_wizard_1').bootstrapWizard({
                'nextSelector': '.button-next',
                'previousSelector': '.button-previous',
                onTabClick: function(tab, navigation, index, clickedIndex) {
                    return false;

                    success.hide();
                    error.hide();
                    if (form.valid() == false) {
                        return false;
                    }

                    handleTitle(tab, navigation, clickedIndex);
                },
                onNext: function(tab, navigation, index) {
                    success.hide();
                    error.hide();

                    if (form.valid() == false) {
                        return false;
                    }

                    handleTitle(tab, navigation, index);
                },
                onPrevious: function(tab, navigation, index) {
                    success.hide();
                    error.hide();

                    handleTitle(tab, navigation, index);
                },
                onTabShow: function(tab, navigation, index) {
                    var total = navigation.find('li').length;
                    var current = index + 1;
                    var $percent = (current / total) * 100;
                    $('#form_wizard_1').find('.progress-bar').css({
                        width: $percent + '%'
                    });
                }
            });

            $('#form_wizard_1').find('.button-previous').hide();
            $('#form_wizard_1 .button-submit').click(function() {
                alert('Finished! Hope you like it :)');
            }).hide();

            //apply validation on select2 dropdown value change, this only needed for chosen dropdown integration.
            //            $('#country_list', form).change(function () {
            //                form.validate().element($(this)); //revalidate the chosen dropdown value and show error or success message for the input
            //            });
        }

    };
}();