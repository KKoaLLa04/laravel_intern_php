<?php

namespace App\domain\Users\DTO;

use Illuminate\Http\Request;

class UserDTO
{
    private string $name;
    private string $email;
    private string $password='';
    private string $username;
    private array $group;
    private int $id;

    public function fromRequest(Request $request): self{
        if(!empty($request->get('id'))){
            $this->id = $request->get('id');
        }
        if(!empty($request->input('password'))){
            $this->password = $request->input('password');
        }
        if(!empty($request->input('group'))){
            $this->group = $request->input('group');
        }
        $this->name = $request->input('name');
        $this->email = $request->input('email');
        $this->username = $request->input('username');

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getGroup(): array
    {
        return $this->group;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }
}
