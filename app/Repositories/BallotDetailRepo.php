<?php
/**
 * Created by PhpStorm.
 * User: julia_000
 * Date: 28/04/2015
 * Time: 3:01 AM
 */

namespace App\Repositories;


use App\Models\detailBallot;
use App\Repositories\Base\BaseRepo;


class BallotDetailRepo extends BaseRepo{
    public function getModel()
    {
        return new detailBallot();
    }
}