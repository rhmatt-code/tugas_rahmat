<?php
    class rumahsakitBersalin{
        public $pasienRumahSakit, $bayiRumahSakit, $dokterRumahSakit;

        public function __construct(
            $pasien = "Maimunah",
            $bayi = "Aisyah",
            $dokter = "Ibnu"
        )
        {
            $this->pasienRumahSakit = $pasien;
            $this->bayiRumahSakit = $bayi;
            $this->dokterRumahSakit = $dokter;
        }

        public function getData(): array
        {
            $data = [
                'pasien' => $this->pasienRumahSakit,
                'bayi' => $this->bayiRumahSakit,
                'dokter' => $this->dokterRumahSakit
            ];
            return $data;
        }

        public function __destruct()
        {
            echo "Selesai...";
        }
    }

    $rumahsakitBersalin1 = new rumahsakitBersalin();

    echo "Pasien bernama :  " .$rumahsakitBersalin1->getData()['pasien'];
    echo "<br />";
    echo "Telah melahiran ";
    echo "Bayi yang bernama :  " .$rumahsakitBersalin1->getData()['bayi'];
    echo "<br />";
    echo "Yang membantu melahirkan ";
    echo "Dokter yang bernama :  " .$rumahsakitBersalin1->getData()['dokter'];
    echo "<br />";

?>