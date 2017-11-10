<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $page_title; ?>-<?php echo SITE_NAME.'&nbsp;www.h3hq.com'; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="漂亮mm,mm图片,美女,妹子,妹纸,美女图片,美女相册,美女写真">
    <meta name="description" content="喝水网美女图片，收集精美的美女图片，包括性感美女相册，高校校花美女图册，旗袍美女明星写真等各类更新好看的热门美女图片。">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/ico" href="<?=config_item('domain_static')?>/common/img/favicon.ico">
    <link href='<?php echo config_item('domain_static').'/common/fonts.css'; ?>' rel='stylesheet' type='text/css'>

    <link href="<?php echo config_item('domain_static');?>/common/css/prettyPhoto.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" id="camera-css"  href="<?php echo config_item('domain_static');?>/common/css/camera.css" type="text/css" media="all">
    <link href="<?php echo config_item('domain_static');?>/common/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo config_item('domain_static');?>/common/css/theme.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo config_item('domain_static');?>/common/css/skins/tango/skin.css" />
    <link href="<?php echo config_item('domain_static');?>/common/css/bootstrap-responsive.css" rel="stylesheet">

</head>
<body>
<!--header-->
<div class="header">
    <div class="wrap">
        <div class="navbar navbar_ clearfix">
            <div class="container">
                <div class="row">
                    <div class="span4">
                        <div class="logo"><a href="<?=config_item('domain_www');?>"><img src="<?php echo config_item('domain_static');?>/common/img/logo.png" alt="" /></a></div>
                    </div>
                    <div class="span8">
                        <div class="clear"></div>
                        <nav id="main_menu">
                            <div class="menu_wrap">
                                <ul class="nav sf-menu">
                                    <li <?php if(intval($this->uri->segment(1)) == 0 ) echo 'class="current"'; ?> ><a href="<?=config_item('domain_www')?>">首页</a></li>
                                    <?php if(!empty($category) && is_array($category) ):foreach($category as $key=>$value):?>

                                        <li <?php if ($this->uri->segment(1) == $value['id']) echo 'class="current"'; ?>><a href="<?php echo config_item('domain_list').'/'.$value['id'].'/1';?>" ><?=$value['name']?></a></li>
                                    <?php endforeach;endif;?>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//header-->