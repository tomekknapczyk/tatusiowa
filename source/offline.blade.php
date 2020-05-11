---
extends: _layouts.master
section: content
permalink: offline.html
---
@extends('_layouts.master')

@section('body')
    <section>
        <p class="text-xl text-center py-8">Ups, wygląda na to, że jesteś offline. Aplikacja wymaga połączenia internetowego.</p>
            <img src="/assets/img/mapa.svg" class="w-full lg:w-1/3 xl:w-1/2 mb-10" alt="mapa"/>
        </div>
    </section>
@stop
