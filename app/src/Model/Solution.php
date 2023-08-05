<?php
namespace DevYaka\Main\Model;

use SilverStripe\ORM\DataObject;

class Solution extends DataObject
{
    private static $table_name = 'Solution';

    private static $db = [
        'Solution' => 'HTMLText'
    ];

    private static $has_one = [];

    private static $has_many = [];

    private static $many_many = [];
}
