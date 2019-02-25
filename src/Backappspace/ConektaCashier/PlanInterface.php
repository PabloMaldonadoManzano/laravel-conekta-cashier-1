<?php

namespace Backappspace\ConektaCashier;

interface PlanInterface
{
    /**
     * Get the Conekta ID for the plan.
     *
     * @return string
     */
    public function getConektaId();
}
