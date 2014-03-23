<form method="POST"  class="jNice" action="<?php echo Yii::app()->createUrl('default/baseSet');?>">
<input type="hidden" value="<?php echo Yii::app()->request->csrfToken;?>" name="YII_CSRF_TOKEN"/>
<h3>敏感词设置</h3>
<fieldset> 
<p><label>敏感词，每行一个(留空则关闭过滤)：</label><textarea class="form-control" name="badwords"><?php echo $bad;?></textarea></p>
</fieldset>
</form>