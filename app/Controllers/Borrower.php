<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\models\BorrowerModel;

class Borrower extends BaseController
{
    protected $borrowermodel;

    public function __construct()
        {
            $this->borrowermodel = new BorrowerModel(); 
        }
    public function index()
    {
        if(!session('id'))
        {
            return redirect()->to(base_url())->with('error', 'Anda Harus Login');
        }
        $data = array(
            'borrower' => $this->borrowermodel->findAll(),
        );
        
        return view('borrower/index', $data);
    }
    public function add()
    {
        if(!session('id'))
        {
            return redirect()->to(base_url())->with('error', 'Anda Harus Login');
        }

        return view('borrower/form');
    }
    public function addpro()
    {
        if(!session('id'))
        {
            return redirect()->to(base_url())->with('error','Anda Harus Login');
        }

        $post = $this->request->getPost();

        if(!$this->validate([
            'name' => [
                'rules' => 'required',
                'errors' => ['required' => 'wajib diisi'],
            ],
            'birthdate' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'wajib diisi'],
            ],
            'address' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'wajib diisi'],
            ],
            'gender' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'wajib diisi'],
            ],
            'contact' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'wajib diisi'],
            ],
            'email' => [
                'rules' => 'required|is_unique[staff.email]',
                'errors' => [
                    'required' => 'wajib diisi',
                    'is_unique' => 'email sudah terdaftar'
                ],
            ],
        ])){
            $validation = \config\Services::validation();
            session()->setFlashdata('validation',$validation->getErrors());
            return redirect()->to('borrower-add')->withInput();
        }
            $this->borrowermodel->save([
                'name' => $post['name'],
                'birthdate' => $post['birthdate'],
                'address' => $post['address'],
                'gender' => $post['gender'],
                'contact' => $post['contact'],
                'email' => $post['email']
            ]);
        return redirect()->to('borrower')->with('info','data berhasil ditambah');

    }

    public function edit($id)
    {
        if(!session('id'))
        {
            return redirect()->to(base_url())->with('error','Anda Harus Login');
        }
        $data = array(
            'item' => $this->borrowermodel->where(['id'=>$id])->first(),
            'id' => $id,
        );
        return view('borrower/form', $data);
    }

    public function editpro()
    {
        if(!session('id'))
        {
            return redirect()->to(base_url())->with('error','Anda Harus Login');
        }

        $post = $this->request->getPost();
        $datapost = $this->borrowermodel->where(['id' => $post['id']])->first();

        if($post['email'] == $datapost['email'])
        {
            if(!$this->validate([
                'name' => [
                    'rules' => 'required',
                    'errors' => ['required' => 'wajib diisi'],
                ],        
            ])){
                $validation = \config\Services::validation();
                session()->setFlashdata('validation',$validation->getErrors());
                return redirect()->to('borrower-add')->withInput();
            }
            $this->borrowermodel->save([
                'id'    => $post['id'],
                'name' => $post['name'],
                'birthdate' => $post['birthdate'],
                'address' => $post['address'],
                'gender' => $post['gender'],
                'contact' => $post['contact'],
                'email' => $post['email']
                
            ]);
            return redirect()->to('borrower')->with('info','data berhasil ditambah');
    
        } else {
            if(!$this->validate([
                'name' => [
                    'rules' => 'required',
                    'errors' => ['required' => 'wajib diisi'],
                ],
                'email' => [
                    'rules' => 'required|is_unique[staff.email]',
                    'errors' => [
                        'required' => 'wajib diisi',
                        'is_unique' => 'email sudah terdaftar'
                    ],
                ],            
            ])){
                $validation = \config\Services::validation();
                session()->setFlashdata('validation',$validation->getErrors());
                return redirect()->to('borrower-add')->withInput();
            }
            $this->borrowermodel->save([
                'id'    => $post['id'],
                'name' => $post['name'],
                'birthdate' => $post['birthdate'],
                'address' => $post['address'],
                'gender' => $post['gender'],
                'contact' => $post['contact'],
                'email' => $post['email']
            ]);
            return redirect()->to('borrower')->with('info','data berhasil ditambah');
        }       
    }
    public function del($id)
    {
        if(!session('id'))
        {
            return redirect()->to(base_url())->with('error','Anda Harus Login');
        }

        $delete = $this->borrowermodel->delete($id);
        if($delete)
        {
            return redirect()->to('borrower');
        }
    }
}
