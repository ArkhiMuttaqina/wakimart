@extends('errors::minimal')

@section('title', __('Berhenti, Anda dilarang!'))
@section('code', '403')
@section('reallycode', 'CODE ERROR 403 FORBIDDEN')
@section('message', __($exception->getMessage() ?: 'Sepertinya anda tersesat, Halaman ini untuk orang tertentu saja'))
