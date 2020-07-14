var Home = function() {

    var general = function() {
        $('.buldingType').on('change', function() {
            var value = $(this).val();
            
            if(value == 'project'){
                $('.buldingStatus').html('');
                var html = '<option>In construction</option><option>Immediate delivery</option><option>On plane</option>';
                $('.buldingStatus').html(html);
            }else{
                $('.buldingStatus').html('');
                var html = '<option>For Rent</option><option>For Sale</option>';
                $('.buldingStatus').html(html);
            }

        });
    }

    return {
        init: function() {
            general();
        }
    }
}();
