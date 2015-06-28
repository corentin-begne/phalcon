<?
use Phalcon\Text as Utils;
class ScrudController extends ControllerBase{
	
	public function beforeExecuteRoute($dispatcher)
    {
    	$this->view->setLayout('scrud');
    	$model = Utils::camelize(Utils::uncamelize($dispatcher->getParam('model')));
    	if(!class_exists($model)){
    		die($this->flash->error("Model does not exists"));
    	}
        $this->view->setVar('model', $model);
    }

	public function indexAction(){
		$this->dispatcher->forward([
            'controller' => 'scrud',
            'action' => 'search'

        ]);
	}

	public function searchAction(){
		
	}

	public function readAction(){

	}

	public function createAction(){
	}

	public function updateAction(){

	}

	public function deleteAction(){

	}

}