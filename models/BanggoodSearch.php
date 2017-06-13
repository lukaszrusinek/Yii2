<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Banggood;

/**
 * BanggoodSearch represents the model behind the search form about `app\models\Banggood`.
 */
class BanggoodSearch extends Banggood
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['Data', 'Nazwa', 'Link', 'Kupon', 'Zdjecie'], 'safe'],
            [['Cena'], 'number'],
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
        $query = Banggood::find();

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
            'Data' => $this->Data,
            'Cena' => $this->Cena,
        ]);

        $query->andFilterWhere(['like', 'Nazwa', $this->Nazwa])
            ->andFilterWhere(['like', 'Link', $this->Link])
            ->andFilterWhere(['like', 'Kupon', $this->Kupon])
            ->andFilterWhere(['like', 'Zdjecie', $this->Zdjecie]);

        return $dataProvider;
    }
}
