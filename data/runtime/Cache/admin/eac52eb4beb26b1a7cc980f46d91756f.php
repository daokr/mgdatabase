<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>亚稳材料数据库-管理平台</title>
<base target="_blank" />
<link rel="canonical" href="http://www.mgdatabase.com/" />
<meta name="keywords" content="metallic glass,非晶,金属玻璃,氧化物玻璃,亚稳态材料,物理性能,力学性能,化学特性,oxide glass" />
<meta name="description" content="无需冥思苦想，只要真材实料" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link rel="stylesheet" href="__STATIC__/admin/css.css">
<link rel="shortcut icon" type="image/ico" href="http://www.mgdatabase.com/img/favicon.ico">
</head>
<body id="body">
<div class="channel"> 

    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        
      <td width="210"><a  href="http://www.mgdatabase.com"><img width="200" height="50" alt="亚稳材料数据库" src="__STATIC__/admin/img/logo.jpg" border="0"></a></td>
      <td width="1310" valign="bottom"><SPAN class="h7">管理平台</SPAN></td>
         <?php if($_SESSION['admin']): ?><td width="169" valign="bottom"><a href="<?php echo U('index/logout');?>" class="h7">【安全退出】</a></td><?php endif; ?>
      </tr>
    </table>
</div>
	<div class="channel1">
	　
	</div>

<DIV class=area>
<DIV class=area-main>
	<DIV class="title-bar1">
	<p><A href="<?php echo U('setting/index');?>" class="wen">基础设置</A></p>
	<p><a href="<?php echo U('cate/index');?>">分类管理</a></p>
	<p><A href="flxm.htm">分类项目</A></p>
	<p><A href="sygl.htm">实验管理</A></p>
	<p><A href="sjgl.htm">实验数据</A></p>
	<p><A href="plgl.htm">评论管理</A></p>
	<p><A href="wxgl.htm">文献管理</A></p>
	<p><A href="xwgl.htm">新闻管理</A></p>
	<p><A href="qzgl.htm">求助管理</A></p>
	<p><A href="zhgl.htm">帐号管理</A></p>
	</DIV>

</div>
<DIV class=sub-col-6>
<DIV class=mod>

      <TABLE style="FONT-SIZE: 14px" cellSpacing=0 cellPadding=0 border=0>
        <TR> 
          <TD class=col1 align=right>&nbsp;</TD>
          <TD class=col2></TD>
          <TD class=col34 colSpan=2>&nbsp;</TD>
          <TD class=col5 id=usernameTips></TD>
        </TR>
        <TBODY> 
        <TR> 
          <TD class=col1 align=right>评论字数：</TD>
          <TD class=col2> </TD>
          <TD class=col34 colSpan=2> 
            <input type="text" class="input grayInput" onBlur="checkPassword()" onClick="showPassportTips()" name="password2" value="200">
          </TD>
          <TD class=col5 id=usernameTips> 　字符</TD>
        </TR>
        <TR> 
          <TD class=col1>上传图片：</TD>
          <TD class=col2> </TD>
          <TD class=col34 colSpan=2> 
            <input type="text" class="input grayInput" onBlur="checkPassword()" onClick="showPassportTips()" name="password" value="1">
          </TD>
          <TD class=col5 id=passwordTips> 　M/张</TD>
        </TR>
        <tr> 
          <td class=col1>上传附件：</td>
          <td class=col2> </td>
          <td class=col34 colspan=2> 
            <input type="text" class="input grayInput" onBlur="checkPassword()" onClick="showPassportTips()" name="password" value="2">
          </td>
          <td class=col5 id=passwordTips> 　M/个</td>
        </tr>
        <tr> 
          <td class=col1>上传获得：</td>
          <td class=col2> </td>
          <td class=col34 colspan=2> 
            <input type="text" class="input grayInput" onBlur="checkPassword()" onClick="showPassportTips()" name="password" value="2">
          </td>
          <td class=col5 id=passwordTips> 　积分/次，默认值</td>
        </tr>
        <tr> 
          <td class=col1>下载消费：</td>
          <td class=col2> </td>
          <td class=col34 colspan=2> 
            <input type="text" class="input grayInput" onBlur="checkPassword()" onClick="showPassportTips()" name="password" value="2">
          </td>
          <td class=col5 id=passwordTips> 　积分/次，默认值</td>
        </tr>
        <tr> 
          <td class=col1>积分比例：</td>
          <td class=col2> </td>
          <td class=col34 colspan=2> 
            <input class="inputA grayInputA" onBlur=checkCaptcha() 
      onClick=showCaptchaTips() maxlength=10 name=captcha22 value="1">
            积分 =</td>
          <td > 
            <input class="inputA grayInputA" onBlur=checkCaptcha() 
      onClick=showCaptchaTips() maxlength=10 name=captcha2 value="1">
            人民币 </td>
        </tr>
        <TR>
          <TD class=col1>&nbsp;</TD>
          <TD class=col2>&nbsp;</TD>
          <TD class=col34 colSpan=2>&nbsp;</TD>
          <TD class=col5>&nbsp;</TD>
        </TR>
        <TR> 
          <TD class=col1>&nbsp;</TD>
          <TD class=col2>&nbsp;</TD>
          <TD class=col34 colSpan=2> 
            <INPUT class=regbut id=submitButton style="BORDER-TOP-STYLE: none; BORDER-RIGHT-STYLE: none; BORDER-LEFT-STYLE: none; BORDER-BOTTOM-STYLE: none" type=submit value=修　改>
          </TD>
          <TD class=col5>&nbsp;</TD>
        </TR>
        </TBODY> 
      </TABLE>
  <br>
      <TABLE style="FONT-SIZE: 14px" cellSpacing=0 cellPadding=0 border=0>
        <TR> 
          <TD class=col1 align=right>页尾版权修改</TD>
          <TD class=col2></TD>
          <TD class=col34 colSpan=2>&nbsp;</TD>
          <TD class=col5 id=usernameTips></TD>
        </TR>
        <TBODY> 
        <TR> 
          <TD class=col1 align=right>时间：</TD>
          <TD class=col2> </TD>
          <TD class=col34 colSpan=2> 
            <input type="text" class="input grayInput" onBlur="checkPassword()" onClick="showPassportTips()" name="password2" value="2013">
          </TD>
          <TD class=col5 id=usernameTips>&nbsp; </TD>
        </TR>
        <TR> 
          <TD class=col1>&nbsp;</TD>
          <TD class=col2>&nbsp;</TD>
          <TD class=col34 colSpan=2>&nbsp;</TD>
          <TD class=col5>&nbsp;</TD>
        </TR>
        <TR> 
          <TD class=col1>&nbsp;</TD>
          <TD class=col2>&nbsp;</TD>
          <TD class=col34 colSpan=2> 
            <INPUT class=regbut id=submitButton style="BORDER-TOP-STYLE: none; BORDER-RIGHT-STYLE: none; BORDER-LEFT-STYLE: none; BORDER-BOTTOM-STYLE: none" type=submit value=修　改>
          </TD>
          <TD class=col5>&nbsp;</TD>
        </TR>
        </TBODY> 
      </TABLE>
    </DIV>  

  </DIV>
</DIV>
</body>
</html>