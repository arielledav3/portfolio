<?php include_once('header.php'); ?>
	<div id="editor">
		<a href="<?php echo base_url("assets/images/resume.pdf"); ?>" download="arielle_davenport_resume" type="button" class="btn btn-primary" data-dismiss="modal">Download Resume</a>
	</div>
	<div class="text-center pdfdoc">
	<iframe src='<?php echo base_url("assets/images/resume.pdf"); ?>' width='1100' height='850' frameborder='1' scrolling="auto" >
	</iframe>
	</div>

<?php include_once('footer.php'); ?>
<style>
#res{position:relative; z-index:100;}
.btn-primary{position:relative; z-index:100;}
</style>
