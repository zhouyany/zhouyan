<?php
/**
 * @Author: anchen
 * @Date:   2018-06-10 14:45:06
 * @Last Modified by:   anchen
 * @Last Modified time: 2018-06-10 14:46:12
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    protected $table = 'product';
    protected $primarykey ='id';
}