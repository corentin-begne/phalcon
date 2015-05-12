<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;

class ItemController extends ControllerBase
{

    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for item
     */
    public function searchAction()
    {

        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, "Item", $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = array();
        }
        $parameters["order"] = "id";

        $item = Item::find($parameters);
        if (count($item) == 0) {
            $this->flash->notice("The search did not find any item");

            return $this->dispatcher->forward(array(
                "controller" => "item",
                "action" => "index"
            ));
        }

        $paginator = new Paginator(array(
            "data" => $item,
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
     * Edits a item
     *
     * @param string $id
     */
    public function editAction($id)
    {

        if (!$this->request->isPost()) {

            $item = Item::findFirstByid($id);
            if (!$item) {
                $this->flash->error("item was not found");

                return $this->dispatcher->forward(array(
                    "controller" => "item",
                    "action" => "index"
                ));
            }

            $this->view->id = $item->id;

            $this->tag->setDefault("id", $item->id);
            $this->tag->setDefault("category_id", $item->category_id);
            $this->tag->setDefault("type_id", $item->type_id);
            $this->tag->setDefault("name", $item->name);
            $this->tag->setDefault("price", $item->price);
            $this->tag->setDefault("gender_id", $item->gender_id);
            $this->tag->setDefault("is_allowed", $item->is_allowed);
            $this->tag->setDefault("is_active", $item->is_active);
            $this->tag->setDefault("is_premium", $item->is_premium);
            $this->tag->setDefault("created_at", $item->created_at);
            $this->tag->setDefault("updated_at", $item->updated_at);
            $this->tag->setDefault("setting", $item->setting);
            
        }
    }

    /**
     * Creates a new item
     */
    public function createAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "item",
                "action" => "index"
            ));
        }

        $item = new Item();

        $item->id = $this->request->getPost("id");
        $item->category_id = $this->request->getPost("category_id");
        $item->type_id = $this->request->getPost("type_id");
        $item->name = $this->request->getPost("name");
        $item->price = $this->request->getPost("price");
        $item->gender_id = $this->request->getPost("gender_id");
        $item->is_allowed = $this->request->getPost("is_allowed");
        $item->is_active = $this->request->getPost("is_active");
        $item->is_premium = $this->request->getPost("is_premium");
        $item->created_at = $this->request->getPost("created_at");
        $item->updated_at = $this->request->getPost("updated_at");
        $item->setting = $this->request->getPost("setting");
        

        if (!$item->save()) {
            foreach ($item->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "item",
                "action" => "new"
            ));
        }

        $this->flash->success("item was created successfully");

        return $this->dispatcher->forward(array(
            "controller" => "item",
            "action" => "index"
        ));

    }

    /**
     * Saves a item edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "item",
                "action" => "index"
            ));
        }

        $id = $this->request->getPost("id");

        $item = Item::findFirstByid($id);
        if (!$item) {
            $this->flash->error("item does not exist " . $id);

            return $this->dispatcher->forward(array(
                "controller" => "item",
                "action" => "index"
            ));
        }

        $item->id = $this->request->getPost("id");
        $item->category_id = $this->request->getPost("category_id");
        $item->type_id = $this->request->getPost("type_id");
        $item->name = $this->request->getPost("name");
        $item->price = $this->request->getPost("price");
        $item->gender_id = $this->request->getPost("gender_id");
        $item->is_allowed = $this->request->getPost("is_allowed");
        $item->is_active = $this->request->getPost("is_active");
        $item->is_premium = $this->request->getPost("is_premium");
        $item->created_at = $this->request->getPost("created_at");
        $item->updated_at = $this->request->getPost("updated_at");
        $item->setting = $this->request->getPost("setting");
        

        if (!$item->save()) {

            foreach ($item->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "item",
                "action" => "edit",
                "params" => array($item->id)
            ));
        }

        $this->flash->success("item was updated successfully");

        return $this->dispatcher->forward(array(
            "controller" => "item",
            "action" => "index"
        ));

    }

    /**
     * Deletes a item
     *
     * @param string $id
     */
    public function deleteAction($id)
    {

        $item = Item::findFirstByid($id);
        if (!$item) {
            $this->flash->error("item was not found");

            return $this->dispatcher->forward(array(
                "controller" => "item",
                "action" => "index"
            ));
        }

        if (!$item->delete()) {

            foreach ($item->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "item",
                "action" => "search"
            ));
        }

        $this->flash->success("item was deleted successfully");

        return $this->dispatcher->forward(array(
            "controller" => "item",
            "action" => "index"
        ));
    }

}
