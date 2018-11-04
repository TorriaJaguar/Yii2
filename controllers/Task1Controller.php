<?php
/**
 * Created by PhpStorm.
 * User: Torry
 * Date: 04.11.2018
 * Time: 16:30
 */

namespace app\controllers;


use yii\web\Controller;

class Task1Controller extends Controller
{
    public function actionIndex()
    {
        return $this->render('index',[
            'title' => 'HomeWork 1',
            'content' => 'Greetings, User!'
        ]);
    }
}