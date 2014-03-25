<?php

class IndexController extends T {

    public $layout = 'main';

    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    public function actionIndex() {
        $sql = "SELECT * FROM {{columns}} WHERE position='main' AND status=1 ORDER BY `cTime` DESC";
        Posts::getAll(array('sql'=>$sql,'pageSize'=>1), $pages, $mainCols);
//        $_mainCols=Columns::getColsByPosition('main',true);
//        zmf::test($_mainCols);
        $this->pageTitle = zmf::config('sitename') . ' - ' . zmf::config('shortTitle');
        $data=array(
            'mainCols'=>$mainCols,
            'pages'=>$pages,             
        );        
        $this->render('index',$data);
    }

}