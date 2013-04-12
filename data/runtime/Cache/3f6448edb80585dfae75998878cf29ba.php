<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>亚稳材料数据库</title>
<base target="_blank" />
<link rel="canonical" href="http://www.mgdatabase.com/" />
<meta name="keywords" content="metallic glass,非晶,金属玻璃,氧化物玻璃,亚稳态材料,物理性能,力学性能,化学特性,oxide glass" />
<meta name="description" content="无需冥思苦想，只要真材实料" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link rel="stylesheet" href="css.css">
<link rel="shortcut icon" type="image/ico" href="http://www.mgdatabase.com/img/favicon.ico">
<script type="text/javascript">
function $(id) { return document.getElementById(id); }
function addLoadEvent(func){
 var oldonload = window.onload;
 if (typeof window.onload != 'function') {
  window.onload = func;
 } else {
  window.onload = function(){
   oldonload();
   func();
  }
 }
}
function moveElement(elementID,final_x,final_y,interval) {
  if (!document.getElementById) return false;
  if (!document.getElementById(elementID)) return false;
  var elem = document.getElementById(elementID);
  if (elem.movement) {
    clearTimeout(elem.movement);
  }
  if (!elem.style.left) {
    elem.style.left = "0px";
  }
  if (!elem.style.top) {
    elem.style.top = "0px";
  }
  var xpos = parseInt(elem.style.left);
  var ypos = parseInt(elem.style.top);
  if (xpos == final_x  &&  ypos == final_y) {
  return true;
  }
  if (xpos < final_x) {
    var dist = Math.ceil((final_x - xpos)/10);
    xpos = xpos + dist;
  }
  if (xpos > final_x) {
    var dist = Math.ceil((xpos - final_x)/10);
    xpos = xpos - dist;
  }
  if (ypos < final_y) {
    var dist = Math.ceil((final_y - ypos)/10);
    ypos = ypos + dist;
  }
  if (ypos > final_y) {
    var dist = Math.ceil((ypos - final_y)/10);
    ypos = ypos - dist;
  }
  elem.style.left = xpos + "px";
  elem.style.top = ypos + "px";
  var repeat = "moveElement('"+elementID+"',"+final_x+","+final_y+","+interval+")";
  elem.movement = setTimeout(repeat,interval);
}
function classNormal(iFocusBtnID,iFocusTxID){
 var iFocusBtns= $(iFocusBtnID).getElementsByTagName('li');
 var iFocusTxs = $(iFocusTxID).getElementsByTagName('li');
 for(var i=0; i<iFocusBtns.length; i++) {
  iFocusBtns[i].className='normal';
  iFocusTxs[i].className='normal';
 }
}
function classCurrent(iFocusBtnID,iFocusTxID,n){
 var iFocusBtns= $(iFocusBtnID).getElementsByTagName('li');
 var iFocusTxs = $(iFocusTxID).getElementsByTagName('li');
 iFocusBtns[n].className='current';
 iFocusTxs[n].className='current';
}
function iFocusChange() {
 if(!$('ifocus')) return false;
 $('ifocus').onmouseover = function(){atuokey = true};
 $('ifocus').onmouseout = function(){atuokey = false};
 var iFocusBtns = $('ifocus_btn').getElementsByTagName('li');
 var listLength = iFocusBtns.length;
 iFocusBtns[0].onmouseover = function() {
  moveElement('ifocus_piclist',0,0,5);
  classNormal('ifocus_btn','ifocus_tx');
  classCurrent('ifocus_btn','ifocus_tx',0);
 }
 if (listLength>=2) {
  iFocusBtns[1].onmouseover = function() {
   moveElement('ifocus_piclist',0,-225,5);
   classNormal('ifocus_btn','ifocus_tx');
   classCurrent('ifocus_btn','ifocus_tx',1);
  }
 }
 if (listLength>=3) {
  iFocusBtns[2].onmouseover = function() {
   moveElement('ifocus_piclist',0,-450,5);
   classNormal('ifocus_btn','ifocus_tx');
   classCurrent('ifocus_btn','ifocus_tx',2);
  }
 }
 if (listLength>=4) {
  iFocusBtns[3].onmouseover = function() {
   moveElement('ifocus_piclist',0,-675,5);
   classNormal('ifocus_btn','ifocus_tx');
   classCurrent('ifocus_btn','ifocus_tx',3);
  }
 }
}
setInterval('autoiFocus()',5000);
var atuokey = false;
function autoiFocus() {
 if(!$('ifocus')) return false;
 if(atuokey) return false;
 var focusBtnList = $('ifocus_btn').getElementsByTagName('li');
 var listLength = focusBtnList.length;
 for(var i=0; i<listLength; i++) {
  if (focusBtnList[i].className == 'current') var currentNum = i;
 }
 if (currentNum==0 && listLength!=1 ){
  moveElement('ifocus_piclist',0,-225,5);
  classNormal('ifocus_btn','ifocus_tx');
  classCurrent('ifocus_btn','ifocus_tx',1);
 }
 if (currentNum==1 && listLength!=2 ){
  moveElement('ifocus_piclist',0,-450,5);
  classNormal('ifocus_btn','ifocus_tx');
  classCurrent('ifocus_btn','ifocus_tx',2);
 }
 if (currentNum==2 && listLength!=3 ){
  moveElement('ifocus_piclist',0,-675,5);
  classNormal('ifocus_btn','ifocus_tx');
  classCurrent('ifocus_btn','ifocus_tx',3);
 }
 if (currentNum==3 ){
  moveElement('ifocus_piclist',0,0,5);
  classNormal('ifocus_btn','ifocus_tx');
  classCurrent('ifocus_btn','ifocus_tx',0);
 }
 if (currentNum==1 && listLength==2 ){
  moveElement('ifocus_piclist',0,0,5);
  classNormal('ifocus_btn','ifocus_tx');
  classCurrent('ifocus_btn','ifocus_tx',0);
 }
 if (currentNum==2 && listLength==3 ){
  moveElement('ifocus_piclist',0,0,5);
  classNormal('ifocus_btn','ifocus_tx');
  classCurrent('ifocus_btn','ifocus_tx',0);
 }
}
addLoadEvent(iFocusChange);
</script>
</head>

