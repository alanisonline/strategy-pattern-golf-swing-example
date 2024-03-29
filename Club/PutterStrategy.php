<?php
declare(strict_types=1);

namespace Club;

class PutterStrategy implements GolfClubStrategyInterface
{
    public function strike(int $temperature): string
    {
        $ballSpeed = rand(1, 10);

        $attackAngle = rand(0, 2);
        $distance = intval((($ballSpeed + ($attackAngle * 5))) + ($temperature/10));
        return "$distance ft";
    }

    public function getClubName(): string
    {
        return "putter";
    }
}