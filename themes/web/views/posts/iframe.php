<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="zh-CN" />
<meta name="keywords" content="<?php echo zmf::config('siteKeywords');?>" />
<meta name="description" content="<?php echo zmf::config('siteDesc');?>" />
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<link rel="stylesheet" href="<?php echo $this->_theme->baseUrl?>/css/style.css">
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl . "/common/js/jquery.min.js";?>"></script>
</head>
<body>
    <style type="text/css">
body { padding: 0;  font:12px/1.5 'Microsoft Yahei','Simsun';color:#696969 }
a:focus { outline: none; }
#leftbox{position: fixed;left:0px;top:0px;z-index: 1000;}
#panel { background: #FFF; display: none; border-right:  solid 4px #d00b01;float:left;z-index:9999;overflow-y: auto}
.slide { margin: 0; padding: 0; z-index:9999 }
.btn-slide { background: #1e1e1e;text-align: center; width: 20px; height: 80px; padding: 15px 10px 10px 5px; display: block; color: #fff; text-decoration: none; float:left;}
.active { }
#panel ul{
    list-style: none;
}
#panel  .list {
overflow: hidden;
zoom: 1;
float: left;
display: inline;
width: 144px;
background: #fff;
margin: 0 18px 10px 18px;
padding: 5px 0;
overflow: hidden;
}
#panel p {
width: 144px;
text-align: center;
}
#panel img {
max-width: 144px;
border-radius: 3px;
}
#download{
    height:80px;
    width:100%;
    background:#000;
    bottom: 0px;
}
</style>
<div class="zmf">
<!--头-->
<div id="page">
    <div id="leftbox">
        <div style="display: block;" id="panel">
            <ul>
                <?php 
                if(!empty($listposts)){
                foreach($listposts as $key=>$_list){
                   $faceImg=  Attachments::getFaceImg($_list['id']); 
                    ?>
                <li class="list">
                <p>
                    <a href="<?php echo Yii::app()->createUrl('posts/read',array('id'=>$_list['id']));?>">
                        <?php if(!empty($faceImg)){?>
                    <img src="<?php echo zmf::uploadDirs($faceImg['logid'], 'site', $faceImg['classify'], '300').'/'.$faceImg['filePath'];?>"/>
                        <?php }else{ echo zmf::noImg();}?>
                    </a>
                </p>                    
                <span>
                    <?php echo CHtml::link(zmf::subStr($_list['title'],10),array('posts/show','id'=>$_list['id']),array('target'=>'_blank'));?>
                <div class="post_meta">Posted at <?php echo date('Y/m/d',$_list['cTime']);?></div>                
                <?php        
                if($_list['redirect_url']!=''){
                    echo CHtml::link('阅读',zmf::config('readAttachDir').$_list['redirect_url'],array('class'=>'arrow_link','target'=>'_blank'));
                }                
                if($_list['copy_url']!=''){
                    echo CHtml::link('下载',zmf::config('downloadAttachDir').$_list['copy_url'],array('class'=>'arrow_link','target'=>'_blank'));
                }
                ?>                
                </span>
            </li>             
            <?php }?>
            <?php }?>  
        </ul>
            <div style="clear: both"></div>
            <div id='download'>
                
            </div>
       </div>
        <p class="slide" id="slide"><a href="javascript:;" class="btn-slide active">更多精彩</a></p>        
    </div>
<iframe src ="<?php echo $page['redirect_url'];?>" frameborder="0" marginheight="0" marginwidth="0" frameborder="0" scrolling="no" id="ifm" name="ifm" width="100%">
</iframe> 
</div><!-- page -->
<script type="text/javascript"> 
    $(document).ready(function(){
        if(($(window).width()/2+4)>580){
            $("#panel").width('580');
        }else{
            $("#panel").width($(window).width()/2+4);
        }
        $("#panel").height($(window).height());
        $("#leftbox").width($("#panel").width()+45);
        $("#ifm").height($(window).height()-40);
        $("#slide").css('margin-top',($(window).height()/2-$("#slide").height()/2));
        $(".btn-slide").click(function(){
        $("#panel").toggle();
        $(this).toggleClass("active"); return false;
        });
    });
</script>
</body>
</html>