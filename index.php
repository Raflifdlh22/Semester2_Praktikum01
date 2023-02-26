<?php
$ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
$ns2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
$ns3 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
$ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];

$ar_nilai = [$ns1, $ns2 , $ns3, $ns4];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Daftar Nilai Siswa</title>

    <meta name="description" content="Tabel daftar nilai siswa">
    <meta name="author" content="ChatGPT">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        table {
            width: 100%;
            background-color: #fff;
            border-collapse: collapse;
			
        }
        table thead tr th, 
        table tbody tr td {
            padding: 10px;
            text-align: center;
            font-size: 14px;
            border: 1px solid #dee2e6;
        }
        .btn {
            font-size: 14px;
        }
    </style>

  </head>
  <body>

    <div class="container">
    	<h3 class="text-center mb-4">Daftar Nilai Siswa</h3>
		<table id="tableNilai" class="table table-bordered table-hover">
			<thead class="table-dark">
				<tr>
					<th scope="col">No</th>
					<th scope="col">NIM</th>
					<th scope="col">UTS</th>
					<th scope="col">UAS</th>
					<th scope="col">Tugas</th>
					<th scope="col">Nilai Akhir</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$nomor = 1;
					foreach($ar_nilai as $ns){
						echo '<tr border-color: #FFA800;>
								<td>'.$nomor.'</td>';
								echo '<td class="bg-primary" >'.$ns['nim'].'</td>';
								echo '<td class="bg-success">'.$ns['uts'].'</td>';
								echo '<td class="bg-warning">'.$ns['uas'].'</td>';
								echo '<td class="bg-danger">'.$ns['tugas'].'</td>';
								$nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
								echo '<td class="bg-info">'.number_format($nilai_akhir,2,',','.').'</td>';
								echo '<tr/>';
						$nomor++;
					}
				?>
			</tbody>
		</table>
	</div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    
   
