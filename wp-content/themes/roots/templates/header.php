<header role="banner">
  <div class="container">
    <div class="row">
      <div class="col-xs-3 logo">
        <a href="<?php echo home_url(); ?>/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="<?php bloginfo('name'); ?>" /></a>
      </div>
      <div class="col-xs-9 main-nav">
        <nav role="navigation">
            <?php
              if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(array('theme_location' => 'primary_navigation'));
              endif;
            ?>
          </nav>
      </div>
    </div>
  <?php
    if (has_nav_menu('language_navigation')) :
      wp_nav_menu(array('theme_location' => 'language_navigation'));
    endif;
  ?>
  </div>
</header>

<?php
  $questions = array(
    array(
      "question" => pll__("My apetite was poor."),
      "key" => "apetite"
    ),
    array(
      "question" => pll__("I could not shake off the blues."),
      "key" => "shake_off_the_blues"
    ),
    array(
      "question" => pll__("I had trouble keeping my mind on what I was doing."),
      "key" => "keeping_mind"
    ),
    array(
      "question" => pll__("I felt depressed."),
      "key" => "depressed"
    ),
    array(
      "question" => pll__("My sleep was restless."),
      "key" => "restless"
    ),
    array(
      "question" => pll__("I felt sad."),
      "key" => "sad"
    ),
    array(
      "question" => pll__("I could not get going."),
      "key" => "get_going"
    ),
    array(
      "question" => pll__("Nothing made me happy."),
      "key" => "happy"
    ),
    array(
      "question" => pll__("I felt like a bad person."),
      "key" => "bad_person"
    ),
    array(
      "question" => pll__("I lost interest in my usual activities."),
      "key" => "activities"
    ),
    array(
      "question" => pll__("I slept much more than usual."),
      "key" => "slept_more"
    ),
    array(
      "question" => pll__("I felt like I was moving too slowly."),
      "key" => "moving_slowly"
    ),
    array(
      "question" => pll__("I felt fidgety."),
      "key" => "fidgety"
    ),
    array(
      "question" => pll__("I wished I were dead."),
      "key" => "wish_was_dead"
    ),
    array(
      "question" => pll__("I wanted to hurt myself."),
      "key" => "hurt"
    ),
    array(
      "question" => pll__("I was tired all the time."),
      "key" => "tired"
    ),
    array(
      "question" => pll__("I did not like myself."),
      "key" => "like_mysefl"
    ),
    array(
      "question" => pll__("I lost a lot of weight without trying to."),
      "key" => "lost_weight"
    ),
    array(
      "question" => pll__("I had a lot of trouble getting to sleep."),
      "key" => "trouble_sleep"
    ),
    array(
      "question" => pll__("I could not focus on the important things."),
      "key" => "focus"
    )
  );

  $options = array(
    array(
      "option" => pll__('Not at all or less than 1 day last week'),
      "key" => "not_at_all",
      "value" => "0"
    ),
    array(
      "option" => pll__('One or two days last week'),
      "key" => "one_or_two",
      "value" => "1"
    ),
    array(
      "option" => pll__('Three to four days last week'),
      "key" => "three_to_four",
      "value" => "2"
    ),
    array(
      "option" => pll__('Five to seven days last week'),
      "key" => "five_to_seven",
      "value" => "3"
    ),
    array(
      "option" => pll__('Nearly every day for two weeks'),
      "key" => "every_day",
      "value" => "3"
    )
  );
?>

