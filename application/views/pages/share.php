<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	
	<!-- meta tags for share twitter -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@sakukode">
	<meta name="twitter:creator" content="@sakukode">
	<meta name="twitter:title" content="Codeigniter Share Socmed Helper">
	<meta name="twitter:description" content="This is Demo Codeigniter Share Social Media Helper">
	<meta name="twitter:image" content="<?php echo base_url('img/demo-photo-1.png');?>">
	<meta name="twitter:domain" content="<?php echo site_url();?>">

	<!-- meta tags for share facebook -->
	<meta property="og:title" content="Codeigniter Share Socmed Helper" data-dynamic="true">
	<meta property="og:site_name" content="Rizqi Maulana Blog" data-dynamic="true">
	<meta property="og:url" content="<?php echo site_url('tutorial/share');?>" data-dynamic="true">
	<meta property="og:description" content="This is Demo Codeigniter Share Social Media Helper" data-dynamic="true">
	<meta property="og:image" content="<?php echo base_url('img/demo-photo-1.png');?>" data-dynamic="true">
	<meta property="og:image:width" content="600" data-dynamic="true">
	<meta property="og:image:height" content="315" data-dynamic="true">
	<meta property="og:image:type" content="image/png" data-dynamic="true">
	<meta property="fb:app_id" content="237152040017888" data-dynamic="true">

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	.btn {
		padding: 3px;
		color: #ffffff;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Demo Button Share to Social Media</h1>

	<div id="body">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

		<p>
			<a style="background: #3b5999;" class="btn" href="#" onClick="<?php echo $share_fb;?>">Share Facebook</a>
			<a style="background: #1da1f3;" class="btn" href="#" onClick="<?php echo $share_twitter;?>">Share Twitter</a>
			<a style="background: #dc4e41;" class="btn" href="#" onClick="<?php echo $share_gplus;?>">Share Google+</a>
		</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>