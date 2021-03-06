<?php
declare(strict_types=1);

namespace Plaisio\Exception;

use SetBased\Exception\RuntimeException;

/**
 * Exception for situations where the server cannot or will not process the request due to an apparent client error.
 */
class BadRequestException extends RuntimeException
{
  // Nothing to implement.
}

//----------------------------------------------------------------------------------------------------------------------
