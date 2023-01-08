<x-layout title="Cadastrar nova série">
    <x-series.form :action="route('series.store')" :name="old('name')" :update="false"/>
</x-layout>