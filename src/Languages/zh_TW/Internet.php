<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\zh_TW;

use DummyGenerator\Core\Internet as BaseInternet;

class Internet extends BaseInternet
{
    public function userName(): string
    {
        return $this->generator->userName();
    }

    public function domainWord(): string
    {
        return $this->generator->domainWord();
    }
}
