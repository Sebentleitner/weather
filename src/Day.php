<?php

namespace Sebentleitner\Weather;

class Day
{
    /*
    private string $weather ='';

    private dateTime $date;

    public function getDate(): dateTime
    {
        return $this->date;
    }

    public function setDate(dateTime $date): void
    {
        $this->date = $date;
    }


     * Get the weather
     *
     * @return string weather

    public function getWeather(): string
    {
        return $this->weather;
    }

    public function setWeather(string $weather): void
    {
        $this->weather = $weather;
    }

    function __construct($weather, $date)
    {
        $this->setWeather($weather);
        $this->setWeather($date);
    }
*/


    public $Weather;
    public $Date;

    public function __construct($weather, $date) {
        $this->Weather = $weather;
        $this->Date = $date;
    }


}