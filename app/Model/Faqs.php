<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Faqs extends Model
{
    //
    protected $table ="faqs";
    public function getdatatable(){
        $requestData = $_REQUEST;
        $columns = array(
            0 => 'faqs.id',
            1 => 'faqs.question',
            2 => 'faqs.answer',
            2 => 'faqs.created_at',
        );
        $query = Blog ::from('faqs')
                    ->where('faqs.is_deleted','0');

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
                ->select('faqs.id','faqs.question','faqs.answer','faqs.created_at')
                ->get();
        $data = array();
        $i = 0;

        foreach ($resultArr as $row) {
            $actionhtml = '';
            $actionhtml ='<a href="'.route('admin-edit-faq',$row['id']).'"  class="btn btn-icon primary"  ><i class="fa fa-edit"></i></a>'
                    .'<a href="" data-toggle="modal" data-target="#deleteModel" class="btn btn-icon  deletefaqs" data-id="' . $row["id"] . '" ><i class="fa fa-trash" ></i></a>';
            $i++;
            $nestedData = array();
            $nestedData[] = $i;
            $nestedData[] = $row['question'];
            $nestedData[] = $row['answer'];
            $nestedData[] = date("d-M-Y h:i:s",strtotime($row['created_at']));
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
        $count = Faqs::where("question",$request->input("question"))
                    ->where("is_deleted","0")
                    ->count();

        if($count == "0"){
            $objFaqs = new Faqs();
            $objFaqs->question = $request->input("question");
            $objFaqs->answer = $request->input("answer");
            $objFaqs->is_deleted ="0";
            $objFaqs->created_at = date("Y-m-d h:i:s");
            $objFaqs->updated_at = date("Y-m-d h:i:s");
            if($objFaqs->save()){
                return "true";
            }else{
                return "false";
            }
        }else{
            return "exits";
        }
    }

    public function deletefaqs($data){
            $objFaqs = Faqs::find($data['id']); 
            $objFaqs->is_deleted ="1";
            $objFaqs->updated_at = date("Y-m-d h:i:s");
            return $objFaqs->save();
    }
    public function editDetails($id){
        return Faqs::select("question","answer","id")
                            ->where("id",$id)
                            ->get();
    }
    public function edit($request){
        $count = Faqs::where("question",$request->input("question"))
                    ->where("is_deleted","0")
                    ->where("id","!=",$request->input("id"))
                    ->count();

        if($count == "0"){
            $objFaqs = Faqs::find($request->input("id")); 
            $objFaqs->question = $request->input("question");
            $objFaqs->answer = $request->input("answer");
            $objFaqs->updated_at = date("Y-m-d h:i:s");
            if($objFaqs->save()){
                return "true";
            }else{
                return "false";
            }
        }else{
            return "exits";
        }
    }
}
