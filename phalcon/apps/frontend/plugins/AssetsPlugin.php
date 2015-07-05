<?
use Phalcon\Events\Event;
use Phalcon\Mvc\User\Component;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Assets\Filters\Jsmin;
/**
 * The Assets plugin manages all assets (CSS/JS) on application.
 */
class AssetsPlugin extends Component
{
    /**
     * The event is called before the controller action.
     *
     * We create collection for assets.
     */
    public function beforeDispatch(Event $event, Dispatcher $dispatcher)
    {
        $currentPath = ($dispatcher->getActionName() === 'index') ? $dispatcher->getControllerName() : $dispatcher->getControllerName().'/'.$dispatcher->getActionName(); 
        $basePath = $this->config->application->publicDir.'js/';
        $this->assets->collection('js')
        ->setTargetPath($basePath.'final.js')
        ->setTargetUri(APP.'/js/final.js')
        ->addJs($basePath.'lib/jquery.min.js')
        ->addJs($basePath.'lib/jquery.percentageloader-0.2.js')
        ->addJs($basePath.'model/action.js')
        ->addJs($basePath.'model/manager.js')
        ->addJs($basePath.'helper/action.js')
        ->addJs($basePath.'helper/manager.js')
        ->addJs($basePath.'helper/form.js')
        ->addJs($basePath.'helper/js.js')
        ->addJs("$basePath$currentPath/manager.js")
        ->addJs("$basePath$currentPath/main.js")
        ->join(true)
        ->addFilter(new Jsmin());
        
        $this->assets->collection('css')
        ->setPrefix(APP.'/css/')
        ->addCss("$currentPath/main.css");
        
    }
}