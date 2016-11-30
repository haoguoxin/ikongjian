<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
  <div class="clear"></div>
  <div class="bkc">
    <div class="weizhi">
      <h3><span>当前位置 :</span><a href='/'>爱空间</a> > <?php echo catpos($catid);?> </h3>
    </div>
    <div class="content">
      <div class="cleft fl">
        <div class="ck3">
          <div class="ck3_2"></div>
          <div class="ck3_3">
            <div class="ck3_3_list">
              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b22291ce36e15a79267c70ea285e17a5&action=lists&catid=%24catid&num=8&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 8;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
              <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
              <?php $db = pc_base::load_model('hits_model'); $_r = $db->get_one(array('hitsid'=>'c-'.$modelid.'-'.$r[id])); $views = $_r[views]; ?>
              <div class="ck3_3_li">
                <div class="ck3_3_1"><a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" width="220px" height="133px" /></a></div>
                <div class="ck3_3_2">
                  <div class="ck3_3_2_1"><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></div>
                  <div class="ck3_3_2_2"><?php echo str_cut($r['description'],'198','...');?><a href="<?php echo $r['url'];?>">详情</a></div>
                  <div class="ck3_3_2_3"><span class="date3"><?php echo date("Y-m-d H:i:s",$r['inputtime']);?></span><span class="titleck4 fr"><img src="<?php echo IMG_PATH;?>ikongjian/images/icon1.png" /> 阅读 <font><?php echo $views;?></font></span></div>
                </div>
                <div class="clear"></div>
              </div>
              <?php $n++;}unset($n); ?>
              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

            </div>
            <div class="pages">
              <ul>
                <?php echo $pages;?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="cright fr">
        <div class="rk1">
          <div class="rk1_1"><a href=""><img src="<?php echo IMG_PATH;?>ikongjian/images/rk1_1.jpg" width="355" height="155" /></a></div>
          <div class="rk1_2"><a href=""><img src="<?php echo IMG_PATH;?>ikongjian/images/rk1_2.jpg" width="355" height="155" /></a></div>
          <div class="rk1_3"><a href=""><img src="<?php echo IMG_PATH;?>ikongjian/images/rk1_3.jpg" width="355" height="210" /></a></div>
        </div>
        <div class="rk2">
          <div class="rk2_1">装修热词</div>
          <div class="clear"></div>
          <div class="rk2_3">
            <ul>
              <li><a href="">交房时间</a></li>
              <li><a href="">交房标准</a></li>
              <li><a href="">交房验房</a></li>
              <li><a href="">注意事项</a></li>
              <li><a href="">交房时间</a></li>
              <li><a href="">交房标准</a></li>
              <li><a href="">交房验房</a></li>
              <li><a href="">注意事项</a></li>
              <li><a href="">交房时间</a></li>
              <li><a href="">交房标准</a></li>
              <li><a href="">交房验房</a></li>
              <li><a href="">注意事项</a></li>
              <li><a href="">交房时间</a></li>
              <li><a href="">交房标准</a></li>
              <li><a href="">交房验房</a></li>
              <li><a href="">注意事项</a></li>
              <li><a href="">交房验房</a></li>
              <li><a href="">注意事项</a></li>
            </ul>
            <div class="clear"></div>
          </div>
        </div>
        <div class="rk2">
          <div class="rk2_1">最新装修专题</div>
          <div class="clear"></div>
          <div class="rk2_3">
            <ul>
              <li><a href="">交房时间</a></li>
              <li><a href="">交房标准</a></li>
              <li><a href="">交房验房</a></li>
              <li><a href="">注意事项</a></li>
              <li><a href="">交房时间</a></li>
              <li><a href="">交房标准</a></li>
              <li><a href="">交房验房</a></li>
              <li><a href="">注意事项</a></li>
              <li><a href="">交房时间</a></li>
              <li><a href="">交房标准</a></li>
              <li><a href="">交房验房</a></li>
              <li><a href="">注意事项</a></li>
              <li><a href="">交房时间</a></li>
              <li><a href="">交房标准</a></li>
              <li><a href="">交房验房</a></li>
              <li><a href="">注意事项</a></li>
              <li><a href="">交房验房</a></li>
              <li><a href="">注意事项</a></li>
            </ul>
            <div class="clear"></div>
          </div>
        </div>
        <div class="rk2">
          <div class="rk2_1">最新装修攻略<span class="fr"><a href="">more</a></span></div>
          <div class="clear"></div>
          <div class="rk2_2">
            <ul>
              <li><a href="">• 超棒家居收纳小技巧 善用你的地盘吧~</a></li>
              <li><a href="">• 家居diy：万圣节之夜鬼马狂欢 你家敢这样装饰吗？</a></li>
              <li><a href="">• 什么都不懂也敢自己装修 靠的就是这些绝招了！ </a></li>
              <li><a href="">• 超棒家居收纳小技巧 善用你的地盘吧~</a></li>
              <li><a href="">• 家居diy：万圣节之夜鬼马狂欢 你家敢这样装饰吗？</a></li>
            </ul>
          </div>
        </div>
        <div class="rk2">
          <div class="rk2_1">最新装修资讯<span class="fr"><a href="">more</a></span></div>
          <div class="clear"></div>
          <div class="rk2_2">
            <ul>
              <li><a href="">• 超棒家居收纳小技巧 善用你的地盘吧~</a></li>
              <li><a href="">• 家居diy：万圣节之夜鬼马狂欢 你家敢这样装饰吗？</a></li>
              <li><a href="">• 什么都不懂也敢自己装修 靠的就是这些绝招了！ </a></li>
              <li><a href="">• 超棒家居收纳小技巧 善用你的地盘吧~</a></li>
              <li><a href="">• 家居diy：万圣节之夜鬼马狂欢 你家敢这样装饰吗？</a></li>
            </ul>
          </div>
        </div>
        <div class="rk2">
          <div class="rk2_1">大家都在问<span class="fr"><a href="">more</a></span></div>
          <div class="clear"></div>
          <div class="rk2_2">
            <ul>
              <li><a href="">• 超棒家居收纳小技巧 善用你的地盘吧~</a></li>
              <li><a href="">• 家居diy：万圣节之夜鬼马狂欢 你家敢这样装饰吗？</a></li>
              <li><a href="">• 什么都不懂也敢自己装修 靠的就是这些绝招了！ </a></li>
              <li><a href="">• 超棒家居收纳小技巧 善用你的地盘吧~</a></li>
              <li><a href="">• 家居diy：万圣节之夜鬼马狂欢 你家敢这样装饰吗？</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <div class="clear"></div>
  <div class="bk8">
    <div class="bk8_c">
      <div class="bk8menu">
        <ul>
          <li><a>最新推荐</a></li>
          <div class="clear"></div>
        </ul>
      </div>
      <div class="bk8mm">
        <div class="bk8m">
          <ul>
            <li class="mln"><a href="">交房验房1</a></li>
            <li><a href="">交房验房</a></li>
            <li><a href="">交房验房</a></li>
            <li><a href="">交房验房</a></li>
            <div class="clear"></div>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="clear"></div>
</div>
<?php include template("content","footer"); ?>