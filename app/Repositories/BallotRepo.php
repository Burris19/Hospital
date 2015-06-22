<?php
/**
 * Created by PhpStorm.
 * User: YOEL
 * Date: 18/03/15
 * Time: 12:02
 */

namespace App\Repositories;


use App\Models\Ballot;
use App\Repositories\Base\BaseRepo;

class BallotRepo extends BaseRepo {
    public function getModel()
    {
        return new Ballot();
    }
}