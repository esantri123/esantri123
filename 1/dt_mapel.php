				<thead>
					<tr>
						<th>Kode Mata Pelajaran</th>
						<th>Nama Mata Pelajaran</th>
						<th>Jumlah Jam</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$querymatakuliah = mysqli_query ($konek, "SELECT * FROM matakuliah");
						if($querymatakuliah == false){
							die ("Terdapat Kesalahan : ". mysqli_error($konek));
						}
						while($matakuliah = mysqli_fetch_array($querymatakuliah)){
							echo "
								<tr>
									<td>$matakuliah[Kode_Matakuliah]</td>
									<td>$matakuliah[Nama_Matakuliah]</td>
									<td>$matakuliah[SKS]</td>
									<td>
										<a href='#' class='open_modal' id='$matakuliah[Kode_Matakuliah]'>Edit</a> |
										<a href='#' onClick='confirm_delete(\"mapel_delete.php?Kode_Matakuliah=$matakuliah[Kode_Matakuliah]\")'>Delete</a>
									</td>
								</tr>";
						}
					?>
				</tbody>