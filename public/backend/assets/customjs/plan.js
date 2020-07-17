var Plan = function(){
   
    var listPlan = function(){
        
        var dataArr = {};
        var columnWidth = {};
        var arrList = {
            'tableID': '#plan',
            'ajaxURL': baseurl + "admin-plan-ajaxAction",
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
        
        
        $("body").on("click", ".deleteplan", function () {
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
                url: baseurl + "admin-plan-ajaxAction",
                data: {'action': 'deleteplan', 'data': data},
                success: function (data) {
                    handleAjaxResponse(data);
                }
            });
        });

    }

    var addPlan = function(){
            var form = $('#add-plan');
            var rules = {
                planname: {required: true},
                plandescription: {required: true},
                plan_icon: {required: true},
                planfor: {required: true},
                plan_bg_image: {required: true},

            };
            var messages = {
                planname: {
                    required: "Please enter plan name",
                },
                plandescription: {
                    required: "Please enter plan description",
                },
                plan_icon: {
                    required: "Please add plan icon",
                },
                planfor: {
                    required: "Please select plan user",
                },
                plan_bg_image: {
                    required: "Please add plan background image",
                },
            };
            handleFormValidateWithMsg(form, rules, messages, function (form) {
                handleAjaxFormSubmit(form,true);
            });
    }

    var editPlan = function(){
        var form = $('#edit-plan');
            var rules = {
                planname: {required: true},
                plandescription: {required: true},
                planfor: {required: true},                
            };
            var messages = {
                planname: {
                    required: "Please enter plan name",
                },
                plandescription: {
                    required: "Please enter plan description",
                },
                
                planfor: {
                    required: "Please select plan user",
                },
            };
            handleFormValidateWithMsg(form, rules, messages, function (form) {
                handleAjaxFormSubmit(form,true);
            });
    }

    return{
        init:function(){
            listPlan();
        },
        add:function(){
            addPlan();
        },
        edit:function(){
            editPlan();
        },
        
    }
}();