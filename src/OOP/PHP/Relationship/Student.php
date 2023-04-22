<?php

namespace App\OOP\PHP\Relationship;


class Student
{
    private string $name;
    private string $homework;
    private int $homeworkScore = 50;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }


    public function assignATempTeacher(Teacher $teacher): void
    {
        $this->homework = $teacher->assignAHomeWork();
    }

    public function getHomeworkScore(): int
    {
        return $this->homeworkScore;
    }
    public function doHomework(): void
    {
        $this->homeworkScore = 60;
    }


}