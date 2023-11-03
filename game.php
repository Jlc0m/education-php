<?php

class Hero
{
    private int $health;
    private int $damage;
    private int $armory;

    public function __construct(int $health, int $damage, int $armory)
    {
        $this->health = $health;
        $this->damage = $damage;
        $this->armory = $armory;
    }

    public function getHealth()
    {
        return $this->health;
    }

    public function setHealth(int $health): void
    {
        $this->health = $health;
    }

    public function getDamage()
    {
        return $this->damage;
    }

    public function setDamage(int $damage): void
    {
        $this->damage = $damage;
    }

    public function getArmory()
    {
        return $this->armory;
    }

    public function setArmory(int $armory): void
    {
        $this->armory = $armory;
    }

    public function attackTarget(Hero $target)
    {
        $target->receiveDamage($this->damage);
    }

    public function receiveDamage($damage)
    {
        $this->health -= ($damage - $this->armory);
    }
}

class Battle {

    private $hero1;
    private $hero2;

    public function battle()
    {
        $this->hero1 = new Hero(100, 50, 10);
        $this->hero2 = new Hero(100, 40, 10);

        $this->hero1->attackTarget($this->hero2);
        echo "Hero 2's health: " . $this->hero2->getHealth();

        $this->hero2->attackTarget($this->hero1);
        echo "Hero 1's health: " . $this->hero1->getHealth();
    }
}

$battle = new Battle;

var_dump($battle->battle());