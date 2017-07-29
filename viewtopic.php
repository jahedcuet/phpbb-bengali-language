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
    'APPROVE'								=> 'অনুমোদন',
    'ATTACHMENT'						=> 'সংযুক্তি',
    'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> ' বৈশিষ্ট্য সংযুক্ত করা সম্ভব হচ্ছে না।',

    'BOOKMARK_ADDED'		=> 'টপিক বুকমার্কে এ যুক্ত হয়েছে।',
    'BOOKMARK_ERR'			=> 'বুকমার্ক করা যাচ্ছে না।  অনুগ্রহপূর্বক আবার চেষ্টা করুন।',
    'BOOKMARK_REMOVED'		=> 'টপিক বুকমার্ক থেকে মুছে ফেলা হয়েছে।',
    'BOOKMARK_TOPIC'		=> 'বুকমার্ক টপিক',
    'BOOKMARK_TOPIC_REMOVE'	=> 'বুকমার্ক থেকে সরান',
    'BUMPED_BY'				=> 'Last bumped by %1$s on %2$s.',
    'BUMP_TOPIC'			=> 'Bump topic',

    'CODE'					=> 'কোড',

    'DELETE_TOPIC'			=> 'টপিক মুছুন',
    'DELETED_INFORMATION'	=> '%2$ থেকে %1$s এ মুছে হয়েছে',
    'DISAPPROVE'					=> 'অগ্রাহ্য',
    'DOWNLOAD_NOTICE'		=> 'এই পোস্টে সংযুক্ত ফাইল দেখার আপনার অনুমতি নেই।',

    'EDITED_TIMES_TOTAL'	=> array(
        1	=> 'Last edited by %2$s on %3$s, edited %1$d time in total.',
        2	=> 'Last edited by %2$s on %3$s, edited %1$d times in total.',
    ),
    'EMAIL_TOPIC'			=> 'টপিক ইমেইল করুন।',
    'ERROR_NO_ATTACHMENT'	=> 'নির্বাচিত সংযুক্তি আর বিদ্যমান নেই।',

    'FILE_NOT_FOUND_404'	=> '<strong>%s</strong> ফাইলটি বিদ্যমান নেই।',
    'FORK_TOPIC'			=> 'কপি টপিক',
    'FULL_EDITOR'			=> 'ফুল এডিটর &amp; দেখুন',

    'LINKAGE_FORBIDDEN'		=> 'সাইটে দেখতে / ডাউনলোড করতে, বা লিঙ্ক এ যেতে  অনুমোদিত আপনার অনমুতি নেই।',
    'LOGIN_NOTIFY_TOPIC'	=> 'আপনি টপিকটি সম্পর্কে অবহিত করা হয়েছে, দেখতে লগইন করুন।',
    'LOGIN_VIEWTOPIC'		=> নিবন্ধিত দেখতে,ফোরাম এ নিবন্ধিত বা প্রবেশ (লগ ইন)  করতে হবে। ',

    'MAKE_ANNOUNCE'				=> '"ঘোষণা" এ পরিবর্তন করুন',
    'MAKE_GLOBAL'				=> '"গ্লোবাল" এ পরিবর্তন করুন',
    'MAKE_NORMAL'				=> '"স্ট্যান্ডার্ড বিষয়" এ পরিবর্তন করুন',
    'MAKE_STICKY'				=> '"স্টিকি" এ পরিবর্তন করুন',
    'MAX_OPTIONS_SELECT'		=> array(
        1	=> ' <strong>%d</strong>অপশনটি নির্বাচন করতে পারেন',
        2	=> 'অপশন পর্যন্ত নির্বাচন করতে পারেন <strong>%d</strong> ',
    ),
    'MISSING_INLINE_ATTACHMENT'	=> 'সংযুক্তি <strong>%s</strong> আর উপলব্ধ নেই',
    'MOVE_TOPIC'				=> 'টপিক সরান',

    'NO_ATTACHMENT_SELECTED'=> ' ডাউনলোড বা দেখার জন্য  সংযুক্তি নির্বাচন করেননি।',
    'NO_NEWER_TOPICS'		=> 'এই ফোরামে কোন নতুন বিষয় নেই।',
    'NO_OLDER_TOPICS'		=> 'এই ফোরামে পুরানো কোনো টপিক নেই।',
    'NO_UNREAD_POSTS'		=> 'এই টপিক এ কোন নতুন অপঠিত পোস্ট নেই।',
    'NO_VOTE_OPTION'		=> 'ভোট দেওয়ার সময় আপনাকে অবশ্যই একটি বিকল্প নির্দিষ্ট করতে হবে।',
    'NO_VOTES'				=> 'ভোট নেই।',

    'POLL_ENDED_AT'			=> '%s ভোট শেষ',
    'POLL_RUN_TILL'			=> '%s ভোটগ্রহণ চলমান ',
    'POLL_VOTED_OPTION'		=> 'এখানে আপনার ভোট আছে।',
    'POST_DELETED_RESTORE'	=> 'পোস্ট মুছে ফেলা হয়েছে। পুনরুদ্ধার করা যাবে।',
    'PRINT_TOPIC'			=> 'মুদ্রণ দৃশ্য',

    'QUICK_MOD'				=> 'দ্রুত-মোড সরঞ্জাম',
    'QUICKREPLY'			=> 'দ্রুত জবাব',
    'QUOTE'					=> 'উদ্ধৃতি',

    'REPLY_TO_TOPIC'		=> 'টপিকের জবাব',
    'RESTORE'				=> 'পুনঃস্থাপন',
    'RESTORE_TOPIC'			=> 'টপিক পুনরুদ্ধার',
    'RETURN_POST'			=> '%s পোস্টে থেকে  %s এ ফিরে যান',

    'SUBMIT_VOTE'			=> 'ভোট জমা দিন',

    'TOPIC_TOOLS'			=> 'টপিক এর সরঞ্জাম',
    'TOTAL_VOTES'			=> 'Total votes',

    'UNLOCK_TOPIC'			=> 'টপিক আনলক',

    'VIEW_INFO'				=> 'পোস্ট এর বিবরণ',
    'VIEW_NEXT_TOPIC'		=> 'পরবর্তী বিষয়',
    'VIEW_PREVIOUS_TOPIC'	=> 'পূর্ববর্তী বিষয়',
    'VIEW_RESULTS'			=> 'ফলাফল দেখুন',
    'VIEW_TOPIC_POSTS'		=> array(
        1	=> '%d পোস্ট।',
        2	=> '%d পোস্টগুলি।',
    ),
    'VIEW_UNREAD_POST'		=> 'প্রথম অপঠিত পোস্ট।',
    'VOTE_SUBMITTED'		=> 'ভোট দেওয়া হয়েছে।',
    'VOTE_CONVERTED'		=> 'ভোট পরিবর্তন , পরিবর্তন ভোট গুলি জন্য সমর্থিত নয়।',

));
