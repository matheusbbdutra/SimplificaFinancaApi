<?php

namespace App\Infrastructure\Persistence\Eloquent\User\Model;

use App\Infrastructure\Persistence\Eloquent\Finance\Model\AccountModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User;
use Tymon\JWTAuth\Contracts\JWTSubject;

class UserModel extends User implements JWTSubject
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email', 'password'];
    protected $hidden = ['password', 'remember_token'];
    public $timestamps = true;

    public function accounts(): HasMany
    {
        return $this->hasMany(AccountModel::class, 'user_id');
    }

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
