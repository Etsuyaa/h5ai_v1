




<!DOCTYPE html>
<html>
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

<a href="/">Retourner a la racine</a>
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
@foreach($folders as $folder)

      <tr class="tr">
        <td class="td" id={{$folder->icone}}></td>
        <td class="td" id="name"><a href="{{route('myh5ai', $folder->item_path.$folder->name)}}">{{$folder->name}}</a></td>
        <td class="td">{{$folder->size}}</td>
        <td class="td">{{$folder->type}}</td>
        <td class="td">{{$folder->lastmodif}}</td>
      </tr>
@endforeach
@foreach($files as $file)
      <tr class="tr">
        <td class="td" id={{$file->icone}}></td>
        <td class="td" id="name"><a href="{{ route('text', $file->item_path) }}" target="_blank" >{{$file->name}}</a></td>
        <td class="td">{{$file->size}}</td>
        <td class="td">{{$file->type}}</td>
        <td class="td">{{$file->lastmodif}}</td>
      </tr>
@endforeach
    </tbody>

  </table>
</div>
</section>
</body>
</html>






