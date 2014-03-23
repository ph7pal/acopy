<div class="form">
  <?php if(Yii::app()->user->isGuest){?>
    <?php $this->renderPartial('//common/notLoginInfo');?>
  <?php }else{?>
    
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comments-addcomment-form',
	'action'=>$this->createUrl('comments/add'),
	'enableAjaxValidation'=>true,
    'enableClientValidation'=>true
)); ?>
<!--?php echo $form->errorSummary($model); ?-->
<?php echo $form->hiddenField($model,'uid',array('value'=>Yii::app()->user->id)); ?>
<?php echo $form->hiddenField($model,'logid',array('value'=>$keyid)); ?>
<?php echo $form->hiddenField($model,'classify',array('value'=>'article')); ?>
<?php echo $form->hiddenField($model,'tocommentid',array('value'=>'0')); ?>    

    <style>
        #replyoneHolder a{color:red}
    </style>   
<div id="replyoneHolder" class="row"></div>    
<div class="row" id="commend">
 <?php echo $form->textArea($model,'content',array('class'=>'simplearea')); 
 echo $form->error($model,'uid'); 
           echo $form->error($model,'content'); ?>
           
</div>
<div class="row buttons"> 
 <span style='float:left'>
<?php echo CHtml::ajaxSubmitButton('提交',$this->createUrl('comments/add',array('id'=>$keyid,'type'=>'article')),
        array(
            'beforeSend'=>'function(){
            loading("loader",0);
            }',
            'success'=>"function(data){
                data = eval('('+data+')');
                if(data['status']=='0'){
                dialog(data['msg']);
                clearDiv('loader');
                }else{
                window.location.reload();
                }
            }",
        ),array('class'=>'submit')); ?></span>
    <span id="loader"></span>
</div> 
<?php $this->endWidget(); ?>
  <?php }?>
</div>