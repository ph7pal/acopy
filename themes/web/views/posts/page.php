<?php $this->renderPartial('/common/topdesc');?>
<div class="wrap clear">
	<?php $this->renderPartial('aside',array('colid'=>$info['id']));?>
	<div class="mainBox">
		<div class="postWrap">
                    <?php $this->renderPartial('bread',array('info'=>$info));?>
			<div class="h head"> 
			<h1 class="title"><?php echo $page['title'];?></h1>
                        <?php if($page['second_title']!=''){?>
                        <p class="info"><?php echo $page['second_title'];?></p>
                        <?php }?>
                        <p class="info"> 
                            <?php echo date('Y-m-d',$page['cTime']);?>                            
                            <?php if($page['author']!=''){?><span class="split">|</span>发布者:<?php echo $page['author'];?><?php }?>
                            <?php if($page['copy_url']!='' && $page['copy_from']!=''){?>
                            <span class="split">|</span> 
                            <?php if($page['copy_url']!=''){?>
                                来源：
                                <a href="<?php if($page['copy_url']!=''){echo $page['copy_url'];}?>" target="_blank">
                                <?php if($page['copy_from']!=''){?><?php echo $page['copy_from'];?><?php }?>                            
                                </a> 
                            <?php }else{?>
                                来源：<?php echo $page['copy_from'];?>
                            <?php }}?>
                            <span class="split">|</span> 
                            查看：<?php echo $page['hits'];?>
                        </p>
			</div>
                    
                   
			<div class="clear cdata">
                            <p class="intro"><?php echo nl2br($page['intro']);?></p>                            
                             <?php $attachinfo=  Attachments::getFaceImg($page['id']);if($attachinfo){?>
		                    <div class="clear cfaceimg <?php if($info['classify']=='page'){ echo 'pageface';}?>">
		                        <a href="<?php echo zmf::imgurl($page['id'],$attachinfo['filePath'],'origin',$attachinfo['classify']);?>">
		                        <?php echo '<img src="'.zmf::imgurl($page['id'],$attachinfo['filePath'],'origin',$attachinfo['classify']).'" alt="'.$page['title'].'的封面" title="'.$page['title'].'"/>';?>
		                        </a>
		                    </div>    
		                    <?php }?>
		                    <p><?php echo $page['content'];?></p>
                            <p class="link-btn">
                                <?php        
                                if($page['redirect_url']!=''){
                                    echo CHtml::link('阅读',zmf::config('readAttachDir').$page['redirect_url'],array('class'=>'btn-link red','target'=>'_blank'));
                                }                
                                if($page['copy_url']!=''){
                                    echo CHtml::link('下载',zmf::config('downloadAttachDir').$page['copy_url'],array('class'=>'btn-link black','target'=>'_blank'));
                                }
                                ?>       
                            </p>
			</div>                        
                        <div class="preNext clear">                            
                                <?php if(!empty($preInfo)){?>
                                <em class="floatL">上一篇：
                                <?php echo CHtml::link($preInfo['title'],array('posts/show','id'=>$preInfo['id']));?>
                                </em>
                                <?php }?>  
                                <?php if(!empty($nextInfo)){?>
                                <em class="floatR">下一篇：
                                <?php echo CHtml::link($nextInfo['title'],array('posts/show','id'=>$nextInfo['id']));?>
                                </em>
                                <?php }?>                             
                        </div>
		</div>
	</div>	
</div>