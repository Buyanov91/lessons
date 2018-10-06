<?php

class DateFunctions
{
    public function formatDate($date)
    {
        $now = date($date);
        $farmatDate = date("d.m.Y H:i:s", strtotime($now));
        return $farmatDate;
    }
    public function calcDate($date)
    {
        $now = new DateTime('NOW');
        $birthday = new DateTime($date);
        if ($now < $birthday) {
            echo "Вы еще не родились";
        } else {
            $diff = $birthday->diff($now);
            echo "От моего дня рождения прошло:\n".
                $diff->y." лет(года)\n".
                $diff->m." месяцев(месяц)\n".
                $diff->d." дней(день)\n".
                $diff->h." Часов(час)\n".
                $diff->m." минут(минута)\n".
                $diff->s.substr($diff->f, 1)." секунд(секунда)\n\n";
        }
    }
    public function calcTime($myTime)
    {
        $now = new DateTime(date("d.m.Y H:i"));
        $time = new DateTime($myTime);
        if ($now < $time) {
            echo "Неведомое будующее";
        } elseif ($now == $time) {
            echo "Только что";
        } else {
            $diff = $time->diff($now);
            if ($diff->days == 0) {
                echo (!empty($diff->m)) ? $diff->m." минут(минуту) назад\n" : "";
                echo (!empty($diff->h)) ? $diff->h." часов(часа) назад\n" : "";
            } elseif ($diff->days == 1) {
                echo "Вчера\n";
            } else {
                echo (!empty($diff->d)) ? $diff->m." месяцев(месяц) назад\n" : "";
                echo (!empty($diff->m)) ? $diff->d." дней(день) назад\n" : "";
                echo (!empty($diff->y)) ? $diff->h." лет(год) назад\n" : "";
            }
        }
    }
}

$date = new DateFunctions();

//1.1
$now = '2018-01-01 00.00.24';
echo "Форматированная дата: ".$date->formatDate($now)."\n\n";

//1.2
$birthday = "17.10.1991";
$date->calcDate($birthday);

//1.3
$time = '2018-10-04 00.00.24';
$date->calcTime($time);

