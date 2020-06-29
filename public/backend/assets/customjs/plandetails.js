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
    }

    var addPlanDetails = function(){
            var form = $('#add-plan-details');
            var rules = {
                plan: {required: true},
                planprice: {number: true},
                plandays: {number: true},
                planagent: {number: true},
                planproperty: {required: true,number: true},

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