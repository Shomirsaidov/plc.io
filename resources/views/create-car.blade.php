@extends('layouts.app')

@section('title')
  Добавление авто - plc.auction 
@endsection

@section('content')
<div class="max-w-2xl mx-auto mt-10 bg-white p-6 rounded shadow-md">
    <h2 class="text-2xl font-bold mb-4">Добавить новый автомобиль</h2>
    <form action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="vin" class="block text-gray-700 font-medium mb-2">VIN</label>
            <input type="text" id="vin" name="vin" class="w-full p-2 border rounded outline-blue-500">
        </div>
        <div class="mb-4">
            <label for="lot" class="block text-gray-700 font-medium mb-2">Лот</label>
            <input type="text" id="lot" name="lot" class="w-full p-2 border rounded outline-blue-500">
        </div>
        <div class="mb-4">
            <label for="location" class="block text-gray-700 font-medium mb-2">Локация</label>
            <input type="text" id="location" name="location" class="w-full p-2 border rounded outline-blue-500">
        </div>
        <div class="mb-4">
            <label for="date" class="block text-gray-700 font-medium mb-2">Дата</label>
            <input type="text" id="date" name="date" class="w-full p-2 border rounded outline-blue-500">
        </div>
        <div class="mb-4">
            <label for="state" class="block text-gray-700 font-medium mb-2">Состояние</label>
            <input type="text" id="state" name="state" class="w-full p-2 border rounded outline-blue-500">
        </div>
        <div class="mb-4">
            <label for="damages" class="block text-gray-700 font-medium mb-2">Повреждения</label>
            <input type="text" id="damages" name="damages" class="w-full p-2 border rounded outline-blue-500">
        </div>
        <div class="mb-4">
            <label for="mileage" class="block text-gray-700 font-medium mb-2">Пробег</label>
            <input type="text" id="mileage" name="mileage" class="w-full p-2 border rounded outline-blue-500">
        </div>
        <div class="mb-4">
            <label for="fuel" class="block text-gray-700 font-medium mb-2">Тип топлива</label>
            <input type="text" id="fuel" name="fuel_type" class="w-full p-2 border rounded outline-blue-500">
        </div>
        <div class="mb-4">
            <label for="sale_type" class="block text-gray-700 font-medium mb-2">Тип продажи</label>
            <input type="text" id="sale_type" name="sale_type" class="w-full p-2 border rounded outline-blue-500">
        </div>
        <div class="mb-4">
            <label for="doc_type" class="block text-gray-700 font-medium mb-2">Тип документа</label>
            <input type="text" id="doc_type" name="doc_type" class="w-full p-2 border rounded outline-blue-500">
        </div>
        <div class="mb-4">
            <label for="min_price" class="block text-gray-700 font-medium mb-2">Мин. Цена</label>
            <input type="text" id="min_price" name="min_price" class="w-full p-2 border rounded outline-blue-500">
        </div>
        <div class="mb-4">
            <label for="avg_price" class="block text-gray-700 font-medium mb-2">Средняя Цена</label>
            <input type="text" id="avg_price" name="avg_price" class="w-full p-2 border rounded outline-blue-500">
        </div>
        <div class="mb-4">
            <label for="max_price" class="block text-gray-700 font-medium mb-2">Макс. Цена</label>
            <input type="text" id="max_price" name="max_price" class="w-full p-2 border rounded outline-blue-500">
        </div>
        <div class="mb-4">
            <label for="make" class="block text-gray-700 font-medium mb-2">Марка</label>
            <input type="text" id="make" name="make" class="w-full p-2 border rounded outline-blue-500">
        </div>
        <div class="mb-4">
            <label for="model" class="block text-gray-700 font-medium mb-2">Модель</label>
            <input type="text" id="model" name="model" class="w-full p-2 border rounded outline-blue-500">
        </div>
        <div class="mb-4">
            <label for="year" class="block text-gray-700 font-medium mb-2">Год</label>
            <input type="text" id="year" name="year" class="w-full p-2 border rounded outline-blue-500">
        </div>
        <div class="mb-4">
            <label for="body" class="block text-gray-700 font-medium mb-2">Кузов</label>
            <input type="text" id="body" name="body" class="w-full p-2 border rounded outline-blue-500">
        </div>
        <div class="mb-4">
            <label for="keys_" class="block text-gray-700 font-medium mb-2">Ключи</label>
            <input type="text" id="keys_" name="keys_" class="w-full p-2 border rounded outline-blue-500">
        </div>
        <div class="mb-4">
            <label for="engine" class="block text-gray-700 font-medium mb-2">Двигатель</label>
            <input type="text" id="engine" name="engine" class="w-full p-2 border rounded outline-blue-500">
        </div>
        <div class="mb-4">
            <label for="color" class="block text-gray-700 font-medium mb-2">Цвет</label>
            <input type="text" id="color" name="color" class="w-full p-2 border rounded outline-blue-500">
        </div>
        <div class="mb-4">
            <label for="width" class="block text-gray-700 font-medium mb-2">Ширина (не обязательно)</label>
            <input type="text" id="width" name="width" class="w-full p-2 border rounded outline-blue-500">
        </div>
        <div class="mb-4">
            <label for="length" class="block text-gray-700 font-medium mb-2">Длина (не обязательно)</label>
            <input type="text" id="length" name="length" class="w-full p-2 border rounded outline-blue-500">
        </div>
        <div class="mb-4">
            <label for="height" class="block text-gray-700 font-medium mb-2">Высота (не обязательно)</label>
            <input type="text" id="height" name="height" class="w-full p-2 border rounded outline-blue-500">
        </div>
        <div class="mb-4">
            <label for="weight" class="block text-gray-700 font-medium mb-2">Вес (не обязательно)</label>
            <input type="text" id="weight" name="weight" class="w-full p-2 border rounded outline-blue-500">
        </div>
        <div class="mb-4">
            <label for="seats" class="block text-gray-700 font-medium mb-2">Сиденья</label>
            <input type="text" id="seats" name="seats" class="w-full p-2 border rounded outline-blue-500">
        </div>
        <div class="mb-4">
            <label for="speed" class="block text-gray-700 font-medium mb-2">Скорость</label>
            <input type="text" id="speed" name="speed" class="w-full p-2 border rounded outline-blue-500">
        </div>
        <div class="mb-4">
            <label for="transmission" class="block text-gray-700 font-medium mb-2">Транмиссия</label>
            <input type="text" id="transmission" name="transmission" class="w-full p-2 border rounded outline-blue-500">
        </div>
        <div class="mb-4">
            <label for="drive" class="block text-gray-700 font-medium mb-2">Привод</label>
            <input type="text" id="drive" name="drive" class="w-full p-2 border rounded outline-blue-500">
        </div>

        <div class="mb-4">
            <label for="images" class="block text-gray-700 font-medium mb-2">Изображения</label>
            <input type="file" id="images" name="images[]" class="w-full p-2 border rounded outline-blue-500" multiple>
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-medium mb-2">Описание</label>
            <textarea id="description" rows="6" name="description" class="w-full p-2 border rounded outline-blue-500"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Добавить автомобиль</button>
    </form>
</div>
@endsection
