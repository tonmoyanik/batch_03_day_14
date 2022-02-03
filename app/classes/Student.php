<?php


namespace App\classes;


class Student
{

    protected $text;
    protected $students;
    protected $result = [];

    public function __construct($post = null )
    {
        if (isset($post['search_btn'])){
            $this->text = $post['search'];
        }

    }

    public function getAllStudent(){

        return [
            0 => [
                'name'      => 'Hasan',
                'mobile'    => '123456777',
                'email'     => 'hasan@gmail.com',
                'address'   => 'Panthapath'
            ],
            1 => [
                'name'      => 'Rafan',
                'mobile'    => '468646325',
                'email'     => 'abb@gmail.com',
                'address'   => 'Uttara'
            ],
            2 => [
                'name'      => 'Imam',
                'mobile'    => '2234655656',
                'email'     => 'imam@gmail.com',
                'address'   => 'Mirpur'
            ],
            3 => [
                'name'      => 'Mishan',
                'mobile'    => '43546686',
                'email'     => 'mishan@gmail.com',
                'address'   => 'Gulshan'
            ],
            4 => [
                'name'      => 'Raka Imam',
                'mobile'    => '976543685',
                'email'     => 'raka@gmail.com',
                'address'   => 'Dhanmondi'
            ],

        ];
    }

    public function getStudentBySearchText(){

        $this->students = $this->getAllStudent();
        foreach ($this->students as $std){
            if ($this->text == $std['name']){
                $this->result = $std;
                break;
            }
        }
        return $this->result;
    }
}