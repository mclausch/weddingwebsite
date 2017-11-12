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

			<hr/>

			<h3 class="heading-<?php echo $gPageColor; ?>">Getting to <strong>San Francisco</strong></h3>
			<div class="panel-group panel-group-<?php echo $gPageColor; ?>" id="toSFaccordion">
				<div class="panel panel-default">
				<div class="panel-heading">
					<h5 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#toSFaccordion" href="#collapseToSFOne" aria-expanded="false">By Air</a></h5>
				</div>
				<div id="collapseToSFOne" class="accordion-body collapse" aria-expanded="false" style="">
				<div class="panel-body">
					<p>San Francisco is served by three major international airports:</p>
					<ul class="inline-bullets">
						<li>San Francisco International Airport (SFO)</li>
						<li>Oakland International Airport (OAK)</li>
						<li>San Jose International Airport (SJC)</li>
					</ul>
					<p>For guests arriving from the Greater Toronto Area, SFO is probably the best option with multiple direct flights (Air Canada) each day from Toronto Pearson International Airport (YYZ).</p>
					<p>For everyone else, SFO and OAK are equally convenient to the city center. SJC is less convenient, with fewer transportation options to the city.</p>
					<p>We strongly recommend using <a class="body-link" href="http://flights.google.com" target="_blank">Google Flights</a> to search for flights. It does not provide a booking engine, but normally provides links to book directly with the airline. If you have any problems finding or booking flights please feel free to reach out to us and we'll help out.</p>

					<h5 class="heading-<?php echo $gPageColor; ?>">Ground Transportation Options from SFO and OAK</h5>
					<div class="panel-group panel-group-<?php echo $gPageColor; ?>" id="toSFaccordionAir" style="padding-left:20px;">
						<div class="panel panel-default">
						<div class="panel-heading">
							<h5 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#toSFaccordionAir" href="#collapseToSFAirOne" aria-expanded="false">Taxi</a></h5>
						</div>
						<div id="collapseToSFAirOne" class="accordion-body collapse" aria-expanded="false" style="">
						<div class="panel-body">
							<p>Follow airport signage to the taxi stands. One-way metered rates to San Francisco city center from SFO/OAK are approximately $60. Some taxi companies provide cheaper flat rates, so be sure to ask your driver. Taxis are required to accept major credit cards, but it's important to tell your driver up front that you're paying by card as some drivers will insist they only take cash.</p>
						</div>
						</div>
						</div>

						<div class="panel panel-default">
						<div class="panel-heading">
							<h5 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#toSFaccordionAir" href="#collapseToSFAirTwo" aria-expanded="false">Car Rental</a></h5>
						</div>
						<div id="collapseToSFAirTwo" class="accordion-body collapse" aria-expanded="false" style="">
						<div class="panel-body">
							<p>SFO/OAK are serviced by all major car rental companies. As with all cities however, driving (and parking) in San Francisco is often more hassle than it is worth. Note also that the prices for our <a class="body-link" href="accommodations.php">hotel room blocks</a> do not include parking, which is approximately $40/night.</p>
						</div>
						</div>
						</div>

						<div class="panel panel-default">
						<div class="panel-heading">
							<h5 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#toSFaccordionAir" href="#collapseToSFAirThree" aria-expanded="false">Shared Ride Van</a></h5>
						</div>
						<div id="collapseToSFAirThree" class="accordion-body collapse" aria-expanded="false" style="">
						<div class="panel-body">
							<p>Several companies provide shared ride vans from SFO/OAK to San Francisco city center. We recommend <a class="body-link" href="https://www.supershuttle.com/locations/sanfranciscosfo/" target="_blank">SuperShuttle</a>. Reserve in advance for a discount. Prices start at $19 one way.</p>
						</div>
						</div>
						</div>

						<div class="panel panel-default">
						<div class="panel-heading">
							<h5 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#toSFaccordionAir" href="#collapseToSFAirFour" aria-expanded="false">Rideshare (Lyft/Uber)</a></h5>
						</div>
						<div id="collapseToSFAirFour" class="accordion-body collapse" aria-expanded="false" style="">
						<div class="panel-body">
							<p>Ridesharing was born in the San Francisco Bay Area and is used heavily all over the region. If you will have a smartphone with a data plan when you arrive at the airport this can be a cheaper (and often easier) option than a regular taxi.</p>
							<p>Our preferred rideshare program is <a class="body-link" href="http://lyft.com" target="_blank">Lyft</a>. If you haven't used Lyft before you can sign up with our referral code, "SARAHMATTHEWWED" to get a $5 credit to your first ride. Rides from SFO range from $18 to $40. Rides from OAK are a bit more expensive due to the bridge toll. Ridesharing is also an inexpensive option for getting around the city.</p>
							<p>A few tips For those that haven’t used a ridesharing service before. If you want a car all to yourself or are traveling with more than 2 people, request a regular Lyft. If your party is 1-2 people, you don’t mind sharing your ride with someone you don't know, and you aren’t in a hurry, we recommend requesting a Lyft Line which pairs your party up with other riders and is often cheaper than a regular Lyft. Uber has a similar system with UberX (car just for you and your party) and Uber Pool (shared ride).</p>
						</div>
						</div>
						</div>

						<div class="panel panel-default">
						<div class="panel-heading">
							<h5 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#toSFaccordionAir" href="#collapseToSFAirFive" aria-expanded="false">Public Transit</a></h5>
						</div>
						<div id="collapseToSFAirFive" class="accordion-body collapse" aria-expanded="false" style="">
						<div class="panel-body">
							<p>Both SFO and OAK are connected to San Francisco City Center via the <a class="body-link" href="https://www.bart.gov/guide/airport" target="_blank">Bay Area Rapid Transit system (BART)</a>. Fares are approximate $10 one way.</p>
							<p> Within the city <a class="body-link" href="https://www.sfmta.com/" target="_blank">MUNI</a> runs city buses and light rail that provide surprisingly thorough coverage. Adult fares are $2.75 and allow unlimited transfers for 90 minutes.</p>
							<p><a class="body-link" href="https://www.clippercard.com" target="_blank">Clipper Cards</a> are refillable transit payment cards that can be used on any transit system in the San Francisco Bay Area (including BART and MUNI). They can be purchased/reloaded at any major transit station or at any Walgreens pharmacy.</p>
							<p>Google Maps and Apple Maps are both very good at providing directions and routing for public transit within San Francisco. <a class="body-link" href="http://rocketmanapp.com/" target="_blank">RocketMan</a> is an excellent app for tracking bus arrival times in many major cities (including San Francisco and Toronto). Major stations also have paper maps to help you get around and many bus stops have full system maps posted in the shelters. Any San Francisco guide book should also have information about public transit.</p>
						</div>
						</div>
						</div>
					</div>

					<h5 class="heading-<?php echo $gPageColor; ?>">Ground Transportation Options from SJC</h5>
					<p>Getting from San Jose International Airport to San Francisco requires either a car rental, a willingness to pay a large fare for a taxi/shared ride van (&gt;$100), or an interest in exploring at least three different public transit systems. If you find a cheap flight to SJC and want help figuring out ground transportation to the city please reach out to us and we'll be happy to help.</p>
				</div>
				</div>
				</div>

				<div class="panel panel-default">
				<div class="panel-heading">
					<h5 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#toSFaccordion" href="#collapseToSFTwo" aria-expanded="false">By Road</a></h5>
				</div>
				<div id="collapseToSFTwo" class="accordion-body collapse" aria-expanded="false" style="">
				<div class="panel-body">
					<p>San Francisco is connected by road to the rest of California by US Route 101 and the I-5/I-580. The old State Route 1, which winds slowly along the Pacific coast is also an excellent option if you'd like to take a prettier path. As with all cities however, driving (and parking) in San Francisco is often more hassle than it is worth. Note also that the prices for our <a class="body-link" href="accommodations.php">hotel room blocks</a> do not include parking, which is approximately $40/night.</p>
				</div>
				</div>
				</div>

				<div class="panel panel-default">
				<div class="panel-heading">
					<h5 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#toSFaccordion" href="#collapseToSFThree" aria-expanded="false">By Rail</a></h5>
				</div>
				<div id="collapseToSFThree" class="accordion-body collapse" aria-expanded="false" style="">
				<div class="panel-body">
					<p><a class="body-link" href="https://www.amtrak.com" target="_blank">Amtrak</a> runs trains north and south along the state of California with a stop in Emeryville and connection buses to downtown San Francisco. MUNI, taxis, or rideshares can be used to connect to your final destination in the city.</p>
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

			<hr/>

			<h3 class="heading-<?php echo $gPageColor; ?>">Getting to the <strong>Wedding</strong></h3>
			<p>Our wedding ceremony and reception will be held at the <a class="body-link" href="https://goo.gl/maps/PJ8yq5ynWDA2" target="_blank">Presidio Log Cabin</a>, located at 1299 Storey Avenue in the Presidio of San Francisco. Parking will be available at the wedding venue, however we strongly recommend guests avoid driving in order to maximize their enjoyment of the reception.</p>

			<div class="panel-group panel-group-<?php echo $gPageColor; ?>" id="toWeddingAccordion">
				<div class="panel panel-default">
				<div class="panel-heading">
					<h5 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#toWeddingAccordion" href="#collapseToWeddingAccordionOne" aria-expanded="false">Rideshare (Lyft/Uber)</a></h5>
				</div>
				<div id="collapseToWeddingAccordionOne" class="accordion-body collapse" aria-expanded="false" style="">
				<div class="panel-body">
					<p>Our preferred rideshare program is <a class="body-link" href="http://lyft.com" target="_blank">Lyft</a>. If you haven't used Lyft before you can sign up with our referral code, "SARAHMATTHEWWED" to get a $5 credit to your first ride. Rides from the hotels to the wedding venue can be as cheap as $4 for up to two people if you use Lyft Line.</p>
							<p>A few tips For those that haven’t used a ridesharing service before. If you want a car all to yourself or are traveling with more than 2 people, request a regular Lyft. If your party is 1-2 people, you don’t mind sharing your ride with someone you don't know, and you aren’t in a hurry, we recommend requesting a Lyft Line which pairs your party up with other riders and is often cheaper than a regular Lyft. Uber has a similar system with UberX (car just for you and your party) and Uber Pool (shared ride).</p>
				</div>
				</div>
				</div>

				<div class="panel panel-default">
				<div class="panel-heading">
					<h5 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#toWeddingAccordion" href="#collapseToWeddingAccordionTwo" aria-expanded="false">Taxi</a></h5>
				</div>
				<div id="collapseToWeddingAccordionTwo" class="accordion-body collapse" aria-expanded="false" style="">
				<div class="panel-body">
					<p>Your hotel can help you arrange a taxi to the venue. Fares should be less than $20 from the hotels. At the end of the evening please ask us if you need help arranging a ride back to your hotel. Taxis can also be hailed street-side, or you can call/order online. The largest taxi company in San Francisco is <a class="body-link" href="http://flywheeltaxi.com/">Desoto Cabs</a> and can be reached at 415-970-1300. Desoto also runs the "Flywheel" mobile application, a competitor to Uber/Lyft that lets you order from your phone and track your driver. Another popular taxi company is <a class="body-link" href="http://yellowcabsf.com/">Yellow Cab</a> (415-333-3333) and they also have a mobile app to aid in booking.</p>
				</div>
				</div>
				</div>

				<div class="panel panel-default">
				<div class="panel-heading">
					<h5 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#toWeddingAccordion" href="#collapseToWeddingAccordionThree" aria-expanded="false">Public Transit</a></h5>
				</div>
				<div id="collapseToWeddingAccordionThree" class="accordion-body collapse" aria-expanded="false" style="">
				<div class="panel-body">
					<p> Within the city <a class="body-link" href="https://www.sfmta.com/" target="_blank">MUNI</a> runs city buses and light rail that provide surprisingly thorough coverage. Adult fares are $2.75 and allow unlimited transfers for 90 minutes.</p>
					<p><a class="body-link" href="https://www.clippercard.com" target="_blank">Clipper Cards</a> are refillable transit payment cards that can be used on any transit system in the San Francisco Bay Area (including BART and MUNI). They can be purchased/reloaded at any major transit station or at any Walgreens pharmacy.</p>
					<p>Google Maps and Apple Maps are both very good at providing directions and routing for public transit within San Francisco. <a class="body-link" href="http://rocketmanapp.com/" target="_blank">RocketMan</a> is an excellent app for tracking bus arrival times in many major cities (including San Francisco and Toronto). Major stations also have paper maps to help you get around and many bus stops have full system maps posted in the shelters. Any San Francisco guide book should also have information about public transit.</p>
					<p>There are several options for getting to the Presidio Log Cabin via transit. Most MUNI routes drop passengers off at the Golden Gate Bridge visitor center and from there it is an 8 minute walk to the Log Cabin. The Presidio also runs free shuttle buses within the park and the Crissy Field route has a stop right in front of the Log Cabin (although the last shuttle is at 6pm). Below are some suggestions for transit from the <a class="body-link" href="accommodations.php">wedding hotels</a>.</p>

					<p>From the Kimpton Buchanan:</p>
						<ol class="inline-bullets">
						<li>Walk north on Buchanan to California Street</li>
						<li>Catch the "1 California" bus westbound</li>
						<li>Get off at Presidio Avenue</li>
						<li>Catch the "43 Masonic" bus northbound</li>
						<li>Get off at the Presidio Transit Center</li>
						<li>Catch the PresidioGo "Crissy Field" route to Golden Gate Bridge (no cost, every 30 minutes)</li>
						<li>Get off at the Log Cabin stop (ask the driver to alert you)</li>
						</ol>
					<p>From the Holiday Inn Golden Gateway:</p>
						<ol class="inline-bullets">
						<li>Walk north on Van Ness Avenue to Sacramento Street</li>
						<li>Catch the "1 California" bus westbound</li>
						<li>Get off at Presidio Avenue</li>
						<li>Catch the "43 Masonic" bus northbound</li>
						<li>Get off at the Presidio Transit Center</li>
						<li>Catch the PresidioGo "Crissy Field" route to Golden Gate Bridge (no cost, every 30 minutes)</li>
						<li>Get off at the Log Cabin stop (ask the driver to alert you)</li>
						</ol>
				</div>
				</div>
				</div>

				<div class="panel panel-default">
				<div class="panel-heading">
					<h5 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#toWeddingAccordion" href="#collapseToWeddingAccordionFour" aria-expanded="false">Walking or Biking</a></h5>
				</div>
				<div id="collapseToWeddingAccordionFour" class="accordion-body collapse" aria-expanded="false" style="">
				<div class="panel-body">
					<p>There are so many fantastic ways to walk or bike through the Presidio to the Log Cabin. Spend the day exploring to work up an appetite before the big event! Check out the <a class="body-link" href="do.php">activities</a> page for some ideas.</p>
				</div>
				</div>
				</div>

				<div class="panel panel-default">
				<div class="panel-heading">
					<h5 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#toWeddingAccordion" href="#collapseToWeddingAccordionFive" aria-expanded="false">Car</a></h5>
				</div>
				<div id="collapseToWeddingAccordionFive" class="accordion-body collapse" aria-expanded="false" style="">
				<div class="panel-body">
					<p>If you prefer to drive to the Presidio Log Cabin you can find are directions from the <a class="body-link" href="accommodations.php">wedding hotels</a> below. We have reserved the parking lot at the Log Cabin for the event, but it only has 40 spaces. Please car pool if you can. Additional parking is available throughout the Presidio (both free and paid) but we cannot guarantee availability.</p>
					<p><a class="body-link" href="https://goo.gl/maps/ZzwTPUkUTyr" target="_blank">From the Kimpton Buchanan</a></p>
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
					<p><a class="body-link" href="https://goo.gl/maps/mhknXRQL6nv" target="_blank">From the Holiday Inn Golden Gateway</a></p>
					<ol class="inline-bullets">
					<li>Head west on Pine St (away from downtown SF)</li>
					<li>Keep right to merge onto Euclid Ave</li>
					<li>Turn right onto Arguello Bvld</li>
					<li>Turn left onto Washington Blvd</li>
					<li>Turn right onto Park Blvd</li>
					<li>Turn left onto Kobbe Ave</li>
					<li>Turn right to stay on Upton Ave</li>
					<li>Slight left onto Battery Wagner Rd</li>
					<li>Merge onto Storey Ave, the Presidio Log Cabin will be on the right</li>
					</ol>
				</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
include("foot.html");
?>
