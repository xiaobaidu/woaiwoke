<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><style>
    a:hover{text-decoration:none}
    .navBar {
        height: 65px;
        background: #302e31;
        font-size: 14px;
        text-align: center;
        position: relative;
        z-index: 20;
    }
    .pull-left {
        float: left !important;
    }
    .navBar .pull-left li {
        border-right: solid 1px #373737;
    }
    .navBar li {
        line-height: 65px;
        float: left;
        position: relative;
    }
    .navBar li.active a.nav-menu, .navBar li.active a.nav-menu:hover {
        background: #d42021;
        color: #fff;
    }
    .navBar li .nav-menu {
        width: 110px;
        display: block;
        color: #ececec;
    }
    .container {
        width: 1200px;
        min-width: 1200px;
        margin: 0 auto;
    }
    .navBar .sub-menu {
        position: absolute;
        left: 0;
        top: 65px;
        opacity: .8;
        width: 720px;
        line-height: 38px;
        background: #272528;
        font-size: 12px;
        text-align: left;
        visibility: hidden;
    }
    .navBar li:hover .sub-menu{ visibility:visible;}
    .navBar .sub-menu a{ display:block; color:#cfcfcf;padding-left: 25px;height:38px;transition: padding-left ease .3s;-webkit-transition: padding-left ease .3s;float: left;width: 80px}
    .navBar .sub-menu a:hover{ background:#1E1E1E;color:#fff;padding-left: 35px;border-left: solid 2px #e82929;font-size: 14px;}
    .navBar li .nav-menu{ width:110px; display:block; color:#ececec;}
    .navBar li.active a.nav-menu,.navBar li.active a.nav-menu:hover{ background:#d42021; color:#fff;}
    .navBar li:hover .nav-menu,.navBar .pull-right li a{ background:#272528;color:#d42021;}
    .min-head .nav-menu{ display:block; color:#fff;}
    .min-head li:hover .nav-menu{ background:#272527;color:#d42021}
    .min-head .active .nav-menu,.min-head .active .nav-menu:hvoer{ background:#d42021;color:#fff;}
</style>
<div class="navBar">
    <div class="container">
        <ul class="pull-left">
            <li>
                <a href="/" class="nav-menu">首页</a>
            </li>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
            <?php $n=1; if(is_array($data)) foreach($data AS $k => $r) { ?>
            <li>
                <a href="<?php echo $r['url'];?>" class="nav-menu"><?php echo $r['catname'];?></a>
                <div class="sub-menu">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f90c26483c17bf0b2e5b6e7ae85c5f81&action=category&catid=%24k&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$k,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                    <?php if($v['catname']) { ?>
                        <a href="<?php echo $v['url'];?>" title="<?php echo $r['catname'];?>"><?php echo $v['catname'];?></a>
                    <?php } ?>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>
            </li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            <?php echo runhook('glogal_menu')?>
        </ul>
    </div>
</div>