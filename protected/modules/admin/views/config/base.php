<h3>网站运行基本设置</h3>
<?php echo CHtml::hiddenField('type',$type);?>
<p><label>站点状态：</label>
    <select name="closeSite" id="closeSite">
        <option value="0" <?php if($c['closeSite']=='0'){?>selected="selected"<?php }?>>关闭</option>
        <option value="1" <?php if($c['closeSite']=='1'){?>selected="selected"<?php }?>>开启</option>
    </select>
</p>
<p><label>关闭原因：</label><textarea class="form-control" name="closeSiteReason"><?php echo $c['closeSiteReason'];?></textarea></p>	
<p><label>开启手机端：</label>
    <select name="mobile" id="mobile">
        <option value="0" <?php if($c['mobile']=='0'){?>selected="selected"<?php }?>>关闭</option>
        <option value="1" <?php if($c['mobile']=='1'){?>selected="selected"<?php }?>>开启</option>
    </select>
</p>
<p><label>附件地址前缀：</label><input class="form-control" name="attachDir" id="attachDir" value="<?php echo $c['attachDir'];?>"/></p>
<p><label>服务宗旨(中文)：</label><input class="form-control" name="service_aim_cn" id="service_aim_cn" value="<?php echo $c['service_aim_cn'];?>"/></p>
<p><label>服务宗旨(英文)：</label><input class="form-control" name="service_aim_en" id="service_aim_en" value="<?php echo $c['service_aim_en'];?>"/></p>