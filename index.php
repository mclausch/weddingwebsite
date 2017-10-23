<?php
global $gTitle;
global $gPageColor;
global $gMapJS;

$gTitle = "The Wedding";
$gPageColor = "primary";
$gMapJS = <<<EOT
// Map Initial Location
var initLatitude = 37.80377;
var initLongitude = -122.47330;

// Map Markers
var mapMarkers = [{
	latitude: initLatitude,
	longitude: initLongitude,
	html: "<strong><a href=\"https://goo.gl/maps/idGQtfM4e772\" target=\"_blank\">Presidio Log Cabin</a></strong><br/>1299 Storey Ave<br/>San Francisco, CA",
	popup: true
}];

// Map Extended Settings
var mapSettings = {
	controls: {
		draggable: true,
		panControl: true,
		zoomControl: true,
		mapTypeControl: false,
		scaleControl: true,
		streetViewControl: false,
		overviewMapControl: true
	},
	scrollwheel: true,
	markers: mapMarkers,
	latitude: initLatitude,
	longitude: initLongitude,
	zoom: 11
};

$('#googlemaps').gMap(mapSettings);

EOT;

include("head.html")
?>

<div class="slider-container rev_slider_wrapper" style="height: 499px; margin-top: -35px;">
	<div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1920, 'gridheight': 499, 'disableProgressBar': 'on'">
		<ul>
			<li data-transition="fade">
				<img src="img/banner1.jpg"
					data-bgposition="center 100%"
					data-bgfit="cover"
					data-bgrepeat="no-repeat"
					class="rev-slidebg">
			</li>
			<li data-transition="fade">
				<img src="img/banner2.jpg"
					data-bgposition="center 100%"
					data-bgfit="cover"
					data-bgrepeat="no-repeat"
					class="rev-slidebg">
			</li>
			<li data-transition="fade">
				<img src="img/banner3.jpg"
					data-bgposition="center 100%"
					data-bgfit="cover"
					data-bgrepeat="no-repeat"
					class="rev-slidebg">
			</li>
		</ul>
	</div>
</div>

<div class="container">
	<div class="row mt-lg">
		<div class="col-md-12" style="text-align: center;">
			<h3 class="heading-<?php echo $gPageColor; ?>"><strong>Sunday May 27, 2018 &mdash; San Francisco, California</strong></h3>
			<hr class="short" style="margin-top: -15px;"/>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<p>Hello family and friends! We are so looking forward to celebrating our wedding with you and hope you'll be able to <a href="rsvp.php">attend</a>. This website contains all the information you need to know to join us for the ceremony and reception! It also contains information about <a href="transportation.php">transportation</a> and <a href="accommodations.php">accommodations</a> for our guests from out of town. Finally, we've included tons of information on all our favourite things in the <a href="sf.php">San Francisco Bay Area</a> if you're looking for things to do before and after the wedding.</p>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4" style="text-align:center">
			<h4 class="heading-<?php echo $gPageColor; ?>">Location</h4>
			<hr class="short"/>
			<p>
				<strong>The Presidio Log Cabin</strong><br/>
				1299 Storey Avenue,<br/>
				San Francisco, California</a>
			</p>
			<div id="googlemaps" class="google-map google-map-borders small" style="height: 275px;"></div>
			<br/>
		</div>
		<div class="col-md-4">
			<h4 class="heading-<?php echo $gPageColor; ?>" style="text-align:center">Schedule</h4>
			<hr class="short"/>
			<table class="table schedule-table" style="margin-top:-6px;">
				<tbody>
					<tr>
						<td><strong>4:30pm</strong></td>
						<td>Ceremony on the lawn in front of the Presidio Log Cabin</td>
					</tr>
					<tr>
						<td><strong>5:00pm</strong></td>
						<td>Cocktail hour on the Log Cabin patio</td>
					</tr>
					<tr>
						<td><strong>6:15pm</strong></td>
						<td>Dinner inside the Log Cabin: a Mexican buffet catered by Nopalito, one of our favourite restaurants</td>
					</tr>
					<tr>
						<td><strong>8:00pm</strong></td>
						<td>Dancing led by our super fun DJ</td>
					</tr>
					<tr>
						<td><strong>11:00pm</strong></td>
						<td>End of the evening</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-md-4" style="text-align:center">
			<h4 class="heading-<?php echo $gPageColor; ?>">Attire</h4>
			<hr class="short"/>
			<p>
				<strong>Dressy Casual</strong>
			</p>
			<p>We'll be in formal wear, but we'd like our guests to be comfortable. Dress up if you like, but don't worry about it if not!</p>
			<p>The ceremony will be outdoors on a lawn and the reception (with lots of dancing!) will be indoors. San Francisco is rarely hot and can turn foggy, windy, and cold very quickly. We recommend layers!
			</p>
		</div>
	</div>
</div>

<?php
include("foot.html");
?>

