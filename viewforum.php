<?php


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

$lang = array_merge($lang, array(
	'ACTIVE_TOPICS'			=> 'সক্রিয় টপিক',
	'ANNOUNCEMENTS'			=> 'ঘোষণা',

	'FORUM_PERMISSIONS'		=> 'ফোরাম অনুমতি',

	'ICON_ANNOUNCEMENT'		=> 'ঘোষণা',
	'ICON_STICKY'			=> 'Sticky',

	'LOGIN_NOTIFY_FORUM'	=> 'এই ফোরাম সম্পর্কে অবহিত করা হয়েছে, এটি দেখতে লগইন করুন।',

	'MARK_TOPICS_READ'		=> 'বিষয়গুলি পড়ুন',

	'NEW_POSTS_HOT'			=> 'নতুন পোস্ট [ জনপ্রিয় ]',	// Not used anymore
	'NEW_POSTS_LOCKED'		=> 'নতুন পোস্ট [ লক করা ]',	// Not used anymore
	'NO_NEW_POSTS_HOT'		=> 'নতুন পোস্ট নেই [ জনপ্রিয় ]',	// Not used anymore
	'NO_NEW_POSTS_LOCKED'	=> 'নতুন পোস্ট নেই [ লক করা ]',	// Not used anymore
	'NO_READ_ACCESS'		=> 'এই ফোরামে এর বিষয় পড়তে অনুমতি নেই।',
	'NO_UNREAD_POSTS_HOT'		=> 'অপঠিত পোস্ট নেই [ জনপ্রিয় ]',
	'NO_UNREAD_POSTS_LOCKED'	=> 'অপঠিত পোস্ট নেই [ লক করা ]',

	'POST_FORUM_LOCKED'		=> 'ফোরাম লক করা',

	'TOPICS_MARKED'			=> 'এই ফোরামে জন্য বিষয় এখন পঠিত হিসাবে চিহ্নিত করা হয়েছে।',

	'UNREAD_POSTS_HOT'		=> 'অপঠিত পোস্ট [ জনপ্রিয় ]',
	'UNREAD_POSTS_LOCKED'	=> 'অপঠিত পোস্ট [ লক করা ]',

	'VIEW_FORUM'			=> 'ফোরাম দেখুন',
	'VIEW_FORUM_TOPICS'		=> array(
		1	=> '%d টপিক',
		2	=> '%d টপিকগুলো',
	),
));
