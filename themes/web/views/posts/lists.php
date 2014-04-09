<?php $this->renderPartial('/common/topdesc');?>
<div class="wrap clear">
	<?php $this->renderPartial('aside',array('colid'=>$info['id']));?>
	<div class="mainBox">	
            <?php $this->renderPartial('bread',array('info'=>$info));?>
		<div class="listBox clear">
                    <ul class="title">
                        <?php foreach($posts as $row):?> 
                            <li class="clear">	
                                <h2>			
                                <p class="y"><span class="date"><?php echo date('Y-m-d H:i',$row['cTime']);?></span></p>
                              <?php 
                              if($row['redirect_url']!=''){
                              		echo CHtml::link('【'.Columns::getOne($row['colid'],'title').'】'.$row['title'],zmf::config('readAttachDir').$row['redirect_url'],array('class'=>'title','target'=>'_blank'));
                              	}else{
                              		echo '【'.Columns::getOne($row['colid'],'title').'】'.$row['title'];
                              	}?>
                                </h2>						
                            </li>
                        <?php endforeach;?>
                    </ul>
                    
		</div>
            <div class="pagebar clear"><?php  $this->renderPartial('/common/pager',array('pages'=>$pages)); ?></div>
	</div>
	
</div>