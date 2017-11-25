<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

	public function index()
	{
		$this->load->view('detail');
	}

	public function show($id)
	{
		$itemname = 'item'.$id;
		$data['item_title'] = $this->getTitle("asset/shop/docs/".$itemname.".txt");
		$data['item_title_small'] = "新款热门商品，秋冬美美过一季";
		$data['item_img'] = "/asset/shop/imgs/".$itemname."_1.jpg";
		$data['item_img2'] = "/asset/shop/imgs/".$itemname."_2.jpg";
		$data['item_doc'] = $this->read("asset/shop/docs/".$itemname.".txt");
		$this->load->view('detail',$data);
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
			$str = fread($fp,filesize($path));//指定读取大小，这里把整个文件内容读取出来
			return $str = str_replace("\r\n","<br />",$str);
		}
		else 
		{
			return "none";
		}
	}
}
