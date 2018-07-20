<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use kartik\form\ActiveForm;
use kartik\datetime\DateTimePicker;

$sdsList = [
        'ФЕДЕРАЛЬНО БЮРО СЕРТИФИКАЦИИ' => 'ФЕДЕРАЛЬНО БЮРО СЕРТИФИКАЦИИ',
        'ЭКОЛОГИЧЕСКИЙ КОНТРОЛЬ ОРГАНИЗАЦИЙ' => 'ЭКОЛОГИЧЕСКИЙ КОНТРОЛЬ ОРГАНИЗАЦИЙ',
        'ОРГАНИК' => 'ОРГАНИК',
        'Пожарный контроль' => 'Пожарный контроль',
        'Халяль' => 'Халяль',
        'РПО' => 'РПО',
    ];

/* @var $this yii\web\View */
/* @var $model common\models\Certificate */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="certificate-form">

    <?php $form = ActiveForm::begin([
        'validationUrl' => ['ajax-validation'],
        'enableAjaxValidation' => true
    ]); ?>

    <?= $form->field($model, 'sds')->dropDownList($sdsList) ?>

    <?= $form->field($model, 'certificate_num')->textInput(['maxlength' => true]) ?>

    <?=
        $form->field($model, 'active_from')->widget(DateTimePicker::classname(), [
        'options' => [
                'placeholder' => 'Enter event time ...',
                'value' => $model->active_from ? date('d-m-Y H:i:s', $model->active_from) : '',
        ],
            'pluginOptions' => [
            'autoclose' => true,
            'format' => 'dd-mm-yyyy H:i:s',
        ]
        ]);
    ?>

    <?=
    $form->field($model, 'active_to')->widget(DateTimePicker::classname(), [
        'options' => [
                'placeholder' => 'Enter event time ...',
                'value' => $model->active_to ? date('d-m-Y H:i:s', $model->active_to) : '',
            ],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'dd-mm-yyyy H:i:s',
        ]
    ]);
    ?>

    <?= $form->field($model, 'certification_body_information')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'service_information')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'manufacturer_information')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'applicant_information')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'meets_requirements')->checkbox(['value' => '1']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
