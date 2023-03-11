@extends('admin.index_master_admin');
@section('content')
<main class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>Add new item</h2>
                </div>
            </div>
            <!-- end main title -->

            <!-- form -->
            <div class="col-12">
                <form action="" method="post" class="form">
                    <div class="row row--form">
                        <div class="col-12 col-md-7 form__content">
                            <div class="row row--form">
                                <div class="col-12">
                                    <input type="text" class="form__input" placeholder="Email" name="email">
                                </div>

                                <div class="col-12">
                                    <input type="password" class="form__input" placeholder="Password" name="pass">
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form__input" placeholder="Username" name="username">
                                </div>
                                <div class="col-12">
                                    <div class="col-12">
                                        <button name="btn-adduser" class="form__btn">Add</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
            <!-- end form -->
        </div>
    </div>
</main>
@endsection
