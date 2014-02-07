<?
/***********************************************************************************************************
* Language	: English
* Filename	: en_lang.php
* Created	: 2011-11-16
* Updated	:
* Author	: jasni
* Contact	: jasni@mediacliq.com
* Guides	:
*	Format <prefix>_<name>
*	- prefix (lowercase alphabet length: 3char + '_')
*	- name (lowercase alphanumeric anything relevan and without space)
*	-------------------------------
*	'lbl_' -> For label/text/common/apps usage
*	'msg_' -> Success/Info message (usually for standard message/info for core system usage)
*	'err_' -> Error message (usually for standard error like: cannot connect to server, network problem, etc) 
*	
* Note		: Always refer to copywriter for appropriate sentence
* 
***********************************************************************************************************/

/* Label */
/* example: 
	$lang['lbl_'] = '';
*/

/*  Menu */
$lang['lbl_how_to_play'] = 'How';
$lang['lbl_weekly_quizzes'] = 'Quiz';
$lang['lbl_weekly_answer'] = 'Answer';
$lang['lbl_upload_photo'] = 'Photo';
$lang['lbl_galleries'] = 'Gallery';
$lang['lbl_hall_of_fame'] = 'Fame';
$lang['lbl_prizes'] = 'Prize';
$lang['lbl_winners'] = 'Winner';
$lang['lbl_rules_and_regulations'] = 'Rules and Regulations';
$lang['lbl_thank_you'] = 'TQ';
$lang['lbl_faq'] = 'FAQ'; 
$lang['lbl_invite_friends'] = 'Invite';
$lang['lbl_share_with_friends'] = 'Share';

/* General */
$lang['lbl_close'] = 'Close';
$lang['lbl_tq2'] = 'TQ(p)';
$lang['lbl_q'] = 'Q';
$lang['lbl_a'] = 'A';

/* Registration */
$lang['lbl_register'] = 'Register';
$lang['lbl_registration'] = 'Registration';
$lang['lbl_register_account'] = 'Register Account'; 
$lang['lbl_my_personal_detail'] = 'My Personal Details';
$lang['lbl_name'] = 'Nama';
$lang['lbl_email'] = 'Email';
$lang['lbl_gender'] = 'Gender';
$lang['lbl_nric'] = 'NRIC';
$lang['lbl_mobile'] = 'Mobile';
$lang['lbl_profile_picture'] = 'Profile Picture';
$lang['lbl_list_of_friends'] = 'List of Friends';

/* Quiz */
$lang['lbl_week'] = 'Week';
$lang['lbl_current_week'] = 'Current Week';
$lang['lbl_question'] = 'Question';
$lang['lbl_latest_question'] = 'Latest Question';
$lang['lbl_today_question'] = 'Question for today';
$lang['lbl_all_question'] = 'All question';
$lang['lbl_answered_question'] = 'Answered question';
$lang['lbl_unanswered_question'] = 'Unanswered question';
$lang['lbl_answer'] = 'Answer';
$lang['lbl_your_answered'] = 'Your answered';
$lang['lbl_correct_answer'] = 'Correct answer';
$lang['lbl_correct'] = 'Correct';
$lang['lbl_wrong'] = 'Wrong';
$lang['lbl_question_not_ready'] = 'The next Brain Teaser has not been released yet.';
$lang['lbl_answer_not_ready'] = 'This answer has not been revealed yet.';
$lang['lbl_answer_saved'] = 'Your answer has been saved.';
$lang['lbl_no_answered_question'] = 'You have not answered any of the Brain Teasers.';
$lang['lbl_no_unanswered_question'] = 'There are no Brain Teasers yet. Watch this space for the next release.';
$lang['lbl_answer_submitted'] = 'All of your answers has been submitted.';
$lang['lbl_you_have_answered_the_question'] = 'You have already answered the Brain Teaser for today.';
$lang['lbl_you_exceed_photo_perweek'] = 'Sorry, you have already uploaded 5 photos for this week.';

/* Points */
$lang['lbl_for_registration'] = 'Registration (first time)';
$lang['lbl_for_daily_login'] = 'Daily login';
$lang['lbl_for_share_on_wall'] = 'Share on wall';
$lang['lbl_for_submitted_answer'] = 'Submitted 1 answer';
$lang['lbl_for_answered_corrrectly'] = 'Answered daily question correctly';
$lang['lbl_for_submitted_photo'] = 'Submitted 1 photo';
$lang['lbl_for_approved_photo'] = 'Submitted 1 photo';
$lang['lbl_for_crowned_fan'] = 'Crowned as Fan Of the Month';
$lang['lbl_no_history_points'] = 'Please register to start participating in the DRUMSTICK Adventure Rewards Campaign!';
$lang['lbl_no_history_bidding'] = 'You dont have any bidding records!';
$lang['lbl_last_balance'] = 'Last Balance';
$lang['lbl_total_points'] = 'Total Points';

/* Message
/* example: 
*	$lang['msg_'] = '';
*/
$lang['msg_you_must_register_first'] = 'You must register first.';
$lang['msg_confirm_weekly_submitted']	= 'Would you like to submit your entry now? Please note that you won\'t be able to change your answers to this entry once submitted';

/* Error
/* example: 
*	$lang['err_'] = '';
*/
/* Registration */
$lang['err_fill_detail'] = 'Please enter all the required details.';

/* Quiz */
$lang['err_fill_in_all'] = 'Kindly answer all questions of the week before submitting your entry.';
$lang['err_no_input'] = 'Please insert your answer.';
$lang['err_save_fail'] = 'Save fail.';