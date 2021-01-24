<?php
// Kasus Pendaftaran KKN
class KKN
{
    function isJumlahSks($status)
    {
        if ($status >= 110) {
            return TRUE;
        }
    }

    function isTahsin($status)
    {
        if ($status >= 65) {
            return TRUE;
        }
    }

    function isTbq($status)
    {
        if ($status >= 65) {
            return TRUE;
        }
    }

    #Nested if before refactor
    function main($statusSks, $statusTahsin, $statusTbq)
    {
        if ($this->isJumlahSks($statusSks) == TRUE) {
            if ($this->isTahsin($statusTahsin) == TRUE) {
                if ($this->isTbq($statusTbq) == TRUE) {
                    return 'Selamat Anda Berhasil Mendaftar KKN';
                } else {
                    return 'Anda Wajib Mengulang TBQ';
                }
            } else {
                return 'Anda Wajib Mengulang Tahsin';
            }
        } else {
            return 'SKS Anda Belum Mencukupi, Kuliah Lagi YA!';
        }
    }
}

$kkn = new KKN;
$withdrawl = $kkn->main(110, 66, 70);
echo $withdrawl;
