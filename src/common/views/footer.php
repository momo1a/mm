<!--footer-->
<div id="footer">
    <div class="wrap">
        <div class="container">
            <div class="row">
                <div class="span3">
                    <h2 class="title">古诗赞美</h2>
                    <ul>
                        <li>南国有佳人，容华若桃李。</li>
                        <li>朝游江北岸，夕宿潇湘沚。</li>
                        <li>时俗薄朱颜，谁为发皓齿？</li>
                        <li>俯仰岁将暮，荣耀难久恃。
                            <div class="clear"></div>
                            <div class="author">[三国魏]曹植,《杂诗·南国有佳人》.</div>
                        </li>
                    </ul>
                </div>
                <div class="span3">
                    <h2 class="title">宋词表达</h2>
                    <ul>
                        </li>
                        <span class="testimonials_arrow"></span>香叆雕盘，寒生冰箸，画堂别是风光。主人情重，开宴出红妆。腻玉圆搓素颈，藕丝嫩、新织仙裳。双歌罢，虚檐转月，余韵尚悠扬。人间，何处有，司空见惯，应谓寻常。坐中有狂客，恼乱愁肠。报道金钗坠也，十指露、春笋纤长。亲曾见，全胜宋玉，想像赋高唐。
                        <div class="clear"></div>
                        <div class="author">[宋]苏轼, 《满庭芳》.</div>
                        </li>
                        <li>
                            <span class="testimonials_arrow"></span>叹年来踪迹，何事苦淹留？想佳人，妆楼颙望，误几回、天际识归舟。
                            <div class="clear"></div>
                            <div class="author">[宋]柳永, 《八声甘州·对潇潇暮雨洒江天》.</div>
                        </li>
                    </ul>
                </div>
                <div class="span3">
                    <h2 class="title">歌唱女人</h2>
                    <ul>
                        <li>
                            <span class="testimonials_arrow"></span> 女人花随风轻轻摆动，只盼望有一双温柔手，能抚慰我内心的寂寞，我有花一朵 花香满枝头，谁来真心寻芳踪，花开不多时啊 堪折直须折，女人如花花似梦，我有花一朵 长在我心中，真情真爱无人懂……
                            <span class="clear"></span>
                            <div class="author">李安修, 《女人花》.</div>
                        </li>
                    </ul>
                </div>
                <div class="span3">
                    <h2 class="title">美女欣赏</h2>
                    <div class="flickrs">
                        <div class="FlickrImages">
                            <ul></ul>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer_bottom">
        <div class="wrap">
            <div class="container">
                <div class="row">
                    <div class="span5">
                        <div class="foot_logo"><a href="<?=config_item('domain_www')?>"><img src="<?=config_item('domain_static')?>/common/img/foot_logo.png" alt="" /></a></div>
                        <div class="copyright">Copyright &copy; <?=date('Y')?>.<a href="<?=config_item('domain_www')?>"><?=SITE_NAME?></a> 版权所有.</div>
                    </div>
                    <div class="span7">
                        <div class="foot_right_block">
                            <div class="fright">
                                <form action="#" method="post">
                                    <input class="inp_search" name="name" type="text" value="搜索美女" onfocus="if (this.value == '搜索美女') this.value = '';" onblur="if (this.value == '') this.value = '搜索美女';" />
                                    <input class="btn-navbar" type="submit" name="submit" value="搜索本站"/>
                                </form>
                            </div>
                            <div class="clear"></div>
                            <div class="foot_menu">
                                <ul>
                                    <li><a href="index.html" class="current">首页</a></li>
                                    <?php foreach($category as $key=>$value):?>
                                        <li><a href="<?=config_item('domain_list').'/'.$value['id'].'/1'?>"><?=$value['name']?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//footer-->
<script>
    var FOOT_JSON_URL = "<?php echo config_item('domain_www').'/home/get_json'?>";
    var DETAIL_URL = "<?php echo config_item('domain_detail'); ?>";
    var IMG_URL = "<?php echo config_item('domain_img').'/'; ?>";
</script>
<script src="<?=config_item('domain_static')?>/common/jquery.min.js"></script>
<script type="text/javascript" src="<?=config_item('domain_static')?>/common/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?=config_item('domain_static')?>/common/js/jquery.mobile.customized.min.js"></script>
<script type="text/javascript" src="<?=config_item('domain_static')?>/common/js/camera.js"></script>
<script src="<?=config_item('domain_static')?>/common/js/bootstrap.js"></script>
<script src="<?=config_item('domain_static')?>/common/js/superfish.js"></script>
<script type="text/javascript" src="<?=config_item('domain_static')?>/common/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="<?=config_item('domain_static')?>/common/js/jquery.jcarousel.js"></script>
<script type="text/javascript" src="<?=config_item('domain_static')?>/common/js/jquery.tweet.js"></script>
<script type="text/javascript" src="<?=config_item('domain_static')?>/common/js/myscript.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        <?php if (trim(base_url(),'/') == config_item('domain_www')): ?>
        //Slider
        $('#camera_wrap_1').camera();
        <?php endif;?>
        //Featured works & latest posts
        $('#mycarousel, #mycarousel2, #newscarousel').jcarousel();

    });
</script>

</body>
</html>