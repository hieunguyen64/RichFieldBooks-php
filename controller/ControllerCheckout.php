<?php

class ControllerCheckout
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
        echo "connecting successfull";
    }
}
