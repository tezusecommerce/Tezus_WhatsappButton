<?php

namespace Tezus\WhatsappButton\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Contact extends Template
{

    public function __construct(
        ScopeConfigInterface $scopeConfig,
        Context $context,
        array $data = []
    ) {
        $this->_scopeConfig = $scopeConfig;
        parent::__construct($context, $data);
    }

    public function getIsActive()
    {
        return $this->_scopeConfig->getValue('tezusWhatsappContact/tezusWhatsappContactGroup/active');
    }

    public function getWhatsappContact()
    {
        return $this->_scopeConfig->getValue('tezusWhatsappContact/tezusWhatsappContactGroup/whatsapp_number');
    }    
}
