<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><footer id="footer" class="midnight-blue" style="position: relative;bottom:0;">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                Copyright &copy; 2015.mengzhicheng jianshe gongcheng All rights reserved.

            </div>
            <div class="col-sm-6">
                <ul class="pull-right">
                    <li><a href="/">首页</a></li>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li><a href="<?php echo $r['url'];?>"><?php echo substr($r[catname],0,6);?></a></li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>
        </div>
    </div>
</footer><!--/#footer-->

<script src="<?php echo MZC_PATH;?>js/jquery.js"></script>
<script src="<?php echo MZC_PATH;?>js/bootstrap.min.js"></script>
<script src="<?php echo MZC_PATH;?>js/jquery.prettyPhoto.js"></script>
<script src="<?php echo MZC_PATH;?>js/jquery.isotope.min.js"></script>
<script src="<?php echo MZC_PATH;?>js/main.js"></script>
<script src="<?php echo MZC_PATH;?>js/wow.min.js"></script>
</body>
</html>