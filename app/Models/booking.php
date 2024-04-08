<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class booking
 * @package App\Models
 * @version February 26, 2024, 11:57 am UTC
 *
 * @property \App\Models\Member $memberid
 * @property \App\Models\Court $courtid
 * @property string $bookingdate
 * @property time $starttime
 * @property time $endtime
 * @property integer $memberid
 * @property integer $courtid
 * @property number $fee
 */
class booking extends Model
{


    public $table = 'booking';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'bookingdate',
        'starttime',
        'endtime',
        'memberid',
        'courtid',
        'fee'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'bookingdate' => 'date',
        'memberid' => 'integer',
        'courtid' => 'integer',
        'fee' => 'decimal:3'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'bookingdate' => 'nullable',
        'starttime' => 'nullable',
        'endtime' => 'nullable',
        'memberid' => 'nullable|integer',
        'courtid' => 'nullable|integer',
        'fee' => 'nullable|numeric'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function memberid()
    {
        return $this->belongsTo(\App\Models\Member::class, 'memberid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function courtid()
    {
        return $this->belongsTo(\App\Models\Court::class, 'courtid');
    }
}
