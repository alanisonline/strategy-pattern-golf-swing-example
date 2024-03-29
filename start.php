<?php

spl_autoload_register(function ($class_name) {
    $formattedClassName = str_replace("\\", "/", $class_name);
    include "$formattedClassName.php";
});

$driverStrategy = new Club\DriverStrategy();
$putterStrategy = new Club\PutterStrategy();

function output(string $message): void
{
    echo "{$message}\n";
}

function getTemperature(): int
{
    return rand(0, 40);
}

function swing(Club\GolfClubStrategyInterface $strategy): string
{
    $temperature = getTemperature();

    return rand(0, 100) < 98 ? "{$strategy->strike($temperature)}" : "Ball missed!";
}

output("You swing your {$driverStrategy->getClubName()}");
output(swing($driverStrategy));

output("You swing your {$putterStrategy->getClubName()}");
output(swing($putterStrategy));