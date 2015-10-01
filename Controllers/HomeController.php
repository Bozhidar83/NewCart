<?php

namespace NewCart\Controllers;


use NewCart\Models\HomeModel;
use NewCart\View;
use NewCart\ViewModels\Home\HomeViewModel;

class HomeController extends Controller {
    public function index()
    {
        $userMessage = new \NewCart\ViewModels\Home\HomeInformation();
        $userMessage->userMessage = 'Hello to all users!!!';
        //echo 'Hello from home/index';
        $homeModel = new HomeModel();
        $topProducts = $homeModel->getTopProducts();
        //$result = [];
        $homeViewModel = new HomeViewModel();
        $homeViewModel->setTopProductsList($topProducts);
        //var_dump($homeViewModel->getTopProductsList());
        return new View($homeViewModel->getTopProductsList());
    }

    public function test()
    {
        echo 'Hello from home/test';
    }
}