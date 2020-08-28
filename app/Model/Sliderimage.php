<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Sliderimage extends Model
{
    //
    protected $table = "silder_image";

    public function getdatatable(){
        $requestData = $_REQUEST;
        $columns = array(
            0 => 'id',
            1 => 'image',
        );
        $query = Sliderimage ::from('silder_image');

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
                ->select('id', 'image')
                ->get();
        $data = array();
        $i = 0;

        foreach ($resultArr as $row) {
            $image = url("public/upload/sliderimage/" . $row['image']);

            $actionhtml = '';
            $actionhtml = '<a href="" data-toggle="modal" data-target="#deleteModel" class="btn btn-icon  deleteImage" data-id="' . $row["id"] . '" data-image="' . $row["image"] . '" ><i class="fa fa-trash" ></i></a>';
            $i++;
            $nestedData = array();
            $nestedData[] = $i;
            $nestedData[] = '<img height="160px" width="300px" src="' . $image . '" style="margin:20px;">';
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

    public function add($request){
        $objSliderimage = new Sliderimage();

        $image = $request->file('image');
        $name = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/upload/sliderimage');
        $image->move($destinationPath, $name);
        $objSliderimage->image = $name;
        $objSliderimage->created_at = date("Y-m-d h:i:s");
        $objSliderimage->updated_at = date("Y-m-d h:i:s");

        return $objSliderimage->save();
    }

    public function deleteImage($data){
        if ($data['image'] && $data['image'] != null) {
            $path = 'public/upload/sliderimage/' . $data['image'];
            if (file_exists($path)) {
                unlink($path);
            }
        }

        $result = Sliderimage::where('id', $data['id'])
                ->delete();
        return $result;
    }
}
