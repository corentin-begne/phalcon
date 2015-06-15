<?
use Phalcon\Builder\Model,
Phalcon\Builder\Controller,
Phalcon\Builder\Js,
Phalcon\Text as Utils;
class GenerateTask extends \Phalcon\CLI\Task
{
    public function mainAction() {

    }

    /**
     * generate all models
     */
    public function modelsAction() {
        foreach($this->db->listTables($this->config[ENV]->database->dbname) as &$table){
            new Model($table);                                           
        }       
    }

    /**
     * generate module, action, css/js, rest, security
     * @params([params: [], options: []])
     */
    public function controllerAction($params){
        list($controller, $actions) = $params;
        new Controller($controller, $actions);
    }

    public function jsAction($params){
        list($controller, $actions) = $params;
        new Js($controller, $actions);
    }

    public function cssAction($params){
        list($controller, $actions) = $params;
        new Css($controller, $actions);
    }

    public function lessAction($params){
        list($controller, $actions) = $params;
        new Less($controller, $actions);
    }
}