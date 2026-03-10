<?php

// Interface
interface Notifikasi {
    public function kirim();
}

// Implementasi Class - Email
class Email implements Notifikasi {
    public function kirim() {
        echo "Notifikasi dikirim melalui Email<br>";
    }
}

// Implementasi Class - SMS
class SMS implements Notifikasi {
    public function kirim() {
        echo "Notifikasi dikirim melalui SMS<br>";
    }
}

// Implementasi Class - WhatsApp
class WhatsApp implements Notifikasi {
    public function kirim() {
        echo "Notifikasi dikirim melalui WhatsApp<br>";
    }
}

// --- Contoh Pemanggilan ---
$notifEmail = new Email();
$notifSMS = new SMS();
$notifWA = new WhatsApp();

$notifEmail->kirim();
$notifSMS->kirim();
$notifWA->kirim();

?>