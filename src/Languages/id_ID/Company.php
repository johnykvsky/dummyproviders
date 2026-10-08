<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\id_ID;

use DummyGenerator\Core\Company as BaseCompany;

class Company extends BaseCompany
{
    protected array $formats = [
        '{{companyPrefix}} {{lastName}}',
        '{{companyPrefix}} {{lastName}} {{lastName}}',
        '{{companyPrefix}} {{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}} {{lastName}} {{companySuffix}}',
    ];

    /** @see http://id.wikipedia.org/wiki/Jenis_badan_usaha */
    protected array $companyPrefix = ['PT', 'Fa', 'CV', 'UD', 'PJ', 'PD', 'Perum', 'Yayasan'];

    /**
     * @see https://www.amesbostonhotel.com/macam-macam-profesi-pekerjaan/
     * @see https://dukcapil.kedirikab.go.id/artikel/Jenis-Pekerjaan_ID10.html
     */
    protected array $jobTitleFormat = [
        'Akuntan', 'Apoteker', 'Arsitek', 'Atlet', 'Belum / Tidak Bekerja', 'Biarawati', 'Bidan', 'Buruh Harian Lepas',
        'Buruh Nelayan / Perikanan', 'Buruh Peternakan', 'Buruh Tani / Perkebunan', 'Desainer', 'Dokter', 'Dosen',
        'Guru', 'Hakim', 'Imam Masjid', 'Industri', 'Jaksa', 'Juru Masak', 'Karyawan BUMD', 'Karyawan BUMN',
        'Karyawan Honorer', 'Karyawan Swasta', 'Kepala Desa', 'Kepolisian RI (POLRI)', 'Kondektur', 'Konstruksi',
        'Konsultan', 'Masinis', 'Mekanik', 'Mengurus Rumah Tangga', 'Montir', 'Nahkoda', 'Nelayan / Perikanan',
        'Notaris', 'Paraji', 'Pastor', 'Pedagang', 'Pegawai Negeri Sipil (PNS)', 'Pelajar / Mahasiswa', 'Pelaut',
        'Pemandu Wisata', 'Pembantu Rumah Tangga', 'Penambang', 'Penata Busana', 'Penata Rambut', 'Penata Rias',
        'Pendeta', 'Peneliti', 'Penerjemah', 'Pengacara', 'Pensiunan', 'Penulis', 'Penyelam', 'Penyiar Radio',
        'Penyiar Televisi', 'Perancang Busana', 'Perangkat Desa', 'Perawat', 'Perdagangan', 'Petani / Pekebun',
        'Peternak', 'Pialang', 'Pilot', 'Pramugari', 'Pramusaji', 'Presiden', 'Programmer', 'Promotor Acara',
        'Psikiater / Psikolog', 'Satpam', 'Seniman', 'Sopir', 'Tabib', 'Tentara Nasional Indonesia (TNI)',
        'Transportasi', 'Tukang Batu', 'Tukang Cukur', 'Tukang Gigi', 'Tukang Jahit', 'Tukang Kayu',
        'Tukang Las / Pandai Besi', 'Tukang Listrik', 'Tukang Sol Sepatu', 'Ustaz / Mubaligh', 'Wakil Presiden',
        'Wartawan', 'Wiraswasta',
    ];

    /** @see http://id.wikipedia.org/wiki/Jenis_badan_usaha */
    protected array $companySuffix = ['(Persero) Tbk', 'Tbk'];

    /**
     * Get company prefix
     *
     * @return string company prefix
     */
    public function companyPrefix(): string
    {
        return $this->randomizer->randomElement($this->companyPrefix);
    }

    /**
     * Get company suffix
     *
     * @return string company suffix
     */
    public function companySuffix(): string
    {
        return $this->randomizer->randomElement($this->companySuffix);
    }
}
