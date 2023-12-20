<?php

namespace App\Models;

use App\Models\User;
use App\Models\Vote;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidate extends Model
{
    use HasFactory;
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

        return $latestVote ? $latestVote->created_at->diffForHumans() : 'No votes yet';
    }

    public function getTotalVotes()
    {
        return $this->vote()->count();
    }
}
