<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
<script type="text/javascript">
$(function(){
	$(".picbig").each(function(i){
		var cur = $(this).find('.img-wrap').eq(0);
		var w = cur.width();
		var h = cur.height();
	   $(this).find('.img-wrap img').LoadImage(true, w, h,'<?php echo IMG_PATH;?>msg_img/loading.gif');
	});
})
</script>

<div class="footer">
	<div class="bar">
		<div class="container">
			<div class="row">
				<div class="col-xs-7">东易日盛 家装行业上市公司，专注家装19年！专业服务，值得信赖</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row footbox">
			<div class="col-xs-2" style="width: 15%;">
				<dl>
					<dt><a href="/about/introduction" target="_blank">关注我们</a></dt>
					<dd>
						<ul>
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e3d146232857be4579899ac97dbd2f7c&action=category&catid=1&num=15&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'1','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'15',));}?>
							<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
							<li><a href="<?php echo $r['url'];?> target="_blank"><?php echo $r['catname'];?></a></li>
							<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						</ul>
					</dd>
				</dl>
			</div>
			<div class="col-xs-2" style="width: 15%;">
				<dl>
					<dt><a href="/service/reservation/t2" target="_blank">装修服务</a></dt>
					<dd>
						<ul>
							<li><a href="javascript:;" onclick="doyoo.util.openChat('g=10059956');return false;" rel="nofollow">在线预约</a></li>
							<li><a href="/service/reservation/t1" target="_blank">免费家装报价</a></li>
							<li><a href="/service/reservation/t2" target="_blank">免费户型规划</a></li>
							<li><a href="/activity/col1" target="_blank">团装优惠</a></li>
						</ul>
					</dd>
				</dl>
			</div>
			<div class="col-xs-2" style="width: 15%;">
				<dl style="margin-right: 50px;">
					<dt><a href="#" target="_blank" rel="nofollow">在线商城</a></dt>
					<dd>
						<ul>
							<li><a href="#" target="_blank" rel="nofollow">天猫旗舰店</a></li>
							<li><a href="#" target="_blank" rel="nofollow">京东旗舰店</a></li>
						</ul>
					</dd>
				</dl>
			</div>
			<div class="col-xs-4" style="width: 30%;">
				<dl style="margin-right: 5px;border: 0;">
					<dd><b>家装咨询</b>：400-6600-598</dd>
					<dd><b>投诉建议</b>：010-58637617</dd>
					<dd><b>媒体合作</b>：010-58637779</dd>
					<dd><b>公司地址</b>：北京市朝阳区东大桥路尚都国际大厦3层310</dd>
					<dd><a href="/store/storemap" target="_blank">查看店面地址&gt;&gt;</a></dd>
				</dl>
			</div>
			<div class="col-xs-2" style="width: 25%;">
				<div class="row" style="margin-left:20px;width:100%">
				</div>
			</div>
		</div>
	</div>
	<div class="copyright text-center">
		<p class="p2">东易愿景：成为最受尊敬的卓越的住宅装饰品牌运营商。<br>
			©Copyright <?php echo tjcode();?><?php echo runhook('glogal_footer')?> 版权所有 京ICP备11009231号</p>
	</div>
</div>

</body>
</html>