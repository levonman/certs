<?php
use  yii\widgets\ActiveForm;
use yii\bootstrap\Html;
?>
<section class="header">
    <div class="container">
        <div class="logo_div">
            <img src="image/logo1.png" alt="" class="top_logo">
            <p class="logo_text">Lorem ipsum dolor sit amet, consectetur </p>
        </div>
        <div class="input_div">
            <?php $form = ActiveForm::begin(['id' => 'search']); ?>

            <?= $form->field($model, 'term')->textInput(['autofocus' => true]) ?>
            <hr />
            <?= $form->field($model, 'date')->input('date') ?>

            <?= Html::submitButton('Поиск', ['class' => 'btn', 'name' => 'search']) ?>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
    <div class="results"></div>
</section>
<section class="body">
    <div class="container">
        <p class="title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet, distinctio et sit sunt
            voluptate.</p>
        <p class="sub_title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, repellat.</p>
        <p class="desc"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aperiam asperiores
            aspernatur assumenda autem cum deleniti dolorum ea est et eveniet ex, expedita facilis impedit laboriosam
            nisi placeat possimus, quia quibusdam rem reprehenderit saepe sint sunt temporibus, totam velit
            voluptates!</p>
        <p class="sub_title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, repellat.</p>
        <p class="desc"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aperiam asperiores
            aspernatur assumenda autem cum deleniti dolorum ea est et eveniet ex, expedita facilis impedit laboriosam
            nisi placeat possimus, quia quibusdam rem reprehenderit saepe sint sunt temporibus, totam velit
            voluptates! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci dolorum error, labore
            nesciunt odit quibusdam quo saepe sed sunt veritatis.</p>
        <p class="sub_title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, repellat.</p>
        <p class="desc"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aperiam asperiores
            aspernatur assumenda autem cum deleniti dolorum ea est et eveniet ex, expedita facilis impedit laboriosam
            nisi placeat possimus, quia quibusdam rem reprehenderit saepe sint sunt temporibus, totam velit
            voluptates!</p>
        <p class="sub_title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, repellat.</p>
        <p class="desc"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aperiam asperiores
            aspernatur assumenda autem cum deleniti dolorum ea est et eveniet ex, expedita facilis impedit laboriosam
            nisi placeat possimus, quia quibusdam rem reprehenderit saepe sint sunt temporibus, totam velit
            voluptates!</p>
        <p class="title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci blanditiis deleniti deserunt
            facere
            labore, maiores nobis non repellendus saepe veniam?</p>
    </div>
</section>
<footer>
    <div class="logo_div_footer">
        <img src="image/logo2.png" alt="" class="footer_logo">
    </div>
    <p class="copyright">All rights reserved <span class="glyphicon glyphicon-copyright-mark"></span> 2018</p>
</footer>