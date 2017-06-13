<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "banggood".
 *
 * @property integer $id
 * @property string $Data
 * @property string $Nazwa
 * @property string $Link
 * @property double $Cena
 * @property string $Kupon
 * @property string $Zdjecie
 */
class Banggood extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'banggood';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Data', 'Nazwa', 'Link', 'Cena', 'Kupon', 'Zdjecie'], 'required'],
            [['Data'], 'safe'],
            [['Cena'], 'number'],
            [['Nazwa'], 'string', 'max' => 100],
            [['Link', 'Zdjecie'], 'string', 'max' => 500],
            [['Kupon'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Data' => 'Data',
            'Nazwa' => 'Nazwa',
            'Link' => 'Link',
            'Cena' => 'Cena',
            'Kupon' => 'Kupon',
            'Zdjecie' => 'Zdjecie',
        ];
    }
}
