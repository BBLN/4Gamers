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
    
    <body class="color_bluer">
        <div class="sub_wrapper">
			
		</div>
        <div class="main_wrapper">
            <div class="main_container">
                <div id="body_header">
                    <div id="obj_logo"></div>
                    <div id="obj_user_login">
                        <form method="post" action="include/login/">
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
                    <ul id="obj_menu">
                        <li><a href="#" class="first active">בית</a></li>
                        <li><a href="#">כתבות</a></li>
                        <li><a href="#">סיקורים</a></li>
                        <li><a href="#">משחקים אחרונים</a></li>
                    </ul>  
                </div>
                <div id="body_content" class="color_blue">
					<div class="block_raw">
						<span class="padding_5 color_steel display_block border_bottom"><h5 id="navigation"><a href="#">ראשי</a> &#8250; <a href="#">כתבות</a> &#8250; <a href="#">כתבה ראשונה</a></h5></span>
					</div>
                    <div class="block_raw">
						<div class="block_column_70">
							<div id="slider_main" class="margin_10">
								<ul class="slideshow">
									<li>
										<span class="color_blue padding_5">
											<h3><a href="#s1">סליידר 1</a></h3>
											<p>
												משהו מאגניב מאוד על הדבר הכי טוב בעולם!
											</p>
										</span>
										<img src="http://upload.wikimedia.org/wikipedia/commons/5/5f/Chicago_Downtown_Panorama.jpg" name="" />
									</li>
									<li>
										<span class="color_blue padding_5">
											<h3><a href="#s1">סליידר 2</a></h3>
											<p>
												בזבזבז בזבזבז בז בז בזב זבזבזב זבזבזבז בזבזב זבזבזב זבזבז בזבזב זבזבזב זבזבז בזבזבז בזבזבז בזבזבז  
											</p>
										</span>
										<img src="http://9.mshcdn.com/wp-content/uploads/2011/12/google_doodle_chip.jpg" name="" />
									</li>
									<li>
										<span class="color_blue padding_5">
											<h3><a href="#s1">סליידר 3</a></h3>
											<p>
												ajfgagafgjaodfgjafdpgojjadpfg ajdfgpadf gadjpfg 
											</p>
										</span>
										<img src="http://www.astrotheme.com/dominantes/d_9/a939Bu9UKNtY.png" name="" />
									</li>
									<li>
										<span class="color_blue padding_5">
											<h3><a href="#s1">סליידר 4</a></h3>
											<p>
												משהו מאגניב מאוד על הדבר הכי טוב בעולם!
											</p>
										</span>
										<img src="http://upload.wikimedia.org/wikipedia/commons/5/5f/Chicago_Downtown_Panorama.jpg" name="" />
									</li>
									<li>
										<span class="color_blue padding_5">
											<h3><a href="#s1">סליידר 5</a></h3>
											<p>
												בזבזבז בזבזבז בז בז בזב זבזבזב זבזבזבז בזבזב זבזבזב זבזבז בזבזב זבזבזב זבזבז בזבזבז בזבזבז בזבזבז  
											</p>
										</span>
										<img src="http://9.mshcdn.com/wp-content/uploads/2011/12/google_doodle_chip.jpg" name="" />
									</li>
									<li>
										<span class="color_blue padding_5">
											<h3><a href="#s1">סליידר 6</a></h3>
											<p>
												ajfgagafgjaodfgjafdpgojjadpfg ajdfgpadf gadjpfg 
											</p>
										</span>
										<img src="http://www.astrotheme.com/dominantes/d_9/a939Bu9UKNtY.png" name="" />
									</li>
								</ul>
							</div>
						</div>
						<div class="block_column_30">
							<h4 class="border_bottom padding_5 margin_5">המומלצים:</h4>
							<ul id="obj_gamelist">
								<li class="border_bottom_dashed">
									<a href="#"><img src="http://upload.wikimedia.org/wikipedia/en/thumb/6/62/Battlefield2Cover.jpg/256px-Battlefield2Cover.jpg" /></a>
									<span>
										<h5><a href="#">Battlefield 2</a></h5>
										<p>חוית משחק מדהימה ומעולה!</p>
										<h5 class="display_block float_left">10/10</h5>
									</span>
								</li>
								<li class="border_bottom_dashed">
									<a href="#"><img src="http://upload.wikimedia.org/wikipedia/en/thumb/6/62/Battlefield2Cover.jpg/256px-Battlefield2Cover.jpg" /></a>
									<span>
										<h5><a href="#">Battlefield 2</a></h5>
										<p>חוית משחק מדהימה ומעולה!</p>
										<h5 class="display_block float_left">10/10</h5>
									</span>
								</li>
								<li class="border_bottom_dashed">
									<a href="#"><img src="http://upload.wikimedia.org/wikipedia/en/thumb/6/62/Battlefield2Cover.jpg/256px-Battlefield2Cover.jpg" /></a>
									<span>
										<h5><a href="#">Battlefield 2</a></h5>
										<p>חוית משחק מדהימה ומעולה!</p>
										<h5 class="display_block float_left">10/10</h5>
									</span>
								</li>
								<li class="border_bottom_dashed">
									<a href="#"><img src="http://upload.wikimedia.org/wikipedia/en/thumb/6/62/Battlefield2Cover.jpg/256px-Battlefield2Cover.jpg" /></a>
									<span>
										<h5><a href="#">Battlefield 2</a></h5>
										<p>חוית משחק מדהימה ומעולה!</p>
										<h5 class="display_block float_left">10/10</h5>
									</span>
								</li>
								<li class="border_bottom_dashed">
									<a href="#"><img src="http://upload.wikimedia.org/wikipedia/en/thumb/6/62/Battlefield2Cover.jpg/256px-Battlefield2Cover.jpg" /></a>
									<span>
										<h5><a href="#">Battlefield 2</a></h5>
										<p>חוית משחק מדהימה ומעולה!</p>
										<h5 class="display_block float_left">10/10</h5>
									</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="block_raw margin_15">
						
					</div>
					<div class="block_raw">
						<span class="color_steel padding_5 display_block border_bottom border_top">
							<ul class="tabs">
								<li class="activeTab"><a href="#tab-1">כתבות אחרונות</a></li>
								<li><a href="#tab-2">סיקורים אחרונים</a></li>
								<li><a href="#tab-3">משחקים אחרונים</a>
							</ul>
						</span>
                        <div class="pill-content">
                            <div id="tab-1" class="activeTab">
                                <ul id="obj_iconlist">
                                    <li>
                                        <img src="http://media.giantbomb.com/uploads/0/6393/314500-block_large.gif" class="display_block padding_5 margin_5" />
                                        <span>
                                            <h4 class="text_underline padding_5 margin_5">כותרת של כתבה או משהו אחר</h4>
                                            <p class="display_block padding_5 margin_5">פירוט על הכורתרת הראשונה, פירוט קצר של התוכן הפנימי של הכתבה. עוד דברים קטנים ולא חשובים ונגמר.פירוט על הכורתרת הראשונה, פירוט קצר של התוכן הפנימי של הכתבה. עוד דברים קטנים ולא חשובים ונגמר.</p>
                                            <h5 class="display_block float_left">תגים: משחקים מגניבים אברם עם דגש</h5>
                                        </span>
                                    </li>
                                    <li>
                                        <img src="http://media.giantbomb.com/uploads/0/6393/314500-block_large.gif" class="display_block padding_5 margin_5" />
                                        <span>
                                            <h4 class="text_underline padding_5 margin_5">כותרת של כתבה או משהו אחר</h4>
                                            <p class="display_block padding_5 margin_5">פירוט על הכורתרת הראשונה, פירוט קצר של התוכן הפנימי של הכתבה. עוד דברים קטנים ולא חשובים ונגמר.פירוט על הכורתרת הראשונה, פירוט קצר של התוכן הפנימי של הכתבה. עוד דברים קטנים ולא חשובים ונגמר.</p>
                                            <h5 class="display_block float_left">תגים: משחקים מגניבים אברם עם דגש</h5>
                                        </span>
                                    </li>
                                    <li>
                                        <img src="http://media.giantbomb.com/uploads/0/6393/314500-block_large.gif" class="display_block padding_5 margin_5" />
                                        <span>
                                            <h4 class="text_underline padding_5 margin_5">כותרת של כתבה או משהו אחר</h4>
                                            <p class="display_block padding_5 margin_5">פירוט על הכורתרת הראשונה, פירוט קצר של התוכן הפנימי של הכתבה. עוד דברים קטנים ולא חשובים ונגמר.פירוט על הכורתרת הראשונה, פירוט קצר של התוכן הפנימי של הכתבה. עוד דברים קטנים ולא חשובים ונגמר.</p>
                                            <h5 class="display_block float_left">תגים: משחקים מגניבים אברם עם דגש</h5>
                                        </span>
                                    </li>
                                    <li>
                                        <img src="http://media.giantbomb.com/uploads/0/6393/314500-block_large.gif" class="display_block padding_5 margin_5" />
                                        <span>
                                            <h4 class="text_underline padding_5 margin_5">כותרת של כתבה או משהו אחר</h4>
                                            <p class="display_block padding_5 margin_5">פירוט על הכורתרת הראשונה, פירוט קצר של התוכן הפנימי של הכתבה. עוד דברים קטנים ולא חשובים ונגמר.פירוט על הכורתרת הראשונה, פירוט קצר של התוכן הפנימי של הכתבה. עוד דברים קטנים ולא חשובים ונגמר.</p>
                                            <h5 class="display_block float_left">תגים: משחקים מגניבים אברם עם דגש</h5>
                                        </span>
                                    </li>
                                    <li>
                                        <img src="http://media.giantbomb.com/uploads/0/6393/314500-block_large.gif" class="display_block padding_5 margin_5" />
                                        <span>
                                            <h4 class="text_underline padding_5 margin_5">כותרת של כתבה או משהו אחר</h4>
                                            <p class="display_block padding_5 margin_5">פירוט על הכורתרת הראשונה, פירוט קצר של התוכן הפנימי של הכתבה. עוד דברים קטנים ולא חשובים ונגמר.פירוט על הכורתרת הראשונה, פירוט קצר של התוכן הפנימי של הכתבה. עוד דברים קטנים ולא חשובים ונגמר.</p>
                                            <h5 class="display_block float_left">תגים: משחקים מגניבים אברם עם דגש</h5>
                                        </span>
                                    </li>
                                </ul>
                            </div>
							<div id="tab-2">
                                <ul id="obj_iconlist">
                                    <li>
                                        <img src="http://files.xboxic.com/xbox-360/gears-of-war-3/thumbs/gears-of-war-3-logo.jpg" class="display_block padding_5 margin_5" />
                                        <span>
                                            <h4 class="text_underline padding_5 margin_5">כותרת של כתבה או משהו אחר</h4>
                                            <p class="display_block padding_5 margin_5">פירוט על הכורתרת הראשונה, פירוט קצר של התוכן הפנימי של הכתבה. עוד דברים קטנים ולא חשובים ונגמר.פירוט על הכורתרת הראשונה, פירוט קצר של התוכן הפנימי של הכתבה. עוד דברים קטנים ולא חשובים ונגמר.</p>
                                            <h5 class="display_block float_left">תגים: משחקים מגניבים אברם עם דגש</h5>
                                        </span>
                                    </li>
                                    <li>
                                        <img src="http://files.xboxic.com/xbox-360/gears-of-war-3/thumbs/gears-of-war-3-logo.jpg" class="display_block padding_5 margin_5" />
                                        <span>
                                            <h4 class="text_underline padding_5 margin_5">כותרת של כתבה או משהו אחר</h4>
                                            <p class="display_block padding_5 margin_5">פירוט על הכורתרת הראשונה, פירוט קצר של התוכן הפנימי של הכתבה. עוד דברים קטנים ולא חשובים ונגמר.פירוט על הכורתרת הראשונה, פירוט קצר של התוכן הפנימי של הכתבה. עוד דברים קטנים ולא חשובים ונגמר.</p>
                                            <h5 class="display_block float_left">תגים: משחקים מגניבים אברם עם דגש</h5>
                                        </span>
                                    </li>
                                    <li>
                                        <img src="http://files.xboxic.com/xbox-360/gears-of-war-3/thumbs/gears-of-war-3-logo.jpg" class="display_block padding_5 margin_5" />
                                        <span>
                                            <h4 class="text_underline padding_5 margin_5">כותרת של כתבה או משהו אחר</h4>
                                            <p class="display_block padding_5 margin_5">פירוט על הכורתרת הראשונה, פירוט קצר של התוכן הפנימי של הכתבה. עוד דברים קטנים ולא חשובים ונגמר.פירוט על הכורתרת הראשונה, פירוט קצר של התוכן הפנימי של הכתבה. עוד דברים קטנים ולא חשובים ונגמר.</p>
                                            <h5 class="display_block float_left">תגים: משחקים מגניבים אברם עם דגש</h5>
                                        </span>
                                    </li>
                                    <li>
                                        <img src="http://files.xboxic.com/xbox-360/gears-of-war-3/thumbs/gears-of-war-3-logo.jpg" class="display_block padding_5 margin_5" />
                                        <span>
                                            <h4 class="text_underline padding_5 margin_5">כותרת של כתבה או משהו אחר</h4>
                                            <p class="display_block padding_5 margin_5">פירוט על הכורתרת הראשונה, פירוט קצר של התוכן הפנימי של הכתבה. עוד דברים קטנים ולא חשובים ונגמר.פירוט על הכורתרת הראשונה, פירוט קצר של התוכן הפנימי של הכתבה. עוד דברים קטנים ולא חשובים ונגמר.</p>
                                            <h5 class="display_block float_left">תגים: משחקים מגניבים אברם עם דגש</h5>
                                        </span>
                                    </li>
                                    <li>
                                        <img src="http://files.xboxic.com/xbox-360/gears-of-war-3/thumbs/gears-of-war-3-logo.jpg" class="display_block padding_5 margin_5" />
                                        <span>
                                            <h4 class="text_underline padding_5 margin_5">כותרת של כתבה או משהו אחר</h4>
                                            <p class="display_block padding_5 margin_5">פירוט על הכורתרת הראשונה, פירוט קצר של התוכן הפנימי של הכתבה. עוד דברים קטנים ולא חשובים ונגמר.פירוט על הכורתרת הראשונה, פירוט קצר של התוכן הפנימי של הכתבה. עוד דברים קטנים ולא חשובים ונגמר.</p>
                                            <h5 class="display_block float_left">תגים: משחקים מגניבים אברם עם דגש</h5>
                                        </span>
                                    </li>
                                </ul>
                            </div>
							<div id="tab-3">
                                <ul id="obj_iconlist">
                                    <li>
                                        <img src="http://darkstation.com/wp-content/uploads/2011/11/skyrim.jpg" class="display_block padding_5 margin_5" />
                                        <span>
                                            <h4 class="text_underline padding_5 margin_5">כותרת של כתבה או משהו אחר</h4>
                                            <p class="display_block padding_5 margin_5">פירוט על הכורתרת הראשונה, פירוט קצר של התוכן הפנימי של הכתבה. עוד דברים קטנים ולא חשובים ונגמר.פירוט על הכורתרת הראשונה, פירוט קצר של התוכן הפנימי של הכתבה. עוד דברים קטנים ולא חשובים ונגמר.</p>
                                            <h5 class="display_block float_left">תגים: משחקים מגניבים אברם עם דגש</h5>
                                        </span>
                                    </li>
                                    <li>
                                        <img src="http://darkstation.com/wp-content/uploads/2011/11/skyrim.jpg" class="display_block padding_5 margin_5" />
                                        <span>
                                            <h4 class="text_underline padding_5 margin_5">כותרת של כתבה או משהו אחר</h4>
                                            <p class="display_block padding_5 margin_5">פירוט על הכורתרת הראשונה, פירוט קצר של התוכן הפנימי של הכתבה. עוד דברים קטנים ולא חשובים ונגמר.פירוט על הכורתרת הראשונה, פירוט קצר של התוכן הפנימי של הכתבה. עוד דברים קטנים ולא חשובים ונגמר.</p>
                                            <h5 class="display_block float_left">תגים: משחקים מגניבים אברם עם דגש</h5>
                                        </span>
                                    </li>
                                    <li>
                                        <img src="http://darkstation.com/wp-content/uploads/2011/11/skyrim.jpg" class="display_block padding_5 margin_5" />
                                        <span>
                                            <h4 class="text_underline padding_5 margin_5">כותרת של כתבה או משהו אחר</h4>
                                            <p class="display_block padding_5 margin_5">פירוט על הכורתרת הראשונה, פירוט קצר של התוכן הפנימי של הכתבה. עוד דברים קטנים ולא חשובים ונגמר.פירוט על הכורתרת הראשונה, פירוט קצר של התוכן הפנימי של הכתבה. עוד דברים קטנים ולא חשובים ונגמר.</p>
                                            <h5 class="display_block float_left">תגים: משחקים מגניבים אברם עם דגש</h5>
                                        </span>
                                    </li>
                                    <li>
                                        <img src="http://darkstation.com/wp-content/uploads/2011/11/skyrim.jpg" class="display_block padding_5 margin_5" />
                                        <span>
                                            <h4 class="text_underline padding_5 margin_5">כותרת של כתבה או משהו אחר</h4>
                                            <p class="display_block padding_5 margin_5">פירוט על הכורתרת הראשונה, פירוט קצר של התוכן הפנימי של הכתבה. עוד דברים קטנים ולא חשובים ונגמר.פירוט על הכורתרת הראשונה, פירוט קצר של התוכן הפנימי של הכתבה. עוד דברים קטנים ולא חשובים ונגמר.</p>
                                            <h5 class="display_block float_left">תגים: משחקים מגניבים אברם עם דגש</h5>
                                        </span>
                                    </li>
                                    <li>
                                        <img src="http://darkstation.com/wp-content/uploads/2011/11/skyrim.jpg" class="display_block padding_5 margin_5" />
                                        <span>
                                            <h4 class="text_underline padding_5 margin_5">כותרת של כתבה או משהו אחר</h4>
                                            <p class="display_block padding_5 margin_5">פירוט על הכורתרת הראשונה, פירוט קצר של התוכן הפנימי של הכתבה. עוד דברים קטנים ולא חשובים ונגמר.פירוט על הכורתרת הראשונה, פירוט קצר של התוכן הפנימי של הכתבה. עוד דברים קטנים ולא חשובים ונגמר.</p>
                                            <h5 class="display_block float_left">תגים: משחקים מגניבים אברם עם דגש</h5>
                                        </span>
                                    </li>
                                </ul>
                            </div>
						</div>
					</div>
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