<?php
class Gspann_ABHISHEK_Adminhtml_AbhishekbackendController extends Mage_Adminhtml_Controller_Action
{

	protected function _isAllowed()
	{
		//return Mage::getSingleton('admin/session')->isAllowed('abhishek/abhishekbackend');
		return true;
	}

	public function indexAction()
    {
       $this->loadLayout();
	   $this->_title($this->__("GSPANN"));
	   $this->renderLayout();
    }
}