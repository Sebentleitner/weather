<?php

namespace Sebentleitner\Weather;

class Day
{
    private string $weather ='';
    /**
     * Get the weather
     *
     * @return string weather
     */
    public function getWeather(): string
    {
        return $this->weather;
    }

    public function setWeather(string $weather): void
    {
        $this->weather = $weather;
    }

    function __construct($weather)
    {
        $this->setWeather($weather);
    }


}