<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Upazila extends Model
{
    use HasFactory;
    /*protected $fillable = [
         'name', 'is_active','created_by','is_delete'
    ];*/

    protected $table = 'upazilas';

    public static function GetAllDistrictWiseUpazilaDropdownData($districtID){
        $data = self::select('id',DB::raw("concat(name,' (',bn_name,')') as name"));
            if (isset($districtID) && !empty($districtID)){
                $data = $data->where('district_id',$districtID);

            }
        $data = $data->orderBy('name','ASC')/*->pluck('name','id')*/->get();
        return $data;
    }
}
