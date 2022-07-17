@extends('dashboard.layout.parent')
@section('title', 'users')
@section('page-title', 'المستخدمين')
@section('main-title', 'users')
@section('sub-main-title', 'edit')
@section('content')

<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">اضافة مستخدم جديد</h4>
                    <h6 class="card-subtitle">    </h6>
                    <form  class="mt-4" id="create-form" >
                        <div class="form-group">
                            <label for="exampleInputEmail1">الاسم</label>
                            <input type="text" class="form-control" id="name" value="{{ $user->name }}"  placeholder=" رجاء ادخال الاسم">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"> البريد الكتروني   </label>
                            <input type="email" class="form-control" id="email" value="{{ $user->email }}"  placeholder=" رجاء ادخال البريد الكتروني  ">

                        </div>

                        <button type="button" onclick="update('{{ $user->id }}')" class="btn btn-primary">حفظ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop


@push('script')
<script>

    function update(id) {
        axios.put('/dashboard/users/'+id,{
            name: document.getElementById('name').value,
            email: document.getElementById('email').value,
        }).then(function (response) {
            // handle success
            console.log(response);
            toastr.success(response.data.message);
        }).catch(function (error) {
            // handle error
            console.log(error);
            toastr.error(error.response.data.message);
        });
    }
</script>


@endpush
