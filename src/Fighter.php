<?php
/**
 * Created by PhpStorm.
 * User: wilder17
 * Date: 06/04/18
 * Time: 10:05
 */
namespace src;
require __DIR__ . '/../vendor/autoload.php';
class Fighter
{
    const POWER_MIN = 0;
    /**
     * @var int
     */
    private $id;
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
    public function __construct($id, $name, $strength, $speed, $power)
    {
        $this->id = $id;
        $this->name = $name;
        $this->strength = $strength;
        $this->speed = $speed;
        $this->power = $power;
    }
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
        }
    }
}