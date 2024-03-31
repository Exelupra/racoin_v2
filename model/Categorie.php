<?php
declare(strict_types=1);
namespace model;

class Categorie extends \Illuminate\Database\Eloquent\Model {
    protected $table = 'categorie';
    protected $primaryKey = 'id_categorie';
    public $timestamps = false;
}

?>