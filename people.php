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
			<h3 class="heading-<?php echo $gPageColor; ?>"><strong>Kate Marsh</strong></h3>
		</div>
		<div class="col-md-4">
<?php insertPhotos("img/kate", array("lkasjf laskdjf asf", "lksjdf")); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-8">
			<h3 class="heading-<?php echo $gPageColor; ?>"><strong>Mike Jutan</strong></h3>
		</div>
		<div class="col-md-4">
<?php insertPhotos("img/mike", array("lkasjf laskdjf asf", "lksjdf")); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-8">
			<h3 class="heading-<?php echo $gPageColor; ?>"><strong>Sarah's Family</strong></h3>
		</div>
		<div class="col-md-4">
<?php insertPhotos("img/sarahfamily"); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-8">
			<h3 class="heading-<?php echo $gPageColor; ?>"><strong>Matthew's Family</strong></h3>
		</div>
		<div class="col-md-4">
<?php insertPhotos("img/matthewfamily"); ?>
		</div>
	</div>
</div>

<?php
include("foot.html");
?>
