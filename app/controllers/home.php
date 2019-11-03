<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home
 *
 * @author nurul
 */
class home extends Controller{
    public function index()
    {
        $student = App\Models\Student::find(3);
        return $this->view("home/index",[
            "student"=>$student
        ]);
    }
}
