<?php
namespace DevYaka\Main\Model;

use SilverStripe\ORM\DataObject;

class Tag extends DataObject
{
    private static $table_name = 'Tag';

    private static $db = [
        'Title' => 'Varchar(255)'
    ];

    private static $has_one = [];

    private static $has_many = [];

    private static $many_many = [];
}
