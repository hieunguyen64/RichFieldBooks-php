<?php
namespace RichFieldBooks\Controllers;

class Home
{
    public function __construct()
    {
        echo "<hr>lop Home...";
        $action = isset($_GET['action']) ? $_GET['action'] : 'index';
        //echo "<hr>action= $action ";

        if ($action == 'index') {
            $this->index();
        }

        if ($action == 'f') {
            $this->f();
        }
    }

    public function index()
    {
        //    echo "ham index..., in ra 10 sach ngau nhien";
        $model = new ModelSach();
        $datasach = $model->get10Sach();
        $dataallsach = $model->getAllSach();
        include 'View/home_index.php'; //load view
    }

    public function f()
    {
        echo "<br> Noi dung ham f...";
    }
}
