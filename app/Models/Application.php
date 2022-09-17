<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Application extends Model
{
    // use HasFactory;

    use SoftDeletes;

    public static function validate($request)
    {
        $request->validate([
           "job_title" => "required",
           "job_id" => "required",
            "user_name" => "required",
            "user_id" => "required",
            "resume" => "required",
            // "linkedin_url" => "required",
        ]);
    }

    public function getId()
    {
        return $this->attributes['id'];
    }
    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getJobTitle()
    {
        return $this->attributes['job_title'];
    }
    public function setJobTitle($job_title)
    {
        $this->attributes['job_title'] = $job_title;
    }

    public function getJobId()
    {
        return $this->attributes['job_id'];
    }
    public function setJobId($job_id)
    {
        $this->attributes['job_id'] = $job_id;
    }

    public function getUserName()
    {
        return $this->attributes['user_name'];
    }
    public function setUserName($user_name)
    {
        $this->attributes['user_name'] = $user_name;
    }

    public function getUserId()
    {
        return $this->attributes['user_id'];
    }
    public function setUserId($user_id)
    {
        $this->attributes['user_id'] = $user_id;
    }

    public function getResume()
    {
        return $this->attributes['resume'];
    }
    public function setResume($resume)
    {
        $this->attributes['resume'] = $resume;
    }

    public function getLinkedInUrl()
    {
        return $this->attributes['linkedin_url'];
    }
    public function setLinkedInUrl($linkedin_url)
    {
        $this->attributes['linkedin_url'] = $linkedin_url;
    }

    public function getCreatedAt()
    {
        return $this->attributes['created_at'];
    }
    public function setCreatedAt($created_at)
    {
        $this->attributes['created_at'] = $created_at;
    }

    public function getUpdatedAt()
    {
        return $this->attributes['updated_at'];
    }
    public function setUpdatedAt($updated_at)
    {
        $this->attributes['updated_at'] = $updated_at;
    }

    public function getDeletedAt()
    {
        return $this->attributes['deleted_at'];
    }
    public function setDeletedAt($deleted_at)
    {
        $this->attributes['deleted_at'] = $deleted_at;
    }
}
