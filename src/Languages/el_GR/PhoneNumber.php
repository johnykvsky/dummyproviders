<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\el_GR;

use DummyGenerator\Core\PhoneNumber as BasePhoneNumber;
use DummyGenerator\Definitions\Calculator\LuhnCalculatorInterface;
use DummyGenerator\Definitions\Randomizer\RandomizerInterface;
use DummyGenerator\Definitions\Replacer\ReplacerInterface;
use DummyGenerator\GeneratorInterface;

/**
 * @see https://en.wikipedia.org/wiki/Telephone_numbers_in_Greece
 * @see https://github.com/giggsey/libphonenumber-for-php/blob/master/src/data/PhoneNumberMetadata_GR.php
 */
class PhoneNumber extends BasePhoneNumber
{
    private GeneratorInterface $generator;

    public function __construct(
        RandomizerInterface $randomizer,
        ReplacerInterface $replacer,
        LuhnCalculatorInterface $luhnCalculator,
        GeneratorInterface $generator,
    ) {
        parent::__construct($randomizer, $replacer, $luhnCalculator);

        $this->generator = $generator;
    }

    protected array $internationalCallPrefixes = ['', '+30'];

    protected array $formats = [
        '{{fixedLineNumber}}',
        '{{mobileNumber}}',
        '{{personalNumber}}',
        '{{tollFreeNumber}}',
        '{{sharedCostNumber}}',
        '{{premiumRateNumber}}',
    ];

    protected array $areaCodes = [
        // Zone 22: Central Greece and the Aegean Islands
        2221, 2222, 2223, 2224, 2226, 2227, 2228, 2229,
        2231, 2232, 2233, 2234, 2235, 2236, 2237, 2238,
        2241, 2242, 2243, 2244, 2245, 2246, 2247,
        2251, 2252, 2253, 2254,
        2261, 2262, 2263, 2264, 2265, 2266, 2267, 2268,
        2271, 2272, 2273, 2274, 2275,
        2281, 2282, 2283, 2284, 2285, 2286, 2287, 2288, 2289,
        2291, 2292, 2293, 2294, 2295, 2296, 2297, 2298, 2299,

        // Zone 23: Central Macedonia and Florina
        231,
        2321, 2322, 2323, 2324, 2325, 2327,
        2331, 2332, 2333,
        2341, 2343,
        2351, 2352, 2353,
        2371, 2372, 2373, 2374, 2375, 2376, 2377,
        2381, 2382, 2384, 2385, 2386,
        2391, 2392, 2393, 2394, 2395, 2396, 2397, 2399,

        // Zone 24: Thessaly and West Macedonia (excluding Florina)
        241,
        2421, 2422, 2423, 2424, 2425, 2426, 2427, 2428,
        2431, 2432, 2433, 2434,
        2441, 2443, 2444, 2445,
        2461, 2462, 2463, 2464, 2465, 2467, 2468,
        2491, 2492, 2493, 2494, 2495,

        // Zone 25: East Macedonia and Thrace
        251,
        2521, 2522, 2523, 2524,
        2531, 2532, 2533, 2534, 2535,
        2541, 2542, 2544,
        2591, 2592, 2593, 2594,
        2551, 2552, 2553, 2554, 2555, 2556,

        // Zone 26: West Greece, Ionian Island and Epirus
        261,
        2621, 2622, 2623, 2624, 2625, 2626,
        2631, 2632, 2634, 2635,
        2661, 2662, 2663, 2664, 2665, 2666,
        2691, 2692, 2693, 2694, 2695, 2696,
        2641, 2642, 2643, 2644, 2645, 2646, 2647,
        2651, 2653, 2654, 2655, 2656, 2657, 2658, 2659,
        2671, 2674,
        2681, 2682, 2683, 2684, 2685,

        // Zone 27: Peloponnese and Kythera
        271,
        2721, 2722, 2723, 2724, 2725,
        2731, 2732, 2733, 2734, 2735, 2736,
        2741, 2742, 2743, 2744, 2745, 2746, 2747,
        2751, 2752, 2753, 2754, 2755, 2757,
        2761, 2763, 2765,
        2791, 2792, 2795, 2797,

        // Zone 28: Crete
        281,
        2821, 2822, 2823, 2824, 2825,
        2831, 2832, 2833, 2834,
        2841, 2842, 2843, 2844,
        2891, 2892, 2893, 2894, 2895, 2897,
    ];

