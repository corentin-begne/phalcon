<?

namespace Phalcon\Builder;

class Form extends \Phalcon\Tag
{
    public static function getTag($name, $options, $restrictable = true){
        switch($options['type']){
            case 'integer':
                return self::numericField([
                    $name, 
                    'min'=>0, 
                    'max'=>((int)str_pad('1', $options['length'], '0')-1),
                    'size'=>$options['length'],
                    'required'=> ($restrictable) ? 'required' : 'false'
                ]);
            case 'double':
                return self::numericField([
                    $name, 
                    'min'=>0, 
                    'max'=>((int)str_pad('1', $options['length'], '0')-1),
                    'size'=>$options['length'],
                    'step'=>'0.01',
                    'required'=> ($restrictable) ? 'required' : 'false'
                ]);
                break;
            case 'string':
                break;    
        }
    }
}