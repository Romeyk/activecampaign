<?php

namespace ByTestGear\ActiveCampaign\Resources;

class ContactAutomation extends Resource
{
    /**
     * The id of the contact automation.
     *
     * @var integer
     */
    public $id;

    /**
     * Contact ID.
     *
     * @var integer
     */
    public $contact;

    /**
     * Automation ID.
     *
     * @var integer
     */
    public $automation;
}
