<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name', 'owner_email'];

    public function deploymentChecks() {
        return $this->hasMany(DeploymentCheck::class);
    }
}
