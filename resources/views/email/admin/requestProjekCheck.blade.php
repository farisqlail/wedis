@extends('beautymail::templates.minty')

@section('content')
@include('beautymail::templates.minty.contentStart')

	<tr>
        <td class="title">
            Halo Min !!
        </td>
    </tr>
    <tr>
        <td width="100%" height="10"></td>
    </tr>
    <tr>
        <td class="paragraph">
            Ada request projek masuk nih, dari {{ $data->name }}.
            <br>
            Cek ke Website Wedis yaa!!!
        </td>
    </tr>
    <tr>
        <td width="100%" height="25"></td>
    </tr>
    <tr>
    </tr>
    <tr>
        <td width="100%" height="25"></td>
    </tr>
    @include('beautymail::templates.minty.contentEnd')

@stop