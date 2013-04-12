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

<body>
<div style="margin:150px auto; width:350px;">
  <img src="__STATIC__/public/images/ik_error.gif" style="float:left;">
  <ul style="margin-left:10px; list-style-type:none; list-style-image: none; list-style-position:outside;">
    <li style="font-size:14px; line-height: 32px; padding-left:30px"><?php echo ($message); ?></li>
    <li style="color:#666;line-height: 10px;">&nbsp;</li>

    <li style="color:#666;"> 
        &gt; <span id="f3s">3</span>秒后 <a href="<?php echo ($jumpUrl); ?>">点击返回</a>
        <script type="text/javascript">
            (function(){
                var secs=3,si=setInterval(function(){
                    if(--secs){
                        document.getElementById('f3s').innerHTML = secs;
                    }
                    else{
                        location.href="<?php echo ($jumpUrl); ?>";clearInterval(si);
                    }
            }, 1000)})();
        </script>
 	</li>

  </ul>
</div>
</body>
</html>