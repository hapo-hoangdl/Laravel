<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectStatus extends Model
{
	protected $table = 'project_status';

	protected $fillable = [
		'name',
	];

	public function project()
	{
		return $this->belongsTo(Project::class);
	}
    //
}
