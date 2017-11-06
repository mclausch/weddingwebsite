<?php
global $gTitle;
global $gPageColor;

$gTitle = "About Us";
$gPageColor = "secondary";
include("head.html")
?>

<div class="container">
	<div class="row">
		<div class="col-md-7">
			<h3 class="heading-<?php echo $gPageColor; ?>"><strong>Sarah Beth Utley</strong>, by Matthew</h3>
			<p>Sarah grew up in the town of Newbury Park, just north of Los Angeles, with her amazing parents, loving Nan, and super fun three older brothers. She spent her childhood pursuing creative activities like writing and 4-H and explored the United States with her family on many many epic road trips. She is absolutely brilliant and followed up her undergraduate degree in physiology from UCSB with a Ph.D. from USC studying liver stem cells, and then completed a post-doctoral placement at UCSF studying stem cells in relation to trachea development for disease treatment. Throughout her post-secondary education Sarah was part of several competitive Ultimate Frisbee teams and she's run seven half-marathons with a goal to reach ten before her knees give out. She now works as a medical writer, helping pharmaceutical companies get new drugs to market. She loves to cook and bake and has a soft spot for British TV dramas.</p>
			<p>I knew Sarah was special on our first date. We met at a wine bar and of course I arrived early. Instead of going in and sitting alone nervously I walked around the block and on my way back I spotted her on the street. I picked up my pace and we intersected at the door of the bar. Despite having never met me in person she immediately gave me a big hug and a smile and we went inside. I noticed the menu had a delicious sour beer on tap, Rodenbach's "Grand Cru." I instantly ordered that and Sarah immediately followed my lead, eager to try something new, totally unconcerned with whether or not she'd like it. I love that she is always ready for new adventures, small and large.</p>
			<p>I quickly discovered that we share a ton of the same interests, but more importantly that Sarah shares my general outlook on life. She feels as I do that life is good, that cultivating relationships with friends and family is super important, that experiences are better than objects, and that one should always try new things. Over the weeks and months of our first year I quickly realized that I had struck gold on my first attempt at online dating and that I could easily spend the rest of my life with Sarah. By our one-year dating anniversary that feeling had changed from "could" to "must." She brightens all of my days and reminds me not to be too serious. She is a true partner in all aspects of my life and supports me in all that I do. I cannot wait to be married to her and to begin the rest of our lives together.</p>
		</div>
		<div class="col-md-5">
<?php insertPhotos("img/sarah"); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<hr/>
		</div>
	</div>
	<div class="row">
		<div class="col-md-7">
			<h3 class="heading-<?php echo $gPageColor; ?>"><strong>Matthew Christopher Lausch</strong>, by Sarah</h3>
			<p>Nice text written by Sarah</p>
		</div>
		<div class="col-md-5">
<?php insertPhotos("img/matthew"); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<hr/>
		</div>
	</div>
	<div class="row">
		<div class="col-md-7">
			<h3 class="heading-<?php echo $gPageColor; ?>"><strong>Our Story</strong></h3>
			<p>Some more nice text</p>
		</div>
		<div class="col-md-5">
<?php insertPhotos("img/us"); ?>
		</div>
	</div>
</div>

<?php
include("foot.html");
?>
