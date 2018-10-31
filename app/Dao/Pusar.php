<?php
/**
 * Created by PhpStorm.
 * User: wangkai
 * Date: 2018/10/31
 * Time: 下午7:10
 */
namespace app\Dao;

use Illuminate\Database\Eloquent\Model as Model;
class Pusar extends Model {
    protected $connection = 'mysql_litajueta';
    protected $table = 'pusar';
}