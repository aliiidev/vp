<?php
class Protection extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->index();
    }
    public function index()
    {
        $this->view->Render("protection");

    }
}