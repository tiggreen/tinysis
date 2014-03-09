<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes while working
| with the file system. The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.). Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');


define('DATE_FORMAT',		'%Y%m%d');

/*
|--------------------------------------------------------------------------
| Placeholders
|--------------------------------------------------------------------------
|
| These strings are used as placeholders for input forms 
|
*/

/*
|--------------------------------------------------------------------------
| Messages
|--------------------------------------------------------------------------
| 
|      
|
*/
define('WHEELIE',		'Wheelie');
define('WHEELIE_CUR_STATE_MESSAGE_1',		'There are currently');
define('WHEELIE_CUR_STATE_MESSAGE_2',		'people using Wheelie.');
define('WHEELIE_CUR_STATE_MESSAGE_3',		'They have created');
define('WHEELIE_CUR_STATE_MESSAGE_4',		'trips so far.');

define('DAILY_TRIP_ADD_NOTICE',		'Since your trip is on daily basis, we 
									 would like to keep it posted for the upcoming days as well.
									 You can delete your trip whenever you want.');
define('WEEKLY_TRIP_ADD_NOTICE',    'Since your trip is on weekly basis, we would like 
									 to keep it posted for the upcoming weeks as well.
									 You can delete your trip whenever you want.');
define('MONTHLY_TRIP_ADD_NOTICE',    'Since your trip is оn monthly basis, we 
									 would like to fix this day and post this trip next month this week.
									 You can delete your trip whenever you want.');
define('HEADS_UP', 'Heads up!');
define('ALRIGHT', 'Alright');
define('NOTREALLY', 'No Thanks! ');
define('THANKYOU', 'Thank You! ');
define('OHSNAP', 'Oh snap! ');
define('DONE', 'Done!');
define('HERE', 'here');
define('HI', 'Hi ');
define('ARCHIVE_MESSAGE', 'Show me all previous trips');
define('SUCCESSFULLY_CREATED_TRIP', 'You have successfully created a new trip. ');
define('CHECKITOUT', 'Check it out ');
define('FACEBOOK_EMAIL_CHECK_REMINDER', "You're logged in with your Facebook email account. 
		All your trip notifications will be sent to this email address");
define('TERMS_CONDITIONS_MESSAGE', 'By clicking "Sign up for Wheelie" or "Sign In with Facebook" 
		you accept our ');


define('TERMS_CONDITIONS_NAME', 'Agreement and the Terms of Use');
define('TERMS_CONDITIONS_NAME_BODY', 'This is a legal agreement between you, the user, and Wheelie.me website and associated mobile apps (hereafter referred to as "Wheelie," "we," "us," or "our") offering a carpooling platform to find and offer rides. Use of the information on this website and associated mobile apps and participation in any carpooling arrangement is at your sole risk. We cannot and do not ensure your safety. By using this website you agree to be bound by all the terms and conditions of this Agreement and accept that we have no responsibility for your safety. You must be 18 or over to use our website, and you may use it only where permitted by law. By using this website you acknowledge your acceptance of all of the terms of use described herein. If you do not agree to be bound by this Agreement, do not use this site or any of its services. The terms and conditions of use are subject to change at any time. Your use of the services after such changes constitutes acceptance of the changes. Wheelie will provide several features to help ensure your privacy. We will collect the information from you necessary to only find carpool matches for you. 
									Wheelie uses standard Internet technology and practices to ensure the availability and reliability of its website and to protect the security of the information stored in it. Unfortunately, disruptions are always possible as a result of accidents or intentional interference. In no event is Wheelie or its operators liable for any injuries or losses by any party related to the use of this website. By using the services offered in this site, you agree to assume the risk when using the services described herein including, but not limited to, all of the risks associated with any online or offline interactions or associations with other users. You agree to take all precautions necessary prior to and while utilizing the services offered herein. 
');

define('ELIGIBILITY_TEXT', 'Eligibility');
define('ELIGIBILITY_TEXT_BODY', 'You must be 18 years of age or older to use Wheelie. You may not use Wheelie where it is prohibited. By using this site, you consent to have us provide your information to the other users of Wheelie, as described below, to help you find people to share or offer you rides. Wheelie confirms email addresses with a registration confirmation code. If your email address is registered on Wheelie, it means that you or someone else with access to your email account has confirmed your trip information. By using this website you acknowledge that we’re not responsible for ascertaining who actually controls the email accounts used in our system. By using this site and accepting the Agreement and the Terms of Use, you represent and warrant that you have not been convicted of a felony and are not required to register as such or as a sex offender with any governmental agency. We do not conduct criminal background screenings on our users. If another person has posted your personal information, such as address, phone#, email address, or other, on this website, then please contact us immediately and we will remove the offending information. There is nothing more we can do and we do not accept any liability whatsoever for this type of problem.');

define('ELIGIBILITY_SAFETY', 'Safety');
define('ELIGIBILITY_SAFETY_BODY', 'Wheelie.me provides a service that helps you find and offer rides and meet new people on the road. We cannot and do not ensure the lawful behavior of the people exchanging information through our website. You take full responsibility for ensuring your personal safety when interacting with other people whom you meet through our website. Although we have no specific qualifications to advise you on issues of personal safety, we strongly advise you to verify the person’s identity whom you are going to hit the road with.');

define('PRIVACY_TEXT', 'Privacy');
define('PRIVACY_TEXT_BODY', 'Wheelie only requests the minimal information necessary to perform carpool matching. We collect your provided data only for our ride sharing service. We will not provide your information to anyone else, for any other purpose, unless we are lawfully compelled to do so by a legal authority or to protect or defend Wheelie’s rights, property or those of third parties, or to protect someone’s safety. We will notify our users by email if their private information is disclosed to third parties. You must provide a working email address because all other users and we use that email to contact with you. We do not display your email address to others. The recipient of the email will see the email address of the sender and may or may not respond to the email. We transmit by and between the parties themselves, that email, and all subsequent emails, with no involvement or record. We ask you for your home address to make you a verified user. If you want to get verified we will use that address to send you the verification code. It will help you to be more trustable for other users. We never display these addresses to other users. We allow you to enter your phone number, and we display this information to the other users. This is optional. The choice is yours whether to use this feature or not. We believe the information available on our website is generally very unlikely to increase your normal level of risk. In any event, you take full responsibility for your use of Wheelie, and by using this website you acknowledge your agreement that we have no liability whatsoever for any problem that arises from its use. You are solely responsible for and assume all liability regarding the information and content you distribute, post, transmit or publish through this site and for the interactions resulting from the use of this site. We permit you to enter any text that you desire in your trip description. We recommend that you do not provide specific identifying information, but you can provide whatever information you want. ');

define('DISCLAIMER_TEXT', 'Disclaimer of Warranty');
define('DISCLAIMER_TEXT_BODY', 'Wheelie.me website grants no warranties of any kind, whether express, implied, statutory or otherwise with respect to the services provided on the site and the information contained herein. We don’t warrant that your use of the services will be secure, uninterrupted, error free, or will meet your requirement. We disclaim liability for the conduct of any of the users of this site or its services and assume no responsibility for any errors, omissions, interruptions, delays, defects, communications, theft, destruction or unauthorized access to or alteration of the site or user or member communications.');

define('LIMITATION_TEXT', 'Limitation of Liability');
define('LIMITATION_TEXT_BODY', 'Wheelie.me website will not be liable to you or any third person for any indirect, consequential, incidental exemplary, incidental, special or punitive damages, including lost profits arising from the use of this site or its services. We will not be responsible or liable for any damages arising out of your conduct or conduct toward you, either directly or indirectly, including without limitation, bodily injury, emotional distress or property damage arising from the use of this site or its services.');

define('INDEMNIFICATION_TEXT', 'Indemnification');
define('INDEMNIFICATION_TEXT_BODY', 'You agree to defend, indemnify and hold harmless Wheelie, its officers, directors, employees, agents and third parties for any losses, costs, liabilities, expenses and damages or against any claims by third parties, including reasonable attorneys fees relating to or arising out of your use of this site, its services, your violation of this Agreement or your violation of applicable laws so long as they do not result from any negligence on the part of Wheelie.');

define('ACCEPTABLEUSE_TEXT', 'Acceptable Use');
define('ACCEPTABLEUSE_TEXT_BODY', "Wheelie.com reserves the ultimate right to judge acceptable use. We may change, delete or de-activate any user's information as required to ensure acceptable use without any liability whatsoever to any party. Your specific freedoms and restrictions are as follows: You may create, change, de-activate or delete trip information in this website at any time as needed to help you find or offer rides. You must communicate with other users in a civil, polite manner. No abusive language will be tolerated. We reserve the right to remove the information for any user who does not comply with the spirit of the Wheelie community, as judged by our team, without any liability whatsoever to any party. We welcome commercial and/or governmental use of the system by employers, private or public institutions or regional transportation authorities. We also welcome use of our system by transportation companies and organizations including bus services, vanpool services, taxi companies, limousine services, passenger van rental companies, etc. ");

define('ADDITIONALINFO_TEXT', 'Additional Information');
define('ADDITIONALINFO_TEXT_BODY', 'Please contact us if you have any questions and concerns or if you need additional information.');
define('EMAIL_VERIFICATION_REQUEST', 'We want our users to use real email addresses. We have sent verification instructions to your email.');
define('EMAIL_VERIFICATION_REQUEST_FIRST_TIME', 'We want our users to use real email addresses. Please take a moment and verify your email. ');
define('EMAIL_VERIFY_INSTRUCTIONS', 'Please follow this link to confirm that this is your e-mail address.');
define('NOT_AWARE_INSTRUCTIONS', ' If you did not sign up for Wheelie, please ignore this email.');
define('EMAIL_VERIFY_SUBJECT', 'Verify your email.');
define('WHEELIE_TEAM',  '- The Wheelie Team ');
define('SUCCESSFULLY_VERIFIED',  ' You have successfully verified your email address. ');
define('EMAIL_VERIFY_INSTRUCTIONS_SENT',  ' We have sent email verification instructions to the following email address: ');


define('ABOUT_TEAM_TITLE',  'Team - Wheelie');
define('ABOUT_TEAM_DESC',  'Our motivated team is always excited to make Wheelie better for you.');
define('ABOUT_JOINTEAM_TITLE',  'Join The Team - Wheelie');
define('ABOUT_JOINTEAM_DESC',  'We are always looking for a new hero to join our exciting team.');

define('FEEDBACK_POST_SUCCESS',  'Your idea is successfully posted. Thanks for helping us to make Wheelie better.');
define('FEEDBACK_POST_ERROR',  'Something went wrong while we were trying to add your idea. Try again.');
define('FEEDBACK_TEAM_TITLE',  'Feedback - Wheelie');
define('FEEDBACK_TEAM_DESC',  'Submit an idea that you think will make Wheelie better for you.');
define('FEEDBACK_NOPOSTS',  'Looks like there is no feedback yet. Be the first one.');

define('HOME_REPLYTRIP_ERROR',  'Something went wrong while we were trying to process your reply. Please reply again.');
define('HOME_NEWTRIP_ERROR',  'Something went wrong while we were trying to add the trip. Please try again.');
define('HOME_MESSAGE_SENT_1',  'Your message was sent to ');
define('HOME_MESSAGE_SENT_2',  ' Now you can relax and wait. We will do the rest for you. ');
define('HOME_CREATE_MYFIRST_TRIP',  'Create my first trip');
define('HOME_ADDNEW_TRIP',  'Add a new trip');
define('HOME_ACTIVITY_TITLE',  'Activity - Wheelie');
define('HOME_ACTIVITY_DESC',  'Be always up to date checking your activity page on Wheelie');
define('HOME_NEED_TOBE_ACTIVE',  'You need to be more active!');
define('HOME_TRIP_LIST_EMPTY',  'It looks like the trip list is empty yet.');
define('HOME_CREATE_FIRST_TRIP_MESSAGE',  'Create the first trip of Wheelie');
define('HOME_THE_FIRST_TRIP',  'The first trip');
define('HOME_THE_TRIP_LIST',  'The first trip');
define('HOME_ALL_PAGE_TITLE',  'Trip List - Wheelie');
define('HOME_ALL_PAGE_DESC',  'The list of all trips created by Wheelie users');
define('HOME_ADD_NEW_PAGE_TITLE',  'New trip - Wheelie');
define('HOME_ADD_NEW_PAGE_DESC',  'Be a driver or a passenger and add your trip to the list');
define('HOME_DELETE_TRIP_SUCCESS',  'The trip was successfully removed from the list. ');
define('HOME_DELETE_TRIP_ERROR',  'Something went wrong while we were trying to delete the trip. Please try deleting the trip again.');

define('LOGIN_PAGE_TITLE',  'Wheelie - A new ride-sharing and carpooling platform for college students.');
define('LOGIN_PAGE_DESC',  'Find or offer rides. Find friends on the road making your trips more enjoyable.');
define('LOGIN_INVALID_USERAME_OR_PASS',  'Invalid email and/or password.');
define('LOGIN_INPUT_DATA_INCORRECT',  'Please make sure your input data is correct.');
define('LOGIN_RESET_PASS_TITLE',  'Reset Password - Wheelie');
define('LOGIN_RESET_PASS_DESC',  'No worries! You can easily reset your password.');
define('LOGIN_UPDATE_PASS_TITLE',  'Update Password - Wheelie');
define('LOGIN_UPDATE_PASS_DESC',  'Update your password whenever you feel you need to.');
define('LOGIN_PASS_RESET_FORM',  'Password Reset Form');
define('LOGIN_PASS_RESET_ERROR',  'There was a problem with your link. Please request to reset your password again.');
define('LOGIN_PASS_UPDATE_ERROR',  'Error updating your password.');
define('LOGIN_PASS_UPDATE_SUCCESS1',  'Your password is successfully updated. Now you can log in');
define('LOGIN_PASS_UPDATE_SUCCESS2',  'using your new password.');
define('LOGIN_PASS_UPDATE_GOTO',  'Go to Login page');
define('LOGIN_PASS_UPDATE_ERROR_CONTACT',  'Problem updating your password. Please contact ');
define('LOGIN_NO_USER_WITH_EMAIL',  'There isn\'t any user with the email you entered. ');
define('LOGIN_USER_EMAIL_FB',  'Make sure your email is registered via Wheelie sign up page.');
define('LOGIN_PASS_INSTRUCTIONS_SENT',  'We\'ve sent password reset instructions to your email.');
define('LOGIN_GET_INTOUCH_SUCCESS',  'We got it! Thanks for getting in touch with us.');
define('LOGIN_SOMETHING_WENT_WRONG',  'Something went wrong. Please try again.');
define('LOGIN_TERMS_TITLE',  'Agreement and the Terms of Use - Wheelie');
define('LOGIN_TERMS_DESC',  'Please read our Agreement and the Terms of Use carefully.');
define('LOGINM_PASS_RESET',  'Password reset on Wheelie');
define('LOGINM_PASS_REQUEST_RECEIVE',  'We received a password reset request for your Wheelie account.');
define('LOGINM_LINK_BELOW',  'To reset your password, use the link below');
define('LOGINM_DIDNT_RECEIVE',  'If you didn\'t request a password reset, you can just ignore this email.');
define('LOGINM_PASSWORD_RESET_SUBJECT',  'Reset your password');
define('LOGINM_TYOU',  'Thank You');
define('GETINTOUCH',  'Get in touch');
define('GETINTOUCH_MESSAGE',  'You got a new message');
define('GETINTOUCH_FROM',  'From:');
define('GETINTOUCH_EMAIL',  'Email:');
define('SIGNIN_FB',  'Sign In with Facebook');

define('CONTACT_EMAIL',  'contact@wheelie.me');
define('TEAM_EMAIL',  	 'team@wheelie.me');
define('SUPPORT_EMAIL',  'support@wheelie.me');
define('TIGRAN_EMAIL',   'tigran@wheelie.me');




define('PB_TOP_MESSAGE',  'Let\'s build your profile. How should it look like?');
define('PB_BETTER_SOCIAL',  'Wheelie is better with Facebook and Twitter. Be more trustworthy for others, and see where your friends are heading to.');
define('PB_CONNECT_FB',  'Connect to Facebook');
define('PB_CONNECT_TWT',  'Connect to Twitter');
define('PB_CHANGE',  'Change');
define('PB_REMOVE',  'Remove');
define('PB_SAVE_SUCCESS',  'We saved your profile. You\'re all set to go.');
define('PB_SAVE_ERROR',  'Something went wrong while we were trying to save your profile.');
define('PB_REACH_ME',  'You can find me on');



define('PB_TITLE',  'Build your profile - Wheelie');
define('PB_DESC',  'Bulid your profile so others can learn about you. Stay trustworthy.');
define('PB_CHOOSE_YOUR_SCHOOL',  'Which school are you going to?');
define('FB_CONNECTED_SUCCESS',  'Now you can be reached via Facebook.');
define('TWT_CONNECTED_SUCCESS',  'People can now find and tweet you on Twitter.');
define('PB_YOUR_INFO', 'Tell others about you!');
define('MALE',     'Male');
define('FEMALE',  'Female');


define('SCHOOLS_RIT',  'Rochester Institute of Technology'); 
define('SCHOOLS_OTHER',  'Other'); 
define('PB_SUBMIT_START',  'Save my profile'); 
define('PB_SKIP',  'Skip this for now'); 
define('PB_DISCONNECT',  'Disconnect');
define('PB_TWITTER_CONNECT_FAILED',  'Twitter Connect Failed');
define('PB_TWITTER_COULDNT_CONNECT',  'Could not connect to Twitter. Refresh the page or try again later.');

define('FB_DISCONNECT_SUCCESS',  'Your Wheelie account is no longer linked to Facebook.');
define('FB_DISCONNECT_ERROR',  'Something went wrong while we were trying to disconnect you from Facebook.');

define('TWT_DISCONNECT_SUCCESS',  'Your Wheelie account is no longer linked to Twitter.');
define('TWT_DISCONNECT_ERROR',  'Something went wrong while we were trying to disconnect you from Twitter.');


define('PROFILE_PAGE',  'Profile');
define('LOGOUT',  'Logout');

define('ALL_TRIPS',  'All trips');
define('ADD_NEW_TRIP',  'Add a new trip');
define('MY_ACTIVITY',  'My activity');

define('PROFILE_TITLE',  'Wheelie user profile');
define('PROFILE_DESC',  'Create your profile to be more trusty for others.');
define('PROFILE_EMPTY_NOTICE',  'This person hasn\'t built a profile yet.');

define('SAFETY_TIPS_TITLE',  'Safety tips for Wheelie users.');
define('SAFETY_TIPS_DESC',  'General tips. Tips for Drivers and Passengers.');

define('BACK_TO_TRIPS',  'Back to trips');

define('GENERAL_TIPS',  'General Tips');
define('GT1',  'Make sure you\'re comfortable riding with the passenger/driver.');
define('GT2',  'In case of any changes of plans, communicate them early.');
define('GT3',  'Research your travel partners beforehand.');
define('GT4',  'First of all, talk to your passenger/driver on the phone to figure out the details.');
define('GT5',  'For safety, tell your friends/relatives about your itinerary and give them the phone number of your passenger/driver.');
define('GT6',  'If you can, choose a public location to pick up your passenger or to catch your driver, like a local coffee shop.');
define('GT7',  'Don’t forget to leave a feedback/review from your ride on Wheelie.');
define('GT8',  'Come to an agreement of how the costs will be shared');
define('GT9',  'Be punctual!');
define('GT10',  'Before the trip tell your driver/passenger about preferences, e.g., smoking/non-smoking, food/drink.');
define('GT11',  'Exchange emergency contact numbers before traveling, and exchange any important medical information.');
define('GT12',  'Don’t forget to enjoy your ride!');

define('TIPS_FOR_DRIVERS',  'Tips for Drivers');
define('DT1',  'Make sure that your car insurance and license is up-to-date.');
define('DT2',  'Make your car a comfortable place for the passengers by keeping it clean.');
define('DT3',  'Print out a map or bring your GPS.');
define('DT4',  'If the passengers have reviews or references, read them thoroughly! Don\'t be afraid to ask for more information about them first.');
define('DT5',  'If the passenger is cool with it, take a picture of the passenger\'s ID with your camera phone and send it to your friends/relatives for your safety.');
define('DT6',  'If you are planning a long trip, don’t forget to make a stop and rest ;)');


define('TIPS_FOR_PASSENGERS',  'Tips for Passengers');
define('PT1',  'Make sure you feel comfortable with the driver.');
define('PT2',  'Respect the car itself by keeping it clean.');
define('PT3',  'Make sure the driver knows the size of your luggage before the trip.');
define('PT4',  'If the drivers have reviews or references on Wheelie, read them thoroughly! Don\'t be afraid to ask for more information about them first.');
define('PT5',  'If the driver is cool with it, take a picture of the driver\'s ID with your camera phone and send it to your friends/relatives for your safety.');


/* End of file constants.php */
/* Location: ./application/config/constants.php */