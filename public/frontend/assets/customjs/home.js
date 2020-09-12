var Home = function() {

    var general = function() {
        $('.buldingType').on('change', function() {
            var value = $(this).val();

            if (value == 'project') {
                $('.buldingStatus').html('');
                var html = '<option value="">Please selete property type</option><option value="in_construction">In construction</option><option value="immediate_delivery">Immediate delivery</option><option value="on_plane">On plane</option>';
                $('.buldingStatus').html(html);
            } else {
                $('.buldingStatus').html('');
                var html = '<option value="">Please selete property type</option><option value="rent">For Rent</option><option value="sale">For Sale</option>';
                $('.buldingStatus').html(html);
            }

        });

        $('body').on('change', '.buldingStatus', function() {
            var value = $(this).val();

            if (value == 'rent') {
                $('.rentStatus').show();
            } else {
                $('.rentStatus').hide();
            }
        });
    }
    var map = function() {
        var places = new google.maps.places.Autocomplete(document.getElementById('txtaddress'));
        google.maps.event.addListener(places, 'place_changed', function() {
            var place = places.getPlace();
            var address = place.formatted_address;



            $(".txtPostalCode,.txtState,.txtCountry,.txtCity").removeAttr('readonly');
            $(".txtPostalCode,.txtState,.txtCountry,.txtCity").val('');
            for (var i = 0; i < place.address_components.length; i++) {
                for (var j = 0; j < place.address_components[i].types.length; j++) {

                    if (place.address_components[i].types[j] == "postal_code") {
                        $(".txtPostalCode").val(place.address_components[i].long_name);
                        $(".txtPostalCode").attr('readonly', 'readonly').focus();
                    }

                    if (place.address_components[i].types[j] == "administrative_area_level_1") {
                        $(".txtState").val(place.address_components[i].long_name);
                        $(".txtState").attr('readonly', 'readonly').focus();
                    }

                    if (place.address_components[i].types[j] == "country") {
                        $(".txtCountry").val(place.address_components[i].long_name);
                        $(".txtCountry").attr('readonly', 'readonly').focus();
                    }

                    if (place.address_components[i].types[j] == "locality") {
                        $(".txtCity").val(place.address_components[i].long_name);
                        $(".txtCity").attr('readonly', 'readonly').focus();

                    }
                }
            }

            var latitude = place.geometry.location.lat();
            var longitude = place.geometry.location.lng();
            if (latitude != '') {
                $(".latitude").val(latitude);
                $(".latitude").attr('readonly', 'readonly').focus();
            }
            if (longitude != '') {
                $(".longitude").val(longitude);
                $(".longitude").attr('readonly', 'readonly').focus();
            }

        });
    }
    return {
        init: function() {
            general();
            map();
                        if(data != ''){
                            var data1 = JSON.parse(data);
                        
//                            var numbers = new Bloodhound({
//                                datumTokenizer: function(d) { return Bloodhound.tokenizers.whitespace(d.num); },
//                                queryTokenizer: Bloodhound.tokenizers.whitespace,
//                                local: data1
//                            });
//            
//                            numbers.initialize();
                            var data1 = JSON.parse(data);
                            if(data1.length > 0){
                                $( "#autoComplate" ).autocomplete({
                                source: data1,
                             });
                            }
                        }
        }
    }
}();