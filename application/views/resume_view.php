<?php include_once('header.php'); ?>
	<div id="editor">
		<a href="<?php echo base_url("assets/images/resume.pdf"); ?>" download="arielle_davenport_resume" type="button" class="btn btn-primary" data-dismiss="modal">Download Resume</a>
	</div>
	
	<div class="text-center pdfdoc" style="width:1100; height:800px;">
		<object data="<?php echo base_url("assets/images/resume.pdf"); ?>" type="application/pdf" width="100%" height="800px" id="res">
		<!-- support for older browsers -->
		<embed src="<?php echo base_url("assets/images/resume.pdf"); ?>" type="application/pdf" width="100%" height="800px" id="res"/>
		<!-- for those without native support, no pdf plugin or javascript  -->
		<p> It appears you do not have PDF support in this web browser</p>
	</object>
	</div>

<?php include_once('footer.php'); ?>
<style>
#res{position:relative; z-index:100;}
.btn-primary{position:relative; z-index:100;}
</style>
