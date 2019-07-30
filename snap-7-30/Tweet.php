<?php

/**
 * this method gets all tweets from a given date
 *
 * @param DateTime $tweetDate
 * @return SplFixedArray
 **/
public function getTweetsByTweetDate(\DateTime $tweetDate) : \SplFixedArray {
	// check to make sure date is valid
	try {
		$tweetDate = self::ValidateDate($tweetDate);
	} catch(\InvalidArgumentException | \RangeException $exception) {
		$exceptionType = get_class($exception);
		throw(new $exceptionType($exception->getMessage(), 0, $exception));
	}

	// create query template
}