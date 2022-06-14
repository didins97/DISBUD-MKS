<script>
    var longi = parseFloat(document.getElementById('longi').value);
   var lati = parseFloat(document.getElementById('lati').value);
   function initMap(){
       var options = {
           zoom:15,
           center:{lat:lati, lng:longi}
       }

       var map = new google.maps.Map(document.getElementById('map'), options);
       var marker = new google.maps.Marker({position:{lat:lati, lng:longi},
           map:map
       });
   }
</script>
<script async
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGUpLdZTvUV1QQV871blPvgCmTjfk3lQU&callback=initMap">
</script>