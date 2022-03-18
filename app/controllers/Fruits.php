<?php
class Fruits extends Controller {

    public function __construct() {
        $this->fruitModel = $this->model('Fruit');
    }

    public function index() {
        $result = $this->fruitModel->getFruits();
        $data = [
            'title' => 'Home page',
            'fruitData' => $result
        ];

        $this->view('fruits/index', $data);
    }
}
