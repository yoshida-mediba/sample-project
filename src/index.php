<?php

$data = array(
    'hoge' => 'fuga',
    'hage' => 'faaa',
);

var_dump($data);

/**
 * SampleProject
 *
 * @author  Everyone <username@example.com>
 * @license Example http://example.com
 * @link    none
 */
class SampleProject
{
    /**
     * __construct
     */
    function __construct()
    {
        echo '__construct()';
    }

    /**
     * __destruct
     */
    function __destruct()
    {
        echo '__destruct()';
    }
}

$sample = new SampleProject();

var_dump($sample);
