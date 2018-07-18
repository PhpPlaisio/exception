<?php

namespace SetBased\Abc\Exception;

/**
 * Exception for situations where the requested URL is not the preferred URL.
 */
class NotPreferredUrlException extends \RuntimeException
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * The preferred URI.
   *
   * @var string
   */
  public $preferredUri;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * NotPreferredUrlException constructor.
   *
   * @param string $preferredUri The preferred URI.
   */
  public function __construct(string $preferredUri)
  {
    parent::__construct('Not preferred URL');

    $this->preferredUri = $preferredUri;
  }

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
