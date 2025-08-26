<?php

namespace app\modules\addons\modules\postgres\models;

use Yii;

/**
 * This is the model class for table "{{%addon_postgres_field}}".
 *
 * @property integer $id
 * @property integer $postgres_id
 * @property integer $form_id
 * @property string $form_field
 * @property string $table_column
 */
class PostgresField extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%addon_postgres_field}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['postgres_id', 'form_id'], 'integer'],
            [['form_field', 'table_column'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'postgres_id' => Yii::t('app', 'PostgreSQL ID'),
            'form_id' => Yii::t('app', 'Form ID'),
            'form_field' => Yii::t('app', 'Form Field'),
            'table_column' => Yii::t('app', 'Table Column'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPostgres()
    {
        return $this->hasOne(Postgres::class, ['postgres_id' => 'id']);
    }
}
