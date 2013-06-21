<?php
namespace witclass;
/** @Entity @table(name="User_t") */
class User_t 
{

	/** 
	 * @Id @Column(type="integer") 
	 * @GeneratedValue(strategy="AUTO") 
	 * OneToMany (targetEntity="Task_t", mappedBy="User_t") 
	 * OneToMany (targetEntity="Taskinfo_t", mappedBy="User_t") 
	 * OneToMany (targetEntity="Tasklog_t", mappedBy="User_t") 
	 */
	private $user_id;

	
	/** @Column(type="string",length=50) */
	private $login; 

	/** @Column(type="string",length=50) */
	private $auth; 

	/** @Column(type="integer",length=50,nullable=TRUE) */
	private $phone; 

	/** @Column(type="string",length=50,nullable=TRUE) */
	private $email; 

	/** @Column(type="integer",length=50,nullable=TRUE) */
	private $dragoncoin; 

	/** @Column(type="string",length=50,nullable=TRUE) */
	private $bank_id; 

	/** @Column(type="string",length=50,nullable=TRUE) */
	private $bank_code; 

	/** @Column(type="integer",length=50,nullable=TRUE) */
	private $kind; 



	//public function get_User_t_user_id()
	//{
	//	return $this->user_id;
	//}


	//public function get_User_t_login()
	//{
	//	return $this->login;
	//}

	public function set_User_t_login($login)
	{
		$this->login=$login;
	}



	//public function get_User_t_auth()
	//{
	//	return $this->auth;
	//}

	public function set_User_t_auth($auth)
	{
		$this->auth=$auth;
	}



	//public function get_User_t_phone()
	//{
	//	return $this->phone;
	//}

	public function set_User_t_phone($phone)
	{
		$this->phone=$phone;
	}

	public function set_User_t_email($email)
	{
		$this->email=$email;
	}

	public function set_User_t_bank_id($bank_id)
	{
		$this->bank_id=$bank_id;
	}
	
	public function set_User_t_bank_code($bank_code)
	{
		$this->bank_code=$bank_code;
	}

	public function set_User_t_kind($kind)
	{
		$this->kind=$kind;
	}
	//public function set_User_t_task_temp(Task_t $task_temp)
	//{
	//	if($this->task_temp!=$task_temp)
	//	{
	//		$this->task_temp=$task_temp;
	//		$task_t->set_Task_t_user_id($this);
	//	}
	//}



}
