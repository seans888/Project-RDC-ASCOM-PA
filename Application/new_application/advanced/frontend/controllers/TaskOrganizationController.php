<?php

namespace frontend\controllers;

use Yii;
use common\models\TaskOrganization;
use common\models\TaskOrganizationSearch;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * TaskOrganizationController implements the CRUD actions for TaskOrganization model.
 */
class TaskOrganizationController extends Controller
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
     * Lists all TaskOrganization models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TaskOrganizationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TaskOrganization model.
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
     * Creates a new TaskOrganization model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if(Yii::$app->user->can('create-taskorg')){
            $model = new TaskOrganization();

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                // get the instance of the uploaded file
                $fileName = $model->taskorg_name;
                $model->file = UploadedFile::getInstance($model, 'file');
                $model->file->saveAs('uploads/'.$fileName. '.' .$model->file->extension);

                // save the path in the db column
                $model->taskorg_file = 'uploads/' .$fileName. '.' .$model->file->extension;
                //$model->taskorg_date = date('mm-dd-yy');
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
     * Updates an existing TaskOrganization model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        if(Yii::$app->user->can('update-taskorg')){
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
     * Deletes an existing TaskOrganization model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        if(Yii::$app->user->can('delete-taskorg')){
            $this->findModel($id)->delete();
            return $this->redirect(['index']);
        }else {
            throw new ForbiddenHttpException;
        }
    }

    /**
     * Finds the TaskOrganization model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TaskOrganization the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TaskOrganization::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
