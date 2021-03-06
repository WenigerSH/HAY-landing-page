<?php
/**
 * Custom functions
 */

add_filter( 'widget_display_callback', 'add_widget_title_to_before_widget', 10, 3 );
function add_widget_title_to_before_widget( $instance, $widget_class, $args ) {
    if ( ! empty( $instance['title'] ) ) {
        $new_class = 'class="' . sanitize_title( $instance['title'] ) . ' ';
        $args['before_widget'] = str_replace('class="', $new_class, $args['before_widget']);
        $widget_class->widget( $args, $instance );
        return false;
    }
}

register_nav_menus(array(
  'secondary_navigation' => __('Secondary Navigation', 'roots'),
  'language_navigation' => __('Language Navigation', 'roots')
));

add_filter('upload_mimes', 'custom_upload_mimes');
function custom_upload_mimes ( $existing_mimes=array() ) {
	// Add *.EPS files to Media upload
	$existing_mimes['eps'] = 'application/postscript';
	return $existing_mimes;
}

remove_filter('the_content', 'wptexturize');
remove_filter('comment_text', 'wptexturize');
remove_filter('the_excerpt', 'wptexturize');


//translations
if(function_exists('pll_register_string')) {
    pll_register_string('developed_by', 'How Are You App is developed by');
    pll_register_string('all_rights_reserved', 'All rights reserved');
    pll_register_string('additional_info', 'Additional info');
    pll_register_string('love_you', 'We love you');
    pll_register_string('contact_business', 'Contact for business');
    pll_register_string('contact_press', 'Contact for press and science');
    pll_register_string('social_psychologist', 'Social Psychologist');
    pll_register_string('tell_us_what_you_think', 'Tell us what you think about How Are You App');
    pll_register_string('sign_up_newsletter', 'Sign up for product informations and promotions');
    pll_register_string('start_the_test', 'Start the test');
    pll_register_string('next', 'Next');
    pll_register_string('not_at_all', 'Not at all or less than 1 day last week');
    pll_register_string('one_or_two', 'One or two days last week');
    pll_register_string('three_to_four', 'Three to four days last week');
    pll_register_string('five_to_seven', 'Five to seven days last week');
    pll_register_string('every_day', 'Nearly every day for two weeks');

    pll_register_string('apetite', 'My apetite was poor.');
    pll_register_string('shake_off_the_blues', 'I could not shake off the blues.');
    pll_register_string('keeping_mind', 'I had trouble keeping my mind on what I was doing.');
    pll_register_string('depressed', 'I felt depressed.');
    pll_register_string('restless', 'My sleep was restless.');
    pll_register_string('sad', 'I felt sad.');
    pll_register_string('get_going', 'I could not get going.');
    pll_register_string('happy', 'Nothing made me happy.');
    pll_register_string('bad_person', 'I felt like a bad person.');
    pll_register_string('activities', 'I lost interest in my usual activities.');
    pll_register_string('slept_more', 'I slept much more than usual.');
    pll_register_string('moving_slowly', 'I felt like I was moving too slowly.');
    pll_register_string('fidgety', 'I felt fidgety.');
    pll_register_string('wish_was_dead', 'I wished I were dead.');
    pll_register_string('hurt', 'I wanted to hurt myself.');
    pll_register_string('tired', 'I was tired all the time.');
    pll_register_string('like_mysefl', 'I did not like myself.');
    pll_register_string('lost_weight', 'I lost a lot of weight without trying to.');
    pll_register_string('trouble_sleep', 'I had a lot of trouble getting to sleep.');
    pll_register_string('focus', 'I could not focus on the important things.');

    pll_register_string('your_cesdr_results', 'Your CESD-R Results');
    pll_register_string('score_sadness', 'Sadness');
    pll_register_string('score_interest', 'Loss of Interest');
    pll_register_string('score_apetite', 'Apetite');
    pll_register_string('score_sleep', 'Sleep');
    pll_register_string('score_thinking', 'Thinking');
    pll_register_string('score_guilt', 'Guilt');
    pll_register_string('score_fatique', 'Fatigue');
    pll_register_string('score_movement', 'Movement');
    pll_register_string('score_suicide', 'Suicide');
    pll_register_string('score_explanation', 'Score Explanation');

    pll_register_string('test_about', 'About CESD-R');

    pll_register_string('test_introduction_1', "The CESD-R is a screening test for depression and depressive disorder. The CESD-R measures symptoms defined by the American Psychiatric Association' Diagnostic and Statistical Manual (DSM-IV) for a major depressive episode.");
    pll_register_string('test_introduction_1', "At the top of each of the following screens, you will see a statement. For each statement, please indicate how often you have felt this way recently by selecting the option you most agree with.");
    pll_register_string('reference', 'Reference: Eaton, W. W., Smith, C., Ybarra, M., Muntaner, C., Tien, A. (2004). Center for Epidemiologic Studies Depression Scale: review and revision (CESD and CESD-R). In ME Maruish (Ed.). The Use of Psychological Testing for Treatment Planning and Outcomes Assessment (3rd Ed.), Volume 3: Instruments for Adults, pp. 363-377. Mahwah, NJ: Lawrence Erlbaum.');
    pll_register_string('more_info', 'More info:');

    pll_register_string('suicide', 'Your answers show that you have been thinking about hurting yourself recently. Regardless of your responses on the rest of the items, you should schedule an appointment and discuss these feelings with a health professional as soon as you can.');

    pll_register_string('category_1', 'Meets criteria for DSM-IV Major Depressive Disorder. Your answers suggest that depression is an important problem for you. We recommend that you make an appointment with a health care professional to discuss how you are feeling as soon as you can. Depression affects many people. There are good treatments for it.');
    pll_register_string('category_2', 'Probably Meets criteria for DSM -IV Major Depressive Disorder. Further assessment is needed to determine if Major Depressive Disorder is present. Your answers suggest that depression might be a problem for you. We recommend that you talk about it with your health care professional soon. Depression affects many people. There are good treatments for it.');
    pll_register_string('category_3', 'Probably Meets criteria for DSM -IV Minor Depressive Disorder. Your answers suggest that depression might be a problem for you. The next time you visit a health care professional, we recommend that you talk with him or her about how you have been feeling.');
    pll_register_string('category_4', 'Does not meet criteria for DSM - IV Depressive Disorder. Answers suggest depression syndrome may be present. Further assessment is needed. Your answers suggest that depression may be a problem for you. The next time you visit a health care professional, we recommend that you talk with him or her about how you have been feeling.');
    pll_register_string('category_5', 'Does not meet criteria for DSM - IV Depressive Disorder. Your answers suggest that depression is not a problem for you right now. Talk to your health care professional if you ever have symptoms like those listed above for more than a few days.');
    pll_register_string('question', 'Question');

    pll_register_string('hay_placement_1', 'By the moment you meet with a healthcare professional, you can start monitoring your mood using the How Are You App. This will give you more information about your emotional states, what can be helpful during the first meeting with the healthcare professional.');
    pll_register_string('hay_placement_2', 'You can start monitoring your mood right now using the How Are You App. Thus, you will gain more information about your emotional states and you will be able to identify what factors influenced your mood. Together with How Are You App you will discover also how to prevent mood disorders and how you can take care of mental health.');

    pll_register_string('finish', 'Finish');

    pll_register_string('agree_the_most', '(Choose the option you most agree with)');

}

function custom_scripts() {
  wp_register_script('jquery_fancybox', get_template_directory_uri() . '/assets/js/vendor/jquery.fancybox.pack.js', array('jquery'), null, true);
  wp_enqueue_script('jquery_fancybox');
  wp_enqueue_style( 'fancybox-css', get_template_directory_uri() . '/assets/css/jquery.fancybox.css' );
}
add_action('wp_enqueue_scripts', 'custom_scripts');
