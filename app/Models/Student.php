<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{	
	protected $fillable = ['first_name', 'last_name', 'email', 'age'];
	
	 public function students(){
		return$this->hasMany(Student::class);
 }
	
    use HasFactory;  
}
