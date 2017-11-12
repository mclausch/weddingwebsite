<?php
global $gTitle;
global $gPageColor;

$gTitle = "Engagement Photos";
$gPageColor = "secondary";

function insertEngagementPhotos()
{
	$directory = 'img/engagement';
	$photos = scandir($directory);
	$numFiles = count($photos);
	if ($numFiles <= 0)
	{
		return;
	}

	$tabs = "\t\t\t\t\t\t";
	for ($i=0; $i<$numFiles; $i++)
	{
		$photo = "$directory/$photos[$i]";
		$fullPhoto = "$directory/full/$photos[$i]";
		if (is_file($photo))
		{
			echo "$tabs<div class=\"masonry-item\">\n";
			echo "$tabs\t<a class=\"lightbox\" href=\"$fullPhoto\">\n";
			echo "$tabs\t\t<span class=\"thumb-info thumb-info-no-borders\">\n";
			echo "$tabs\t\t\t<span class=\"thumb-info-wrapper\">\n";
			echo "$tabs\t\t\t\t<img src=\"$photo\" class=\"img-responsive\" alt=\"\">\n";
			echo "$tabs\t\t\t</span>\n";
			echo "$tabs\t\t</span>\n";
			echo "$tabs\t</a>\n";
			echo "$tabs</div>\n";
		}
	}
}

include("head.html");
?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<p>In October 2017 we took engagement photos at <a class="body-link" href="https://en.wikipedia.org/wiki/Lands_End_(San_Francisco)" target="_blank">Lands End</a> with our super talented wedding photographer, <a class="body-link" href="http://www.harberphotography.com/" target="_blank">Gabriel Harber</a>. We had a blast and are so happy to be working with Gabriel to capture our wedding! We also recommend Lands End as a great place to see while you're visiting San Francisco.</p>
			<hr/>
			<div class="lightbox mb-lg" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
				<div class="masonry-loader masonry-loader-showing">
					<div class="masonry" data-plugin-masonry data-plugin-options="{'itemSelector': '.masonry-item'}">
<?php insertEngagementPhotos() ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
include("foot.html");
?>
