<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo ($seo["title"]); ?> - <?php echo ($seo["subtitle"]); ?></title>
<meta name="keywords" content="<?php echo ($seo["keywords"]); ?>" /> 
<meta name="description" content="<?php echo ($seo["description"]); ?>" /> 
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
		<div ><a href="http://www.mgdatabase.com/">English Version</a></div>
		</div>
        <?php if(empty($visitor)): ?><div class="rightCon">
              <form action="<?php echo U('user/login');?>" method="post">  
                <div class="form-ipt"><label class="label" for="login_username">帐号：</label> <input id="login_username" class="form-ipt-user ui-ipt-enter" name="email" autocomplete="off" data-state="disable" type="text"></div>
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
  <div class="left1"><a target="_blank" href="xwlist.htm">新闻</a> | <a href="qlist.htm" target="_blank">分类</a> 
    | <a href="qxwlist.htm" target="_blank">文献</a> | <a href="qzlist.htm" target="_blank">求助</a> | <a href="gonggao.htm" target="_blank">公告：<MARQUEE DIRECTION=LEFT WIDTH=200 scrollamount=2>文字向左边滚动</MARQUEE></a></div>
  <span class="right "> 

<div class="searcharea">
    <form method="post" action="">
        <input type="text" name="" id="" onblur="if(this.value==''){this.value='站内搜索'; this.style.color='#666';}" onfocus="if(this.value=='站内搜索'){this.value=''; this.style.color='#000';}" value="站内搜索"/>
        <button>搜索</button>
    </form>
</div>

  </span> </div>
	<div class="channel1">
	　
	</div>

<DIV class=area>
<!--资料-->
  	<DIV class=area-main2>
	<DIV class="title-bar1"><SPAN 
  class="h7"><?php echo ($user[username]); ?>个人中心</SPAN></DIV>
	
<DIV class=content>
      <TABLE style="FONT-SIZE: 14px" cellSpacing=0 cellPadding=0 border=0>
        <TBODY> 
        <TR> 
          <TD class=col1 align=right>添加数据：</TD>
          <TD class=col2> </TD>
          <TD class=col34 colSpan=2> <a href="tsy.htm" target="_blank">2</a>条</TD>
        </TR>
        <TR> 
          <TD class=col1>发表评论：</TD>
          <TD class=col2> </TD>
          <TD class=col34 colSpan=2> <a href="tpl.htm" target="_blank">1</a>条 
          </TD>
        </TR>
        <TR>
          <TD class=col1>添加文献：</TD>
          <TD class=col2></TD>
          <td class=col34 style="FONT-SIZE: 12px" colspan=2><a href="twx.htm" target="_blank">2</a>条</td>
        </TR>
        <TR> 
          <TD class=col1>添加求助：</TD>
          <TD class=col2></TD>
          <td class=col34 style="FONT-SIZE: 12px" colspan=2><a href="tqz.htm" target="_blank">2</a>条</td>
        </TR>
        <TR> 
          <TD class=col1>现居住地：</TD>
          <TD class=col2> </TD>
          <td class=col34 style="FONT-SIZE: 12px" colspan=2>北京 </td>
        </TR>
        <TR> 
          <TD class=col1>&nbsp;</TD>
          <TD class=col2>&nbsp;</TD>
          <TD class=col34 style="FONT-SIZE: 12px" colSpan=2>&nbsp; </TD>
        </TR>
        <TR> 
          <TD class=col1>&nbsp;</TD>
          <TD class=col2>&nbsp;</TD>
          <TD class=col34 colSpan=2>&nbsp; </TD>
        </TR>
        </TBODY> 
      </TABLE>
  </DIV>

</div>
</div>

<!--footer-->

</body>
</html>