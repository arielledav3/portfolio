<!DOCTYPE html>

<head>
<title>Arielle Davenport-Designer/Developer</title>
<style>
	.bg {position:absolute; min-height: 100%; width:100%;z-index:0;}
	.ibg-bg {position: absolute;}
	.wrapper {height: auto; height: 100%; margin: 0 auto; overflow: hidden;}
	.main{height:600px; width:1000px; background-color: #ffffff; opacity: 0.3; filter: alpha(opacity=30);
	 margin: 50px 200px auto;}
	 .head{height:50px; width:1300px; background-color: #000000; color:#ffffff;
	 margin: 0px auto;}
	 #container{position:relative; margin: 150px 100px; height:370px; width:1500px; background-color: #ffffff; 
	 opacity: 0.7; filter: alpha(opacity=70);}
	 h1{color:#ffffff;}
	 #bottom{position:fixed; bottom: 0px; background-color: #303030; width: 100%; height: 100px;}
	 body{height:100%, width:100%;}
	 
}

</style>
<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-2.2.3.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.interactive_bg.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.photoset-grid.js"); ?>"></script>

<script>

$(document).ready(function(){
	$(".bg").interactive_bg({
	strength: 25,
	scale: 1.05,
	animationSpeed: "100ms",
	contain: true,
	wrapContent: false
	});
 });
 
</script>
</head>

<body>
<div class="bg" data-ibg-bg="<?php echo base_url("assets/images/tower.jpg"); ?>">
<div class="navbar-wrapper">
<div class="container">
<nav class="navbar navbar-inverse navbar-static-top">
<div class="container">
<div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
        </button>
<div id="navbar" class="navbar-collapse collapse">
<ul id ="navbar" class="nav navbar-nav">
	
			<li><a href="<?= site_url('Welcome/') ?>" class="navbar-brand"><span class="glyphicon glyphicon-home"></span></a></li>
			<li><a href="<?= site_url('Design/') ?>" class="navbar-brand">Design</a></li>
			<li><a href="<?= site_url('Project/') ?>" class="navbar-brand">Projects</a></li>
			<li><a href="<?= site_url('Resume/') ?>" class="navbar-brand">Skills/Resume</a></li>
			<li><a href="<?= site_url('Blog/') ?>" class="navbar-brand">Blog</a></li>
		</ul>
	</div>
	</div>
</nav>
</div>
</div>


	