<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'portfolio.index');

Route::get('/cv', function () {
    $escape = static function (string $text): string {
        return str_replace(['\\', '(', ')'], ['\\\\', '\\(', '\\)'], $text);
    };

    $lines = [
        'Ghetsa Ramadhani Riska Arryanti',
        'Fullstack Developer | Software Developer | AI Enthusiast',
        'Informatics Engineering student at Politeknik Negeri Malang',
        'Focus: Laravel, Next.js, Flutter, AI-powered product engineering',
        'Email: ghetsa.arryanti@gmail.com',
        'Github: github.com/Ghetsa',
        'LinkedIn: linkedin.com/in/ghetsa',
    ];

    $text = "BT\n/F1 22 Tf\n72 770 Td\n0.13 0.24 0.65 rg\n(" . $escape($lines[0]) . ") Tj\n0 -38 Td\n0.02 0.09 0.23 rg\n/F1 12 Tf\n(" . $escape($lines[1]) . ") Tj\n0 -24 Td\n(" . $escape($lines[2]) . ") Tj\n0 -24 Td\n(" . $escape($lines[3]) . ") Tj\n0 -24 Td\n(" . $escape($lines[4]) . ") Tj\n0 -24 Td\n(" . $escape($lines[5]) . ") Tj\n0 -24 Td\n(" . $escape($lines[6]) . ") Tj\nET";

    $objects = [
        "1 0 obj << /Type /Catalog /Pages 2 0 R >> endobj\n",
        "2 0 obj << /Type /Pages /Kids [3 0 R] /Count 1 >> endobj\n",
        "3 0 obj << /Type /Page /Parent 2 0 R /MediaBox [0 0 595 842] /Resources << /Font << /F1 4 0 R >> >> /Contents 5 0 R >> endobj\n",
        "4 0 obj << /Type /Font /Subtype /Type1 /BaseFont /Helvetica >> endobj\n",
        "5 0 obj << /Length " . strlen($text) . " >> stream\n" . $text . "\nendstream endobj\n",
    ];

    $pdf = "%PDF-1.4\n";
    $offsets = [0];

    foreach ($objects as $object) {
        $offsets[] = strlen($pdf);
        $pdf .= $object;
    }

    $xrefPosition = strlen($pdf);
    $pdf .= "xref\n0 " . (count($objects) + 1) . "\n";
    $pdf .= "0000000000 65535 f \n";

    foreach (array_slice($offsets, 1) as $offset) {
        $pdf .= sprintf("%010d 00000 n \n", $offset);
    }

    $pdf .= "trailer << /Size " . (count($objects) + 1) . " /Root 1 0 R >>\n";
    $pdf .= "startxref\n{$xrefPosition}\n%%EOF";

    return response($pdf, 200, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'attachment; filename="Ghetsa-Ramadhani-Riska-Arryanti-CV.pdf"',
    ]);
})->name('cv.download');
