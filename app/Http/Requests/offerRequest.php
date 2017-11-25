<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class offerRequest extends FormRequest
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
        case "storeNew":
        return [
          'offername' => 'required|max:255',
          'offer_description' => 'required||max:255',
          'category' => 'required',
          'offer_expire' => 'required',
          'label' => 'required',
          'offerimages' => 'required',
        ];
          break;

        case "storeEdit":
        return [

          'avatar' => 'required',

        ];
          break;

        default:

          break;
      }
    }
}
