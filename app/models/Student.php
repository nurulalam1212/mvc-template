<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace App\Models;
/**
 * Description of Student
 *
 * @author nurul
 */
use Illuminate\Database\Eloquent\Model As Model; 
class Student extends Model{
    public function school()
    {
        return $this->belongsTo("App\Models\School","school_id");
    }
}
