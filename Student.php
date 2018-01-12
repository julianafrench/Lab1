<?php

/**
 * Created by PhpStorm.
 * User: Juliana French
 * Date: 2018-01-11
 * Time: 5:22 PM
 */

/**
 * Class Student
 * A description of a student.
 * @author Juliana French
 */
class Student
{

    function __construct()
    {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    function add_email($which, $address)
    {
        $this->emails[$which] = $address;
    }

    function add_grade($grade)
    {
        $this->grades[] = $grade;
    }
}