<?php namespace Util;
class Date {
    private $day;
    private $month;
    private $year;

    private static $MONTHS = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul","Aug", "Sep", "Oct", "Nov", "Dec"];

    public function getDay(): int
    {
        return $this->day;
    }

    public function setDay(int $day)
    {
        $this->day = $day;
    }

    public function getMonth(): int
    {
        return $this->month;
    }

    public function setMonth(int $month)
    {
        $this->month = $month;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function setYear(int $year)
    {
        $this->year = $year;
    }

    public function __construct(int $day = 1, int $month = 1, int $year = 2008)
    {
        if ($day<= 0 || $day > 31){
            throw new DateException("wrong input for day: $day");
        }

        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }

    public function print()
    {
        print $this->day . "/" . $this->month . "/" . $this->year;
    }

    public function printMonth()
    {
        print $this->day . "/" . self::$MONTHS[$this->month - 1] . "/" . $this->year;
    }
}
