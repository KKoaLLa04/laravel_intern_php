<?php

namespace App\domain\Client\DTO;

use Illuminate\Http\Request;

class CommentDTO
{
    private int $id;
    private string $name;
    private string $email;
    private string $content;
    private int $parent_id;
    private int $post_id;
    private int $user_id;

    public function fromRequest(Request $request){
        if(!empty($request->get('id'))){
            $this->id = $request->get('id');
        }
        if(!empty($request->name)){
            $this->name = $request->input('name');
        }

        if(!empty($request->email)){
            $this->email = $request->input('email');
        }

        if(!empty($request->content)){
            $this->content = $request->input('content');
        }

        if(!empty($request->parent_id)){
            $this->parent_id = $request->input('parent_id');
        }

        if(!empty($request->post_id)){
            $this->post_id = $request->input('post_id');
        }

        if(!empty($request->user_id)){
            $this->user_id = $request->input('user_id');
        }

        return $this;
    }

    public function getName(){
        return $this->name;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getContent(){
        return $this->content;
    }

    public function getParentId(){
        return $this->parent_id;
    }

    public function getPostId(){
        return $this->post_id;
    }

    public function getUserId(){
        return $this->user_id;
    }

    public function getId(){
        return $this->id;
    }
}
