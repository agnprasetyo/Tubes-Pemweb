<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TransaksiInfrastruktur;

/**
 * TransaksiInfrastrukturSearch represents the model behind the search form about `common\models\TransaksiInfrastruktur`.
 */
class TransaksiInfrastrukturSearch extends TransaksiInfrastruktur
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_infrastruktur', 'id_user', 'longitude', 'latitude', 'id_status', 'id_wilayah'], 'integer'],
            [['tanggal', 'jenis_infrastruktur', 'tanggal_input'], 'safe'],
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
        $query = TransaksiInfrastruktur::find();

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
            'id_infrastruktur' => $this->id_infrastruktur,
            'id_user' => $this->id_user,
            'tanggal' => $this->tanggal,
            'longitude' => $this->longitude,
            'latitude' => $this->latitude,
            'id_status' => $this->id_status,
            'tanggal_input' => $this->tanggal_input,
            'id_wilayah' => $this->id_wilayah,
        ]);

        $query->andFilterWhere(['like', 'jenis_infrastruktur', $this->jenis_infrastruktur]);

        return $dataProvider;
    }
}
