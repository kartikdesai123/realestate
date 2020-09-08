var Search = function() {

var mapInit = function(){
    
    var locations = JSON.parse(data1);
    if(locations.length > 0){
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
          var images = locations[i][3].split(",");
//          if(images.lengeth > 0){
              var content = "<img height='50' width='80' src=" + baseurl+'/public/upload/property_photo/'+images[0] + "><img width='80' height='50' src=" + baseurl+'/public/upload/property_photo/'+images[1] + ">" + locations[i][0];
//          }else{
//              var content = "<img width='80' src=" + baseurl+'/public/upload/property_photo/'+images[0] + "> " + locations[i][0]; 
//          }
          infowindow.setContent(content);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
    }
    }
}

var search = function(){
    $('.searchClick').click(function(){
        var val = $('#autoComplate').val();
        if(val != ''){
            var value = val.toLowerCase();
            window.location.href = baseurl + 'search/' + value;
        }
    });
}
    return {
        
        mapint: function(){
            mapInit();
            search();
            var data1 = JSON.parse(data);
            if(data1.length > 0){
                $( "#autoComplate" ).autocomplete({
                source: data1,
             });
            }
             
        },    
             
    }
}();
