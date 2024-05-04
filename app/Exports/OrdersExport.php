<?php

namespace App\Exports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class OrdersExport implements  FromCollection,WithHeadings,ShouldAutoSize,WithStyles,WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Order::select(
            'id',
            's_first_name',
            's_last_name',
            's_zip',
            's_address',
            's_city',
            's_state',
            's_dob',
            's_email',
            's_phone',

            'r_first_name',
            'r_last_name',
            'r_zip',
            'r_address',
            'r_city',
            'r_state',
            'r_dob',
            'r_email',
            'r_phone',

            'created_at',
        )->get();
    }

    public function startCell(): string
    {
        return 'B2';
    }

    public function headings(): array
    {
        return [
            'Order No',
            'Sender First Name',
            'Sender Last Name',
            'Sender Zip Code',
            'Sender Address',
            'Sender City',
            'Sender State',
            'Sender Date of Birth',
            'Sender Email',
            'Sender Phone',


            'Receiver First Name',
            'Receiver Last Name',
            'Receiver Zip Code',
            'Receiver Address',
            'Receiver City',
            'Receiver State',
            'Receiver Date of Birth',
            'Receiver Email',
            'Receiver Phone',

            'Date',

        ];
    }

    public function styles(Worksheet $sheet)
    {

        return [
            // Style the first row as bold text.
            1    => [
                'font' => ['bold' => true]
            ],
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $cellRange = 'A1:W1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);
            },
        ];
    }


}
