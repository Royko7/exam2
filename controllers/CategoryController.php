<?php

namespace app\controllers;
use Yii;
use yii\helpers\ArrayHelper;
use yii\data\ActiveDataProvider;
use app\models\Category;

class CategoryController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $searchModel = new  Category();

        $dataProvider = new ActiveDataProvider([
            'query' => Category::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel
        ]);
    }
    public function actionCreate(){
        $model = new Category();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'category_id' => $model->id]);
        }
//        $category = Category::findOne(['category_id' => Yii::$app->request->get('category_id')]);
        $category = Category::find()->all();
//        $categories = ArrayHelper::map($category, 'category_id', 'name');
        return $this->render('view', [
            'model' => $model,
            'category' => $category,
        ]);
    }
}
