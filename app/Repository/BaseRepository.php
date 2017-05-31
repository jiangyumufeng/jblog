<?php 
namespace App\Repository;

trait BaseRepository
{
    public function getNumber()
    {
        return $this->model->count();
    }


}