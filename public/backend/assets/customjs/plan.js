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
    }

    var addPlan = function(){
        var form = $('#add-plan');
            var rules = {
                planname: {required: true},
                plandescription: {required: true},

            };
            var messages = {
                planname: {
                    required: "Please enter plan name",
                },
                plandescription: {
                    required: "Please enter plan description",
                },
            };
            handleFormValidateWithMsg(form, rules, messages, function (form) {
                handleAjaxFormSubmit(form);
            });
    }

    var editPlan = function(){
        var form = $('#edit-plan');
            var rules = {
                planname: {required: true},
                plandescription: {required: true},

            };
            var messages = {
                planname: {
                    required: "Please enter plan name",
                },
                plandescription: {
                    required: "Please enter plan description",
                },
            };
            handleFormValidateWithMsg(form, rules, messages, function (form) {
                handleAjaxFormSubmit(form);
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