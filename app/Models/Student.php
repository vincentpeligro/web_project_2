<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Student
 * @package App\Models
 * @version September 17, 2021, 4:09 am UTC
 *
 * @property string $firstname
 * @property string $lastname
 * @property integer $age
 * @property string $address
 * @property string $relegion
 * @property string $teacher
 * @property string $subject
 */
class Student extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'student';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'firstname',
        'lastname',
        'age',
        'address',
        'relegion',
        'teacher',
        'subject'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'firstname' => 'string',
        'lastname' => 'string',
        'age' => 'integer',
        'address' => 'string',
        'relegion' => 'string',
        'teacher' => 'string',
        'subject' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'firstname' => 'nullable|string|max:25',
        'lastname' => 'nullable|string|max:25',
        'age' => 'nullable|integer',
        'address' => 'nullable|string|max:50',
        'relegion' => 'nullable|string|max:20',
        'teacher' => 'nullable|string|max:25',
        'subject' => 'nullable|string|max:20',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
