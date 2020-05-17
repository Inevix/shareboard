<?php

class ShareModel extends Model
{
    public function Index()
    {
        $this->query('SELECT * FROM shares ORDER BY create_date DESC');

        return $this->resultSet();
    }

    public function add()
    {
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $title = $post['title'];
        $body = $post['body'];
        $link = $post['link'];

        if (!is_null($post)) {
            if (!$title) {
                Messages::setMessage('Please enter title!', 'error');

                return;
            }

            if (!$body) {
                Messages::setMessage('Please enter body!', 'error');

                return;
            }

            if (!$link) {
                Messages::setMessage('Please add link!', 'error');

                return;
            }
        }

        if ($title && $body && $link) {
            $this->query(
                'INSERT INTO shares (title, body, link, user_id) VALUES(:title, :body, :link, :user_id)'
            );

            $this->bind(':title', $title);
            $this->bind(':body', $body);
            $this->bind(':link', $link);
            $this->bind(':user_id', $_SESSION['user']['id']);

            $this->execute();

            if ($this->lastInsertId()) {
                header('Location: ' . ROOT_URL . 'shares');
            }

            return;
        }
    }
}