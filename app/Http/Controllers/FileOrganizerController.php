<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileOrganizerController extends Controller
{
    /**
     * Function: used by the router to return file organizer view
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function get_file_organizer_view (){
        return view('file-organizer.main');
    }

    /**
     * Function: used to process an ajax post request when a file is uploaded and submitted
     * @param Request $request
     * @return array|string
     */
    public function process_file_organizer_upload(Request $request){
        //check file input existence
        if($request->hasFile('employees_data_file')){
            //process file content
            if($json_data = self::read_file_organizer_uploaded_file($request->file('employees_data_file')->getRealPath())){
                //generate report
                return self::generate_file_organizer_report($json_data);
            }
        }
        return 'The file seems either corrupted or empty !';
    }

    /**
     * Function: used to access, read and json-decode the data in the uploaded file
     * @param $file_location
     * @return mixed|null
     */
    private static function read_file_organizer_uploaded_file($file_location){
        //access and read file content
        if($file_content_raw =  file_get_contents($file_location)){
            //json-decode file content
            if( $file_content_json = json_decode(($file_content_raw),true)){
                return $file_content_json;
            }
        }
        return null;
    }

    /**
     * Function: used to prepare a report in an array format for files names grouped by employees
     * @param $json_data
     * @return array
     */
    private static function generate_file_organizer_report($json_data){
        //output array to store files names grouped by employees
        $report = array();

        foreach($json_data as $key =>$value){
            //extract employee name and file name from each object,
            // given that the object abides by the structure of {file_name:employee_name}
            $employee = array_values($value)[0];
            $file = array_keys($value)[0];

            //assign file name to its owner(employee)
            // for a new employee an index will be created, otherwise the employee index is fetched and updated
            $report[$employee][] = $file;
        }
        return json_encode($report,JSON_PRETTY_PRINT);
    }
}
