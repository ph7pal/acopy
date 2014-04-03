<!doctype html>
<html>
<head>
<title><?php echo zmf::config('sitename');?> 管理中心</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php Yii::app()->clientScript->registerCoreScript('jquery',CClientScript::POS_END);?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl?>/common/admin/manage.css">
</head>
<body scroll="no">
<div class="header">
  <div class="logo"><img src="<?php echo zmf::config('baseurl').zmf::config('logo');?>"/></div>
  <div class="nav">
    <ul>
      <?php $usersbar=GroupPowers::adminBar();
      if(!empty($usersbar)){
          $i=0;
      foreach($usersbar['firsts'] as $v){      
      ?>
        <?php if(!is_array($v)){?>        
        <li index="<?php echo $i;?>">
        <div><?php echo $v;?></div>
      </li>   
        <?php }else{if(!empty($v)){ foreach($v as $_k=>$_v){?>
      <li index="<?php echo $_k;?>">
        <div><?php echo $_v;?></div>
      </li>
        <?php }}}?>
      <?php $i++; }}?> 
    </ul>
  </div>
  
  <div class="logininfo">
      <span class="welcome">欢迎：<?php echo Yii::app()->user->name;?></span>
      <span ><?php echo CHtml::link('修改密码',array('users/update','id'=>Yii::app()->user->id),array('target'=>'main'));?></span>
      <span ><?php echo CHtml::link('站点首页',Yii::app()->baseUrl,array('target'=>'_blank'));?></span>
      <span ><?php echo CHtml::link('退出',array('site/logout'));?></span>
  </div>
</div>

<div class="topline">
  <div class="toplineimg left" id="imgLine"></div>
</div>



<div class="main" id="main">
  <div class="mainA">
    <div id="leftmenu" class="menu">   
      <?php $usersbar=GroupPowers::adminBar();
      if(!empty($usersbar)){
          $y=0;
      foreach($usersbar['seconds'] as $s){      
      ?>
        <ul index="<?php echo $y;?>" class="left_menu">   
            <?php $z=0;foreach($s as $t){?>
            <?php if(!is_array($t)){?>        
        <li index="<?php echo $z;?>">
        <?php echo $t;?>
      </li>   
        <?php }else{if(!empty($t)){ foreach($t as $_z=>$_t){?>
      <li index="<?php echo $_z;?>">
        <?php echo $_t;?>
      </li>
        <?php }}}?>
            <?php $z++;}?>
       </ul>
      
      <?php $y++; }}?> 
       
    </div>
  </div>
  <div class="mainB" id="mainB">
    <iframe src="<?php echo $this->createUrl('default/home')?>" name="main" id="main" width="100%" height="100%" scoll="yes"></iframe>
  </div>
</div>


<script type="text/javascript">
window.onload =window.onresize= function(){winresize();}
function winresize()
{
function $(s){return document.getElementById(s);}
var D=document.documentElement||document.body,h=D.clientHeight-90,w=D.clientWidth-160;
 $("main").style.height=h+"px";
 $("mainB").style.width=w+"px";
}
$(document).ready(function(){
    var s=document.location.hash;
    if(s==undefined||s==""){s="#0_0";}
    s=s.slice(1);
    var navIndex=s.split("_");
    $(".nav").find("li:eq("+navIndex[0]+")").addClass("active");
    var targetLink=$(".menu").find("ul").hide().end()
                             .find(".left_menu:eq("+navIndex[0]+")").show()
                             .find("li:eq("+navIndex[1]+")").addClass("active")
                             .find("a").attr("href");
    $("#main").attr("src",targetLink);
    $(".nav").find("li").click(function(){
        $(this).parent().find("li").removeClass("active").end().end()
               .addClass("active");
        var index=$(this).attr("index");
        $(".menu").find(".left_menu").hide();
        $(".menu").find(".left_menu:eq("+index+")").show()
                  .find("li").removeClass("active").first().addClass("active");
        document.location.hash=index+"_0";
    });
    $(".left_menu").find("li").click(function(){
            $(this).parent().find("li").removeClass("active").end().end()
                            .addClass("active");
        document.location.hash=$(this).parent().attr("index")+"_"+$(this).attr("index");
    });
});
if (top != self) {
        window.top.location.href = location;
    }
</script>
</body>
</html>