<body id="body">
<!--通行证-->
<div class="ntes-passport-nav-bg" >
<div class="ntes-passport-nav" >
        <div class="web-version">
		<div ><a href="http://www.mgdatabase.com/">English Version</a></div>
		</div>
        <div class="rightCon">
                
                <div class="form-ipt"><label class="label" for="login_username">帐号：</label> <input id="login_username" class="form-ipt-user ui-ipt-enter" name="username" autocomplete="off" data-state="disable" type="text"></div>
                <div class="form-ipt"><label class="label" for="login_password">密码：</label> <input id="login_password" class="form-ipt-pwd ui-ipt-enter" name="password" data-state="disable" type="password"></div>
                <input value=" " class="log" data-state="disable" type="submit" />
				<a href="register.htm" class="ntes-nav-passport-login"  rel="nofollow">注册</a> | <a href="http://" class="ntes-nav-passport-login" >找回密码</a> | <a target="_self" href="http://www.mgdatabase.com " onClick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.mgdatabase.com');" title="把设为首页" class="ntes-nav-passport-login" >设为首页</a> | <a href="http://" class="ntes-nav-passport-login" >帮助</a>
        </div>
</div>
</div>
<!-- 搜索 -->
     
<div class="channel"> <div class="left"><a  href="http://"><img width="200" height="50" alt="亚稳材料数据库" src="img/logo.jpg" border="0"></a></div>
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
	
	<!--分类列表-->
	<DIV class=area>
	<DIV class=area-main><DIV class=left >
