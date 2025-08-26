<?php

use app\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\addons\modules\postgres\models\PostgresSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="postgres-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'form_id') ?>

    <?= $form->field($model, 'status') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'db_host') ?>

    <?php // echo $form->field($model, 'db_port') 
    ?>

    <?php // echo $form->field($model, 'db_name') 
    ?>

    <?php // echo $form->field($model, 'db_user') 
    ?>

    <?php // echo $form->field($model, 'db_pass') 
    ?>

    <?php // echo $form->field($model, 'db_schema') 
    ?>

    <?php // echo $form->field($model, 'db_table') 
    ?>

    <?php // echo $form->field($model, 'created_by') 
    ?>

    <?php // echo $form->field($model, 'updated_by') 
    ?>

    <?php // echo $form->field($model, 'created_at') 
    ?>

    <?php // echo $form->field($model, 'updated_at') 
    ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>