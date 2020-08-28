var Companylist = function(){
    var list =  function(){

        var dataArr = {};
        var columnWidth = {};
        var arrList = {
            'tableID': '#company-list',
            'ajaxURL': baseurl + "admin-company-list-ajaxAction",
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

    return{
        init:function(){
            list();
        },
    }
}();