<?php
global $gTitle;
global $gPageColor;
global $gMapJS;

$gTitle = "Accommodations";
$gPageColor = "primary";
$gMapJS = <<<EOT
// Map Markers
var mapMarkers = [
	{
		latitude: 37.80377,
		longitude: -122.47330,
		html: "<strong><a href=\"https://goo.gl/maps/idGQtfM4e772\" target=\"_blank\">Presidio Log Cabin</a></strong><br/>1299 Storey Ave<br/>San Francisco, CA",
		popup: true
	},
	{
		latitude: 37.78678,
		longitude: -122.43023,
		html: "<strong><a href=\"https://goo.gl/maps/LLwnwhAsqiC2\" target=\"_blank\">Kimpton Buchanan</a></strong><br/>1800 Sutter St<br/>San Francisco, CA",
		popup: true
	},
	{
		latitude: 37.78985,
		longitude: -122.42191,
		html: "<strong><a href=\"https://goo.gl/maps/1JCyshs2uF92\" target=\"_blank\">Holiday Inn Golden Gateway</a></strong><br/>1500 Van Ness Ave<br/>San Francisco, CA",
		popup: true
	},
	{
		latitude: 37.79249,
		longitude: -122.41063,
		html: "<strong><a href=\"https://goo.gl/maps/hoJg3jDso3Q2\" target=\"_blank\">Fairmont San Francisco</a></strong><br/>950 Mason St<br/>San Francisco, CA",
		popup: false
	},
	{
		latitude: 37.79991,
		longitude: -122.43746,
		html: "<strong><a href=\"https://goo.gl/maps/U7dPQ1QZJRn\" target=\"_blank\">Cow Hollow Inn</a></strong><br/>2190 Lombard St<br/>San Francisco, CA",
		popup: false
	},
	{
		latitude: 37.79998,
		longitude: -122.43301,
		html: "<strong><a href=\"https://goo.gl/maps/LjzoLdKa65B2\" target=\"_blank\">Coventry Inn</a></strong><br/>1901 Lombard St<br/>San Francisco, CA",
		popup: false
	},
];

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
	latitude: 37.79816,
	longitude: -122.44224,
	zoom: 14
};

$('#googlemaps').gMap(mapSettings);

EOT;

