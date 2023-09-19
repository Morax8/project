<?php

namespace App\Exports;

use App\Models\ppdb;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;



class MyExport implements FromCollection, WithHeadings, ShouldAutoSize, WithStyles // Add WithStyles
{
    public function headings(): array
    {
        return [
            'ID',
            'Jurusan',
            'Mengetahui PPDB',
            'Kerabat',
            'Nama',
            'NIK',
            'Jenis Kelamin',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Agama',
            'Domisili',
            'RT/RW',
            'Kelurahan',
            'Kecamatan',
            'Kota',
            'Anak ke Berapa',
            'Status Rumah',
            'Nomor HP',
            'Akun Sosial Media',
            'Tinggi Badan',
            'Berat Badan',
            'Asal Sekolah',
            'Kota Asal Sekolah',
            'NISN',
            'Tanggal Lulus',
            'Ekstrakurikuler',
            'Nama Ayah',
            'NIK Ayah',
            'Nomor KK',
            'Tempat Lahir Ayah',
            'Tanggal Lahir Ayah',
            'Pendidikan Ayah',
            'Pekerjaan Ayah',
            'Nama Ibu',
            'NIK Ibu',
            'Tempat Lahir Ibu',
            'Tanggal Lahir Ibu',
            'Pendidikan Ibu',
            'Pekerjaan Ibu',
            'Mata Pelajaran Disukai',
            'Tinggal Kelas',
            'Prestasi',
            'Gambar Lingkungan',
            'Kartu Jakarta Pintar (KJP)',
            'Program Indonesia Pintar (PIP)',
            'Created At',
            'Updated At',
        ];
    }

    public function collection()
    {
        return ppdb::all(); // Fetch the data you want to export
    }
    public function styles(Worksheet $sheet)
    {
        // Style the header row (all columns) with a yellow background color and font size
        $sheet->getStyle('1')->applyFromArray([
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => [
                    'rgb' => 'FFFF00', // Yellow color
                ],
            ],
            'font' => [
                'bold' => true,
                'size' => 20, // Adjust the font size here
            ],
        ]);

        // Style the data rows with borders
        $lastRow = $sheet->getHighestRow();
        $sheet->getStyle('2:' . $lastRow)->applyFromArray([
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['argb' => '000000'], // Black color
                ],
            ],

            'font' => [
                'size' => 16,
            ],
        ]);

        // Style the entire worksheet to justify (center) the data
        $sheet->getStyle($sheet->calculateWorksheetDimension())->applyFromArray([
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
            ],
        ]);

        return [];
    }
}
