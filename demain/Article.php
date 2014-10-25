<?
/*
* 定义了 Content接口.
* 和子类 Article,Book，	Group

	公有属性：
	（public）title     文章标题/书名/讨论组名
		  userId    文章作者编号/推荐人编号/讨论组长
	          created   创建时间
		  state     状态
		  image     题图
		  summary   摘要
		  contents   内容
		  contentId 文章编号
			
		  
		
*/
//Content接口,定义了三个抽象方法.
interface Content{
	/*public function getTitle();
	public function setTitle($_title);
	public function getCreated();
	public function setCreated($_created);
	public function getUserId();
	public function setUserId($_userId);
	public function getState();
	public function setState($_state);

	public function getImage();
	public function setImage($_image);
	public function getSummary();
	public function setSummary($_summary);
	public function getContents();
	public function setContents($_contents);
	public function getContentId();
	public function setContentId($_contentId);*/
}
abstract class AbstractContent implements Content{
	private $title   = "";     //文章标题/书名/讨论组名
	private $userId  = "";     //文章作者编号/推荐人编号/讨论组长
	private $created = "";     //创建时间
	private $state   = "";     //状态
	private $image   = "";     //题图
	private $summary = "";     //摘要
	private $contents = "";    //内容
	private $contentId = "";   //文章编号
	
	
	public function __construct($_title    ,  $_userId ,
				    $_created  ,  $_state  ,
				    $_image    ,  $_summary,
				    $_contents ,  $_contentId){
		$this->$title   = $_title;
		$this->$userId  = $_userId;
		$this->$created = $_created;
		$this->$state   = $_state;

		$this->$image   = $_image;
		$this->$summary  = $_summary;
		$this->$contents = $_contents;
		$this->$contentId   = $_contentId;
	}
}
class Article extends AbstractContent  {	
	
}

class Book extends AbstractContent {
	private $author   = "";         //作者
	private $publishDate  = "";     //发表日期
	private $press    = "";         //出版社
	public function __construct($_title    ,  $_userId ,
				    $_created  ,  $_state  ,
				    $_image    ,  $_summary,
				    $_contents ,  $_contentId,
				    $_author   ,  $_publishDate,
				    $_press){
		$this->$title   = $_title;
		$this->$userId  = $_userId;
		$this->$created = $_created;
		$this->$state   = $_state;

		$this->$image   = $_image;
		$this->$summary  = $_summary;
		$this->$contents = $_contents;
		$this->$contentId   = $_contentId;
		
		$this->$author   = $_author;
		$this->$publishDate  = $_publishDate;
		$this->$press = $_press;
	}
}

class Group extends AbstractContent {
	
}
?>

