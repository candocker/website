<?php $module = 'petcms'; ?>
@extends('layouts.layout')
@section('main')
<div class="szwrap">
<x-section params="<?php echo json_encode(['module' => $module, 'section' => 'top']); ?>" />
<x-section params="<?php echo json_encode(['module' => $module, 'section' => 'nav']); ?>" />
@yield('content')
<x-section params="<?php echo json_encode(['module' => $module, 'section' => 'footer']); ?>" />
<x-section params="<?php echo json_encode(['module' => $module, 'section' => 'footer-js']); ?>" />
</div>
@endsection
@section('dynamicMeta')
@section('jscss')
<x-section params="<?php echo json_encode(['module' => $module, 'section' => 'jscss']); ?>" />
@endsection
@section('bodyClass')
