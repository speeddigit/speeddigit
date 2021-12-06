<?php 

interface HasActivityColor
{
    public function color(): string;
}

enum UserActivityStatus implements HasActivityColor
{
    case ACTIVE;
    case INACTIVE;
    case BANNED;

    public function color() : string
    {
        return match($this)
        {
            self::ACTIVE => 'green',
            self::INACTIVE => 'red',
            self::BANNED => 'yellow'
        };
    }
}

$activeStatus = UserActivityStatus::ACTIVE;
echo $activeStatus->color() . PHP_EOL;

$activeStatus = UserActivityStatus::INACTIVE;
echo $activeStatus->color() . PHP_EOL;

$activeStatus = UserActivityStatus::BANNED;
echo $activeStatus->color() . PHP_EOL;