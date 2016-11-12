<?php

namespace frontend\controllers;

use Yii;
use common\models\TestWorksheet;
use common\models\TestWorksheetSearch;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * TestWorksheetController implements the CRUD actions for TestWorksheet model.
 */
class TestWorksheetController extends Controller
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
     * Lists all TestWorksheet models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TestWorksheetSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TestWorksheet model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new TestWorksheet model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if(Yii::$app->user->can('create-worksheet')){

            $model = new TestWorksheet();

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                // get the instance of the uploaded file
                $fileName = $model->work_item;
                $model->file = UploadedFile::getInstance($model, 'file');
                $model->file->saveAs('uploads/'.$fileName. '.' .$model->file->extension);

                // save the path in the db column
                $model->work_file = 'uploads/' .$fileName. '.' .$model->file->extension;

                $model->save();

                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                return $this->renderAjax('create', [
                    'model' => $model,
                ]);
            }
        }else {
            throw new ForbiddenHttpException;
        }
    }

    /**
     * Updates an existing TestWorksheet model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        if(Yii::$app->user->can('update-worksheet')){
            $model = $this->findModel($id);

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
        }else {
            throw new ForbiddenHttpException;
        }
    }

    /**
     * Deletes an existing TestWorksheet model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        if(Yii::$app->user->can('delete-worksheet')){
            $this->findModel($id)->delete();

            return $this->redirect(['index']);
        }else{
            throw new ForbiddenHttpException;
        }
    }

    /**
     * Finds the TestWorksheet model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TestWorksheet the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TestWorksheet::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
