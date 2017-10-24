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
			<h3 class="heading-<?php echo $gPageColor; ?>"><strong>Sarah</strong></h3>
			<p>Nice text written by Matt</p>
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
			<h3 class="heading-<?php echo $gPageColor; ?>"><strong>Matthew</strong></h3>
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
