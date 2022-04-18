<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
    </head>
    <body>
    <div id="app">
            <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                <div class="card-header">{{ __('Add Item') }}</div>

                <div class="card-body">
                
                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" autocomplete="name" autofocus v-model="newItem.name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="detail" class="col-md-4 col-form-label text-md-right">Detail</label>

                            <div class="col-md-6">
                                <textarea id="detail" class="form-control{{ $errors->has('detail') ? ' is-invalid' : '' }}" name="detail" autocomplete="detail" v-model="newItem.detail"> </textarea>
                                <!-- <input id="detail" type="text" class="form-control{{ $errors->has('detail') ? ' is-invalid' : '' }}" name="detail" value="{{ old('detail') }}" autocomplete="detail"> -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="catagory" class="col-md-4 col-form-label text-md-right">Catagory</label>

                            <div class="col-md-6">
                                <input id="catagory" type="catagory" class="form-control{{ $errors->has('catagory') ? ' is-invalid' : '' }}" name="catagory" value="{{ old('catagory') }}" autocomplete="catagory" v-model="newItem.catagory">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Code" class="col-md-4 col-form-label text-md-right">Code</label>

                            <div class="col-md-6">
                                <input id="code" type="text" class="form-control" name="code" autocomplete="code" v-model="newItem.code">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="model" class="col-md-4 col-form-label text-md-right">Model</label>

                            <div class="col-md-6">
                                <input id="model" type="text" class="form-control" name="model" autocomplete="model" v-model="newItem.model">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="purchase_price" class="col-md-4 col-form-label text-md-right">Purchase Price</label>

                            <div class="col-md-6">
                                <input id="purchase_price" type="text" class="form-control" name="purchase_price" autocomplete="purchase_price" v-model="newItem.purchase_price">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sale_price" class="col-md-4 col-form-label text-md-right">Sale Price</label>

                            <div class="col-md-6">
                                <input id="sale_price" type="text" class="form-control" name="sale_price" autocomplete="sale_price" v-model="newItem.sale_price" required>
                            </div>
                        </div>
                            <button class="btn btn-primary" @click.prevent="createItem()">
                                Add Item
                            </button>
                            </div>
                        </div>
       
                </div>
            </div>
        </div>
    </div>
</div>

        <script src="/js/app.js"></script>
       
    </body>