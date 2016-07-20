<?php include_once('header.php'); ?>
		<div id="carousel-example-generic" class="carousel slide container" data-ride="carousel">
		  <!-- Indicators -->
		  <!--<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  </ol>-->

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
			<div class="item active">
			  <a href="https://github.com/arielledav3/Contact-Book-in-PhP.git" target="_blank">
			  <img class="img-responsive" src="<?php echo base_url("assets/images/contacts.png"); ?>" alt="">
			  </a>
			  <div class="carousel-caption">
				<h3>Contact Book(Php, JavaScript, JQuery, HTML, CSS)</h3>
				<p>A contact book where a user can login, add contacts, update contacts, delete contacts,create contact groups.</p>
			  </div>
			</div>
			<div class="item">
			  <a href="https://github.com/arielledav3/Find-My-Buddy.git" target="_blank">
			  <img class="img-horz" src="<?php echo base_url("assets/images/app.png"); ?>" alt="">
			  </a>
			  <div class="carousel-caption">
				<h3>Find My Buddy(Android App)</h3>
				<p>A way for future owners to find a pet. They can take a personality quiz and it matches them to an animal at a no-kill shelter in their area.</p>
			  </div>
			</div>
			<div class="item">
			   <a href="https://github.com/arielledav3/jobs4u.com.git" target="_blank">
			 	<img class="img-responsive" src="<?php echo base_url("assets/images/jobs4youimg.png"); ?>" alt="">
			 	</a>
			  <div class="carousel-caption">
				<h3>Jobs 4 You(Ruby on Rails, JQuery, JavaScript, HTML, CSS)</h3>
				<p>A website for companies and job seekers where they are matched based on personality quiz.</p>
			  </div>
			</div>
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>

<?php include_once('footer.php'); ?>

<style>
	.carousel{width:800px; height:500px; margin-top:-20px}
	.img-horz{width:300px; height:350px; text-align:center;}
	.carousel-caption {position: relative;left: auto; right: auto; background-color:#000000}
	.carousel-indicators { bottom:40px;}
	.carousel-indicators li{border-radius: 0}
</style>
	

