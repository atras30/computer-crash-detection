<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view("user_page.dashboard", [
            "navbarBackgroundColor" => [253, 250, 233, 0.65]
        ]);
    }

    public function login() {
        return view("authentication_page.login", [
            "navbarBackgroundColor" => [114, 124, 136, 0.65],
            "navbarTextColor" => "white"
        ]);

    }

    public function aboutUs() {
        return view("user_page.about_us", [
            "navbarBackgroundColor" => [255, 194, 171, 0.65]
        ]);
    }

    public function chooseSymptom() {
        return view("user_page.choose_symptom", [
            "navbarBackgroundColor" => [253, 250, 233, 0.6]
        ]);
    }

    public function result() {
        return view("user_page.result", [
            "navbarBackgroundColor" => [253, 250, 233, 0.6]
        ]);
    }
}
