<?

namespace Phalcon\Builder;

use Phalcon\Db\Column, Phalcon\Db;
use Phalcon\Text as Utils;
class Model extends \Phalcon\Mvc\User\Component
{

    /**
     * Returns the associated PHP type
     *
     * @param  string $type
     * @return string
     */
    public function getPHPType($type)
    {
        switch ($type) {
            case Column::TYPE_INTEGER:
                return 'integer';
                break;
            case Column::TYPE_DECIMAL:
            case Column::TYPE_FLOAT:
                return 'double';
                break;
            case Column::TYPE_DATE:
            case Column::TYPE_VARCHAR:
            case Column::TYPE_DATETIME:
            case Column::TYPE_CHAR:
            case Column::TYPE_TEXT:
                return 'string';
                break;
            default:
                return 'string';
                break;
        }
    }

    private function getInfos($table, &$fields='', &$maps=array()){
        $modelField = 
"\n\t/**
\t * @var([[setting]])
\t */
\tpublic [name];\n";   
        // fields and map
        foreach($this->db->fetchAll('desc '.$table, Db::FETCH_ASSOC) as &$field){
            $setting = '';
            $type = $field['Type'];
            if(strpos($field['Type'], '(') !== false){
                $type = substr($field['Type'], 0, strpos($field['Type'], '('));
                $length = substr($field['Type'], strpos($field['Type'], '(')+1);
                $length = substr($length, 0, strpos($length, ')'));
            }         
            $setting .= "type:'".$this->getPHPType($field['Type'])."'";
            $setting .= ', null: '.(($field['Null'] === 'NO') ? "false" : "true");
            $setting .= (!empty($field['Default'])) ? ', default: \''.$field['Default'].'\'' : '';
            $setting .= (!empty($field['Extra'])) ? ', extra: \''.$field['Extra'].'\'' : '';
            $setting .= (!empty($field['Key'])) ? ', key: \''.$field['Key'].'\'' : '';
            $setting .= (isset($length)) ? ', length: '.$length : '';
            $fields .= str_replace(['[setting]', '[name]'], [$setting, '$'.$field['Field']], $modelField);
            $maps[] = "'".$field['Field']."' => '".$this->getPrefix($table)."_".$field['Field']."'";
        }
        $maps = implode(",\n\t\t\t", $maps);
    }

    private function getPrefix($table){
        $prefix = '';
        foreach(explode('_', Utils::uncamelize($table)) as $name){
            $prefix .= $name[0].$name[1];
        }
        return $prefix;
    }

    private function getConstraints($table, &$constraints=''){
        $modelConstraint =
"\t\t\$this->[type]('[local]', '[model]', '[foreign]', array('alias' => '[table]'));\n";        
        foreach($this->db->describeReferences($table, $this->config[ENV]->database->dbname) as &$reference){
            $foreignTable = $reference->getReferencedTable();                        
            $local = $this->getPrefix($table).'_'.$reference->getColumns()[0];
            $foreign = $this->getPrefix($foreignTable).'_'.$reference->getReferencedColumns()[0];           
            $model = Utils::camelize(Utils::uncamelize($foreignTable));
            foreach (['belongsTo', 'hasMany'] as $type) {
                $constraints .= str_replace([
                    '[type]',
                    '[local]',
                    '[model]',
                    '[foreign]',
                    '[table]',
                ], [
                    $type,
                    $local,
                    $model,
                    $foreign,
                    $foreignTable
                ], $modelConstraint);
            }
        }
    }

    public function __construct($table)
    {
        $source = file_get_contents(TEMPLATE_PATH.'/php/model.php');
        $this->getInfos($table, $fields, $maps);
        $this->getConstraints($table, $constraints);
        $name = Utils::camelize(Utils::uncamelize($table));
        $content = str_replace([
            '[fields]', 
            '[name]', 
            '[realName]', 
            '[constraints]', 
            '[maps]'
        ], [
            $fields, 
            $name, 
            $table, 
            $constraints, 
            $maps], 
            $source);
        $target = $this->config->application->modelsDir.$name.'.php';
        if(!file_exists($target)){
            file_put_contents($target, $content);
            echo $target."\n";
        }
    }

}
