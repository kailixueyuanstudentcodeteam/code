@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">学生综合素质测评评分</div>

                <!-- <div class="card-body"> -->
<!--                     @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->
                    <label class="col-sm-4 col-form-label text-md-right">学号：</label>
                    {{$user[0]->NO}}
                    <table>
                        <tbody>
                            @foreach ($user as $row)
                                <tr>
                                <td>{{$row->ClassName}}</td>
                                <td>{{$row->ClassScore}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                <!-- </div> -->
            </div>
        </div>
    </div>
</div>
@endsection
