<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\ms_MY;

use DummyGenerator\Core\Payment as BasePayment;

class Payment extends BasePayment
{
    protected array $bankFormats = [
        '{{localBank}}',
        '{{foreignBank}}',
        '{{governmentBank}}',
    ];

    /** @see http://www.muamalat.com.my/consumer-banking/internet-banking/popup-ibg.html */
    protected array $bankAccountNumberFormats = [
        '##########',
        '###########',
        '############',
        '#############',
        '##############',
        '###############',
        '################',
    ];

    /** @see https://en.wikipedia.org/wiki/List_of_banks_in_Malaysia */
    protected array $localBanks = [
        'Affin Bank',
        'Alliance Bank',
        'AmBank',
        'CIMB Bank',
        'Hong Leong Bank ',
        'Maybank',
        'Public Bank',
        'RHB Bank',
    ];

    /** @see https://en.wikipedia.org/wiki/List_of_banks_in_Malaysia#List_of_foreign_banks_(commercial) */
    protected array $foreignBanks = [
        'Bangkok Bank Berhad',
        'Bank of America Malaysia Berhad',
        'Bank of China (Malaysia) Berhad',
        'Bank of Tokyo-Mitsubishi UFJ (Malaysia) Berhad',
        'BNP Paribas Malaysia Berhad',
        'China Construction Bank',
        'Citibank Berhad',
        'Deutsche Bank (Malaysia) Berhad',
        'HSBC Bank Malaysia Berhad',
        'India International Bank (Malaysia) Berhad',
        'Industrial and Commercial Bank of China (Malaysia) Berhad',
        'J.P. Morgan Chase Bank Berhad',
        'Mizuho Bank (Malaysia) Berhad',
        'National Bank of Abu Dhabi Malaysia Berhad',
        'OCBC Bank (Malaysia) Berhad',
        'Standard Chartered Bank Malaysia Berhad',
        'Sumitomo Mitsui Banking Corporation Malaysia Berhad',
        'The Bank of Nova Scotia Berhad',
        'United Overseas Bank (Malaysia) Bhd.',
    ];

    /** @see https://en.wikipedia.org/wiki/List_of_banks_in_Malaysia#Development_Financial_Institutions_(Government-owned_banks)_(full_list) */
    protected array $governmentBanks = [
        'Agro Bank Malaysia',
        'Bank Pembangunan Malaysia Berhad (BPMB) (The development bank of Malaysia)',
        'Bank Rakyat',
        'Bank Simpanan Nasional',
        'Credit Guarantee Corporation Malaysia Berhad (CGC)',
        'Export-Import Bank of Malaysia Berhad (Exim Bank)',
        'Malaysia Debt Ventures Berhad',
        'Malaysian Industrial Development Finance Berhad (MIDF)',
        'SME Bank Berhad',
        'Sabah Development Bank Berhad (SDB)',
        'Sabah Credit Corporation (SCC)',
        'Tabung Haji',
    ];

    /** @see https://en.wikipedia.org/wiki/List_of_banks_in_Malaysia#Investment-Link_Funds_(Insurance_Companies_-_Takaful_included) */
    protected array $insuranceCompanies = [
        'AIA Malaysia',
        'AIG Malaysia',
        'Allianz Malaysia',
        'AXA AFFIN Life Insurance',
        'Berjaya General Insurance',
        'Etiqa Insurance',
        'Great Eastern Insurance',
        'Hong Leong Assurance',
        'Kurnia Insurans Malaysia',
        'Manulife Malaysia Insurance',
        'MSIG Malaysia',
        'Prudential Malaysia',
        'Tokio Marine Life Malaysia Insurance',
        'UNI.ASIA General Insurance',
        'Zurich Insurance Malaysia',
    ];

