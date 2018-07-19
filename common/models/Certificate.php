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

    public $sds = [
                'ФЕДЕРАЛЬНО БЮРО СЕРТИФИКАЦИИ' => 'ФЕДЕРАЛЬНО БЮРО СЕРТИФИКАЦИИ',
                'ЭКОЛОГИЧЕСКИЙ КОНТРОЛЬ ОРГАНИЗАЦИЙ' => 'ЭКОЛОГИЧЕСКИЙ КОНТРОЛЬ ОРГАНИЗАЦИЙ', 'ОРГАНИК' => 'ОРГАНИК',
                'Пожарный контроль' => 'Пожарный контроль', 'Халяль' => 'Халяль', 'РПО' => 'РПО'
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
            ['sds', 'in', 'range' => $this->sds],
            [['certification_body_information', 'service_information', 'manufacturer_information', 'applicant_information'], 'string'],
            [['sds', 'certificate_num'], 'string', 'max' => 255],
            [['meets_requirements'], 'string', 'max' => 1],
        ];
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
