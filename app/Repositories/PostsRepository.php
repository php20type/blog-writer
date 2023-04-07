<?php

namespace App\Repositories;

use App\Models\PostsModel;
use App\Models\CategoriesModel;

class PostsRepository
{
    public function findOrFail($id)
    {
        return PostsModel::findOrFail($id);
    }

    public function getAllCategory()
    {
        return CategoriesModel::all()->pluck('name', 'id');
    }

    public function update(array $data, $id)
    {
        $post = PostsModel::findOrFail($id);
        $post->update($data);
    }

    public function delete($id)
    {
        $post = PostsModel::findOrFail($id);
        $post->delete();
    }
}