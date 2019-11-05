@extends('principal')
@section('contenido')
  <template v-if="menu==0">
    <example-component></example-component>
  </template>

  <template v-if="menu==1">
    <h1>Contenido Menu 1</h1>
  </template>
  <template v-if="menu==2">
    <h1>Contenido Menu 2</h1>
  </template>
  <template v-if="menu==3">
    <h1>Contenido Menu 3</h1>
  </template>
@endsection
