<?php

class SearchController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
//    public $layout = '//layouts/without_right';
    private $page_size = 10;
    
    public function actionIndex()
    {
        if ($_GET) {
        $phrase = $_GET['phrase'];
            $results = Yii::app()->db->createCommand()
                ->select('g.id, g.name, g.description, c.name as catname, a.menuTitle')
                ->from('game g')
                ->join('category c', 'g.categoryId=c.id')
                ->join('agelevel a', 'c.agelevelId=a.id')
                ->where(array ( 'or',
                    array('like', 'g.name', '%' . $phrase . '%'),
                    array('like', 'g.description', '%' . $phrase . '%')
                ), array(':phrase', $phrase))
                ->queryAll();
            //get top5games foreach top5category
        }
        $pages =new CPagination(count($results));
        $pages->setPageSize($this->page_size);
        $this->render('index', array(
            'results' => $results, 
            'phrase' => $phrase,
            'pages' => $pages,
            'item_count' => count($results),
        ));
    }
}