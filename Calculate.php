<?php


class Calculate
{
    const ROW = 10;

    public function calc($table)
    {
        for ($i = 1; $i <= self::ROW; $i++) {
            echo $table . " x " . $i . " = " . $table * $i . "<br>";

        }

    }

}
