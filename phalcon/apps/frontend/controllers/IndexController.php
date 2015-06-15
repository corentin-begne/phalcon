<?
class IndexController extends ControllerBase{
    public function indexAction(){
        foreach(User::find() as $user){
            var_dump($user);
        } 
        die;
    }
}