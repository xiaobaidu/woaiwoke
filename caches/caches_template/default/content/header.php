<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=7" />
	<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
	<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
	<meta name="description" content="<?php echo $SEO['description'];?>">
	<link href="<?php echo CSS_PATH;?>reset.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo CSS_PATH;?>default_blue.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.sgallery.js"></script>
	<script type="text/javascript" src="<?php echo JS_PATH;?>search_common.js"></script>
</head>
<body>
<div class="topbar">
	<div class="container">
		<div class="row">
			<div class="col-xs-7 mission">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2e3bec5eab254972ef7678fb28fb15b9&action=position&posid=9&order=id&num=10&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('posid'=>'9','order'=>'id',)).'2e3bec5eab254972ef7678fb28fb15b9');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'9','order'=>'id','limit'=>'10',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
				<div id="announ">
					<ul>
						<?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>
						<li><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a></li>
						<?php $n++;}unset($n); ?>
					</ul>
				</div>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				<?php echo runhook('glogal_header')?>
				<script type="text/javascript">
					$(function(){
						startmarquee('announ',38,1,500,3000);
					})
				</script>
			</div>
			<div class="col-xs-3 text-right" id="js-head">
				<script type="text/javascript">document.write('<iframe src="<?php echo APP_PATH;?>index.php?m=member&c=index&a=mini&forward='+encodeURIComponent(location.href)+'&siteid=<?php echo get_siteid();?>" allowTransparency="true" height="38" frameborder="0" scrolling="no"></iframe>')</script>

			</div>
		</div>
	</div>
</div>
<div class="header">

	<style>
		#search_case {
			margin-left: 130px !important;
			vertical-align: middle;
			width: 460px;
			height: 32px;
			float: right;
			border: 2px #d42021 solid;
			border-right: 0;
			background: #fff;
			position: relative;
			margin-top: 17px;
		}
		#search_case .key {
			width: 350px;
			height: 32px;
			line-height: 32px;
			border: 0;
			outline: none;
			padding-left: 12px;
			color: #bbb;
			float: left;
		}
		form .submit {
			width: 80px;
			float: right;
			text-align: center;
			color: #fff;
			line-height: 32px;
			border: 0;
			cursor: pointer;
			outline: none;
			background: #d42021;
			height: 32px;
			font-size: 14px;
		}
	</style>
	<div style="width: 1200px;margin:0 auto; text-align: left">
		<div class="logo"><a href="<?php echo siteurl($siteid);?>/"><img src="<?php echo IMG_PATH;?>v9/logo.jpg" /></a></div>
		<div id="search_case">
			<form id="" method="get" action="<?php echo APP_PATH;?>index.php" target="_blank">
				<input type="hidden" name="searchType" value="1" id="searchType">
				<input type="hidden" name="m" value="search"/>
				<input type="hidden" name="c" value="index"/>
				<input type="hidden" name="a" value="init"/>
				<input type="hidden" name="typeid" value="<?php echo $typeid;?>" id="typeid"/>
				<input type="hidden" name="siteid" value="<?php echo $siteid;?>" id="siteid"/>
				<input type="text" placeholder="请输入搜索关键词" class="key"  name="q" id="q">
				<input type="submit" value="搜索" class="submit"></form>
		</div>
	</div>

	<!--<div class="logo"><a href="<?php echo siteurl($siteid);?>/"><img src="<?php echo IMG_PATH;?>v9/logo.jpg" /></a></div>

    <div class="search">
    	<div class="tab" id="search">
			<?php $j=0?>
			<?php $search_model = getcache('search_model_'.$siteid, 'search');?>
			<?php $n=1;if(is_array($search_model)) foreach($search_model AS $k=>$v) { ?>
			<?php $j++;?>
				<a href="javascript:;" onclick="setmodel(<?php echo $v['typeid'];?>, $(this));" style="outline:medium none;" hidefocus="true" <?php if($j==1 && $typeid=$v['typeid']) { ?> class="on" <?php } ?>><?php echo $v['name'];?></a><?php if($j != count($search_model)) { ?><span> | </span><?php } ?>
			<?php $n++;}unset($n); ?>
			<?php unset($j);?>
		</div>

        <div class="bd">
            <form action="<?php echo APP_PATH;?>index.php" method="get" target="_blank">
				<input type="hidden" name="m" value="search"/>
				<input type="hidden" name="c" value="index"/>
				<input type="hidden" name="a" value="init"/>
				<input type="hidden" name="typeid" value="<?php echo $typeid;?>" id="typeid"/>
				<input type="hidden" name="siteid" value="<?php echo $siteid;?>" id="siteid"/>
                <input type="text" class="text" name="q" id="q"/><input type="submit" value="搜 索" class="button" />
            </form>
        </div>
    </div>-->

	<div class="banner"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=1"></script></div>
	<div class="bk3"></div>
	<?php include template('public', 'navbar'); ?>

</div>
</div>