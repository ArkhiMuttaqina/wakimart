@extends('errors::layout')

@section('title', __('Ups, Maaf berhenti disini.'))
@section('code', '401')
@section('reallycode', 'CODE ERROR 401 UNAUTHORIZED')
@section('message', __('Anda tidak memiliki izin untuk mengakses halaman ini.'))
