<?php

namespace App\Models;

use App\Models\User;
use App\Models\Vote;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;

class Candidate extends Model
{
    use HasFactory, Sluggable;
    protected $guarded = ['id'];

    public function ketua()
    {
        return $this->belongsTo(User::class, 'user_id_ketua');
    }

    public function wakil()
    {
        return $this->belongsTo(User::class, 'user_id_wakil');
    }

    public function vote()
    {
        return $this->hasOne(Vote::class);
    }

    public function getLastVoteTime()
    {
        $latestVote = $this->vote()->latest()->first();

        return $latestVote ? $latestVote->created_at->diffForHumans() : 'Belum ada suara';
    }

    public function getTotalVotes()
    {
        return $this->vote()->count();
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'status'
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
