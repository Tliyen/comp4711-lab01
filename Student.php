<?php

/**
 * The Student class holds information, calculates various statistics and 
 * displays information about the student
 *
 * @author Li-Yan Tong
 */
class Student {

    /**
     * Constructor for Student
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    /**
     * add_email() adds email string information about a student
     * 
     * @param type $which type of email address String value
     * @param type $address email address String value
     */
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }

    /**
     * add_grade() adds a grade integer value out of 100 to an array of grades 
     * for the Student
     * 
     * @param type $grade grave value as an integer value
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    /**
     * average() calculates a students grade average
     * 
     * @return type  a grade average represented as a rounded integer value
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return round($total / count($this->grades));
    }

    /**
     * toString() collects test representation of student information to be
     * printed on the screen
     * 
     * @return type student information as a text String value
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' (' . $this->average() . ")\n";
        foreach ($this->emails as $which => $what)
            $result .= $which . ': ' . $what . "\n";
        $result .= "\n";
        return '<pre>' . $result . '</pre>';
    }

}
