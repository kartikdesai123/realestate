var Home = function() {

    var general = function() {
        $('.buldingType').on('change', function() {
            var value = $(this).val();
            
            if(value == 'project'){
                $('.buldingStatus').html('');
                var html = '<option value="">Please selete property type</option><option value="in_construction">In construction</option><option value="immediate_delivery">Immediate delivery</option><option value="on_plane">On plane</option>';
                $('.buldingStatus').html(html);
            }else{
                $('.buldingStatus').html('');
                var html = '<option value="">Please selete property type</option><option value="rent">For Rent</option><option value="sale">For Sale</option>';
                $('.buldingStatus').html(html);
            }

        });
        
        $('body').on('change','.buldingStatus',function(){
            var value = $(this).val();
           
            if(value == 'rent'){
                $('.rentStatus').show();
            }else{
                $('.rentStatus').hide();
            }
        });
    }

    return {
        init: function() {
            general();
            if(data != ''){
                var data1 = JSON.parse(data);
            
                var numbers = new Bloodhound({
                    datumTokenizer: function(d) { return Bloodhound.tokenizers.whitespace(d.num); },
                    queryTokenizer: Bloodhound.tokenizers.whitespace,
                    local: data1
                });

                numbers.initialize();
                $('#autoComplate').typeahead(null, {
                  displayKey: 'city',
                  source: numbers.ttAdapter()
                });
            }
           
        }
    }
}();
