var Reportedproperties = function(){
    var list = function(){
        var dataArr = {};
        var columnWidth = {};
        var arrList = {
            'tableID': '#reported-properties',
            'ajaxURL': baseurl + "admin-reported-property-ajaxAction",
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

        $('body').on('change', '.isactive', function () {
            var id = $(this).attr('data-id');
            var val = $(this).val();
            var data = {id: id,val:val, _token: $('#_token').val()};
            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val(),
                },
                url: baseurl + "admin-reported-property-ajaxAction",
                data: {'action': 'changestatus', 'data': data},
                success: function (data) {
                    handleAjaxResponse(data);
                }
            });
        });

    }
    return{
        init:function(){
            list();
        }
    }
}();