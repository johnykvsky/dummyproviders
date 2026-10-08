<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\fi_FI;

use DummyGenerator\Core\PhoneNumber as BasePhoneNumber;

class PhoneNumber extends BasePhoneNumber
{
    /** @see https://www.viestintavirasto.fi/en/internettelephone/numberingoftelecommunicationsnetworks/localcallsandtelecommunicationsareas/mapoftelecommunicationsareas.html */
    protected array $landLineareaCodes = [
        '02',
        '03',
        '05',
        '06',
        '08',
        '09',
        '013',
        '014',
        '015',
        '016',
        '017',
        '018',
        '019',
    ];

    /** @see https://www.viestintavirasto.fi/en/internettelephone/numberingoftelecommunicationsnetworks/mobilenetworks/mobilenetworkareacodes.html */
    protected array $mobileNetworkAreaCodes = [
        '040',
        '050',
        '044',
        '045',
    ];

    protected array $numberFormats = [
        '### ####',
        '#######',
    ];

    protected array $formats = [
        '+358 ({{ e164MobileNetworkAreaCode }}) {{ numberFormat }}',
        '+358 {{ e164MobileNetworkAreaCode }} {{ numberFormat }}',
        '+358 ({{ e164landLineAreaCode }}) {{ numberFormat }}',
        '+358 {{ e164landLineAreaCode }} {{ numberFormat }}',
        '{{ mobileNetworkAreaCode }}{{ separator }}{{ numberFormat }}',
        '{{ landLineAreaCode }}{{ separator }}{{ numberFormat }}',
    ];

    /** @return string */
    public function landLineAreaCode()
    {
        return $this->randomizer->randomElement($this->landLineareaCodes);
    }

    /** @return string */
    public function e164landLineAreaCode()
    {
        return substr($this->randomizer->randomElement($this->landLineareaCodes), 1);
    }

    /** @return string */
    public function mobileNetworkAreaCode()
    {
        return $this->randomizer->randomElement($this->mobileNetworkAreaCodes);
    }

    /** @return string */
    public function e164MobileNetworkAreaCode()
    {
        return substr($this->randomizer->randomElement($this->mobileNetworkAreaCodes), 1);
    }

    /** @return string */
    public function numberFormat()
    {
        return $this->randomizer->randomElement($this->numberFormats);
    }

    /** @return string */
    public function separator()
    {
        return $this->randomizer->randomElement([' ', '-']);
    }
}
