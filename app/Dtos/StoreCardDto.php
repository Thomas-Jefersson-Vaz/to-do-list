<?php
namespace App\Dtos;

class StoreCardDto {
    public string $title;
    public string $description;

    public function __construct(array $data) {
        $this->title = $data["title"];
        $this->description = $data["description"];
    }
}
