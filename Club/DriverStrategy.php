<?php
declare(strict_types=1);

namespace Club;

class DriverStrategy implements GolfClubStrategyInterface
{
    public function strike(int $temperature): string
    {
        $ballSpeed = rand(130, 160);
        $spin = rand(1800, 2800);
        $attackAngle = rand(-2, 20);
        $distance = intval((($ballSpeed + ($attackAngle*5)) * ($spin / 2200)) + $temperature);

        return "$distance yds";
    }

    public function getClubName(): string
    {
        return "driver";
    }
}