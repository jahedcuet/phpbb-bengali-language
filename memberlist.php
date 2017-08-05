<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ABOUT_USER'			=> 'প্রোফাইল',
	'ACTIVE_IN_FORUM'		=> 'সবচেয়ে সক্রিয় ফোরাম',
	'ACTIVE_IN_TOPIC'		=> 'সবচেয়ে সক্রিয় বিষয়',
	'ADD_FOE'				=> 'জন্য জুড়ুন',
	'ADD_FRIEND'			=> 'বন্ধু যোগ করুন',
	'AFTER'					=> 'পর',

	'ALL'					=> 'সমস্ত',

	'BEFORE'				=> 'আগে',

	'CC_SENDER'				=> 'এই ইমেলের একটি অনুলিপি নিজের কাছে পাঠান।',
	'CONTACT_ADMIN'			=> 'একটি বোর্ড প্রশাসক সঙ্গে যোগাযোগ',

	'DEST_LANG'				=> 'ভাষা',
	'DEST_LANG_EXPLAIN'		=> 'Select an appropriate language (if available) for the recipient of this message.',

	'EDIT_PROFILE'			=> 'Edit profile',

	'EMAIL_BODY_EXPLAIN'	=> 'This message will be sent as plain text, do not include any HTML or BBCode. The return address for this message will be set to your email address.',
	'EMAIL_DISABLED'		=> 'Sorry but all email related functions have been disabled.',
	'EMAIL_SENT'			=> 'The email has been sent.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'This message will be sent as plain text, do not include any HTML or BBCode. Please note that the topic information is already included in the message. The return address for this message will be set to your email address.',
	'EMPTY_ADDRESS_EMAIL'	=> 'আপনি প্রাপকের জন্য একটি বৈধ ইমেইল ঠিকানা প্রদান করতে হবে।',
	'EMPTY_MESSAGE_EMAIL'	=> 'ইমেল করার জন্য আপনাকে অবশ্যই একটি বার্তা লিখতে হবে।',
	'EMPTY_MESSAGE_IM'		=> 'পাঠাতে হবে এমন একটি বার্তা অবশ্যই প্রবেশ করতে হবে।',
	'EMPTY_NAME_EMAIL'		=> 'আপনি প্রাপকের প্রকৃত নাম প্রবেশ করতে হবে।',
	'EMPTY_SENDER_EMAIL'	=> 'আপনাকে অবশ্যই একটি বৈধ ইমেল ঠিকানা প্রদান করতে হবে।',
	'EMPTY_SENDER_NAME'		=> 'আপনি একটি নাম প্রদান করতে হবে।',
	'EMPTY_SUBJECT_EMAIL'	=> 'ইমেলের জন্য আপনাকে অবশ্যই একটি বিষয় উল্লেখ করতে হবে।',
	'EQUAL_TO'				=> 'সমান',

	'FIND_USERNAME_EXPLAIN'	=> 'Use this form to search for specific members. You do not need to fill out all fields. To match partial data use * as a wildcard. When entering dates use the format <kbd>YYYY-MM-DD</kbd>, e.g. <samp>2004-02-29</samp>. Use the mark checkboxes to select one or more usernames (several usernames may be accepted depending on the form itself) and click the Select Marked button to return to the previous form.',
	'FLOOD_EMAIL_LIMIT'		=> 'You cannot send another email at this time. Please try again later.',

	'GROUP_LEADER'			=> 'Group leader',

	'HIDE_MEMBER_SEARCH'	=> 'Hide member search',

	'IM_ADD_CONTACT'		=> 'Add Contact',
	'IM_DOWNLOAD_APP'		=> 'Download application',
	'IM_JABBER'				=> 'Please note that users may have selected to not receive unsolicited instant messages.',
	'IM_JABBER_SUBJECT'		=> 'This is an automated message please do not reply! Message from user %1$s at %2$s.',
	'IM_MESSAGE'			=> 'Your message',
	'IM_NAME'				=> 'Your Name',
	'IM_NO_DATA'			=> 'There is no suitable contact information for this user.',
	'IM_NO_JABBER'			=> 'Sorry, direct messaging of Jabber users is not supported on this board. You will need a Jabber client installed on your system to contact the recipient above.',
	'IM_RECIPIENT'			=> 'প্রাপক',
	'IM_SEND'				=> 'বার্তা পাঠান',
	'IM_SEND_MESSAGE'		=> 'বার্তা পাঠান',
	'IM_SENT_JABBER'		=> '%1 $s এর জন্য আপনার বার্তা সফলভাবে পাঠানো হয়েছে।',
	'IM_USER'				=> 'একটি তাত্ক্ষণিক বার্তা পাঠান',

	'LAST_ACTIVE'				=> 'শেষ সক্রিয়',
	'LESS_THAN'					=> 'কম',
	'LIST_USERS'				=> array(
		1	=> '%d user',
		2	=> '%d users',
	),
	'LOGIN_EXPLAIN_TEAM'		=> 'বোর্ডের তালিকা দেখতে বোর্ডে রেজিস্ট্রেশন এবং লগ ইন করা প্রয়োজন। ',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'বোর্ডের সদস্য তালিকাটি অ্যাক্সেস করতে আপনাকে নিবন্ধিত হতে হবে এবং লগ ইন করতে হবে।',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'বোর্ড আপনাকে রেজিস্টার করতে এবং ব্যবহারকারীদের সন্ধান করতে লগ ইন করতে হবে।',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'বোর্ড আপনাকে রেজিস্টার করতে এবং প্রোফাইল দেখতে লগ ইন করতে চায়।',

	'MANAGE_GROUP'			=> 'পরিচালনা গ্রুপ',
	'MORE_THAN'				=> 'অধিক',

	'NO_CONTACT_FORM'		=> 'বোর্ড প্রশাসক যোগাযোগ ফর্ম অক্ষম করা হয়েছে।',
	'NO_CONTACT_PAGE'		=> 'বোর্ড প্রশাসক যোগাযোগের ঠিকানাটি নিষ্ক্রিয় করা হয়েছে।',
	'NO_EMAIL'				=> 'এই ব্যবহারকারীকে ইমেল পাঠানোর অনুমতি নেই।',
	'NO_VIEW_USERS'			=> 'আপনি সদস্য তালিকা বা প্রোফাইল দেখার জন্য অনুমোদিত নয়।',

	'ORDER'					=> 'অর্ডার',
	'OTHER'					=> 'অন্যান্য',

	'POST_IP'				=> 'আইপি / ডোমেন থেকে পোস্ট',

	'REAL_NAME'				=> 'প্রাপকের নাম',
	'RECIPIENT'				=> 'প্রাপক',
	'REMOVE_FOE'			=> 'শত্রু সরান',
	'REMOVE_FRIEND'			=> 'বন্ধু অপসারণ',

	'SELECT_MARKED'			=> 'চিহ্নিত নির্বাচন করুন',
	'SELECT_SORT_METHOD'	=> 'নির্বাচন পদ্ধতি নির্বাচন করুন',
	'SENDER_EMAIL_ADDRESS'	=> 'আপনার ইমেইল ঠিকানা',
	'SENDER_NAME'			=> 'তোমার নাম',
	'SEND_ICQ_MESSAGE'		=> 'আইসিকি বার্তা পাঠান',
	'SEND_IM'				=> 'তাৎক্ষণিক বার্তা আদান প্রদান',
	'SEND_JABBER_MESSAGE'	=> 'জববার বার্তা পাঠান',
	'SEND_MESSAGE'			=> 'বার্তা',
	'SEND_YIM_MESSAGE'		=> 'ইয়েম বার্তা পাঠান',
	'SORT_EMAIL'			=> 'ইমেইল',
	'SORT_LAST_ACTIVE'		=> 'শেষ সক্রিয়',
	'SORT_POST_COUNT'		=> 'পোস্ট গণনা',

	'USERNAME_BEGINS_WITH'	=> 'ব্যবহারকারীর নাম শুরু হয়',
	'USER_ADMIN'			=> 'প্রশাসক ব্যবহারকারী',
	'USER_BAN'				=> 'ব্যানিং',
	'USER_FORUM'			=> 'ব্যবহারকারী পরিসংখ্যান',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'No reminder sent at this time',
		1		=> '%1$d reminder sent<br />» %2$s',
		2		=> '%1$d reminder sent<br />» %2$s',
	),
	'USER_ONLINE'			=> 'অনলাইন',
	'USER_PRESENCE'			=> 'বোর্ড উপস্থিতি',
	'USERS_PER_PAGE'		=> 'প্রতি পৃষ্ঠায় ব্যবহারকারী',

	'VIEWING_PROFILE'		=> 'প্রোফাইল দেখুন -%s',
	'VIEW_FACEBOOK_PROFILE'	=> 'ফেসবুক প্রোফাইল দেখুন',
	'VIEW_SKYPE_PROFILE'	=> 'স্কাইপ প্রোফাইল দেখুন',
	'VIEW_TWITTER_PROFILE'	=> 'টুইটার প্রোফাইল দেখুন',
	'VIEW_YOUTUBE_CHANNEL'	=> 'ইউটিউব চ্যানেল দেখুন',
	'VIEW_GOOGLEPLUS_PROFILE' => 'Google+ প্রোফাইল দেখুন'
));
