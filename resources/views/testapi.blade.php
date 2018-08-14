@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('teacher.store')}}" method="post">
                        Tên
                        <input type="text" name="name" >
                        mô tả
                        <input type="text" name="description" >
                        sinh nhật
                        <input type="date" name="birthday" >
                        giới tính
                        <input type="text" name="gender" >
                        địa chỉ
                        <input type="text" name="address" >
                        sdt
                        <input type="text" name="phone" >
                        chuyên môn
                        <input type="text" name="specialize" >
                        hình ảnh
                        <input type="text" name="image" >
                        chứng chỉ
                        <input type="text" name="identity_card" >
                        mail
                        <input type="text" name="email" >
                        
                        <input type="submit" value="gui noi dung">
                        
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
