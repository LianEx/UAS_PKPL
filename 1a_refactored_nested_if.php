<?php
// Kasus Pendaftaran KKN
class KKN
{
    function isJumlahSks($status)
    {
        if ($status < 110) {
            return TRUE;
        }
    }

    function isTahsin($status)
    {
        if ($status < 65) {
            return TRUE;
        }
    }

    function isTbq($status)
    {
        if ($status < 65) {
            return TRUE;
        }
    }

    #Nested If After Refactored
    function main($statusSks, $statusTahsin, $statusTbq)
    {
        if ($this->isJumlahSks($statusSks) == TRUE) {
            return 'SKS Anda Belum Mencukupi, Kuliah Lagi YA!';
        }
        if ($this->isTahsin($statusTahsin) == TRUE) {
            return 'Anda Wajib Mengulang Tahsin';
        }
        if ($this->isTbq($statusTbq) == TRUE) {
            return 'Anda Wajib Mengulang TBQ';
        }

        return 'Selamat Anda Berhasil Mendaftar KKN';
    }
}

$kkn = new KKN;
$withdrawl = $kkn->main(110, 66, 70);
echo $withdrawl;
