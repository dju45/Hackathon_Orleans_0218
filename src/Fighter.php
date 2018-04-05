<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 05/04/18
 * Time: 22:08
 */

namespace src;


class Fighter
{
    const POWER_MIN = 0;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $power;
    /**
     * @var int
     */
    private $speed;
    /**
     * @var int
     */
    private $strength;

    public function __construct($name, $strength, $speed, $power)
    {
        $this->name= $name;
        $this->strength= $strength;
        $this->speed= $speed;
        $this->power= $power;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }


    /**
     * @return mixed
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * @param mixed $strength
     * @return Fighter
     */
    public function setStrength($strength)
    {
        $this->strength = $strength;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param mixed $speed
     * @return Fighter
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * @param mixed $power
     * @return Fighter
     */
    public function setPower($power)
    {
        $this->power = $power;
        return $this;
    }

    public function defense(Fighter $enemy, $attakPosition, $defensePosition)
    {

        if ($attakPosition!= $defensePosition) {
            if ($this->power<= $enemy->strength) {
                $this->power = self::POWER_MIN;
            } else {
                $this->power = $this->power - $enemy->strength;
            }
        }
        if ($attakPosition == $defensePosition) {
            if ($this->speed < $enemy->speed) {
                $this->power = $this->power - round(($enemy->strength)/2);
            }
        }
        if ($this->power == self::POWER_MIN) {
            echo 'Fatal strike! ' . $enemy->name . ' wins!';
            header('Location: index.php');
        }
    }

}