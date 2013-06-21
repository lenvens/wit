<?php
namespace wit\witclass;
/** @Entity @table(name="Task_t") */
class Task_t 
{

	/** 
	 * @Id @Column(type="integer") 
	 * @GeneratedValue(strategy="AUTO")
	 */
	private $task_id;

	/** @Column(type="string",length=50) */
	private $title; 

	/** @Column(type="string",length=50) */
	private $contents; 

	/** @Column(type="string",length=50) */
	private $category; 

	/** @Column(type="integer",length=50) */
	private $sign; 

	/** @Column(type="integer",length=50) */
	private $cost; 

	/** @Column(type="integer",length=50) */
	private $server_charge; 

	/**
	 * @OneToMany (targetEntity="User_t", mappedBy="Task_t") 
	 * @JoinColumn (name="f_user_id", referencedColumnName="user_id")
	 */
	private $f_user_id; 


	public function get_Task_t_task_id()
	{
		return $this->task_id;
	}
	public function get_Task_t_title()
	{
		return $this->title;
	}

	public function set_Task_t_title($title)
	{
		$this->title=$title;
	}

	public function get_Task_t_contents($contents)
	{
		return $this->contents;
	}
	public function set_Task_t_contents($contents)
	{
		$this->contents=$contents;
	}

	public function get_Task_t_categroy()
	{
		return $this->category;
	}

	public function set_Task_t_categroy($category)
	{
		$this->category=$category;
	}
	public function set_User_t_fuser_id(User_t $f_user_id)
	{
		if($this->f_user_t!==$f_user_id)
		{
			$this->f_user_id=$f_user_id;
			$f_user_id->set_Task_t_task_t($this);
		}
	}


}
