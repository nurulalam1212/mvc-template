<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller
 *
 * @author nurul
 */
class Controller {
    //put your code here
    protected function model($model)
    {
        require_once "../app/models/".$model.".php";
        return new $model;
    }
    protected function view($view, $data =[])
    {
        require_once "../app/views/".$view.".php";
    }
}
