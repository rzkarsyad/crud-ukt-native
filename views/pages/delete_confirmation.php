<?php

include '../../connection.php';
?>

<!-- Modal -->
<div class="modal fade" id="modalHapus<?= $no ?>" tabindex="-1" aria-labelledby="modalHapusLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalHapusLabel">Hapus Data Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="mahasiswa_delete.php" method="post">
                <input type="hidden" name="nim" value="<?= $d['nim'] ?>">
                <div class="modal-body">
                    Apakah kamu yakin ingin menghapus data mahasiswa <b><?= $d['nama'] ?></b> dengan nim <b><?= $d['nim'] ?></b> ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger" name="hapusdata">Iya</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalHapusUKT<?= $no ?>" tabindex="-1" aria-labelledby="modalHapusUKTLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalHapusUKTLabel">Hapus Data UKT</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="ukt_delete.php" method="post">
                <input type="hidden" name="id" value="<?= $d['id'] ?>">
                <div class="modal-body">
                    Apakah kamu yakin ingin menghapus data UKT mahasiswa dengan nama <b><?= $d['nama'] ?>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger" name="hapusdataUKT">Iya</button>
                </div>
            </form>
        </div>
    </div>
</div>