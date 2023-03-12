@extends('admin.index_master_admin');

@section('content')
  <div class="contents">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb-main">
            <h4 class="text-capitalize breadcrumb-title">Quản lý bài viết</h4>
            <div class="breadcrumb-action justify-content-center flex-wrap">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="#">Apps</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Quản lý bài viết</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 mb-30">
          <div class="support-ticket-system support-ticket-system--search">
            <div class="breadcrumb-main m-0 breadcrumb-main--table justify-content-sm-between ">
              <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                <div class="d-flex align-items-center ticket__title justify-content-center me-md-25 mb-md-0 mb-20">
                  <h4 class="text-capitalize fw-500 breadcrumb-title">Bài Viết</h4>
                </div>
              </div>
              <div class="action-btn">
                <a href="{{route('add-blog-service')}}" class="btn px-15 btn-primary" >
                  <i class="las la-plus fs-16"></i> Thêm mới bài viết</a>
              </div>
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
            <div class="support-form datatable-support-form d-flex justify-content-xxl-between justify-content-center align-items-center flex-wrap">
              <div class="support-form__input">
                <div class="d-flex flex-wrap">
                  <div class="support-form__input-id">
                    <label>Service: </label>
                    <div class="dm-select ">
                      <select name="select-search" class="select-search form-control ">
                        <option value="0">All</option>
                        @foreach($service as $sv)
                          <option value="{{$sv->id}}">{{$sv->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <button class="support-form__input-button">search</button>
                </div>
              </div>
              <div class="support-form__search">
                <div class="support-order-search">
                  <form action="https://demo.dashboardmarket.com/" class="support-order-search__form">
                    <img src="{{route('').'app/views/admin/public/assets/img/svg/search.svg'}}" alt="search" class="svg">
                    <input class="form-control border-0 box-shadow-none" type="search" placeholder="Search" aria-label="Search">
                  </form>
                </div>
              </div>
            </div>
            <div class="userDatatable userDatatable--ticket userDatatable--ticket--2 mt-1">
              <div class="table-responsive">
                <table class="table mb-0 table-borderless">
                  <thead>
                  <tr class="userDatatable-header">
                    <th class="pe-0">
                      <div class="d-flex align-items-center">
                        <div class="custom-checkbox  check-all">
                          <input class="checkbox" type="checkbox" id="check-333">
                          <label for="check-333" class="ps-0">
                            <span class="checkbox-text userDatatable-title"></span>
                          </label>
                        </div>
                      </div>
                    </th>
                    <th>
                      <span class="userDatatable-title">STT</span>
                    </th>
                    <th>
                      <span class="userDatatable-title">Servive</span>
                    </th>
                    <th>
                      <span class="userDatatable-title">Title</span>
                    </th>
                    <th>
                      <span class="userDatatable-title">Create Date</span>
                    </th>
                    <th>
                      <span class="userDatatable-title">Create Update</span>
                    </th>
                    <th class="actions">
                      <span class="userDatatable-title">Actions</span>
                    </th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($blog as $key => $bl)
                    <tr>
                      <td class="pe-0">
                        <div class="d-flex">
                          <div class="userDatatable__imgWrapper d-flex align-items-center m-0">
                            <div class="checkbox-group-wrapper">
                              <div class="checkbox-group d-flex">
                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                  <input class="checkbox" type="checkbox" id="check-grp-#01">
                                  <label for="check-grp-#01" class="ps-0"></label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex">
                          <div class="userDatatable-inline-title">
                            <a href="#" class="text-dark fw-500">
                              <h6>{{$key + 1}}</h6>
                            </a>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="userDatatable-content--subject">
                          @foreach($service as $sv)
                            <?php echo $sv->id == $bl->id_service ? $sv->name : ''?>
                          @endforeach
                        </div>
                      </td>
                      <td>
                        <div class="userDatatable-content--subject">
                          {{$bl->title}}
                        </div>
                      </td>
                      <td>
                        <div class="userDatatable-content--subject">
                          {{$bl->create_date}}
                        </div>
                      </td>
                      <td>
                        <div class="userDatatable-content--subject">
                          {{$bl->create_update}}
                        </div>
                      </td>
                      <td>
                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
{{--                          <li>--}}
{{--                            <button class="btn btn-info btn-default btn-squared" onclick="location.href='{{route('detail-blog-service/'.$bl->id)}}'">Detail--}}
{{--                            </button>--}}
{{--                          </li>--}}
                          <li>
                            <button class="btn btn-warning btn-default btn-squared" onclick="location.href='{{route('edit-blog-service/'.$bl->id)}}'">Edit
                            </button>
                          </li>
                          <li>
                            <button class="btn btn-danger btn-default btn-squared" onclick="return confirm('Bạn có muốn xóa?') == true ? location.href='{{route('delete-blog-service/'.$bl->id)}}' : ''">Delete
                            </button>
                          </li>
                        </ul>
                      </td>
                    </tr>
                  @endforeach

                  </tbody>
                </table>
              </div>
              <div class="d-flex justify-content-end pt-30">
                <nav class="dm-page ">
                  <ul class="dm-pagination d-flex">
                    <li class="dm-pagination__item">
                      <a href="#" class="dm-pagination__link pagination-control"><span class="la la-angle-left"></span></a>
                      <a href="#" class="dm-pagination__link"><span class="page-number">1</span></a>
                      <a href="#" class="dm-pagination__link active"><span class="page-number">2</span></a>
                      <a href="#" class="dm-pagination__link"><span class="page-number">3</span></a>
                      <a href="#" class="dm-pagination__link pagination-control"><span class="page-number">...</span></a>
                      <a href="#" class="dm-pagination__link"><span class="page-number">12</span></a>
                      <a href="#" class="dm-pagination__link pagination-control"><span class="la la-angle-right"></span></a>
                      <a href="#" class="dm-pagination__option">
                      </a>
                    </li>
                    <li class="dm-pagination__item">
                      <div class="paging-option">
                        <select name="page-number" class="page-selection">
                          <option value="20">20/page</option>
                          <option value="40">40/page</option>
                          <option value="60">60/page</option>
                        </select>
                      </div>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection



