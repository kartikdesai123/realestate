<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\PropertyDetails;
class ReportProperty extends Model
{
    //
    protected $table = "report_property";

    public function getdatatable(){
        $requestData = $_REQUEST;
        $columns = array(
            0 => 'report_property.id',
            1 => 'property_details.title',
            2 => 'property_details.offer',
            3 => 'property_details.type',
            4 => 'property_details.price',
            5 => 'property_details.area',
            6 => 'report_property.report_type',
            7 => 'report_property.message',
            8 => 'users.username',
        );
        $query = ReportProperty ::from('report_property')
                                ->join("property_details","property_details.id","=","report_property.property_id")
                                ->join("users","users.id","=","report_property.user_id");

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
                ->select('report_property.id','property_details.title','property_details.offer',
                        'property_details.type','property_details.price','property_details.isactive',
                        'property_details.area','report_property.report_type','property_details.id as propertyId',
                        'report_property.message','users.username')
                ->get();
        $data = array();

        $p = 0;

        foreach ($resultArr as $row) {
            $p++;
            if ($row["isactive"] == '0') {
                $isactiveHtml = '<select class="isactive form-control " data-id="' . $row["propertyId"] . '">
                                    <option class="mdl-menu__item" value="0" selected>Active</option>
                                    <option class="mdl-menu__item" value="1">Deactive</option>
                                </select>';
            } else {
                $isactiveHtml = '<select class="isactive form-control " data-id="' . $row["propertyId"] . '">
                                    <option class="mdl-menu__item" value="0" >Active</option>
                                    <option class="mdl-menu__item" value="1" selected>Deactive</option>
                                </select>';
            }

            
            $nestedData = array();
            $nestedData[] = $p;
            $nestedData[] = $row['title'];
            $nestedData[] = $row['offer'];
            $nestedData[] = $row['type'];
            $nestedData[] = $row['price'];
            $nestedData[] = $row['area'];
            $nestedData[] = $row['report_type'];
            $nestedData[] = $row['message'];
            $nestedData[] = $row['username'];
            $nestedData[] = $isactiveHtml;
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

    public function changestatus($data){

        $objPropertyDetails = PropertyDetails::find($data['id']); 
        $objPropertyDetails->isactive = $data['val'];
        $objPropertyDetails->updated_at = date("Y-m-d h:i:s");
        return $objPropertyDetails->save();
    }   

}
