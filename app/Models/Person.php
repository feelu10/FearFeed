<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function addFriend(Person $friend)
    {
        $this->friends()->attach($friend);
    }

    public function removeFriend(Person $friend)
    {
        $this->friends()->detach($friend);
    }

    public function isFriendWith(Person $person)
    {
        return $this->friends()->where('id', $person->id)->exists();
    }

    public function friends()
    {
        return $this->belongsToMany(Person::class, 'friends', 'person_id_1', 'person_id_2');
    }
}
