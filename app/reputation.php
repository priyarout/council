<?php

namespace App;

class Reputation
{
	const THREAD_WAS_PUBLISHED = 10;
	const REPLY_POSTED = 10;
	const BEST_REPLY_AWARDED = 10;

	public static function award($user, $points)
	{
		$user->increment('reputation', $points);
	}

}