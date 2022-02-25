<?php

namespace Appwrite;

use Exception;

class AppwriteException extends Exception {

  /**
   * @var mixed
   */
  private $response;

  /**
   * @var string
   */
  private $type;

  /**
   * @param String $message
   * @param int $code
   * @param mixed $response
   */
  public function __construct($message = null, $code = 0, $type = null, $response = null)
  {
      parent::__construct($message, $code);
      $this->response = $response;
      $this->type = $type;
  }

  /**
   * @return string
   */
  public function getType()
  {
      return $this->type;
  }
  
  /**
   * @return mixed
   */
  final public function getResponse()
  {
      return $this->response;
  }
}