var Blogcategory = function (){
    var list = function (){

        var dataArr = {};
        var columnWidth = {};
        var arrList = {
            'tableID': '#blog-category',
            'ajaxURL': baseurl + "blog-category-ajaxAction",
            'ajaxAction': 'getdatatable',
            'postData': dataArr,
            'hideColumnList': [],
            'noSortingApply': [0],
            'noSearchApply': [0],
            'defaultSortColumn': [0],
            'defaultSortOrder': 'DESC',
            'setColumnWidth': columnWidth
        };
        getDataTable(arrList);


        $("body").on("click", ".deletefacilities", function () {
            var id = $(this).data('id');
            setTimeout(function () {
                $('.yes-sure:visible').attr('data-id', id);
            }, 500);
        })

        $('body').on('click', '.yes-sure', function () {
            var id = $(this).attr('data-id');
            var data = {id: id, _token: $('#_token').val()};
            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val(),
                },
                url: baseurl + "extrafacilities-ajaxAction",
                data: {'action': 'deletefacilities', 'data': data},
                success: function (data) {
                    handleAjaxResponse(data);
                }
            });
        });
    };
    var addcategory = function(){

        $('body').on("click",".addcategory",function(){
            var html='<div class=" removediv">'+
                        '<div class="form-group ">'+
                        '<div class="col-md-2">'+
                        '</div>'+
                        '<div class="col-md-8">'+
                        '<input name="category[]" type="text" class="form-control category">'+ 
                        '<span></span>'+               
                        '</div>'+
                        '<div class="col-md-2">'+                                    
                        '<button type="button" class="btn btn-danger removecategory">Remove Category</button>'+
                        '</div>'+                                
                        '</div>'+
                        '</div>';
            $(".addcategorydiv").append(html);
        });

        $('body').on("click", ".removecategory", function () {
            $(this).closest('.removediv').remove();
        });

        var validateTrip = true;
        var customValid = true;
        $('#add-blog-category').validate({
            debug: true,
            rules: {
                
            },
            messages: {
               
            },
            invalidHandler: function (event, validator) {
                validateTrip = false;
                customValid = customerInfoValid();

            },
            submitHandler: function (form) {

                customValid = customerInfoValid();
                if (customValid)
                {
                    var options = {
                        resetForm: false, // reset the form after successful submit
                        success: function (output) {
                            handleAjaxResponse(output);
                        }
                    };
                    $(form).ajaxSubmit(options);
                }
            }
        });
        function customerInfoValid() {
            var customValid = true;
            $('.category').each(function () {
                if ($(this).is(':visible')) {
                    if ($(this).val() == '') {
                        $(this).addClass('has-error');
                        $(this).next('span').text('Please enter blog category');
                        $(this).next('span').addClass('error');
                        customValid = false;
                    } else {
                        $(this).removeClass('has-error');
                        $(this).removeClass('error');
                        $(this).next('span').text('');
                    }
                }
            });
            return customValid;
        }
    }
    var editcategory = function(){
        
        var form = $('#edit-category');
        var rules = {
            category: {required: true},

        };
        var messages = {
            category: {
                required: "Please enter category name",
            },
        };
        handleFormValidateWithMsg(form, rules, messages, function (form) {
            handleAjaxFormSubmit(form);
        });
    }
    return {
        init : function (){
            list();
        },
        add:function(){
            addcategory();
        },
        edit:function(){
            editcategory();
        }
    }
}();
