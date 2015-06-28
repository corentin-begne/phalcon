<?
use Phalcon\Acl;
use Phalcon\Acl\Role;
use Phalcon\Acl\Adapter\Memory as AclList;
use Phalcon\Acl\Resource;
use Phalcon\Events\Event;
use Phalcon\Mvc\User\Plugin;
use Phalcon\Mvc\Dispatcher;
/**
 * The security plugin manages the Access Control List (ACL).
 */
class SecurityPlugin extends Plugin
{
    /**
     * Get the application acl list.
     */
    private function getAcl()
    {
        $acl = new AclList();
        $acl->setDefaultAction(Acl::DENY);
        $roles = array(
            'users'  => new Role('Users'),
            'guests' => new Role('Guests')
        );
        foreach ($roles as $role) {
            $acl->addRole($role);
        }
        $privateResources = array(
            'sf_guard_user'        => array('index', 'save', 'list', 'edit'),
            'sf_guard_user_report' => array('index', 'list', 'update', 'banUser'),
        );
        foreach ($privateResources as $resource => $actions) {
            $acl->addResource(new Resource($resource), $actions);
        }
        // Public area resources (frontend)
        $publicResources = array(
           'scrub'  => array('index', 'search'),
           'security' => array('403') 
        );
        foreach ($publicResources as $resource => $actions) {
            $acl->addResource(new Resource($resource), $actions);
        }
        // Grant access to public areas to both users and guests
        foreach ($roles as $role) {
            foreach ($publicResources as $resource => $actions) {
                $acl->allow($role->getName(), $resource, '*');
            }
        }
        // Grant access to private area only to role Users
        foreach ($privateResources as $resource => $actions) {
            foreach ($actions as $action) {
                $acl->allow('Users', $resource, $action);
            }
        }
        return $acl;
    }
    /**
     * Event called before each controller action.
     */
    public function beforeDispatch(Event $event, Dispatcher $dispatcher)
    {
        //Check whether the "auth" variable exists in session to define the active role
        $auth = $this->session->get('auth');
        if (!$auth) {
            $role = 'Guests';
        } else {
            $role = 'Users';
        }
        //Take the active controller/action from the dispatcher
        $controller = $dispatcher->getControllerName();
        $action = $dispatcher->getActionName();
        //Obtain the ACL list
        $acl = $this->getAcl();
        //Check if the Role have access to the controller (resource)
        $allowed = $acl->isAllowed($role, $controller, $action);
        if ($allowed != Acl::ALLOW) {
            //If he doesn't have access forward him to the index controller
            $this->flash->error("You don't have access to this module");
            $dispatcher->forward(
                array(
                    'controller' => 'security',
                    'action'     => '403'
                )
            );
            //Returning "false" we tell to the dispatcher to stop the current operation
            return false;
        }
    }
}