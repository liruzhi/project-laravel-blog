<?php

/**
 * Model基类
 *
 * @author maxincai
 * @date 2016/03/14
 */

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    /**
     * 多条件处理方式
     * @param $condition array 键为表中字段名称
     * @author likai960
     */
    public function getByWhere($where, $page = 1, $perPage = 5)
    {
        $dao = $this;
        foreach ($where as $k => $v) {
            if (is_string($v) || is_int($v)) {
                $dao = $dao->where($k, $v);
            }

            if (is_array($v)) {
                $dao = $dao->whereIn($k, $v);
            }
        }

        if(!$page) {
            return $dao->get()->toArray();
        }
        $skip = ($page - 1) * $perPage;
        return $dao->skip($skip)->take($perPage)->get()->toArray();
    }



}