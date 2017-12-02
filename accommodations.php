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
		html: "<strong><a class=\"body-link\" href=\"https://goo.gl/maps/idGQtfM4e772\" target=\"_blank\">Presidio Log Cabin</a></strong><br/>1299 Storey Ave<br/>San Francisco, CA",
		popup: true
	},
	{
		latitude: 37.78678,
		longitude: -122.43023,
		html: "<strong><a class=\"body-link\" href=\"https://goo.gl/maps/LLwnwhAsqiC2\" target=\"_blank\">Kimpton Buchanan</a></strong><br/>1800 Sutter St<br/>San Francisco, CA",
		popup: true
	},
	{
		latitude: 37.78985,
		longitude: -122.42191,
		html: "<strong><a class=\"body-link\" href=\"https://goo.gl/maps/1JCyshs2uF92\" target=\"_blank\">Holiday Inn Golden Gateway</a></strong><br/>1500 Van Ness Ave<br/>San Francisco, CA",
		popup: true
	},
	{
		latitude: 37.79249,
		longitude: -122.41063,
		html: "<strong><a class=\"body-link\" href=\"https://goo.gl/maps/hoJg3jDso3Q2\" target=\"_blank\">Fairmont San Francisco</a></strong><br/>950 Mason St<br/>San Francisco, CA",
		popup: false
	},
	{
		latitude: 37.79991,
		longitude: -122.43746,
		html: "<strong><a class=\"body-link\" href=\"https://goo.gl/maps/U7dPQ1QZJRn\" target=\"_blank\">Cow Hollow Inn</a></strong><br/>2190 Lombard St<br/>San Francisco, CA",
		popup: false
	},
	{
		latitude: 37.79998,
		longitude: -122.43301,
		html: "<strong><a class=\"body-link\" href=\"https://goo.gl/maps/LjzoLdKa65B2\" target=\"_blank\">Coventry Inn</a></strong><br/>1901 Lombard St<br/>San Francisco, CA",
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
			<p>Like many large cities, hotels in San Francisco can be expensive and in high demand. We've secured room blocks at two hotels to get better prices and some guaranteed capacity, however we expect both hotels to sell out. We did our best to anticipate the number of rooms to hold, but we may have underestimated. Note that if our blocks fill up, but the hotel still has capacity in standard rooms, then you will still be guaranteed our contracted rates. Our wedding falls on the Memorial Day long weekend so we recommend booking early. The hotels are located approximately halfway between downtown and the wedding venue and are ideally situated for attending the wedding and seeing the city. Please <a class="body-link" href="mailto:matthewandsarah2017@gmail.com">reach out</a> to us if you have any trouble finding accommodations or if you'd like to be connected with another wedding guest with whom to share a room.</p>
			<hr/>
		</div>

		<div class="col-md-8">
			<h3 class="heading-<?php echo $gPageColor; ?>"><strong>Kimpton Buchanan</strong></h3>
			<p>The Kimpton Buchanan Hotel, recently renovated from top to bottom, is located between Japantown and The Fillmore neighbourhood. The hotel has a small on-site restaurant, complimentary wifi, fitness center, loaner bikes, outdoor courtyard, and a free evening wine hour. Japantown and Fillmore Street (between Geary and Washington) both feature tons of great restaurants and bars. Price, location, and features make this hotel our top recommendation for guests coming to the wedding.</p>
			<h5 class="heading-<?php echo $gPageColor; ?>">Nightly pricing for one or two people</h5>
			<table class="table">
				<thead><tr><th>Friday, May 25</th><th>Saturday, May 26</th><th style="color: <?php echo $gPrimaryColor; ?>"><strong>Sunday, May 27</strong></th><th>Monday, May 28</th></thead>
				<tbody><tr><td>$220</td><td>$220</td><td style="color: <?php echo $gPrimaryColor; ?>"><strong>$165</strong></td><td>$165</td></tbody>
			</table>
			<p>Prices above are for single/double occupancy in standard rooms with either a single king bed or two queen beds. The charge is $20/night for each extra guest in a room. Parking is $38/night. You can book any subset of the nights, there is no requirement to book all four. Our preferred rates expire on April 27, 2018, so please book before then.</p>
			<p>To book please call the hotel at +1-415-921-4000 and mention that you'd like to reserve rooms as part of the Utley-Lausch wedding block. You can also book online using the group code "LU1" or by clicking <a class="body-link" href="https://gc.synxis.com/rez.aspx?Hotel=62437&Chain=10179&group=LU1" target="_blank"><strong>here</strong></a>.</p>
			<p><strong>PLEASE NOTE:</strong> if you'd like to book additional nights at the Kimpton Buchanan outside of the nights listed above (May 25-28) you'll need to make a separate booking or book by phone. The online booking system <strong>will not give you the preferred price</strong> for the listed nights if you try to book any nights outside of those four!</p>
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
			<p>The Holiday Inn Golden Gateway is located near the Nob Hill neighbourhood and at 26 stories tall has commanding views of the city. It features complimentary wifi, a swimming pool, a fitness center, and on-site restaurant. Polk Street near the hotel has a number of fun restaurants and bars, and the hotel is closer than the Kimpton to the Union Square shopping area. If the Kimpton is fully booked we recommend the Holiday Inn Golden Gateway.</p>
			<h5 class="heading-<?php echo $gPageColor; ?>">Nightly pricing for one or two people</h5>
			<table class="table">
				<thead><tr><th>Saturday, May 26</th><th style="color: <?php echo $gPrimaryColor; ?>"><strong>Sunday, May 27</strong></th></thead>
				<tbody><tr><td>$205</td><td style="color: <?php echo $gPrimaryColor; ?>"><strong>$205</strong></td></tbody>
			</table>
			<p>Prices above are for single/double occupancy in standard rooms with either a single king bed or two double beds. The charge is $20/night for each extra guest in a room. Parking is $40/night. You can book any subset of the nights, there is no requirement to book both. Our preferred rates expire on April 27, 2018, so please book before then.</p>
			<p>To book please call the hotel at +1-415-441-4000 and mention that you'd like to reserve rooms as part of the Utley-Lausch wedding block. You can also book online by clicking <a class="body-link" href="https://www.holidayinn.com/redirect?path=hd&brandCode=HI&localeCode=en&regionCode=1&hotelCode=SFOGG&_PMID=99801505&GPC=SUT&viewfullsite=true" target="_blank"><strong>here</strong></a>.</p>
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
			<p>San Francisco has many other excellent hotels of all shapes and sizes. We recommend using <a class="body-link" href="http://kayak.com" target="_blank">Kayak</a> or <a class="body-link" href="https://www.google.com/maps/search/hotels/sanfrancisco" target="_blank">Google Hotels</a> to search for hotel deals if you'd like to explore other possibilities. Those looking for a more luxurious stay should check out the <a class="body-link" href="http://www.fairmont.com/san-francisco/" target="_blank">Fairmont San Francisco</a> (starting at $300/night). The <a class="body-link" href="http://www.coventrymotorinn.com/" target="_blank">Coventry Inn</a> and the <a class="body-link" href="http://www.cowhollowmotorinn.com/" target="_blank">Cow Hollow Inn</a> provide good "no frills" accommodation.</p> 
			<p><a class="body-link" href="http://airbnb.com" target="_blank">Airbnb</a> is a great option for those looking for a variety of options from staying in a single room in someone's home to taking over an entire apartment or house. Our favorite part about Airbnb is getting a place with kitchen so that we can cook some of our own meals. If you've never used Airbnb before and would like to give it a try then you can use our <a class="body-link" href="http://www.airbnb.com/c/matthewl743" target="_blank"><strong>referral link</strong></a> to sign up and get $40 towards your first stay (the referral code also gives credit to us after your first stay).</p>
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
