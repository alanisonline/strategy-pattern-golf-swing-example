<?php
declare(strict_types=1);

namespace Club;

interface GolfClubStrategyInterface
{
    public function strike(int $temperature): string;
    public function getClubName(): string;
}