<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
  <div class="clear"></div>
  <div class="bkc">
    <div class="weizhi">
      <h3><span>当前位置 :</span><a href='/'>爱空间</a> > <a href=''>资讯</a> > <?php echo catpos($catid);?> </h3>
    </div>
    <div class="content">
      <div class="cleft fl">
        <div class="ck3">
          <div class="ck3_1">
            <ul>
              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=691d811e4bbf7b8a35c5b49fec32c5ea&action=category&catid=301&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'301','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
              <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
              <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
              <?php $n++;}unset($n); ?>
              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <div class="clear"></div>
          </div>
          <div class="ck3_2"></div>
          <div class="ck3_3">
            <div class="ck3_3_list">
              <div class="ck3_3_li">
                <div class="ck3_3_1"><a href=""><img src="<?php echo IMG_PATH;?>ikongjian/images/pic.jpg" width="220px" height="133px" /></a></div>
                <div class="ck3_3_2">
                  <div class="ck3_3_2_1"><a href="">新房装修有污染 都是什么原因造成的啊</a></div>
                  <div class="ck3_3_2_2">为什么很多新房在收尾入住污染会特别严重？室内污染是由多重原因造成的，以下将详细为大家分析。装修设计不合理室内装修经常会大量使用...<a href="">详情</a></div>
                  <div class="ck3_3_2_3"><span class="date3">2016-11-08 10:23:28</span><span class="titleck4 fr"><img src="<?php echo IMG_PATH;?>ikongjian/images/icon1.png" /> 阅读 <font>1099</font></span></div>
                </div>
                <div class="clear"></div>
              </div>
              <div class="ck3_3_li">
                <div class="ck3_3_1"><a href=""><img src="<?php echo IMG_PATH;?>ikongjian/images/pic.jpg" width="220px" height="133px" /></a></div>
                <div class="ck3_3_2">
                  <div class="ck3_3_2_1"><a href="">新房装修有污染 都是什么原因造成的啊</a></div>
                  <div class="ck3_3_2_2">为什么很多新房在收尾入住污染会特别严重？室内污染是由多重原因造成的，以下将详细为大家分析。装修设计不合理室内装修经常会大量使用...<a href="">详情</a></div>
                  <div class="ck3_3_2_3"><span class="date3">2016-11-08 10:23:28</span><span class="titleck4 fr"><img src="<?php echo IMG_PATH;?>ikongjian/images/icon1.png" /> 阅读 <font>1099</font></span></div>
                </div>
                <div class="clear"></div>
              </div>
              <div class="ck3_3_li">
                <div class="ck3_3_1"><a href=""><img src="<?php echo IMG_PATH;?>ikongjian/images/pic.jpg" width="220px" height="133px" /></a></div>
                <div class="ck3_3_2">
                  <div class="ck3_3_2_1"><a href="">新房装修有污染 都是什么原因造成的啊</a></div>
                  <div class="ck3_3_2_2">为什么很多新房在收尾入住污染会特别严重？室内污染是由多重原因造成的，以下将详细为大家分析。装修设计不合理室内装修经常会大量使用...<a href="">详情</a></div>
                  <div class="ck3_3_2_3"><span class="date3">2016-11-08 10:23:28</span><span class="titleck4 fr"><img src="<?php echo IMG_PATH;?>ikongjian/images/icon1.png" /> 阅读 <font>1099</font></span></div>
                </div>
                <div class="clear"></div>
              </div>
              <div class="ck3_3_li">
                <div class="ck3_3_1"><a href=""><img src="<?php echo IMG_PATH;?>ikongjian/images/pic.jpg" width="220px" height="133px" /></a></div>
                <div class="ck3_3_2">
                  <div class="ck3_3_2_1"><a href="">新房装修有污染 都是什么原因造成的啊</a></div>
                  <div class="ck3_3_2_2">为什么很多新房在收尾入住污染会特别严重？室内污染是由多重原因造成的，以下将详细为大家分析。装修设计不合理室内装修经常会大量使用...<a href="">详情</a></div>
                  <div class="ck3_3_2_3"><span class="date3">2016-11-08 10:23:28</span><span class="titleck4 fr"><img src="<?php echo IMG_PATH;?>ikongjian/images/icon1.png" /> 阅读 <font>1099</font></span></div>
                </div>
                <div class="clear"></div>
              </div>
              <div class="ck3_3_li">
                <div class="ck3_3_1"><a href=""><img src="<?php echo IMG_PATH;?>ikongjian/images/pic.jpg" width="220px" height="133px" /></a></div>
                <div class="ck3_3_2">
                  <div class="ck3_3_2_1"><a href="">新房装修有污染 都是什么原因造成的啊</a></div>
                  <div class="ck3_3_2_2">为什么很多新房在收尾入住污染会特别严重？室内污染是由多重原因造成的，以下将详细为大家分析。装修设计不合理室内装修经常会大量使用...<a href="">详情</a></div>
                  <div class="ck3_3_2_3"><span class="date3">2016-11-08 10:23:28</span><span class="titleck4 fr"><img src="<?php echo IMG_PATH;?>ikongjian/images/icon1.png" /> 阅读 <font>1099</font></span></div>
                </div>
                <div class="clear"></div>
              </div>
              <div class="ck3_3_li">
                <div class="ck3_3_1"><a href=""><img src="<?php echo IMG_PATH;?>ikongjian/images/pic.jpg" width="220px" height="133px" /></a></div>
                <div class="ck3_3_2">
                  <div class="ck3_3_2_1"><a href="">新房装修有污染 都是什么原因造成的啊</a></div>
                  <div class="ck3_3_2_2">为什么很多新房在收尾入住污染会特别严重？室内污染是由多重原因造成的，以下将详细为大家分析。装修设计不合理室内装修经常会大量使用...<a href="">详情</a></div>
                  <div class="ck3_3_2_3"><span class="date3">2016-11-08 10:23:28</span><span class="titleck4 fr"><img src="<?php echo IMG_PATH;?>ikongjian/images/icon1.png" /> 阅读 <font>1099</font></span></div>
                </div>
                <div class="clear"></div>
              </div>
              <div class="ck3_3_li">
                <div class="ck3_3_1"><a href=""><img src="<?php echo IMG_PATH;?>ikongjian/images/pic.jpg" width="220px" height="133px" /></a></div>
                <div class="ck3_3_2">
                  <div class="ck3_3_2_1"><a href="">新房装修有污染 都是什么原因造成的啊</a></div>
                  <div class="ck3_3_2_2">为什么很多新房在收尾入住污染会特别严重？室内污染是由多重原因造成的，以下将详细为大家分析。装修设计不合理室内装修经常会大量使用...<a href="">详情</a></div>
                  <div class="ck3_3_2_3"><span class="date3">2016-11-08 10:23:28</span><span class="titleck4 fr"><img src="<?php echo IMG_PATH;?>ikongjian/images/icon1.png" /> 阅读 <font>1099</font></span></div>
                </div>
                <div class="clear"></div>
              </div>
              <div class="ck3_3_li">
                <div class="ck3_3_1"><a href=""><img src="<?php echo IMG_PATH;?>ikongjian/images/pic.jpg" width="220px" height="133px" /></a></div>
                <div class="ck3_3_2">
                  <div class="ck3_3_2_1"><a href="">新房装修有污染 都是什么原因造成的啊</a></div>
                  <div class="ck3_3_2_2">为什么很多新房在收尾入住污染会特别严重？室内污染是由多重原因造成的，以下将详细为大家分析。装修设计不合理室内装修经常会大量使用...<a href="">详情</a></div>
                  <div class="ck3_3_2_3"><span class="date3">2016-11-08 10:23:28</span><span class="titleck4 fr"><img src="<?php echo IMG_PATH;?>ikongjian/images/icon1.png" /> 阅读 <font>1099</font></span></div>
                </div>
                <div class="clear"></div>
              </div>
            </div>
            <div class="pages">
              <ul>
                <li><a href="">首页</a></li>
                <li><a href="">上一页</a></li>
                <li><a href="">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li class="thisclass">4</li>
                <li><a href="">5</a></li>
                <li><a href="">6</a></li>
                <li><a href="">7</a></li>
                <li><a href="">8</a></li>
                <li><a href="">9</a></li>
                <li><a href="">10</a></li>
                <li><a href="">下一页</a></li>
                <li><a href="">末页</a></li>
                <li>
                  <select name='sldd' style='width:36px' onchange='location.href=this.options[this.selectedIndex].value;'>
                    <option value=''>1</option>
                    <option value=''>2</option>
                    <option value=''>3</option>
                    <option value='' selected>4</option>
                    <option value=''>5</option>
                    <option value=''>6</option>
                    <option value=''>7</option>
                    <option value=''>8</option>
                    <option value=''>9</option>
                    <option value=''>10</option>
                  </select>
                </li>
                <li><span class="pageinfo">共 <strong>10</strong>页<strong>80</strong>条</span></li>
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