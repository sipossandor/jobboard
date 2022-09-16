<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Manager extends Model
{
    // use HasFactory;

    use SoftDeletes;

    public static function validate($request)
    {
        $request->validate([
            "name" => "required",
            "post" => "required",
            "photo" => "required",
        ]);
    }

    protected $fillable = [
        'name',
        'post',
        'photo',
    ];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getName()
    {
        return $this->attributes['name'];
    }

    public function setName($name)
    {
        $this->attributes['name'] = $name;
    }

    public function getPost()
    {
        return $this->attributes['post'];
    }

    public function setPost($post)
    {
        $this->attributes['post'] = $post;
    }

    public function getPhoto()
    {
        return $this->attributes['photo'];
    }

    public function setPhoto($photo)
    {
        $this->attributes['photo'] = $photo;
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
