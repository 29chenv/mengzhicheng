<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<section id="contact-info">
    <div class="center">
        <h2>联系我们</h2>
        <p class="lead">与我们联系获取优质的服务</p>
    </div>
    <div class="gmap-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 text-center">
                    <div class="map">
                        <iframe scrolling="no" marginheight="0" marginwidth="0" src="<?php echo MZC_PATH;?>map/map.html" frameborder="0"></iframe>
                    </div>
                </div>

                <div class="col-sm-4 map-content">
                    <ul class="row">
                        <li class="col-sm-12">
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=aee09444067a118daa216c627d3d3084&sql=SELECT+%2A+FROM+v9_category+WHERE+parentid%3D23+ORDER+BY+catid+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_category WHERE parentid=23 ORDER BY catid ASC LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                            <address>
                                <h2><?php echo $v['catname'];?></h2>
                                <pre style="border:0;background-color: rgba(255, 255, 255, 0);"><?php echo $v['description'];?></pre>
                            </address>
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include template("content","footer"); ?>