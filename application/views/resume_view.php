<?php include_once('header.php'); ?>
	<div class="text-center">
	<object data="<?php echo base_url("assets/images/resume.pdf"); ?>" type="application/pdf" width="100%" height="500" id="res">
		<!-- support for older browsers -->
		<embed src="<?php echo base_url("assets/images/resume.pdf"); ?>" type="application/pdf" width="100%" height="500" id="res"/>
		<!-- for those without native support, no pdf plugin or javascript  -->
		<p> It appears you do not have PDF support in this web browser</p>
	</object>
	</div>

<?php include_once('footer.php'); ?>
<style>
#res{position:relative; z-index:100;}
</style>