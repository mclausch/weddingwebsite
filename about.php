<?php
global $gTitle;
global $gPageColor;

$gTitle = "About Us";
$gPageColor = "secondary";
include("head.html")
?>

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h3 class="heading-<?php echo $gPageColor; ?>"><strong>Sarah</strong> and <strong>Matthew</strong></h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Nullam convallis, arcu vel pellentesque sodales, nisi est varius diam, ac ultrices sem ante quis sem. Proin ultricies volutpat sapien, nec scelerisque ligula mollis lobortis.</p>
			<p>Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing <span class="alternative-font">metus</span> sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula.</p>
			<!--
			<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			-->
		</div>
		<div class="col-md-4">
			<div class="owl-carousel owl-theme" data-plugin-options="{'items': 1, 'margin': 10}">
				<div>
					<span class="img-thumbnail">
						<img alt="" height="300" class="img-responsive" src="img/sarah.jpg">
					</span>
				</div>
				<div>
					<span class="img-thumbnail">
						<img alt="" height="300" class="img-responsive" src="img/matthew.jpg">
					</span>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
include("foot.html");
?>
