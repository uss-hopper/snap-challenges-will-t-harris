<?php
namespace Wharris21\Snap;

/**
 * Class definition for a Tweet
 */
class Tweet {
	/**
	 * method to return all tweets on a given date
	 *
	 * @param \PDO $pdo PDO connection object
	 * @param \DateTime $tweetDate date to get tweets for
	 * @return \SplFixedArray SplFixedArray of tweets found
	 */
	public function getTweetsByTweetDate(\PDO $pdo, \DateTime $tweetDate) : \SplFixedArray {
		// check to make sure date is valid
		try {
			$tweetDate = self::ValidateDate($tweetDate);
		} catch(\InvalidArgumentException | \RangeException $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}

		// create query template
		$query = "SELECT tweetId, tweetProfileId, tweetContent, tweetDate FROM tweet WHERE tweetDate = :tweetDate";
		$statement = $pdo->prepare($query);

		// bind the tweet id to the placeholder in the query template
		$parameters = ["tweetId" => $tweetId->getBytes()];
		$statement->execute($parameters);

		// get the tweet from MySQL
		try {
			$tweet = null;
			$statement->setFetchMode(\PDO::FETCH_ASSOC);
			$row = $statement->fetch();
			if($row) {
				$tweet = new Tweet($row["tweetId"], $row["tweetProfileId"], $row["tweetContent"], $row["tweetDate"]);
			}
		} catch(\Exception $exception) {
			// if the row couldn't be converted, throw it
			throw(new \PDOException($exception->getMessage(), 0, $exception));
		}
		return($tweet);
	}
}
