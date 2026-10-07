<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\el_GR;

use DummyGenerator\Core\Company as BaseCompany;

class Company extends BaseCompany
{
    protected array $companySuffix = [
        'Ο.Ε',
        'Ε.Ε',
        'Α.Ε',
        'Ε.Π.Ε',
    ];

    protected array $companyFormats = [
        '{{lastName}} {{firstName}} {{companySuffix}}',
        '{{lastName}}-{{firstName}}',
    ];

    protected array $grafm = ['#########'];

    protected array $doy = [
        'Α\' Αθήνας',
        'Β\' Αθήνας',
        'Γ\' Αθήνας',
        'ΣΤ\' Αθήνας',
        'Γαλάτσιου',
        'Α\' Πειραιά',
        'Β\' Πειραιά',
        'Γ\' Πειραιά',
        'Α\' Θεσσαλονίκης',
        'Β\' Θεσσαλονίκης',
        'Γλυφάδας',
        'Ωροπού',
        'Καλιθέας',
        'Αγίου Δημητρίου',
        'Νέας Σμύρνης',
        'Αμαρουσίου',
        'Θήρας',
        'Αμοργού',
        'Πατρών',
        'ΔΟΥ ΠΛΟΙΩΝ',
        'ΦΑΕΕ ΑΘΗΝΩΝ',
    ];

    protected array $object = [
        'Προγραμματιστής',
        'Δικηγόρος',
        'Γιατρός',
        'Γραφίστας',
        'Αρχαιολόγος',
        'Εκπαιδευτικός',
        'Μεταφραστής',
        'Μηχανολόγος-μηχανικός',
        'Αρχιτέκτονας',
        'Δημοσιογράφος',
        'Υπηρεσίες Διαδικτύου',
        'Ραδιοφωνικές παραγωγές',
        'Καραγκιοζοπαίχτης',
        'Κουλουράς',
        'Κομπάρσος',
        'Καλλιτεχνικός πράκτορας',
        'Εισαγωγαί-εξαγωγαί',
        'Ωρολογοποιός',
        'Καθεκλοποιός',
    ];

    /**
     * @example 'Αθήνας'
     */
    public function doy()
    {
        return $this->randomizer->randomElement($this->doy);
    }

    /**
     * Return The profession of a company
     *
     * @example 'Δημοσιογράφος'
     */
    public function object()
    {
        return $this->randomizer->randomElement($this->object);
    }

}
