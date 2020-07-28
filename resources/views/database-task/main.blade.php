@extends('base.main')
@section('title','Database Task')
@section('id','database_task')

@section('content')
    <main role="main" class="container">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Create Table</label>
                    <textarea readonly class="form-control sql-textarea" id="exampleFormControlTextarea1" rows="8">
    {{"CREATE TABLE `employees` (
        `id` int(11) NOT NULL,
        `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
        `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
        `city` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
        `salary` int(11) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;"}}
                    </textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Insert Data</label>
                    <textarea readonly class="form-control sql-textarea" id="exampleFormControlTextarea1" rows="8">
{{"INSERT INTO `employees` (`id`, `first_name`, `last_name`, `city`, `salary`) VALUES
(1, 'Henry', 'Cahil', 'Baghdad', 2500),
(2, 'Jimmy', 'clive', 'Najaf', 1200),
(3, 'James', 'cage', 'Najaf', 3300),
(4, 'Adam', 'jones', 'Baghdad', 12000),
(5, 'Sally', 'Johnson', 'Babil', 500),
(6, 'Monica', 'Selles', 'Kut', 1230);"}}
                    </textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Task Query</label>
                    <textarea readonly class="form-control sql-textarea" id="exampleFormControlTextarea1" rows="7">
{{"SELECT
    GROUP_CONCAT(CONCAT (first_name,' ',last_name) SEPARATOR ' , ') full_name,
    city,
    sum(salary) total_salary
  FROM `employees`
  GROUP BY city"}}
                    </textarea>
                </div>
            </div>
        </div>
    </main>

@endsection
