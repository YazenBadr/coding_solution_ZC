<main role="main" class="container">
    <div class="card">
        <div class="card-body">
            <form id="file_organizer_form">
                {{csrf_field()}}
                <div class="form-group">
                    <h4>
                        <label for="employees_data_file" class="font-weight-bold">Upload Employees File Data (.txt) File</label>
                    </h4>
                    <input required accept="text/plain" type="file" class="form-control-file" id="employees_data_file" name="employees_data_file">
                </div>
                <button type="submit" class="btn btn-primary"  role="button">
                    <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                   Generate Report
                </button>

            </form>
            <div class="row">
                <div class="col-12" id="file_organizer_report_container">

                </div>
            </div>

        </div>
    </div>
</main>


