<?php
  /**
   * DCKAP_Custom404Page - Version 1.0.0
   * Copyright (c) 2015 DCKAP. All Rights Reserved.
   * Author: DCKAP
   * Websites: http://www.dckap.com
   */

  namespace DCKAP\Custom404Page\Block;
 
 class CategoryNoRoute extends \Magento\Framework\View\Element\Template
 {
	/**
	* @param \Magento\Framework\View\Element\Template\Context $context
	*/
	public function __construct(\Magento\Framework\View\Element\Template\Context $context) {
		parent::__construct($context);
	}

	/**
	* @return $this
	*/
	public function _prepareLayout() {
		return parent::_prepareLayout();
	}
  }