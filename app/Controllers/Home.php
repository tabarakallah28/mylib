<?php

namespace App\Controllers;

use App\Models\StaffModel;
use App\Models\BorrowerModel;
use App\Models\BookModel;
use App\Models\PublisherModel;
use App\Models\CategoryModel;
use App\Models\BorrowModel;


class Home extends BaseController
{
    protected $staffmodel;
    protected $borrowermodel;
    protected $bookmodel;
    protected $publishermodel;
    protected $categorymodel;
    protected $borrowmodel;

    public function __construct()
    {
        $this->staffmodel = new StaffModel();
        $this->borrowermodel = new BorrowerModel();
        $this->bookmodel = new BookModel();
        $this->publishermodel = new PublisherModel();
        $this->categorymodel = new CategoryModel();
        $this->borrowmodel = new BorrowModel();
    }

    public function index()
    {
        if(session('id'))
        {
            return redirect()->to(base_url('home'));
        }
        return view('login');
    }
    public function home()
    {
        if(!session('id'))
        {
            return redirect()->to(base_url())->with('error', 'Anda Harus Login');
        }

        $data = array(
            'qstaff' => $this->staffmodel->countAll(),
            'qborrower' => $this->borrowermodel->countAll(),
            'qbook' => $this->bookmodel->countAll(),
            'qpublisher' => $this->publishermodel->countAll(),
            'qcategory' => $this->categorymodel->countAll(),
            'qborrow' => $this->borrowmodel->countAll(),
        );
        return view('home', $data);
    }
    
}
