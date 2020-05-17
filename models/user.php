<?php

class UserModel extends Model
{
    public function create()
    {
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $name = $post['name'];
        $email = $post['email'];
        $password = $post['password'];

        if (!is_null($post)) {
            if (!$name) {
                Messages::setMessage('Please enter your name!', 'error');

                return;
            }

            if (!$email) {
                Messages::setMessage('Please enter your email!', 'error');

                return;
            }

            if (!$password) {
                Messages::setMessage('Please enter your password!', 'error');

                return;
            }
        }

        if ($post) {
            if ($name && $email && $password) {
                $password = md5($password);

                $this->query(
                    'INSERT INTO users (name, password, email) VALUES(:name, :password, :email)'
                );

                $this->bind(':name', $name);
                $this->bind(':email', $email);
                $this->bind(':password', $password);

                $this->execute();

                if ($this->lastInsertId()) {
                    header('Location: ' . ROOT_URL . 'users/login');
                }

                return;
            }
        }
    }

    public function login()
    {
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $email = $post['email'];
        $password = $post['password'];

        if (!is_null($post)) {
            if (!$email) {
                Messages::setMessage('Please enter your email!', 'error');

                return;
            }

            if (!$password) {
                Messages::setMessage('Please enter your password!', 'error');

                return;
            }
        }

        if ($post) {
            if ($email && $password) {
                $password = md5($password);

                $this->query(
                    'SELECT * FROM users WHERE email = :email AND password = :password'
                );

                $this->bind(':email', $email);
                $this->bind(':password', $password);

                $user = $this->single();

                if ($user) {
                    $_SESSION['is_logged'] = true;
                    $_SESSION['user'] = array(
                        'id' => $user['id'],
                        'name' => $user['name'],
                        'email' => $user['email']
                    );

                    header('Location: ' . ROOT_URL . 'shares');
                } else {
                    Messages::setMessage('Incorrect login or email', 'error');
                }

                return;
            }
        }
    }
}