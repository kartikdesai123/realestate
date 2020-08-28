var Imageslider = function (){
    var list = function (){
        var dataArr = {};
        var columnWidth = {};
        var arrList = {
            'tableID': '#slider-image',
            'ajaxURL': baseurl + "admin-slider-image-ajaxAction",
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


        $("body").on("click", ".deleteImage", function () {
            var id = $(this).data('id');
            var image = $(this).data('image');
            setTimeout(function () {
                $('.yes-sure:visible').attr('data-id', id);
                $('.yes-sure:visible').attr('data-image', image);
            }, 500);
        })

        $('body').on('click', '.yes-sure', function () {
            var id = $(this).attr('data-id');
            var image = $(this).attr('data-image');
            var data = {id: id,image:image , _token: $('#_token').val()};
            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val(),
                },
                url: baseurl + "admin-slider-image-ajaxAction",
                data: {'action': 'deleteImage', 'data': data},
                success: function (data) {
                    handleAjaxResponse(data);
                }
            });
        });
    };

    var addImage = function(){
        var form = $('#add-facilities');
        var rules = {
            image: {required: true},

        };
        var messages = {
            image: {
                required: "Please select image",
            },
        };
        handleFormValidateWithMsg(form, rules, messages, function (form) {
            handleAjaxFormSubmit(form,true);
        });
    }
    return {
        init : function (){
            list();
        },
        add : function (){
            addImage();
        },
    }
}();
