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
		$data['item_img'] = "/asset/shop/imgs/".$itemname."_1.jpg";
		$data['item_doc'] = $this->read("asset/shop/docs/".$itemname.".txt");
		//echo "/asset/shop/docs/".$itemname.".txt";
		$this->load->view('detail',$data);
	}

	function read($path)
	{
		if(file_exists($path))
		{
			$fp = fopen($path,"r");
			$str = fread($fp,filesize($path));//指定读取大小，这里把整个文件内容读取出来
			return $str = str_replace("\r\n","<br />",$str);
			//return fread($fp,filesize($path));//指定读取大小，这里把整个文件内容读取出来
		}
		else 
		{
			return "none";
		}
	}
}
