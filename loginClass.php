<?PHP
include "Database.php";
ini_set("display_errors",E_ALL);

Class loginClass
{
	public $post;
	public $username; //user_email
	public $pass; //user_password
	public $department;

	public $db;
	public $result;
	public function __construct(Array $post)
	{
		$this->db = new Database();
		
		$this->post = $post; // $_POST array from form;
		$this->username = $this->post['username'];
		$this->pass = $this->post['pass']; 
	
		$sql = "SELECT * FROM user WHERE username = '$this->username' AND pass = '$this->pass'";
		
		$this->db->query($sql);
		$this->result = $this->db->single();
		$this->department = $this->result->department;
		$this->login();
		
	}

public function checklogin()
{
		
		
		$this->db->query($sql);
		$this->result = $this->db->single();
		//comment out lines 33 to 40 when UnitTesting, Not actually logging in, only testing if It was successful or not
		if(password_verify($this->company_Pass, $this->result->company_Pass)) 
		{
			$this->login();
		}
		else 
		{ 
			exit(header("Location: login.php?wp=1")); 
		}
		return $this->result; 
}

	public function login()
	{
		print_r($result);
		if($this->result){
			
			setcookie('id',$this->result->id,time()+(60*60),'/');
		
			if ($this->result->department =='1'){ /* support */

			exit(header("Location: support_dpt.html")); /* Redirect browser */
			}
			if ($this->result->department_id =='2'){ /* Animal admin */

			exit(header("Location: finance_dpt.php")); /* Redirect browser */
			}
			if ($this->result->department_id =='3'){ /* Animal admin */

			exit(header("Location: sales_dpt.php")); /* Redirect browser */
			}
			if ($this->result->department_id =='4'){ /* Animal admin */

			exit(header("Location: hr_dpt.php")); /* Redirect browser */
			}
			if ($this->result->department_id =='5'){ /* Member admin */

			exit(header("Location: tech_dpt.php")); /* Redirect browser */
			}
			else
			{ 
				echo"different admin";
			}
		
		} 
		else 
		{
			exit(header("Location: login.php?wp=1")); /* Wrong password, Go back to the same page  */
		}
		
	 }
	
}
?>