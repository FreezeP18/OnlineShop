<?php

require_once 'libs/smarty/config.php';

class control {

    private $model;
    private $view;

    function __construct() {
        $this->model = null;
        $this->view = new config();
    }

    public function getModel() {
        return $this->model;
    }

    public function getView() {
        return $this->view;
    }

    public function setModel($model): void {
        $this->model = $model;
    }

    public function setView($view): void {
        $this->view = $view;
    }

    public function gestion_procesos() {
   
        $this->view->Display("headder.tpl");
        $this->view->Display("Tienda.tpl");
        $this->view->Display("footer.tpl");
    }
}



?> 

