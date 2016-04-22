<?php
/**
 * Created by PhpStorm.
 * User: shanli
 * Date: 2016/4/22
 * Time: 16:43
 */

namespace wsl\qqwry\models;


use yii\base\Model;

/**
 * 位置数据模型
 *
 * @package wsl\qqwry\models
 */
class Location extends Model
{
    /**
     * @var string 国家
     */
    public $country;
    /**
     * @var string 地区
     */
    public $area;
}