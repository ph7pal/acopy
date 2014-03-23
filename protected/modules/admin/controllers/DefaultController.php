<?php

class DefaultController extends H {

    public $layout = 'admin';

    public function actionHome() {
        $this->info();
    }

    public function info() {

        $arr = array();
        $arr['serverSoft'] = $_SERVER['SERVER_SOFTWARE'];
        $arr['serverOS'] = PHP_OS;
        $arr['PHPVersion'] = PHP_VERSION;
        $arr['fileupload'] = ini_get('file_uploads') ? ini_get('upload_max_filesize') : '禁止上传';
        $dbsize = 0;
        $connection = Yii::app()->db;
        $sql = 'SHOW TABLE STATUS LIKE \'' . $connection->tablePrefix . '%\'';
        $command = $connection->createCommand($sql)->queryAll();
        foreach ($command as $table) {
            $dbsize += $table['Data_length'] + $table['Index_length'];
        }
        $mysqlVersion = $connection->createCommand("SELECT version() AS version")->queryAll();
        $arr['mysqlVersion'] = $mysqlVersion[0]['version'];
        $arr['dbsize'] = $dbsize ? $this->byteFormat($dbsize) : '未知';
        $arr['serverUri'] = $_SERVER['SERVER_NAME'];
        $arr['maxExcuteTime'] = ini_get('max_execution_time') . ' 秒';
        $arr['maxExcuteMemory'] = ini_get('memory_limit');
        $arr['excuteUseMemory'] = function_exists('memory_get_usage') ? $this->byteFormat(memory_get_usage()) : '未知';
        $this->render('siteinfo', array('siteinfo' => $arr));
    }

    public function actionBad() {
        $bd = Yii::app()->basePath . '/config/badwords.txt';
        if (is_file($bd)) {
            $badwords = zmf::readTxt($bd);
        }
        $this->render('siteBase', array('bad' => $badwords));
    }

    public function actionBaseSet() {
        $badwords = $_POST['badwords'];
        if (!empty($badwords)) {
            $this->writeBad($badwords);
        }
        $this->redirect(array('site/baseinfo'));
    }

    private function writeBad($data) {
        $dir = Yii::app()->basePath . '/config/badwords.txt';
        $bdc = Yii::app()->basePath . '/config/bad_words_cache.php';
        $fp = fopen($dir, 'w');
        $fw = fwrite($fp, $data);
        if ($fw) {
            zmf::badWordsCache($dir, $bdc);
            fclose($fp);
            return true;
        } else {
            fclose($fp);
            return false;
        }
    }

}

?>
