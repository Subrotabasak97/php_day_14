<?php


namespace App\Classes;


class Student
{
    protected $text;
    protected $students;
    protected $result = [];

    public function __construct($post=null)
    {
        if (isset($post['search']))
        {
            $this->text = $post['search'];
        }
        
    }

    public function getAllStudent()
    {
        return[
            0 => [
                'name' => 'Subrota Basak',
                'mobile' => '01743717803',
                'email' => 'subrotabasak97@gmail.com',
                'address' => 'Tangail',
            ],
            1 => [
                'name' => 'Sribas Basak',
                'mobile' => '01682851255',
                'email' => 'sribasbasak1@gmail.com',
                'address' => 'Pathrail',
            ],
            2 => [
                'name' => 'Tarok Basak',
                'mobile' => '01760328448',
                'email' => 'tarokbasaktb@gmail.com',
                'address' => 'Nolshodha',
            ],
            3 => [
                'name' => 'Chitra Basak',
                'mobile' => '01766424104',
                'email' => 'chitrabasak@gmail.com',
                'address' => 'Mymensing',
            ],
            4 => [
                'name' => 'Abhoy Basak',
                'mobile' => '01821075840',
                'email' => 'abhoybasak@gmail.com',
                'address' => 'Mirzapur',
            ],
            5 => [
                'name' => 'Vhogo Basak',
                'mobile' => '01684975813',
                'email' => 'vhogobasak@gmail.com',
                'address' => 'Nolshodha',
            ],
        ];
    }

    public function getAllStudentBySearchText()
    {
        $this->students = $this->getAllStudent();
        foreach ($this->students as $student)
        {
            if($this->text == $student['name'])
            {
                $this->result = $student;
                break;
            }
        }
        return $this->result;
    }
}