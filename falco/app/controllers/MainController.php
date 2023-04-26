<?php

namespace app\controllers;
use app\core\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        $this->view->render('Главная страница');
    }

    public function contactAction()
    {
        $this->view->render('Страница контактов');
    }

    public function sendformAction()
    {
        $accessories = implode(' ', $_POST['accessories']);
        $this->model->sendform(
            $_POST['color'],
            $_POST['skin_color'],
            $_POST['handle_color'],
            $_POST['width'],
            $_POST['height'],
            $_POST['opening'],
            $accessories
        );

        $this->view->redirect('/');
    }
}