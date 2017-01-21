
@extends('layouts.main')
@section ('title','SVALKA24-Сдать вещи')
@section('content')

    <div id="services-section" class="text-center">
        <h3>Заполните небольшую форму чтобы сдать вещи на свалку</h3>
        <div class="container">
            @include('common.errors')
            <form action="/task" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Ваше имя:</label>
                    <input type="text" name="name" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="tel">Телефон:</label>
                    <input type="text" name="tel" class="form-control" id="tel">
                </div>
                <div class="form-group">
                    <label for="email">e-mail:</label>
                    <input type="text"  name="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="description">Описание:</label>
                    <textarea name="description"  class="form-control" cols="5" id="description"></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Фотография1:</label>
                    <input type="file"  name="file[]" accept="image/*,image/jpeg" multiple="true">
                </div>
                <div class="form-group">
                    <label for="image">Фотография2:</label>
                    <input type="file"  name="file[]" accept="image/*,image/jpeg" multiple="true">
                </div>
                <div class="form-group">
                    <label for="image">Фотография3:</label>
                    <input type="file"  name="file[]" accept="image/*,image/jpeg" multiple="true">
                </div>
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <!--  <div class="g-recaptcha" data-sitekey="6Lc0GxEUAAAAAKy9tjLVGKoaHkQDOVMsBk8O16Wr"></div> -->
                <button type="submit" class="btn btn-default">Отправить</button>
            </form>

        </div>
    </div>
@endsection