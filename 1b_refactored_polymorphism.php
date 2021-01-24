<?php

interface BalokInterface
{
    public function tendensiSentral($panjang, $lebar, $tinggi);
}

class Volume implements BalokInterface
{
    public function tendensiSentral($panjang, $lebar, $tinggi)
    {
        echo 'Volume : ' . ($panjang * $lebar * $tinggi);
    }
}

class LuasPermukaan implements BalokInterface
{
    public function tendensiSentral($panjang, $lebar, $tinggi)
    {
        echo 'Luas Permukaan : ' . (2 * (($panjang * $lebar) + ($panjang * $tinggi) + ($lebar * $tinggi)));
    }
}

class NoTendensiSentral implements BalokInterface
{
    public function tendensiSentral($panjang, $lebar, $tinggi)
    {
        echo 'Anda tidak memilih.';
    }
}

class BalokPilihan
{
    public static function tendensiSentralUntuk($tendensiSentral)
    {
        switch ($tendensiSentral) {
            case 'volume':
                return new Volume;
            case 'luas permukaan':
                return new LuasPermukaan;
            default:
                return new NoTendensiSentral;
        }
    }
}

$panjang = 10;
$lebar = 30;
$tinggi = 7;
BalokPilihan::tendensiSentralUntuk('volume')->tendensiSentral($panjang, $lebar, $tinggi);
echo '<br>';
BalokPilihan::tendensiSentralUntuk('luas permukaan')->tendensiSentral($panjang, $lebar, $tinggi);
