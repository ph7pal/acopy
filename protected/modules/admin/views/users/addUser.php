<fieldset>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-addUser-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>true,
)); ?>
    <table>
	<?php echo $form->errorSummary($model); ?>
	<?php echo $form->hiddenField($model,'id',array('value'=>$info['id'])); ?>
        <tr>
            <td class="post_title"><?php echo $form->labelEx($model,'username'); ?></td><td>&nbsp;</td>
        </tr>
        <tr>
            <td><?php echo $form->textField($model,'username',array('class'=>'form-control','value'=>$info['username'])); ?></td><td><?php echo $form->error($model,'username'); ?></td>
        </tr>
        <tr>
            <td class="post_title"><?php echo $form->labelEx($model,'password'); ?></td><td>&nbsp;</td>
        </tr>
        <tr>
            <td><?php echo $form->passwordField($model,'password',array('class'=>'form-control')); ?></td><td><?php echo $form->error($model,'password'); ?></td>
        </tr>
        <tr>
            <td class="post_title"><?php echo $form->labelEx($model,'truename'); ?></td><td>&nbsp;</td>
        </tr>
        <tr>
            <td><?php echo $form->textField($model,'truename',array('class'=>'form-control','value'=>$info['truename'])); ?></td><td><?php echo $form->error($model,'truename'); ?></td>
        </tr>
        <tr>
            <td class="post_title"><?php echo $form->labelEx($model,'groupid'); ?></td><td>&nbsp;</td>
        </tr>
        <tr>
            <td><?php echo $form->dropDownList($model,'groupid',$groups,array('options' => array($info['groupid']=>array('selected'=>true)))); ?></td><td><?php echo $form->error($model,'groupid'); ?></td>
        </tr>
        <tr>
            <td class="post_title"><?php echo $form->labelEx($model,'email'); ?></td><td>&nbsp;</td>
        </tr>
        <tr>
            <td><?php echo $form->textField($model,'email',array('class'=>'form-control','value'=>$info['email'])); ?></td><td><?php echo $form->error($model,'email'); ?></td>
        </tr>        
        <tr>
            <td class="post_title"><?php echo $form->labelEx($model,'qq'); ?></td><td>&nbsp;</td>
        </tr>
        <tr>
            <td><?php echo $form->textField($model,'qq',array('class'=>'form-control','value'=>$info['qq'])); ?></td><td><?php echo $form->error($model,'qq'); ?></td>
        </tr>
        <tr>
            <td class="post_title"><?php echo $form->labelEx($model,'mobile'); ?></td><td>&nbsp;</td>
        </tr>
        <tr>
            <td><?php echo $form->textField($model,'mobile',array('class'=>'form-control','value'=>$info['mobile'])); ?></td><td><?php echo $form->error($model,'mobile'); ?></td>
        </tr>
        <tr>
            <td class="post_title"><?php echo $form->labelEx($model,'telephone'); ?></td><td>&nbsp;</td>
        </tr>
        <tr>
            <td><?php echo $form->textField($model,'telephone',array('class'=>'form-control','value'=>$info['telephone'])); ?></td><td><?php echo $form->error($model,'telephone'); ?></td>
        </tr>
         <tr>
            <td class="post_title"><?php echo CHtml::submitButton('提交',array('class'=>'btn btn-primary')); ?></td><td>&nbsp;</td>
        </tr>
</table>
<?php $this->endWidget(); ?>

</div><!-- form -->
</fieldset>