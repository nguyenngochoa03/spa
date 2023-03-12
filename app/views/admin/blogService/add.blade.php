@extends('admin.index_master_admin');

@section('content')

<div class="contents">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="breadcrumb-main">
          <h4 class="text-capitalize breadcrumb-title">New Document</h4>
          <div class="breadcrumb-action justify-content-center flex-wrap">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#"><i class="uil uil-estate"></i>Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Thêm mới bài viết
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="form-element">
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
            </div><br>
          @endforeach
        </div>
      @endif
      <div class="row">
        <div class="col-lg-12">
          <div class="card card-default card-md mb-4">
            <div class="card-header">
              <h6>Thêm mới bài viết</h6>
            </div>
            <div class="card-body py-md-25">
              <form action="{{route('add-blog-service-post')}}" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="support-form__input-id">
                    <label>Service: </label>
                    <div class="dm-select ">
                      <select name="serbl" class="select-search form-control ">
                        <option value="0">None</option>
                        @foreach($service as $sv)
                          <option value="{{$sv->id}}">{{$sv->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label
                        for="a9"
                        class="il-gray fs-14 fw-500 align-center mb-10"
                      >Tiêu đề bài viết</label
                      >
                      <input
                        name="titlebl"
                        type="text"
                        class="form-control ih-medium ip-light radius-xs b-light px-15"
                        id="a9"
                        placeholder="Nhập tiêu đề"
                      />
                    </div>
                    <div class="col-lg-6">
                      <div class="card card-default card-md mb-4">
                        <div class="card-header  py-20">
                          <h6>Image</h6>
                        </div>
                        <div class="card-body">
                          <div class="dm-tag-wrap">
                            <div class="dm-upload">
                              <div class="dm-upload__button">
                                <a href="javascript:void(0)" class="btn btn-lg btn-outline-lighten btn-upload" onclick="$('#upload-1').click()"> <img class="svg" src="{{route(''.'app/views/admin/public/assets/img/svg/upload.svg')}}" alt="upload"> Click to Upload</a>
                                <input name="upload" type="file"  class="upload-one" id="upload-1">
                              </div>
                              <div class="dm-upload__file">
                                <ul>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label
                        for="a9"
                        class="il-gray fs-14 fw-500 align-center mb-10"
                      >Nội dung bài viết</label
                      >
                      <textarea name="contentbl" id="content-blog" cols="20" rows="20"></textarea>
                    </div>
                    <div
                      class="button-group d-flex pt-25 justify-content-md-end justify-content-start"
                    >
                      <button
                        class="btn btn-primary btn-default btn-squared text-capitalize radius-md shadow2 btn-sm"
                        type="submit" name="sb-blog"
                      >
                        Thêm
                      </button>
                    </div>
                  </div>
                </div>
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
  <script >
    CKEDITOR.replace( 'content-blog', {
      filebrowserUploadUrl: './app/views/ckeditor/uploadBlogSv.php'
    } );
  </script>

  @if(isset($_SESSION['success']) && isset($_GET['msg']))
    <script>
      Swal.fire(
        'Thêm mới!',
        '{{$_SESSION['success']}}',
        'success'
      )
      window.setTimeout(function(){
        window.location.href = '{{ route('add-blog-service') }}';
      },1000)
    </script>
  @endif
@endpush
