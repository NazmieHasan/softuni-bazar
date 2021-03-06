<?php


namespace App\Repository;


use App\Data\CategoryDTO;
use Database\DatabaseInterface;

class CategoryRepository implements CategoryRepositoryInterface
{
    /**
     * @var DatabaseInterface
     */
    private $db;

    public function __construct(DatabaseInterface $db)
    {
        $this->db = $db;
    }

    public function findAll(): \Generator
    {
        return $this->db->query(
            "SELECT id, name FROM categories ORDER BY id")
            ->execute()
            ->fetch(CategoryDTO::class);
    }
}