<?php
/**
 * Created by PhpStorm.
 * User: julian
 * Date: 25/05/15
 * Time: 10:42 PM
 */

namespace App\Repositories;

use App\Models\Pdf;
use App\Repositories\Base\BaseRepo;


class PdfRepo extends  BaseRepo {
    public function getModel()
    {
        return new Pdf();
    }

}