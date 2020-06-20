<?php

class ControllerHome
{
    public function __construct()
    {
        $action = isset($_GET['action']) ? $_GET['action'] : 'index';

        if ($action == 'index') {
            $this->index();
        }

        if ($action == 'f') {
            $this->f();
        }
    }

    public function index()
    {
        $model = new ModelBooks();
        $dataallbooks = $model->getAllBooks();
        include 'view/home_index.php'; //load view
    }

    public function f()
    {
        echo "<br> Noi dung ham f...";
    }
}
