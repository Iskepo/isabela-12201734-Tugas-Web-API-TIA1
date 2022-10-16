<?php
$data=file_get_contents ('https://datasekolahapi.herokuapp.com/api/data');
$sekolah=json_decode($data);

$table = "<h1><center>DATA SEKOLAH SD DI JAKARTA KEPULAUAN SERIBU</center></h1>";
$table .= "<table border = 1>";
$table .= "<tr><td>No</td>
				<td>NAMA </td>
				<td>NPSN</td>
				<td>ALAMAT</td>
                <td>KODE POS</td>
                <td>DESA</td>
                <td>KECAMATAN</td>
                <td>KABUPATEN</td>
                <td>PROVINSI</td>
                <td>STATUS</td>
                <td>JENJANG</td>";
                

for ($i = 0; $i <count($sekolah->SD->Jakarta->Kepulauan_Seribu);$i++){
	$no = $i+1;
	$table .= "<tr>
				<td>{$no}</td>
				<td>{$sekolah->SD->Jakarta->Kepulauan_Seribu[$i]->nama}</td>
				<td>{$sekolah->SD->Jakarta->Kepulauan_Seribu[$i]->npsn}</td>
				<td>{$sekolah->SD->Jakarta->Kepulauan_Seribu[$i]->alamat}</td>
                <td>{$sekolah->SD->Jakarta->Kepulauan_Seribu[$i]->kodepos}</td>
                <td>{$sekolah->SD->Jakarta->Kepulauan_Seribu[$i]->desa}</td>
                <td>{$sekolah->SD->Jakarta->Kepulauan_Seribu[$i]->kecamatan}</td>
                <td>{$sekolah->SD->Jakarta->Kepulauan_Seribu[$i]->kabupaten}</td>
                <td>{$sekolah->SD->Jakarta->Kepulauan_Seribu[$i]->provinsi}</td>
                <td>{$sekolah->SD->Jakarta->Kepulauan_Seribu[$i]->status}</td>
                <td>{$sekolah->SD->Jakarta->Kepulauan_Seribu[$i]->jenjang}</td>
				
				
				</tr>";
}
$table .="</table>";
echo $table;


?>