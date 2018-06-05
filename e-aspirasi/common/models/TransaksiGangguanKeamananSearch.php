<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TransaksiGangguanKeamanan;

/**
 * TransaksiGangguanKeamananSearch represents the model behind the search form about `common\models\TransaksiGangguanKeamanan`.
 */
class TransaksiGangguanKeamananSearch extends TransaksiGangguanKeamanan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_gangguan', 'id_user', 'id_wilayah', 'longitude', 'latitude'], 'integer'],
            [['tanggal', 'jenis_kejahatan'], 'safe'],
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
        $query = TransaksiGangguanKeamanan::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_gangguan' => $this->id_gangguan,
            'id_user' => $this->id_user,
            'tanggal' => $this->tanggal,
            'id_wilayah' => $this->id_wilayah,
            'longitude' => $this->longitude,
            'latitude' => $this->latitude,
        ]);

        $query->andFilterWhere(['like', 'jenis_kejahatan', $this->jenis_kejahatan]);

        return $dataProvider;
    }
}
