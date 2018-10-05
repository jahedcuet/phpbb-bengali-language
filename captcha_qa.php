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
	'CAPTCHA_QA'				=> 'Q&amp;A',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'এই প্রশ্ন স্পাম বটস দ্বারা স্বয়ংক্রিয় ফর্ম জমা প্রতিরোধ করার একটি উপায়।',
	'CONFIRM_QUESTION_WRONG'	=> 'আপনি প্রশ্নের একটি ভুল উত্তর প্রদান করেছেন।',
	'CONFIRM_QUESTION_MISSING'	=> 'ক্যাপচার জন্য প্রশ্ন পুনরুদ্ধার করা যায়নি। দয়া করে একজন বোর্ড প্রশাসকের সাথে যোগাযোগ করুন।',
	'QUESTION_ANSWERS'			=> 'উত্তরগুলো',
	'ANSWERS_EXPLAIN'			=> 'দয়া করে প্রতি লাইনে একটি বৈধ উত্তর লিখুন।',
	'CONFIRM_QUESTION'			=> 'প্রশ্ন',
	'ANSWER'					=> 'উত্তর',
	'EDIT_QUESTION'				=> 'Edit Question',
	'QUESTIONS'					=> 'Questions',
	'QUESTIONS_EXPLAIN'			=> 'For every form submission where you have enabled the Q&amp;A plugin, users will be asked one of the questions specified here. To use this plugin at least one question must be set in the default language. These questions should be easy for your target audience to answer but beyond the ability of a bot capable of running a Google™ search. Using a large and regularly changed set of questions will yield the best results. Enable the strict setting if your question relies on mixed case, punctuation or whitespace.',
	'QUESTION_DELETED'			=> 'Question deleted',
	'QUESTION_LANG'				=> 'Language',
	'QUESTION_LANG_EXPLAIN'		=> 'The language this question and its answers are written in.',
	'QUESTION_STRICT'			=> 'Strict check',
	'QUESTION_STRICT_EXPLAIN'	=> 'Enable to enforce mixed case, punctuation and whitespace.',
	'QUESTION_TEXT'				=> 'Question',
	'QUESTION_TEXT_EXPLAIN'		=> 'The question presented to the user.',
	'QA_ERROR_MSG'				=> 'Please fill in all fields and enter at least one answer.',
	'QA_LAST_QUESTION'			=> 'You cannot delete all questions while the plugin is active.',
));
