<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="he">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      	<meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="robot" content="index,follow">
        <meta name="copyright" content="Copyright © 2011 4Gamers IL. All Rights Reserved.">
        <meta name="author" content="4Gamers">
        <meta name="language" content="he">
        <meta name="revisit-after" content="1">
        
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/slider.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/tabs.css" />
    </head>
    
    <body class="bg">
        <div class="sub_wrapper">
			
		</div>
        <div class="main_wrapper">
            <div class="main_container">
                <div id="body_header">
                    <div id="obj_logo"></div>
                    <div id="obj_user_login">
                        <form method="post" action="<?=$this->createUrl('/site/login')?>">
                            <table>
                                <tr>
                                    <td width="70%">
                                        <table cellspacing="3">
                                            <tr>
                                                <td>משתמש:</td>
                                                <td><input type="text" name="user_username" class="input_text_medium" /></td>
                                            </tr>
                                            <tr>
                                                <td>סיסמא:</td>
                                                <td><input type="password" name="user_password" class="input_text_medium" /></td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width="30%" align="center">
                                        <input type="submit" name="user_submit" value="התחבר" class="input_submit_large" />
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
                <div id="body_navbar" class="color_blue">
                    <?php $this->widget('zii.widgets.CMenu',array(
					'items'=>array(
						array('label'=>'בית', 'url'=>array('/site/index')),
						array('label'=>'כתבות', 'url'=>array('/site/page', 'view'=>'about')),
						array('label'=>'סיקורים', 'url'=>array('/site/contact')),
                        array('label'=>'משחקים אחרונים', 'url'=>array('/site/contact')),
					),
                    'id'=> 'obj_menu',
                    'firstItemCssClass' => 'first',
				)); ?>
                </div>
                <div id="body_content" class="color_blue">
                    <div class="block_raw">
                        <span class="padding_5 title_block display_block border_bottom">
                            <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                                'links'=>$this->breadcrumbs,
                                'separator'=>' › ',
                                'homeLink'=>CHtml::link('בית', Yii::app()->homeUrl),
                                'tagName'=>'h5',
                                'htmlOptions'=>array('id'=>'navigation','class'=>'text_red',),
                            )); ?><!-- breadcrumbs -->
                        </span>
                    </div>
                    <?php echo $content; ?>
                </div>
            </div>
			<div id="body_footer">
				<a href="#" class="link_footer">קישור תחתון</a> | <a href="#" class="link_footer">קישור תחתון</a> | 
				<a href="#" class="link_footer">קישור תחתון</a> | <a href="#" class="link_footer">קישור תחתון</a> | 
				<a href="#" class="link_footer">קישור תחתון</a> | <a href="#" class="link_footer">קישור תחתון</a> | 
				<a href="#" class="link_footer">קישור תחתון</a> | <a href="#" class="link_footer">קישור תחתון</a><br />
			</div>
        </div>
    </body>
</html>