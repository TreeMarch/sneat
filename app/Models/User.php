<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Scout\Attributes\SearchUsingPrefix;
use Laravel\Scout\Searchable;
use Laravel\Scout\Attributes\SeachUsingPrefix;

class User extends Authenticatable
{
  use HasFactory, Notifiable,Searchable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
<<<<<<< HEAD
    'account_id',
    'user_name',
    'email',
    'phone_number',
    'status'
=======
    'user_name',
    'email',
    'password',
    'user_password',
    'first_name',
    'last_name',
    'phone_number',
    'favourite',
    'birth',
>>>>>>> origin/master
  ];

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array<int, string>
   */
  protected $hidden = [
    'password',
    'remember_token',
  ];

  /**
   * Get the attributes that should be cast.
   *
   * @return array<string, string>
   */
  protected function casts(): array
  {
    return [
      'email_verified_at' => 'datetime',
      'password' => 'hashed',
    ];
  }
<<<<<<< HEAD

  #[SearchUsingPrefix(['status'])]
  public function toSearchableArray(){
    return [
      'user_name' => $this->user_name,
      'phone_number' => $this->phone_number,
      'email' => $this->email,
    ];
  }

  public function scopeSearch($query){
    if($key = request()->key){
      $query = $query->where('user_name','like','%'.$key.'%')
        ->orWhere('phone_number','like','%'.$key.'%')
        ->orWhere('email','like','%'.$key.'%')
      ;
    }elseif (empty($key)) {
      $query = User::paginate(10);
    }else{
      return $query;
    }
  }


=======
>>>>>>> origin/master
}
