<?php 
$this->renderPartial('/common/topdesc');
?>
<div class="wrap clear">
	<?php $this->renderPartial('aside');?>
	<div class="mainBox">
		<div class="postWrap">
             <?php $this->renderPartial('bread',array('title'=>'新增'));?>
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'posts-addPost-form',
		'enableAjaxValidation'=>true,
	)); ?>
    <table width="700px">
	<?php echo $form->errorSummary($model); ?>
        <?php echo $form->hiddenField($model,'id',array('value'=>$keyid)); ?>
        <tr>
            <td class="post_title"><?php echo $form->labelEx($model,'colid'); ?></td>
        </tr>
        <tr>
            <td>
                <?php echo CHtml::dropDownList('columnid','',$cols,array('onchange'=>'ajaxAddColumn("Posts");','options' => array($info['colid']=>array('selected'=>true)))); ?>
                <span id="addPostsCol"></span>
                    <?php echo $form->error($model,'colid'); ?>           
            </td>
        </tr>
        <tr>
            <td class="post_title"><?php echo $form->labelEx($model,'title'); ?></td>
        </tr>
        <tr>
            <td>
                <?php echo $form->textField($model,'title',array('class'=>'form-control','value'=>$info['title'])); ?>
                <?php echo $form->error($model,'title'); ?>
            </td>
        </tr>
                
        <script>
    var imgUploadUrl="<?php echo Yii::app()->createUrl('attachments/upload',array('id'=>$info['id'],'type'=>'coverimg'));?>";  	
    $(document).ready(
    function(){    	
    	myUploadify('<?php echo CHtml::activeId($model,"attachid");?>_upload','<?php echo CHtml::activeId($model,"attachid");?>',1);
    });  
</script>
  <tr>
            <td class="post_title"><?php echo $form->labelEx($model,'attachid'); ?></td>
        </tr>
        <tr>
            <td>
                <div id="<?php echo CHtml::activeId($model,"attachid");?>_upload"></div>
                <div id="fileQueue" style="clear:both;"></div>
                <div id="fileSuccess" style="clear:both;"></div>
<?php if($info['attachid']>0){    
    $attachinfo=  Attachments::getFaceImg($info['id']);
    if($attachinfo){
        echo '<div id="uploadAttach'.$info['attachid'].'"><img src="'.zmf::imgurl($info['id'],$attachinfo['filePath'],124,$attachinfo['classify']).'"/>'
                .CHtml::link('删除','javascript:;',array('onclick'=>"delUploadImg({$info['attachid']},'".CHtml::activeId($model,"attachid")."')",'confirm'=>'不可恢复，确认删除？'))
                . '</div>';
    }
}

?>
                <?php echo $form->hiddenField($model,'attachid',array('class'=>'form-control','value'=>$info['attachid'])); ?>
                <input type="hidden" id="file_upload_input"/>
            </td>            
        </tr>        
        <tr>
            <td class="post_title"><?php echo $form->labelEx($model,'reply_allow'); ?></td>
        </tr>
        <tr>
            <td><?php echo $form->dropDownList($model,'reply_allow',tools::allowOrNot(),array('options' => array($info['reply_allow']=>array('selected'=>true)))); ?></td>
        </tr>
        <tr>
            <td class="post_title"><?php echo $form->labelEx($model,'content'); ?></td>
        </tr>
        <tr>
            <td>
                <?php $this->renderPartial('//common/editor',array('model'=>$model,'keyid'=>$keyid,'content'=>$info['content']));?>
                <?php echo $form->error($model,'content'); ?>
            </td>
        </tr>
        
        <tr>
            <td><?php echo CHtml::submitButton('提交',array('class'=>'btn btn-default')); ?></td>
        </tr>        

<?php $this->endWidget(); ?>
</table>
</div><!-- form -->
</div>
</div>