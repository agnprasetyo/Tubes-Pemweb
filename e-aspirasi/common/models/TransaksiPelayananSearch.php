<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TransaksiPelayanan;

/**
 * TransaksiPelayananSearch represents the model behind the search form about `common\models\TransaksiPelayanan`.
 */
class TransaksiPelayananSearch extends TransaksiPelayanan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pelayanan', 'id_user', 'id_wilayah', 'id_tempat', 'id_review'], 'integer'],
            [['tanggal', 'jenis_layanan'], 'safe'],
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
        $query = TransaksiPelayanan::find();

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
            'id_pelayanan' => $this->id_pelayanan,
            'id_user' => $this->id_user,
            'tanggal' => $this->tanggal,
            'id_wilayah' => $this->id_wilayah,
            'id_tempat' => $this->id_tempat,
            'id_review' => $this->id_review,
        ]);

        $query->andFilterWhere(['like', 'jenis_layanan', $this->jenis_layanan]);

        return $dataProvider;
    }
}
