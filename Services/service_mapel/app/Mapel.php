<?php namespace App; 
use Illuminate\Database\Eloquent\Model; 
class Mapel extends Model {     
    protected $fillable = ['nama_mapel','guru_id','description'];     
    protected $dates = [];     
    public static $rules = [         
        'name' => 'required',         
        'guru_id' => 'required',                  
        'description' => 'required',     
    ]; 
} 