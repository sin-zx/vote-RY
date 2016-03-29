<div class="content row-fluid">
	<span><a href="<?php echo site_url('ry') ?>">【返回首页】</a></span>
	<h1 class="title"><?php echo $detail->title ?></h1>
	<div class="main">
		

		<h3>作品编号: <?php echo $detail->no ?> </h3>
		<h3>已有票数：<?php echo $detail->poll ?>	</h3>
		<a href="<?php echo site_url('ry/vote'.'/'.$detail->no.'/'.$xuehao) ?>"><button class="btn btn-danger" type="button">投它一票</button></a>
		<br> 
		<h3>方案简介：</h3>
		<div class="intro"><?php echo $detail->intro ?></div>
		<br>
		<h3>方案文档下载: <a href="<?php echo base_url('data/files'.'/'.$detail->no.'/'.$detail->filename) ?>"><?php echo $detail->title ?></a></h3>
		<br><br>
		<h3>图文详情：</h3>
		<div class="img"><img src="<?php echo base_url('data/files'.'/'.$detail->no.'/'.$detail->imgname) ?>" alt="图文详情" class="img-responsive img-rounded"></div>
		<br><br>
	</div>
</div>
</body>
</html>