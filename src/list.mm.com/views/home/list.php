<?php require_once COMMONPATH.'/views/header.php'?>
    <link rel="stylesheet" type="text/css" href="<?php echo config_item('domain_static').'/list/css/list.css'?>"/>
    <div class="page_container">
        <div class="wrap block carousel_block">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <?php for($i=0,$j=0;$i<4,$j<count($list);$i++){ ?>
                        <ul id="mycarousel2" class="jcarousel-skin-tango">
                            <?php for($n=0; $n<4; $n++,$j++){ ?>
                                <?php if($j==count($list)) break;?>
                                <li>
                                    <div class="post_carousel">
                                        <a href="<?=config_item('domain_detail').'/'.$list[$j]['id']?>" target="_blank"><img src="<?=config_item('domain_img')?>/<?php $imgs = json_decode($list[$j]['img'],true); echo $imgs[0].'_270x400.jpg';?>" alt="<?php  $title = mb_substr($list[$j]['title'],0,mb_strpos($list[$j]['title'],'(')); echo $title; ?>" /></a>
                                        <div class="title_t"><a href="<?=config_item('domain_detail').'/'.$list[$j]['id']?>" target="_blank"><?=mb_substr($title,0,13).'..'?></a></div>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                        <?php } ?>
                    </div>
                </div>
                <div class="row">
                    <div class="span12"><?php echo $pager; ?></div>
                </div>
            </div>
        </div>
    </div>
<?php require_once COMMONPATH.'/views/footer.php'?>