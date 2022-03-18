<?php
class Countries extends Controller {

    public function __construct() {
        $this->countryModel = $this->model('Country');
    }

    public function index() {
        $result = $this->countryModel->getCountries();
        $data = [
            'title' => 'Home page',
            'countryData' => $result
        ];

        $this->view('country/index', $data);
    }
}
