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

    /**
     * Student constructor.
     */
    function __construct()
    {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    /**
     * Adds an email to a student with a descriptor of that email.
     * @param $which - what type of email
     * @param $address - the email address
     */
    function add_email($which, $address)
    {
        $this->emails[$which] = $address;
    }

    /**
     * Adds a grade to a student. Assumes the user will give the
     * student a valid grade (a risky assumption).
     * @param $grade - the grade value
     */
    function add_grade($grade)
    {
        $this->grades[] = $grade;
    }

    /**
     * Returns the average of all the student's grades. Make sure
     * the student has grades before using.
     * @return float|int - the average
     */
    function average()
    {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;

        // assuming grades array is not empty
        return $total / count($this->grades);
    }

    /**
     * Returns all descriptors of the student in a readable format.
     * @return string - the student info to display
     */
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