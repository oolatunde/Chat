<?php
	class Chat extends Core
	{
		public function fetchMessages()
		{
			$db = new mysqli('localhost', 'root', '', 'user');

			$result = $db->query("SELECT chat.message, user.username,
			user.user_id
			FROM chat JOIN user ON chat.user_id = user.user_id
			ORDER BY chat.timestamp DESC");
			
			$rows = array();
			for($x = 1; $x <= $db->affected_rows; $x++)
			{
				$rows[] = $result->fetch_assoc();
			}
            return $rows;
		}

		public function throwMessages($user_id, $message)
		{
		    $this->query("INSERT INTO chat(user_id, message,
			timestamp) VALUES (".(int)$user_id.",  '".$message."', UNIX_TIMESTAMP())");
			
		}
	}
?>
