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
            [['id', 'test_worksheet_id', 'task_organization_id', 'result_id', 'implementation_plan_id', 'item_specification_id', 'directive_id'], 'integer'],
            [['test_date', 'test_type', 'test_schedule', 'test_name'], 'safe'],
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
            'test_date' => $this->test_date,
            'test_schedule' => $this->test_schedule,
            'test_worksheet_id' => $this->test_worksheet_id,
            'task_organization_id' => $this->task_organization_id,
            'result_id' => $this->result_id,
            'implementation_plan_id' => $this->implementation_plan_id,
            'item_specification_id' => $this->item_specification_id,
            'directive_id' => $this->directive_id,
        ]);

        $query->andFilterWhere(['like', 'test_type', $this->test_type])
            ->andFilterWhere(['like', 'test_name', $this->test_name]);

        return $dataProvider;
    }
}
