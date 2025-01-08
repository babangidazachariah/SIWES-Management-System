<?php
	class redirectPage{
	 
		public $pageUrl;
		public function _construct(){
			
			$pageUrlArr = explode('?', $_SERVER['REQUEST_URI']);
			$this->pageUrl = $pageUrlArr['0'];
			$this->pageHost = $_SERVER['HTTP_HOST'];
		}
		
		public function redirectUrl($red_url){
			
			header("HTTP/1.1 301 Moved Permanently");
			header("Location: ". $red_url);
			exit;
		}
		
		public function getUrl(){
			
			$url = substr($this->pageUrl,1);
			switch($url){
				
				case '':
					return 'index.php';
					break;
				
				case (preg_match('/^[^\/\.]+$/',$url,$matches) ? true : false):
					return $matches['0'].'index.php';
					break;
				case (preg_match('/^[^\/]+$/',$url,$matches) ? true : false):
					return $matches['0'];
					break;
				
				case (preg_match('/^[^\.]+$/',$url,$matches) ? true : false):
					return substr($matches['0'], -1, 1) =="/" ?  $matches[0].'index.php' :  $matches[0].'index.php';
					break;				
				default:
					return $url;
			}
		}
		
		$objRidirection = new redirectPage();
		$mvUrl = $objRidirection->getUrl();
		$includeUrl = (empty($D_R) ? $D_R.$mvUrl : $D_R."/"mvUrl);
		if(!include_once($includeUrl)){
			
			location("index.php");
			exit;
		}
	}