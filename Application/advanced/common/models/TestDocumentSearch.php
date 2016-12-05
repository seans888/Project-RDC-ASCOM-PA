<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TestDocument;

/**
 * TestDocumentSearch represents the model behind the search form about `common\models\TestDocument`.
 */
class TestDocumentSearch extends TestDocument
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'document_type', 'test_project_id'], 'integer'],
            [['docu_date', 'docu_name'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TestDocument::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'docu_date' => $this->docu_date,
            'document_type' => $this->document_type,
            'test_project_id' => $this->test_project_id,
        ]);

        $query->andFilterWhere(['like', 'docu_name', $this->docu_name]);

        return $dataProvider;
    }
}
