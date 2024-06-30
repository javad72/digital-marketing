@extends('livewire.admin.layouts.admin')

@section('content')
    <div class="container">
        <div class="card mb-3">
            <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url({{asset('assets/admin/img/icons/spot-illustrations/corner-4.png')}});"></div><!--/.bg-holder-->
            <div class="card-body position-relative">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>افزودن نمونه کار</h3>
                        <p class="mb-0">افزودن نمونه کار و نمایش در صفحه اصلی و قسمت نمونه کار ها</p>
                        <a class="btn btn-link btn-sm ps-0 mt-2" href="{{env('APP_URL')}}" target="_blank">مشاهده نمونه کار ها
                            <svg class="svg-inline--fa fa-chevron-right fa-w-10 ms-1 fs-11" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <form wire:submit.prevent="save" class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <div class="col-md-4">
                    <label class="form-label" for="portfolioTitle">عنوان</label>
                    <input wire:model="portfolioTitle" class="form-control" id="portfolioTitle" type="text" required />
                    @error('portfolioTitle') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="portfolioType">نوع</label>
                    <input wire:model="portfolioType" class="form-control" id="portfolioType" type="text" required />
                    @error('portfolioType') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="portfolioAddress">آدرس</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input wire:model="portfolioAddress" class="form-control" id="portfolioAddress" type="text" aria-describedby="inputGroupPrepend" required />
                        @error('portfolioAddress') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-check mt-4">
                        <input wire:model="showDesktop" class="form-check-input" id="showDesktop" type="checkbox" />
                        <label class="form-check-label mb-0" for="showDesktop">نمایش در صفحه اصلی</label>
                    </div>
                </div>
                <div class="col-md-6 portfolio-image-wrap mt-5">
                    <div class="position-relative">
                        <div class="cover-image ms-auto">
                            <img src="{{asset('assets/admin/img/generic/16.jpg')}}" alt="" class="w-100 rounded-3"/>
                            <input wire:model="screenshot" class="d-none" id="portfolio-cover-image" name="screenshot" type="file" />
                            <label class="cover-image-file-input" for="portfolio-cover-image">
                                <svg class="svg-inline--fa fa-camera fa-w-16 me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="camera" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M512 144v288c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V144c0-26.5 21.5-48 48-48h88l12.3-32.9c7-18.7 24.9-31.1 44.9-31.1h125.5c20 0 37.9 12.4 44.9 31.1L376 96h88c26.5 0 48 21.5 48 48zM376 288c0-66.2-53.8-120-120-120s-120 53.8-120 120 53.8 120 120 120 120-53.8 120-120zm-32 0c0 48.5-39.5 88-88 88s-88-39.5-88-88 39.5-88 88-88 88 39.5 88 88z"></path>
                                </svg>
                                <span>آپلود اسکرین شات</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <button  class="btn btn-primary" type="button">ذخیره</button>
                </div>
            </form>


        </div>
    </div>

@endsection
