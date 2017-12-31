
   
      var searchBtn = $("#searchBtn");
      var btn = $("#button");
      var ul = $("ul");

      //defalt lat
      var lat = 40.0821;
      //defalt lng
      var lng = -74.2097;
      
     
     $(searchBtn).click(
         function(){
            var searchInput = $("#searchInput").val();
        
            $.getJSON("http://api.geonames.org/wikipediaSearch?q=" + searchInput + "&maxRows=10&username=rafaelg&type=json&callback=?", 
               function(data){
                $(ul).empty();
                   $.each(data.geonames , function(index, place){
                      
                       $("<li class='list-group-item'>"+ place.title + "<button id="+ index +" class='btn btn-success'> Find Map Location</button></li>").appendTo(ul).find("button").click(
                        function(){

                            lat = place.lat;
                            lng = place.lng;
                            initMap();
               
                        }
                       )

                      
                   })
               }
        
        
            )
         }
         
     );

     function initMap(){
        var options = {
            zoom:13,
            center:{
                lat: lat,
                lng: lng
            }
        }
        // New Map
        var map = new google.maps.Map(document.getElementById('map'), options);

        //New Marker
        var marker = new google.maps.Marker({
            position:{
                lat:lat,
                lng:lng
            },map:map
        })



    }
