<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\zh_TW;

use DummyGenerator\Core\Internet as BaseInternet;

/**
 * @deprecated Use {@link \Faker\Provider\Internet} instead
 * @see \Faker\Provider\Internet
 */
class Internet extends BaseInternet
{
    /**
     * @deprecated Use {@link $this->generator->userName()} instead
     * @see $this->generator->userName()
     */
    public function userName(): string
    {
        return $this->generator->userName();
    }

    /**
     * @deprecated Use {@link $this->generator->domainWord()} instead
     * @see $this->generator->domainWord()
     */
    public function domainWord(): string
    {
        return $this->generator->domainWord();
    }

}
