<?php

namespace frontend\controllers;

use Yii;
use common\models\TestDocument;
use common\models\TestDocumentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\web\ForbiddenHttpException;

/**
 * TestDocumentController implements the CRUD actions for TestDocument model.
 */
class TestDocumentController extends Controller
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
     * Lists all TestDocument models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TestDocumentSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TestDocument model.
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
     * Creates a new TestDocument model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if(Yii::$app->user->can('create-testdoc')){
            $model = new TestDocument();

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                // get the instance of the uploaded file
                $fileName = $model->test_date;
                $model->file = UploadedFile::getInstance($model, 'file');
                $model->file->saveAs('uploads/'.$fileName. '.' .$model->file->extension);

                // save the path in the db column
                $model->test_date= 'uploads/' .$fileName. '.' .$model->file->extension;
                //$model->test_date = date('mm-dd-yy');
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
     * Updates an existing TestDocument model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        if(Yii::$app->user->can('update-tesdoc')){
            $model = $this->findModel($id);

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
        }else{
            throw new ForbiddenHttpException;
        }

    }

    /**
     * Deletes an existing TestDocument model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        if(Yii::$app->user->can('delete-testdocu')){
            $this->findModel($id)->delete();

            return $this->redirect(['index']);
        }else {
            throw new ForbiddenHttpException;
        }
    }

    /**
     * Finds the TestDocument model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TestDocument the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TestDocument::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
