<?php
/**
 * index.php
 *
 * PHP version 5.3
 *
 * @category SampleProject
 * @package  Src
 * @author   Everyone <username@example.com>
 * @license  Example http://example.com
 * @link     none
 */
namespace Src;

/**
 * SampleProject
 *
 * @category SampleProject
 * @package  Src
 * @author   Everyone <username@example.com>
 * @license  Example http://example.com
 * @link     none
 */
class SampleProject
{
    /**
     * __construct
     */
    public function __construct()
    {
        echo '__construct()';
    }

    /**
     * __destruct
     */
    public function __destruct()
    {
        echo '__destruct()';
    }

    /**
     * ok
     *
     * @return void
     */
    public function ok()
    {
        echo 'ok';
    }
}
