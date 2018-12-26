<?php

namespace App\Handlers;

class ImageUploadHandler
{
    //设置允许的后缀名数组
    protected $allowed_ext = ["png","jpg","jpeg","gif"];

    public function save($file,$folder,$file_prefix)
    {
        //设置文件夹名存储路径规则
        $folder_name = "uploads/images/$folder".date("Ym/d",time());

        //设置文件物理存储路径
        $upload_path = public_path().'/'.$folder_name;

        //获取文件后缀名
        $extension = strtolower($file->getClientOriginalExtension()) ? :'png';

        //设置文件名格式
        $filename = $file_prefix.'_'.time().'_'.str_random(5).'.'.$extension;

        //拒绝不允许的文件格式
        if(!in_array($extension, $this->allowed_ext)){
            return false;
        }

        //移动文件到目标存储路径
        $file->move($upload_path,$filename);

        return [
            'path' => config('app.url')."/$folder_name/$filename"
        ];


    }
}
