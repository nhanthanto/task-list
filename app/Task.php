<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];
}
$user = App\User::find(1);

foreach ($user->tasks as $task) {
    echo $task->name;
}
