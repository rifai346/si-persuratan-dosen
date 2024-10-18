<?php
require_once __DIR__ . '../../config/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
        <form action="koneksi.php?action=update" method="post">
        <input type="hidden" name="id_cuti" value="<?php echo $tampil['id_cuti'] ?>">
            <tr>
            <td>
            <label>Tanggal</label>
</td>
<td>
            <input type="date" value="<?php echo date('Y-m-d') ?>" readonly name="tgl">
            </td>
            </tr>
            <tr>
            <td>
            <label>Nama</label>
</td>
<td>
            <input type="text" name="nama" value="<?php echo $tampil['nama'] ?>">
            </td>
            </tr>
            <tr>
            <td>
            <label>Jabatan</label>
</td>
<td>
            <input type="text" name="jabatan" value="<?php echo $tampil['jabatan'] ?>">
            </td>
            </tr>
            <tr>
            <td>
            <label>Unit Kerja</label>
</td>
<td>
            <input type="text" name="unit_kerja" value="<?php echo $tampil['unit_kerja'] ?>">
            </td>
            </tr>
            <tr>
            <td>
            <label>Nip</label>
</td>
<td>
            <input type="text" name="nip" value="<?php echo $tampil['nip'] ?>" >
            </td>
            </tr>
            <tr>
            <td>
            <label>Masa Kerja</label>
</td>
<td>
            <input type="text" name="masa_kerja" value="<?php echo $tampil['masa_kerja'] ?>">
            </td>
            </tr>
            <tr>
            <td>
            <label>Jenis Cuti</label>
</td>
<td>
            <select name="id_jenis_cuti" >
            <option value="1" <?php $tampil['id_jenis_cuti'] = 1 ? 'selected' : ''?>><?php echo $pilih->jenis(1)?></option>
            <option value="2" <?php $tampil['id_jenis_cuti'] = 2 ? 'selected' : ''?>><?php echo $pilih->jenis(2)?></option>
            </select>
            </td>
            </tr>
            <tr>
            <td>
            <label>Alasan Cuti</label>
</td>
<td>
            <textarea name="alasan_cuti"><?php echo $tampil['alasan_cuti'] ?></textarea>
            </td>
            </tr>
            <tr>
            <td>
            <label>Catatan Cuti</label>
</td>
<td>
            <select name="id_catatan_cuti" >
            <option value="1" <?php $tampil['id_catatan_cuti'] = 1 ? 'selected' : ''?>><?php echo $pilih->catatan(1)?></option>
            <option value="2" <?php $tampil['id_catatan_cuti'] = 2 ? 'selected' : ''?>><?php echo $pilih->catatan(2)?></option>
            </select>
            </td>
            </tr>
            <tr>
            <td>
            <label>Alamat selama cuti</label>
</td>
<td>
            <textarea name="alamat_selama_cuti"><?php echo $tampil['alamat_selama_cuti'] ?></textarea>
            </td>
            </tr>
            <tr>
            <td>
            <label>Perubahan</label>
</td>
<td>
            <input type="text" name="perubahan" value="<?php echo $tampil['perubahan'] ?>">
            </td>
            </tr>
            <tr>
            <td>
            <label>Ditangguhkan</label>
</td>
<td>
            <input type="text" name="ditangguhkan" value="<?php echo $tampil['ditangguhkan'] ?>">
            </td>
            </tr>
            <tr>
            <td>
            <label>Tanda Tangan Dosen</label>
</td>
<td>
            <input type="text" name="ttd_dsn" value="<?php echo $tampil['ttd_dsn'] ?>">
            </td>
            </tr>
            <tr>
            <td>
            <label>Tanda Tangan Atasan</label>
</td>
<td>
            <input type="text" name="ttd_atasan" value="<?php echo $tampil['ttd_atasan'] ?>">
            </td>
            </tr>
            <tr>
            <td>
            <label>Awal Cuti</label>
</td>
<td>
            <input type="date" name="awal_cuti" value="<?php echo $tampil['awal_cuti'] ?>">
            </td>
            </tr>
            <tr>
            <td>
            <label>Akhir Cuti</label>
</td>
<td>
            <input type="date" name="akhir_cuti" value="<?php echo $tampil['akhir_cuti'] ?>">
            </td>
            </tr>
            <tr>
            <td>
            <label>Status</label>
</td>
<td>
            <input type="text" name="status" value="<?php echo $tampil['status'] ?>">
            </td>
            </tr>
            <tr>
            <td>
            <label>Telepon</label>
</td>
<td>
            <input type="text" name="telepon" value="<?php echo $tampil['telepon'] ?>">
            </td>
            </tr>
            <tr>
            <td>
            <label>Keterangan</label>
</td>
<td>
            <input type="text" name="keterangan" value="<?php echo $tampil['keterangan'] ?>">
            </td>
            </tr>
            <tr>
            <td>
            <label>Dosen</label>
</td>
<td>
            <select name="dosen_id" >
            <option selected>pilih</option>
            <option value="1" <?php $tampil['dosen_id'] = 1 ? 'selected' : ''?>>Dosen TI</option>
            <option value="2" <?php $tampil['dosen_id'] = 1 ? 'selected' : ''?>>Dosen Elektro</option>
            </select>
            </td>
            </tr>
            <tr>
                <td>
            <a href="index.php"><input type="button" value="kembali"></a>
            <button type="submit" name="submit">Submit</button>
</td>
            </tr>
        </form>
    </table>
</body>
</html>