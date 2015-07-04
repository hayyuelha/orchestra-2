@extends('layouts.master')
@section('content')
<div ng-app="orchestra" ng-controller="musicCreateCtrl" ng-init="init()">
<div class="content_middle">
    <div class="container">
        <div class="content_middle_box_ed">
            <div class="top_grid">
                <div class="grid1 col-md-12">
                    <div class="inner_wrap">
                        <form id="music-create-form">
                            <div class="row f-judul">
                                <div class="form-group form-group-lg">
                                    <label class="sr-only" for="judul-lagu"> Judul lagu </label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" id="judul-lagu" placeholder="Judul Lagu">
                                    </div>
                                </div>
                                <div class="add-instrument">
                                    <a href="#"><h2>Tambah Instrument <span class="fa fa-plus-square"/> </h2></a>
                                </div>
                            </div>
                            <div class="row editor">
                                <div class="col-md-2" style="padding-right: 0px;">
                                    <div class="music-box-instrument">
                                        <table class="table table-striped">
                                            <tr>
                                                <th>Alat Musik</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{asset('images/instrument/slenthem-pelog.jpg')}}">
                                                    <span>Slenthem Pelog</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{asset('images/instrument/bonangbarung.jpg')}}">
                                                    <span>Bonang Barung</span>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>

                                </div>
                                <div class="col-md-10" style="padding-left: 0px;">
                                    <div class="music-box-notes">
                                        <table class="table table-striped">
                                            <tr>
                                                <th ng-repeat="note in notes['slenthem'] track by $index">@{{$index + 1}}</th>
                                            </tr>
                                            <tr>
                                                <td ng-repeat="note in notes['slenthem'] track by $index">
                                                    <a ng-click="changeNote('slenthem',$index)" ng-class="['btn','btn-primary','btn-instrument']">@{{notes['slenthem'][$index]}}</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td ng-repeat="note in notes['bonangbarung'] track by $index">
                                                    <a ng-click="changeNote('bonangbarung',$index)" ng-class="['btn','btn-primary','btn-instrument']">@{{notes['bonangbarung'][$index]}}</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row timeout" style="padding-bottom: 10px;">
                                <label class="col-sm-2 control-label" for="timeout"> Timeout </label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" ng-model="timeOut">
                                </div>
                                <a ng-click="playMusic()" class="fa fa-play-circle fa-2x"></a> 
                                <a ng-click="#" class="fa fa-step-backward fa-1g"></a>
                                <a ng-click="#" class="fa fa-pause fa-1g"></a>
                                <a ng-click="#" class="fa fa-stop fa-1g"></a>
                                <a ng-click="#" class="fa fa-step-forward fa-1g"></a>
                            </div>
                            <div class="row form-group">
                                <label class="col-sm-2 control-label" for="asal-lagu"> Asal Lagu </label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="asal-lagu">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="provinsi-opt" class="col-sm-2 control-label"> Provinsi </label>
                                <div class="col-md-6"> 
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
                                <label for="deskripsi-lagu" class="col-sm-2 control-label"> Deskripsi </label>
                                <div class="col-md-6">
                                    <textarea class="form-control" rows="5"></textarea>
                                </div>
                            </div>
                        </form>
                        <div class="create-nav">
                            <a href="#" > Batal </a> | <a id="submit" href="#"> Simpan </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--start of bonangbarung note block--}}
    <div class="modal note-block" id="bonangbarung">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    Bonang Barung
                </div>
                <div class="modal-body">
                    <div>
                        <ul>
                            <li><a class="btn btn-primary btn-instrument" ng-click="addNote('C')">C</a></li>
                            <li><a class="btn btn-primary btn-instrument" disabled>C#</a></li>
                            <li><a class="btn btn-primary btn-instrument" ng-click="addNote('D')">D</a></li>
                            <li><a class="btn btn-primary btn-instrument" disabled>D#</a></li>
                            <li><a class="btn btn-primary btn-instrument" ng-click="addNote('E')">E</a></li>
                            <li><a class="btn btn-primary btn-instrument" ng-click="addNote('F')">F</a></li>
                        </ul>
                    </div>
                    <div>
                        <ul>
                            <li><a class="btn btn-primary btn-instrument" disabled>F#</a></li>
                            <li><a class="btn btn-primary btn-instrument" ng-click="addNote('G')">G</a></li>
                            <li><a class="btn btn-primary btn-instrument" disabled>G#</a></li>
                            <li><a class="btn btn-primary btn-instrument" ng-click="addNote('A')">A</a></li>
                            <li><a class="btn btn-primary btn-instrument" disabled>A#</a></li>
                            <li><a class="btn btn-primary btn-instrument" ng-click="addNote('B')">B</a></li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" ng-click="removeNote()" class="btn btn-default">Hapus</button>
                    <button data-dismiss="modal" class="btn btn-default">Batal</button>
                </div>
            </div>
        </div>

    </div>
{{--end of bonangbarung note block--}}
<div class="modal note-block" id="slenthem">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Slenthem
            </div>
            <div class="modal-body">
                <div>
                    <ul>
                        <li><a class="btn btn-primary btn-instrument" ng-click="addNote('C')">C</a></li>
                        <li><a class="btn btn-primary btn-instrument" disabled>C#</a></li>
                        <li><a class="btn btn-primary btn-instrument" ng-click="addNote('D')">D</a></li>
                        <li><a class="btn btn-primary btn-instrument" disabled>D#</a></li>
                        <li><a class="btn btn-primary btn-instrument" ng-click="addNote('E')">E</a></li>
                        <li><a class="btn btn-primary btn-instrument" ng-click="addNote('F')">F</a></li>
                    </ul>
                </div>
                <div>
                    <ul>
                        <li><a class="btn btn-primary btn-instrument" disabled>F#</a></li>
                        <li><a class="btn btn-primary btn-instrument" ng-click="addNote('G')">G</a></li>
                        <li><a class="btn btn-primary btn-instrument" disabled>G#</a></li>
                        <li><a class="btn btn-primary btn-instrument" ng-click="addNote('A')">A</a></li>
                        <li><a class="btn btn-primary btn-instrument" disabled>A#</a></li>
                        <li><a class="btn btn-primary btn-instrument" ng-click="addNote('B')">B</a></li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" ng-click="removeNote()" class="btn btn-default">Hapus</button>
                <button data-dismiss="modal" class="btn btn-default">Batal</button>
            </div>
        </div>
    </div>

