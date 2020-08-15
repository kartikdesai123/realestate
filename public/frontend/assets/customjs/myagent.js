var Myagent = function(){
    var list = function(){
        var dataArr = {};
        var columnWidth = {};
        var arrList = {
            'tableID': '#agent-list',
            'ajaxURL': baseurl + "login-ajaxaction",
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
    var addAgent = function(){
        var form = $('#add-my-agent');

        var rules = {
            agentusername: {required: true},
            agentemail: {required: true,email:true},
            agentpassword: {required: true,},
            agentcpassword: {required: true,equalTo: "#agentpassword"},
            agentphoneno: {required: true,},
            agentabout: {required: true,},
        };

        var messages = {
            agentusername: {
                required: "Please enter agent's username",
            },
            agentemail: {
                required: "Please enter agent's email",
                email: "Please enter vaild email",
            },
            agentpassword: {
                required: "Please enter agent's password",
            },
            agentcpassword: {
                required: "Please enter agent's confirm password",
                equalTo: "Confirm password and password must be same",
            },
            agentphoneno: {
                required: "Please enter agent's phone no",
            },
            agentabout: {
                required: "Please enter about agent",
            },
        };
        handleFormValidateWithMsg(form, rules, messages, function (form) {
            handleAjaxFormSubmit(form,true);
        });     
    };
    return{
        init:function(){
            list();
        },
        add:function(){
            addAgent();
        },
    }
}();