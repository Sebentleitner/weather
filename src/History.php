<?php

namespace Sebentleitner\Weather;


class History
{/*
    private array $days = [];


     * @param Day $day
     * @param string $date
     * @return void

    public function addDay(Day $day): void
    {
        $this->days[] = $day;
    }


     * @param string $date
     * @return string|null

    public function getWeather(string $date): ?string
    {
        if (array_key_exists($date, $this->days)) {
            return $this->days[$date]->getWeather();
        }




        return null;
    }
*/

    private $days = [];

    public function AddDay($day) {
        $this->days[] = $day;
    }

    public function getWeather($date) {
        foreach ($this->days as $day) {
            if ($day->Date === $date) {
                return $day->Weather;
            }
        }
        return "Keine Wetterdaten für das angegebene Datum gefunden.";
    }

}
