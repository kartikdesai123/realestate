var Blog = function(){
    var listBlog =  function(){

        var dataArr = {};
        var columnWidth = {};
        var arrList = {
            'tableID': '#blog',
            'ajaxURL': baseurl + "admin-blog-ajaxAction",
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


        $("body").on("click", ".deleteBlog", function () {
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
                url: baseurl + "admin-blog-ajaxAction",
                data: {'action': 'deleteBlog', 'data': data},
                success: function (data) {
                    handleAjaxResponse(data);
                }
            });
        });

    }
    var addBlog =  function(){
        CKEDITOR.replace('blogdescription');
        // CKEDITOR.disableAutoInline = true;
        // CKEDITOR.instances['blogdescription'].updateElement();
        
        var form = $('#add-blog');
        var rules = {
            blogtitle: {required: true},
            blogcategory: {required: true},
            authorname: {required: true},

        };
        var messages = {
            blogtitle: {
                required: "Please enter blog title",
            },
            blogcategory: {
                required: "Please select blog category name",
            },
            
            authorname: {
                required: "Please enter blog author name",
            },
        };
        handleFormValidateWithMsg(form, rules, messages, function (form) {
            for (instance in CKEDITOR.instances) {
                CKEDITOR.instances[instance].updateElement();
            }
            handleAjaxFormSubmit(form);
        });
    }
    var editBlog =  function(){
        CKEDITOR.replace('blogdescription');
        // CKEDITOR.disableAutoInline = true;
        // CKEDITOR.instances['blogdescription'].updateElement();

            var form = $('#edit-blog');
            var rules = {
                blogtitle: {required: true},
                blogcategory: {required: true},
                authorname: {required: true},

            };
            var messages = {
                blogtitle: {
                    required: "Please enter blog title",
                },
                blogcategory: {
                    required: "Please select blog category name",
                },
                
                authorname: {
                    required: "Please enter blog author name",
                },
            };
            handleFormValidateWithMsg(form, rules, messages, function (form) {
                for (instance in CKEDITOR.instances) {
                    CKEDITOR.instances[instance].updateElement();
                }
                handleAjaxFormSubmit(form);
            });
    }

    return{
        init:function(){
            listBlog();
        },
        add:function(){
            addBlog();
        },
        edit:function(){
            editBlog();
        },
    }
}();