<?php

namespace backend\common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Pemesanan;

/**
 * PemesananSearch represents the model behind the search form of `common\models\Pemesanan`.
 */
class PemesananSearch extends Pemesanan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'get_user', 'get_galon'], 'integer'],
            [['kode_pemesan'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Pemesanan::find();

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
            'get_user' => $this->get_user,
            'get_galon' => $this->get_galon,
        ]);

        $query->andFilterWhere(['like', 'kode_pemesan', $this->kode_pemesan]);

        return $dataProvider;
    }
}
