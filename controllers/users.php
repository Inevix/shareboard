<?php

class Users extends Controller
{
    protected function create()
    {
        $viewModel = new UserModel();

        $this->returnView($viewModel->create(), true);
    }
    protected function login()
    {
        $viewModel = new UserModel();

        $this->returnView($viewModel->login(), true);
    }

    protected function logout()
    {
        unset($_SESSION['is_logged']);
        unset($_SESSION['user']);
        session_destroy();

        header('Location: ' . ROOT_URL);
    }
}
