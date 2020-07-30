<?php
    require '../core/init.php';
   
    if (isset($_POST['method']) === true)
    {
        $chat = new Chat();
        $method = trim($_POST['method']);
    }
    if ($method === 'fetch')
    {
        $messages = $chat->fetchMessages();
        if (empty($messages) === true)
        {
            echo 'There are no messages';
        }
        else
        {
            foreach($messages as $message)
            {
                ?>
                <div class="message">
                <a href="#"><?php echo $message['username'];?></a> says:
                <p><?php echo $message['message']; ?></p>
                </div>
                <?php
            }
        }
    }
    elseif($method === 'throw' && isset($_POST['message']) === true)
    {
        $message = trim($_POST['message']);
        if(empty($message) === false)
        {
            $chat->throwMessages($_SESSION['user'], $message);
        }
    }
?>
