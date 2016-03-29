<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href=<?php echo base_url('css/bootstrap.min.css') ?>>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css') ?>">
	<title>荔园文化-睿言提案</title>
</head>
<body>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<a href="<?php echo site_url(); ?>">
			<div class="head">
			<h1>
				睿言提案网上投票
			</h1>
			</div>
			</a>
			<ul class="nav nav-tabs" id="nav">
				<li>
					<a href="/index.php/ry/>首页</a>
				</li>
				<li>
					<a href="/index.php/ry/info">活动介绍</a>
				</li>
				<li>
					<a href="/index.php/ry/contact">联系我们</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="content row-fluid">
		<?php echo $data ?>
	</div>
</div>
</body>
</html>