<?php
class ControllerExtensionModuleZemezTwitter extends Controller {
	public function index($setting) {
		$this->load->language('extension/module/zemez_twitter');

		$data['heading_title'] = $this->language->get('heading_title');

		$data['page_url']      = $setting['page_url'];
		$data['width']         = $setting['width'];
		$data['height']        = $setting['height'];
		$data['color_scheme']  = $setting['color_scheme'];
		$data['widget_id']     = $setting['widget_id'];
		$data['tweet_limit']   = $setting['tweet_limit'];

		if ($this->config->get('fdu_app_id')){
			$data['flb_app_id'] = $this->config->get('fdu_app_id');
		} else {
			$data['flb_app_id'] = false;
		}

		return $this->load->view('extension/module/zemez_twitter', $data);
	}
}