<?php

namespace App\domain\Users\DTO;

use Illuminate\Http\Request;

class UserDTO
{
    private string $name;
    private string $email;
    private string $password='';
    private string $username;
    private array $role;
    private int $id;

    public function fromRequest(Request $request): self{
        if(!empty($request->get('id'))){
            $this->id = $request->get('id');
        }
        if(!empty($request->input('password'))){
            $this->password = $request->input('password');
        }
        if(!empty($request->input('group'))){
            $this->role = $request->input('role');
        }
        if(!empty($request->input('name'))){
            $this->name = $request->input('name');
        }
        if(!empty($request->input('email'))){
            $this->name = $request->input('email');
        }
        if(!empty($request->input('username'))){
            $this->name = $request->input('username');
        }

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

    public function getRole(): array
    {
        return $this->role;
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
