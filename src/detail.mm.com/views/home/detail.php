<?php require_once COMMONPATH.'/views/header.php'?>
<link type="text/css" rel="stylesheet" href="<?=config_item('domain_static').'/detail/css/detail.css'?>"/>
<!--page_container-->
    <div class="page_container">
        <div class="breadcrumb" style="margin-bottom: 0px">
            <div class="wrap">
                <div class="container">
                    <a href="<?=config_item('domain_www')?>">美女图片</a><span>/</span></a><?php foreach ($category as $item):
                        if($item['id'] == $detail['cid']):
                            echo '<a href="'.config_item('domain_list').'/'.$item['id'].'/1">'.$item['name'].'</a>';
                            endif;
                    endforeach;?><span>/</span></span><?php $title = mb_substr($detail['title'],0,mb_strpos($detail['title'],'('));echo mb_substr($title,0,9).'...';?>
                </div>
            </div>
        </div>
        <!--MAIN CONTENT AREA-->
        <div class="wrap">
            <div class="container">
                <div class="row pad25">
                    <div class="span12">
                        <div class="myimg">
                            <div id="portfolio_carousel" class="carousel slide">
                                <div class="carousel-inner">
                                <?php
                                $imgs = json_decode($detail['img'],true);
                                if(!empty($imgs) && is_array($imgs)){ for ($i=0;$i<count($imgs);$i++){
                                ?>
                                    <div class="item <?php if($i==0){ echo 'active'; }?>">
                                        <img  src="<?php echo config_item('domain_img').'/'.$imgs[$i]?>"  alt="<?php echo $title; ?>" />
                                    </div>
                                <?php } }?>
                                </div>
                                <a class="left carousel-control" href="#portfolio_carousel" data-slide="prev"></a>
                                <a class="right carousel-control" href="#portfolio_carousel" data-slide="next"></a>
                            </div>
                            <!-- 分页 -->
                        </div>
                        <div class="myimg recommand foot-text">
                            <div style="margin: 3px 0">
                                <div class="span5" style="float: left;text-align: left">
                                    <a href="<?=config_item('domain_detail').'/'.$recommand[0]['id']?>"><?php echo mb_substr($recommand[0]['title'],0,mb_strlen($recommand[0]['title'])-4); ?></a>
                                </div>
                                <div class="span5" style="float: right;text-align: right">
                                    <a href="<?=config_item('domain_detail').'/'.$recommand[1]['id']?>"><?php echo mb_substr($recommand[1]['title'],0,mb_strlen($recommand[1]['title'])-4); ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="myimg recommand">
                            <?php for($i=2;$i<8;$i++): $imgs = json_decode($recommand[$i]['img'],true); ?>
                            <span>
                                <a href="<?=config_item('domain_detail').'/'.$recommand[$i]['id']?>">
                                <img  src="<?php echo config_item('domain_img').'/'.$imgs[0].'_175x262.jpg'; ?>"  alt="<?php echo mb_substr($recommand[$i]['title'],0,mb_strlen($recommand[$i]['title']) - 4); ?>" />
                                </a>
                            </span>
                            <?php  endfor;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--//MAIN CONTENT AREA-->
    </div>
<!--//page_container-->
<?php require_once COMMONPATH.'/views/footer.php'?>