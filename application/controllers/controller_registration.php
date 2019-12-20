<?php

class Controller_Registration extends Controller
{
    /**
     * Controller_Registration constructor.
     */

    function __construct()
    {
        $this->model = new Model_Registration();
        $this->view = new View();
    }

    function action_index()
    {
        $this->view->generate('registration_view.php', 'template_view.php');
    }

    function action_personal()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = $this->model->newuser($_POST['login'], $_POST['password'], $_POST['email']);
            $this->view->generate('registration_view.php', 'template_view.php', $data);
        } else {
            $data = $this->model->newuser($_POST['login'], $_POST['password'], $_POST['email']);
            $this->view->generate('registration_view.php', 'template_view.php', $data);
        }
    }
}