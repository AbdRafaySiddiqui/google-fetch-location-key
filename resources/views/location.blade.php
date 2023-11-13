<center><h1>Fetch location By Google Map API Key!</h1></center>
<center>
<form action="">
    <label for="Search Location">Search Location: </label>
    <input type="text" name="search_input" id="search_input">
    <input type="submit" class="next_btn next_page" value="fetch details.">
</form>
</center>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places&sensor=false&key=(your key here)"></script>
    <script type="text/javascript">
        google.maps.event.addDomListener(window, 'load', function () {
            var places = new google.maps.places.Autocomplete(document.getElementById('search_input'));
            google.maps.event.addListener(places, 'place_changed', function () {
                var place = places.getPlace();
                var address = place.formatted_address;
                var latitude = place.geometry.location.lat();
                var longitude = place.geometry.location.lng();
                var latlng = new google.maps.LatLng(latitude, longitude);
                var geocoder = geocoder = new google.maps.Geocoder();
                geocoder.geocode({ 'latLng': latlng }, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[0]) {
                            var address = results[0].formatted_address;
                            var pin = results[0].address_components[results[0].address_components.length - 1].long_name;
                            var country = results[0].address_components[results[0].address_components.length - 2].long_name;
                            var state = results[0].address_components[results[0].address_components.length - 3].long_name;
                            var city = results[0].address_components[results[0].address_components.length - 4].long_name;

                            console.log(latitude)
                            console.log(longitude)
                            console.log(address)

                            document.getElementById('search_input').value = address;
                            document.getElementById('latitude').value = latitude;
                            document.getElementById('longitude').value = longitude;

                        }
                    }
                });
            });


        });
    </script>


    <script type="text/javascript">
        google.maps.event.addDomListener(window, 'load', function () {
            var places = new google.maps.places.Autocomplete(document.getElementById('search_input2'));
            google.maps.event.addListener(places, 'place_changed', function () {
                var place = places.getPlace();
                var address = place.formatted_address;
                var latitude = place.geometry.location.lat();
                var longitude = place.geometry.location.lng();


                var latlng = new google.maps.LatLng(latitude, longitude);
                var geocoder = geocoder = new google.maps.Geocoder();
                geocoder.geocode({ 'latLng': latlng }, function (results, status) {


                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[0]) {
                            var address = results[0].formatted_address;
                            var pin = results[0].address_components[results[0].address_components.length - 1].long_name;
                            var country = results[0].address_components[results[0].address_components.length - 2].long_name;
                            var state = results[0].address_components[results[0].address_components.length - 3].long_name;
                            var city = results[0].address_components[results[0].address_components.length - 4].long_name;

                            console.log(latitude)
                            console.log(longitude)
                            console.log(address)

                            document.getElementById('search_input2').value = address;
                            document.getElementById('latitude2').value = latitude;
                            document.getElementById('longitude2').value = longitude;

                        }
                    }
                });
            });


        });
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=(your key here)"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>