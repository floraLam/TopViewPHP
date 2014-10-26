<?
/*
* 定义了 User接口.
* 和子类 NormalUser,VipUser,AdminUser 

	公有属性：
	（public）name 用户名
		  email 邮箱地址
	          password 密码
	
	（protected）roleId 角色编号
			0 ：NormalUser		
				普通用户，即游客，
				登记基本用户名，邮箱和密码之后可留言
			1 ：VipUser
				升级用户，即特别授权用户，
				进过管理人员审批后，具备发表文章功能，删除自发文章
			2 ：AdminUser 
				管理人员，即团队成员
				可查看删除所有人文章，授权用户
		     userId 用户编号
		
*/
//User接口,定义了三个抽象方法.
interface User{
	public function getName();
	public function setName($_name);
	public function getEmail();
	public function setEmail($_email);
	public function getPassword();
	public function setPassword($_password);
}
abstract class AbstractUser implements User{
	private $name = ""; //用户名
	private $email = ""; //邮箱地址
	private $password = "";//密码
	protected  $roleId = ""; //角色编号
	protected  $userId = "";  //用户编号
	
	public function __construct($_name,$_email,$_password){
		$this->setName($_name);
		$this->setEmail($_email);
		$this->setPassword($_password);
	}
	public function getName(){
		return $this->name;
	}
	public function setName($_name){
		$this->name = $_name;
	}

	public function getEmail(){
		return $this->email;
	}
	public function setEmail($_email){
		$this->email = $_email;
	}
	public function getPassword(){
		return $this->password;
	}
	public function setPassword($_password){
		$this->password = $_password;
	}


	public function getRoleId(){
		return $this->roleId;
	}
	
	public function getUserId(){
		return $this->userId;
	}
	
	protected function setUserId($_userId){
		$this->userId = $_userId
	}
}
class NormalUser extends AbstractUser  {	
	protected  $role = '0';
	
}

class VipUser extends AbstractUser {
	protected  $role = '1';
	
}

class AdminUser extends AbstractUser {
	protected  $role = '2';
	
}
?>
