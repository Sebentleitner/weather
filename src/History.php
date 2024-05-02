<?php

namespace Sebentleitner\Weather;

class History
{
    private array $days = [];

    public function addDay(Day $day, string $date): void
    {
        $this->days[$date] = $day;
    }

    public function getWeather(string $date): ?string
    {
        if (array_key_exists($date, $this->days)) {
            return $this->days[$date]->getWeather();
        }

        return null; // Return null if weather for the given date is not available
    }
}
