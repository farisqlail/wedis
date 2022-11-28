@extends('beautymail::templates.minty')

@section('content')
@include('beautymail::templates.minty.contentStart')

	<tr>
        <td class="title">
            Dear, 
            {{ $data->name }}
        </td>
    </tr>
    <tr>
        <td width="100%" height="10"></td>
    </tr>
    <tr>
        <td class="paragraph">
            Hei {{ $data->name }}, request projek kamu sedang kami cek. Tunggu informasi dari kami yaa.
            <br>
            Jangan lupa ajak temanmu untuk bergabung dengan Wedis.
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