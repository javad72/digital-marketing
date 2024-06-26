@extends('livewire.admin.layouts.admin')
@section('content')
    <h1>portfolio</h1>
    <div id="tableExample3" data-list='{"valueNames":["name","email","age"],"page":5,"pagination":true}'>
        <div class="row justify-content-end g-0">
            <div class="col-auto col-sm-5 mb-3">
                <form>
                    <div class="input-group"><input class="form-control form-control-sm shadow-none search" type="search" placeholder="Search..." aria-label="search" />
                        <div class="input-group-text bg-transparent"><span class="fa fa-search fs-10 text-600"></span></div>
                    </div>
                </form>
            </div>
        </div>
        <div class="table-responsive scrollbar">
            <table class="table table-bordered table-striped fs-10 mb-0 text-center">
                <thead class="bg-200">
                <tr>
                    <th class="text-900 sort " data-sort="num">ردیف</th>
                    <th class="text-900 sort" data-sort="title">عنوان پروژه</th>
                    <th class="text-900 sort" data-sort="type">نوع</th>
                    <th class="text-900 sort" data-sort="url">آدرس </th>
                    <th class="text-900 " data-sort="showInHome">نمایش در صفحه اصلی</th>
                    <th class="text-900 " data-sort="actions">عملیات</th>
                </tr>
                </thead>
                <tbody class="list">
                  <tr>
                    <td class="num text-center">1</td>
                    <td class="title">فروشگاه اینترنتی اسپریرال راگ</td>
                    <td class="title">سایت</td>
                    <td class="url">anna@example.com</td>
                    <td class="showInHome">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="green" class="bi bi-check2" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0"/>
                        </svg>
                    </td>
                    <td class="actions d-flex flex-row justify-content-around">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/>
                            </svg>
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                            </svg>
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center mt-3"><button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
            <ul class="pagination mb-0"></ul><button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"> </span></button>
        </div>
    </div>
@endsection
