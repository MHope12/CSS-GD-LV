<?php

namespace App;

use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\typePerson;
use App\Models\Dependency;
use App\Models\Folder_User;
use App\Models\Role_User;
use App\Models\Role;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'codPerson', 'namePerson', 'lastnamePerson',  'typePerson_id', 'dependency_id', 'email'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 
    ];

    protected $primaryKey = 'idUser';

    //Foranea con Cargo
    public function TypePerson()
    {
        return $this->belongsTo(typePerson::class, 'typePerson_id','idTypePerson');
    } 

    //Foranea con Area de Trabajo
    public function Dependency()
    {
        return $this->belongsTo(Dependency::class,'dependency_id','idDependency');
    } 

    //Foranea tabla intermedia Usuario_Role
    public function Role_User()
    {
        return $this->hasMany(Role_User::class, 'user_id', 'idUser');
    }

    //Foranea tabla intermedia Usuario_Proyecto
    public function Folder_User()
    {
        return $this->hasMany(Folder_User::class, 'user_id', 'idUser');
    }

    //Foranea con Rol--> Muchos a muchos
    public function role()
    {
        return  $this->belongsToMany(Role::class, 'Role_User', 'user_id', 'role_id');
    }

}