<div id="ifocus">
 <div id="ifocus_pic">
  <div id="ifocus_piclist" style="left:0; top:0;">
   <ul>
    <li><a href="#"><img src="img/01.jpg" alt="" /></a></li>
    <li><a href="#"><img src="img/02.jpg" alt="" /></a></li>
    <li><a href="#"><img src="img/03.jpg" alt="" /></a></li>
    <li><a href="#"><img src="img/04.jpg" alt="" /></a></li>
   </ul>
  </div>
  <div id="ifocus_opdiv"></div>
  <div id="ifocus_tx">
   <ul>
    <li class="current">新闻新闻新闻新闻新闻新闻新闻</li>
    <li class="normal">新闻新闻新闻新闻新闻新闻新闻</li>
    <li class="normal">新闻新闻新闻新闻新闻新闻新闻</li>
    <li class="normal">新闻新闻新闻新闻新闻新闻新闻</li>
   </ul>
  </div>
 </div>
 <div id="ifocus_btn">
  <ul>
   <li class="current"><img src="img/btn_01.jpg" alt="" /></li>
   <li class="normal"><img src="img/btn_02.jpg" alt="" /></li>
   <li class="normal"><img src="img/btn_03.jpg" alt="" /></li>
   <li class="normal"><img src="img/btn_04.jpg" alt="" /></li>
  </ul>
 </div>
</div><!--ifocus end-->
 </div>
<DIV class="title-bar3"><SPAN class="bt"><A href="http:// ">业界新闻</A></SPAN >
<SPAN class="more"><A href="xwlist.htm">更多</A></SPAN>
<LI><A href="article.htm">今日要闻今日要闻今日要闻今日要…</A></LI>
<LI><A href="#">今日要闻今日要闻今日要闻今日要…</A></LI>
<LI><A href="#">今日要闻今日要闻今日要闻今日要…</A></LI>
<LI><A href="#">今日要闻今日要闻今日要闻今日要…</A></LI>
<LI><A href="#">今日要闻今日要闻今日要闻今日要…</A></LI>
<LI><A href="#">今日要闻今日要闻今日要闻今日要…</A></LI>
<LI><A href="#">今日要闻今日要闻今日要闻今日要…</A></LI>
<LI><A href="#">今日要闻今日要闻今日要闻今日要…</A></LI>
<LI><A href="#">今日要闻今日要闻今日要闻今日要…</A></LI>
</DIV>
<br><br>
	<DIV class="title-bar1"><A href="http://">元素分类1</A></DIV>
	<DIV class="wz1">
	<A href="sy.htm">metallic element(s)</A><SPAN 
class=cLGray>|</SPAN><A href="sy.htm">metallic element(s)1</A><SPAN 
class=cLGray>|</SPAN><A href="sy.htm">metallic element(s)1</A><SPAN 
class=cLGray>|</SPAN><A href="sy.htm">metallic element(s)1</A><SPAN 
class=cLGray>|</SPAN><A href="sy.htm">metallic element(s)1</A><SPAN 
class=cLGray>|</SPAN><A href="sy.htm">metallic element(s)1</A><SPAN 
class=cLGray>|</SPAN><A href="sy.htm">metallic element(s)1</A><SPAN 
class=cLGray>|</SPAN><A href="sy.htm">metallic element(s)1</A><SPAN 
class=cLGray>|</SPAN><A href="sy.htm">metallic element(s)1</A></DIV> 
<DIV class="more"><A href="list.htm">查看全部 >>> </A> </DIV>
<SPAN class=blank20></SPAN>
	<DIV class="title-bar1"><A href="http://">元素分类2</A></DIV>
	<DIV class="wz1">
	<A href="sy.htm">metallic element(s)</A><SPAN 
