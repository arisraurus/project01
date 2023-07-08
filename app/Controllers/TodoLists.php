<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TodolistModel;

class TodoLists extends BaseController
{
    protected $model;
    function __construct()
    {
        $this->model = new TodolistModel();
    }
    public function index()
    {
        $data['todolist'] = $this->model->getList();
        return view('todo', $data);
    }
    function input()
    {
        $req = $this->request->getPost();
        // dd($req);
        $input = ['judul' => $req];
        $this->model->save($input);
        return redirect()->to('todo');
    }

    function updateList()
    {
        $post = $this->request->getVar();
        $arr_id = explode(',', $post['all_id']);
        foreach ($arr_id as $id) {
            if (isset($post[$id])) {
                $save = [
                    'id' => $id,
                    'status' => 1,
                ];
            } else {
                $save = [
                    'id' => $id,
                    'status' => 0,
                ];
            }
            $this->model->save($save);
        }
        return redirect()->to('todo');
    }
    function delete($id)
    {
        $this->model->delete($id);
        return redirect()->to('todo');
    }
}
