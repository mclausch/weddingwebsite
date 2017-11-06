<?php
global $gTitle;
global $gPageColor;

$gTitle = "Important People";
$gPageColor = "secondary";
include("head.html")
?>

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h3 class="heading-<?php echo $gPageColor; ?>"><strong>Sarah's Family</strong>, by Sarah</h3>
			<p>Here is a rundown of my whole family clan for those that don't know them! First are my amazing, supportive and loving parents Debbie and David Utley, who live in southern California. Also present will be my wonderful Nan, who taught me to love baking since I was a young girl and who I can't imagine having grown up without. My mom, my nan and I look SO much alike (see the pictures)!</p>
			<p>I have three awesome older brothers: Chris, Eric, and Ben. They are all hilarious and loud and the coolest older brothers a younger sister could ask for. All of their partners are also wonderful people. I now have an amazing sister-in-law, Ariana (Chris's wife), a super cool brother-in-law, Rey (Eric's husband), and I can't wait to soon be calling Melissa my sister-in-law too (Ben's fianc&#233;e)! Melissa's wonderful daughter, Destiny, and son, Bryan, are also joining the crew and we couldn't be happier.</p>
			<p>We are all a bunch of huge nerds and I have very fond memories of our noisy, crowded family vacations and epic road trips which were only complete with a full retelling of "Who's On First" by Abbott and Costello and listening to the Abba Gold album on cassette tape until it broke! I definitely don't get to see them all as often as I would like, but we keep in touch as much as we can with a sometimes overwhelming amount of WhatsApp messages.</p>
		</div>
		<div class="col-md-4">
<?php insertPhotos("img/sarahfamily"); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<hr/>
		</div>
	</div>

	<div class="row">
		<div class="col-md-8">
			<h3 class="heading-<?php echo $gPageColor; ?>"><strong>Matthew's Family</strong>, by Matthew</h3>
			<p>My immediate family is smaller than Sarah's, but no less awesome. My mom, Marilyn, has been a constant supportive force in the lives of my brother and I, tirelessly working to ensure our success and happiness in everything we do. We will never cease to be amazed by how she did it all. My dad, Wolfgang, has always been there to teach us new things about the great outdoors, how to build or fix anything, and the value of hard work. My dad's wife Carol is kind and always puts in the extra effort to make us welcome in their home.</p>
			<p>My only brother, Anthony, is in a class of his own. When we were kids and I found the existence of a younger brother to be the most intolerable thing in the world my parents would always tell me that someday he would be my best friend. Of all the things they told me would happen, this has been the most true. Through good times and bad, and now across a great distance, Anthony remains my closest and most reliable source of humour and support.</p>
			<p>I have also been supported and loved throughout my life by a large and inclusive extended family, many of whom will be making the trip to San Francisco to join us at the wedding. I can't wait to celebrate with everyone!</p>
		</div>
		<div class="col-md-4">
<?php insertPhotos("img/matthewfamily"); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<hr/>
		</div>
	</div>

	<div class="row">
		<div class="col-md-8">
			<h3 class="heading-<?php echo $gPageColor; ?>"><strong>Kate Marsh</strong>, by Sarah</h3>
			<p>I couldn't be happier that Kate is going to stand up as my witness the day of our marriage. She is a solid rock of support and joy in our lives. She is an amazing artist, a talented cook, and always has fantastic book recommendations. She has been with us through our entire relationship as Matt and I have gotten to know one another, fallen in love, and decided we wanted to spend the rest of our lives together. Kate, you truly are the best!</p>
		</div>
		<div class="col-md-4">
<?php insertPhotos("img/kate", array("lkasjf laskdjf asf", "lksjdf")); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<hr/>
		</div>
	</div>

	<div class="row">
		<div class="col-md-8">
			<h3 class="heading-<?php echo $gPageColor; ?>"><strong>Mike Jutan</strong>, by Matthew</h3>
			<p>I met my "best bro" Mike in Cub Scouts in 1991 in London, Ontario, Canada when we were both 9 years old and we've been close friends ever since. Over the years we've shared many things: Scouting, camping, movies, computers, travel, candy, food, music, and whisky. Mike's family always treated me like an honourary member and my parents did the same with Mike. Despite not going to the same schools, we grew up together and shared everything.</p>
			<p>We both pursued computer science at the University of Waterloo sharing a passion for computer graphics particularly as it applies to film. Straight out of school Mike moved to San Francisco to work at Industrial Light &amp; Magic while I went to work on 3D animation software at Autodesk in Toronto. In 2014 I finally gave in to Mike's badgering and left Toronto to join him on the R&amp;D team at ILM in San Francisco. I'm so happy to be living down the street from one of my oldest and closest friends and it's super fun to be sharing an office with him at work!<p>
			<p>In 2016 I was honoured to be Mike's best man at his wedding in Arizona and I can't imagine anyone else standing up with me as I join my life with Sarah's. We're so happy that Mike and his wife Michal can be a part of our lives!</p>
		</div>
		<div class="col-md-4">
<?php insertPhotos("img/mike", array("lkasjf laskdjf asf", "lksjdf")); ?>
		</div>
	</div>
</div>

<?php
include("foot.html");
?>
