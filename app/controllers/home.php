<?php

class Home extends Controller {
    public function index() {
        $this->view('home/index');
    }

    public function user() {
        $this->view('user/index');
    }
}