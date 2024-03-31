<?php
declare(strict_types=1);
namespace controller;

use model\Departement;

class getDepartment {

    protected $departments = array();

    public function getAllDepartments() {
        return Departement::orderBy('nom_departement')->get()->toArray();
    }
}