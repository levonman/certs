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
            'active_form',
            'active_to',
            //'certification_body_information:ntext',
            //'service_information:ntext',
            //'manufacturer_information:ntext',
            //'applicant_information:ntext',
            //'meets_requirements',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
