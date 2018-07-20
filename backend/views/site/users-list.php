<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\dialog\DialogAsset;
use kartik\dialog\Dialog;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="certificate-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create User', ['create-user'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'name',
            'surname',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete}',
                'buttons' => [
                    'update' => function($url, $model, $key) {     // render your custom button
                        return Html::a('', "/c_admin/site/update-user/".$model->id, ['class' => 'glyphicon glyphicon-pencil']);
                    },
                    'delete' => function($url, $model, $key) {     // render your custom button
                        return Html::a('', '#', ['class' => 'glyphicon glyphicon-trash delete-user', 'id' => 'delete-user-'.$model->id]);
                    },
                ]
            ],
        ],
    ]); ?>
</div>
<?php
DialogAsset::register($this);
$this->registerJs("\$('#delete-user-8').on('click', function() {
    BootstrapDialog.alert('I want banana!');
    console.log('It works');
    return false;
});");
?>