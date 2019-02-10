<script type="text/javascript">
	$(document).ready(function() {
	    var table = $('#tabelAuthor').DataTable( {
	        "processing": true,
	        "serverSide": true,
	        "ajax": "action/dataTables.php",
	        "columnDefs": [ {
	            "targets": -1,
	            "data": null,
	            "defaultContent": "<button class='btn btn-success btn-xs tblEdit'>Edit / Delete</button>"
	        }],
	        "fnRowCallback": function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
		       var index = iDisplayIndex +1;
		       $('td:eq(0)',nRow).html(index);
		       return nRow;
		    }
	    });

	    $('#tabelAuthor tbody').on( 'click', '.tblEdit', function () {
	        var data = table.row( $(this).parents('tr') ).data();
	        window.location.href = "edit.php?id="+ data[4];
	    } );
	});
</script>
<h4>View Data Arsip</h4>
<i>Tombol <button class='btn btn-success btn-xs'>Edit / Delete</button> Hanya dummy dengan id author</i>
<div class="row" style="margin-top: 30px">
	<div class="col-lg-12">
		<table id="tabelAuthor" class="table table-bordered table-hover">
			<thead>
				<tr>
                    <th></th>
                    <th>Kode</th>
					<th>Nama Lab</th>
					<th>Nama Alat</th>
					<th>Nama Dokumen</th>
					<th>Nama File</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<tr>
                    <td></td>
                    <th>Nama Lab</th>
					<th>Nama Alat</th>
					<th>Nama Dokumen</th>
					<th>Nama File</th>

					<td></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>