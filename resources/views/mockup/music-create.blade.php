@extends('layouts.master')
@section('content')
<div class="content_middle">
    <div class="container">
        <div class="content_middle_box_ed">
            <div class="top_grid">
            <div class="grid1 col-md-12">
                <div class="inner_wrap" style="">
                    <table class="music-box">
                        <tr class="music-box-component">
                            <td class="music-box-instrument">
                                Instrument
                            </td>
                            <?php for($i = 0; $i < 1000; $i++): ?>
                            <td>A</td>
                            <?php endfor; ?>
                        </tr>
                    </table>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
