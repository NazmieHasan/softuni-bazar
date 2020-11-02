<?php

namespace App\Data;


class CategoryDTO
{

    private $id;

    private $name;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @param $id
     * @return $this
     */
    public function setId($id): CategoryDTO
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     * @return $this
     */
    public function setName($name): CategoryDTO
    {
        $this->name = $name;

        return $this;
    }

}