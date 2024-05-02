<?php

namespace Sebentleitner\Weather;

class History
{
    private array $days = [];

    /**
     * @param Day $day
     * @param string $date
     * @return void
     */
    public function addDay(Day $day, string $date): void
    {
        $this->days[$date] = $day;
    }

    /**
     * @param string $date
     * @return string|null
     */
    public function getWeather(string $date): ?string
    {
        if (array_key_exists($date, $this->days)) {
            return $this->days[$date]->getWeather();
        }

        return null;
    }
}
