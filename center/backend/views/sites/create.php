<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SiteModel */

$this->title = Yii::t('app', 'Create Site Model');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Site Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pd-20 site-model-create">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
