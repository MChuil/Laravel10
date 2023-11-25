<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    // protected $fillable = ['name', 'description', 'priority'];
    protected $guarded = ['_token'];
    

    public function getRouteKeyName()
    {
        return 'slug';
    }

    // protected function priority():Attribute{
    //     return Attribute::make(
    //         get:function($value){
    //             if($value == 1){
    //                 return 'Bajo';
    //             }else if($value == 2){
    //                 return 'Intermedio';
    //             }else  if($value == 3){
    //                 return 'Alto';
    //             }
    //         }
    //     );
    // }

}
