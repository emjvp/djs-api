<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Storage;

class DjGuest extends Model
{
    use HasFactory;
   
    private static function get_data(){
        $data = file_get_contents(Storage::disk('local')->path('json_db/guests.json'));
        return $data;
    }

    public static function get_data_as_arr(){
        $data = self::get_data();
        return json_decode($data, true);
    }
    
    public static function count_elements_by_key(String $key_param){
        $arr_data = self::get_data_as_arr();                  
        $listed_djs = array();        
        foreach ($arr_data as $value) {
            array_push($listed_djs, $value[$key_param]);           
        }

        $counted_array_guests = array_count_values($listed_djs); 
        
        return $counted_array_guests;
    }

    
    
}
