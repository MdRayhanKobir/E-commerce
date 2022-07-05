@extends('admin.admin_master')
@section('title')
    Cupon Update -Page
@endsection

@section('content')
    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Cupon Table</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Cupon Update</h6>

                <div class="table-wrapper">


                    <form action="{{ route('cupon.update',['id'=>$cupons->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body pd-20">
                            <div class="form-group">
                                <label for="">Cupon</label>
                                <input type="text" name="cupon" id="" class="form-control"
                                    value="{{ $cupons->cupon }}">
                                @error('cupon')
                                    <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Cupon Discount %</label>
                                <input type="text" name="discount" id="" class="form-control"
                                    value="{{ $cupons->discount }}">
                                @error('discount')
                                    <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div><!-- modal-body -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info pd-x-20">Upate</button>

                        </div>
                    </form>

                </div><!-- table-wrapper -->
            </div><!-- card -->
        </div><!-- sl-pagebody -->

        <footer class="sl-footer">
            <div class="footer-left">
                <div class="mg-b-2">Copyright &copy; 2022. Easy Find. All Rights Reserved.</div>
                <div>Made by Easy Team.</div>
            </div>
        </footer>

    </div><!-- sl-mainpanel -->
@endsection
