<?php

/**
 * Class Student
 * @package SimplifiedMagento\FirstModule\Model
 */

namespace SimplifiedMagento\FirstModule\Model;

class Student
{

    /**
     * @var string $name
     */
    private string $name;
    /**
     * @var int $age
     */
    private int $age;

    /**
     * @var array|int[]
     */
    private array $scores;

    /**
     * Student constructor.
     * @param string $name
     * @param int $age
     * @param array|int[] $scores
     */
    public function __construct(
        string $name = "Alex",
        int $age = 28,
        array $scores = ['maths' => 92, 'programming' => 90 ]
    ) {
        $this->name = $name;
        $this->age = $age;
        $this->scores = $scores;
    }
}
