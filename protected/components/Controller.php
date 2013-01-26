<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
        private $adminMenu = array(
            array('label'=>'Create Category', 'url'=>array('create')),
            array('label'=>'Manage Category', 'url'=>array('admin')),
            array('label'=>'Manage Agelevel', 'url'=>array('agelevel/admin')),
            array('label'=>'Manage Game', 'url'=>array('game/admin')),
            array('label'=>'Manage Recommended Games', 'url'=>array('recommended/admin')),
            array('label'=>'Manage top5category Games', 'url'=>array('top5category/admin')),
        );
        private $adminActions = array('admin', 'create');
        private $adminControllers = array('agelevel', 'category', 'game', 'recommended', 'top5category', 'top5game');
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();

	protected function beforeAction($action)
	{
            $actionName = $action->getId();
            if(in_array($actionName, $this->adminActions)) {
                $action->getController()->layout = '//layouts/column2';
                $action->getController()->menu = $this->buildAdminMenu();
            }
            return true;
        }
        private function buildAdminMenu()
        {
            $adminMenu = array();
            foreach($this->adminControllers as $adminController){
                foreach($this->adminActions as $adminAction){
                    $adminMenu[] = array(
                        'label' => ucfirst($adminAction) . ' ' . $adminController,
                        'url' => array($adminController. '/' . $adminAction)
                    );
                }
            }
            return $adminMenu;
        }
}