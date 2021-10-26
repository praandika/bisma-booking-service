<?php

namespace App\Exports;

use App\Booking;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BookingFilterExport implements FromQuery, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function awal(string $awal)
    {
        $this->awal = $awal;
        
        return $this;
    }

    public function akhir(string $akhir)
    {
        $this->akhir = $akhir;
        
        return $this;
    }

    public function query()
    {
        return Booking::query()
        ->select('dealer_kode','dealer','tanggal','waktu','type','nama','kontak','nopol','service','keluhan')
        ->join('dealers','bookings.dealer_kode','=','dealers.kode_dealer')
        ->whereBetween('tanggal',[$this->awal,$this->akhir])
        ->orderBy('bookings.id_booking','asc');
    }

    public function headings(): array
    {
        return [
        	'Dealer Code',
            'Dealer Name',
            'Date',
            'Time',
            'Type',
            'Name',
            'Contact',
            'Plate No',
            'Service',
            'Complaint'
        ];
    }
}
