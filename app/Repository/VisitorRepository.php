<?php
namespace App\Repository;

use App\Services\Ip;
use App\Visitor;

class VisitorRepository 
{
    use BaseRepository;

    protected $model;
    protected $ip;

    public function __construct(Visitor $visitor, IP $ip)
    {
        $this->model = $visitor->with('article');
        $this->ip = $ip;
    }

    
}