</div>
<div ng-show="false">
    <audio controls class="tone" id="slenthemC" >
        <source src="{{asset('music/slentempl1.wav')}}" type="audio/wav">
    </audio>
    <audio controls class="tone" id="slenthemD">
        <source src="{{asset('music/slentempl2.wav')}}" type="audio/wav">
    </audio>
    <audio controls class="tone" id="slenthemE">
        <source src="{{asset('music/slentempl3.wav')}}" type="audio/wav">
    </audio>
    <audio controls class="tone" id="slenthemF">
        <source src="{{asset('music/slentempl4.wav')}}" type="audio/wav">
    </audio>
    <audio controls class="tone" id="slenthemG">
        <source src="{{asset('music/slentempl5.wav')}}" type="audio/wav">
    </audio>
    <audio controls class="tone" id="slenthemA">
        <source src="{{asset('music/slentempl6.wav')}}" type="audio/wav">
    </audio>
    <audio controls class="tone" id="slenthemB">
        <source src="{{asset('music/slentempl7.wav')}}" type="audio/wav">
    </audio>
    <audio controls class="tone" id="bonangbarungC">
        <source src="{{asset('music/bonangbarung1.wav')}}" type="audio/wav">
    </audio>
    <audio controls class="tone" id="bonangbarungD">
        <source src="{{asset('music/bonangbarung2.wav')}}" type="audio/wav">
    </audio>
    <audio controls class="tone" id="bonangbarungE">
        <source src="{{asset('music/bonangbarung3.wav')}}" type="audio/wav">
    </audio>
    <audio controls class="tone" id="bonangbarungF">
        <source src="{{asset('music/bonangbarung4.wav')}}" type="audio/wav">
    </audio>
    <audio controls class="tone" id="bonangbarungG">
        <source src="{{asset('music/bonangbarung5.wav')}}" type="audio/wav">
    </audio>
    <audio controls class="tone" id="bonangbarungA">
        <source src="{{asset('music/bonangbarung6.wav')}}" type="audio/wav">
    </audio>
    <audio controls class="tone" id="bonangbarungB">
        <source src="{{asset('music/bonangbarung7.wav')}}" type="audio/wav">
    </audio>
</div>
</div>
@endsection
@section('script')
    @parent
    <script src='{{asset("js/angular/angular.min.js")}}'></script>
    <script src='{{asset("js/orchestra-angular.js")}}'></script>
    <script>
    $("a#submit").click(function()
    {
        $("#music-create-form").submit();
        return false;
    });
    </script>
@endsection
