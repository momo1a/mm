<?php require_once COMMONPATH.'/views/header.php'?>
<style>
    #more {float: right;font-size: 18px}
</style>
<!--page_container-->
<div class="page_container">
    <!--slider-->
    <div id="main_slider">
        <div class="camera_wrap" id="camera_wrap_1">
            <div data-src="<?php echo config_item('domain_static');?>/common/img/slider/1.jpg"></div>
            <div data-src="<?php echo config_item('domain_static');?>/common/img/slider/2.jpg"></div>
            <div data-src="<?php echo config_item('domain_static');?>/common/img/slider/3.jpg"></div>
        </div><!-- #camera_wrap_1 -->
        <div class="clear"></div>
    </div>
    <!--//slider-->

    <!--Welcome-->
    <div class="wrap block">
        <div class="container welcome_block">
            <div class="welcome_line welcome_t"></div>
            生活的美无处不在，你敢于展示自己吗?<span>美丽无罪 &amp; 欢迎您来到<?=SITE_NAME?>!</span>
            <div class="welcome_line welcome_b"></div>
        </div>
    </div>
    <!--//Welcome-->

<!--latest posts-->
    <div class="wrap block carousel_block">
    <?php if(!empty($category)):foreach($category as $key=>$value):?>
    <div class="container">
        <h2 class="upper" style="color: rgb(<?=rand(0,255)?>,<?=rand(0,255)?>,<?=rand(0,255)?>);"><?=$value['name']?><span id="more"><a href="<?=config_item('domain_list').'/'.$value['id'].'/1'?>">更多&gt;&gt;&gt;</a></span></h2>
        <div class="row">
            <div class="span12">
                <ul id="mycarousel2" class="jcarousel-skin-tango">
                <?php foreach($list as $val):if($val['cid'] == $value['id']): ?>
                    <li>
                        <div class="post_carousel">
                            <a href="<?=config_item('domain_detail').'/'.$val['id']?>" target="_blank"><img src="<?=config_item('domain_img')?>/<?php $imgs = json_decode($val['img'],true); echo $imgs[0];?>" alt="<?php  $title = mb_substr($val['title'],0,mb_strpos($val['title'],'(')); echo $title; ?>" /></a>
                            <div class="title_t"><a href="<?=config_item('domain_detail').'/'.$val['id']?>" target="_blank"><?=mb_substr($title,0,13).'..'?></a></div>
                        </div>
                    </li>
                <?php endif;endforeach; ?>
                </ul>

            </div>
        </div>
    </div>

    <?php endforeach; endif; ?>
    </div>
    <!--//latest posts-->
</div>
<!--//page_container-->

<?php require_once COMMONPATH.'/views/footer.php'?>