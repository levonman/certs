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
            [['active_from', 'active_to'], 'customDateTimeCompare', 'skipOnEmpty' => false],
            ['sds', 'in', 'range' => $this->sdsList],
            [['certification_body_information', 'service_information', 'manufacturer_information', 'applicant_information'], 'string'],
            [['sds', 'certificate_num'], 'string', 'max' => 255],
            [['meets_requirements'], 'string', 'max' => 1],
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
            $this->active_from = $active_from;
            $this->active_to = $active_to;

            if($active_from >= $active_to){
                $this->addError($attribute, 'Active from date must be < active to date');
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
            'sds' => 'Sds',
            'certificate_num' => 'Certificate Num',
            'active_from' => 'Active From',
            'active_to' => 'Active To',
            'certification_body_information' => 'Certification Body Information',
            'service_information' => 'Service Information',
            'manufacturer_information' => 'Manufacturer Information',
            'applicant_information' => 'Applicant Information',
            'meets_requirements' => 'Meets Requirements',
        ];
    }
}