    protected array $fixedLineFormats = [
        '{{internationalCodePrefix}}21########',
        '{{internationalCodePrefix}} 21# ### ####',
        '{{internationalCodePrefix}}{{areaCode}}######',
        '{{internationalCodePrefix}} {{areaCode}} ######',
    ];

    protected array $mobileCodes = [
        685, 687, 688, 689,
        690, 691, 693, 694, 695, 696, 697, 698, 699,
    ];

    protected array $mobileFormats = [
        '{{internationalCodePrefix}}{{mobileCode}}#######',
        '{{internationalCodePrefix}} {{mobileCode}} ### ####',
    ];

    protected array $personalFormats = [
        '{{internationalCodePrefix}}70########',
        '{{internationalCodePrefix}} 70 #### ####',
    ];

    protected array $tollFreeFormats = [
        '{{internationalCodePrefix}}800#######',
        '{{internationalCodePrefix}} 800 ### ####',
    ];

    protected array $sharedCostCodes = [801, 806, 812, 825, 850, 875];

    protected array $sharedCostFormats = [
        '{{internationalCodePrefix}}{{sharedCostCode}}#######',
        '{{internationalCodePrefix}} {{sharedCostCode}} ### ####',
    ];

    protected array $premiumRateCodes = [901, 909];

    protected array $premiumRateFormats = [
        '{{internationalCodePrefix}}{{premiumRateCode}}#######',
        '{{internationalCodePrefix}} {{premiumRateCode}} ### ####',
    ];

    /**
     * Generate a country calling code prefix.
     *
     * @return string
     *
     * @example Prefix an empty string: ''
     * @example Prefix the country calling code: '+30'
     * @internal Used to generate phone numbers with or without prefixes.
     */
    public function internationalCodePrefix()
    {
        return $this->randomizer->randomElement($this->internationalCallPrefixes);
    }

    /**
     * Generate an area code for a fixed line number.
     *
     * Doesn't include codes for Greater Athens Metropolitan Area (21#) because
     * this zone uses 3 digits, and phone numbers have a different formatting.
     *
     * Area codes in all the other zones use 4 digits.
     * The capital of each zone uses 3 digits and the 4th digit can be any number.
     * The other areas in each zone use 4 digits, but not every number is valid for the 4th digit.
     *
     * @example Thessaloniki has code '231', so '2310' and '2313' are valid.
     * @example Serres has code '232', but '2326', '2328' and '2329' are not valid.
     */
    public function areaCode(): string
    {
        return $this->replacer->numerify(
            str_pad($this->randomizer->randomElement($this->areaCodes), 4, '#'),
        );
    }

    /**
     * Generate a fixed line number.
     *
     * Numbers can be generated with or without the international code prefix.
     * Numbers can be generated with or without spaces between their parts.
     * Numbers in Athens use a 3-digit area code, and can be formatted as 21# ### ####.
     * Numbers in other areas use a 4-digit area code, and can be formatted as 2### ### ###.
     *
     * @return string
     *
     * @example A number in Athens: '2101234567'
     * @example A number in Thessaloniki: '2310123456'
     * @example A number with spaces in Athens: '210 123 4567'
     * @example A number with spaces in Thessaloniki: '2310 123 456'
     * @example A number with international code prefix: '+302101234567'
     * @example A number with international code prefix and spaces: '+30 2310 123 456'
     */
    public function fixedLineNumber()
    {
        return ltrim($this->replacer->numerify($this->generator->parse(
            $this->randomizer->randomElement($this->fixedLineFormats),
        )));
    }

