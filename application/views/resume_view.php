<?php include_once('header.php'); ?>
	<object data="<?php echo base_url("assets/images/resume.pdf"); ?>" type="application/pdf" width="1200" height="500" id="res">
		<!-- support for older browsers -->
		<embed src="<?php echo base_url("assets/images/resume.pdf"); ?>" type="application/pdf" width="1200" height="500" id="res"/>
		<!-- for those without native support, no pdf plugin or javascript  -->
		<p> It appears you do not have PDF support in this web browser</p>
	</object>

<?php include_once('footer.php'); ?>
<style>
#res{position:relative; z-index:100;margin-left:100px;}
</style>