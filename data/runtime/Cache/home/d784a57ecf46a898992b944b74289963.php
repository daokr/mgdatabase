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
<script language="javascript">
function newgdcode(obj) {
obj.src = $(obj).attr('url') + '&nowtime=' + new Date().getTime();
//后面传递一个随机参数，否则在IE7和火狐下，不刷新图片
}
</script>
<!--注册-->
<!--通行证-->
<div class="ntes-passport-nav-bg" >
<div class="ntes-passport-nav" >
        <div class="web-version">
		<div ><a href="http://www.mgdatabase.com/">English Version</a></div>
		</div>
        <?php if(empty($visitor)): ?><div class="rightCon">
              <form action="<?php echo U('user/login');?>" method="post">  
                <div class="form-ipt"><label class="label" for="login_username">Email：</label> <input id="login_username" class="form-ipt-user ui-ipt-enter" name="email" autocomplete="off" data-state="disable" type="text"></div>
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
  	<DIV class=area-main2>
	<DIV class="title-bar1"><SPAN class="h7">欢迎注册"亚稳材料数据库"会员</SPAN></DIV>

<DIV class=content>
<form action="<?php echo U('user/register');?>" method="post">
    <TABLE style="FONT-SIZE: 14px" cellSpacing=0 cellPadding=0 border=0>
      <TR>
        <TD >&nbsp;</TD>
        <TD >&nbsp;</TD>
        <TD >&nbsp;</TD>
        <TD class=col6>*为必填</TD>
      </TR>
      <TBODY> 
      <TR> 
        <TD class=col1 align=right>Email</TD>
        <TD class=col2>*</TD>
        <TD class=col34 colSpan=2> <INPUT class="input grayInput" onblur=checkEmail() onclick=showEmailTips() maxLength=32 name="email">
         
        </TD>
        <TD class=col5 id=usernameTips></TD>
      </TR>
      <TR> 
        <TD>&nbsp;</TD>
        <TD >&nbsp;</TD>
        <TD colspan="2" ></TD>
        </TR>
      <TR> 
        <TD class=col1>登录密码</TD>
        <TD class=col2>*</TD>
        <TD class=col34 colSpan=2> 
          <INPUT class="input grayInput" 
      onblur=checkPassword() onclick=showPassportTips() type=password 
      maxLength=18 name=password>
        </TD>
        <TD class=col5 id=passwordTips></TD>
      </TR>
      <TR> 
        <TD class=col1>重复登录密码</TD>
        <TD class=col2>*</TD>
        <TD class=col34 colSpan=2> 
          <INPUT class="input grayInput" 
      onblur=checkConfPassword() onclick=showPasswordConfirmTips() type="password" 
      maxLength=18 name=repassword>
        </TD>
        <TD class=col5 id=passwordConfirmTips></TD>
      </TR>
      <TR> 
        <TD class=col1>用户名</TD>
        <TD class=col2>*</TD>
        <TD class=col34 colSpan=2> 
           <INPUT class="input grayInput" 
      onblur=checkUsername() onfocus=showUsernameTips() maxLength=32 name=username>
        </TD>
        <TD colspan="2" ></TD>
      </TR>
      <TR> 
        <TD>&nbsp;</TD>
        <TD>&nbsp;</TD>
        <TD >用于找回密码</TD>
        <TD></TD>
      </TR>
      <tr> 
        <td class=col1>现居住地</td>
        <td >&nbsp;</td>
        <td class=col34 colspan=2> 
          <input class="input grayInput" 
      onBlur=checkEmail() onClick=showEmailTips() maxlength=32 name="address">
        </td>
        <td class=col5 id=emailTips></td>
      </tr>
      <TR> 
        <TD class=col1>验证码</TD>
        <TD class=col2>*</TD>
        <TD class=col3> 
          <INPUT class="inputA grayInputA" onblur=checkCaptcha() 
      onclick=showCaptchaTips() maxLength=10 name=authcode>
        </TD>
        <TD class=col4><img src="<?php echo U('captcha/'.time());?>" url="<?php echo U('captcha/'.time());?>" onclick="javascript:newgdcode(this);" alt="点击刷新验证码" style="cursor:pointer; margin-left:5px; float:left;" align="absmiddle"/></TD>
        <TD class=col5></TD>
      </TR>
      <TR> 
        <TD class=col1>&nbsp;</TD>
        <TD class=col2>&nbsp;</TD>
        <TD class=col34 style="FONT-SIZE: 12px" colSpan=2> 
          <INPUT class=selcheckbox 
      id=checkbox onclick=selectClause() type=checkbox CHECKED 
      name=checkbox>
          我已阅读并接受<A 
      href="http:// " 
      target=_blank>"亚稳材料数据库服务条款"</A> </TD>
        <TD class=col5 id=clauseTips></TD>
      </TR>
      <TR> 
        <TD class=col1>&nbsp;</TD>
        <TD class=col2>&nbsp;</TD>
        <TD class=col34 colSpan=2> 
          <INPUT class=regbut id=submitButton style="BORDER-TOP-STYLE: none; BORDER-RIGHT-STYLE: none; BORDER-LEFT-STYLE: none; BORDER-BOTTOM-STYLE: none" type=submit value=提交注册>
        </TD>
        <TD class=col5>&nbsp;</TD>
      </TR>
      </TBODY> 
    </TABLE>
    </form>
  </DIV>
  </DIV>
  </DIV>
  <!--版权-->
<!--footer-->

</body>
</html>