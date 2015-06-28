<?
use Phalcon\Mvc\Model,
Phalcon\Annotations\Adapter\Memory,
Phalcon\Mvc\Model\Behavior\Timestampable;;

class ModelBase extends Model{

    public static function getColumnsDescription($exclude=[]){
        $reader = new Memory();
        $reflector = $reader->get(get_called_class());
        $descriptions = [];
        foreach($reflector->getPropertiesAnnotations() as $annotations){
            foreach($annotations->getAnnotations() as $annotation){
                if(!in_array(substr($annotation->getName(), strpos($annotation->getName(), '_')+1), $exclude)){
                    $descriptions[$annotation->getName()] = $annotation->getArguments()[0];
                }
            }
        }
        return $descriptions;
    }

    public function initialize(){
        if(property_exists(get_called_class(), 'created_at')){
            $this->addBehavior(new Timestampable(
                [
                    'beforeCreate'  => [
                        'field'     => 'created_at',
                        'format'    => 'Y-m-d H:i:s'
                    ]
                ]
            ));
        }
        if(property_exists(get_called_class(), 'updated_at')){
            $this->addBehavior(new Timestampable(
                [
                    'beforeCreate'  => [
                        'field'     => 'updated_at',
                        'format'    => 'Y-m-d H:i:s'
                    ]
                ]
            ));
            $this->addBehavior(new Timestampable(
                [
                    'beforeUpdate'  => [
                        'field'     => 'updated_at',
                        'format'    => 'Y-m-d H:i:s'
                    ]
                ]
            ));
        }
    }

}