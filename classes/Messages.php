<?php

class Messages
{
    public static function setMessage($text, $type)
    {
        if ($type === 'error') {
            $_SESSION['message_error'] = $text;
        } else {
            $_SESSION['message_success'] = $text;
        }
    }

    public static function displayMessages()
    {
        if (isset($_SESSION['message_error'])) {
            ?>

                <div class="col s12">
                    <p class="red lighten-5 red-text text-darken-4 center-align message">
                        <?= $_SESSION['message_error']; ?>
                    </p>
                </div>

            <?php

            unset($_SESSION['message_error']);
        }

        if (isset($_SESSION['message_success'])) {
            ?>

                <div class="col s12">
                    <p class="teal lighten-5 teal-text text-darken-4 center-align message">
                        <?= $_SESSION['message_success']; ?>
                    </p>
                </div>

            <?php

            unset($_SESSION['message_success']);
        }
    }
}
