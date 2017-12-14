<?php

namespace app\models;

use Yii;

/**
 * This is the model class for collection "DatosPersonales".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $nombres
 * @property mixed $apellidos
 * @property mixed $edad
 * @property mixed $telefono
 */
class DatosPersonales extends \yii\mongodb\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function collectionName()
    {
        return ['taller', 'DatosPersonales'];
    }

    /**
     * {@inheritdoc}
     */
    public function attributes()
    {
        return [
            '_id',
            'nombres',
            'apellidos',
            'edad',
            'telefono',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombres', 'apellidos', 'edad', 'telefono'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'nombres' => 'Nombres',
            'apellidos' => 'Apellidos',
            'edad' => 'Edad',
            'telefono' => 'Telefono',
        ];
    }
}
