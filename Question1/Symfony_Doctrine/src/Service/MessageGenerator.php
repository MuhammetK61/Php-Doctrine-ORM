<?php
// src/Service/MessageGenerator.php
namespace App\Service;

use phpDocumentor\Reflection\Types\Integer;
use App\Service\NumberGenerator;


class MessageGenerator
{

    private $logger;

    public function __construct(NumberGenerator $number)
    {
        $this->number = $number;
    }

    public function getHappyMessage(): string
    {
        $messages = [
            'You did it! You updated the system! Amazing!',
            'That was one of the coolest updates I\'ve seen all day!',
            'Great work! Keep going!',
        ];

        $index = array_rand($messages);

        return $messages[$index] . "Randım Service Number: " . $this->getRandomNumber();
    }

    public function getRandomNumber(): int
    {
        return rand(1,100);
    }
}

?>