<!DOCTYPE html>
<html class="has-background-white-ter">
<head>
  <title>My_h5ai</title>
  <link href="{{ url('css/style.css') }}" rel="stylesheet" type="text/css" />
       <link href="{{ url('css/bulma.css') }}" rel="stylesheet" type="text/css" />

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
   <script type="text/javascript" src="{!! asset('js/joequery-Stupid-Table-Plugin-2da8837/stupidtable.js') !!}"></script>

  <script>

    $(function(){

        $("table").stupidtable();
    });
  </script>


</head>

<body>
  <section class="section">
<div class="container">


  <table class="table" id="table1">
    <thead class="thead">
      <tr class="tr">
        <th class="th"></th>
        <th data-sort="string" class="th">Nom</th>
        <th data-sort="int" class="th">Taille</th>
        <th data-sort="string" class="th">Type</th>
        <th data-sort="string" data-sort-onload="yes" class="th">Dernière modification</th>
      </tr>
    </thead>

    <tbody class="tbody">
    	{{var_dump($folders)}}
@foreach($folders as $folder)
     {{var_dump($folder)}}
@endforeach