    /**
     * Generate a code for a mobile number.
     *
     * @return string
     *
     * @internal Used to generate mobile numbers.
     */
    public function mobileCode()
    {
        return $this->randomizer->randomElement($this->mobileCodes);
    }

    /**
     * Generate a mobile number.
     *
     * @example A mobile number: '6901234567'
     * @example A mobile number with spaces: '690 123 4567'
     * @example A mobile number with international code prefix: '+306901234567'
     * @example A mobile number with international code prefix and spaces: '+30 690 123 4567'
     */
    public function mobileNumber(): string
    {
        return ltrim($this->replacer->numerify($this->generator->parse(
            $this->randomizer->randomElement($this->mobileFormats),
        )));
    }

    public function mobilePhoneNumber()
    {
        return $this->replacer->numerify(
            strtr($this->randomizer->randomElement($this->mobileFormats), [
                '{{internationalCodePrefix}}' => $this->internationalCodePrefix(),
                '{{mobileCode}}' => $this->mobileCode(),
            ]),
        );
    }

    /**
     * Generate a personal number.
     *
     * @return string
     *
     * @example A personal number: '7012345678'
     * @example A personal number with spaces: '70 1234 5678'
     * @example A personal number with international code prefix: '+307012345678'
     * @example A personal number with international code prefix and spaces: '+30 70 1234 5678'
     */
    public function personalNumber()
    {
        return ltrim($this->replacer->numerify($this->generator->parse(
            $this->randomizer->randomElement($this->personalFormats),
        )));
    }

    /**
     * Generate a toll-free number.
     *
     * @return string
     *
     * @example A toll-free number: '8001234567'
     * @example A toll-free number with spaces: '800 123 4567'
     * @example A toll-free number with international code prefix: '+308001234567'
     * @example A toll-free number with international code prefix and spaces: '+30 800 123 4567'
     */
    public function tollFreeNumber()
    {
        return ltrim($this->replacer->numerify(
            strtr($this->randomizer->randomElement($this->tollFreeFormats), [
                '{{internationalCodePrefix}}' => $this->internationalCodePrefix(),
            ]),
        ));
    }

    /**
     * Generate a code for a shared-cost number.
     *
     * @return string
     *
     * @internal Used to generate shared-cost numbers.
     */
    public function sharedCostCode()
    {
        return $this->randomizer->randomElement($this->sharedCostCodes);
    }

    /**
     * Generate a shared-cost number.
     *
     * @return string
     *
     * @example A shared-cost number: '8011234567'
     * @example A shared-cost number with spaces: '801 123 4567'
     * @example A shared-cost number with international code prefix: '+308011234567'
     * @example A shared-cost number with international code prefix and spaces: '+30 801 123 4567'
     */
    public function sharedCostNumber()
    {
        return ltrim($this->replacer->numerify($this->generator->parse(
            $this->randomizer->randomElement($this->sharedCostFormats),
        )));
    }

    /**
     * Generate a code for a premium-rate number.
     *
     * @return string
     *
     * @internal Used to generate premium-rate numbers.
     */
    public function premiumRateCode()
    {
        return $this->randomizer->randomElement($this->premiumRateCodes);
    }

    /**
     * Generate a premium-rate number.
     *
     * @return string
     *
     * @example A premium-rate number: '9011234567'
     * @example A premium-rate number with spaces: '901 123 4567'
     * @example A premium-rate number with international code prefix: '+309011234567'
     * @example A premium-rate number with international code prefix and spaces: '+30 901 123 4567'
     */
    public function premiumRateNumber()
    {
        return ltrim($this->replacer->numerify($this->generator->parse(
            $this->randomizer->randomElement($this->premiumRateFormats),
        )));
    }
}
