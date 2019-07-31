<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<section id="blog" class="container">
    <div class="center">
        <h2>新闻中心</h2>
        <p class="lead">在这里可以了解到我们最新资讯</p>
    </div>
    <?php $id=$_GET['id'];?>
    <div class="blog">
        <div class="row">
            <div class="col-md-8">
                <div class="blog-item">
                    <img class="img-responsive img-blog" src="images/blog/blog1.jpg" alt="" width="100%">
                    <div class="row">
                        <div class="col-xs-12 col-sm-2 text-center">
                            <div class="entry-meta">
                                <span id="publish_date">07  NOV</span>
                                <span><i class="fa fa-user"></i> <a href="#">Admin</a></span>
                                <!--<span><i class="fa fa-comment"></i> <a href="blog-item.html#comments">2 Comments</a></span>-->
                                <?php $hit_id = 'c-'.$siteid.'-'.$id;?>
                                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=c3f89134d60ec9cad839dae3603b433a&sql=SELECT+%2A+FROM+v9_hits+WHERE+hitsid%3D%27%24hit_id%27\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_hits WHERE hitsid='$hit_id' LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>

                                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                <span><i class="fa fa-play-circle-o"></i><a href="#"><?php echo $data['0']['views'];?> Views</a></span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-10 blog-content">
                            <h2><?php echo $title;?></h2>
                            <pre style="border:0;background-color:#ffffff"><?php echo $content;?></pre>
                            <!--<div class="post-tags">-->
                                <!--<strong>标签:</strong> <a href="#">关键词</a> / <a href="#">关键词</a> / <a href="#">关键词</a>-->
                            <!--</div>-->

                        </div>
                    </div>
                </div><!--/.blog-item-->




            </div><!--/.col-md-8-->

            <!--<aside class="col-md-4">-->
                <!--<div class="widget search">-->
                    <!--<form role="form">-->
                        <!--<input type="text" class="form-control search_box" autocomplete="off" placeholder="输入关键词 ">-->
                    <!--</form>-->
                <!--</div>&lt;!&ndash;/.search&ndash;&gt;-->


                <!--<div class="widget archieve">-->
                    <!--<h3>按时间搜索</h3>-->
                    <!--<div class="row">-->
                        <!--<div class="col-sm-12">-->
                            <!--<ul class="blog_archieve">-->
                                <!--<li><a href="#"><i class="fa fa-angle-double-right"></i> 2015年6月 <span class="pull-right"></span></a></li>-->
                                <!--<li><a href="#"><i class="fa fa-angle-double-right"></i> 2015年7月<span class="pull-right"></span></a></li>-->
                                <!--<li><a href="#"><i class="fa fa-angle-double-right"></i> 2015年8月 <span class="pull-right"></span></a></li>-->
                                <!--<li><a href="#"><i class="fa fa-angle-double-right"></i> 2015年9月 <span class="pull-right"></span></a></li>-->
                            <!--</ul>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>&lt;!&ndash;/.archieve&ndash;&gt;-->

                <!--<div class="widget tags">-->
                    <!--<h3>关键词搜索</h3>-->
                    <!--<ul class="tag-cloud">-->
                        <!--<li><a class="btn btn-xs btn-primary" href="#">关键词</a></li>-->
                        <!--<li><a class="btn btn-xs btn-primary" href="#">关键词</a></li>-->
                        <!--<li><a class="btn btn-xs btn-primary" href="#">关键词</a></li>-->
                        <!--<li><a class="btn btn-xs btn-primary" href="#">关键词</a></li>-->
                        <!--<li><a class="btn btn-xs btn-primary" href="#">关键词</a></li>-->
                        <!--<li><a class="btn btn-xs btn-primary" href="#">关键词</a></li>-->
                        <!--<li><a class="btn btn-xs btn-primary" href="#">关键词</a></li>-->
                        <!--<li><a class="btn btn-xs btn-primary" href="#">关键词</a></li>-->
                        <!--<li><a class="btn btn-xs btn-primary" href="#">关键词</a></li>-->
                        <!--<li><a class="btn btn-xs btn-primary" href="#">关键词</a></li>-->
                    <!--</ul>-->
                <!--</div>&lt;!&ndash;/.tags&ndash;&gt;-->

                <!--<div class="widget blog_gallery">-->
                    <!--<h3>最新案例</h3>-->
                    <!--<ul class="sidebar-gallery row">-->
                        <!--<li class="col-xs-4"><a href="#"><img src="images/case/case1.jpg" alt=""></a></li>-->
                        <!--<li class="col-xs-4"><a href="#"><img src="images/case/case2.jpg" alt=""></a></li>-->
                        <!--<li class="col-xs-4"><a href="#"><img src="images/case/case3.jpg" alt=""></a></li>-->
                        <!--<li class="col-xs-4"><a href="#"><img src="images/case/case4.jpg" alt=""></a></li>-->
                        <!--<li class="col-xs-4"><a href="#"><img src="images/case/case5.jpg" alt=""></a></li>-->
                        <!--<li class="col-xs-4"><a href="#"><img src="images/case/case6.jpg" alt=""></a></li>-->
                    <!--</ul>-->
                <!--</div>&lt;!&ndash;/.blog_gallery&ndash;&gt;-->
            <!--</aside>-->

        </div><!--/.row-->
        <p class="f14">
            <strong>上一篇：</strong><a href="<?php echo $previous_page['url'];?>"><?php echo $previous_page['title'];?></a><br />
            <strong>下一篇：</strong><a href="<?php echo $next_page['url'];?>"><?php echo $next_page['title'];?></a>
        </p>
    </div><!--/.blog-->

</section>

<?php include template("content","footer"); ?>