<?php   
include("templates/header.php");
include("templates/nav.php");
?>
	<link href="css/gallery_css.css" rel="stylesheet">
	<div class="container">
		<!--START JUICEBOX EMBED-->
		<script src="jbcore/juicebox.js"></script>
		<script>
			new juicebox({
			containerId: "juicebox-container",
			galleryWidth: "100%",
			galleryHeight: "1400px",
			backgroundColor: "rgba(0,0,0,0.5)"
			});
		</script>
		<div id="juicebox-container"></div>
		<!--END JUICEBOX EMBED-->
	</div>

<?php
include("templates/footer.php");
