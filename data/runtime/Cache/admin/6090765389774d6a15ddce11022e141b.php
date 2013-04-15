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
	<p><A href="<?php echo U('setting/index');?>" target="_self">基础设置</A></p>
	<p><a href="<?php echo U('cate/index');?>" target="_self" <?php if($module_name == cate): ?>class="wen"<?php endif; ?> >分类管理</a></p>
	<p><A href="<?php echo U('item/index');?>" target="_self" <?php if($module_name == item): ?>class="wen"<?php endif; ?>>分类项目</A></p>
	<p><A href="sygl.htm" target="_self">实验管理</A></p>
	<p><A href="sjgl.htm" target="_self">实验数据</A></p>
	<p><A href="plgl.htm" target="_self">评论管理</A></p>
	<p><A href="wxgl.htm" target="_self">文献管理</A></p>
	<p><A href="xwgl.htm" target="_self">新闻管理</A></p>
	<p><A href="qzgl.htm" target="_self">求助管理</A></p>
	<p><A href="zhgl.htm" target="_self">帐号管理</A></p>
	</DIV>

</div>
<DIV class=sub-col-6>
<DIV class=mod>
      <p>&nbsp;</p>
      <form action="<?php echo U('cate/index');?>" method="post" target="_self">   
      <TABLE style="FONT-SIZE: 14px" cellSpacing=0 cellPadding=0 border=0>
        <TBODY> 
        <TR> 
          <TD class=col1 align=right>选择分类：</TD>
          <TD class=col2> </TD>
          <TD class=col4 colSpan=2>

           	
            <select name="cateid">
              <?php if(is_array($cate)): foreach($cate as $key=>$item): ?><option value="<?php echo ($item[cateid]); ?>"><?php echo ($item[catename]); ?></option><?php endforeach; endif; ?>
            </select>
			
          </TD>
          <TD > 
            <input type="submit" name="Submit" value="查看">
          </TD>
        </TR>
        </TBODY> 
      </TABLE>
      </form>
      <p>&nbsp;</p>
  <p><SPAN  class="h7">项目管理　　</SPAN><SPAN class="tjzy"><a href="<?php echo U('item/add');?>" target="_self">+添加项目</a></SPAN></p>
      <p>&nbsp;</p>
      <table width="100%" border="0" cellspacing="0" cellpadding="0" class=biaoge>
        <tr> 
          <td class=biaoge1><a href="#">全选</a>　<a href="#">删除</a></td>
          <td  class=biaoge2>名称</td>
          <td  class=biaoge2>所属分类</td>
          <td  class=biaoge4>操作</td>
        </tr>
        <?php if(is_array($list)): foreach($list as $key=>$item): ?><tr> 
          <td class=biaoge1> 
            <input type="checkbox" value="<?php echo ($item[itemid]); ?>" name="itemid">
          </td>
          <td  class=biaoge2><?php echo ($item[itemname]); ?>
          </td>
          <td  class=biaoge2><?php echo ($item[catename]); ?></td>
          <td  class=biaoge4><a href="<?php echo U('item/edit',array('itemid'=>$item[itemid]));?>" target="_self">修改</a>　<a href="<?php echo U('item/delete',array('itemid'=>$item[itemid]));?>" target="_self" onClick="return confirm('真的要删除吗？删除不可恢复')">删除</a></td>
        </tr><?php endforeach; endif; ?>
      </table>
    </DIV>
</DIV>
</body>
</html>