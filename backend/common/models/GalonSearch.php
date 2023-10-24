<?php

namespace backend\common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Galon;

/**
 * GalonSearch represents the model behind the search form of `common\models\Galon`.
 */
class GalonSearch extends Galon
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_galon'], 'integer'],
            [['harga_isi_ulang', 'harga_galon'], 'number'],
            [['jenis_galon'], 'safe'],
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
        $query = Galon::find();

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
            'id_galon' => $this->id_galon,
            'harga_isi_ulang' => $this->harga_isi_ulang,
            'harga_galon' => $this->harga_galon,
        ]);

        $query->andFilterWhere(['like', 'jenis_galon', $this->jenis_galon]);

        return $dataProvider;
    }
}
