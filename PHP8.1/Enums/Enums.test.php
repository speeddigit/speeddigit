<?php

enum Status {
    case DRAFT;
    case PUBLISHED;
    case ARCHIVED;

    public function color() : string
    {
        return match($this)
        {
            self::DRAFT => 'Grey',
            self::PUBLISHED => 'Black',
            self::ARCHIVED => 'Blue'
        };
    }
}


$status = Status::PUBLISHED;
echo $status->color();