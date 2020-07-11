var Plandetails = function(){
    var listPlanDetails = function(){
        var dataArr = {};
        var columnWidth = {};
        var arrList = {
            'tableID': '#plandetails',
            'ajaxURL': baseurl + "admin-plan-details-ajaxAction",
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

        $("body").on("click", ".deletePlandetails", function () {
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
                url: baseurl + "admin-plan-details-ajaxAction",
                data: {'action': 'deletePlandetails', 'data': data},
                success: function (data) {
                    handleAjaxResponse(data);
                }
            });
        });

    }

    var addPlanDetails = function(){
            var form = $('#add-plan-details');
            var rules = {
                plan: {required: true},
                planprice: {number: true},
                plandays: {number: true},
                planagent: {number: true},
                planproperty: {required: true,number: true},
                noOfVideo: {number: true},
                angleView: {required: true},

            };
            var messages = {
                plan: {
                    required: "Please select plan ",
                },
                planprice: {
                    number: "Please enter plan price in only number",
                },
                plandays: {
                    number: "Please enter plan days in only number",
                },
                planagent: {
                    number: "Please enter plan agent in only number",
                },
                noOfVideo: {
                    number: "Please enter no of video in only number",
                },
                angleView: {
                    required: "Please select plan allow 360 view allow or not",
                },
                planproperty: {
                    required: "Please enter plan property",
                    number: "Please enter plan property in only number"
                },
            };
            handleFormValidateWithMsg(form, rules, messages, function (form) {
                handleAjaxFormSubmit(form);
            });
    }
    var editPlanDetails = function(){
        var form = $('#edit-plan-details');
        var rules = {
            plan: {required: true},
            planprice: {number: true},
            plandays: {number: true},
            planagent: {number: true},
            planproperty: {required: true,number: true},
            noOfVideo: {number: true},
            angleView: {required: true},
        };
        var messages = {
            plan: {
                required: "Please select plan ",
            },
            planprice: {
                number: "Please enter plan price in only number",
            },
            plandays: {
                number: "Please enter plan days in only number",
            },
            planagent: {
                number: "Please enter plan agent in only number",
            },
            planproperty: {
                required: "Please enter plan property",
                number: "Please enter plan property in only number"
            },
            noOfVideo: {
                number: "Please enter no of video in only number",
            },
            angleView: {
                required: "Please select plan allow 360 view allow or not",
            },
        };
        handleFormValidateWithMsg(form, rules, messages, function (form) {
            handleAjaxFormSubmit(form);
        });
    }

    return {
        init:function(){
            listPlanDetails();
        },
        add:function(){
            addPlanDetails();
        },
        edit:function(){
            editPlanDetails();
        },
    }
}();