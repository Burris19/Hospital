<?php
/**
 * Created by PhpStorm.
 * User: YOEL
 * Date: 18/03/15
 * Time: 11:08
 */

namespace App\Models;


class Ballot extends BaseModel {

    protected $table = 'ballots';
    protected $fillable = ['name','place','id_user','name','place','url','fullname','edad','sexo','sentroReferido','state'];


    public $relations =['user'];

    public function user()
    {
        return $this->hasOne('App\Models\User','id','id_user');
    }

}