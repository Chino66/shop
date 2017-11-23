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

		$data['tag'] = "Tag";
		$data['img'] = "/imgs/4.png";
		$this->load->view('shop',$data);
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
