<?php

namespace App\Repository;

use App\Constants\MessageConstant;
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

    public static function create(array $attributes = []):Model|null
    {
        try {
          return  self::loadModel()::query()->create($attributes);
        } catch (\Exception $e) {
           return null;
        }
    }

    public static function delete($id):int
    {
        try {
            return self::loadModel()::query()->where(['id' => $id])->delete();
        } catch (\Exception $e) {
            echo $e->getMessage();
            return constant(MessageConstant::ERROR);
        }
    }

    public static function update($id, array $attributes):int
    {
        try {
            return self::loadModel()::query()->where(['id' => $id])->update($attributes);
        } catch (\Exception $e) {
            echo $e->getMessage();
            return constant(MessageConstant::ERROR);
        }
    }
}
