<?php
function kelulusan($_nilai)
{
    // isi fungsi kelulusan
    $nilai_akhir = $_nilai;
    if ($nilai_akhir >= 85 && $nilai_akhir <= 100) {
        return "Lulus";
    } elseif ($nilai_akhir >= 70 && $nilai_akhir <= 84) {
        return "Lulus";
    } elseif ($nilai_akhir >= 56 && $nilai_akhir <= 69) {
        return "Lulus";
    } elseif ($nilai_akhir >= 36 && $nilai_akhir <= 55) {
        return "Tidak Lulus";
    } elseif ($nilai_akhir == 0 && $nilai_akhir <= 35) {
        return "Tidak Lulus";
    } else {
        return "Tidak Valid";
    }
}
function grade($_nilai)
{
    // isi fungsi grade

    $nilai_akhir = $_nilai;
    if ($nilai_akhir >= 85 && $nilai_akhir <= 100) {
        return "Sangat Memuaskan";
    } elseif ($nilai_akhir >= 70 && $nilai_akhir <= 84) {
        return "Memuaskan";
    } elseif ($nilai_akhir >= 56 && $nilai_akhir <= 69) {
        return "Cukup";
    } elseif ($nilai_akhir >= 36 && $nilai_akhir <= 55) {
        return "Kurang";
    } elseif ($nilai_akhir == 0 && $nilai_akhir <= 35) {
        return "Sangat Kurang";
    } else {
        return "Tidak Ada";
    }
}

function predikat($_nilai) // argumen nya E,D,C,B,A
{
    // isi fungsi predikat

    $nilai_akhir = $_nilai;
    if ($nilai_akhir >= 85 && $nilai_akhir <= 100) {
        return "A";
    } elseif ($nilai_akhir >= 70 && $nilai_akhir <= 84) {
        return "B";
    } elseif ($nilai_akhir >= 56 && $nilai_akhir <= 69) {
        return "C";
    } elseif ($nilai_akhir >= 36 && $nilai_akhir <= 55) {
        return "D";
    } elseif ($nilai_akhir == 0 && $nilai_akhir <= 35) {
        return "E";
    } else {
        return "I";
    }
}
