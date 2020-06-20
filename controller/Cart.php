<?php

class ControllerCart
{
    public function __construct()
    {
        echo "<hr>lop Cart...";
        $action = isset($_GET['action']) ? $_GET['action'] : 'index';
        echo "<hr>action= $action ";

        if ($action == 'index') {
            $this->index();
        }

        if ($action == 'f') {
            $this->f();
        }
    }

    public function index()
    {
    }

    public function f()
    {
        echo "<br> Noi dung ham f...";
    }
}
