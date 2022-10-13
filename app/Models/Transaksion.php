<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksion extends Model
{
      /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbltransdtl';

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
    protected $fillable = ['TransCode', 'TransNo', 'ItCode', 'Qty', 'CreateBy', 'CreateDt', 'LastUpBy', 'LastUpDt'];

      /**
     * The roles that belong to the user.
     */
    public function transaksionHeaders()
    {
        return $this->belongsToMany('App\Models\TransaksionHeader', 'TransCode', 'TransCode');
    }
}
