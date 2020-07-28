var Homecity = function (){
    var listHome = function (){
        var dataArr = {};
        var columnWidth = {};
        var arrList = {
            'tableID': '#home-city',
            'ajaxURL': baseurl + "admin-home-ajaxAction",
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
       
    };

    var editHome = function(){
        var form = $('#update-home');
        var rules = {
            home_image: {required: true},
            

        };
        var messages = {
            home_image: {
                required: "Please enter file",
            },
            
        };
        handleFormValidateWithMsg(form, rules, messages, function (form) {
            handleAjaxFormSubmit(form,true);
        });
    };
    return {
        init : function (){
            listHome();
        },
        edit : function (){
            editHome();
        },
    }
}();
