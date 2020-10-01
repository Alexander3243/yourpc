<?php
class ControllerExtensionModuleZemezSettings extends Controller {
	public function index() {
		$this->load->language('common/header');
		
		$data['telephone']     = $this->config->get('config_telephone');
		$data['open']     = $this->config->get('config_open');
		$data['open_text'] = $this->language->get('open_text');

		return $this->load->view('extension/module/zemez_settings', $data);
	}
}