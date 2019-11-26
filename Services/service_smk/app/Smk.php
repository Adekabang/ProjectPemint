<?php namespace App; 
use Illuminate\Database\Eloquent\Model; 
class Smk extends Model {     
    protected $fillable = ['nama_smk','alamat'];     
    protected $dates = [];     
    public static $rules = [         
        'nama_smk' => 'required',         
        'alamat' => 'required',           
    ]; 
} 