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
	html: "<strong><a class=\"body-link\" href=\"https://goo.gl/maps/idGQtfM4e772\" target=\"_blank\">Presidio Log Cabin</a></strong><br/>1299 Storey Ave<br/>San Francisco, CA",
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
			<p>Hello family and friends! We are very much looking forward to celebrating our wedding with you and hope you'll be able to <a class="body-link" href="rsvp.php">attend</a>. This website contains all the information you need to know to join us for the ceremony and reception! It also contains information about <a class="body-link" href="transportation.php">transportation</a> and <a class="body-link" href="accommodations.php">accommodations</a> for our guests from out of town. Finally, we've included tons of information on all our favourite things in the <a class="body-link" href="sf.php">San Francisco Bay Area</a> if you're looking for things to do (and/or eat!) before and after the wedding.</p>
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
			<div id="googlemaps" class="google-map google-map-borders small" style="height: 200px;"></div>
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


	<div class="row">
		<div class="col-md-4">
			<h4 class="heading-<?php echo $gPageColor; ?>" style="text-align:center">Pre-Wedding Hang-out (Friday)</h4>
			<hr class="short"/>
			<p>Everyone who is in the city Friday evening (May 25) is invited to join us for dinner at <a class="body-link" href="https://offthegrid.com/event/fort-mason-center/2018-4-6-5pm" target="_blank">Off the Grid - Fort Mason Center</a>. This is a weekly, outdoor food truck event held at San Francisco's historic Fort Mason Center (<a class="body-link" href="https://goo.gl/maps/QfVqCZKKNM82" target="_blank">map</a>). Over 30 vendors sell food of all kinds and there is a bar that serves beer and wine (cash and credit accepted at most vendors). We'll be there starting at 5pm and staying until at least 8pm. Kids and dogs are welcome! Evenings can get chilly in San Francisco so we recommend layers.</p>
		</div>
		<div class="col-md-4">
			<h4 class="heading-<?php echo $gPageColor; ?>" style="text-align:center">Post-Wedding Picnic (Monday)</h4>
			<hr class="short"/>
			<p>Everyone who is still in the city on Monday after the wedding (May 28) is invited to join us for a picnic lunch in Golden Gate Park starting at 11:30am. We have reserved the <a class="body-link" href="http://sfrecpark.org/destination/golden-gate-park/ggp-14th-avenue-east-picnic-area/" target="_blank">14th Ave East Meadow Picnic Area</a> located just south of the park entrance at Fulton Street and Park Presidio Boulevard. Enter the park on foot and walk through the Rose Garden to reach the picnic area (<a class="body-link" href="https://goo.gl/maps/JcPzrpKQNPE2" target="_blank">map</a>). We'll supply food and drinks. Since Monday is a holiday note that John F. Kennedy Drive through the park will be closed to vehicular traffic.</p>
		</div>
		<div class="col-md-4">
			<h4 class="heading-<?php echo $gPageColor; ?>" style="text-align:center">Photo Sharing</h4>
			<hr class="short"/>
			<p>Interested in sharing your photos from the weekend with us? Check out the <a class="body-link" href="http://www.wedsocial.com/" target="_blank">Wedsocial</a> app for iPhone and Android. Enter your name and email, then select "Join Wedding" and enter the code "<strong>sarahandmatthew</strong>" to get started.</p>
			<p style="text-align: center; margin-top: -10px;"><a href="https://itunes.apple.com/app/id819680960" target="_blank"><img src="img/applestore.png" width="178" height="45"></img></a></p>
			<p style="text-align: center; margin-top: -15px;"><a href="https://play.google.com/store/apps/details?id=com.weddingwire.wedsocial" target="_blank"><img src="img/androidstore.png" width="178" height="45"></img></a></p>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12" style="text-align:center">
			<hr/>
			<p>More questions? Please don't hesitate to <a class="body-link" href="mailto:matthewandsarah2017@gmail.com">contact us</a> and we'll do our best to help out!</p>
		</div>
	</div>
</div>

<?php
include("foot.html");
?>

