var PropertyDetails = function() {


    return {

        //main function to initiate the module
        init: function() {  
            var i = 0;
            $('body').on("click", ".removeFloorPlan", function() {
                $(".addFloorPlan").removeAttr("disabled","disabled");
                $(this).closest('.removediv').remove();
                i--;
            });

            $('body').on("click", ".addFloorPlan", function() {
                
                if(i == 0){
                    $(".addFloorPlan").attr("disabled","disabled")
                    $html = '<div class="removediv">' +
                        '<div style="text-align: right">' +
                        '<button type="button" class="btn btn-danger btn-sm removeFloorPlan">Remove floor plan</button>' +
                        '</div>' +
                        '<div class="form-row">' +
                        '<div class="form-group col-md-6">' +
                        '<label>Browser file</label>' +
                        '<div class="custom-file">' +
                        '<input type="file" class="custom-file-input" id="customFile" name="file2" >' +
                        '<label class="custom-file-label" for="customFile">Choose file</label>' +
                        '</div>' +
                        '</div>' +
                        '<div class="form-group col-md-6">' +
                        '<label>Floorplan Title </label>' +
                        '<input type="text" class="form-control" placeholder="Awesome family home" name="floortitle2">' +
                        '</div>' +
                        '<div class="form-group col-md-12">' +
                        '<label>Area</label>' +
                        '<input class="form-control" placeholder="Type (sq ft)" name="area2">' +
                        '</div>' +
                        '<div class="form-group col-md-12">' +
                        '<label>Description</label>' +
                        '<textarea class="form-control" rows="4" placeholder="Description" name="description2"></textarea>' +
                        '</div>' +
                        '</div>' +
                        '</div>';
                    $(".appenddiv").append($html);

                    i++;
                }else{
                    
                }
                
            });
            getMap();
            if (!jQuery().bootstrapWizard) {
                return;
            }
            $('select', form).change(function () {
                
                if(form.validate().element($(this))){
                    $(this).next('span').removeClass('has-error');
                }else{
                    $(this).next('span').addClass('has-error');
                }
            });
            
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
                    propertyTitle: { required: true },
                    offer: { required: true },
                    type: { required: true },
                    price: { required: true },
                    area: { required: true },
                    about_property: { required: true },
                    txtaddress: { required: true },
                    friendly: { required: true },
                    txtCity: { required: true },
                    txtState: { required: true },
                    txtCountry: { required: true },
                    txtPostalCode: { required: true },
                    latitude: { required: true },
                    longitude: { required: true },
                    buliding_age: { required: true },
                    bedrooms: { required: true },
                    bathrooms: { required: true },
                    parking: { required: true },
                    cooling: { required: true },
                    heating: { required: true },
                    sewer: { required: true },
                    water: { required: true },

                    exercise_room: { required: true },
                    'facilites[]': { required: true },
                    
                    file: { required: true },
                    floortitle: { required: true },
                    floorarea: { required: true },

                    file2: { required: true },
                    floortitle2: { required: true },
                    floorarea2: { required: true },


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
                $( "#submit_form" ).submit();
            }).hide();

            //apply validation on select2 dropdown value change, this only needed for chosen dropdown integration.
            //            $('#country_list', form).change(function () {
            //                form.validate().element($(this)); //revalidate the chosen dropdown value and show error or success message for the input
            //            });
        }

    };
}();