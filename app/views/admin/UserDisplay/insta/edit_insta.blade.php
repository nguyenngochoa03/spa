@extends('admin.index_master_admin');

@section('content')
  <div class="contents">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb-main">
            <h4 class="text-capitalize breadcrumb-title">Edit insta"</h4>
            <div class="breadcrumb-action justify-content-center flex-wrap">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit insta</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <div class="form-element">
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-default card-md mb-4">
              <div class="card-header">
                <h6>Edit Contact: {{$oneData->id}}</h6>
              </div>
              @if(isset($_SESSION['errors']) && isset($_GET['msg']))
                <div class="alert">
                  @foreach($_SESSION['errors'] as $er)
                    <div
                      class="alert alert-warning alert-dismissible fade show"
                      role="alert"
                    >
                      <div class="alert-content">
                        <p>
                          {{$er}}
                        </p>
                        <button
                          type="button"
                          class="btn-close text-capitalize"
                          data-bs-dismiss="alert"
                          aria-label="Close"
                        >
                          <img
                            src="{{route(''.'app/views/admin/public/assets/img/svg/x.svg')}}"
                            alt="x"
                            class="svg"
                            aria-hidden="true"
                          />
                        </button>
                      </div>
                    </div>
                  @endforeach
                </div>
              @endif
              <div class="card-body pb-md-50">
                <form action="{{route('update-insta/'.$oneData->id)}}" method="post" enctype="multipart/form-data">
                  <div class="row mx-n15">
                    <div class="col-md-4 mb-20 px-15">
                      <label for="validationDefault02"  class="il-gray fs-14 fw-500 align-center mb-10">Ảnh </label>
                      <img src="{{route('./public/upload/insta/'.$oneData->link)}}"  class="rounded w-100 my-4"  alt="">
                      <div class="dm-tag-wrap">
                        <div class="dm-upload">
                          <div class="dm-upload-avatar">
                            <img class="avatrSrc" src="{{ route('app/views/admin/public/assets/img/upload.png') }}" alt="Avatar Upload">
                          </div>
                          <div class="avatar-up">
                            <input type="file" name="upload-avatar-input" class="upload-avatar-input">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <input class="btn btn-primary px-30" name="sb-insta" type="submit" value="Save">
                </form>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
  @if(isset($_SESSION['success']) && isset($_GET['msg']))
  <script>
    Swal.fire(
      'Update!',
      '{{$_SESSION['success']}}',
      'success'
    )
      window.setTimeout(function(){
        window.location.href = '{{ route('instagram') }}';
      },1000)
  </script>
  @endif
@endpush
