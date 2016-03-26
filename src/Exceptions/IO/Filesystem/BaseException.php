<?php
namespace Exceptions\IO\Filesystem;

use Exceptions\IO\BaseException as BaseIOException;

/**
 * This is a tag like class that is used to regroup all IO\Filesystem exceptions under a single base class.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
abstract class BaseException extends BaseIOException implements BaseExceptionInterface
{

}
