<?php
declare(strict_types=1);
namespace model;

class Region extends \Illuminate\Database\Eloquent\Model {
    protected $table = 'region';
    protected $primaryKey = 'id_region';
    public $timestamps = false;
}

?>