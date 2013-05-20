<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>亚稳材料数据库</title>
<link rel="canonical" href="http://www.mgdatabase.com/" />
<meta name="keywords" content="metallic glass,非晶,金属玻璃,氧化物玻璃,亚稳态材料,物理性能,力学性能,化学特性,oxide glass" />
<meta name="description" content="无需冥思苦想，只要真材实料" />
<link rel="shortcut icon" href="__STATIC__/public/images/fav.ico" type="image/x-icon">
<style>__SITE_THEME_CSS__</style>
<!--[if gte IE 7]><!-->
    <link href="__STATIC__/public/js/dialog/skins5/idialog.css" rel="stylesheet" />
<!--<![endif]-->
<!--[if lt IE 7]>
    <link href="__STATIC__/public/js/dialog/skins5/idialog.css" rel="stylesheet" />
<![endif]-->
<script>var siteUrl = '__SITE_URL__';</script>
<script src="__STATIC__/public/js/jquery.js" type="text/javascript"></script>
<!--[if lt IE 9]>
<script src="__STATIC__/public/js/html5.js"></script>
<![endif]-->
<script src="__STATIC__/public/js/dialog/jquery.artDialog.min5.js" type="text/javascript"></script> 
</head>

<body id="body">
<!--通行证-->
<div class="ntes-passport-nav-bg" >
<div class="ntes-passport-nav" >
        <div class="web-version">
		<div ><a href="http://www.mgdatabase.com/">首页</a></div>
		</div>
        <?php if(empty($visitor)): ?><div class="rightCon">
              <form action="<?php echo U('user/login');?>" method="post">  
                <div class="form-ipt"><label class="label" for="login_username">账号：</label> <input id="login_username" class="form-ipt-user ui-ipt-enter" name="username" autocomplete="off" data-state="disable" type="text"></div>
                <div class="form-ipt"><label class="label" for="login_password">密码：</label> <input id="login_password" class="form-ipt-pwd ui-ipt-enter" name="password" data-state="disable" type="password"></div>
                <input value=" " class="log" data-state="disable" type="submit" />
				<a href="<?php echo U('user/register');?>" class="ntes-nav-passport-login"  rel="nofollow">注册</a> | <a href="http://" class="ntes-nav-passport-login" >找回密码</a> | <a target="_self" href="http://www.mgdatabase.com " onClick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.mgdatabase.com');" title="把设为首页" class="ntes-nav-passport-login" >设为首页</a> | <a href="http://" class="ntes-nav-passport-login" >帮助</a>
        	</form>
        </div>
        <?php else: ?>
		<div class="rightCon">
欢迎：<?php echo ($visitor[username]); ?>！ | <a href="<?php echo U('user/index');?>" class="ntes-nav-passport-login" >个人中心</a> | <a href="<?php echo U('experiment/index');?>" class="ntes-nav-passport-login" >所有实验</a> | <a href="<?php echo U('comment/index');?>" class="ntes-nav-passport-login" >所有评论</a> | <a href="http://" class="ntes-nav-passport-login"  >查看积分</a> | <a href="http://" class="ntes-nav-passport-login" >快速充值</a> | <a href="<?php echo U('user/logout');?>" class="ntes-nav-passport-login" >安全退出</a>
        </div><?php endif; ?>
</div>
</div>
<!-- 搜索 -->
     
<div class="channel"> <div class="left"><a  href="__SITE_URL__"><img width="200" height="50" alt="亚稳材料数据库" src="__STATIC__/public/images/logo.jpg" border="0"></a></div>
  <div class="left1"><a target="_blank" href="<?php echo U('article/lists');?>">新闻</a> | <a href="qlist.htm" target="_blank">分类</a> 
    | <a href="<?php echo U('doc/lists');?>" target="_blank">文献</a> | <a href="<?php echo U('qa/lists');?>" target="_blank">求助</a> | <a href="gonggao.htm" target="_blank">公告：<MARQUEE DIRECTION=LEFT WIDTH=200 scrollamount=2>文字向左边滚动</MARQUEE></a></div>
  <span class="right "> 

<div class="searcharea">
    <form method="post" action="">
        <input type="text" name="" id="" onblur="if(this.value==''){this.value='站内搜索'; this.style.color='#666';}" onfocus="if(this.value=='站内搜索'){this.value=''; this.style.color='#000';}" value="站内搜索"/>
        <button>搜索</button>
    </form>
</div>

  </span> </div>
	<div class="channel1">&nbsp;</div>

<div class=area>
	<div class=area-main>
		<div >您的位置：<a href="http://www.mgdatabase.com/">首页</a> >>> 添加实验数据</div>
<DIV class=content>
      <TABLE style="FONT-SIZE: 14px" cellSpacing=0 cellPadding=0 border=0>
        <TR> 
          <TD class="biaoge11">请输入您要添加的文献资料名称</TD>
        </TR>
        <TBODY> 
        <TR> 
          <TD> 
            <div class="searcharea"> 
              <form method="post" action="<?php echo U('search/all',array('type'=>'doc'));?>" id="searchForm">
                <input type="text" name="keyword" placeholder="文献资料名称" value=""/>
                <button onClick="$('#searchForm').submit()">搜索</button> 
              </form>
            </div>
          </TD>
        </TR>
        <TR>
          <TD>&nbsp;</TD>
        </TR>
        <?php if($result): if(is_array($result)): foreach($result as $key=>$item): ?><TR> 
          <TD  class="biaoge11">·已有文献资料：<a href="<?php echo U('doc/addnew',array('doctitle'=>$item[doctitle]));?>"><?php echo ($item[doctitle]); ?></a>（请直接点击名称进入添加页）；<br></TD>
        </TR><?php endforeach; endif; ?>
        <?php else: ?>
        <TR> 
          <TD  class="biaoge11">·未找到相关文献资料，请直接<a href="<?php echo U('doc/addnew');?>">添加</a>新文献资料</TD>
        </TR><?php endif; ?>
        </TBODY> 
      </TABLE>
</DIV>  

	</div>
</div>

<!--版权-->
<DIV class=area>
	<DIV class=nav-bottom>
    <DIV class=company-info><A 
style="PADDING-BOTTOM: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; FONT-FAMILY: arial; FONT-SIZE: 14px; PADDING-TOP: 0px">&copy;</A> 
      <A style="PADDING-LEFT: 0px">2013 亚稳材料数据库版权所有</A> <A 
href="<?php echo U('help/about');?>">关于我们</A> | <A 
href="<?php echo U('help/contact');?>">联系方法</A> | <A href="<?php echo U('help/privacy');?>">隐私政策</A> | <a href="<?php echo U('help/agreement');?>">用户条款</a>
</DIV>
  </DIV>
</DIV>
</body>
</html>