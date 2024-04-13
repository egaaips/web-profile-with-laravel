<?php

use App\Filament\Resources\ServiceResource;
use App\Models\galeri;
use App\Models\hero;
use App\Models\news;
use App\Models\profile;
use App\Models\service;
use App\Models\setting;

function get_setting_value($key){
    $data = setting::where('key',$key)->first();
    if(isset($data->value)){
        return $data->value;
    } else {
        return 'empty';
    }
}

function get_hero(){
    $data = hero::all();
    return $data;
}

function get_service(){
    $data = service::all();
    return $data;
}

function get_news(){
    $data = news::all();
    return $data;
}

function get_berita($id)
{
    $data = news::where('id', $id)->first();
    if(isset($data)) {
        return $data;
    }
}

function profile_data($key)
{
    $data = profile::where('key', $key)->first();
    if(isset($data)) {
        return $data;
    }
}

function get_galeri(){
    $data = galeri::all();
    return $data;
}


