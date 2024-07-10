@extends('layout.private-layout')

@section('title', 'Courts list')

@section('main')
<div class="row g-2 mb-3" layout:fragment="content">

    <div class="col-sm-12">
        <div th:if="${success != null}" class="alert alert-success border-0 d-flex align-items-center" role="alert">
            <div class="bg-success me-3 icon-item"><span class="fas fa-check-circle text-white fs-6"></span></div>
            <p class="mb-0 flex-1" th:text="${success}"></p>
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <div th:if="${error != null}" class="alert alert-danger border-0 d-flex align-items-center" role="alert">
            <div class="bg-danger me-3 icon-item"><span class="fas fa-times-circle text-white fs-6"></span></div>
            <p class="mb-0 flex-1" th:text="${error}"></p>
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card border-0 p-3 shadow">
            <div class="d-flex justify-content-between">
                <h5 th:text="#{label.division.list}"></h5>
            </div>
            <form th:action="${Endpoint.DIVISION_LIST_URI}" th:object="${filterParam}" onsubmit="updateForm()" class="mt-2">
                <div class="row g-2">
                    <div class="col-sm-6 col-md-3">
                        <input aria-label="name-bn" class="form-control" th:field="*{nameBn}" id="name-bn" type="text"
                               th:placeholder="#{label.name.bn}"/>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-3">
                        <input aria-label="name-en" class="form-control" th:field="*{nameEm}" id="name-en" type="text"
                               placeholder="English name"/>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <button class="btn btn-primary w-100" type="submit">
                            <span class="fas fa-filter ms-1" data-fa-transform="shrink-3"> </span> ফিল্টার করুন
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card border-0 p-2 shadow">
            <div class="row">
                <div class="col-md-12">
                    <div class="p-2 d-flex justify-content-between align-items-center">
                        <h5 th:text="| #{label.total} : ${divisions.page.totalElements} |"></h5>
                        <div>
                            <select aria-label="page-size-selector" onchange="onChangePageSize()" th:field="*{filterParam.size}" id="pageSizeSelector"
                                    class="form-select" name="pageSizeSelector">
                                <option value="10" selected="selected">10</option>
                                <option value="20">20</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <table class="table table-hover stripped">
                        <thead>
                        <tr>
                            <th scope="col" class="ms-2 ps-3">#</th>
                            <th scope="col" class="text-center" th:text="#{label.division}"></th>
                            <th scope="col" class="text-end pe-3" th:text="#{label.actions}"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr th:each="item, state : ${divisions.page}">
                            <td class="ms-2 center-td ps-3" th:text="| ${state.index + 1} |"></td>
                            <td class="text-center center-td fs-18-400-17 black-text"  th:text="${#locale.toString() =='en' ? item.getNameEn():item.getNameBn()}"></td>
                            <td class="center-td text-end pe-3">
                                <div>
                                    <a class="btn btn-link p-0"
                                       th:href="@{ ${Endpoint.DIVISION_EDIT_URI} (id=${item.id}) }" type="button"
                                       data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span
                                            class="text-500 fas fa-edit"></span></a>
                                    <a th:replace="~{layout/fragment/action/delete-action :: delete-action( url=@{ ${Endpoint.DIVISION_DELETE_URI} (id=${item.id})} )}"></a>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="d-fex justify-content-center align-items-center">
                    <div th:replace="~{layout/fragment/pagination :: pagination( list= ${divisions}, url = ${url}, filters = ${filters})}"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function updateForm() {
            let value = document.getElementById('pageSizeSelector').value;
            document.getElementById('pageSize').value = parseInt(value);
            document.getElementById('pageNumber').value = 1;
        }
        function onChangePageSize() {
            const pageSize = document.getElementById("pageSizeSelector").value;
            window.location.href = `?size=${parseInt(pageSize)}`
        }
    </script>
</div>

@endsection
