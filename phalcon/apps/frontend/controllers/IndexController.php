<?
use Phalcon\Builder\Form;
class IndexController extends ControllerBase{
    public function indexAction(){
        foreach(User::getColumnsDescription() as $name => $options){
            echo Form::getTag($name, $options);
        }
        die;
    }
}