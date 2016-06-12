<?php

namespace backend\controllers;

use Yii;
use common\models\AuthItemChild;
use common\models\AuthItemChildSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AuthItemChildController implements the CRUD actions for AuthItemChild model.
 */
class AuthItemChildController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all AuthItemChild models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AuthItemChildSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Creates a new AuthItemChild model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AuthItemChild();

        if ($model->load(Yii::$app->request->post()) ) {
            $model->save();
            Yii::$app->session->setFlash('success', 'Updated success');
            return $this->redirect(['update', 'parent' => $model->parent]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing AuthItemChild model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $parent
     * @param string $child
     * @return mixed
     */
    public function actionUpdate($parent)
    {
        $modelX = $this->findModel($parent);
        $model = new AuthItemChild();

        if ($model->load(Yii::$app->request->post())  ) {
            $model->save();
            Yii::$app->session->setFlash('success', 'Updated success');
            return $this->redirect(['update', 'parent' => $model->parent]);
        } else {

            return $this->render('update', [
                'model' => $model,
                'x'=>$modelX
            ]);
        }
    }


    /**
     * Finds the AuthItemChild model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $parent
     * @param string $child
     * @return AuthItemChild the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($parent)
    {
        if (($model = AuthItemChild::findAll(['parent' => $parent])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
