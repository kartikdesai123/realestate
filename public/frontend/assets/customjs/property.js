var Property = function() {

    var mortgage_calculation = function() {
        $('.calculate').on('click', function(e) {
            e.preventDefault();
          
            var sale_price = $('.amount').val();
            var precent_down = $('.downPayment').val();
            var term_years = parseInt($('.loanyear').val(), 10);
            var interest_rate = parseFloat($('.rateofintrest').val(), 10) / 100;
            var show_intrest_in = $('.selectType').val();
            
            
            var interest_rate_month = interest_rate / 12;
            var interest_rate_bi_weekly = interest_rate / 26;
            var interest_rate_weekly = interest_rate / 52;

            var number_of_payments_month = term_years * 12;
            var number_of_payments_bi_weekly = term_years * 26;
            var number_of_payments_weekly = term_years * 52;

            var loan_amount = sale_price - precent_down;
            var monthly_payment = parseFloat((loan_amount * interest_rate_month) / (1 - Math.pow(1 + interest_rate_month, -number_of_payments_month))).toFixed(2);
            var bi_weekly_payment = parseFloat((loan_amount * interest_rate_bi_weekly) / (1 - Math.pow(1 + interest_rate_bi_weekly, -number_of_payments_bi_weekly))).toFixed(2);
            var weekly_payment = parseFloat((loan_amount * interest_rate_weekly) / (1 - Math.pow(1 + interest_rate_weekly, -number_of_payments_weekly))).toFixed(2);

            if (monthly_payment === 'NaN') {
                monthly_payment = 0;
            }
            if (bi_weekly_payment === 'NaN') {
                bi_weekly_payment = 0;
            }
            if (weekly_payment === 'NaN') {
                weekly_payment = 0;
            }
            var final = '';
            if(show_intrest_in == 'weekly'){
                final = weekly_payment;
            }else if(show_intrest_in == 'monthly'){
                final = monthly_payment;
            }else if(show_intrest_in == 'yearly'){
                final = term_years;
            }else{
                 final = loan_amount;
            }
            
            $('.finalAmount').val(final);
        });
    }
   
    var formvalidation = function(){

        jQuery.validator.addMethod("accept", function(value, element, param) {
            return value.match(new RegExp("." + param + "$"));
        });


        var form = $('#video-call-form');
        var rules = {
            date:{required: true},
            time:{required: true},
            name:{required: true,accept: "[a-zA-Z]+"},
            phone:{required: true,digits: true},
            message:{required: true},
            email: {required: true,email:true},
        };

        handleFormValidate(form, rules, function (form) {
            handleAjaxFormSubmit(form);
        });
    }
    return {
        calculation: function() {
            mortgage_calculation();
            $(".fancybox").fancybox();
        },
        mapint: function(){
            var uluru = {lat: parseFloat(lat), lng: parseFloat(lng)};
            // The map, centered at Uluru
            var map = new google.maps.Map(
                document.getElementById('mapInit'), {zoom: 4, center: uluru});
            // The marker, positioned at Uluru
            var marker = new google.maps.Marker({position: uluru, map: map});
        },    
        form:function(){
            formvalidation();
        }     
    }
}();
