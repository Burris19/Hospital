<?php
/**
 * Created by PhpStorm.
 * User: YOEL
 * Date: 18/03/15
 * Time: 10:53
 */

namespace App\Http\Controllers\Admin;

use App\Repositories\UserRepo;
use App\Helpers\FormX;

class UsersController extends CrudController {

    protected $rules = array(
        'username' => 'required',
        'password' => 'required'
    );

    protected $module = '_users';

    function __construct(UserRepo $userRepo)
    {
        parent::__construct('admin');
        $this->repo = $userRepo;
    }

    public function updateRules($data = null)
    {
        $this->rules = array(
            'username' => 'required'
        );
    }

    public function fields($data = null)
    {
        $type = array(
            'administrator' => 'Administrador',
            'user' => 'Usuario Normal'
        );

        if($data)
        {
            return FormX::make()
                ->input('username','Usuario:','Usuario',$data->username)
                ->select('type','Tipo:',$type,$data->type);
        }
        else
        {
            return FormX::make()
                ->input('username','Usuario:','Usuario')
                ->input('password','Contraseña:','Contraseña','','password')
                ->select('type','Tipo:',$type);;
        }
    }

}