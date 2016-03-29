	    <div class="jumpmenu">
	    	<h3>你的剩余投票次数为：<span style="color:#A52A2A"><?php echo 3-$times ?></span> </h3>
	    	<h3>已选方案编号：<span style="color:#A52A2A"><?php foreach ($chose as $value) {
	    			echo $value.' ';
	    		} ?></span> </h3>

	    	<br>
	    	<h4>每个学号有3次投票机会，<span style="color:#FF0000">每个方案只能投一次票</span>。详情请查看上方的<span style='color:#FF0000'>活动说明</span></h4>
	    	<h4>首页项目显示顺序会随机轮换</h4>
	    	<h4>正式投票时间为<span style="color:#FF0000">4.25 周六中午12:30~4.27周一中午12:30</span>，此前测试投票的数据都会清零</h4>
	    	<h4>如果发现有作品信息不完整或者无法投票等情况请及时联系我们</h4>
	    	<h4>投票结束后会更新票数统计，请点击上方"<span style="color:#FF0000">统计排行</span>"查看</h4>
	    	<p>
	    		联系方式：

 				纪同学 15994755635/665635  QQ 474754355

 				梁同学 13728884117 684117  QQ 673257439
	    	</p>
	    	<p>网络票选的分数占初赛总分的3成。睿言奖的初衷是为学校方方面面的建设提出意见和建议，让校园变得更好。希望大家可以仔细看看选手们的方案，对自己喜欢的觉得有意义的方案投上宝贵的一票。</p>
	    	
	    	
			<br>
		<span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
		<div class="btn-group">
		  <a href="<?php echo site_url('/ry/index/1') ?>"><button type="button" class="btn btn-default <?php echo $n1 ?>">教学研究(1-6)</button></a>

		  <a href="<?php echo site_url('/ry/index/2') ?>"><button type="button" class="btn btn-default <?php echo $n2 ?>">荔园文化(7-15)</button></a>

		  <a href="<?php echo site_url('/ry/index/3') ?>"><button type="button" class="btn btn-default <?php echo $n3 ?>">校园服务(16-40)</button></a>

		  <a href="<?php echo site_url('/ry/index/4') ?>"><button type="button" class="btn btn-default <?php echo $n4 ?>">基础设施(41-57)</button></a>

		  <a href="<?php echo site_url('/ry/index/5') ?>"><button type="button" class="btn btn-default <?php echo $n5 ?>">制度建设(58-73)</button></a>

		</div>
	<div class="border"></div>
	<!--内容列表-->
	<div class="row-fluid list">
		    <?php
		   foreach ($items as $item) {
		   
		    ?>
		        <div class="item">

					<a href="<?php echo site_url('ry/detail'.'/'.$item->no) ?>"><img alt="缩略图" src="<?php echo base_url('data/files').'/'.$item->no.'/'.$item->imgname ?>" class="img-thumbnail"/></a> <br>
					<h4><a href="<?php echo site_url('ry/detail'.'/'.$item->no) ?>">< <?php echo $item->no ?> ><?php echo $item->title?></a></h4>
					<p>&nbsp;票数：<?php echo $item->poll ?></p>
					<!--<a href="" onclick="wait();return false;"><button class="btn btn-danger" type="button" id="mybtn">点此投票</button></a>-->
					<a href="<?php echo site_url('ry/vote'.'/'.$item->no.'/'.$xuehao) ?>"><button class="btn btn-danger" type="button" id="mybtn">点此投票</button></a>
				</div>
			<?php
		    }
		    ?>
			<br>
	</div>

	<script type="text/javascript">
	function wait(){

		alert("投票尚未开始，请等待活动通知！");
		//alert("投票已结束，感谢您的参与");
	}
	function confirm(){
    		if(confirm("点击确定后无法更改，确认投给该方案？")){
  
        		return true;
     		}
	}
	</script>