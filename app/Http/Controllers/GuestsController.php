<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DjGuest;


class GuestsController extends Controller
{
    
    public function index(){        
        return DjGuest::get_data_as_arr();
    }    
    
    public function guests(){        
        
        $guests = DjGuest::count_elements_by_key('guest_of');
        $djs_guests = array();

        foreach ($guests as $key => $value) {            
            array_push($djs_guests, [
                'dj' => $key,
                'total_guests' => $value
            ]);           
        }
        
        return $djs_guests;
    }

    
    public function guest_locations(){
        
        $guests = DjGuest::count_elements_by_key('location');
        $location_guests = array();

        foreach ($guests as $key => $value) {            
            array_push($location_guests, [
                'location' => $key,
                'total' => $value
            ]);           
        }
        
        return $location_guests;
    }


    public function leader_board_djs(){
        $dj_guest_model = new DjGuest();
        $counted_djs = DjGuest::count_elements_by_key('favourite_dj');
        arsort($counted_djs);
        
        // $sorted_djs = array_keys($counted_djs);

        return $counted_djs;
    }

    
}
