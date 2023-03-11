@extends("admin.index_master_admin")
@section("content")
  <main class="main">
    <div class="container-fluid">
      <div class="row">
        <!-- main title -->
        <div class="col-12">
          <div class="main__title">

        <!-- comments -->
        <div class="col-12">
          <div class="main__table-wrap">
            <table class="main__table">
              <thead>
              <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th>Image</th>
                <th>total_price</th>
                <th>role_id</th>
                <th>create_date</th>
                <th>update_date</th>
                <th>ACTIONS</th>
              </tr>
              </thead>

              <tbody>
              @foreach ($users as $item => $value)
                <tr>
                  <td>
                    <div class="main__table-text">{{$value["id"]}}</div>
                  </td>
                  <td>
                    <div class="main__table-text">{{$value["username"]}}</div>
                  </td>
                  <td>
                    <div class="main__table-text">{{$value["password"]}}</div>
                  </td>
                  <td>
                    <div class="main__table-text"><a href="#">{{$value["sdt"]}}</a></div>
                  </td>
                  <td>
                    <div class="main__table-text"><a href="#">{{$value["email"]}}</a></div>
                  </td>
                  <td>
                    <div class="main__table-text"><a href="#">{{$value["image"]}}</a></div>
                  </td>
                  <td>
                    <div class="main__table-text"><a href="#">{{$value["total_price"]}}</a></div>
                  </td>
                  <td>
                    <div class="main__table-text"><a href="#">{{$value["role_id"]}}</a></div>
                  </td>
                  <td>
                    <div class="main__table-text"><a href="#">{{$value["create_date"]}}</a></div>
                  </td>
                  <td>
                    <div class="main__table-text"><a href="#">{{$value["update_date"]}}</a></div>
                  </td>
                  <td>
                    <div class="main__table-btns">
                      <a href="add-user" class="main__table-btn main__table-btn--view ">
                        <i class="icon ion-ios-eye"></i>
                      </a>
                      <a href="update-user-{{$value['id']}}" class="main__table-btn main__table-btn--edit">
                        <i class="icon ion-ios-create"></i>
                      </a>
                      <a href="delete-user-{{$value['id']}}" class="main__table-btn main__table-btn--delete ">
                        <i class="icon ion-ios-trash"></i>
                      </a>
                    </div>
                  </td>
                </tr>
              @endforeach

              </tbody>
            </table>
          </div>
        </div>
        <!-- end comments -->

        <!-- paginator -->
        <div class="col-12">
          <div class="paginator-wrap">
            <span>10 from 21 356</span>

            <ul class="paginator">
              <li class="paginator__item paginator__item--prev">
                <a href="#"><i class="icon ion-ios-arrow-back"></i></a>
              </li>
              <li class="paginator__item"><a href="#">1</a></li>
              <li class="paginator__item paginator__item--active"><a href="#">2</a></li>
              <li class="paginator__item"><a href="#">3</a></li>
              <li class="paginator__item"><a href="#">4</a></li>
              <li class="paginator__item paginator__item--next">
                <a href="#"><i class="icon ion-ios-arrow-forward"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <!-- end paginator -->
      </div>
    </div>
  </main>
@endsection
