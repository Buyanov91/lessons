<?php

class StringFunctions
{
    public function findLowerCase($string, $arr)
    {
        $count = 0;
        for ($i = 0; $i < count($arr); $i++) {
            $count += mb_substr_count($string, mb_strtolower($arr[$i]));
        }
        return $count;
    }

    public function findLetter($string, $name)
    {
        for ($i = 0; $i < mb_strlen($name); $i++) {
            $letter = mb_strtolower(mb_substr($name, $i, 1));
            $count = mb_substr_count($string, $letter);
            $string = mb_strtolower($string);
            echo "Буква <" . $letter . "> встречается " . $count . " раз(раза)\n";
        }
    }

    public function cutString($string)
    {
        $string = trim($string);
        if (mb_strlen($string) > 50) {
            $string = trim(mb_substr($string, 0, 47)) . "...\n\n";
        }
        return $string;
    }

    public function cutStringFull($string)
    {
        $string = trim($string);
        if (mb_strlen($string) > 50) {
            $fullString = trim(mb_substr($string, 0, 47));
            $string = mb_substr($fullString, 0, mb_strripos($fullString, " ", 0)) . "...\n\n";
        }
        return $string;
    }
}

$name = new StringFunctions();

//1.1
$arr = ['Маша', 'Петя', 'Женя', 'Петю'];
$string = "Маша любит мороженое. Петя постоянно играет в компьютер. женя идет в садик. Маша любит петю.";
$count = $name->findLowerCase($string, $arr);
echo "Ошибочно написаных слов в тексте: " . $count . PHP_EOL . PHP_EOL;

//1.2
$myName = "Женя";
$name->findLetter($string, $myName);

//1.3
echo $name->cutString($string);

//1.4
echo $name->cutStringFull($string);

