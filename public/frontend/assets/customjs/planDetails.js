var PlanDetails  = function(){
    var plan = function(){
        $('body').on("click",".planBtn",function(){
            var planId = $(this).attr('plandetailId');
            var data = {"planId":planId,"action":"selectPlan"};
            $.ajax({
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val(),
                },
                url: baseurl + "plan-detail-ajaxAction",
                data: data,
                async: false,
                success: function (result) {
                    if(result == "U"){
                        window.location.href = baseurl + "user-register";
                    }

                    if(result == "AG"){
                        window.location.href = baseurl + "agent-register";

                    }
                    if(result == "AY"){
                        window.location.href = baseurl + "agency-register";
                    }

                    if(result == "CC"){
                        window.location.href = baseurl + "company-register";
                    }
                }
            })
        });
    };

    return{
        selectPlan:function(){
            plan();
        },
    }
}();