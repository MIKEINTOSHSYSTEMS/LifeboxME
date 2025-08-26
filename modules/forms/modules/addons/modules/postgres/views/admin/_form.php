<?php

use app\components\widgets\ConditionsBuilder;
use app\helpers\EventHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use app\components\widgets\ActiveForm;
use kartik\select2\Select2;
use kartik\switchinput\SwitchInput;
use kartik\depdrop\DepDrop;

/* @var $this yii\web\View */
/* @var $model app\modules\addons\modules\postgres\models\Postgres */
/* @var $fieldModel app\modules\addons\modules\postgres\models\PostgresField */
/* @var $form yii\widgets\ActiveForm */
/* @var $forms array [id => name] of Form models */
/* @var $lists array [id => name] of Subscriber Lists */
/* @var $connected boolean The connection to PostgreSQL has been established */

$formFieldUrl = Url::to(['/addons/postgres/admin/fields']);
$listFieldUrl = Url::to(['/addons/postgres/admin/list-fields']);
?>

<div class="postgres-form">

    <?php $form = ActiveForm::begin([
        'options' => ['autocomplete' => 'off']
    ]); ?>

    <div class="row">
        <div class="col-sm-12">
            <legend style="margin-top: 0"><?= Yii::t('app', 'Database Connection') ?></legend>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'db_host')->textInput([
                'maxlength' => true,
            ]) ?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'db_port')->textInput([
                'maxlength' => true,
            ]) ?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'db_schema')->textInput([
                'maxlength' => true,
                'value' => $model->db_schema ?: 'public'
            ]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'db_name')->textInput([
                'maxlength' => true,
            ]) ?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'db_user')->textInput([
                'maxlength' => true,
            ]) ?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'db_pass')->passwordInput([
                'maxlength' => true,
                'autocomplete' => 'off'
            ]) ?>
        </div>
    </div>

    <?php if ($connected && !empty($model->db_host)): ?>

        <div class="row">
            <div class="col-sm-12">
                <legend><?= Yii::t('app', 'Settings') ?></legend>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <?= $form->field($model, 'name')->textInput([
                    'placeholder' => Yii::t('app', "Enter a configuration name..."),
                    'maxlength' => true,
                ]) ?>
            </div>
        </div>

        <div class="row" style="margin-top: 20px;">
            <div class="col-sm-6">
                <?= $form->field($model, 'form_id')->widget(Select2::class, [
                    'data' => $forms,
                    'options' => ['id' => 'postgres-form_id', 'placeholder' => Yii::t('app', 'Select a form...')],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ])->label(Yii::t('app', 'Form')); ?>
            </div>
            <div class="col-sm-6">
                <?= $form->field($model, 'db_table')->widget(Select2::class, [
                    'data' => $lists,
                    'options' => [
                        'id' => 'postgres-db_table',
                        'placeholder' => Yii::t('app', 'Select a DB table...'),
                    ],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ])->hint(Yii::t(
                    'app',
                    'Select the table in which you want to add records.'
                )); ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <?= $form->field($model, 'event')->widget(Select2::class, [
                    'data' => EventHelper::supportedFormEvents(),
                ]); ?>
            </div>
            <div class="col-sm-6">
                <?php if ($model->isNewRecord) {
                    $model->status = 1;
                } ?>
                <?= $form->field($model, 'status')->widget(SwitchInput::class)->hint(Yii::t(
                    'app',
                    'Disables the integration at any time.'
                )) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <?= ConditionsBuilder::widget([
                    'label' => Yii::t('app', 'Conditions'),
                ]) ?>
                <?= $form->field($model, "conditions", ['options' => ['class' => 'd-none']])->hiddenInput() ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <legend><?= Yii::t('app', 'Field Mapping') ?></legend>
            </div>
        </div>

        <?php if ($model->isNewRecord || count($model->items) === 0): ?>

            <fieldset class="item">
                <div class="row">
                    <div class="col-sm-6">
                        <?= $form->field($fieldModel, '[0]form_field')->widget(DepDrop::class, [
                            'pluginOptions' => [
                                'depends' => ['postgres-form_id'],
                                'placeholder' => Yii::t('app', 'Select...'),
                                'url' => $formFieldUrl,
                            ]
                        ]) ?>
                    </div>
                    <div class="col-sm-5">
                        <?= $form->field($fieldModel, '[0]table_column')->widget(DepDrop::class, [
                            'pluginOptions' => [
                                'depends' => ['postgres-db_table'],
                                'placeholder' => Yii::t('app', 'Select...'),
                                'url' => $listFieldUrl,
                            ]
                        ]) ?>
                    </div>
                    <div class="col-sm-1">
                        <div class="form-group" style="padding-top: 28px;">
                            <button type="button" class="btn btn-icon btn-default btn-add">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </fieldset>

            <fieldset id="itemTemplate" class="d-none">
                <div class="row">
                    <div class="col-sm-6">
                        <?= $form->field($fieldModel, 'form_field')->widget(DepDrop::class, [
                            'pluginOptions' => [
                                'depends' => ['postgres-form_id'],
                                'placeholder' => Yii::t('app', 'Select...'),
                                'url' => $formFieldUrl,
                                'initialize' => true,
                            ],
                            'pluginEvents' => [
                                "depdrop:afterChange" => "function(event, id, value) { 
                                    $(event.currentTarget).attr('disabled', true)
                                }",
                            ],
                        ]) ?>
                    </div>
                    <div class="col-sm-5">
                        <?= $form->field($fieldModel, 'table_column')->widget(DepDrop::class, [
                            'pluginOptions' => [
                                'depends' => ['postgres-db_table'],
                                'placeholder' => Yii::t('app', 'Select...'),
                                'url' => $listFieldUrl,
                            ],
                            'pluginEvents' => [
                                "depdrop:afterChange" => "function(event, id, value) { 
                                    $(event.currentTarget).attr('disabled', true)
                                }",
                            ],
                        ]) ?>
                    </div>
                    <div class="col-sm-1">
                        <div class="form-group" style="padding-top: 28px;">
                            <button type="button" class="btn btn-icon btn-default btn-remove">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </fieldset>

        <?php else: ?>

            <?php foreach ($model->items as $i => $item): ?>
                <fieldset class="item">
                    <div class="row">
                        <div class="col-sm-6">
                            <?= Html::hiddenInput(
                                'item-' . $i . '-form_field',
                                $item->form_field,
                                ['id' => 'item-' . $i . '-form_field']
                            ) ?>
                            <?= $form->field($fieldModel, '[' . $i . ']form_field')->widget(DepDrop::class, [
                                'pluginOptions' => [
                                    'depends' => ['postgres-form_id'],
                                    'placeholder' => Yii::t('app', 'Select...'),
                                    'url' => $formFieldUrl,
                                    'params' => ['item-' . $i . '-form_field'],
                                ]
                            ]) ?>
                        </div>
                        <div class="col-sm-5">
                            <?= Html::hiddenInput('item-' . $i . '-table_column', $item->table_column, ['id' => 'item-' . $i . '-table_column']) ?>
                            <?= $form->field($fieldModel, '[' . $i . ']table_column')->widget(DepDrop::class, [
                                'pluginOptions' => [
                                    'depends' => ['postgres-db_table'],
                                    'placeholder' => Yii::t('app', 'Select...'),
                                    'url' => $listFieldUrl,
                                    'params' => ['item-' . $i . '-table_column']
                                ]
                            ]) ?>
                        </div>
                        <div class="col-sm-1">
                            <button type="button" class="btn btn-icon btn-default btn-remove" style="margin-top: 28px;">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                </fieldset>
            <?php endforeach; ?>

            <fieldset id="itemTemplate" class="d-none">
                <div class="row">
                    <div class="col-sm-6">
                        <?= Html::hiddenInput('item-form_field', '', ['id' => 'item-form_field']) ?>
                        <?= $form->field($fieldModel, 'form_field')->widget(DepDrop::class, [
                            'pluginOptions' => [
                                'depends' => ['postgres-form_id'],
                                'placeholder' => Yii::t('app', 'Select...'),
                                'url' => $formFieldUrl,
                                'params' => ['item-form_field'],
                                'initialize' => true,
                            ],
                            'pluginEvents' => [
                                "depdrop:afterChange" => "function(event, id, value) { 
                                    $(event.currentTarget).attr('disabled', true)
                                }",
                            ],
                        ]) ?>
                    </div>
                    <div class="col-sm-5">
                        <?= Html::hiddenInput('item-table_column', '', ['id' => 'item-table_column']) ?>
                        <?= $form->field($fieldModel, 'table_column')->widget(DepDrop::class, [
                            'pluginOptions' => [
                                'depends' => ['postgres-db_table'],
                                'initialize' => true,
                                'placeholder' => Yii::t('app', 'Select...'),
                                'url' => $listFieldUrl,
                                'params' => ['item-table_column'],
                            ],
                            'pluginEvents' => [
                                "depdrop:afterChange" => "function(event, id, value) { 
                                    $(event.currentTarget).attr('disabled', true)
                                }",
                            ],
                        ]) ?>
                    </div>
                    <div class="col-sm-1">
                        <button type="button" class="btn btn-icon btn-default btn-remove" style="margin-top: 28px;">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
            </fieldset>

        <?php endif; ?>

    <?php endif; ?>

    <div class="form-group" style="margin-top: 20px">
        <?= Html::submitButton(!$connected ?
            ' <i class="fas fa-external-link-square me-2"></i> ' . Yii::t('app', 'Connect to PostgreSQL') :
            ' <i class="fas fa-check me-2"></i> ' . Yii::t('app', 'Save'), ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>


<?php

$this->registerCss("legend { margin-top: 20px; }");

/**
 * Conditional Logic
 */

$ruleBuilderURL = Url::to(['/form/rule-builder']);
$initialize = (int)!$model->isNewRecord;

$script = <<<JS

$(document).ready(function(){

    // Load Conditions Widget
    $("body")
        .find('.rule-builder-conditions')
        .attr('id', 'conditions-builder-1')
        .conditionsWidget({
            'field': '#postgres-conditions',
            'url': '{$ruleBuilderURL}',
            'depends': ['postgres-form_id'],
            'initialize': parseInt("{$initialize}")
        })
        .end()

});

JS;

$this->registerJs($script, $this::POS_END, 'postgres-conditions');

/**
 * Field Mapping
 */

if ($model->isNewRecord || count($model->items) === 0) {
    $script = <<<JS

$(document).ready(function(){

    var item = 0;

    $('form')
        // Add button click handler
        .on('click', '.btn-add', function() {

            var template = $('#itemTemplate'),
                cloned = template
                    .clone()
                    .removeClass('d-none')
                    .addClass('item')
                    .removeAttr('id')
                    .insertBefore(template);
            item++;

            // Update name attribute
            cloned
                .find('[name="PostgresField[form_field]"]')
                    .attr('name', 'PostgresField[' + item + '][form_field]')
                    .attr('id', 'postgresfield-' + item + '-form_field')
                    .removeAttr('disabled')
                    .depdrop({
                        depends: ['postgres-form_id'],
                        url: '{$formFieldUrl}'
                    })
                    .end()
                .find('[name="PostgresField[table_column]"]')
                    .attr('name', 'PostgresField[' + item + '][table_column]')
                    .attr('id', 'postgresfield-' + item + '-table_column')
                    .removeAttr('disabled')
                    .depdrop({
                        depends: ['postgres-db_table'],
                        url: '$listFieldUrl'
                    })
                    .end()
        })
        // Remove button click handler
        .on('click', '.btn-remove', function() {
            var fieldset = $(this).closest('fieldset');
            fieldset.remove();
        });

})

JS;
} else {

    $script = <<<JS

$(window).on('load', function() {
    $('#postgres-form_id').trigger('depdrop.change');
    $('#postgres-db_table').trigger('depdrop.change');
});

$(document).ready(function(){

    var item = $('.item').length;

    $('.btn-remove').first().removeClass('btn-remove').addClass('btn-add')
        .find('.fa-minus').removeClass('fa-minus').addClass('fa-plus');

    $('form')
        // Add button click handler
        .on('click', '.btn-add', function() {

            var template = $('#itemTemplate'),
                cloned = template
                    .clone()
                    .removeClass('d-none')
                    .addClass('item')
                    .removeAttr('id')
                    .insertBefore(template);

            // Update name attribute
            cloned
                .find('[name="PostgresField[form_field]"]')
                    .attr('name', 'PostgresField[' + item + '][form_field]')
                    .attr('id', 'postgresfield-' + item + '-form_field')
                    .removeAttr('disabled')
                    .depdrop({
                        depends: ['postgres-form_id'],
                        url: '{$formFieldUrl}'
                    })
                    .end()
                .find('[name="PostgresField[table_column]"]')
                    .attr('name', 'PostgresField[' + item + '][table_column]')
                    .attr('id', 'postgresfield-' + item + '-table_column')
                    .removeAttr('disabled')
                    .depdrop({
                        depends: ['postgres-db_table'],
                        url: '{$listFieldUrl}'
                    })
                    .end()

            item++;
        })
        // Remove button click handler
        .on('click', '.btn-remove', function() {
            var fieldset = $(this).closest('fieldset');
            fieldset.remove();
        });

})

JS;
}

$this->registerJs($script, $this::POS_END);

?>