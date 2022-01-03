<?php

use App\Models\Doctor;
use App\Models\Patient;

if(!function_exists('notify')) {
    function notify(array $params): string
    {
      $timer = $params[2] ?? 5000;

      return "const Toast = Swal.mixin({
          toast: true,
          position: 'top',
          showConfirmButton: false,
          timer: $timer,
          timerProgressBar: true,
        })
        
        Toast.fire({
          icon: '$params[1]',
          title: '$params[0]'
        })";
    }
}

if(!function_exists('isDoctor')) {
  function isDoctor(): bool
  {
    return Auth()->user()->userable instanceof Doctor;
  }
}

if(!function_exists('isPatient')) {
  function isPatient(): bool
  {
    return Auth()->user()->userable instanceof Patient;  
  }
}