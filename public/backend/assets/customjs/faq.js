var Faq = function (){
    var listFaq = function (){
        var dataArr = {};
        var columnWidth = {};
        var arrList = {
            'tableID': '#faqs',
            'ajaxURL': baseurl + "admin-faq-ajaxAction",
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
        
        
        $("body").on("click", ".deletefaqs", function () {
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
                url: baseurl + "admin-faq-ajaxAction",
                data: {'action': 'deletefaqs', 'data': data},
                success: function (data) {
                    handleAjaxResponse(data);
                }
            });
        });
    };

    var addFaq = function(){
        var form = $('#add-faqs');
        var rules = {
            question: {required: true},
            answer: {required: true},

        };
        var messages = {
            question: {
                required: "Please enter faqs question",
            },
            answer: {
                required: "Please enter faqs answer",
            },
        };
        handleFormValidateWithMsg(form, rules, messages, function (form) {
            handleAjaxFormSubmit(form);
        });
    };
    var editFaq = function(){
        var form = $('#add-faqs');
        var rules = {
            question: {required: true},
            answer: {required: true},

        };
        var messages = {
            question: {
                required: "Please enter faqs question",
            },
            answer: {
                required: "Please enter faqs answer",
            },
        };
        handleFormValidateWithMsg(form, rules, messages, function (form) {
            handleAjaxFormSubmit(form);
        });
    };
    return {
        init : function (){
            listFaq();
        },
        add : function (){
            addFaq();
        },
        edit : function (){
            editFaq();
        },
    }
}();
