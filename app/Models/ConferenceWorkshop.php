<?php

namespace App\Models;

use App\Models\RegisterType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ConferenceWorkshop extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get the user that owns the ConferenceWorkshop
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function work(): BelongsTo
    {
        return $this->belongsTo(RegisterType::class, 'workshop_id', 'id');
    }
}
