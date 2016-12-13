<?php

namespace frontend\controllers;

use Yii;
use common\models\TestDocument;
use common\models\TestDocumentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

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
        $model = new TestDocument();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            // get the instance of the uploaded file
            $docuName = $model->docu_name;
            $model->docu_file = UploadedFile::getInstance($model, 'docu_file');
            $model->docu_file->saveAs('uploads/'.$docuName.'.'.$model->docu_file->extension);

            // save the path in the db column
            $model->document = 'uploads/'.$docuName.'.'.$model->docu_file->extension;
            $model->save();

            return $this->redirect(['test-project/index', 'model'=>$model]);
        } else {
            return $this->renderAjax('create', [
                'model' => $model,
            ]);
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
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
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
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
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

    public function actionDownload($file){

        $model = new TestDocument();

        //$file = 'uploads/'.$model->docu_name.'.docx';
        if (file_exists($file)) {
            return Yii::$app->response->sendFile($file);
            //$this->redirect(['view']);
        } else {
            return $this->redirect(['index']);
        }

    }
}
