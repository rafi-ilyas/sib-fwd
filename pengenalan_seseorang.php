<?php
function sapaan($nama = "Tamu", $waktu = null) {
    if ($waktu == "pagi") {
        echo "Selamat pagi, $nama! Semoga harimu menyenangkan.";
    }
    
    elseif ($waktu == "siang") {
        echo "Sealamt siang, $nama! Semoga harimu senin terus.";
    }

    elseif ($waktu == "sore") {
        echo "Selamat sore, $nama! Semoga Soremu bisa melihat sunset.";
    }

    elseif ($waktu == "malam") {
        echo "Selamat malam, $nama! Semoga Jalan Jalanmu menyenangkan.";
    }

    else {
        echo "Halo, $nama! Selamat datang!!";
    }
}

sapaan("Raul", "Jarwo");
sapaan("Gondri", "Botak");
sapaan("Agus");
sapaan();





?>