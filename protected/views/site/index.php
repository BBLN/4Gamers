<?php
    $this->pageTitle=Yii::app()->name;
    $this->breadcrumbs=array(
        'ראשי',
    );

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