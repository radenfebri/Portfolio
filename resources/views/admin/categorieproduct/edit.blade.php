@extends('layouts-admin.layaouts', ['menu' => 'store', 'submenu' => 'categorie-product'])

@section('title', 'Update Categorie Product')

@section('content')

<div class="page-content">
    <!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Update Categorie Product <strong>{{ $categorieproduct->name }}</strong></h4>
                        <a href="{{ route('categorie-product.index') }}" class="btn btn-sm text-primary" style="float: right"><i class="fas fa-backward"></i><a>
                        </div>
                        <div class="card-content">
                            <div class="card-body">

                                <form action="{{ route('categorie-product.update', $categorieproduct->id ) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="">
                                            <div class="form-group">
                                                <label for="first-name-column">Name</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="bi bi-list-task"></i></span>
                                                    <input type="text" id="name" name="name" class="form-control  @error('name') is-invalid @enderror"
                                                    placeholder="Name Categorie" value="{{ old('name', $categorieproduct->name ) }}" required autocomplete="name">
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <div class="form-group">
                                                <label for="email-id-column">Deskripsi</label>
                                                <textarea class="form-control" value="{{ old('descriptio', $categorieproduct->description ) }}" name="description" id="description" required autocomplete="description">{{ $categorieproduct->description }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-4 col-12">
                                            <div class="form-group">
                                                <h6>Status</h6>
                                                <div class="checkbox">
                                                    <input type="checkbox" name="status" id="status" class="form-check-input" {{ $categorieproduct->status == "1" ? 'checked':'' }} >
                                                    <label for="checkbox1">Status</label>
                                                </div>
                                                @error('status')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-4 col-12">
                                            <div class="form-group">
                                                <h6>Popular</h6>
                                                <div class="checkbox">
                                                    <input type="checkbox" name="popular" id="popular" class="form-check-input"  {{ $categorieproduct->popular == "1" ? 'checked':'' }}>
                                                    <label for="checkbox1">Popular</label>
                                                </div>
                                                @error('popular')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <div class="form-group">
                                                <label for="first-name-column">Meta Title</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="bi bi-list-task"></i></span>
                                                    <input type="text" id="meta_title" name="meta_title" class="form-control  @error('meta_title') is-invalid @enderror"
                                                    placeholder="Meta Title" value="{{ old('meta_title', $categorieproduct->meta_title ) }}" required autocomplete="meta_title">
                                                    @error('meta_title')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <div class="form-group">
                                                <label for="first-name-column">Meta Keywords</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="bi bi-list-task"></i></span>
                                                    <input type="text" id="meta_keywords" name="meta_keywords" class="form-control  @error('meta_keywords') is-invalid @enderror"
                                                    placeholder="Meta Keywords" value="{{ old('meta_keywords', $categorieproduct->meta_keywords ) }}" required autocomplete="meta_keywords">
                                                    @error('meta_keywords')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <div class="form-group">
                                                <label for="first-name-column">Meta Description</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="bi bi-list-task"></i></span>
                                                    <input type="text" id="meta_descrip" name="meta_descrip" class="form-control  @error('meta_descrip') is-invalid @enderror"
                                                    placeholder="Meta Description" value="{{ old('meta_descrip', $categorieproduct->meta_descrip ) }}" required autocomplete="meta_descrip">
                                                    @error('meta_descrip')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <div class="form-group">
                                                <label for="email-id-column">Gambar Categorie</label>
                                                <input class="form-control" id="image" name="image" type="file" autocomplete="image">
                                                <br>
                                                <label for="email-id-column">Gambar Saat ini</label>
                                                <br>
                                                @if ($categorieproduct->image)
                                                <div class="avatar avatar-md">
                                                    <img src="{{ asset('storage/'. $categorieproduct->image ) }}" style="width: 10%; height: 10%;" alt="Face 1">
                                                </div>
                                                @else
                                                <div class="avatar avatar-md">
                                                    <img src="{{ asset('template') }}/images/faces/profile.jpg" style="width: 10%; height: 10%;" alt="Face 1">
                                                </div>
                                                <p>Gambar Kosong</p>
                                                @endif
                                                @error('image')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Update</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- // Basic multiple Column Form section end -->
    </div>

    @endsection
