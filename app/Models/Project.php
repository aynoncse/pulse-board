<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function deploymentChecks() {
        return $this->hasMany(DeploymentCheck::class);
    }
}
