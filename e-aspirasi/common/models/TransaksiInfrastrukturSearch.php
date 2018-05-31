<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TransaksiInfrastruktur;

/**
 * TransaksiInfrastrukturSearch represents the model behind the search form of `common\models\TransaksiInfrastruktur`.
 */
class TransaksiInfrastrukturSearch extends TransaksiInfrastruktur
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_infrastruktur', 'id_user'], 'integer'],
            [['tanggal', 'jenis_infrastruktur', 'id_status', 'tanggal_input', 'id_wilayah', 'id_bukti'], 'safe'],
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
        $query = TransaksiInfrastruktur::find();

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
            'id_infrastruktur' => $this->id_infrastruktur,
            'id_user' => $this->id_user,
            'tanggal' => $this->tanggal,
            'tanggal_input' => $this->tanggal_input,
        ]);

        $query->andFilterWhere(['like', 'jenis_infrastruktur', $this->jenis_infrastruktur])
            ->andFilterWhere(['like', 'id_status', $this->id_status])
            ->andFilterWhere(['like', 'id_wilayah', $this->id_wilayah])
            ->andFilterWhere(['like', 'id_bukti', $this->id_bukti]);

        return $dataProvider;
    }
}
