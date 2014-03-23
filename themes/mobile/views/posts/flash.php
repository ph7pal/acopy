<div class="mod-title">
    <p><?php echo $info['title']; ?></p>
</div>
<?php
$listposts = Posts::listPosts($info['id'],'id,title,redirect_url,cTime',0);
if (!empty($listposts)) {
    foreach ($listposts as $key => $_list) {
        $faceImg = Attachments::getFaceImg($_list['id']);
        ?>

        <div class="listItem">
            <a href="<?php echo Yii::app()->createUrl('posts/show', array('id' => $_list['id'])); ?>">
                <div class="faceimg"><img src="<?php echo $this->_theme->baseUrl ?>/images/220.jpg" width="110"></div>
            </a>
            <ul class="list_b">
                <a href="<?php echo Yii::app()->createUrl('posts/show', array('id' => $_list['id'])); ?>" class="dl">
                    <li class="dl-title break-word"><?php echo $_list['title']; ?></li>
                </a>
                <li class="dl-data">
                    <span><?php echo date('Y/m/d', $_list['cTime']); ?></span>                
                </li>
                <li class="dl-btn">
                    <?php
                        echo CHtml::link('阅读',array('posts/show','id'=>$_list['id']));
                        if($_list['redirect_url']!=''){
                            echo CHtml::link('下载',zmf::config('attachDir').$_list['redirect_url'],array('target'=>'_blank'));
                        }
                    ?>  
                </li>
            </ul>
        </div>
        <hr class="hr-solid">
    <?php } ?>
<?php } ?>     