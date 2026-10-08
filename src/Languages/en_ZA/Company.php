<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\en_ZA;

use DummyGenerator\Core\Company as BaseCompany;

class Company extends BaseCompany
{
    protected array $legalEntities = [
        '01', '02', '06', '07', '08', '09', '10', '11', '12', '14', '15', '16', '17', '20', '21', '22', '23', '24', '25',
        '26', '30', '31', '80',
    ];

    /**
     * Return a valid company registration number.
     *
     * @return string
     */
    public function companyNumber()
    {
        return sprintf(
            '%s/%s/%s',
            $this->generator->dateTimeBetween('-50 years', 'now')->format('Y'),
            $this->generator->randomNumber(6, true),
            $this->randomizer->randomElement($this->legalEntities),
        );
    }
}
