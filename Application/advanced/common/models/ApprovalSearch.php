<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Approval;

/**
 * ApprovalSearch represents the model behind the search form about `common\models\Approval`.
 */
class ApprovalSearch extends Approval
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'test_document_id', 'user_id', 'user_user_type_id'], 'integer'],
            [['approval_remarks', 'approval_status', 'approval_date'], 'safe'],
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
        $query = Approval::find();

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
            'approval_date' => $this->approval_date,
            'test_document_id' => $this->test_document_id,
            'user_id' => $this->user_id,
            'user_user_type_id' => $this->user_user_type_id,
        ]);

        $query->andFilterWhere(['like', 'approval_remarks', $this->approval_remarks])
            ->andFilterWhere(['like', 'approval_status', $this->approval_status]);

        return $dataProvider;
    }
}
