<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\cs_CZ;

use DummyGenerator\Clock\SystemClockInterface;
use DummyGenerator\Core\DateTime as BaseDateTime;
use DummyGenerator\Definitions\Randomizer\RandomizerInterface;
use DummyGenerator\GeneratorInterface;

/**
 * Czech months and days without setting locale
 */
class DateTime extends BaseDateTime
{
    private GeneratorInterface $generator;

    public function __construct(
        RandomizerInterface $randomizer,
        SystemClockInterface $clock,
        GeneratorInterface $generator,
    ) {
        parent::__construct($randomizer, $clock);

        $this->generator = $generator;
    }

    protected array $days = [
        'neděle', 'pondělí', 'úterý', 'středa', 'čtvrtek', 'pátek', 'sobota',
    ];
    protected array $months = [
        'leden', 'únor', 'březen', 'duben', 'květen', 'červen', 'červenec',
        'srpen', 'září', 'říjen', 'listopad', 'prosinec',
    ];
    protected array $monthsGenitive = [
        'ledna', 'února', 'března', 'dubna', 'května', 'června', 'července',
        'srpna', 'září', 'října', 'listopadu', 'prosince',
    ];
    protected array $formattedDateFormat = [
        '{{dayOfMonth}}. {{monthNameGenitive}} {{year}}',
    ];

    public function monthName($max = 'now'): string
    {
        return $this->months[parent::month($max) - 1];
    }

    public function monthNameGenitive($max = 'now')
    {
        return $this->monthsGenitive[parent::month($max) - 1];
    }

    public function dayOfWeek($max = 'now'): string
    {
        return $this->days[$this->generator->dateTime($max)->format('w')];
    }

    /**
     * @param \DateTime|int|string $max maximum timestamp used as random end limit, default to "now"
     *
     * @return string
     *
     * @example '2'
     */
    public function dayOfMonth($max = 'now'): string
    {
        return $this->generator->dateTime($max)->format('j');
    }

    /**
     * Full date with inflected month
     *
     * @return string
     *
     * @example '16. listopadu 2003'
     */
    public function formattedDate(): string
    {
        $format = $this->randomizer->randomElement($this->formattedDateFormat);

        return $this->generator->parse($format);
    }

}
