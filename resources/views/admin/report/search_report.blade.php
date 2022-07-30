@extends('admin.admin_master')
@section('title')
    Search Report -Page
@endsection

@section('content')
    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Search Report</h5>
            </div><!-- sl-page-title -->

            <div class="row ">
                <div class="col-md-4">
                    <div class="card pd-20 pd-sm-40">
                        <div class="table-wrapper">
                            <form action="" method="POST">
                                @csrf
                                <div class="modal-body pd-20">
                                    <div class="form-group">
                                        <label for="">Search By Date</label>
                                        <input type="date" name="date" id="" class="form-control">
                                    </div>
                                </div><!-- modal-body -->
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-info pd-x-20">Submit</button>
                                </div>
                            </form>

                        </div><!-- table-wrapper -->
                    </div><!-- card -->
                </div>
                <div class="col-md-4">
                    <div class="card pd-20 pd-sm-40">
                        <div class="table-wrapper">
                            <form action="" method="POST">
                                @csrf
                                <div class="modal-body pd-20">
                                    <div class="form-group">
                                        <label for="">Search by Month</label>
                                        <select class="form-control" name="month" id="">
                                            <option hidden >choose month..</option>
                                            <option value="january">January</option>
                                            <option value="february">February</option>
                                            <option value="march">March</option>
                                            <option value="april">April</option>
                                            <option value="may">May</option>
                                            <option value="june">June</option>
                                            <option value="july">July</option>
                                            <option value="august">August</option>
                                            <option value="september">September</option>
                                            <option value="october">October</option>
                                            <option value="november">November</option>
                                            <option value="december">December</option>
                                        </select>
                                    </div>
                                </div><!-- modal-body -->
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-info pd-x-20">Submit</button>
                                </div>
                            </form>

                        </div><!-- table-wrapper -->
                    </div><!-- card -->
                </div>
                <div class="col-md-4">
                    <div class="card pd-20 pd-sm-40">
                        <div class="table-wrapper">
                            <form action="" method="POST">
                                @csrf
                                <div class="modal-body pd-20">
                                    <div class="form-group">
                                        <label for="">Serach by Year</label>
                                        <select name="year" id="" class="form-control">
                                            <option hidden >Choose Year..</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                        </select>
                                    </div>
                                </div><!-- modal-body -->
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-info pd-x-20">Submit</button>
                                </div>
                            </form>

                        </div><!-- table-wrapper -->
                    </div><!-- card -->
                </div>
            </div>




        </div><!-- sl-pagebody -->

        <footer class="sl-footer">
            <div class="footer-left">
                <div class="mg-b-2">Copyright &copy; 2022. Easy Find. All Rights Reserved.</div>
                <div>Made by Easy Team.</div>
            </div>
        </footer>

    </div><!-- sl-mainpanel -->
@endsection
