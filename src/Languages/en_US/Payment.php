<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\en_US;

use DummyGenerator\Core\Payment as BasePayment;

class Payment extends BasePayment
{
    public function bankAccountNumber(): string
    {
        // Length between 5 and 17, biased towards center
        $length = $this->randomizer->getInt(0, 3) + $this->randomizer->getInt(0, 3) + $this->randomizer->getInt(0, 3) + $this->randomizer->getInt(0, 3) + 5;

        return $this->replacer->numerify(str_repeat('#', $length));
    }

    public function bankRoutingNumber(): string
    {
        $district = $this->randomizer->getInt(1, 12);
        $type = $this->randomizer->randomElement([0, 0, 0, 0, 20, 20, 60]);
        $clearingCenter = $this->randomizer->getInt(1, 9);
        $state = $this->randomizer->getInt(0, 9);
        $institution = $this->generator->randomNumber(4, true);

        $result = sprintf('%02d%01d%01d%04d', $district + $type, $clearingCenter, $state, $institution);

        return $result . $this->calculateRoutingNumberChecksum($result);
    }

    public function calculateRoutingNumberChecksum(string $routing): int
    {
        $sum = (
            7 * ((int) $routing[0] + (int) $routing[3] + (int) $routing[6]) +
            3 * ((int) $routing[1] + (int) $routing[4] + (int) $routing[7]) +
            9 * ((int) $routing[2] + (int) $routing[5])
        );

        return (10 - ($sum % 10)) % 10;
    }
}
