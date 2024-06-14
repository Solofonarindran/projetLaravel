<?php
namespace App\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

abstract class BaseFromRequest extends FormRequest{

    abstract public function authorize();
    abstract public function rules();
    abstract public function messages();
}