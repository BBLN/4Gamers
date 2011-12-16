<?php
    $this->pageTitle=Yii::app()->name;
    Yii::app()->clientScript->registerCoreScript('jquery');
    Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/slider.js');
    Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/tabs.js');
?>
<script>
    $(document).ready(display_site);
    function display_site(){
        $('.slideshow').slideshow({ timeout: 3500, speed: "slow" });
        $('.tabs').tabs();
    }
</script>
<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <tt><?php echo __FILE__; ?></tt></li>
	<li>Layout file: <tt><?php echo $this->getLayoutFile('main'); ?></tt></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>