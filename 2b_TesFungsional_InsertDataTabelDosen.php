<?php

namespace Tests\Feature\Auth;

namespace App\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class DatabaseDosenTest extends TestCase
{
    use DatabaseTransactions;

    public function test_insert_into_tabel_dosen()
    {
        $dosen = Dosen::create([
            'nipy' => '60121123',
            'nidn' => '3302125552',
            'nama' => 'Dwi Normawati',
            'jabfung' => 'Wakil Rektor 3',
            'email_dosen' => 'dwinormawati@hukum.uad.ac.id',
            'avatar' => 'dwinormawati.jpg'
        ]);

        $this->assertEquals('60121123', $dosen->nipy);
        $this->assertEquals('3302125552', $dosen->nidn);
        $this->assertEquals('Dwi Normawati', $dosen->nama);
        $this->assertEquals('Wakil Rektor 3', $dosen->jabfung);
        $this->assertEquals('dwinormawati@hukum.uad.ac.id', $dosen->email_dosen);
        $this->assertEquals('dwinormawati.jpg', $dosen->avatar);
    }
}
