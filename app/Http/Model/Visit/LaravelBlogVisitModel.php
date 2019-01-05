<?php
/**
 * laravel博客访问model
 * @author wusm
 */
namespace App\Http\Model\Visit;
//use App\Http\Model\BaseModel;
use Illuminate\Database\Eloquent\Model;

class LaravelBlogVisitModel extends Model
{
    /**
     * 表名
     *
     * @var string
     */
    protected $table = 'laravel_blog_visit';

    /**
     * 不可被批量赋值的属性。
     *
     * @var array
     */
    protected $guarded = ['id'];

	public function createData($data)
    {
        //思考：如何获取错误信息，并封装成code message data的结构
        return json_decode(json_encode($this->create($data)), true)['id'];
    }

    public function findOneByWhere($where, $columns = ['*'])
    {
        $dao = $this->select($columns);
        $dao = $this->combineWhere($dao, $where);
        $dao = $dao->first();
        if (!empty($dao)) {
            return $dao->toArray();
        }
        return [];
    }

    public function getAllViewNum($where = [])
    {
        $dao = $this->combineWhere($this, $where);
        $dao = $dao->sum('view_num');
        return $dao;
    }

    public function updateByWhere($where, $data)
    {
        $dao = $this->combineWhere($this, $where);
        $dao = $dao->update($data);
        return $dao;
    }

    public function combineWhere($dao, $where)
    {
        if (!empty($where) && is_array($where)) {
            foreach ($where as $key => $value) {
                if (is_array($value)) {
                    $dao = $dao->whereIn($key, $value);
                } else {
                    $dao = $dao->where($key, $value);
                }
            }
        }
        return $dao;
    }
}
