<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<section id="ab-company">
    <div class=" clearfix container">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=9bd3cd9a40612a89031a8fa9d225b50b&sql=SELECT+%2A+FROM+v9_category+WHERE+catid%3D22\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_category WHERE catid=22 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
        <div class="center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
            <h2><?php echo substr($v['catname'],0,strpos($v['catname'],','))?></h2>
            <p class="lead">
                <?php echo substr($v['catname'],strpos($v['catname'],',')+1)?>
            </p>
        </div>
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <img src="<?php echo $v['image'];?>">
            </div>
            <div class="col-sm-6 col-xs-12">
                <h3></h3>
                <p>
                    <?php echo $v['description'];?>
                </p>
            </div>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
</section>
<section id="about-us">
    <div class="container">
        <div class="center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
            <h2>精英团队</h2>
            <p class="lead">
                公司如今的成就离不开大家的辛苦，我们的团队都是精英中的精英
            </p>
        </div>

        <!-- about us slider -->
        <div id="about-slider">
            <div id="carousel-slider" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators visible-xs">
                    <li data-target="#carousel-slider" data-slide-to="0" class=""></li>
                    <li data-target="#carousel-slider" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-slider" data-slide-to="2" class=""></li>
                    <li data-target="#carousel-slider" data-slide-to="3" class="active"></li>
                </ol>

                <div class="carousel-inner">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=3dd58f4e7d2e2d064cf98dfddf57cf6b&sql=SELECT+%2A+FROM+v9_category+WHERE+parentid%3D17+ORDER+BY+catid+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_category WHERE parentid=17 ORDER BY catid ASC LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                    <?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>
                    <div class="item  center <?php if($k==0) echo ' active'?>">
                        <img style="margin:0 auto" src="<?php echo $v['image'];?>" class="img-responsive" alt="">
                        <h4><?php echo $v['catname'];?></h4>
                        <span><?php echo $v['description'];?></span>
                    </div>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>

                <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>

                <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div> <!--/#carousel-slider-->
        </div><!--/#about-slider-->





        <!-- our-team -->
        <div class="team">
            <div class="center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                <h2>发展历程</h2>
                <p class="lead">
                    诚信和真诚还有独特的团队让我们发展到现在
                </p>
            </div>

            <div class="row clearfix">
                <div class="col-md-4 col-sm-6">
                    <div class="single-profile-top wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInDown;">
                        <div class="media">
                            <div class="media-body">
                                <h4>公司成立</h4>
                                <h5>2015</h5>
                            </div>
                        </div><!--/.media -->
                        <p>
                            2015年公司成立，从此开始了公司的发展道路
                        </p>
                    </div>
                </div><!--/.col-lg-4 -->


                <div class="col-md-4 col-sm-6 col-md-offset-2">
                    <div class="single-profile-top wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInDown;">
                        <div class="media">
                            <div class="media-body">
                                <h4>公司年产值达5千万</h4>
                                <h5>2017</h5>
                            </div>
                        </div><!--/.media -->
                        <p>
                            公司年产值达5千万
                        </p>
                    </div>
                </div><!--/.col-lg-4 -->
            </div> <!--/.row -->
            <div class="row team-bar">
                <div class="first-one-arrow hidden-xs">
                    <hr>
                </div>
                <div class="first-arrow hidden-xs">
                    <hr> <i class="fa fa-angle-up"></i>
                </div>
                <div class="second-arrow hidden-xs">
                    <hr> <i class="fa fa-angle-down"></i>
                </div>
                <div class="third-arrow hidden-xs">
                    <hr> <i class="fa fa-angle-up"></i>
                </div>
                <div class="fourth-arrow hidden-xs">
                    <hr> <i class="fa fa-angle-down"></i>
                </div>
            </div> <!--skill_border-->

            <div class="row clearfix">
                <div class="col-md-4 col-sm-6 col-md-offset-2">
                    <div class="single-profile-bottom wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay="600ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInUp;">
                        <div class="media">
                            <div class="media-body">
                                <h4>公司设立总公司</h4>
                                <h5>2016</h5>
                            </div>
                        </div><!--/.media -->
                        <p>
                            公司设立总公司
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-md-offset-2">
                    <div class="single-profile-bottom wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay="600ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInUp;">
                        <div class="media">
                            <div class="media-body">
                                <h4>珠海分公司公司成立</h4>
                                <h5>2019</h5>
                            </div>
                        </div><!--/.media -->
                        <p>
                            珠海分公司公司成立
                        </p>
                    </div>
                </div>
            </div>	<!--/.row-->
        </div><!--section-->
    </div><!--/.container-->
</section>
<?php include template("content","footer"); ?>