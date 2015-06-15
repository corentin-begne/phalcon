<?

namespace Phalcon\Builder;

use Phalcon\Text as Utils;

class Controller extends \Phalcon\Mvc\User\Component
{
    public function __construct($controller, $actions){        
        $source = file_get_contents(TEMPLATE_PATH.'/php/controller.php');
        $name = Utils::camelize(Utils::uncamelize($controller));
        $target = $this->config->application->controllersDir.$name.'.php';
        if(file_exists($target)){
            $source = file_get_contents($target);
        } else {
            $source = str_replace('[name]', $name, $source);
        }
        $this->setAction($actions, $source);
        file_put_contents($target, $source);
        echo $target."\n";
    }

    public function setActions($actions, &$source){
        $modelAction = "\tpublic function [name]Action(){\n\n\t}\n\n";
        if(isset($actions)){
            $content = '';
            foreach(explode(',', $actions) as $action){
                $content .= str_replace('[name]', Utils::camelize(Utils::uncamelize($action)),$modelAction);
            }
            $source = str_replace("Controller{\n", "Controller{\n\n".$content, $source);
        }
    }
}