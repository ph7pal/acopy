<fieldset>
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'manage-items-form',
        'action' => Yii::app()->createUrl('admin/del/sth'),
    ));
    $mange = new Manage();
    echo $form->hiddenField($mange, 'table', array('value' => $table));
    ?>
    <input type='hidden' name='YII_CSRF_TOKEN' value='<?php echo Yii::app()->request->csrfToken; ?>'/>
    <div class="table-responsive">
        <table>
            <tr>
                <td>&nbsp;</td>
                <td>标题</td>
                <td>用户组</td>
            </tr>
            <?php foreach ($posts as $row): ?> 
                <tr>
                    <td><label class="checkbox-inline"><?php echo CHtml::checkBox('ids[]', '', array('value' => $row['id'])); ?></label></td>
                    <td><?php echo $row['truename']; ?></td>
                    <td><?php echo UserGroup::getInfo($row['groupid'], 'title'); ?></td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="3">
                    <span style='float:left'><label class="checkbox-inline"><?php echo CHtml::checkBox('checkAll', '', array('class' => 'checkAll')); ?></label></span>
                    <span><?php echo $form->dropDownList($mange, 'type', tools::multiManage(), array('class' => '', 'empty' => '请选择')); ?></span>
                    <?php echo CHtml::submitButton('操作'); ?>                    
                    <div class="manu" style="float:right"><?php $this->widget('CLinkPager', array('pages' => $pages)); ?> </div>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <?php echo CHtml::link('新增', array('users/add'), array('class' => 'btn btn-default')); ?>
                </td>
            </tr>
        </table>
    </div>
    <?php $this->endWidget(); ?>
</fieldset>