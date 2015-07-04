@extends('layouts.master')
@section('content')
<div class="content-middle">
	<div class="container">
		<div class="top-grid">
			<div class="search-title">
		      <h2> Tambah Alat Musik Baru </h2>
		    </div>
			<div class="instrument-create-box">
				<form id="instrument-create-form">
					<div class="col-md-10">
						<div class="img-upload">
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<div class="row form-group">
								<label class="col-md-3 control-label" for="nama-alat"> Nama Alat Musik </label>
	                            <div class="col-md-8">
	                                <input type="text" class="form-control" id="nama-alat">
	                            </div>
							</div>
							<div class="row form-group">
								<label class="col-md-3 control-label" for="asal-alat"> Asal Alat Musik </label>
	                            <div class="col-md-8">
	                                <input type="text" class="form-control" id="asal-alat">
	                            </div>
							</div>
							<div class="row form-group">
								<label for="provinsi-opt" class="col-md-3 control-label"> Provinsi </label>
	                            <div class="col-md-8"> 
	                                <select class="form-control" id="provinsi-opt">
	                                    <option> Nangroe Aceh Darusalam </option>
	                                    <option> Sumatera Utara </option>
	                                    <option> Sumatera Barat </option>
	                                    <option> Riau </option>
	                                    <option> Kep. Riau </option>
	                                    <option> Jambi </option>
	                                    <option> Bengkulu </option>
	                                    <option> Bangka Belitung </option>
	                                    <option> Sumatera Selatan </option>
	                                    <option> Lampung </option>
	                                    <option> Banten </option>
	                                    <option> Jawa Barat </option>
	                                    <option> Jakarta </option>
	                                    <option> Jawa Tengah </option>
	                                    <option> Yogyakarta </option>
	                                    <option> Jawa Timur </option>
	                                    <option> Kalimantan Barat </option>
	                                    <option> Kalimantan Tengah </option>
	                                    <option> Kalimantan Selatan </option>
	                                    <option> Kalimantan Utara </option>
	                                    <option> Kalimantan Timur </option>
	                                    <option> Bali </option>
	                                    <option> Nusa Tenggara Barat </option>
	                                    <option> Nusa Tenggara Timur </option>
	                                    <option> Sulawesi Barat </option>
	                                    <option> Sulawesi Selatan </option>
	                                    <option> Gorontalo </option>
	                                    <option> Sulawesi Tengah </option>
	                                    <option> Sulawesi Tenggara </option>
	                                    <option> Sulawesi Utara </option>
	                                    <option> Maluku Utara </option>
	                                    <option> Maluku </option>
	                                    <option> Papua Barat </option>
	                                    <option> Papua </option>
	                                </select>
	                            </div>
							</div>
							<div class="row form-group">
	                            <label for="deskripsi-lagu" class="col-md-3 control-label"> Deskripsi </label>
	                            <div class="col-md-8">
	                                <textarea class="form-control" rows="5"></textarea>
	                            </div>
	                        </div>
						</div>
						<div class="col-md-4">
							<h4> Upload suara alat musik </h4>
							<table class="table table-bordered tabel-not">
								<tbody>
									<tr>
										<td class="col-sm-1"> 
											<button class="btn btn-warning btn-block" type="button"> C </button>
										</td>
										<td class="col-sm-1"> 
											<button class="btn btn-warning btn-block" type="button"> E </button>
										</td>
										<td class="col-sm-1"> 
											<button class="btn btn-warning btn-block" type="button"> G# </button>
										</td>
									</tr>
									<tr>
										<td class="col-sm-1"> 
											<button class="btn btn-warning btn-block" type="button"> C# </button>
										</td>
										<td class="col-sm-1"> 
											<button class="btn btn-warning btn-block" type="button"> F </button>
										</td>
										<td class="col-sm-1"> 
											<button class="btn btn-warning btn-block" type="button"> A </button>
										</td>
									</tr>
									<tr>
										<td class="col-sm-1"> 
											<button class="btn btn-warning btn-block" type="button"> D </button>
										</td>
										<td class="col-sm-1"> 
											<button class="btn btn-warning btn-block" type="button"> F# </button>
										</td>
										<td class="col-sm-1"> 
											<button class="btn btn-warning btn-block" type="button"> A# </button>
										</td>
									</tr>
									<tr>
										<td class="col-sm-1"> 
											<button class="btn btn-warning btn-block" type="button"> D# </button>
										</td>
										<td class="col-sm-1"> 
											<button class="btn btn-warning btn-block" type="button"> G </button>
										</td>
										<td class="col-sm-1"> 
											<button class="btn btn-warning btn-block" type="button"> B </button>
										</td>
									</tr>
							</table>
						</div>
					</div>
		        </form>
				<div class="create-nav">
	                <a href="#" > Batal </a> | <a id="submit" href="#"> Simpan </a>
	            </div>
	        </div>
		</div>
	</div>
</div>
@endsection
@section('script')
<script>
$("a#submit").click(function()
{
    $("#instrument-create-form").submit();
    return false;
});
</script>
@endsection