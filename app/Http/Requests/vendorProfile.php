<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class vendorProfile extends FormRequest
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
        $routeName = $this->route()->getName();
        switch ($routeName) {
          case "setPersonalInfo":
          return [
            'firstName' => 'required|max:255',
            'shopName' => 'required||max:255',
            'address' => 'required|max:255',
            'mobileNo' => 'required|numeric|regex:/[0-9]/',
            'zipcode' => 'required|numeric',
            'website' => 'required',


          ];
            break;
          case "setAvatar":
          return [

            'avatar' => 'required',

          ];
            break;
          case "setPassword":
          return [
            'currentPassword' => 'required|min:6',
            'newPassword' => 'required|min:6',
            'confirmPassword' => 'required|min:6|same:newPassword',

          ];
            break;
          case "setLocation":
          return [

            'address' => 'required|max:255',


          ];
            break;

          default:

            break;
        }

    }
}
