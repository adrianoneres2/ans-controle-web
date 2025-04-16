<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Interfaces\RepositoryInterface;
use App\Constants\MessageConstant;

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

    public static function find(int $id):Model|array
    {
       $user =  self::loadModel()::query()->find($id);
       return is_null($user)? MessageConstant::ARRAY_MESSAGE_NOT_FOUND: $user;
    }

    public static function create(array $attributes = []):Model|array
    {
        try {
          return  self::loadModel()::query()->create($attributes);
        } catch (\Exception $e) {
           return MessageConstant::ARRAY_MESSAGE_DEFAULT_ERROR;
        }
    }

    public static function delete($id):int
    {
        try {
            return self::loadModel()::query()->where(['id' => $id])->delete();
        } catch (\Exception $e) {
            echo $e->getMessage();
            return constant('RETURN_ERRO');
        }
    }

    public static function update($id, array $attributes):int
    {
        try {
            return self::loadModel()::query()->where(['id' => $id])->update($attributes);
        } catch (\Exception $e) {
            echo $e->getMessage();
            return constant('RETURN_ERRO');
        }
    }
}
