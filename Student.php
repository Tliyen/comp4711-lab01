<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author Li-Yan Tong
 */
class Student {

    //Ctor
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    //Mutator method: Add an email address
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }

    //Add a grade
    function add_grade($grade) {
        $this->grades[] = $grade;
    }

}