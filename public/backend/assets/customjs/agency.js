var Agency = function(){
    var list =  function(){

        var dataArr = {};
        var columnWidth = {};
        var arrList = {
            'tableID': '#angency-list',
            'ajaxURL': baseurl + "admin-agency-list-ajaxAction",
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

    var viewagent = function(){
        var id = $("#companyId").val();
        
        var dataArr = {"id":id};
        var columnWidth = {};
        var arrList = {
            'tableID': '#agent-list',
            'ajaxURL': baseurl + "admin-agency-list-ajaxAction",
            'ajaxAction': 'get_agent_datatable',
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
        view:function(){
            viewagent();
        },
    }
}();