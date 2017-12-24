<?php
use kouosl\theme\helpers\Html;
use kouosl\theme\widgets\Portlet;


$this->title = 'Update cevrimicisinav';
$data['title'] = Html::encode($this->title);
$this->params['breadcrumbs'][] = $this->title;


$this->params['pageTitle'] 	= $this->title;
$this->params['pageDesc'] 	= 'describes the cevrimicisinav features';

$data['model']          = $model;
$data['uploadImage']    = $uploadImage;
$formView	            = $this->render('_form',$data);

Portlet::begin(['title' => $this->title, 'icon' => 'glyphicon glyphicon-cog']);

    echo $this->render('update', ['formView' => $formView]);

Portlet::end();