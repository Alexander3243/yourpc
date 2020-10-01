<?php
class ControllerExtensionModuleZemezFacebook extends Controller {
	public function index($setting) {
		$this->load->language('extension/module/zemez_facebook');

		$data['heading_facebook_title'] = $this->language->get('heading_facebook_title');

		$data['page_url']      = $setting['page_url'];
		$data['width']         = $setting['width'];
		$data['height']        = $setting['height'];
		$data['bg']            = $setting['bg'];
		$data['show_facepile'] = $setting['show_facepile'];
		$data['show_posts']    = $setting['show_posts'];
		$data['language']      = $setting['language'];

		if (!empty($setting['app_id'])){
			$data['app_id'] = $setting['app_id'];
		} else {
			$data['app_id'] = '';
		}

		return $this->load->view('extension/module/zemez_facebook', $data);
	}
}