<?php

class AttachmentsController extends H {

    public $layout = 'admin';

    public function actionIndex() {
        $this->render('index');
    }

    public function actionUpload() {
        $this->checkPower('upload');
        $uptype = zmf::filterInput($_GET['type'], 't', 1);
        if (!isset($uptype) OR !in_array($uptype, array('columns', 'coverimg', 'ads', 'link', 'album', 'posts'))) {
            $this->jsonOutPut(0, '请设置上传所属类型' . $uptype);
        }
        $logid = zmf::filterInput($_GET['id']);
        if (!isset($logid) OR empty($logid)) {
            $this->jsonOutPut(0, Yii::t('default', 'pagenotexists'));
        }
        if (Yii::app()->request->getParam('PHPSESSID')) {
            Yii::app()->session->close();
            $res = Yii::app()->session->setSessionID(Yii::app()->request->getParam('PHPSESSID'));
            Yii::app()->session->open();
        }
        if (Yii::app()->user->isGuest) {
            $this->jsonOutPut(0, Yii::t('default', 'loginfirst'));
        }
        if (!isset($_FILES["filedata"]) || !is_uploaded_file($_FILES["filedata"]["tmp_name"]) || $_FILES["filedata"]["error"] != 0) {
            $this->jsonOutPut(0, '无效上传，请重试');
        }
        $model = new Attachments();
        $img = CUploadedFile::getInstanceByName('filedata');
        $ext = $img->getExtensionName();
        $sizeinfo = getimagesize($_FILES["filedata"]["tmp_name"]);
        // if($sizeinfo['0']<zmf::config('imgMinWidth') OR $sizeinfo[1]<zmf::config('imgMinHeight')){
        //     MsgController::jsonOutPut(0,"要求上传的图片尺寸，宽不能不小于".zmf::config('imgMinWidth')."px，高不能小于".zmf::config('imgMinHeight')."px."); 
        // }              
        // $size=$img->getSize();
        // if($size > zmf::config('imgMaxSize')){            
        //          MsgController::jsonOutPut(0,'上传文件最大尺寸为：'.tools::formatBytes(zmf::config('imgMaxSize')));             
        // }
        //$upExt=zmf::config("imgAllowTypes");
        // if(!preg_match('/^('.str_replace('*.','|',str_replace(';','',$upExt)).')$/i',$ext)){            
        //          MsgController::jsonOutPut(0,'上传文件扩展名必需为：'.$upExt);             
        //}        

        $dirs = zmf::uploadDirs($logid, 'app', $uptype);
        foreach ($dirs as $dir) {
            zmf::createUploadDir($dir . '/');
        }
        $fileName = uniqid() . '.' . $ext;
        $origin = $dirs['origin'] . '/';
        unset($dirs['origin']);
        if (move_uploaded_file($_FILES["filedata"]["tmp_name"], $origin . $fileName)) {
            //$sizeinfo=filesize($origin . $fileName);
            //$_dir=zmf::uploadDirs($logid,'site','scenic','origin');
            //$imginfo=getimagesize($_dir.'/'.$fileName);
            $data = array();
            $data['uid'] = Yii::app()->user->id;
            $data['logid'] = $logid;
            $data['filePath'] = $fileName;
            $data['fileDesc'] = $fileName;
            $data['classify'] = $uptype;
            $data['covered'] = '0';
            // $data['width']   = $imginfo[0];
            //$data['height']   = $imginfo[1];
            //$data['filesize']=tools::formatBytes($sizeinfo);
            $data['cTime'] = time();
            $data['status'] = 1;
            $model->attributes = $data;
            if ($model->validate()) {
                if ($model->save()) {
                    UserAction::record('upload', $model->id);
                    $image = Yii::app()->image->load($origin . $fileName);
                    foreach ($dirs as $dk => $_dir) {
                        $image->resize($dk, $dk)->quality(80);
                        $image->save($_dir . '/' . $fileName);
                    }
                    $returnimg = zmf::uploadDirs($logid, 'site', $uptype, 124) . '/' . $fileName;
                    //zmf::delCache("attachTotal{$logid}");
                    //UserController::recordAction($model->id,'uploadimg','client');                                         
                    $outPutData = array(
                        'status' => 1,
                        'attachid' => $model->id,
                        'imgsrc' => $returnimg
                    );
                    $json = CJSON::encode($outPutData);
                    echo $json;
                }
            }
        }
    }

}