class=cLGray>|</SPAN><A href="sy.htm">metallic element(s)1</A><SPAN 
class=cLGray>|</SPAN><A href="sy.htm">metallic element(s)1</A><SPAN 
class=cLGray>|</SPAN><A href="sy.htm">metallic element(s)1</A><SPAN 
class=cLGray>|</SPAN><A href="sy.htm">metallic element(s)1</A><SPAN 
class=cLGray>|</SPAN><A href="sy.htm">metallic element(s)1</A><SPAN 
class=cLGray>|</SPAN><A href="sy.htm">metallic element(s)1</A><SPAN 
class=cLGray>|</SPAN><A href="sy.htm">metallic element(s)1</A><SPAN 
class=cLGray>|</SPAN><A href="sy.htm">metallic element(s)1</A></DIV> 
<DIV class="more"><A href="list.htm">查看全部 >>> </A> </DIV>
<SPAN class=blank20></SPAN>
<DIV class="left"><DIV class="title-bar6"><SPAN class="bt"><A href="qxwlist.htm">文献资料</A></SPAN >
<SPAN class="more"><A href="qxwlist.htm">更多</A></SPAN>
<LI><A href="wxarticle.htm">《环球杂志》2012年第2期《我的新发现》</A></LI>
<LI><A href="#">《环球杂志》2012年第2期《我的新发现》</A></LI>
<LI><A href="#">《环球杂志》2012年第2期《我的新发现》</A></LI>
<LI><A href="#">《环球杂志》2012年第2期《我的新发现》</A></LI>
<LI><A href="#">《环球杂志》2012年第2期《我的新发现》</A></LI>
<LI><A href="#">《环球杂志》2012年第2期《我的新发现》</A></LI>
<LI><A href="#">《环球杂志》2012年第2期《我的新发现》</A></LI>
<LI><A href="#">《环球杂志》2012年第2期《我的新发现》</A></LI>
<LI><A href="#">《环球杂志》2012年第2期《我的新发现》</A></LI>
</DIV></div>
<DIV class="right"><DIV class="title-bar6"><SPAN class="bt"><A href="qzlist.htm">求助专区</A></SPAN >
<SPAN class="more"><A href="qzlist.htm">更多</A></SPAN>
<LI><A href="qzarticle.htm">咨询一个实验过程</A></LI>
<LI><A href="#">咨询一个实验过程</A></LI>
<LI><A href="#">咨询一个实验过程</A></LI>
<LI><A href="#">咨询一个实验过程</A></LI>
<LI><A href="#">咨询一个实验过程</A></LI>
<LI><A href="#">咨询一个实验过程</A></LI>
<LI><A href="#">咨询一个实验过程</A></LI>
<LI><A href="#">咨询一个实验过程</A></LI>
<LI><A href="#">咨询一个实验过程</A></LI>
</DIV></div>
</div>

	
		<!--添加入口-->
  <DIV class=sub-col-6> <img src="img/tj.jpg" border="0" width="240" height="100" usemap="#Map"> 
    <map name="Map">
      <area shape="rect" coords="24,5,226,38" href="wytj.htm" target="_blank">
      <area shape="rect" coords="20,41,219,63" href="wxtj.htm" target="_blank">
      <area shape="rect" coords="17,65,224,92" href="qztj.htm" target="_blank">
    </map>
  </div>
		<!--最新添加-->
<DIV class=sub-col-6>
<DIV class=mod>
<DIV class="news-column sline">
<DIV class="title-bar ui-til2">
<H2><A class=the-other-side 
href="#">最新</A></H2><SPAN 
class="more"><A 
href="#">更多</A></SPAN></DIV>
<DIV class="mod-imgText imgText-widget-1 clearfix">
<H3 class=main-title><A 
href="#">metallic element(s)</A></H3>
          <a 
href="http://"><img 
title="塑化剂白酒"到底有何害处？ alt="塑化剂白酒"到底有何害处？ src="img/dengtu.jpg" 
width=100 height=70 border="0"></a> 
          <P>具有金属通性的元素。金属元素种类高达八十余种</P>
        </DIV>
<UL class="mod-list sub-list">
  <LI><A 
  href="#">inorganic nonmetallic materials</A> 
  </LI>
  <LI><A 
  href="#">6C 14Si 32Ge 50Sn 82Pb </A> 
  </LI>
  <LI><A 
  href="#">6C 14Si 32Ge 50Sn 82Pb </A> 
  </LI>
  <LI><A 
  href="#">6C 14Si 32Ge 50Sn 82Pb </A> 
  </LI></UL><SPAN class=blank9></SPAN></DIV>  
  <!--最热条目-->
