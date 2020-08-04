<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout')
@section('title', 'product - create new')
@section('content')
<section class="content">
    <div class="container-fluid">
<div class="row">
    <div class="offset-md-3 col-md-6 mt-5">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create Game</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{ url("admin/products/postUpdate/".$product->ID) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{-- <a href="">{{dd(App\game::getNextGenID())}}</a> --}}
                <div class="card-body">
                    {{-- {{dd(App\game::where("ID",$product->ID)->first())}} --}}
                    <div class="form-group">
                        <label for="txt-name">Name</label>
                        <input value ="{{$product->NAME}}" placeholder="Input name of the game" type="text" id="txt-name" class="form-control" name="NAME">
                    </div>
                    <div class="form-group">
                        <label for="txt-category">Categories</label>
                        <select id="multipleCate" name="CATEGORY[]" id="txt-category" class="form-control" multiple="multiple">

                            @foreach (App\category::all() as $cate)
                                <option
                                    @if ($product->getCategoriesID()->contains($cate->ID))
                                        selected
                                    @endif
                                    value="{{$cate->ID}}">{{$cate->NAME}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="txt-publisher">Publishers</label>
                        <select id="multipleCate" name="PUBLISHER[]" id="txt-publisher" class="form-control" multiple="multiple">
                            @foreach (App\publisher::all() as $pub)
                                <option
                                    @if ($product->getPublishersID()->contains($pub->ID))
                                        selected
                                    @endif
                                    name="PUBLISHERS" value="{{$pub->ID}}">{{$pub->NAME}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="txt-Producer">Producers</label>
                        <select id="multipleCate" name="PRODUCER[]" id="txt-Producer" class="form-control" multiple="multiple">
                            @foreach (App\producer::all() as $prod)
                                <option
                                    @if ($product->getProducersID()->contains($prod->ID))
                                        selected
                                    @endif
                                    value="{{$prod->ID}}">{{$prod->NAME}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="txt-desc">Description</label>
                        <textarea placeholder="Input your game dexription here" rows="4" id="txt-desc" class="form-control" name="DESCRIPTION">{{$product->DESCRIPTION}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="txt-feature">Special Features</label>
                        <textarea placeholder="Input your game dexription here" rows="4" id="txt-feature" class="form-control" name="FEATURE">{{$product->FEATURE}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="txt-status">Status</label>
                        <select name="STATUS" id="txt-status" class="form-control">
                            <option @if ($product->STATUS == "1") selected @endif value="1">Available</option>
                            <option @if ($product->STATUS == "2") selected @endif value="2">Unavailable</option>
                            <option @if ($product->STATUS == "3") selected @endif value="3">Incoming</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="txt-price">Price</label>
                        <input value ="{{$product->PRICE}}" placeholder="$" type="text" min="1" rows="8" id="txt-price" class="form-control" name="PRICE">
                    </div>
                    <div class="form-group">
                        <label for="txt-sale">Sale</label>
                        <input value ="{{$product->SALE}}" placeholder="%" type="text" min="1" rows="8" id="txt-sale" class="form-control" name="SALE">
                    </div>
                    <div class="form-group">
                        <label for="txt-download">Link Download</label>
                        <input value ="{{$product->LINKDOWNLOAD}}" type="url" id="txt-download" class="form-control" name="LINKDOWNLOAD">
                    </div>
                    <div class="form-group">
                        <label for="txt-demo">Link Demo</label>
                        <input value ="{{$product->LINKDEMO}}" type="url" id="txt-demo" class="form-control" name="LINKDEMO">
                    </div>
                    <div>
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">Requirement</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="txt-age">Suitable Age</label>
                                    <input value ="{{$product->AGE_REQ}}" placeholder="Input suitable age for the game" type="number" id="txt-age" class="form-control" name="AGE">
                                </div>
                                <div class="form-group">
                                    <label for="txt-cpu">CPU</label>
                                    <input value ="{{$product->CPU}}" min="6" placeholder="Input suitable CPU for the game" type="text" id="txt-cpu" class="form-control" name="CPU">
                                </div>
                                <div class="form-group">
                                    <label for="txt-gpu">GPU</label>
                                    <input value ="{{$product->GPU}}" placeholder="Input suitable GPU for the game" type="text" id="txt-gpu" class="form-control" name="GPU">
                                </div>
                                <div class="form-group">
                                    <label for="txt-os">Operating System</label>
                                    <select name="OS"  id="txt-os" class="form-control">
                                        @foreach (App\os::all() as $os)
                                            <option @if ($product->OS == $os->ID) selected @endif value="{{$os->ID}}">{{$os->NAME}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="txt-storage">Storage (Memory)</label>
                                    <input value ="{{$product->STORAGE}}" placeholder="Input suitable memory for the game" type="number" min="1" id="txt-storage" class="form-control" name="STORAGE">
                                </div>
                                <div class="form-group">
                                    <label for="txt-ram">Ram</label>
                                    <input value ="{{$product->RAM}}" placeholder="Input suitable ram memory for the game" min="1" type="number" id="txt-ram" class="form-control" name="RAM">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button class="btn btn-danger" onclick="history.back()">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>
</div>
</section>
@endsection
@section('script-section')
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        bsCustomFileInput.init();
    });
</script>
@endsection
