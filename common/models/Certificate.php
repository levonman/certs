<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "certificate".
 *
 * @property int $id
 * @property string $sds
 * @property string $certificate_num
 * @property string $active_from
 * @property string $active_to
 * @property string $certification_body_information
 * @property string $service_information
 * @property string $manufacturer_information
 * @property string $applicant_information
 * @property string $meets_requirements
 * @property string $user_id
 */
class Certificate extends \yii\db\ActiveRecord
{

    public $sdsList = [
                'РПО' => 'РПО',
                'ЭКОЛОГИЧЕСКИЙ КОНТРОЛЬ ОРГАНИЗАЦИЙ' => 'ЭКОЛОГИЧЕСКИЙ КОНТРОЛЬ ОРГАНИЗАЦИЙ', 'ОРГАНИК' => 'ОРГАНИК',
                'Пожарный контроль' => 'Пожарный контроль', 'Халяль' => 'Халяль', 'ФЕДЕРАЛЬНО БЮРО СЕРТИФИКАЦИИ' => 'ФЕДЕРАЛЬНО БЮРО СЕРТИФИКАЦИИ',
            ];

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'certificate';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['active_from', 'active_to', 'sds', 'certificate_num', 'certification_body_information', 'service_information', 'manufacturer_information', 'applicant_information'], 'required'],
            [['active_from', 'active_to'], 'customDateTimeValidate', 'skipOnEmpty' => false],
            ['active_from', 'customDateTimeCompare', 'skipOnEmpty' => false],
            ['sds', 'in', 'range' => $this->sdsList],
            [['certification_body_information', 'service_information', 'manufacturer_information', 'applicant_information'], 'string'],
            [['sds', 'certificate_num'], 'string', 'max' => 255],
            [['meets_requirements'], 'string', 'max' => 1],
            ['user_id', 'exist', 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            ['user_id', 'safe'],
        ];
    }

    public function customDateTimeValidate($attribute){
        $date = date_create($this->$attribute);
        if(!$date){
            $this->addError($attribute, 'False date specified');
        }
    }

    public function customDateTimeCompare($attribute){

        $active_from = $date = date_create($this->active_from);
        $active_to = $date = date_create($this->active_to);

        if($active_from && $active_to){
            $active_from = date_format($active_from, 'U');
            $active_to = date_format($active_to, 'U');

            if($active_from >= $active_to){
                $this->addError($attribute, "Active from date must be < Active to date");
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sds' => 'СДС',
            'certificate_num' => 'Номер сертификата',
            'active_from' => 'Действителен с',
            'active_to' => 'Действителен по',
            'certification_body_information' => 'Сведения об органе по сертификации',
            'service_information' => 'Сведения о продукции (услуге)',
            'manufacturer_information' => 'Информация о изготовителе',
            'applicant_information' => 'Информация о заявителе',
            'meets_requirements' => 'Соответствует требованиям',
            'user_id' => 'Клиент',
        ];
    }
}
