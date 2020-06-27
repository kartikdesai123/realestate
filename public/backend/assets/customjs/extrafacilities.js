var Extrafacilities = function (){
    var list = function (){
        var dataArr = {};
        var columnWidth = {};
        var arrList = {
            'tableID': '#extrafacilities',
            'ajaxURL': baseurl + "extrafacilities-ajaxAction",
            'ajaxAction': 'getdatatable',
            'postData': dataArr,
            'hideColumnList': [],
            'noSortingApply': [0],
            'noSearchApply': [0],
            'defaultSortColumn': [1],
            'defaultSortOrder': 'desc',
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
    var addextrafacilities = function (){
        var form = $('#add-facilities');
        var rules = {
            facilities: {required: true},

        };
        var messages = {
            facilities: {
                required: "Please enter facilities name",
            },
        };
        handleFormValidateWithMsg(form, rules, messages, function (form) {
            handleAjaxFormSubmit(form);
        });
    };
    var editextrafacilities = function (){
        
        var form = $('#edit-facilities');
        var rules = {
            facilities: {required: true},

        };
        var messages = {
            facilities: {
                required: "Please enter facilities name",
            },
        };
        handleFormValidateWithMsg(form, rules, messages, function (form) {
            handleAjaxFormSubmit(form);
        });
    };
    return {
        init : function (){
            list();
        },
        add : function (){
            addextrafacilities();
        },
        edit : function (){
            editextrafacilities();
        },
    }
}();
