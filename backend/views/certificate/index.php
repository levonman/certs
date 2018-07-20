<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Certificates';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="certificate-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Certificate', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'sds',
            'certificate_num',
            [
                'attribute' => 'active_from',
                'format' => 'html',
                'value' => function($model){
                    return date('d-m-Y H:i:s', $model->active_from);
                }
            ],
            [
                'attribute' => 'active_to',
                'format' => 'html',
                'value' => function($model){
                    return date('d-m-Y H:i:s', $model->active_to);
                }
            ],
            'certification_body_information',
            'service_information',
            'manufacturer_information',
            'applicant_information',
            //'meets_requirements',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
