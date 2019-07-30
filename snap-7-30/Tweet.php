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
	 * @return \SplFixedArray $tweets of tweets found
	 * @throws \InvalidArgumentException if invalid data type passed into ValidateDate trait
	 * @throws \RangeException if data passed into ValidateDate trait exceeds valid range
	 * @throws \PDOException if invalid PDO connection object is passed into loop
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

		// bind the tweet date to the placeholder in the query template
		$parameters = ["tweetDate" => $tweetDate];
		$statement->execute($parameters);

		$tweets = new \SplFixedArray($statement->rowCount());
		$statement->setFetchMode(\PDO::FETCH_ASSOC);
		while($row = $statement->fetch()) {
			try {
				$tweet = new Tweet($row["tweetId"], $row["tweetProfileId"], $row["tweetContent"], $row["tweetDate"]);
				$tweets[$tweets->key()] = $tweet;
				$tweets->next();
			} catch(\Exception $exception) {
				// if the row couldn't be converted, throw it
				throw(new \PDOException($exception->getMessage(), 0, $exception));
			}
		}
		return($tweets);
	}
}

// TODO SOLUTION FROM CLASS
// Get all tweets posted on the calendar day of a given DateTime
public static function getTweetByTweetDate(\PDO $pdo, DateTime $tweetDate) : \SplFixedArray {
	$startDateString = $tweetDate->format('Y-m-d') . '00:00:00';
	$startDate = new \DateTime($startDateString);
	$endDate = new \DateTime($startDateString);
	$endDate->add(new \DateInterval('P1D'));
}
