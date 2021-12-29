<?php

namespace App\Conference;

class Attendee extends Registrant
{
    protected static $meta = 'Conference Attendee';
    private static int $count = 0;
    private static int $nextId = 1;

    private string $username;
    private int $id;

    public function __construct()
    {
        self::$count++;

        $this->id = self::$nextId;
        self::$nextId++;
    }

    public static function getCount()
    {
        return self::$count;
    }

    public static function create(array $attributes): Attendee
    {
        $attendee = new self;
        $attendee->username = $attributes['username'];

        return $attendee;
    }
}