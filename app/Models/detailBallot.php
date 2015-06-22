<?php
/**
 * Created by PhpStorm.
 * User: julia_000
 * Date: 28/04/2015
 * Time: 2:38 AM
 */

namespace App\Models;


class detailBallot extends BaseModel{

    protected $table = 'detailBallot';
    protected $fillable = ['idBallot','url','id_user'];


    public $relations =['ballots'];

    public function ballot()
    {
        return $this->hasOne('App\Models\Ballot','id','idBallot');
    }

}