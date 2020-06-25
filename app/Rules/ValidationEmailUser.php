<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\User;
class ValidationEmailUser implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //
        $user = User::all();
        // dd($user);
        $arr1 = [];
        foreach ($user as $arr){
            $arr1[] =$arr->email;
        }
        if(in_array($value, $arr1)){
            return false;
        }else{
            return true;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return trans('Ky email eshte i perdorur. Perdor nje tjeter email');;;
    }
}
