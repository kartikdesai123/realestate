var Search = function() {

var mapInit = function(){
//    console.log(JSON.parse(data1));
    var locations = JSON.parse(data1);
//    var locations = [
//      ['Bondi Beach', -33.890542, 151.274856, 4],
//      ['Coogee Beach', -33.923036, 151.259052, 5],
//      ['Cronulla Beach', -34.028249, 151.157507, 3],
//      ['Manly Beach', -33.80010128657071, 151.28747820854187, 2],
//      ['Maroubra Beach', -33.950198, 151.259302, 1]
//    ];
    console.log(locations);
    var map = new google.maps.Map(document.getElementById('mapInit'), {
      zoom: 10,
      center: new google.maps.LatLng(locations[0][1],locations[0][2]),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;
    if(locations.length > 0){
         for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
    }
   
}
    return {
        
        mapint: function(){
            mapInit();
            
            
                 var data1 = JSON.parse(data);
                    console.log(data1);
        //            var data2 = [
        //            { city: 'abc' },
        //            { city: 'pqr' },
        //            { city: 'xyz' },
        //            { city: 'mnz' },
        //            { city: 'opq' }
        //          ];

        //          console.log(data2)
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
            
           
        },    
             
    }
}();