<DIV class="news-column sline">
<DIV class="title-bar ui-til2">
<H2><A class=the-insider href="#">最热</A></H2><SPAN 
class="more readAll"><A 
href="#">更多</A></SPAN></DIV>
<UL class="mod-list sub-list">
  <LI><A 
  href="#">PbSO4. 2.硅</A> 
  </LI>
  <LI><A 
  href="#">PbSO4. 2.硅</A> 
  </LI>
  <LI><A 
  href="#">PbSO4. 2.硅</A> 
  </LI>
    <LI><A 
  href="#">PbSO4. 2.硅</A> 
  </LI>
  <LI><A 
  href="#">PbSO4. 2.硅</A> 
  </LI>
    <LI><A 
  href="#">PbSO4. 2.硅</A> 
  </LI>
  <LI><A 
  href="#">PbSO4. 2.硅</A> 
  </LI>
  <LI><A 
  href="#">PbSO4. 2.硅</A> 
  </LI></UL><SPAN class=blank9></SPAN></DIV>
  <!--活跃用户-->
<DIV class="news-column sline">
<DIV class="title-bar ui-til2">
<H2><A class=the-huo href="#">活跃用户</A></H2><SPAN 
class="more readAll"><A 
href="#">更多</A></SPAN></DIV>
<UL class="mod-list sub-list">
  <LI><A 
  href="#">吴澧</A>　提交5条 
  </LI>
  <LI><A 
  href="#">周娅</A> 　提交4条
  </LI>
  <LI><A 
  href="#">王涌</A> 　提交3条
  </LI>
    <LI><A 
  href="#">周娅</A> 　提交3条
  </LI>
  <LI><A 
  href="#">王涌</A> 　提交3条
  </LI>
    <LI><A 
  href="#">周娅</A> 　提交2条
  </LI>
  <LI><A 
  href="#">王涌</A> 　提交2条
  </LI>
  <LI><A 
  href="#">王晓民</A>　提交2条 
  </LI></UL><SPAN class=blank9></SPAN></DIV>
    <!--帮助-->
<DIV class="news-column sline">
<DIV class="title-bar ui-til2">
<H2><A class=the-bang href="#">帮助</A></H2><SPAN 
class="more readAll"><A 
href="#">更多</A></SPAN></DIV>
<UL class="mod-list sub-list">
          <LI><A 
  href="#">如何注册？</A> </LI>
  <LI><A 
  href="#">如何找回密码？</A> 
  </LI>
  <LI><A 
  href="#">如何添加新条目？</A> 
  </LI>
    <LI><A 
  href="#">下载积分如何赚取？</A> 
  </LI>
  <LI><A 
  href="#">如何购买积分？</A> 
  </LI>
    <LI><A 
  href="#">如何购买积分？</A> 
  </LI>
  <LI><A 
  href="#">如何购买积分？</A> 
  </LI>
  <LI><A 
  href="#">如何购买积分？</A> 
  </LI></UL></DIV> 
  </DIV> 
  </DIV>

	</div>
			<DIV class=area>
							<div class="channel1">
	　
	</div>
    	<DIV class=area-main1>


	
	<DIV class="title-bar2"><A href="http://">友情合作</A></DIV><br><DIV class="wz1">
	<A href="http://">科学网</A><SPAN 
class=cLGray>|</SPAN><A href="http://">科学杂志</A></DIV> 
<DIV class="more"><A href="http://">查看全部 >>> </A> </DIV>
	</div></div>
	
<!--版权-->
<DIV class=area>
	<DIV class=nav-bottom>
<DIV class=company-info><A 
style="PADDING-BOTTOM: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; FONT-FAMILY: arial; FONT-SIZE: 14px; PADDING-TOP: 0px">&copy;</A> 
<A style="PADDING-LEFT: 0px">2013 亚稳材料数据库版权所有</A> <A 
href="about.htm">关于我们</A> | <A 
href="lxwm.htm">联系方法</A> | <A 
href="xszc.htm">隐私政策</A> | <A 
href="map.htm">网站地图</A> </DIV></DIV></DIV>

</body>
</html>