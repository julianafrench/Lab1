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

    function average()
    {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;

        // assuming grades array is not empty
        return $total / count($this->grades);
    }

    function toString()
    {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' (' . $this->average() . ")\n";
        foreach ($this->emails  as $which => $what)
            $result .= $which . ': ' . $what . "\n";
        $result .= "\n";
        return '<pre>' . $result . '</pre>';

    }
}