    /** @see http://www.bankswiftcode.org/malaysia/ */
    protected array $swiftCodes = [
        'ABNAMY2AXXX', 'ABNAMYKLPNG', 'ABNAMYKLXXX', 'AFBQMYKLXXX', 'AIBBMYKLXXX',
        'AISLMYKLXXX', 'AMMBMYKLXXX', 'ARBKMYKLXXX',
        'BIMBMYKLXXX', 'BISLMYKAXXX', 'BKCHMYKLXXX', 'BKKBMYKLXXX', 'BMMBMYKLXXX',
        'BNMAMYKLXXX', 'BNPAMYKAXXX', 'BOFAMY2XLBN', 'BOFAMY2XXXX', 'BOTKMYKAXXX',
        'BOTKMYKXXXX',
        'CHASMYKXKEY', 'CHASMYKXXXX', 'CIBBMYKAXXX', 'CIBBMYKLXXX', 'CITIMYKLJOD',
        'CITIMYKLLAB', 'CITIMYKLPEN', 'CITIMYKLXXX', 'COIMMYKLXXX', 'CTBBMYKLXXX',
        'DABEMYKLXXX', 'DBSSMY2AXXX', 'DEUTMYKLBLB', 'DEUTMYKLGMO', 'DEUTMYKLISB',
        'DEUTMYKLXXX',
        'EIBBMYKLXXX', 'EOBBMYKLXXX', 'EXMBMYKLXXX',
        'FEEBMYKAXXX',
        'HBMBMYKLXXX', 'HDSBMY2PSEL', 'HDSBMY2PXXX', 'HLBBMYKLIBU', 'HLBBMYKLJBU',
        'HLBBMYKLKCH', 'HLBBMYKLPNG', 'HLBBMYKLXXX', 'HLIBMYKLXXX', 'HMABMYKLXXX',
        'HSBCMYKAXXX', 'HSTMMYKLGWS', 'HSTMMYKLXXX',
        'KAFBMYKLXXX', 'KFHOMYKLXXX',
        'MBBEMYKAXXX', 'MBBEMYKLBAN', 'MBBEMYKLBBG', 'MBBEMYKLBWC', 'MBBEMYKLCSD',
        'MBBEMYKLIPH', 'MBBEMYKLJOB', 'MBBEMYKLKEP', 'MBBEMYKLKIN', 'MBBEMYKLKLC',
        'MBBEMYKLMAL', 'MBBEMYKLPEN', 'MBBEMYKLPGC', 'MBBEMYKLPJC', 'MBBEMYKLPJY',
        'MBBEMYKLPKG', 'MBBEMYKLPSG', 'MBBEMYKLPUD', 'MBBEMYKLSAC', 'MBBEMYKLSBN',
        'MBBEMYKLSHA', 'MBBEMYKLSUB', 'MBBEMYKLWSD', 'MBBEMYKLXXX', 'MBBEMYKLYSL',
        'MFBBMYKLXXX', 'MHCBMYKAXXX',
        'NOSCMY2LXXX', 'NOSCMYKLXXX',
        'OABBMYKLXXX', 'OCBCMYKLXXX', 'OSKIMYKLXXX',
        'PBBEMYKLXXX', 'PBLLMYKAXXX', 'PCGLMYKLXXX', 'PERMMYKLXXX', 'PHBMMYKLXXX',
        'PTRDMYKLXXX', 'PTROMYKLFSD', 'PTROMYKLXXX',
        'RHBAMYKLXXX', 'RHBBMYKAXXX', 'RHBBMYKLXXX', 'RJHIMYKLXXX',
        'SCBLMYKXLAB', 'SCBLMYKXXXX', 'SMBCMYKAXXX',
        'UIIBMYKLXXX', 'UOVBMYKLCND', 'UOVBMYKLXXX',
    ];

    /** @see https://en.wikipedia.org/wiki/Malaysian_ringgit */
    protected array $currencyCode = [
        'MYR',
    ];

    protected array $currencySymbol = [
        'RM',
    ];

    protected array $currencySymbols = [
        'RM',
    ];

    protected array $currencyNames = [
        'Ringgit Malaysia',
    ];

    /**
     * Return a Malaysian Bank
     *
     * @example 'Maybank'
     */
    public function bank(): string
    {
        $formats = $this->randomizer->randomElement($this->bankFormats);

        return $this->generator->parse($formats);
    }

    /**
     * Return a Malaysian Bank account number
     *
     * @example '1234567890123456'
     */
    public function bankAccountNumber(): string
    {
        $formats = $this->randomizer->randomElement($this->bankAccountNumberFormats);

        return $this->replacer->numerify($formats);
    }

    /**
     * Return a Malaysian Local Bank
     *
     * @example 'Public Bank'
     */
    public function localBank(): string
    {
        return $this->randomizer->randomElement($this->localBanks);
    }

    /**
     * Return a Malaysian Foreign Bank
     *
     * @example 'Citibank Berhad'
     */
    public function foreignBank(): string
    {
        return $this->randomizer->randomElement($this->foreignBanks);
    }

    /**
     * Return a Malaysian Government Bank
     *
     * @example 'Bank Simpanan Nasional'
     */
    public function governmentBank(): string
    {
        return $this->randomizer->randomElement($this->governmentBanks);
    }

    /**
     * Return a Malaysian insurance company
     *
     * @example 'AIA Malaysia'
     */
    public function insurance(): string
    {
        return $this->randomizer->randomElement($this->insuranceCompanies);
    }

    /**
     * Return a Malaysian Bank SWIFT Code
     *
     * @example 'MBBEMYKLXXX'
     */
    public function swiftCode(): string
    {
        return $this->replacer->toUpper($this->replacer->lexify($this->randomizer->randomElement($this->swiftCodes)));
    }

    /**
     * Return the Malaysian currency symbol
     *
     * @example 'RM'
     */
    public function currencySymbol(): string
    {
        return $this->randomizer->randomElement($this->currencySymbol);
    }
}
