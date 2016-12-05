<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Signature;

/**
 * SignatureSearch represents the model behind the search form about `common\models\Signature`.
 */
class SignatureSearch extends Signature
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'sig_order', 'test_document_id'], 'integer'],
            [['sig_title', 'sig_comment', 'sig_date_signed'], 'safe'],
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
        $query = Signature::find();

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
            'sig_order' => $this->sig_order,
            'sig_date_signed' => $this->sig_date_signed,
            'test_document_id' => $this->test_document_id,
        ]);

        $query->andFilterWhere(['like', 'sig_title', $this->sig_title])
            ->andFilterWhere(['like', 'sig_comment', $this->sig_comment]);

        return $dataProvider;
    }
}
