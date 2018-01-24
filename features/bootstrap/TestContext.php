<?php

namespace Features;

use App\Kernel;
use App\Service\TestService;
use Behat\Behat\Context\Context;

class TestContext implements Context
{
    /**
     * @var TestService
     */
    private $service;

    public function __construct($service)
    {
        $this->service = $service;
    }

    /**
     * @When I do nothing
     */
    public function iDoNothing()
    {
    }

    /**
     * @Then I should have access to kernel
     */
    public function iShouldHaveAccessToKernel()
    {
        var_dump($this->service->getText(), ' <-- service argument');
    }
}
