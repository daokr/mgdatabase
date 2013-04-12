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
        
      <td width="210"><a  href="http://"><img width="200" height="50" alt="亚稳材料数据库" src="__STATIC__/admin/img/logo.jpg" border="0"></a></td>
      <td width="1310" valign="bottom"><SPAN class="h7">管理平台</SPAN></td>
         <?php if($_SESSION['admin']): ?><td width="169" valign="bottom"><a href="<?php echo U('index/logout');?>" class="h7">【安全退出】</a></td><?php endif; ?>
      </tr>
    </table>
</div>
	<div class="channel1">
	　
	</div>


    <form method="post"action="<?php echo U('index/login');?>">
<TABLE style="FONT-SIZE: 14px" cellSpacing=0 cellPadding=0 border=0 align="center">
  <TR> 
    <TD class=col1 align=right>&nbsp;</TD>
    <TD class=col34>&nbsp;</TD>
  </TR>
  <TBODY> 
  <TR> 
    <TD class=col1 align=right>帐号：</TD>
    <TD class=col34> 
      <input type="text" class="input grayInput"  name="admin_email">
    </TD>
    </TR>
  <TR> 
    <TD class=col1>密码：</TD>
    <TD class=col34> 
      <input type="password" class="input grayInput" name="admin_password">
    </TD>
    </TR>
  <TR> 
    <TD class=col1>&nbsp;</TD>
    <TD class=col34> 
      <INPUT class=regbut id=submitButton style="BORDER-TOP-STYLE: none; BORDER-RIGHT-STYLE: none; BORDER-LEFT-STYLE: none; BORDER-BOTTOM-STYLE: none" type=submit value=登　录>
    </TD>
    </TR>
  </TBODY> 
</TABLE>
</form>

</body>
</html>