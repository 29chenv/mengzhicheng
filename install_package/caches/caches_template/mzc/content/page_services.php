<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<section id="services" class="service-item">
    <div class="container">
        <div class="center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
            <h2>服务介绍</h2>
            <p class="lead">重品质、专技术、诚服务</p>
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

        </div>
        <!--/.row-->
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
<?php include template("content","footer"); ?>