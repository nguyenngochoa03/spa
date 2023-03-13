@extends('admin.index_master_admin');

@section('content')
  <div class="contents">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 mb-30">
          <div class="card mt-30">
            <div class="card-body">
              <div
                class="userDatatable adv-table-table global-shadow border-light-0 w-100 adv-table"
              >
                <div class="table-responsive">
                  <div class="adv-table-table__header">
                    <h4>Câu hỏi thường gặp</h4>
                    <button onclick="location.href='{{route('add-question')}}'" class="btn btn-primary btn-default btn-rounded ">Thêm
                    </button>
                  </div>
                  <div id="filter-form-container"></div>
                  <table
                    class="table mb-0 table-borderless adv-table text-center"
                    data-sorting="true"
                    data-filter-container="#filter-form-container"
                    data-paging-current="1"
                    data-paging-position="right"
                    data-paging-size="10"
                  >
                    <thead>
                    <tr class="userDatatable-header">
                      <th>
                        <span class="userDatatable-title">id</span>
                      </th>
                      <th>
                        <span class="userDatatable-title">Câu hỏi</span>
                      </th>
                      <th>
                        <span class="userDatatable-title">Trả lời</span>
                      </th>
                      <th>
                        <span class="userDatatable-title">status</span>
                      </th>
                      <th>
                              <span class="userDatatable-title float-end"
                              >Chức năng</span
                              >
                      </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($questions as $value)
                      <tr>
                        <td>
                          <div class="userDatatable-content">{{ $value->id }}</div>
                        </td>
                        <td>
                          <div class="d-flex">
                            <div class="userDatatable-inline-title">
                              <a href="#" class="text-dark fw-500">
                                <h6>{{ $value->	question }}</h6>
                              </a>
                            </div>
                          </div>
                        </td>

                        <td>
                          <div class="userDatatable-content text-truncate" style="max-width: 150px;">
                            {!! $value->reply !!}
                          </div>
                        </td>
                        <td>
                          <div class="userDatatable-content d-inline-block">
                                <span
                                  class="bg-opacity-success color-success rounded-pill userDatatable-content-status active"
                                >active</span
                                >
                          </div>
                        </td>
                        <td>
                          <ul
                            class="orderDatatable_actions mb-0 d-flex flex-wrap"
                          >
                            <li>
                              <button onclick="location.href='{{route('blog-question')}}'"  class="btn btn-warning btn-default btn-rounded bg-warning text-white">Chi tiết
                              </button>
                            </li>
                            <li>
                              <button onclick="location.href='{{route('edit-question/'.$value->id)}}'" class="btn btn-primary btn-default btn-rounded bg-primary text-white">Sửa
                              </button>
                            </li>
                            <li>
                              <button onclick="deletItem({!! $value->id !!})"  class="btn btn-danger btn-default btn-rounded bg-danger text-white">Xóa
                              </button>
                            </li>
                          </ul>
                        </td>
                      </tr>

                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@push('scripts')
  <script>
    function deletItem(id){
      Swal.fire({
        title: 'Bạn chắc chắn?',
        text: "Bạn có chắc chắn muốn xóa không ?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = `{{route('delete-question/')}}` + id;
        }
      })
    }
  </script>
  @if(isset($_SESSION['success']) && isset($_GET['msg']))
    <script>
      Swal.fire(
        'Delete!',
        '{{$_SESSION['success']}}',
        'success'
      )
      @php
        unset( $_SESSION['success']);
      @endphp
      window.setTimeout(function(){
        window.location.href = '{{ route('questions') }}';
      },1000)
    </script>
  @endif
@endpush
