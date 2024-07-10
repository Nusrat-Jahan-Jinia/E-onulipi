@extends('layout.private-layout')

@section('title', 'Courts list')

@section('main')
    <div class="row g-2" layout:fragment="content">
        <div class="col-sm-12 card p-3">

            <h3 th:text="#{label.division.create}"></h3>

            <form th:action="${Endpoint.DIVISION_SAVE_URI}" th:object="${division}" method="post">
                <div class="row">

                    <div class="col-md-6 col-sm-12 mb-3">
                        <label class="form-label" for="name-bn" th:text="#{label.name.bn}"></label>
                        <input
                            th:classappend="${#fields.hasErrors('nameBn')} ? 'is-invalid' : ''"
                            class="form-control" id="name-bn" th:field="*{nameBn}"
                            type="text" th:placeholder="#{label.name.bn}"
                        />
                        <span class="invalid-feedback" th:if="${#fields.hasErrors('nameBn')}"
                              th:each="error : ${#fields.errors('nameBn')}" th:text="${error}"></span>
                    </div>

                    <div class="col-md-6 col-sm-12 mb-3">
                        <label class="form-label" for="name-en" th:text="#{label.name.en}"></label>
                        <input th:classappend="${#fields.hasErrors('nameEn')} ? 'is-invalid' : ''"
                               class="form-control" id="name-en" th:field="*{nameEn}" type="text" placeholder="Name En"/>

                        <span class="invalid-feedback" th:if="${#fields.hasErrors('nameEn')}"
                              th:each="error : ${#fields.errors('nameEn')}" th:text="${error}"></span>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit" th:text="#{button.submit}"></button>
                <button class="btn btn-secondary" type="reset" th:text="#{button.previous}"></button>
            </form>

        </div>

    </div>

@endsection
