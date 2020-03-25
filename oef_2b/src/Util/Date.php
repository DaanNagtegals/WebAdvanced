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

    public function getMonth(): int
    {
        return $this->month;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    private function __construct(int $day = 1, int $month = 1, int $year = 2008)
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

    public static function make(int $day = 1, int $month = 1, int $year = 2008)
    {
        try {
            $date = new Date($day, $month, $year);
        } catch (DateException $dateException) {
            var_dump($dateException);
        }
        return $date;
    }

    public function changeDay($day)
    {
        $this->day = $day;
    }

    public function changeMonth($month)
    {
        $this->month = $month;
    }

    public function changeYear($year)
    {
        $this->year = $year;
    }
}
