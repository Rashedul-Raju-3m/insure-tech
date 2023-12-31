<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class District extends Model
{
    use HasFactory;
    /*protected $fillable = [
         'name', 'is_active','created_by','is_delete'
    ];*/

    protected $table = 'districts';

    public static function GetAllDivisionWiseDistrictDropdownData($divisionID){
        $data = self::select('id',DB::raw("concat(name,' (',bn_name,')') as name"));
        if (isset($divisionID) && !empty($divisionID)){
            $data = $data->where('division_id',$divisionID);
        }
        $data = $data->orderBy('name','ASC')/*->pluck('name','id')*/->get();
        return $data;
    }
}
