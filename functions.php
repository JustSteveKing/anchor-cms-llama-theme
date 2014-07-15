<?php

/*
	Custom theme functions

	Note: we recommend you prefix all your functions to avoid any naming
	collisions or wrap your functions with if function_exists braces.
*/
function numeral($number) {
	$test = abs($number) % 10;
	$ext = ((abs($number) % 100 < 21 and abs($number) % 100 > 4) ? 'th' : (($test < 4) ? ($test < 3) ? ($test < 2) ? ($test < 1) ? 'th' : 'st' : 'nd' : 'rd' : 'th'));
	return $number . $ext;
}

function count_words($str) {
	return count(preg_split('/\s+/', strip_tags($str), null, PREG_SPLIT_NO_EMPTY));
}

function pluralise($amount, $str, $alt = '') {
	return intval($amount) === 1 ? $str : $str . ($alt !== '' ? $alt : 's');
}

function relative_time($date) {
	if(is_numeric($date)) $date = '@' . $date;

	$user_timezone = new DateTimeZone(Config::app('timezone'));
	$date = new DateTime($date, $user_timezone);

	// get current date in user timezone
	$now = new DateTime('now', $user_timezone);

	$elapsed = $now->format('U') - $date->format('U');

	if($elapsed <= 1) {
		return 'Just now';
	}

	$times = array(
		31104000 => 'year',
		2592000 => 'month',
		604800 => 'week',
		86400 => 'day',
		3600 => 'hour',
		60 => 'minute',
		1 => 'second'
	);

	foreach($times as $seconds => $title) {
		$rounded = $elapsed / $seconds;

		if($rounded > 1) {
			$rounded = round($rounded);
			return $rounded . ' ' . pluralise($rounded, $title) . ' ago';
		}
	}
}

function twitter_account() {
	return site_meta('twitter', 'idiot');
}

function twitter_url() {
	return 'https://twitter.com/' . twitter_account();
}

function total_articles() {
	return Post::where(Base::table('posts.status'), '=', 'published')->count();
}
function google_account() {
	return site_meta('google-plus-profile');
}

/*
* CUSTOM FUNCTIONS
*/

function dg_est_reading_time() {
	$mycontent = article_html();
	$word = str_word_count(strip_tags($mycontent));
	$m = floor($word / 175);
	$s = floor($word % 175 / (175 / 60));
	
	if($m >= 1) {
		
	return $est = $m . ' min' . ($m == 1 ? '' : 's');
	}
	
	elseif($s <= 59) {
		
	return $est = $s . ' second' . ($s == 1 ? '' : 's');
	}
}

function rwar_latest_posts($limit = 3) {
	// only run on the first call
	if( ! Registry::has('rwar_latest_posts')) {
		// capture original article if one is set
		if($article = Registry::get('article')) {
			Registry::set('original_article', $article);
		}
	}

	if( ! $posts = Registry::get('rwar_latest_posts')) {
		$posts = Post::where('status', '=', 'published')->sort('created', 'desc')->take($limit)->get();

		Registry::set('rwar_latest_posts', $posts = new Items($posts));
	}

	if($result = $posts->valid()) {
		// register single post
		Registry::set('article', $posts->current());

		// move to next
		$posts->next();
	}
	else {
		// back to the start
		$posts->rewind();

		// reset original article
		Registry::set('article', Registry::get('original_article'));

		// remove items
		Registry::set('rwar_latest_posts', false);
	}

	return $result;
}

