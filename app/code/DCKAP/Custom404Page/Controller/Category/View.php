<?php
  /**
   * DCKAP_Custom404Page - Version 1.0.0
   * Copyright (c) 2015 DCKAP. All Rights Reserved.
   * Author: DCKAP
   * Websites: http://www.dckap.com
   */
  namespace DCKAP\Custom404Page\Controller\Category;

  use Magento\Framework\Exception\NoSuchEntityException;

  class View extends \Magento\Catalog\Controller\Category\View
  {

	/**
	* Category view action
	*
	* @param \Magento\Catalog\Controller\Category\View $coreRoute
	* @return \Magento\Framework\Controller\ResultInterface     
	*/
	public function execute($coreRoute = null) {

		$categoryId = (int)$this->getRequest()->getParam('id', false);
		if (!$categoryId) {
			return $this->_forward('index', 'categorynoroute', 'custom404Page');
		}

		try {
			$category = $this->categoryRepository->get($categoryId, $this->_storeManager->getStore()->getId());
		} catch (NoSuchEntityException $e) {
			return $this->_forward('index', 'categorynoroute', 'custom404Page');
		}

		if (!$this->_objectManager->get('Magento\Catalog\Helper\Category')->canShow($category)) {
			return $this->_forward('index', 'categorynoroute', 'custom404Page');
		}
		return parent::execute($coreRoute);
	}
  }