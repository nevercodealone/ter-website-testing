<?php


namespace Pixelink\MyFinisher\Domain\Finishers;

use TYPO3\CMS\Form\Domain\Finishers\AbstractFinisher;


class CustomFinisher extends AbstractFinisher
{
    public function executeInternal()
    {
        // TODO: Implement executeInternal() method.
        $yourCustomOption = $this->parseOption('username');
    }

}