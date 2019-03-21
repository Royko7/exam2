<?php

namespace app\controllers;
use yii\helpers\ArrayHelper;
use yii\data\ActiveDataProvider;
use app\models\Category;

class CategoryController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Category::find(),
        ]);

        return $this->render('index',[
            'dataProvider' => $dataProvider,
        ]);
    }

}
