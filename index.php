
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRkL1fDBzAKC-_6YKi1GcZXFVUzj0tzLM&libraries=places"></script>


</head>
<body>

<form action="googleGetDistance.php" method="POST">

<label for="lbl">Move</label>
    <input class="form-control rounded-0" id="fromToinput" name="fromToinput" placeholder="Enter Adress">
    <label for="lbl">To</label>
    <input class="form-control rounded-0" id="moveToinput" name="moveToinput" placeholder="Enter Adress To">
    <input type="submit" value="Submit">

</form>
    
</body>



<script>
	function initialize() {
		var input = document.getElementById('fromToinput');
		var input2 = document.getElementById('moveToinput');

		var options = {
			fields: ["address_components", "geometry", "icon", "name"],
			componentRestrictions: {country: "tr"}
		};

		var autocomplete = new google.maps.places.Autocomplete(input,options);
		var autocomplete = new google.maps.places.Autocomplete(input2,options);

		google.maps.event.addListener(autocomplete, 'place_changed', function () {
			var place = autocomplete.getPlace();
			document.getElementById('city2').value = place.name;
			document.getElementById('cityLat').value = place.geometry.location.lat();
			document.getElementById('cityLng').value = place.geometry.location.lng();
		});

		google.maps.event.addListener(autocomplete, 'place_changed', function () {
			var place = autocomplete.getPlace();
			document.getElementById('moveToCity').value = place.name;
			document.getElementById('moveToCityLat').value = place.geometry.location.lat();
			document.getElementById('moveToLng').value = place.geometry.location.lng();
		});
	}
	google.maps.event.addDomListener(window, 'load', initialize);
</script>

</html>