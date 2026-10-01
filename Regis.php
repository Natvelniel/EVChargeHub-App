<?php
class Regis {
    private $db;
    public function __construct($db) {
        $this->db = $db;
    }

    public function buat($nim) {
        $q = $this->db->prepare(
            "INSERT INTO registrasi (nim, tgl) VALUES (?, CURDATE())"
        );
        $q->bind_param("s", $nim);
        $q->execute();
        return $q->insert_id;
    }

    public function getLastReg($nim) {
    $q = $this->db->prepare(
        "SELECT no_reg FROM registrasi
         WHERE nim = ?
         ORDER BY no_reg DESC
         LIMIT 1"
    );
    $q->bind_param("s", $nim);
    $q->execute();
    return $q->get_result()->fetch_assoc();
}
}
?>