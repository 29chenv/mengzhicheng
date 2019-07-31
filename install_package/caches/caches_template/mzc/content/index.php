<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!--main-->
<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <ol class="carousel-indicators">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=87f89ff5ab78e94273e1d866f8843913&sql=SELECT+%2A+FROM+v9_category+where+parentid%3D14+order+by+catid+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_category where parentid=14 order by catid desc LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
            <?php $n=1; if(is_array($data)) foreach($data AS $k => $r) { ?>
            <li data-target="#main-slider" data-slide-to="<?php echo $k;?>" <?php if($k==0)echo "class='active'";?>></li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ol>
        <div class="carousel-inner">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=87f89ff5ab78e94273e1d866f8843913&sql=SELECT+%2A+FROM+v9_category+where+parentid%3D14+order+by+catid+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_category where parentid=14 order by catid desc LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
            <?php $n=1; if(is_array($data)) foreach($data AS $k => $r) { ?>
            <div class="item <?php if($k==0)echo 'active';?>" style="background-image: url(<?php echo $r['image'];?>)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1"><?php echo $r['catname'];?></h1>
                                <h2 class="animation animated-item-2"><?php echo $r['description'];?></h2>
                                <a class="btn-slide animation animated-item-3" href="about-us.html">查看更多</a>
                            </div>
                        </div>

                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <!--<img src="<?php echo MZC_PATH;?>images/slider/img1.png" class="img-responsive">-->
                                <img style="width:60%" src="<?php echo MZC_PATH;?>images/mengzhicheng/img1.png" class="img-responsive">
                            </div>
                        </div>

                    </div>
                </div>
            </div><!--/.item-->
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
        <i class="fa fa-chevron-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
        <i class="fa fa-chevron-right"></i>
    </a>
</section><!--/#main-slider-->

<section id="recent-works">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>案例展示</h2>
            <p class="lead">简洁大方的包装，给您一个高贵的感觉</p>
        </div>
        <div class="row">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=ff7e88e02fd5187f5f1551a2851c2471&sql=SELECT+%2A+FROM+v9_category+WHERE+parentid%3D35+ORDER+BY+catid+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_category WHERE parentid=35 ORDER BY catid ASC LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <?php $catid = $r['catid']?>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=1ea20149b0acf78be79d0d65385b4e66&sql=SELECT+%2A+FROM+v9_news+WHERE+catid%3D%24catid+ORDER+BY+id+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_news WHERE catid=$catid ORDER BY id ASC LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r1) { ?>
            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="<?php echo $r1['thumb'];?>" alt="">
                    <a class="overlay" href="blog-item.html">
                        <div class="recent-work-inner">
                            <h3><?php echo $r1['title'];?> </h3>
                            <p><?php echo $r1['description'];?></p>
                        </div>
                    </a>
                </div>
            </div>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#recent-works-->

<section id="services" class="service-item">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>服务介绍</h2>
            <p class="lead">全心全意为您着想，尽心尽力为您服务</p>
        </div>

        <div class="row">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=6c8a840a5a7d2ed3d54d6269c303cd3a&sql=SELECT+%2A+FROM+v9_news+WHERE+catid%3D8+ORDER+BY+id+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_news WHERE catid=8 ORDER BY id ASC LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="<?php echo $r['thumb'];?>">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading"><?php echo $r['title'];?></h3>
                        <p>
                            <?php echo $r['description'];?>
                        </p>
                    </div>
                </div>
            </div>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#services-->


<section id="content">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>最新资讯</h2>
            <p class="lead">从这里了解我们</p>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 wow fadeInDown">
                <div class="tab-wrap">
                    <div class="media">
                        <div class="parrent pull-left">
                            <ul class="nav nav-tabs nav-stacked">
                                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=2014b4aac1937db88c0f630db25fdf17&sql=SELECT+%2A+FROM+v9_news+where+catid%3D9+order+by+catid+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_news where catid=9 order by catid desc LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                                <?php $n=1; if(is_array($data)) foreach($data AS $k => $r) { ?>
                                <li class="<?php if($k==0)echo active?>"><a href="#tab<?php echo $k;?>" data-toggle="tab" class="analistic-0<?php echo $k;?>"><?php echo $r['title'];?></a></li>
                                <?php $n++;}unset($n); ?>
                                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            </ul>
                        </div>

                        <div class="parrent media-body">
                            <div class="tab-content">
                                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=2014b4aac1937db88c0f630db25fdf17&sql=SELECT+%2A+FROM+v9_news+where+catid%3D9+order+by+catid+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_news where catid=9 order by catid desc LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                                <?php $n=1; if(is_array($data)) foreach($data AS $k => $r) { ?>
                                <div class="tab-pane fade <?php if($k==0)echo ' active in';?>" id="tab<?php echo $k;?>">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img style="width:266px;height:257px;"class="img-responsive" src="<?php echo $r['thumb'];?>">
                                        </div>
                                        <div class="media-body">
                                            <h2><?php echo $r['title'];?></h2>
                                            <p class="ne-time"><span class="glyphicon glyphicon-calendar"></span>2017-6-8</p>
                                            <p>
                                                <?php echo $r['description'];?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php $n++;}unset($n); ?>
                                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            </div> <!--/.tab-content-->
                        </div> <!--/.media-body-->
                    </div> <!--/.media-->
                </div><!--/.tab-wrap-->
            </div><!--/.col-sm-6-->


        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#content-->

<section id="partner">
    <div class="container">
        <div class="center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
            <h2>合作伙伴</h2>
        </div>

        <div class="partners">
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=5f4846d3c911cd1a11b338ca138d2589&sql=SELECT+%2A+FROM+v9_category+WHERE+parentid%3D28+ORDER+BY+catid+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_category WHERE parentid=28 ORDER BY catid ASC LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                <?php $n=1; if(is_array($data)) foreach($data AS $k => $r) { ?>
                <li>
                    <a href="#"><img class="img-responsive wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="<?php echo ($k+1)*300?>ms" src="<?php echo $r['image'];?>" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInDown;"></a>
                </li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
    </div>
    <!--/.container-->
</section>

<section id="conatcat-info">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="media contact-info wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="600ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;">
                    <div class="pull-left">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="media-body">
                        <h2>联系我们</h2>
                        <p>
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=101a94476dace0ad37e2ae349cbd2340&sql=SELECT+%2A+FROM+v9_category+WHERE+catid%3D27\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_category WHERE catid=27 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                            <?php $add_arr=explode(',',$v['description']);?>
                            地址:　<?php echo $add_arr['0'];?><br>
                            电话:　<?php echo $add_arr['1'];?><br>
                            邮箱:　<?php echo $add_arr['2'];?><br>
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.container-->
</section>

<div id="bottom">
    <div class=" wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <div class="map">
            <iframe src="<?php echo MZC_PATH;?>map/map.html"></iframe>
        </div>
    </div>
</div><!--/#bottom-->

<?php include template("content","footer"); ?>