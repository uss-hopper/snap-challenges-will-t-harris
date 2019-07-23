<?php
namespace Wharris21\Snap;
/**
 * Class definition for User class
 **/
class User {
	/**
	 * id value for this instance of user; this is the primary key
	 *
	 * @var Uuid | string $userId
	 **/
	private $userId;
	/**
	 * username value for this instance of user
	 *
	 * @var string $userName
	 **/
	private $userName;

	/**
	 * constructor function for User Class
	 **/
	public function __construct($newUserId, $newUserName) {
		try {
			$this->userId = $newUserId;
			$this->userName = $newUserName;
		} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception ) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}
	}

	/**
	 * getter/accessor method for user id
	 *
	 * @return Uuid | string value for user id
	 **/
	public function getUserId() : string {
		return $this->userId;
	}

	/**
	 * setter/mutator method for user id
	 *
	 * @param Uuid | string $newUserId;
	 **/
	public function setUserId($newUserId) {
		// trim and sanitize user id
		$newUserId = trim($newUserId);
		$newUserId = filter_var($newUserId, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	}
}