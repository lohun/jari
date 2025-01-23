<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RedirectResponse;

class Home extends BaseController
{

    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function index(): string
    {
        $model = new \App\Models\HomeModel();
        $media = $model->getAllMedia();
        return view("layout/header")
            . view('home/index', ["media" => $media])
            . view("layout/footer");
    }

    public function about(): string
    {
        return view("layout/header")
            . view('home/about')
            . view("layout/footer");
    }

    public function mail(): RedirectResponse
    {
        $email = \Config\Services::email();

        $model = new \App\Models\HomeModel();

        $data = $this->request->getPost(['name', 'subject', 'msg']);

        if (!$this->validateData($data, [
            'name' => 'required|trim',
            'subject' => 'required|trim',
            'msg' => 'required|trim',
        ])) {
            $this->session->setFlashdata(["error" => validation_errors()]);
        }

        $status = $model->addMail($data['name'], $data['subject'], $data['msg']);
        if (!$status) {
            $this->session->setFlashdata(["error" => "There was an error, please try again."]);
            return redirect()->to('/');
        }


        $email->setFrom('kingjariltd@gmail.com', $data['name']);
        $email->setTo('nwankpele@gmail.com');

        $email->setSubject($data['subject']);
        $email->setMessage($data['msg']);

        if (!$email->send()) {
            $this->session->setFlashdata(["error" => "There was an error, please try again."]);
            return redirect()->to('/');
        }

        $this->session->setFlashdata(["success" => "Your message hase been reecorded"]);
        return redirect()->to('/');
    }
}
