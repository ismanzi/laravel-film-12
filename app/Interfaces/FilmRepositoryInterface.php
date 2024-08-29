<?php

namespace App\Interfaces;

interface FilmRepositoryINterface
{
    //
    public function index();
    public function getById($id);

    public function store(array $data);
}