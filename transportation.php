<?php
global $gTitle;
global $gPageColor;

$gTitle = "Transportation";
$gPageColor = "primary";
include("head.html")
?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<p>San Francisco is a geographically small, dense city (a square, 7 miles per side) that can be experienced easily through a combination of walking, biking, public transit, taxis, and ride-sharing programs. It is well connected to the rest of California via major highways and a north south rail line, and it is well connected to the world through three nearby international airports.</p>
			<h3 class="heading-<?php echo $gPageColor; ?>">Getting to <strong>San Francisco</strong></h3>

			<div class="panel-group panel-group-<?php echo $gPageColor; ?>" id="toSFaccordion">
			<div class="panel panel-default">
			<div class="panel-heading">
				<h5 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#toSFaccordion" href="#collapseToSFOne" aria-expanded="false">By Air</a></h5>
			</div>
			<div id="collapseToSFOne" class="accordion-body collapse" aria-expanded="false" style="">
			<div class="panel-body">
				<p>San Francisco is served by three major international airports:
				<ul class="inline-bullets">
					<li>San Francisco International Airport (SFO)</li>
					<li>Oakland International Airport (OAK)</li>
					<li>San Jose International Airport (SJC)</li>
				</ul></p>
				<p>For guests arriving from the Greater Toronto Area, SFO is probably the best option with multiple direct flights (Air Canada) each day from Toronto Pearson International Airport (YYZ).</p>
				<p>For everyone else, SFO and OAK are equally convenient to the city center. SJC is less convenient, with fewer transportation options to the city.</p>
				<p>We strongly recommend using <a href="http://flights.google.com">Google Flights</a> to search for flights. It does not provide a booking engine, but normally provides links to book directly with the airline. If you have any problems finding or booking flights please feel free to reach out to us and we'll help out.</p>
				<p>Ground Transportation Options (SFO and OAK):
				<ul class="inline-bullets">
					<li><strong>Regular Taxi</strong>
					<ul><li><p>Follow airport signage to the taxi stands. One-way metered rates to San Francisco city center from SFO/OAK are approximately $60. Some taxi companies provide cheaper flat rates, be sure to ask your driver. Taxis are required to accept major credit cards, but sometimes drivers will insist they only take cash. Tell them up front if you're paying with card.</p></li></ul>
					</li>
					<li><strong>Car Rental</strong>
					<ul><li><p>SFO/OAK are serviced by all major car rental companies. As with all cities however, driving (and parking) in San Francisco is often more hassle than it is worth. Note also that the prices for our <a href="accommodations.php">hotel room blocks</a> do not include parking, which is approximately $40/night.</p></li></ul>
					</li>
					<li><strong>Shared Ride Van</strong>
					<ul><li><p>Several companies provide shared ride vans from SFO/OAK to San Francisco city center. We recommend <a href="https://www.supershuttle.com/locations/sanfranciscosfo/">SuperShuttle</a>. Reserve in advance for a discount. Prices start at $19 one way.</p></li></ul>
					</li>
					<li><strong>Rideshare</strong> (<a href="http://lyft.com">Lyft</a> or <a href="http://uber.com">Uber</a>)
					<ul><li><p>Ridesharing was born in the San Francisco Bay Area and is used heavily all over the region. If you will have data on your smartphone when you arrive at the airport this can be a cheaper (and often easier) option than a regular taxi.</p>
					<p>Our preferred rideshare program is <a href="http://lyft.com">Lyft</a>. If you haven't used Lyft before you can sign up with our referral code, "SARAHMATTHEWWED" to get a $5 credit to your first ride. Rides from SFO range from $18 to $40. Rides are a bit more expensive due to the bridge toll. Ridesharing is also an excellent an inexpensive option for getting around the city.</p></li></ul>
					</li>
					<li><strong>Public Transit</strong>
					<ul><li><p>Both SFO and OAK are connected to San Francisco City Center via the <a href="https://www.bart.gov/guide/airport">Bay Area Rapid Transit system (BART)</a>. Fares are approximate $10 one way.</p>
					<p> Within the city <a href="https://www.sfmta.com/">MUNI</a> runs city buses and light rail which provide surprisingly thorough coverage. Adult fares are $2.75 and allow unlimited transfers for 90 minutes.</p>
					<p><a href="https://www.clippercard.com">Clipper Cards</a> are refillable transit payment cards that can be used on any transit system in the San Francisco Bay Area (including BART and MUNI). They can be purchased/reloaded at any major transit station or at any Walgreens Pharmacy.</p>
					<p>Google Maps and Apple Maps are both very good at providing directions and routing for public transit within San Francisco. <a href="http://rocketmanapp.com/">RocketMan</a> is an excellent app for tracking bus arrival times in many major cities (including San Francisco and Toronto). Major stations also have paper maps to help you get around and many bus stops have full system maps posted in the shelters. Any San Fransisco guide book should also have information about public transit.</p></li></ul>
					</li>
				</ul></p>
			</div>
			</div>
			</div>

			<div class="panel panel-default">
			<div class="panel-heading">
				<h5 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#toSFaccordion" href="#collapseToSFTwo" aria-expanded="false">By Road</a></h5>
			</div>
			<div id="collapseToSFTwo" class="accordion-body collapse" aria-expanded="false" style="">
			<div class="panel-body">
				<p>San Francisco is connected by road to the rest of California by US Route 101 and the I-5/I-580. The old State Route 1, which winds slowly along the Pacific coast is also an excellent option if you'd like to take a prettier path. As with all cities however, driving (and parking) in San Francisco is often more hassle than it is worth. Note also that the prices for our <a href="accommodations.php">hotel room blocks</a> do not include parking, which is approximately $40/night.</p>
			</div>
			</div>
			</div>

			<div class="panel panel-default">
			<div class="panel-heading">
				<h5 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#toSFaccordion" href="#collapseToSFThree" aria-expanded="false">By Rail</a></h5>
			</div>
			<div id="collapseToSFThree" class="accordion-body collapse" aria-expanded="false" style="">
			<div class="panel-body">
				<p><a href="https://www.amtrak.com">Amtrak</a> runs trains north and south along the state of California with a stop in Emeryville and connection buses to downtown San Francisco. MUNI, taxis, or rideshares can be used to connect to your final destination in the city.</p>
			</div>
			</div>
			</div>

			<div class="panel panel-default">
			<div class="panel-heading">
				<h5 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#toSFaccordion" href="#collapseToSFFour" aria-expanded="false">By Sea</a></h5>
			</div>
			<div id="collapseToSFFour" class="accordion-body collapse" aria-expanded="false" style="">
			<div class="panel-body">
				<p>Cruise ships regularly make port in San Francisco (after passing under the Golden Gate Bridge). We don't know much about cruise ships though, so we're not sure how that would work in practice. Other possible options for which we have no practical advice include sailing your own boat into San Francisco Marina or renting some sort of hovercraft and barrelling up onto the beach at Crissy Field.</p>

			</div>
			</div>
			</div>
			</div>

			<br />

			<h3 class="heading-<?php echo $gPageColor; ?>">Getting to the <strong>Wedding</strong></h3>
			<p>Our wedding ceremony and reception will be held at the <a href="https://goo.gl/maps/PJ8yq5ynWDA2">Presidio Log Cabin</a>, located at 1299 Storey Avenue in the Presidio of San Francisco. Parking will be available at the wedding venue, however we strongly recommend guests avoid driving in order to maximize their enjoyment of the reception.
			<ul class="inline-bullets">
				<li><strong>Rideshare</strong> (<a href="http://lyft.com">Lyft</a> or <a href="http://uber.com">Uber</a>)
				<ul><li><p>Our preferred rideshare program is <a href="http://lyft.com">Lyft</a>. If you haven't used Lyft before you can sign up with our referral code, "SARAHMATTHEWWED" to get a $5 credit to your first ride. Rides from the hotels to the wedding venue can be as cheap as $4 for up to two people if you use Lyft Line.</p></li></ul>
				</li>

				<li><strong>Taxi</strong>
				<ul><li><p>Your hotel can help you arrange a taxi to the venue. Fares should be less than $20 from the hotels. At the end of the evening please ask us if you need help arranging a ride back to your hotel.</p></li></ul>
				</li>

				<li><strong>Public Transit</strong>
				<ul><li><p>There are many options to get to the Presidio Log Cabin via transit. Google Maps and Apple Maps can suggest many possibilities from wherever you are. Most MUNI routes drop passengers off at the Golden Gate Bridge visitor center and from there it is an 8 minute walk to the Log Cabin. The Presidio also runs free shuttle buses within the park and the Crissy Field route has a stop right in front of the Log Cabin. Below are some suggestions for transit from the <a href="accommodations.php">wedding hotels</a>.</p>
				<p>From the Kimpton Buchanan:
					<ol class="inline-bullets">
					<li>Walk north on Buchanan to California Street</li>
					<li>Catch the "1 California" bus westbound</li>
					<li>Get off at Presidio Avenue</li>
					<li>Catch the "43 Masonic" bus northbound</li>
					<li>Get off at the Presidio Transit Center</li>
					<li>Catch the PresidioGo "Crissy Field" route to Golden Gate Bridge (no cost, every 30 minutes)</li>
					<li>Get off at the Log Cabin stop (ask the driver to alert you)</li>
					</ol>
				</p>
				<p>From the Holiday Inn Golden Gateway:
					<ol class="inline-bullets">
					<li>Walk north on Van Ness Avenue to Sacramento Street</li>
					<li>Catch the "1 California" bus westbound</li>
					<li>Get off at Presidio Avenue</li>
					<li>Catch the "43 Masonic" bus northbound</li>
					<li>Get off at the Presidio Transit Center</li>
					<li>Catch the PresidioGo "Crissy Field" route to Golden Gate Bridge (no cost, every 30 minutes)</li>
					<li>Get off at the Log Cabin stop (ask the driver to alert you)</li>
					</ol>
				</p></li></ul>

				</li>

				<li><strong>Walking or Biking</strong>
				<ul><li><p>There are so many fantastic ways to walk or bike through the Presidio to the Log Cabin. Spend the day exploring to work up an appetite before the big event! Check out the <a href="do.php">activities</a> page for some ideas.</p></li></ul>
				</li>
			</ul></p>
			<p>If you prefer to drive to the Presidio Log Cabin here are some directions from the <a href="accommodations.php">wedding hotels</a>.</p>
			<p><ul class="inline-bullets">
				<li><p><a href="https://goo.gl/maps/ZzwTPUkUTyr">From the Kimpton Buchanan</a>:
					<ol class="inline-bullets">
					<li>Head west on Sutter St toward Webster St (away from downtown SF) </li>
					<li>Turn left at the 1st cross street onto Webster St</li>
					<li>Turn right onto Geary Blvd</li>
					<li>Keep left to stay on Geary Blvd</li>
					<li>Turn right onto Arguello Bvld</li>
					<li>Turn left onto Washington Blvd</li>
					<li>Turn right onto Park Blvd</li>
					<li>Turn left onto Kobbe Ave</li>
					<li>Turn right to stay on Upton Ave</li>
					<li>Slight left onto Battery Wagner Rd</li>
					<li>Merge onto Storey Ave - Presidio Log Cabin will be on the right</li>
					</ol>
				</p></li>
				<li><p><a href="https://goo.gl/maps/mhknXRQL6nv">From the Holiday Inn Golden Gateway</a>:
					<ol class="inline-bullets">
					<li>Head west on Pine St (away from downtown SF)</li>
					<li>Keep right to merge onto Euclid Ave</li>
					<li>Turn right onto Arguello Bvld</li>
					<li>Turn left onto Washington Blvd</li>
					<li>Turn right onto Park Blvd</li>
					<li>Turn left onto Kobbe Ave</li>
					<li>Turn right to stay on Upton Ave</li>
					<li>Slight left onto Battery Wagner Rd</li>
					<li>Merge onto Storey Ave - Presidio Log Cabin will be on the right</li>
					</ol>
				</p></li>
			</ul></p>
		</div>
	</div>
</div>

<?php
include("foot.html");
?>