<div class="test-wrapper-overlay fancybox-overlay fancybox-overlay-fixed" style="display: none"></div>
<div class="test-wrapper" style="display: none">
  <div class="slide introduction">
    <div class="slide-content">
      <h2><?php pll_e('About CESD-R'); ?></h2>
      <p><?php pll_e("The CESD-R is a screening test for depression and depressive disorder. The CESD-R measures symptoms defined by the American Psychiatric Association' Diagnostic and Statistical Manual (DSM-IV) for a major depressive episode.");?></p>
      <p><?php pll_e("At the top of each of the following screens, you will see a statement. For each statement, please indicate how often you have felt this way recently by selecting the option you most agree with.");?></p>
      <p class="reference"><?php pll_e('Reference: Eaton, W. W., Smith, C., Ybarra, M., Muntaner, C., Tien, A. (2004). Center for Epidemiologic Studies Depression Scale: review and revision (CESD and CESD-R). In ME Maruish (Ed.). The Use of Psychological Testing for Treatment Planning and Outcomes Assessment (3rd Ed.), Volume 3: Instruments for Adults, pp. 363-377. Mahwah, NJ: Lawrence Erlbaum.');?></p>
      <p class="more-info"><?php pll_e('More info:');?> <a href="http://cesd-r.com/" target="_blank">http://cesd-r.com/</a></p>
    </div>
    <div class="slide-footer">
      <button class="btn btn-in-test"><?php pll_e('Start the test'); ?></button>
    </div>
  </div>
  <?php $i = 1; ?>
  <?php foreach ($questions as $q) : ?>
  <div class="slide question question-<?=$i;?>" style="display: none">
    <div class="slide-content">
      <h2><?=$q['question']; ?></h2>
      <p class="agree-the-most"><?php pll_e('(Choose the option you most agree with)'); ?></p>
      <?php foreach ($options as $o) : ?>
        <input type="radio" name="<?=$q['key'];?>" id="<?=$q['key'];?>_<?=$o['key'];?>" value="<?=$o['value'];?>"/>
        <label for="<?=$q['key'];?>_<?=$o['key'];?>"><?=$o['option'];?></label>
      <?php endforeach; ?>
    </div>
    <div class="slide-footer">
      <button class="btn btn-in-test" disabled><span class="question-number"><?php pll_e('Question'); ?> <?=$i;?>/20</span><span class="next-label" style="display: none" <?php if ($i == 20){ ?> onClick="_gaq.push(['_trackEvent', 'Test', 'End', 'End of the test']);"<?php }?>><?php pll_e('Next'); ?></span></button>
    </div>
  </div>
  <?php $i++; ?>
  <?php endforeach; ?>
    <div class="slide result" style="display: none">
    <div class="slide-content">
      <p class="result-title"><?php pll_e('Your CESD-R Results'); ?></p>
      <div class="row">
        <div class="col-xs-4">
          <p><?php pll_e('Sadness'); ?> <span class="points result-sadness">0</span></p>
          <p><?php pll_e('Loss of Interest'); ?> <span class="points result-interest">0</span></p>
          <p><?php pll_e('Apetite'); ?> <span class="points result-apetite">0</span></p>
        </div>
        <div class="col-xs-4">
          <p><?php pll_e('Sleep'); ?> <span class="points result-sleep">0</span></p>
          <p><?php pll_e('Thinking'); ?> <span class="points result-thinking">0</span></p>
          <p><?php pll_e('Guilt'); ?> <span class="points result-guilt">0</span></p>
        </div>
        <div class="col-xs-4">
          <p><?php pll_e('Fatigue'); ?> <span class="points result-fatigue">0</span></p>
          <p><?php pll_e('Movement'); ?> <span class="points result-movement">0</span></p>
          <p><?php pll_e('Suicide'); ?> <span class="points result-suicide">0</span></p>
        </div>
      </div>
      <div class="score-bar">
        <p><span class="score">0</span>/60</p>
        <div class="score-bar-stroke"></div>
      </div>
      <div class="score-category">
        <p class="test-category category-1" style="display: none">
          <?php pll_e('Meets criteria for DSM-IV Major Depressive Disorder. Your answers suggest that depression is an important problem for you. We recommend that you make an appointment with a health care professional to discuss how you are feeling as soon as you can. Depression affects many people. There are good treatments for it.'); ?>
          <span class="hay-placement"><?php pll_e('By the moment you meet with a healthcare professional, you can start monitoring your mood using the How Are You App. This will give you more information about your emotional states, what can be helpful during the first meeting with the healthcare professional.'); ?></span>
        </p>
        <p class="test-category category-2" style="display: none">
          <?php pll_e('Probably Meets criteria for DSM -IV Major Depressive Disorder. Further assessment is needed to determine if Major Depressive Disorder is present. Your answers suggest that depression might be a problem for you. We recommend that you talk about it with your health care professional soon. Depression affects many people. There are good treatments for it.'); ?>
          <span class="hay-placement"><?php pll_e('By the moment you meet with a healthcare professional, you can start monitoring your mood using the How Are You App. This will give you more information about your emotional states, what can be helpful during the first meeting with the healthcare professional.'); ?></span>
        </p>
        <p class="test-category category-3" style="display: none">
          <?php pll_e('Probably Meets criteria for DSM -IV Minor Depressive Disorder. Your answers suggest that depression might be a problem for you. The next time you visit a health care professional, we recommend that you talk with him or her about how you have been feeling.'); ?>
          <span class="hay-placement"><?php pll_e('By the moment you meet with a healthcare professional, you can start monitoring your mood using the How Are You App. This will give you more information about your emotional states, what can be helpful during the first meeting with the healthcare professional.'); ?></span>
        </p>
        <p class="test-category category-4" style="display: none">
          <?php pll_e('Does not meet criteria for DSM - IV Depressive Disorder. Answers suggest depression syndrome may be present. Further assessment is needed. Your answers suggest that depression may be a problem for you. The next time you visit a health care professional, we recommend that you talk with him or her about how you have been feeling.'); ?>
          <span class="hay-placement"><?php pll_e('By the moment you meet with a healthcare professional, you can start monitoring your mood using the How Are You App. This will give you more information about your emotional states, what can be helpful during the first meeting with the healthcare professional.'); ?></span>
        </p>
        <p class="test-category category-5" style="display: none">
          <?php pll_e('Does not meet criteria for DSM - IV Depressive Disorder. Your answers suggest that depression is not a problem for you right now. Talk to your health care professional if you ever have symptoms like those listed above for more than a few days.'); ?>
          <span class="hay-placement"><?php pll_e('You can start monitoring your mood right now using the How Are You App. Thus, you will gain more information about your emotional states and you will be able to identify what factors influenced your mood. Together with How Are You App you will discover also how to prevent mood disorders and how you can take care of mental health.'); ?></span>
        </p>
      </div>
      <div class="suicide-ideation" style="display: none">
        <p><?php pll_e('Your answers show that you have been thinking about hurting yourself recently. Regardless of your responses on the rest of the items, you should schedule an appointment and discuss these feelings with a health professional as soon as you can.'); ?></p>

      </div>
    </div>
    <div class="slide-footer">
      <a href="#" class="btn btn-in-test"><?php pll_e('Finish'); ?></a>
    </div>
  </div>
</div>

