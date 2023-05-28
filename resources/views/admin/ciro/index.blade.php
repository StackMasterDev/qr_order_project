@extends('app')
@section('content')
    <div class="col-md-12">


        <div>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">CİRO</h4>
                                    <button class="btn-success"><a style="color: black" href="{{route('admin.cirosıfırla')}}"> SIFIRLA</a></button>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                        <th>ZAMAN</th>
                                        <th>CİRO</th>


                                        </thead>
                                        <tbody>
                                        @foreach(\App\Models\ciro::all() as $key=>$value)
                                            <tr>

                                                <td>{{$value['created_at']}}</td>

                                                <td>{{$value['tutar']}} TL</td>


                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr style="background-color: #1e7e34">
                                            <td>TOPLAM TUTAR</td>
                                            <td>{{\App\Models\ciro::all()->sum('tutar')}}</td>


                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>




@endsection
