<fieldset>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'posts-addPost-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>true,
)); ?>
<div class="form">
    <?php echo $form->errorSummary($model); ?>
    <table>
	<?php echo $form->errorSummary($model); ?>
        <?php echo $form->hiddenField($model,'id',array('value'=>$keyid)); ?>
        <?php echo Chtml::hiddenField('colid',$info['colid']); ?>
        <tr>
            <td class="post_title"><?php echo $form->labelEx($model,'colid'); ?></td><td>&nbsp;</td>
        </tr>
        <tr>
            <td>
                <?php echo CHtml::dropDownList('columnid','',$cols,array('onchange'=>'ajaxAddColumn("Posts");','options' => array($info['colid']=>array('selected'=>true)))); ?>
                <span id="addPostsCol"></span><?php echo CHtml::link('新增',array('columns/add'));?>                
            </td><td><?php echo $form->error($model,'colid'); ?></td>
        </tr>
        <tr>
            <td class="post_title"><?php echo $form->labelEx($model,'title'); ?></td><td>&nbsp;</td>
        </tr>
        <tr>
            <td><?php echo $form->textField($model,'title',array('class'=>'form-control','value'=>$info['title'])); ?></td><td><?php echo $form->error($model,'title'); ?></td>
        </tr>
	
        <tr>
            <td class="post_title"><?php echo $form->labelEx($model,'intro'); ?></td><td>&nbsp;</td>
        </tr>
        <tr>
            <td><?php echo $form->textArea($model,'intro',array('class'=>'form-control','value'=>$info['intro'])); ?></td><td><?php echo $form->error($model,'intro'); ?></td>
        </tr>
        <tr>
            <td class="post_title"><?php echo $form->labelEx($model,'redirect_url'); ?></td><td>&nbsp;</td>
        </tr>
        <tr>
            <td><?php echo zmf::config('attachDir'); ?><?php echo $form->textField($model,'redirect_url',array('class'=>'','value'=>$info['redirect_url'],'style'=>'width:600px')); ?></td><td><?php echo $form->error($model,'redirect_url'); ?></td>
        </tr>        
        <script>
    var imgUploadUrl="<?php echo Yii::app()->createUrl('attachments/upload',array('id'=>$info['id'],'type'=>'coverimg'));?>";  	
    $(document).ready(
    function(){    	
    	myUploadify('<?php echo CHtml::activeId($model,"attachid");?>_upload','<?php echo CHtml::activeId($model,"attachid");?>',1);
    });  
</script>
  <tr>
            <td class="post_title"><?php echo $form->labelEx($model,'attachid'); ?></td><td>&nbsp;</td>
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
            </td>
            <td>
              <input type="hidden" id="file_upload_input"/>  
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <?php echo CHtml::submitButton('提交',array('class'=>'btn btn-default')); ?>
            </td>
        </tr>
</table>   
</div><!-- form -->  

<?php $this->endWidget(); ?>

</fieldset>
