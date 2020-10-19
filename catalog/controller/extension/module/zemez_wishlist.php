<?php
class ControllerExtensionModuleZemezWishlist extends Controller {
	public function index() {
		$this->load->language('common/header');
		
		if ($this->customer->isLogged()) {
			$this->load->model('account/wishlist');

			$data['text_wishlist3'] = sprintf($this->language->get('text_wishlist3'), $this->model_account_wishlist->getTotalWishlist());
		} else {
			$data['text_wishlist3'] = sprintf($this->language->get('text_wishlist3'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
		}
		$data['text_wishlist2'] = sprintf($this->language->get('text_wishlist2'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);

		return $this->load->view('extension/module/zemez_wishlist', $data);
	}
}