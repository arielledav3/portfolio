
<?php include('header.php'); ?>

	<img src="<?php echo base_url("assets/images/portfoliopic.png"); ?>" alt="portfolio" align="left" id="portpic"/>
	
	<div id="container" >
		<h1>Welcome To My Portfolio</h1>
		<br/>
		<br/>
		<br/>
		<blockquote>
		<p>Welcome to the adventures of a recent college graduate. My name is Arielle ,and I recently received
		my Bachelor's of Science in Computer Science from DePaul University. I am currently looking for 
		employment in web development, app development, and software development. Currently, I
		know Java, Ruby on Rails, PHP, JQuery, JavaScript, HTML/CSS as programming languages go.
		While all of this is going on I do quite a bit of traveling, reading, and all around 
		experiencing new things except love. Anyways I work hard and when I can a play some too. 
		This site is and will be a collection of my work over the years. Thanks for visiting.
		
		<br/> 
		</p>
		<p id="test">- Arielle </p>
		</blockquote>
	</div>

<?php include('footer.php'); ?>
<style>
	#portpic{float: right; position:relative; z-index:100; height: 350px; width: 275px; margin: 125px 0px;}
	blockquote{margin-bottom: 10px;}
	#test{text-indent: 50px;}
</style>