<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>Babylon ONLINE</title>
		
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script type="text/javascript">
			var site_root = '<?= base_url(); ?>';
		</script>
		<?php foreach($js_files as $js_file){ ?>
			<?= $js_file ?>
		<?php } ?>
		
		<link href="http://fonts.googleapis.com/css?family=Questrial:400,700,400italic&subset=latin,latin-ext" rel="stylesheet" type="text/css" />
		<?php foreach($css_files as $css_file){ ?>
			<?= $css_file ?>
		<?php } ?>
	</head>
	<body>
