var Services = function(){
    var listServices = function(){
        var dataArr = {};
        var columnWidth = {};
        var arrList = {
            'tableID': '#services',
            'ajaxURL': baseurl + "admin-services-ajaxAction",
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
        
        
        $("body").on("click", ".deleteservices", function () {
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
                url: baseurl + "admin-services-ajaxAction",
                data: {'action': 'deleteservices', 'data': data},
                success: function (data) {
                    handleAjaxResponse(data);
                }
            });
        });
    };
    var addServices = function(){
        var form = $('#add-services');
        var rules = {
            serviceName: {required: true},
            serviceImage: {required: true},
            servicesdescription: {required: true},
        };
        var messages = {
            serviceName: {
                required: "Please enter service name",
            },
            serviceImage: {
                required: "Please add service image",
            },
            servicesdescription: {
                required: "Please enter serivces description",
            },
        };
        handleFormValidateWithMsg(form, rules, messages, function (form) {            
            handleAjaxFormSubmit(form,true);
        });
    };
    var editServices = function(){
        var form = $('#add-services');
        var rules = {
            serviceName: {required: true},
            servicesdescription: {required: true},
        };
        var messages = {
            serviceName: {
                required: "Please enter service name",
            },
            servicesdescription: {
                required: "Please enter serivces description",
            },
        };
        handleFormValidateWithMsg(form, rules, messages, function (form) {            
            handleAjaxFormSubmit(form,true);
        });
    };
    return {
        init:function(){
            listServices();
        },
        add:function(){
            addServices();
        },
        edit:function(){
            editServices();
        },
    }
}();