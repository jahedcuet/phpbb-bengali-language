<?php

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}


$lang = array_merge($lang, array(
	'ALL_AVAILABLE'			=> 'সব উপলব্ধ',
	'ALL_RESULTS'			=> 'সমস্ত ফলাফল',

	'DISPLAY_RESULTS'		=> 'ফলাফল প্রদর্শন',

	'FOUND_SEARCH_MATCHES'		=> array(
		1	=> 'অনুসন্ধান পাওয়া গেছে %d মিলেছে',
		2	=> 'অনুসন্ধান পাওয়া গেছে %d মিলেছে',
	),
	'FOUND_MORE_SEARCH_MATCHES'		=> array(
		1	=> 'অনুসন্ধান %d এর বেশি মেল পাওয়া গেছে',
		2	=> '%d টির বেশি অনুসন্ধান পাওয়া গেছে'
	),

	'GLOBAL'				=> 'গ্লোবাল ঘোষণা',

	'IGNORED_TERMS'			=> 'অগ্রাহ্য',
	'IGNORED_TERMS_EXPLAIN'	=> 'আপনার অনুসন্ধান ক্যোয়ারীতে নিম্নলিখিত শব্দগুলি উপেক্ষা করা হয়েছে কারণ তারা খুব সাধারণ শব্দ: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'যাও',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'আপনার নিবন্ধগুলি নিবন্ধন করতে এবং আপনার নিজস্ব পোস্টগুলি দেখতে লগ ইন করতে হবে।',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'বোর্ড আপনাকে আপনার অপঠিত পোস্টগুলি দেখতে নিবন্ধন এবং লগ ইন করতে হবে।',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'আপনার শেষ  যাত্রা থেকে নতুন পোস্টগুলি দেখার জন্য রেজিস্টার করতে এবং লগ ইন করতে হবে।.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
		1	=> 'আপনি অনুসন্ধান করতে অনেকগুলি শব্দ লিখেছেন। দয়া করে %1$d শব্দের চেয়ে বড় লিখা যাবে না।',
		2	=> 'আপনি অনুসন্ধান করতে অনেকগুলি শব্দ লিখেছেন। দয়া করে %1$d শব্দের চেয়ে বেশি লিখা যাবে না।',
	),

	'NO_KEYWORDS'			=> 'অনুসন্ধান করতে অন্তত একটি শব্দ লিখুন। প্রতিটি শব্দ অন্তত %s এর মধ্যে থাকা আবশ্যক এবং ওয়াইড্ডকার্ড ব্যতীত %s এর বেশি লিখা যাবে।',
	'NO_RECENT_SEARCHES'		=> 'সম্প্রতি কোন অনুসন্ধান করা হয়নি।',
	'NO_SEARCH'				=> 'দুঃখিত কিন্তু আপনি অনুসন্ধান সিস্টেম ব্যবহার করার অনুমতি নেই।',
	'NO_SEARCH_RESULTS'		=> 'মিল খুঁজে পাওয়া যায়নি',
	'NO_SEARCH_LOAD'		=> 'দুঃখিত কিন্তু আপনি এই মুহুর্তে অনুসন্ধান ব্যবহার করতে পারবেন না। সার্ভার উচ্চ লোড আছে। অনুগ্রহ করে একটু পরে আবার চেষ্টা করুন।',
	'NO_SEARCH_TIME'		=> array(
		1	=> 'দুঃখিত কিন্তু আপনি এই মুহুর্তে অনুসন্ধান ব্যবহার করতে পারবেন না। দয়া করে %d সেকেন্ডে আবার চেষ্টা করুন।',
		2	=> 'দুঃখিত কিন্তু আপনি এই মুহুর্তে অনুসন্ধান ব্যবহার করতে পারবেন না। দয়া করে% d সেকেন্ডের মধ্যে আবার চেষ্টা করুন।',
	),
	'NO_SEARCH_UNREADS'		=> 'দুঃখিত কিন্তু অপঠিত পোস্টগুলির অনুসন্ধান এই বোর্ডে অক্ষম করা হয়েছে।',
	'WORD_IN_NO_POST'		=> 'কোনও পোস্ট খুঁজে পাওয়া যায়নি কারণ <strong> %s </strong> শব্দটি কোনো পোস্টে নেই।',
	'WORDS_IN_NO_POST'		=> 'কোনও পোস্ট খুঁজে পাওয়া যায়নি কারণ <strong> %s </strong> কোন পোস্টে অন্তর্ভুক্ত নেই।',

	'POST_CHARACTERS'		=> 'পোস্টের অক্ষর',
	'PHRASE_SEARCH_DISABLED'	=> 'সঠিক ফ্রেজ দ্বারা অনুসন্ধান এই বোর্ডে সমর্থিত হয় না।',

	'RECENT_SEARCHES'		=> 'সাম্প্রতিক অনুসন্ধানগুলি',
	'RESULT_DAYS'			=> 'পূর্ববর্তী ফলাফল সীমিত করুন',
	'RESULT_SORT'			=> 'সাজান ফলাফল by',
	'RETURN_FIRST'			=> 'প্রথম ফিরুন',
	'GO_TO_SEARCH_ADV'		=> 'উন্নত অনুসন্ধান',

	'SEARCHED_FOR'				=> 'অনুসন্ধান শব্দ ব্যবহৃত',
	'SEARCHED_TOPIC'			=> 'অনুসন্ধানের টপিক',
	'SEARCHED_QUERY'			=> 'অনুসন্ধান ক্যোয়ারী',
	'SEARCH_ALL_TERMS'			=> 'সব শর্তাবলী জন্য অনুসন্ধান করুন, লগইন করে করার জন্য।',
	'SEARCH_ANY_TERMS'			=> 'যে কোনো শর্ত অনুসন্ধান করুন।',
	'SEARCH_AUTHOR'				=> 'লেখক জন্য সন্ধান করুন',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Use * as a wildcard for partial matches.',
	'SEARCH_FIRST_POST'			=> 'টপিক এর জন্য প্রথম পোস্ট।',
	'SEARCH_FORUMS'				=> 'ফোরাম অনুসন্ধান করুন',
	'SEARCH_FORUMS_EXPLAIN'		=> 'ফোরাম বা ফোরাম গুলো নির্বাচিত করুন। আপনি নীচের "অনুসন্ধান subforums" অক্ষম না হলে subforums স্বয়ংক্রিয়ভাবে অনুসন্ধান করা হয়।',
	'SEARCH_IN_RESULTS'			=> 'এই ফলাফল অনুসন্ধান করুন',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Place <strong>+</strong> in front of a word which must be found and <strong>-</strong> in front of a word which must not be found. Put a list of words separated by <strong>|</strong> into brackets if only one of the words must be found. Use * as a wildcard for partial matches.',
	'SEARCH_MSG_ONLY'			=> 'শুধুমাত্র বার্তা পাঠ',
	'SEARCH_OPTIONS'			=> 'অনুসন্ধান বিকল্প',
	'SEARCH_QUERY'				=> 'অনুসন্ধান',
	'SEARCH_SUBFORUMS'			=> 'উপ ফোরাম এ অনুসন্ধান করুন',
	'SEARCH_TITLE_MSG'			=> 'পোস্ট বিষয় এবং বার্তা পাঠ্য',
	'SEARCH_TITLE_ONLY'			=> 'শুধুমাত্র টপিক শিরোনাম',
	'SEARCH_WITHIN'				=> 'ভিতরে অনুসন্ধান',
	'SORT_ASCENDING'			=> 'ঊর্ধ্বগামী',
	'SORT_AUTHOR'				=> 'লেখক',
	'SORT_DESCENDING'			=> 'নিম্নক্রম',
	'SORT_FORUM'				=> 'ফোরাম',
	'SORT_POST_SUBJECT'			=> 'পোস্ট বিষয়',
	'SORT_TIME'					=> 'পোস্ট সময়',
	'SPHINX_SEARCH_FAILED'		=> 'অনুসন্ধান ব্যর্থ হয়েছে: %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> 'দুঃখিত, অনুসন্ধান করা যাবে না। এই ব্যর্থতা সম্পর্কে আরও তথ্য error.log এ আছে।'

	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> 'লেখকের নাম এর জন্য অন্তত স অক্ষর দিতে হবে।',
		2	=> 'লেখকের নাম এর জন্য অন্তত স অক্ষর দিতে হবে।',
	),
));
