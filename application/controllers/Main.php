<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Kim Testa @https://github.com/TK-Works
 * @copyright 2019
 * @license MIT Open-source
 *  
 * Main class controller, will be loading pages under views/<class_name>
 */
class Main extends MY_Controller {
	public function __construct() {
		parent::__construct();
	}
	
	/**
	 * @method index()
	 * @return null
	 * Method will load under views/<class_name>/<method_name>.php
	 * All data handling should be passed under $this->view_data['key' => 'value']
	 * Data value will be accessed at view via @$key
	 * @ identifier denotes that the variable is a server variable
	 */
	
  public function index() {
		$this->view_data = [
			"title" => "Information System Developers - We improve your business needs through our IT solutions.", //page title
			"description" => "We build competitive applications and smart devices.",
      "keywords" => "Android Apps, Web Apps, Website Development, UI/UX Design, Software Apps, Internet of Things(IoT)",
      "author" => "Information System Developers",
			"styles" => [
				//"", //css to load while omitting .css file extension
			],
			"scripts" => [
				//"", //js to load while omitting .js file extension
			]
		];  
  }
}
