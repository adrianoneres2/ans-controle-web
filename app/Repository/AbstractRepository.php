<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Interfaces\RepositoryInterface;

abstract class AbstractRepository implements RepositoryInterface
{
    protected static $model;

    public static function loadModel():Model
    {
        return app(static::$model);
    }

    public static function all():Collection
    {
        return self::loadModel()::all();
    }

    public static function find(int $id):Model|null
    {
        return self::loadModel()::query()->find($id);
    }

    public static function create(array $attributes = []):Model|array
    {
        try {
          return  self::loadModel()::query()->create($attributes);
        } catch (\Throwable $th) {
           // echo $th->getMessage();
           return [
                'Message' => 'Problem on create new user!!'
            ];
        }
    }

    public static function delete($id):int
    {
        return self::loadModel()::query()->where(['id' => $id])->delete();
    }

    public static function update($id, array $attributes):int
    {
        return self::loadModel()::query()->where(['id' => $id])->update($attributes);
    }
}
