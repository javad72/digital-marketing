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
            <form class="row g-3 needs-validation" novalidate="">
                <div class="col-md-4">
                    <label class="form-label" for="portfolioTitle">عنوان </label>
                    <input class="form-control" id="portfolioTitle" type="text" value="" required="true" />
                    <div class="valid-feedback">Looks good!</div>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="portfolioType">نوع </label>
                    <input class="form-control" id="portfolioType" type="text" value="" required="true" />
                    <div class="valid-feedback">Looks good!</div>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="portfolioAddress">آدرس </label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input class="form-control" id="portfolioAddress" type="text" aria-describedby="inputGroupPrepend" required="true" />
                        <div class="invalid-feedback">لطفا آدرس صفحه یا پیج مربوطه را وارد کنید</div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" id="showDesktop" type="checkbox" value="" />
                        <label class="form-check-label mb-0" for="showDesktop">نمایش در صفحه اصلی</label>
                        <div class="invalid-feedback mt-0">You must agree before submitting.</div>
                    </div>
                </div>
                <div class="col-12">

                </div>
                <div class="col-12"><button class="btn btn-primary" type="submit">Submit form</button></div>
            </form>

        </div>
    </div>

@endsection
