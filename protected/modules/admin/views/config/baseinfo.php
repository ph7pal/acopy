<h3>网站基本信息设置</h3>
<?php echo CHtml::hiddenField('type',$type);?>
<p><label>网站标题：</label><input class="form-control" name="sitename" id="sitename" value="<?php echo $c['sitename'];?>"/></p>
<p><label>简短标题：</label><input class="form-control" name="shortTitle" id="shortTitle" value="<?php echo $c['shortTitle'];?>"/></p>
<p><label>网站域名：</label><input class="form-control" name="domain" id="domain" value="<?php echo $c['domain'];?>"/></p>
<p><label>网站根目录：</label><input class="form-control" name="baseurl" id="baseurl" value="<?php echo $c['baseurl'];?>"/></p>
<p><label>网站关键字：</label><textarea class="form-control" name="siteKeywords"><?php echo $c['siteKeywords'];?></textarea></p>
<p><label>网站描述：</label><textarea class="form-control" name="siteDesc"><?php echo $c['siteDesc'];?></textarea></p>
<p><label>网站版本：</label><input class="form-control" name="version" id="version" value="<?php echo $c['version'];?>"/></p>
<p><label>新用户默认组别：</label>
    <?php echo CHtml::dropDownList('userDefaultGroup',$c['userDefaultGroup'],UserGroup::getGroups(true),array('options' => array($info['userDefaultGroup']=>array('selected'=>true)))); ?>
    
</p>
