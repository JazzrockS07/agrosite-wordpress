<?php
/*
 * Template name: map
 */
?>

<!DOCTYPE html>
<html>
<head>
	<title>Simple Polygon</title>
	<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
	<script
			src="https://maps.googleapis.com/maps/api/js?key&callback=initMap&libraries=&v=weekly"
			defer
	></script>
	<style type="text/css">
		/* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
		#map {
			height: 100%;
		}

		/* Optional: Makes the sample page fill the window. */
		html,
		body {
			height: 100%;
			margin: 0;
			padding: 0;
		}
	</style>
	<script>
		"use strict";

		// This example creates a simple polygon representing the Bermuda Triangle.
		function initMap() {
			const map = new google.maps.Map(document.getElementById("map"), {
				zoom: 10,
				center: {
					lat: 42.163,
					lng: -70.956
				},
				mapTypeId: "terrain"
			}); // Define the LatLng coordinates for the polygon's path.


			const bostonCoords = [
				{
					lat: 42.360046,
					lng: -71.167548
				},
				{
					lat: 42.374036,
					lng: -71.130647
				},
				{
					lat: 42.367938,
					lng: -71.118024
				},
				{
					lat: 42.355740,
					lng: -71.117053
				},
				{
					lat: 42.371884,
					lng: -71.066557
				},
				{
					lat: 42.380851,
					lng: -71.080638
				},
				{
					lat: 42.390534,
					lng: -71.074811
				},
				{
					lat: 42.383720,
					lng: -71.027229
				},
				{
					lat: 42.399498,
					lng: -71.001010
				},
				{
					lat: 42.388024,
					lng: -70.987901
				},
				{
					lat: 42.369014,
					lng: -71.008779
				},
				{
					lat: 42.355381,
					lng: -70.958769
				},
				{
					lat: 42.325953,
					lng: -70.923811
				},
				{
					lat: 42.318055,
					lng: -70.926724
				},
				{
					lat: 42.309438,
					lng: -70.954885
				},
				{
					lat: 42.307284,
					lng: -71.045679
				},
				{
					lat: 42.287891,
					lng: -71.037911
				},
				{
					lat: 42.276499,
					lng: -71.042817
				},
				{
					lat: 42.277475,
					lng: -71.050422
				},
				{
					lat: 42.275569,
					lng: -71.055057
				},
				{
					lat: 42.271886,
					lng: -71.052310
				},
				{
					lat: 42.267059,
					lng: -71.062782
				},
				{
					lat: 42.271378,
					lng: -71.068103
				},
				{
					lat: 42.258801,
					lng: -71.113422
				},
				{
					lat: 42.248128,
					lng: -71.108959
				},
				{
					lat: 42.239487,
					lng: -71.125953
				},
				{
					lat: 42.235674,
					lng: -71.123035
				},
				{
					lat: 42.227794,
					lng: -71.130931
				},
				{
					lat: 42.282503,
					lng: -71.190368
				},
				{
					lat: 42.303693,
					lng: -71.164635
				},
				{
					lat: 42.295434,
					lng: -71.152011
				},
				{
					lat: 42.344617,
					lng: -71.105400
				},
				{
					lat: 42.352152,
					lng: -71.122393
				},
				{
					lat: 42.330619,
					lng: -71.157352
				},
				{
					lat: 42.350358,
					lng: -71.174831
				}
			]; // Construct the polygon.

			const bostonTriangle = new google.maps.Polygon({
				paths: bostonCoords,
				strokeColor: "#FF0000",
				strokeOpacity: 0.8,
				strokeWeight: 2,
				fillColor: "#FF0000",
				fillOpacity: 0.35
			});
			bostonTriangle.setMap(map);
			const marshfieldCoords = [
				{
					lat: 42.157432,
					lng: -70.781947
				},
				{
					lat: 42.154405,
					lng: -70.768269
				},
				{
					lat: 42.157583,
					lng: -70.762145
				},
				{
					lat: 42.164544,
					lng: -70.753163
				},
				{
					lat: 42.161252,
					lng: -70.742614
				},
				{
					lat: 42.164851,
					lng: -70.719551
				},
				{
					lat: 42.125251,
					lng: -70.682893
				},
				{
					lat: 42.126331,
					lng: -70.680223
				},
				{
					lat: 42.092496,
					lng: -70.643504
				},
				{
					lat: 42.082814,
					lng: -70.638011
				},
				{
					lat: 42.075679,
					lng: -70.648310
				},
				{
					lat: 42.060642,
					lng: -70.646937
				},
				{
					lat: 42.059368,
					lng: -70.655177
				},
				{
					lat: 42.071602,
					lng: -70.652087
				},
				{
					lat: 42.057583,
					lng: -70.682643
				},
				{
					lat: 42.097450,
					lng: -70.749755
				},
				{
					lat: 42.117063,
					lng: -70.776706
				}
			]; // Construct the polygon.

			const marshfieldTriangle = new google.maps.Polygon({
				paths: marshfieldCoords,
				strokeColor: "#FF0000",
				strokeOpacity: 0.8,
				strokeWeight: 2,
				fillColor: "#FF0000",
				fillOpacity: 0.35
			});
			marshfieldTriangle.setMap(map);
			const duxburyCoords = [
				{
					lat: 42.097450,
					lng: -70.749755
				},
				{
					lat: 42.057583,
					lng: -70.682643
				},
				{
					lat: 42.071602,
					lng: -70.652087
				},
				{
					lat: 42.059368,
					lng: -70.655177
				},
				{
					lat: 42.060642,
					lng: -70.646937
				},
				{
					lat: 42.014059,
					lng: -70.609453
				},
				{
					lat: 42.015863,
					lng: -70.646596
				},
				{
					lat: 42.005401,
					lng: -70.678884
				},
				{
					lat: 42.003597,
					lng: -70.711172
				},
				{
					lat: 42.003303,
					lng: -70.711593
				},
				{
					lat: 42.003777,
					lng: -70.723067
				},
				{
					lat: 42.017667,
					lng: -70.731321
				},
				{
					lat: 42.022510,
					lng: -70.770183
				},
				{
					lat: 42.034496,
					lng: -70.759712
				},
				{
					lat: 42.044823,
					lng: -70.767608
				},
				{
					lat: 42.046735,
					lng: -70.780998
				}
			]; // Construct the polygon.

			const duxburyTriangle = new google.maps.Polygon({
				paths: duxburyCoords,
				strokeColor: "#FF0000",
				strokeOpacity: 0.8,
				strokeWeight: 2,
				fillColor: "#FF0000",
				fillOpacity: 0.35
			});
			duxburyTriangle.setMap(map);
			const cohassetCoords = [
				{
					lat: 42.260246,
					lng: -70.844452
				},
				{
					lat: 42.264092,
					lng: -70.836080
				},
				{
					lat: 42.264626,
					lng: -70.817315
				},
				{
					lat: 42.262703,
					lng: -70.798261
				},
				{
					lat: 42.248494,
					lng: -70.784259
				},
				{
					lat: 42.239304,
					lng: -70.789455
				},
				{
					lat: 42.239517,
					lng: -70.783970
				},
				{
					lat: 42.236311,
					lng: -70.782093
				},
				{
					lat: 42.233212,
					lng: -70.788300
				},
				{
					lat: 42.225516,
					lng: -70.786280
				},
				{
					lat: 42.200807,
					lng: -70.827134
				},
				{
					lat: 42.212830,
					lng: -70.840641
				},
				{
					lat: 42.239706,
					lng: -70.853629
				},
				{
					lat: 42.243480,
					lng: -70.841491
				},
				{
					lat: 42.244828,
					lng: -70.841369
				},
				{
					lat: 42.247433,
					lng: -70.849259
				}
			]; // Construct the polygon.

			const cohassetTriangle = new google.maps.Polygon({
				paths: cohassetCoords,
				strokeColor: "#FF0000",
				strokeOpacity: 0.8,
				strokeWeight: 2,
				fillColor: "#FF0000",
				fillOpacity: 0.35
			});
			cohassetTriangle.setMap(map);
			const scituateCoords = [
				{
					lat: 42.233212,
					lng: -70.788300
				},
				{
					lat: 42.236311,
					lng: -70.782093
				},
				{
					lat: 42.239517,
					lng: -70.783970
				},
				{
					lat: 42.239304,
					lng: -70.789455
				},
				{
					lat: 42.258172,
					lng: -70.767861
				},
				{
					lat: 42.203706,
					lng: -70.714453
				},
				{
					lat: 42.162871,
					lng: -70.705228
				},
				{
					lat: 42.126331,
					lng: -70.680223
				},
				{
					lat: 42.125251,
					lng: -70.682893
				},
				{
					lat: 42.164851,
					lng: -70.719551
				},
				{
					lat: 42.161252,
					lng: -70.742614
				},
				{
					lat: 42.164544,
					lng: -70.753163
				},
				{
					lat: 42.184212,
					lng: -70.779089
				},
				{
					lat: 42.194951,
					lng: -70.813384
				},
				{
					lat: 42.194043,
					lng: -70.839515
				},
				{
					lat: 42.200807,
					lng: -70.827134
				},
				{
					lat: 42.225516,
					lng: -70.786280
				}
			]; // Construct the polygon.

			const scituateTriangle = new google.maps.Polygon({
				paths: scituateCoords,
				strokeColor: "#FF0000",
				strokeOpacity: 0.8,
				strokeWeight: 2,
				fillColor: "#FF0000",
				fillOpacity: 0.35
			});
			scituateTriangle.setMap(map);
			const hanoverCoords = [
				{
					lat: 42.151307,
					lng: -70.899919
				},
				{
					lat: 42.153951,
					lng: -70.884221
				},
				{
					lat: 42.158340,
					lng: -70.847272
				},
				{
					lat: 42.133063,
					lng: -70.833390
				},
				{
					lat: 42.132850,
					lng: -70.819238
				},
				{
					lat: 42.111332,
					lng: -70.803657
				},
				{
					lat: 42.104201,
					lng: -70.811897
				},
				{
					lat: 42.094903,
					lng: -70.842281
				},
				{
					lat: 42.088788,
					lng: -70.862497
				},
				{
					lat: 42.087769,
					lng: -70.887902
				},
				{
					lat: 42.119610,
					lng: -70.889791
				}
			]; // Construct the polygon.

			const hanoverTriangle = new google.maps.Polygon({
				paths: hanoverCoords,
				strokeColor: "#FF0000",
				strokeOpacity: 0.8,
				strokeWeight: 2,
				fillColor: "#FF0000",
				fillOpacity: 0.35
			});
			hanoverTriangle.setMap(map);
			const pembrokeCoords = [
				{
					lat: 42.094903,
					lng: -70.842281
				},
				{
					lat: 42.104201,
					lng: -70.811897
				},
				{
					lat: 42.111332,
					lng: -70.803657
				},
				{
					lat: 42.109295,
					lng: -70.800567
				},
				{
					lat: 42.112351,
					lng: -70.799194
				},
				{
					lat: 42.108276,
					lng: -70.794216
				},
				{
					lat: 42.117063,
					lng: -70.776706
				},
				{
					lat: 42.097450,
					lng: -70.749755
				},
				{
					lat: 42.046735,
					lng: -70.780998
				},
				{
					lat: 42.044823,
					lng: -70.767608
				},
				{
					lat: 42.034496,
					lng: -70.759712
				},
				{
					lat: 42.022510,
					lng: -70.770183
				},
				{
					lat: 42.020597,
					lng: -70.797134
				},
				{
					lat: 42.016389,
					lng: -70.800567
				},
				{
					lat: 42.024295,
					lng: -70.814987
				},
				{
					lat: 42.019705,
					lng: -70.833354
				},
				{
					lat: 42.054766,
					lng: -70.846229
				},
				{
					lat: 42.058589,
					lng: -70.838847
				}
			]; // Construct the polygon.

			const pembrokeTriangle = new google.maps.Polygon({
				paths: pembrokeCoords,
				strokeColor: "#FF0000",
				strokeOpacity: 0.8,
				strokeWeight: 2,
				fillColor: "#FF0000",
				fillOpacity: 0.35
			});
			pembrokeTriangle.setMap(map);
			const norwellCoords = [
				{
					lat: 42.173168,
					lng: -70.887283
				},
				{
					lat: 42.194043,
					lng: -70.839515
				},
				{
					lat: 42.194951,
					lng: -70.813384
				},
				{
					lat: 42.184212,
					lng: -70.779089
				},
				{
					lat: 42.164544,
					lng: -70.753163
				},
				{
					lat: 42.157583,
					lng: -70.762145
				},
				{
					lat: 42.154405,
					lng: -70.768269
				},
				{
					lat: 42.157432,
					lng: -70.781947
				},
				{
					lat: 42.117063,
					lng: -70.776706
				},
				{
					lat: 42.108276,
					lng: -70.794216
				},
				{
					lat: 42.112351,
					lng: -70.799194
				},
				{
					lat: 42.109295,
					lng: -70.800567
				},
				{
					lat: 42.111332,
					lng: -70.803657
				},
				{
					lat: 42.132850,
					lng: -70.819238
				},
				{
					lat: 42.133063,
					lng: -70.833390
				},
				{
					lat: 42.158340,
					lng: -70.847272
				},
				{
					lat: 42.153951,
					lng: -70.884221
				},
				{
					lat: 42.167570,
					lng: -70.889121
				}
			]; // Construct the polygon.

			const norwellTriangle = new google.maps.Polygon({
				paths: norwellCoords,
				strokeColor: "#FF0000",
				strokeOpacity: 0.8,
				strokeWeight: 2,
				fillColor: "#FF0000",
				fillOpacity: 0.35
			});
			norwellTriangle.setMap(map);
			const miltonCoords = [
				{
					lat: 42.258801,
					lng: -71.113422
				},
				{
					lat: 42.271378,
					lng: -71.068103
				},
				{
					lat: 42.267059,
					lng: -71.062782
				},
				{
					lat: 42.271886,
					lng: -71.052310
				},
				{
					lat: 42.275569,
					lng: -71.055057
				},
				{
					lat: 42.277475,
					lng: -71.050422
				},
				{
					lat: 42.276499,
					lng: -71.042817
				},
				{
					lat: 42.267158,
					lng: -71.042088
				},
				{
					lat: 42.259432,
					lng: -71.031649
				},
				{
					lat: 42.242361,
					lng: -71.061024
				},
				{
					lat: 42.229420,
					lng: -71.053256
				},
				{
					lat: 42.214139,
					lng: -71.093069
				},
				{
					lat: 42.204608,
					lng: -71.082630
				},
				{
					lat: 42.200967,
					lng: -71.102607
				},
				{
					lat: 42.227794,
					lng: -71.130931
				},
				{
					lat: 42.235674,
					lng: -71.123035
				},
				{
					lat: 42.239487,
					lng: -71.125953
				},
				{
					lat: 42.248128,
					lng: -71.108959
				}
			]; // Construct the polygon.

			const miltonTriangle = new google.maps.Polygon({
				paths: miltonCoords,
				strokeColor: "#FF0000",
				strokeOpacity: 0.8,
				strokeWeight: 2,
				fillColor: "#FF0000",
				fillOpacity: 0.35
			});
			miltonTriangle.setMap(map);
			const braintreeCoords = [
				{
					lat: 42.227982,
					lng: -71.032732
				},
				{
					lat: 42.238227,
					lng: -70.972041
				},
				{
					lat: 42.234518,
					lng: -70.961783
				},
				{
					lat: 42.226892,
					lng: -70.962641
				},
				{
					lat: 42.223206,
					lng: -70.967276
				},
				{
					lat: 42.168393,
					lng: -70.976546
				},
				{
					lat: 42.168647,
					lng: -71.021521
				},
				{
					lat: 42.187348,
					lng: -71.019633
				},
				{
					lat: 42.194851,
					lng: -71.046240
				},
				{
					lat: 42.205700,
					lng: -71.049469
				},
				{
					lat: 42.206407,
					lng: -71.045244
				},
				{
					lat: 42.215397,
					lng: -71.044870
				}
			]; // Construct the polygon.

			const braintreeTriangle = new google.maps.Polygon({
				paths: braintreeCoords,
				strokeColor: "#FF0000",
				strokeOpacity: 0.8,
				strokeWeight: 2,
				fillColor: "#FF0000",
				fillOpacity: 0.35
			});
			braintreeTriangle.setMap(map);
			const kingstoneCoords = [
				{
					lat: 42.020597,
					lng: -70.797134
				},
				{
					lat: 42.022510,
					lng: -70.770183
				},
				{
					lat: 42.017667,
					lng: -70.731321
				},
				{
					lat: 42.003777,
					lng: -70.723067
				},
				{
					lat: 42.003303,
					lng: -70.711593
				},
				{
					lat: 42.000497,
					lng: -70.706271
				},
				{
					lat: 41.997690,
					lng: -70.700091
				},
				{
					lat: 41.983528,
					lng: -70.693225
				},
				{
					lat: 41.933488,
					lng: -70.753650
				},
				{
					lat: 41.967193,
					lng: -70.764979
				},
				{
					lat: 41.978934,
					lng: -70.787467
				},
				{
					lat: 42.016389,
					lng: -70.800567
				}
			]; // Construct the polygon.

			const kingstoneTriangle = new google.maps.Polygon({
				paths: kingstoneCoords,
				strokeColor: "#FF0000",
				strokeOpacity: 0.8,
				strokeWeight: 2,
				fillColor: "#FF0000",
				fillOpacity: 0.35
			});
			kingstoneTriangle.setMap(map);
			const quincyCoords = [
				{
					lat: 42.300923,
					lng: -71.039287
				},
				{
					lat: 42.308644,
					lng: -70.989277
				},
				{
					lat: 42.280630,
					lng: -70.954561
				},
				{
					lat: 42.274703,
					lng: -70.949706
				},
				{
					lat: 42.263565,
					lng: -70.945822
				},
				{
					lat: 42.238227,
					lng: -70.972041
				},
				{
					lat: 42.227982,
					lng: -71.032732
				},
				{
					lat: 42.215397,
					lng: -71.044870
				},
				{
					lat: 42.206407,
					lng: -71.045244
				},
				{
					lat: 42.204608,
					lng: -71.082630
				},
				{
					lat: 42.214139,
					lng: -71.093069
				},
				{
					lat: 42.229420,
					lng: -71.053256
				},
				{
					lat: 42.242361,
					lng: -71.061024
				},
				{
					lat: 42.259432,
					lng: -71.031649
				},
				{
					lat: 42.267158,
					lng: -71.042088
				},
				{
					lat: 42.276499,
					lng: -71.042817
				},
				{
					lat: 42.287891,
					lng: -71.037911
				}
			]; // Construct the polygon.

			const quincyTriangle = new google.maps.Polygon({
				paths: quincyCoords,
				strokeColor: "#FF0000",
				strokeOpacity: 0.8,
				strokeWeight: 2,
				fillColor: "#FF0000",
				fillOpacity: 0.35
			});
			quincyTriangle.setMap(map);

		}
	</script>
</head>
<body>
<div id="map"></div>
</body>
</html>