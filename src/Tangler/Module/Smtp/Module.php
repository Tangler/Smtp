<?php

namespace Tangler\Module\Smtp;

use Tangler\Core\AbstractModule;
use Tangler\Core\Interfaces\ModuleInterface;

class Module extends AbstractModule implements ModuleInterface
{
    public function Init()
    {
        $this->setKey('smtp');
        $this->setLabel('SMTP module');
        $this->setDescription('This is the SMTP module that allows you to send emails');
        $this->setImageUrl('http://www.inboundnow.com/wp-content/uploads/2012/12/outgoing-email-icon-300x240.jpg');

        // No triggers
        $this->setTriggers(array());

        $this->setActions(array(
            new \Tangler\Module\Smtp\SendEmailAction()
        ));
    }
}
