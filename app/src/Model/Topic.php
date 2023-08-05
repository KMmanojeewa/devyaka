<?php
namespace DevYaka\Main\Model;

use SilverStripe\ORM\DataObject;

class Topic extends DataObject
{
    private static $table_name = 'Topic';

    private static $db = [
        'Title' => 'Varchar(255)',
        'Description' => 'HTMLText'
    ];

    private static $has_one = [];

    private static $has_many = [];

    private static $many_many = [
        'Tags' => Tag::class, //one tag has many topics and one topic can have many tags
        'Solution' => Solution::class //one solution can be used in many topics
    ];
}
