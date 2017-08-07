<?php


class multiseller extends Module
{
	function __construct()
    {
        $this->name = 'multiseller';
        $this->tab = 'administration';
        $this->author = 'SoftSprint.net';
        $this->module_key = '44873542187effe440a9606087efd6ee';
        $this->version = '1.0.0.0';
        parent::__construct();
        $this->displayName = $this->l('Multi seller');
        $this->description = $this->l('');
    }

    public function inconsistency($return)
    {
        return true;
    }

    public function getContent()
    {

    }
}