include("head.html")
?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<p>Like many large cities, hotels in San Francisco can be expensive and in high demand. We've secured room blocks at two hotels to get better prices and guaranteed capacity, however we expect them to fill up fast. Our wedding falls on the Memorial Day long weekend so we recommend booking early. The hotels are located approximately halfway between downtown and the wedding venue and are ideally situated for attending the wedding and seeing the city.</p>
			<hr/>
		</div>

		<div class="col-md-8">
			<h3 class="heading-<?php echo $gPageColor; ?>"><strong>Kimpton Buchanan</strong></h3>
			<p>The Kimpton Buchanan Hotel, recently renovated from top to bottom, is located between Japantown and The Fillmore neighbourhood. The hotel has a small on-site restaurant, complimentary wifi, fitness center, loaner bikes, outdoor courtyard, and a free evening wine hour. Price, location, and features make this hotel our top recommendation for guests coming to the wedding.</p>
			<p>We have secured preferred pricing for four nights. The pricing is for single/double occupancy in standard rooms with either a single king bed or two queen beds. The charge is $20/night for each extra guest in a room. Parking is $38/night. You can book any subset of the nights, there is no requirement to book all four.</p>
			<h5 class="heading-<?php echo $gPageColor; ?>">Nightly pricing for one or two people</h5>
			<table class="table">
				<thead><tr><th>May 25</th><th>May 26</th><th style="color: <?php echo $gPrimaryColor; ?>"><em><strong>May 27</strong></em></th><th>May 28</th></thead>
				<tbody><tr><td>$220</td><td>$220</td><td style="color: <?php echo $gPrimaryColor; ?>"><em><strong>$165</strong></em></td><td>$165</td></tbody>
			</table>
			<p>To book with our preferred pricing please call the hotel at +1-415-921-4000 and mention that you'd like to reserve rooms as part of the Utley-Lausch wedding block. You can also book online using the group code "LU1" or by clicking <a href="https://gc.synxis.com/rez.aspx?Hotel=62437&Chain=10179&group=LU1" target="_blank"><strong>here</strong></a>.</p>
		</div>
		<div class="col-md-4">
			<div class="owl-carousel owl-theme" data-plugin-options="{'items': 1, 'margin': 10}">
				<div><img alt="Kimpton Buchanan Exterior" height="300" class="img-responsive" src="img/buchananout.jpg"></div>
				<div><img alt="Kimpton Buchanan Interior" height="300" class="img-responsive" src="img/buchananin.jpg"></div>
			</div>
		</div>

		<div class="col-md-12">
			<hr/>
		</div>

		<div class="col-md-8">
			<h3 class="heading-<?php echo $gPageColor; ?>"><strong>Holiday Inn Golden Gateway</strong></h3>
			<p>The Holiday Inn Golden Gateway is located near the Nob Hill neighbourhood and at 26 stories tall has commanding views of the city. It features complimentary wifi, a swimming pool, a fitness center, and on-site restaurant. If the Kimpton is fully booked we recommend the Holiday Inn Golden Gateway.</p>
			<p>We have secured preferred pricing for two nights. The pricing is for single/double occupancy in standard rooms with either a single king bed or two double beds. The charge is $20/night for each extra guest in a room. Parking is $40/night. You can book any subset of the nights, there is no requirement to book both.</p>
			<h5 class="heading-<?php echo $gPageColor; ?>">Nightly pricing for one or two people</h5>
			<table class="table">
				<thead><tr><th>May 26</th><th style="color: <?php echo $gPrimaryColor; ?>"><em><strong>May 27</strong></em></th></thead>
				<tbody><tr><td>$205</td><td style="color: <?php echo $gPrimaryColor; ?>"><em><strong>$205</strong></em></td></tbody>
			</table>
			<p>To book with our preferred pricing please call the hotel at +1-415-441-4000 and mention that you'd like to reserve rooms as part of the Utley-Lausch wedding block. You can also book online by clicking <a href="https://www.holidayinn.com/redirect?path=hd&brandCode=hi&localeCode=en&regionCode=1&hotelCode=sfogg&_PMID=99801505&GPC=sul&viewfullsite=true" target="_blank"><strong>here</strong></a>.</p>
		</div>
		<div class="col-md-4">
			<div class="owl-carousel owl-theme" data-plugin-options="{'items': 1, 'margin': 10}">
				<div><img alt="Holiday Inn Exterior" height="300" class="img-responsive" src="img/holidayinnout.jpg"></div>
				<div><img alt="Holiday Inn Interior" height="300" class="img-responsive" src="img/holidayinnin.jpg"></div>
			</div>
		</div>

		<div class="col-md-12">
			<hr/>
		</div>

		<div class="col-md-12">
			<h3 class="heading-<?php echo $gPageColor; ?>"><strong>Other Options</strong></h3>
			<p>San Francisco has many other excellent hotels of all shapes and sizes. We recommend using <a href="http://kayak.com" target="_blank">Kayak</a> or <a href="https://www.google.com/maps/search/hotels/sanfrancisco" target="_blank">Google Hotels</a> to search for hotel deals if you'd like to explore other possibilities. Those looking for a more luxurious stay should check out the <a href="http://www.fairmont.com/san-francisco/" target="_blank">Fairmont San Francisco</a> (starting at $300/night). The <a href="http://www.coventrymotorinn.com/" target="_blank">Coventry Inn</a> and the <a href="http://www.cowhollowmotorinn.com/" target="_blank">Cow Hollow Inn</a> provide good "no frills" accommodation.</p> 
			<p><a href="http://airbnb.com" target="_blank">Airbnb</a> is a great option for those looking for a variety of options from staying in a single room in someone's home to taking over an entire apartment or house. Our favorite part about Airbnb is getting a place with kitchen so that we can cook some of our own meals. If you've never used Airbnb before and would like to give it a try then you can use our <a href="http://www.airbnb.com/c/matthewl743" target="_blank"><strong>referral link</strong></a> to sign up and get $40 towards your first stay!</p>
		</div>

		<div class="col-md-12">
			<hr/>
			<div id="googlemaps" class="google-map google-map-borders small" style="height:400px;"></div>
			<hr/>
		</div>
	</div>
</div>

<?php
include("foot.html");
?>
