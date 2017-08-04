<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) 2010-2013 Moxiecode Systems AB
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
	'PLUPLOAD_ADD_FILES'		    => 'ফাইল যোগ করুন',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'আপলোডের সারিতে ফাইল যুক্ত করুন এবং শুরু করুন বোতামটি ক্লিক করুন। ',
	'PLUPLOAD_ALREADY_QUEUED'	    => '%s ইতিমধ্যেই সারিতে উপস্থিত।',
	'PLUPLOAD_CLOSE'			    => 'বন্ধ',
	'PLUPLOAD_DRAG'				    => 'এখানে ফাইল টেনে আনুন।',
	'PLUPLOAD_DUPLICATE_ERROR'	    => 'ডুপ্লিকেট ফাইল ত্রুটি।',
	'PLUPLOAD_DRAG_TEXTAREA'	    => 'আপনি বার্তা বাক্সে টেনে এনে ড্রপ করে ফাইল সংযুক্ত করতে পারেন।',
	'PLUPLOAD_ERR_INPUT'		    => 'ইনপুট স্ট্রীম খুলতে ব্যর্থ।',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'আপলোড করা ফাইল সরাতে ব্যর্থ। ',
	'PLUPLOAD_ERR_OUTPUT'		    => 'আউটপুট স্ট্রিম খুলতে ব্যর্থ।',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'খুব বড় ফাইল:',
	'PLUPLOAD_ERR_FILE_COUNT'	    => 'ফাইল গণনা ত্রুটি।',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> 'অবৈধ ফাইল এক্সটেনশন:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> 'রানটাইম উপলব্ধ মেমরি পরিমাণ স্বল্প।',
	'PLUPLOAD_ERR_UPLOAD_URL'	    => 'আপলোড URL টি ভুল হতে পারে বা কোন অস্তিত্ব নেই।',
	'PLUPLOAD_EXTENSION_ERROR'	    => 'ফাইল এক্সটেনশন ত্রুটি।',
	'PLUPLOAD_FILE'				    => 'ফাইল:% s',
	'PLUPLOAD_FILE_DETAILS'		    => 'ফাইল:% s, আকার:% d, সর্বোচ্চ ফাইলের আকার:% d',
	'PLUPLOAD_FILENAME'			    => 'ফাইলের ',
	'PLUPLOAD_FILES_QUEUED'		    => '% D ফাইলগুলি সারি',
	'PLUPLOAD_GENERIC_ERROR'	    => 'জেনেরিক ত্রুটি।',
	'PLUPLOAD_HTTP_ERROR'		    => 'HTTP ত্রুটি।',
	'PLUPLOAD_IMAGE_FORMAT'		    => 'ইমেজ ফরম্যাটটি ভুল বা সমর্থিত নয়।',
	'PLUPLOAD_INIT_ERROR'		    => ' প্রারম্ভিক  ত্রুটি ।',
	'PLUPLOAD_IO_ERROR'			    => 'আইও ত্রুটি।',
	'PLUPLOAD_NOT_APPLICABLE'	    => 'n  / a ',
	'PLUPLOAD_SECURITY_ERROR'	    => 'নিরাপত্তা ত্রুটি।',
	'PLUPLOAD_SELECT_FILES'		    => 'ফাইল নির্বাচন করুন',
	'PLUPLOAD_SIZE'				    => 'সাইজ',
	'PLUPLOAD_SIZE_ERROR'		    => 'ফাইলের আকার ত্রুটি.',
	'PLUPLOAD_STATUS'			    => 'স্ট্যাটাস',
	'PLUPLOAD_START_UPLOAD'		    => 'আপলোড শুরু করুন',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'আপলোডিং সারিতে শুরু করুন',
	'PLUPLOAD_STOP_UPLOAD'		    => 'আপলোড থামান',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'বর্তমান আপলোড বন্ধ',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			    => 'আপলোড করা %d/%d ফাইল',
));
