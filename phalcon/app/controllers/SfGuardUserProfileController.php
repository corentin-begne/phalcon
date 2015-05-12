<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;

class SfGuardUserProfileController extends ControllerBase
{

    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for sf_guard_user_profile
     */
    public function searchAction()
    {

        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, "SfGuardUserProfile", $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = array();
        }
        $parameters["order"] = "id";

        $sf_guard_user_profile = SfGuardUserProfile::find($parameters);
        if (count($sf_guard_user_profile) == 0) {
            $this->flash->notice("The search did not find any sf_guard_user_profile");

            return $this->dispatcher->forward(array(
                "controller" => "sf_guard_user_profile",
                "action" => "index"
            ));
        }

        $paginator = new Paginator(array(
            "data" => $sf_guard_user_profile,
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
     * Edits a sf_guard_user_profile
     *
     * @param string $id
     */
    public function editAction($id)
    {

        if (!$this->request->isPost()) {

            $sf_guard_user_profile = SfGuardUserProfile::findFirstByid($id);
            if (!$sf_guard_user_profile) {
                $this->flash->error("sf_guard_user_profile was not found");

                return $this->dispatcher->forward(array(
                    "controller" => "sf_guard_user_profile",
                    "action" => "index"
                ));
            }

            $this->view->id = $sf_guard_user_profile->id;

            $this->tag->setDefault("id", $sf_guard_user_profile->id);
            $this->tag->setDefault("user_id", $sf_guard_user_profile->user_id);
            $this->tag->setDefault("biography", $sf_guard_user_profile->biography);
            $this->tag->setDefault("created_at", $sf_guard_user_profile->created_at);
            $this->tag->setDefault("updated_at", $sf_guard_user_profile->updated_at);
            $this->tag->setDefault("gender_id", $sf_guard_user_profile->gender_id);
            $this->tag->setDefault("birthday_date", $sf_guard_user_profile->birthday_date);
            $this->tag->setDefault("avatar_skin", $sf_guard_user_profile->avatar_skin);
            $this->tag->setDefault("avatar_hair", $sf_guard_user_profile->avatar_hair);
            $this->tag->setDefault("avatar_eyes", $sf_guard_user_profile->avatar_eyes);
            $this->tag->setDefault("profile_picture", $sf_guard_user_profile->profile_picture);
            $this->tag->setDefault("beelz", $sf_guard_user_profile->beelz);
            
        }
    }

    /**
     * Creates a new sf_guard_user_profile
     */
    public function createAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "sf_guard_user_profile",
                "action" => "index"
            ));
        }

        $sf_guard_user_profile = new SfGuardUserProfile();

        $sf_guard_user_profile->user_id = $this->request->getPost("user_id");
        $sf_guard_user_profile->biography = $this->request->getPost("biography");
        $sf_guard_user_profile->created_at = $this->request->getPost("created_at");
        $sf_guard_user_profile->updated_at = $this->request->getPost("updated_at");
        $sf_guard_user_profile->gender_id = $this->request->getPost("gender_id");
        $sf_guard_user_profile->birthday_date = $this->request->getPost("birthday_date");
        $sf_guard_user_profile->avatar_skin = $this->request->getPost("avatar_skin");
        $sf_guard_user_profile->avatar_hair = $this->request->getPost("avatar_hair");
        $sf_guard_user_profile->avatar_eyes = $this->request->getPost("avatar_eyes");
        $sf_guard_user_profile->profile_picture = $this->request->getPost("profile_picture");
        $sf_guard_user_profile->beelz = $this->request->getPost("beelz");
        

        if (!$sf_guard_user_profile->save()) {
            foreach ($sf_guard_user_profile->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "sf_guard_user_profile",
                "action" => "new"
            ));
        }

        $this->flash->success("sf_guard_user_profile was created successfully");

        return $this->dispatcher->forward(array(
            "controller" => "sf_guard_user_profile",
            "action" => "index"
        ));

    }

    /**
     * Saves a sf_guard_user_profile edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "sf_guard_user_profile",
                "action" => "index"
            ));
        }

        $id = $this->request->getPost("id");

        $sf_guard_user_profile = SfGuardUserProfile::findFirstByid($id);
        if (!$sf_guard_user_profile) {
            $this->flash->error("sf_guard_user_profile does not exist " . $id);

            return $this->dispatcher->forward(array(
                "controller" => "sf_guard_user_profile",
                "action" => "index"
            ));
        }

        $sf_guard_user_profile->user_id = $this->request->getPost("user_id");
        $sf_guard_user_profile->biography = $this->request->getPost("biography");
        $sf_guard_user_profile->created_at = $this->request->getPost("created_at");
        $sf_guard_user_profile->updated_at = $this->request->getPost("updated_at");
        $sf_guard_user_profile->gender_id = $this->request->getPost("gender_id");
        $sf_guard_user_profile->birthday_date = $this->request->getPost("birthday_date");
        $sf_guard_user_profile->avatar_skin = $this->request->getPost("avatar_skin");
        $sf_guard_user_profile->avatar_hair = $this->request->getPost("avatar_hair");
        $sf_guard_user_profile->avatar_eyes = $this->request->getPost("avatar_eyes");
        $sf_guard_user_profile->profile_picture = $this->request->getPost("profile_picture");
        $sf_guard_user_profile->beelz = $this->request->getPost("beelz");
        

        if (!$sf_guard_user_profile->save()) {

            foreach ($sf_guard_user_profile->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "sf_guard_user_profile",
                "action" => "edit",
                "params" => array($sf_guard_user_profile->id)
            ));
        }

        $this->flash->success("sf_guard_user_profile was updated successfully");

        return $this->dispatcher->forward(array(
            "controller" => "sf_guard_user_profile",
            "action" => "index"
        ));

    }

    /**
     * Deletes a sf_guard_user_profile
     *
     * @param string $id
     */
    public function deleteAction($id)
    {

        $sf_guard_user_profile = SfGuardUserProfile::findFirstByid($id);
        if (!$sf_guard_user_profile) {
            $this->flash->error("sf_guard_user_profile was not found");

            return $this->dispatcher->forward(array(
                "controller" => "sf_guard_user_profile",
                "action" => "index"
            ));
        }

        if (!$sf_guard_user_profile->delete()) {

            foreach ($sf_guard_user_profile->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "sf_guard_user_profile",
                "action" => "search"
            ));
        }

        $this->flash->success("sf_guard_user_profile was deleted successfully");

        return $this->dispatcher->forward(array(
            "controller" => "sf_guard_user_profile",
            "action" => "index"
        ));
    }

}
