<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;

class SfGuardUserController extends ControllerBase
{

    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for sf_guard_user
     */
    public function searchAction()
    {

        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, "SfGuardUser", $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = array();
        }
        $parameters["order"] = "id";

        $sf_guard_user = SfGuardUser::find($parameters);
        if (count($sf_guard_user) == 0) {
            $this->flash->notice("The search did not find any sf_guard_user");

            return $this->dispatcher->forward(array(
                "controller" => "sf_guard_user",
                "action" => "index"
            ));
        }

        $paginator = new Paginator(array(
            "data" => $sf_guard_user,
            "limit"=> 10,
            "page" => $numberPage
        ));

        $this->view->page = $paginator->getPaginate();
    }

    /**
     * Displays the creation form
     */
    public function newAction()
    {

    }

    /**
     * Edits a sf_guard_user
     *
     * @param string $id
     */
    public function editAction($id)
    {

        if (!$this->request->isPost()) {

            $sf_guard_user = SfGuardUser::findFirstByid($id);
            if (!$sf_guard_user) {
                $this->flash->error("sf_guard_user was not found");

                return $this->dispatcher->forward(array(
                    "controller" => "sf_guard_user",
                    "action" => "index"
                ));
            }

            $this->view->id = $sf_guard_user->id;

            $this->tag->setDefault("id", $sf_guard_user->id);
            $this->tag->setDefault("first_name", $sf_guard_user->first_name);
            $this->tag->setDefault("last_name", $sf_guard_user->last_name);
            $this->tag->setDefault("email_address", $sf_guard_user->email_address);
            $this->tag->setDefault("username", $sf_guard_user->username);
            $this->tag->setDefault("algorithm", $sf_guard_user->algorithm);
            $this->tag->setDefault("salt", $sf_guard_user->salt);
            $this->tag->setDefault("password", $sf_guard_user->password);
            $this->tag->setDefault("is_active", $sf_guard_user->is_active);
            $this->tag->setDefault("is_super_admin", $sf_guard_user->is_super_admin);
            $this->tag->setDefault("last_login", $sf_guard_user->last_login);
            $this->tag->setDefault("location", $sf_guard_user->location);
            $this->tag->setDefault("hometown", $sf_guard_user->hometown);
            $this->tag->setDefault("locale", $sf_guard_user->locale);
            $this->tag->setDefault("timezone", $sf_guard_user->timezone);
            $this->tag->setDefault("facebook_id", $sf_guard_user->facebook_id);
            $this->tag->setDefault("facebook_verified", $sf_guard_user->facebook_verified);
            $this->tag->setDefault("facebook_link", $sf_guard_user->facebook_link);
            $this->tag->setDefault("facebook_location_id", $sf_guard_user->facebook_location_id);
            $this->tag->setDefault("facebook_hometown_id", $sf_guard_user->facebook_hometown_id);
            $this->tag->setDefault("created_at", $sf_guard_user->created_at);
            $this->tag->setDefault("updated_at", $sf_guard_user->updated_at);
            $this->tag->setDefault("online", $sf_guard_user->online);
            $this->tag->setDefault("cookie", $sf_guard_user->cookie);
            // profile
            $this->tag->setDefault("biography", $sf_guard_user->sf_guard_user_profile->biography);
            $this->tag->setDefault("gender_id", $sf_guard_user->sf_guard_user_profile->gender_id);
            $this->tag->setDefault("birthday_date", $sf_guard_user->sf_guard_user_profile->birthday_date);
            $this->tag->setDefault("avatar_skin", $sf_guard_user->sf_guard_user_profile->avatar_skin);
            $this->tag->setDefault("avatar_hair", $sf_guard_user->sf_guard_user_profile->avatar_hair);
            $this->tag->setDefault("avatar_eyes", $sf_guard_user->sf_guard_user_profile->avatar_eyes);
            $this->tag->setDefault("profile_picture", $sf_guard_user_profile->profile_picture);
            $this->tag->setDefault("beelz", $sf_guard_user_profile->beelz);
            
        }
    }

    /**
     * Creates a new sf_guard_user
     */
    public function createAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "sf_guard_user",
                "action" => "index"
            ));
        }

        $sf_guard_user = new SfGuardUser();

        $sf_guard_user->first_name = $this->request->getPost("first_name");
        $sf_guard_user->last_name = $this->request->getPost("last_name");
        $sf_guard_user->email_address = $this->request->getPost("email_address");
        $sf_guard_user->username = $this->request->getPost("username");
        $sf_guard_user->algorithm = $this->request->getPost("algorithm");
        $sf_guard_user->salt = $this->request->getPost("salt");
        $sf_guard_user->password = $this->request->getPost("password");
        $sf_guard_user->is_active = $this->request->getPost("is_active");
        $sf_guard_user->is_super_admin = $this->request->getPost("is_super_admin");
        $sf_guard_user->last_login = $this->request->getPost("last_login");
        $sf_guard_user->location = $this->request->getPost("location");
        $sf_guard_user->hometown = $this->request->getPost("hometown");
        $sf_guard_user->locale = $this->request->getPost("locale");
        $sf_guard_user->timezone = $this->request->getPost("timezone");
        $sf_guard_user->facebook_id = $this->request->getPost("facebook_id");
        $sf_guard_user->facebook_verified = $this->request->getPost("facebook_verified");
        $sf_guard_user->facebook_link = $this->request->getPost("facebook_link");
        $sf_guard_user->facebook_location_id = $this->request->getPost("facebook_location_id");
        $sf_guard_user->facebook_hometown_id = $this->request->getPost("facebook_hometown_id");
        $sf_guard_user->created_at = $this->request->getPost("created_at");
        $sf_guard_user->updated_at = $this->request->getPost("updated_at");
        $sf_guard_user->online = $this->request->getPost("online");
        $sf_guard_user->cookie = $this->request->getPost("cookie");
        

        if (!$sf_guard_user->save()) {
            foreach ($sf_guard_user->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "sf_guard_user",
                "action" => "new"
            ));
        }

        $this->flash->success("sf_guard_user was created successfully");

        return $this->dispatcher->forward(array(
            "controller" => "sf_guard_user",
            "action" => "index"
        ));

    }

    /**
     * Saves a sf_guard_user edited
     *
     */
    public function saveAction()
    {
        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "sf_guard_user",
                "action" => "index"
            ));
        }

        $id = $this->request->getPost("id");

        $sf_guard_user = SfGuardUser::findFirstByid($id);
        if (!$sf_guard_user) {
            $this->flash->error("sf_guard_user does not exist " . $id);

            return $this->dispatcher->forward(array(
                "controller" => "sf_guard_user",
                "action" => "index"
            ));
        }

        $sf_guard_user->first_name = $this->request->getPost("first_name");
        $sf_guard_user->last_name = $this->request->getPost("last_name");
        $sf_guard_user->email_address = $this->request->getPost("email_address");
        $sf_guard_user->username = $this->request->getPost("username");
        $sf_guard_user->algorithm = $this->request->getPost("algorithm");
        $sf_guard_user->salt = $this->request->getPost("salt");
        $sf_guard_user->password = $this->request->getPost("password");
        $sf_guard_user->is_active = $this->request->getPost("is_active");
        $sf_guard_user->is_super_admin = $this->request->getPost("is_super_admin");
        $sf_guard_user->last_login = $this->request->getPost("last_login");
        $sf_guard_user->location = $this->request->getPost("location");
        $sf_guard_user->hometown = $this->request->getPost("hometown");
        $sf_guard_user->locale = $this->request->getPost("locale");
        $sf_guard_user->timezone = $this->request->getPost("timezone");
        $sf_guard_user->facebook_id = $this->request->getPost("facebook_id");
        $sf_guard_user->facebook_verified = $this->request->getPost("facebook_verified");
        $sf_guard_user->facebook_link = $this->request->getPost("facebook_link");
        $sf_guard_user->facebook_location_id = $this->request->getPost("facebook_location_id");
        $sf_guard_user->facebook_hometown_id = $this->request->getPost("facebook_hometown_id");
        $sf_guard_user->created_at = $this->request->getPost("created_at");
        $sf_guard_user->updated_at = $this->request->getPost("updated_at");
        $sf_guard_user->online = $this->request->getPost("online");
        $sf_guard_user->cookie = $this->request->getPost("cookie");
        

        if (!$sf_guard_user->save()) {

            foreach ($sf_guard_user->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "sf_guard_user",
                "action" => "edit",
                "params" => array($sf_guard_user->id)
            ));
        }

        $sf_guard_user_profile = SfGuardUserProfile::findFirstByUserId($id);
        if (!$sf_guard_user_profile) {
            $this->flash->error("sf_guard_user_profile does not exist " . $id);

            return $this->dispatcher->forward(array(
                "controller" => "sf_guard_user_profile",
                "action" => "index"
            ));
        }

        $sf_guard_user_profile->biography = $this->request->getPost("biography");
        $sf_guard_user_profile->gender_id = $this->request->getPost("gender_id");
        $sf_guard_user_profile->birthday_date = $this->request->getPost("birthday_date");
        $sf_guard_user_profile->avatar_skin = $this->request->getPost("avatar_skin");
        $sf_guard_user_profile->avatar_hair = $this->request->getPost("avatar_hair");
        $sf_guard_user_profile->avatar_eyes = $this->request->getPost("avatar_eyes");
        $sf_guard_user_profile->profile_picture = $this->request->getPost("profile_picture");
        $sf_guard_user_profile->beelz = $this->request->getPost("beelz");
        
        $sf_guard_user_profile->save();

        $this->flash->success("sf_guard_user was updated successfully");

        return $this->dispatcher->forward(array(
            "controller" => "sf_guard_user",
            "action" => "index"
        ));

    }

    /**
     * Deletes a sf_guard_user
     *
     * @param string $id
     */
    public function deleteAction($id)
    {

        $sf_guard_user = SfGuardUser::findFirstByid($id);
        if (!$sf_guard_user) {
            $this->flash->error("sf_guard_user was not found");

            return $this->dispatcher->forward(array(
                "controller" => "sf_guard_user",
                "action" => "index"
            ));
        }

        if (!$sf_guard_user->delete()) {

            foreach ($sf_guard_user->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "sf_guard_user",
                "action" => "search"
            ));
        }

        $this->flash->success("sf_guard_user was deleted successfully");

        return $this->dispatcher->forward(array(
            "controller" => "sf_guard_user",
            "action" => "index"
        ));
    }

}
