<?php

class BalokPilihan
{
    public function volume($panjang, $lebar, $tinggi)
    {
        echo 'Volume : ' . ($panjang * $lebar * $tinggi);
    }

    public function luasPermukaan($panjang, $lebar, $tinggi)
    {
        echo 'Luas Permukaan : ' . (2 * (($panjang * $lebar) + ($panjang * $tinggi) + ($lebar * $tinggi)));
    }

    public function noChoice($panjang, $lebar, $tinggi)
    {
        echo 'Anda tidak memilih.';
    }

    public function tendensiSentralUntuk($tendensiSentral, $panjang, $lebar, $tinggi)
    {
        switch ($tendensiSentral) {
            case 'volume':
                $this->volume($panjang, $lebar, $tinggi);
            case 'luas permukaan':
                $this->luasPermukaan($panjang, $lebar, $tinggi);
            default:
                $this->noChoice($panjang, $lebar, $tinggi);
        }
    }
}

$panjang = 10;
$lebar = 30;
$tinggi = 7;
$tendensiSentral = new BalokPilihan;
$tendensiSentral->tendensiSentralUntuk('volume', $panjang, $lebar, $tinggi);
