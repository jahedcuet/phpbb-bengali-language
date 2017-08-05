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
	'ALREADY_DEFAULT_GROUP'		=> 'নির্বাচিত গ্রুপটি ইতিমধ্যে আপনার ডিফল্ট গ্রুপ।',
	'ALREADY_IN_GROUP'			=> 'আপনি ইতিমধ্যেই নির্বাচিত গ্রুপের একজন সদস্য।',
	'ALREADY_IN_GROUP_PENDING'	=> 'আপনি ইতিমধ্যে নির্বাচিত গোষ্ঠীতে যোগদানের অনুরোধ করেছেন।',

	'CANNOT_JOIN_GROUP'			=> 'আপনি এই গ্রুপ যোগ দিতে পারবেন না। আপনি শুধুমাত্র খোলা এবং মুক্তভাবে খোলা গ্রুপ যোগ দিতে পারবেন। ',
	'CANNOT_RESIGN_GROUP'		=> 'আপনি এই গ্রুপ থেকে পদত্যাগ করতে পারবেন না। আপনি শুধুমাত্র খোলা এবং মুক্তভাবে খোলা গ্রুপ থেকে পদত্যাগ করতে পারবেন। ',
	'CHANGED_DEFAULT_GROUP'		=> 'ডিফল্ট গ্রুপ সফলভাবে পরিবর্তন।',

	'GROUP_AVATAR'						=> 'গ্রুপ অবতার',
	'GROUP_CHANGE_DEFAULT'				=> 'আপনি কি আপনার "% s" গ্রুপে আপনার ডিফল্ট সদস্যতা পরিবর্তন করতে চান?',
	'GROUP_CLOSED'						=> 'বন্ধ',
	'GROUP_DESC'						=> 'গ্রুপ বিবরণ',
	'GROUP_HIDDEN'						=> 'গোপন',
	'GROUP_INFORMATION'					=> 'ব্যবহারকারী গ্রুপ তথ্য',
	'GROUP_IS_CLOSED'					=> 'এটি একটি বন্ধ গ্রুপ, নতুন সদস্য শুধুমাত্র একটি গ্রুপ নেতা আমন্ত্রণে যোগ দিতে পারেন।',
	'GROUP_IS_FREE'						=> 'এটি একটি স্বাধীনভাবে খোলা গ্রুপ, নতুন সদস্যদের স্বাগত।',
	'GROUP_IS_HIDDEN'					=> 'এটি একটি লুকানো গোষ্ঠী, এই দলের সদস্যরা শুধুমাত্র তার সদস্যতা দেখতে পারে।',
	'GROUP_IS_OPEN'						=> 'এটি একটি খোলা গ্রুপ, সদস্য যোগদান করতে আবেদন করতে পারে।',
	'GROUP_IS_SPECIAL'					=> 'এটি একটি বিশেষ গ্রুপ, বিশেষ দলগুলি বোর্ড প্রশাসক দ্বারা পরিচালিত হয়।',
	'GROUP_JOIN'						=> 'দলে যোগ দাও',
	'GROUP_JOIN_CONFIRM'				=> 'আপনি কি নির্বাচিত গ্রুপে যোগ দিতে চান?',
	'GROUP_JOIN_PENDING'				=> 'গ্রুপ যোগ দিতে অনুরোধ',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'আপনি কি নির্বাচিত গ্রুপে যোগ দেওয়ার জন্য অনুরোধ করতে চান?',
	'GROUP_JOINED'						=> 'নির্বাচিত গ্রুপে সফলভাবে যোগদান করুন।',
	'GROUP_JOINED_PENDING'				=> 'সফলভাবে গ্রুপ সদস্যপদ অনুরোধ আপনার সদস্যপদ অনুমোদন করার জন্য একটি গ্রুপ নেতা অপেক্ষা করুন। ',
	'GROUP_LIST'						=> 'ব্যবহারকারীদের পরিচালনা করুন',
	'GROUP_MEMBERS'						=> 'দলের সদস্যগণ',
	'GROUP_NAME'						=> 'দলের নাম',
	'GROUP_OPEN'						=> 'ওপেন',
	'GROUP_RANK'						=> 'গ্রুপ র্যাঙ্ক',
	'GROUP_RESIGN_MEMBERSHIP'			=> 'পদত্যাগ দল সদস্যপদ',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'আপনি কি নিশ্চিত যে আপনি নির্বাচিত সদস্য থেকে আপনার সদস্যতা পদত্যাগ করতে চান?',
	'GROUP_RESIGN_PENDING'				=> 'একটি মুলতুবি থাকা সদস্য সদস্যপদ পুনরায় ইস্যু',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'আপনি কি নির্বাচিত গ্রুপ থেকে আপনার মুলতুবি থাকা সদস্যের পদত্যাগ করতে চাচ্ছেন?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'আপনি নির্বাচিত গ্রুপ থেকে সফলভাবে সরিয়েছেন।',
	'GROUP_RESIGNED_PENDING'			=> 'নির্বাচিত সদস্য থেকে আপনার মুলতুবি থাকা সদস্যপদ সফলভাবে মুছে ফেলা হয়েছে।',
	'GROUP_TYPE'						=> 'গ্রুপ টাইপ',
	'GROUP_UNDISCLOSED'					=> 'লুকানো গ্রুপ',
	'FORUM_UNDISCLOSED'					=> 'গোপন ফোরাম (গুলি) নিয়ন্ত্রণ করা',

	'LOGIN_EXPLAIN_GROUP'	        => 'গ্রুপের বিবরণ দেখতে লগইন করতে হবে।',

	'NO_LEADERS'					=> 'আপনি কোনও গ্রুপের নেতা নন।',
	'NOT_LEADER_OF_GROUP'			=> 'নির্বাচিত অভিযানটি গ্রহণ করা যাবে না কারণ আপনি নির্বাচিত গ্রুপের নেতা নন।',
	'NOT_MEMBER_OF_GROUP'			=> 'আপনি নির্বাচিত গ্রুপের সদস্য না হওয়ায় অনুরোধ করা অপারেশন নেওয়া যাবে না বা আপনার সদস্যপদ এখনো অনুমোদন করা হয়নি।',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'আপনি আপনার ডিফল্ট গ্রুপ থেকে পদত্যাগ করতে পারবেন না।',

	'PRIMARY_GROUP'		        => 'প্রাথমিক গ্রুপ',

	'REMOVE_SELECTED'		    => 'নির্বাচিত অংশের অপসারণ',

	'USER_GROUP_CHANGE'			=> '%1 $s গ্রুপ থেকে "% 2 $ s" থেকে',
	'USER_GROUP_DEMOTE'			=> 'ডেমোটর লিডারশিপ',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'আপনি কি নির্বাচিত গ্রুপের গ্রুপ নেতা হিসাবে পদত্যাগ করতে চান?',
	'USER_GROUP_DEMOTED'		=> 'আপনার নেতৃত্বকে সফলভাবে পদদলিত।',
));
