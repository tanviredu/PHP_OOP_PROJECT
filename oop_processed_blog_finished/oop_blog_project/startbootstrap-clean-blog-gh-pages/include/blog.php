<?php 
	require_once('database.php');
	class Blog{
		public function create_post($username,$title,$content){
		global $database;
		// take the input

		$sql = "INSERT INTO blog (username,title,content,time) VALUES ('$username','$title', '$content',now())";
		$result  = $database->query($sql);
		$database->confirm_query($result);
		//return true;
	}

		public function delete_blog_by_id($id){
			global $database;
			$sql = "DELETE FROM blog WHERE id = '$id'";
			$result = $database->query($sql);
			$database->confirm_query($result);
		}

		public function delete_all_post_of_user($username){
			global $database;
			$sql = "DELETE FROM blog WHERE username = '$username'";
			$result = $database->query($sql);
			$database->confirm_query($result);	
		}



		public function fetch_post_by_username($username){
			global $database;
			$sql = "SELECT * FROM blog WHERE username = '$username'";
			$posts = $database->query($sql);
			$database->confirm_query($result);
			while($post = $database->fetch_array($posts)){
				//echo "<h2 class='section-heading'>".$post['title']."</h2>";
				//echo "<p>".$post['content']."</p>";
				//echo "<blockquote class='blockquote'>".$post['content']."</blockquote>";
				//echo strip_tags($post['content']);

			}	
		}
		public function fetch_all_post(){
			global $database;
			$sql = "SELECT * FROM blog";
			$posts = $database->query($sql);
			$database->confirm_query($posts);
			while($post = $database->fetch_array($posts)){
				echo "<h2 class='section-heading'>".strip_tags($post['title'])."</h2>";
				echo "<p>".strip_tags($post['content'])."</p>";
				echo "<blockquote class='blockquote'>".strip_tags($post['time'])."</blockquote>";
				echo "<blockquote class='blockquote'>".strip_tags($post['username'])."</blockquote>";

			}	
		}

		public function update_post($username,$id){
			global $database;
			// not finished
		}

}

$blog = new Blog();


?>