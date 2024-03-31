<?php
declare(strict_types=1);
namespace model;

class SousCategorie extends \Illuminate\Database\Eloquent\Model {
    protected $table = 'sous_categorie';
    protected $primaryKey = 'id_sous_categorie';
    public $timestamps = false;
}

?>