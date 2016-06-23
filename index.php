<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<title>LUI - Less UI</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1" />


	<?php if(0){ ?>
		<link rel="stylesheet/less" href="/demo.less" />
		<script>
			less = {
				env: "development",
				async: false,
				fileAsync: false,
				poll: 1000,
				functions: {},
				dumpLineNumbers: "comments",
				relativeUrls: false
			};
		</script>
		<script src="/lui/js/less/less.min.js" type="text/javascript"></script>
	<?php } else { ?>
		<!-- COMPILED STYLES -->
		<link rel="stylesheet" href="/demo.css" />
	<?php } ?>

	<script src="/lui/js/jquery/jquery-2.2.0.min.js"></script>
	<script src="/lui/js/jquery/jquery-ui.js"></script>
	<script src="/lui/js/jquery/ui/ui.js"></script>

	<script src="/js/flexibility/flexibility.min.js"></script>
</head>
<body>

	<section class="demo_header">
		<header>
			LUI<span>Less UI</span>
			<a class="github" href="https://github.com/wUFr/LUI" target="_blank">Follow project on GitHub</a>
			<a class="home" href="//<?php echo $_SERVER['SERVER_NAME']; ?>">Home</a>
		</header>
		
	</section>

	
	<section class="container max_xl demo_content">
		<div class="row">
			<div class="col-12">
				<?php
					//print_r(preg_match('/[^A-Za-z0-9#\\-_]/', $_GET["page"]));
					if(isset($_GET["page"]) AND !preg_match('/[^A-Za-z0-9#\\-_]/', $_GET["page"])){
						$page = stripslashes(str_replace('/','',$_GET["page"]));
						include("demos/".$page.".php");
					}
					else {
						include("demos/homepage.php");
					}
				?>
			</div>
		</div>
	</section>
</body>
</html>