<?php

declare(strict_types=1);

namespace App;

use DateTime;

class User
{
    private int $id;
    private string $name;
    private ?string $email;

    public function __construct(int $id, string $name, ?string $email = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }

    public function getProfile(): string
    {
        $date = new DateTime();
        return "User: {$this->name} (ID: {$this->id}) - " .
            "Registered at: " . $date->format('Y-m-d');
    }
}

$user = new User(1, 'John Doe', 'jd@example.com');
echo $user->getProfile();
