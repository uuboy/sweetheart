<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RecordRequest;
use App\Models\Record;
use App\Handdlers\ImageUploadHandler;

class RecordController extends Controller
{
    public function store(RecordRequest $request,ImageUploadHandler $uploader, Record $record)
    {
        $date = $request->all();
        if($request->pic){
            $result = $uploader->save($request->pic,'Memory_Image','Image');
            if($result){
                $date['pic'] = $result['path'];
            }
        }
        $record->fill($date);
        $record->save();
    }

    public function update(RecordRequest $request,ImageUploadHandler $uploader, Record $record)
    {
        $date = $request->all();
        if($request->pic){
            $result = $uploader->save($request->pic,'Memory_Image','Image');
            if($result){
                $date['pic'] = $result['path'];
            }
        }
        $record->update($date);
    }

    public function destory(Record $record)
    {
        $record->delete();
    }

    public function show()
    {

    }
}
