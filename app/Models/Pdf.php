<?php
/**
 * Created by PhpStorm.
 * User: julian
 * Date: 26/05/15
 * Time: 12:11 AM
 */

namespace App\Models;


class Pdf extends BaseModel {
    protected $table = 'pdf';
    protected $fillable = [
            'Group1Dato1',
            'Group1Dato2',
            'Group1Dato3',
            'Group1Dato4',
            'Group1Dato5',
            'Group1Dato20',
            'Group1Dato6',
            'Group1Dato7',
            'Group1Dato8',
            'Group1Dato9',
            'Group2Dato1',
            'Group2Dato2',
            'Group2Dato3',
            'Group2Dato4',
            'Group2Dato5',
            'Grupo3Dato1',
            'Grupo3Dato2',
            'Grupo3Dato3',
            'Grupo3Dato4',
            'Grupo3Dato5',
            'Grupo3Dato6',
            'Grupo3Dato7',
            'Grupo3Dato8',
            'Grupo4Dato1',
            'Grupo4Dato2',
            'Grupo4Dato3',
            'Grupo4Dato4',
            'Grupo4Dato5',
            'Grupo4Dato6',
            'Grupo4Dato7',
            'Grupo4Dato8',
            'Grupo4Dato9',
            'Grupo4Dato10',
            'Grupo4Dato11',
            'idBallot'
    ];

    public $relations =['ballots'];

    public function ballot()
    {
        return $this->hasOne('App\Models\Ballot','id','idBallot');
    }

}