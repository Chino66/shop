<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	public function index()
	{
		// $file_path = "doc/test.txt";
		// echo $this->read("doc/test.txt");


		// $file_path = "doc/test.txt";
		// if(file_exists($file_path))
		// {
		// 	$fp = fopen($file_path,"r");
		// 	$str = fread($fp,filesize($file_path));//指定读取大小，这里把整个文件内容读取出来
		// 	echo $str = str_replace("\r\n","<br />",$str);
		// }
		// else
		// {
		// 	echo "none";
		// }

		$data['title'] = "SDFShop";
		$data['content'] = "欢迎来到SDFShop，精美商品等你发现···";
		$data['recomment'] = "推荐商品";

		//商品资源初始化
		for ($x=1; $x<=12; $x++) 
		{
			$itemname = "item".$x;
			$data[$itemname.'_img'] = "/asset/shop/imgs/".$itemname."_1.jpg";
			$data[$itemname.'_title'] = $this->getTitle("asset/shop/docs/".$itemname.".txt");
			$data[$itemname.'_tag'] = "2017秋冬新款&nbsp热销商品";

		} 
		$data['img'] = "/imgs/4.png";
		
		$this->load->view('shop',$data);
	}
	
	//读取商品标题
	function getTitle($path)
	{
		if(file_exists($path))
		{
			$fp = fopen($path,"r");
			$str = fgets($fp);
			$str = str_replace("\r\n","<br />",$str);
			return $str;
		}
		else 
		{
			return "无标题";
		}
	}

	function read($path)
	{
		if(file_exists($path))
		{
			$fp = fopen($path,"r");
			return fread($fp,filesize($path));//指定读取大小，这里把整个文件内容读取出来
		}
		else 
		{
			return "none";
		}
	}
}
