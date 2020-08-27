<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Agentlist extends Model
{
    protected $table="users";

    public function getdatatable(){
        $requestData = $_REQUEST;
        $columns = array(
            0 => 'users.id',
            1 => 'users.username',
            2 => 'users.email',
            3 => 'users.userimage',
            4 => 'users.phoneno',
            4 => 'users.about',
        );
        $query = Blog ::from('users')
                    ->leftjoin("users as u2","u2.id","=","users.parent_id")
                    ->where('users.roles','AG')
                    ->where('users.isDeleted','0');

        if (!empty($requestData['search']['value'])) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
            $searchVal = $requestData['search']['value'];
            $query->where(function($query) use ($columns, $searchVal, $requestData) {
                $flag = 0;
                foreach ($columns as $key => $value) {
                    $searchVal = $requestData['search']['value'];
                    if ($requestData['columns'][$key]['searchable'] == 'true') {
                        if ($flag == 0) {
                            $query->where($value, 'like', '%' . $searchVal . '%');
                            $flag = $flag + 1;
                        } else {
                            $query->orWhere($value, 'like', '%' . $searchVal . '%');
                        }
                    }
                }
            });
        }

        $temp = $query->orderBy($columns[$requestData['order'][0]['column']], $requestData['order'][0]['dir']);

        $totalData = count($temp->get());
        $totalFiltered = count($temp->get());

        $resultArr = $query->skip($requestData['start'])
                ->take($requestData['length'])
                ->select('users.id','u2.username as parent_id','users.username','users.email','users.userimage','users.phoneno','users.about','users.email_verfied')
                ->get();
        $data = array();
        $i = 0;

        foreach ($resultArr as $row) {
            $verifyHtml = '';
            if($row['email_verfied'] == '1'){
                $verifyHtml = '<span class="badge badge-success"> Verify </span>';
            }else{
                $verifyHtml = '<span class="badge badge-danger"> Not Verify </span>';
            }
            $actionhtml = '';
            $actionhtml = '<a href="#"  class="btn btn-icon primary"  ><i class="fa fa-pencil" title="Edit Users"></i></a>'
                    .'<a href="#"  class="btn btn-icon primary"  ><i class="fa fa-eye" title="View Users"></i></a>'
                    . '<a href="" data-toggle="modal" data-target="#deleteModel" class="btn btn-icon  deleteLaghukatha" " data-id="' . $row["id"] . '" ><i class="fa fa-trash" title="Delete Users"></i></a>';

            if($row['userimage'] || $row['userimage'] != null){
                $image = url("public/upload/userimage/" . $row['userimage']);
            }else{
                $image = url("public/upload/userimage/default.jpg");
            }
            
            $i++;
            $nestedData = array();
            $nestedData[] = $i;
            $nestedData[] = '<img height="60px" width="100px" src="' . $image . '" style="margin:20px;"></center>';
            $nestedData[] = $row['username'];
            $nestedData[] = $row['email'];
            $nestedData[] = $row['phoneno'];
            $nestedData[] = $row['about'];
            if($row['parent_id'] != null || $row['parent_id'] != ''){
                $nestedData[] = $row['parent_id'] ;
            }else{
                $nestedData[] = "N/A" ;
            }
            $nestedData[] = $verifyHtml;
            $nestedData[] = $actionhtml;
            $data[] = $nestedData;
        }
        $json_data = array(
            "draw" => intval($requestData['draw']), // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw.
            "recordsTotal" => intval($totalData), // total number of records
            "recordsFiltered" => intval($totalFiltered), // total number of records after searching, if there is no searching then totalFiltered = totalData
            "data" => $data   // total data array
        );
        return $json_data;
    }
}
