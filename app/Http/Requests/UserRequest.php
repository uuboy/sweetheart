<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|between:3,25|regex:/^[A-Za-z0-9\-\_]+$/|unique:users,name,' . Auth::id(),
            'email' => 'required|email',
            'introduction' => 'max:80',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '用户名不能为空',
            'name.regex' => '用户名只支持英文、数字、下划线和横杠',
            'name.between' => '用户名字符数只能介于3到25个字符',
            'name.unique' => '用户名已被占用',
            'email.required' => '邮箱不能为空',
            'email.email' => '邮箱格式不正确',
            'introduction.max' => '个人简介最多80个字符',
        ];
    }
}