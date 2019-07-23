<?php

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
	 * getter/accessor method for user id
	 *
	 * @return Uuid | string value for user id
	 **/
	public function getUserId() : string {
		return $this->userId;
	}

	/**
	 *
	 **/
}