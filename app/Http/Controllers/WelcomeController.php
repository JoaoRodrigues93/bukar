<?php
namespace App\Http\Controllers;

class WelcomeController extends Controller {
    public function showInicio () {
        return View('welcome2');
    }
}
