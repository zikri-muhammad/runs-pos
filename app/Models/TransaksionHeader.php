<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransaksionHeader extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbltranshdr';

      /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['TransCode', 'TransDt', 'CashierCode', 'PayMCode', 'PaidAmt', 'ChangeAmt', 'CreateBy', 'CreateDt', 'LastUpBy', 'LastUpDt'];

     /**
     * Get the comments for the blog post.
     */
    public function transaksionDtls()
    {
        return $this->hasMany('App\Models\Transaksion', 'TransCode', 'TransCode');
    }

}
