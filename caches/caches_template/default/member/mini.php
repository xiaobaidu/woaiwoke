<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><style>
.log{ height:38px;float:right; font-size:12px}
.log span{color:#666}
.log a{color:#666;text-decoration: none;font: 12px/1.5 微软雅黑;}
.log .snda{ position:relative; bottom:-3px}
.log .upv_btn{height: 24px; padding-left: 14px; position: relative; background:url(<?php echo IMG_PATH;?>up_btn.gif) no-repeat 0px 0px; margin-left:0px; margin-right:10px; *background-position:0px 5px;}
.log .r{float:right;}
</style>
<body style="background-color:transparent">
<div class="log w27">
    <?php if($_username) { ?> <a href="<?php echo APP_PATH;?>index.php?m=member&siteid=<?php echo $siteid;?>" target="_blank"><?php echo get_nickname();?></a>
    <a href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=logout&forward=<?php echo urlencode($_GET['forward']);?>&siteid=<?php echo $siteid;?>" target="_top"><?php echo L('logout');?></a>
    <?php } else { ?>
    <span class="r">
        <a href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=register&siteid=<?php echo $siteid;?>" target="_blank"><?php echo L('register');?></a> <span>|</span>
        <a href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=login&forward=<?php echo urlencode($_GET['forward']);?>&siteid=<?php echo $siteid;?>" target="_top"><?php echo L('login');?></a>
    </span>
<?php } ?></div>
</body>