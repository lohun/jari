<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RedirectResponse;
use IonAuth\Libraries\IonAuth;

class Admin extends BaseController
{
    protected $session;
    protected $ionAuth;
    protected $model;

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->ionAuth = new IonAuth();
        $this->model = new \App\Models\HomeModel();
    }

    public function profile(): string|RedirectResponse
    {
        if (!$this->ionAuth->loggedIn()) {
            $this->session->setFlashdata(['message', 'Please login, to view this section']);
            return redirect()->to('admin/login');
        }

        $user = $this->ionAuth->user()->result();
        // var
        return view("layout/adminHeader")
            . view('admin/profile', ["user" => $user[0]])
            . view("layout/adminFooter");
    }

    public function logout(): RedirectResponse
    {
        $this->ionAuth->logout();
        return redirect()->to("admin/login");
    }

    public function changePassword(): RedirectResponse
    {
        if (!$this->ionAuth->loggedIn()) {
            $this->session->setFlashdata(['message', 'Please login, to view this section']);
            return redirect()->to('admin/login');
        }
        $data = $this->request->getPost(['old', 'password', 'confirmPassword']);

        if ($this->validateData($data, [
            'old' => 'required|trim',
            'password' => 'required|trim',
            'confirmPassword' => 'required|trim|matches[password]',
        ])) {
            $identity = $this->session->get('identity');

            $change = $this->ionAuth->changePassword($identity, $data['old'], $data['password']);
            if ($change) {
                $this->session->setFlashdata(["success" => "Password change successful"]);
                return redirect()->to("admin/profile");
            } else {
                $this->session->setFlashdata(["error" => "There was an issue with your login, please try again."]);
                return redirect()->to("admin/profile");
            }
        } else {
            $this->session->setFlashdata(["error" => validation_errors()]);
            return redirect()->to("admin/profile");
        }
    }

    public function forgotPasswordCheck($code = null): string|RedirectResponse
    {
        if (!$code) {
            $this->session->setFlashdata(["error" => "Not allowed"]);
            return redirect()->to("admin/login");
        }
        $user = $this->ionAuth->forgottenPasswordCheck($code);
        if ($user) {
            //display the password reset form
            return view("layout/adminAuthHeader")
                . view('admin/resetForm' , ["code" => $code])
                . view("layout/adminAuthFooter");
        }
        return redirect()->to("admin/forgot");
    }

    public function resetPassword($code = null): RedirectResponse
    {
        if (!$code) {
            if (!$code) {
                $this->session->setFlashdata(["error" => "Not allowed"]);
                return redirect()->to("admin/login");
            }
            $this->session->setFlashdata(["error" => "Not allowed"]);
            return redirect()->to("admin/login");
        }
        $user = $this->ionAuth->forgottenPasswordCheck($code);
        if ($user) {
            //display the password reset form
            $identity = $user->email;
            $data = $this->request->getPost(['password', 'confirmPassword']);
            if ($this->validateData($data, [
                'password' => 'required|trim',
                'confirmPassword' => 'required|trim|matches[password]',
            ])) {
                $change = $this->ionAuth->resetPassword($identity, $data['password']);
                if ($change) {
                    $this->session->setFlashdata(["success" => "Password has been changed successfully, please login"]);
                    return redirect()->to("admin/login");
                } else {
                    $this->session->setFlashdata(["error" => "There was as issue please try again"]);
                    return redirect()->to("admin/forgot");
                }
            } else {
                $this->session->setFlashdata(["error" => validation_errors()]);
                return redirect()->to("admin/reset/" . $code);
            }
        }
        return redirect()->to("admin/forgot");
    }

    public function forgotPassword(): string
    {
        return view("layout/adminAuthHeader")
            . view('admin/forgot')
            . view("layout/adminAuthFooter");
    }

    public function forgotPasswordSubmit(): RedirectResponse
    {
        $data = $this->request->getPost(['email']);

        if ($this->validateData($data, [
            'email' => 'required|trim|valid_email',
        ])) {
            if ($this->ionAuth->forgottenPassword($data['email'])) {
                return redirect()->to("admin/forgot");
            } else {
                $this->session->setFlashdata(["error" => "There was an issue with your login, please try again."]);
                return redirect()->to("admin/forgot");
            }
        } else {
            $this->session->setFlashdata(["error" => validation_errors()]);
            return redirect()->to("admin/forgot");
        }
    }

    public function loginView(): string
    {
        return view("layout/adminAuthHeader")
            . view('admin/login')
            . view("layout/adminAuthFooter");
    }

    public function login(): RedirectResponse
    {
        $data = $this->request->getPost(['email', 'password']);

        if ($this->validateData($data, [
            'email' => 'required|trim|valid_email',
            'password' => 'required|trim',
        ])) {
            if ($this->ionAuth->login($data['email'], $data['password'], true)) {
                return redirect()->to("admin");
            } else {
                $this->session->setFlashdata(["error" => "There was an issue with your login, please try again."]);
                return redirect()->to("admin/login");
            }
        } else {
            $this->session->setFlashdata(["error" => validation_errors()]);
            return redirect()->to("admin/login");
        }
    }

    public function register(): RedirectResponse
    {
        if (!$this->ionAuth->loggedIn()) {
            $this->session->setFlashdata(['message', 'Please login, to view this section']);
            return redirect()->to('admin/login');
        }
        if (!$this->ionAuth->isAdmin()) {
            $this->session->setFlashdata(['message', 'You must be an admin to view this page']);
            return redirect()->to('admin');
        }

        $data = $this->request->getPost(['firstName', 'lastName', 'email', 'password', 'confirmPassword', 'group']);

        if ($this->validateData($data, [
            'firstName' => 'required|trim|string',
            'lastName' => 'required|trim|string',
            'email' => 'required|trim|valid_email|is_unique[users.email]',
            'password' => 'required|trim',
            'confirmPassword' => 'required|trim|matches[password]',
            'group' => "required|regex_match[/(1|2)/]"
        ])) {
            $additionalData = [
                "last_name" => $data['lastName'],
                "first_name" => $data['firstName']
            ];
            $status = $this->ionAuth->register($data["email"], $data["password"], $data["email"], $additionalData);
            if ($status) {
                if($data["group"] == 1) {
                    $this->ionAuth->addToGroup($data["group"], $status);
                }
                $this->session->setFlashdata(['message', 'User Added successfully']);
                return redirect()->to('admin/user');
            } else {
                $this->session->setFlashdata(['message', 'There was an error, please try again']);
                return redirect()->to('admin/user');
            }
        } else {
            $error = \Config\Services::validation()->listErrors();
            $this->session->setFlashdata("error", $error);
            return redirect()->to('admin/user');
        }
    }

    public function deleteUser(int $id): RedirectResponse
    {
        if (!$this->ionAuth->loggedIn()) {
            $this->session->setFlashdata(['message', 'Please login, to view this section']);
            return redirect()->to('admin/login');
        }
        if (!$this->ionAuth->isAdmin()) {
            $this->session->setFlashdata(['message', 'You must be an admin to view this page']);
            return redirect()->to('admin');
        }
        $id = intval($id);
        if ($this->ionAuth->deleteUser($id)) {
            $this->session->setFlashdata(["message" => "User Deleted"]);
            return redirect()->to("admin/user");
        } else {
            $this->session->setFlashdata(["message" => "There was an error, please try again"]);
            return redirect()->to("admin/user");
        }
    }

    public function getAllUSers(): string|RedirectResponse
    {
        if (!$this->ionAuth->loggedIn()) {
            $this->session->setFlashdata(['message', 'Please login, to view this section']);
            return redirect()->to('admin/login');
        }
        if (!$this->ionAuth->isAdmin()) {
            $this->session->setFlashdata(['message', 'You must be an admin to view this page']);
            return redirect()->to('admin');
        }

        $id = $this->ionAuth->getUserId();

        $users = $this->model->getAllUsers($id);

        return view("layout/adminHeader")
            . view('admin/users', ["users" => $users])
            . view("layout/adminFooter");
    }

    public function messages(): string|RedirectResponse
    {
        if (!$this->ionAuth->loggedIn()) {
            $this->session->setFlashdata(['message', 'Please login, to view this section']);
            return redirect()->to('admin/login');
        }

        $messages = $this->model->getAllMessages();

        return view("layout/adminHeader")
            . view('admin/mail', ["messages" => $messages])
            . view("layout/adminFooter");
    }

    public function getMessage(int $id): string|RedirectResponse
    {
        if (!$this->ionAuth->loggedIn()) {
            $this->session->setFlashdata(['message', 'Please login, to view this section']);
            return redirect()->to('admin/login');
        }

        $id = intval($id);
        $message = $this->model->getAMessage($id);

        return view("layout/adminHeader")
            . view('admin/viewMail', ["message" => $message])
            . view("layout/adminFooter");
    }

    public function getAllMedia(): string|RedirectResponse
    {
        if (!$this->ionAuth->loggedIn()) {
            $this->session->setFlashdata(['message', 'Please login, to view this section']);
            return redirect()->to('admin/login');
        }

        $media = $this->model->getAllMedia();

        return view("layout/adminHeader")
            . view('admin/media', ["media" => $media])
            . view("layout/adminFooter");
    }

    public function deleteMedia(int $id): RedirectResponse
    {
        if (!$this->ionAuth->loggedIn()) {
            $this->session->setFlashdata(['message', 'Please login, to view this section']);
            return redirect()->to('admin/login');
        }

        $id = intval($id);
        $status = $this->model->deleteMedia($id);


        if ($status) {
            $this->session->setFlashdata(['message', 'Media deleted']);
        } else {
            $this->session->setFlashdata(['message', 'Media not deleted, please try again']);
        }

        return redirect()->to('admin/media');
    }

    public function addMedia(): string|RedirectResponse
    {
        $media = $this->request->getFile("mediafile");
        $validationRule = [
            'mediafile' => [
                'label' => 'Media File',
                'rules' => [
                    'uploaded[mediafile]',
                    'mime_in[mediafile,image/jpg,image/jpeg,image/png,video/mp4]',
                    'max_size[mediafile,5000000000]'
                ],
            ],
            'thumbnail' => [
                'label' => 'Thumbnail File',
                'rules' => [
                    'uploaded[thumbnail]',
                    'is_image[thumbnail]',
                    'mime_in[thumbnail,image/jpg,image/jpeg,image/png]',
                    'max_size[thumbnail,10000000]'
                ],
            ],

            "description" => [
                "label" => "Description",
                "rules" => [
                    "trim",
                    "string"
                ]
            ]
        ];

        $data = $this->request->getPost(["mediafile", "thumbnail", "description"]);

        if (!$this->validateData($data, $validationRule)) {
            $error = \Config\Services::validation()->listErrors();
            $data = ['error' => $error];

            $this->session->setFlashdata($data);
            return redirect()->to('admin/media');
        }

        $media = $this->request->getFile("mediafile");
        $thumbnail = $this->request->getFile("thumbnail");
        $type = $media->getMimeType();
        if (!$media->hasMoved()) {
            $media->move(ROOTPATH . "public/uploads");
            $thumbnail->move(ROOTPATH . "public/uploads");
            $thumbnailName = $thumbnail->getName();
            $mediaName = $media->getName();

            $media = $this->model->addMedia("uploads/" . $thumbnailName, "uploads/" . $mediaName, $type, $this->request->getPost('description'));

            if ($media) {
                $this->session->setFlashdata(['message', 'Media added']);
            } else {
                $this->session->setFlashdata(['message', 'Media not added, please try again']);
            }
            return redirect()->to('admin/media');
        }

        $data = ['errors' => 'The file has already been moved.'];

        return redirect()->to('admin/media');
    }
}
