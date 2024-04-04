@extends('admin.layouts.master');

@section('content')
    <div class="main-content app-content">
        <div class="container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title my-auto">Sửa Danh Mục: <strong>{{ $brand->name }}</strong></h1>
                <div>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Ecommerce</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Sửa Danh Mục</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->


            <!-- Start::row-1 -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-body add-products p-0">
                            <form action="{{ route('admin.brand.update', $brand->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="p-4">
                                    <div class="row gx-5">
                                        <div class="col-xxl-8 col-xl-12 col-lg-12 col-md-8">
                                            <div class="card custom-card shadow-none mb-0 border-0">
                                                <div class="card-body p-0">
                                                    <div class="row gy-3">
                                                        <div class="col-xl-12">
                                                            <label for="product-name-add" class="form-label">Tên Danh
                                                                Mục</label>
                                                            <input type="text" class="form-control" id="product-name-add"
                                                                placeholder="Tên Danh Mục" name="name"
                                                                value="{{ $brand->name }}">
                                                            <label for="product-name-add"
                                                                class="form-label mt-1 fs-12 op-5 text-muted mb-0">* Tên Sản
                                                                Phẩm Không Quá 50 từ</label>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <label for="product-image-add" class="form-label">Tên Thương
                                                                Hiệu</label>
                                                            <input type="file" class="form-control"
                                                                id="product-image-add" placeholder="Tên Thương Hiệu"
                                                                name="image">
                                                            <input type="hidden" name="oldImage"
                                                                value="{{ $brand->image }}">
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <label for="product-tags" class="form-label">Trạng Thái</label>
                                                            <select class="form-select" aria-label="Default select example"
                                                                name="status">
                                                                <option selected="">Chọn Trạng Thái</option>
                                                                <option {{ $brand->status == 0 ? 'selected' : '' }}
                                                                    value="0">Ẩn</option>
                                                                <option {{ $brand->status == 1 ? 'selected' : '' }}
                                                                    value="1">Hiện</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <label for="product-description-add" class="form-label">Mô Tả
                                                                Danh
                                                                Mục</label>
                                                            <textarea class="form-control" id="product-description-add" rows="2" name="description">{{ $brand->description }}</textarea>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-xl-12 col-lg-12 col-md-4">
                                            <div class="card custom-card shadow-none mb-0 border-0">
                                                <div class="card-body p-0">
                                                    <div class="row gy-3">
                                                        <div class="text-center">
                                                            <img src="{{ asset($brand->image) }}" class="img-fluid rounded"
                                                                alt="...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 py-3 border-top border-block-start-dashed d-sm-flex justify-content-end">
                                    <a href="{{ route('admin.brand.index') }}"
                                        class="btn btn-danger-gradient btn-wave waves-effect waves-light m-1"><i
                                            class="fal fa-undo"></i> &nbsp; Hủy</a>
                                    <button type="submit"
                                        class="btn btn-primary-gradient btn-wave waves-effect waves-light m-1">Lưu Thay Đổi
                                        &nbsp; <i class="fas fa-save"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--End::row-1 -->

        </div>
    </div>
@endsection
