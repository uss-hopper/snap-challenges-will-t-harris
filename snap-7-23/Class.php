<?php
namespace Wharris21\Snap;
/**
 * Class definition for User class
 **/
class User {
	/**
	 * id value for this instance of user; this is the primary key
	 *
	 * @var string $userId
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
	 *
	 * @param string $newUserId id of this user
	 * @param string $newUserName username of this author
	 * @throw \InvalidArgumentException if data types are not valid
	 * @throw \RangeException if data values are out of bounds (values too long)
	 * @throw \TypeError if data types violate type hints
	 * @throw \Exception if some other error occurs
	 **/
	public function __construct($newUserId, $newUserName) {
		try {
			$this->setUserId($newUserId);
			$this->setUserName($newUserName);
		} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception ) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}
	}

	/**
	 * getter/accessor method for user id
	 *
	 * @return string value for user id
	 **/
	public function getUserId() : string {
		return $this->userId;
	}

	/**
	 * setter/mutator method for user id
	 *
	 * @param Uuid | string $newUserId;
	 * @throws \InvalidArgumentException if argument is an empty value
	 * @throws \TypeError if argument is not a string
	 **/
	public function setUserId($newUserId) {
		// trim and sanitize user id
		$newUserId = trim($newUserId);
		$newUserId = filter_var($newUserId, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		// throw error if argument is empty
		if(empty($newUserId)) {
			throw(new \InvalidArgumentException('User id is a required field, cannot take an empty value'));
		}
		// throw error if argument is not a string
		if(!is_string($newUserId)) {
			throw(new \TypeError('Invalid argument type for user id, expected string'));
		}
		$this->userId = $newUserId;
	}

	/**
	 * getter/accessor method for user name
	 *
	 * @return string value for user name
	 **/
	public function getUserName() : string {
		return $this->userName;
	}

	/**
	 * setter/mutator method for user name
	 *
	 * @param string $newUserName
	 * @throws \InvalidArgumentException if argument value is empty
	 * @throws \TypeError if argument value is not a string
	 **/
	public function setUserName($newUserName) {
		// trim and sanitize input
		$newUserName = trim($newUserName);
		$newUserName = filter_var($newUserName, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		// throw error if argument is empty
		if(empty($newUserName)) {
			throw(new \InvalidArgumentException('Username is a required field, cannot take an empty value'));
		}
		// throw error if argument is not a string
		if(!is_string($newUserName)) {
			throw(new \TypeError('Invalid argument type for user name, expected string'));
		}
		$this->userName = $newUserName;
	}

	/**
	 * greeting method for the user class
	 *
	 * @param string $userMessage
	 **/
	public function displayUserGreeting($userMessage) {
		echo "User message: $userMessage";
	}
}