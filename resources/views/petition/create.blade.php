@extends('layout.private-layout')

@section('title', 'Courts list')

@section('main')
<div class="row">
    <div class="col-sm-12 mb-3">
        <form class="card shadow border-0>
            <!--Content-->
            <div class="card-body">
                <div class="card-title d-flex justify-content-center">
                    <span class="page-head">পিটিশন দাখিল </span>
                </div>
                <div class="bg-card-body">
                    <div class="row">
                        <div class="col-sm-12 px-4 py-2">
                            <div class="card p-3">
                                <div class="card-body">
                                    <div class="mb-2 fs-18-500-24" th:text="#{label.petition.select.petition.type} + ' *'">*</div>
                                    <div th:each="applicationType, stats : ${petitionTypes}"
                                         class="form-check form-check-inline petition-types">
                                        <input aria-label="applicationType"
                                               th:classappend="${#fields.hasErrors('petitionType')} ? 'is-invalid' : ''"
                                               class="form-check-input" type="radio" name="applicationType"
                                               th:value="${applicationType.getId()}" th:field="*{petitionType}"
                                               th:id="${'general' + stats.index+1}">
                                        <label class="form-check-label" th:for="${'general' + stats.index+1}">
                                <span th:text="${

                                #locale.toString() =='en' ? (applicationType.getTitleEng() + '(' + applicationType.getAmount() + ' Tk)') :
                                (applicationType.getTitleBan() + '(' + Common.convertNumberEnglishToBangla(applicationType.getAmount()) + ' টাকা)')

                                 }"></span></label>
                                    </div>
                                    <div class="mb-2">
                                        <div style="font-size: 75%" class="text-danger"
                                             th:if="${#fields.hasErrors('petitionType')}"
                                             th:each="error : ${#fields.errors('petitionType')}"
                                             th:text="${'পিটিশন এর ধরন নির্বাচন করুন '}"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-4">
                        <hr>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 px-4 py-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title background-theme padding-tb-10 rounded-top">
                                        <span class="form-card-header ps-4 " th:text="#{label.case.type.number}">মোকাদ্দমা টাইপ ও নম্বর</span>
                                    </div>
                                    <div class="row py-2 px-4 g-2">
                                        <div class="col-md-4">
                                            <label class="form-label fs-16-500-16 fs-16-500-16" for="caseType" th:text="#{label.case.type} + ' *'">মোকাদ্দমা ধরণ</label>
                                            <input class="form-control" id="caseType" name="caseType" type="text"
                                                   th:field="*{caseType}"
                                                   th:placeholder="#{placeholder.case.type}"
                                                   th:classappend="${#fields.hasErrors('caseType')} ? 'is-invalid' : ''"/>
                                            <span class="invalid-feedback" th:if="${#fields.hasErrors('caseType')}"
                                                  th:each="error : ${#fields.errors('caseType')}"
                                                  th:text="${error}"></span>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label fs-16-500-16" for="caseNoAndYear" th:text="#{label.case.no.year} + ' *'">
                                                মোকাদ্দমা নম্বর ও সন</label>
                                            <input th:classappend="${#fields.hasErrors('caseNoAndYear')} ? 'is-invalid' : ''"
                                                   class="form-control" id="caseNoAndYear" name="caseNoAndYear"
                                                   type="text"
                                                   th:field="*{caseNoAndYear}"
                                                   th:placeholder="#{placeholder.no.year}"/>
                                            <span class="invalid-feedback" th:if="${#fields.hasErrors('caseNoAndYear')}"
                                                  th:each="error : ${#fields.errors('caseNoAndYear')}"
                                                  th:text="${error}"></span>
                                        </div>
                                        <div class="col-md-4">

                                            <label class="form-label fs-16-500-16" th:text="#{label.copy.type} + ' *'">নকলের প্রকার</label>
                                            <div>
                                                <div class="form-check form-check-inline">
                                                    <input th:classappend="${#fields.hasErrors('copyType')} ? 'is-invalid' : ''"
                                                           class="form-check-input" id="inlineRadio6" type="radio"
                                                           name="caseType" value="certified" th:field="*{copyType}"/>
                                                    <label class="form-check-label" for="inlineRadio6" th:text="#{label.certified}">জাবেদা</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input th:classappend="${#fields.hasErrors('copyType')} ? 'is-invalid' : ''"
                                                           class="form-check-input" id="inlineRadio7" type="radio"
                                                           name="caseType" value="uncertified" th:field="*{copyType}"/>
                                                    <label class="form-check-label " for="inlineRadio7" th:text="#{label.uncertified}">বেজাবেদা</label>
                                                </div>
                                                <div>
                                            <span class="invalid-feedback" th:if="${#fields.hasErrors('copyType')}"
                                                  th:each="error : ${#fields.errors('copyType')}"
                                                  th:text="${error}"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-4">
                                        <hr>
                                    </div>
                                    <div class="row py-2 px-4 g-2" id="division">
                                        <div class="col-md-3">
                                            <label class="form-label fs-16-500-16" for="divisionSelect" th:text="#{label.case.under.division} + ' *'">
                                                যে বিভাগের অধীনে এই মোকদ্দমা
                                            </label>
                                            <select
                                                th:classappend="${#fields.hasErrors('division')} ? 'is-invalid' : ''"
                                                class="form-select"
                                                id="divisionSelect"
                                                name="division"
                                                th:hx-post="@{'/petition/get-district'}"
                                                th:hx-trigger="@{'change'}"
                                                th:hx-swap="@{'outerHTML'}"
                                                th:hx-target="@{'#district'}">
                                                <option value="" th:text="#{label.division.select}">বিভাগ নির্বাচন করুন</option>
                                                <option
                                                    th:each="division : ${divisions}" th:value="${division.id}"
                                                    th:text="${#locale.toString() == 'en' ? division?.getNameEn() : division?.getNameBn() }"
                                                    th:selected="${division.id == petitionApplicationDto?.court?.district?.division?.id}">
                                                </option>
                                            </select>
                                            <span class="invalid-feedback" th:if="${#fields.hasErrors('division')}"
                                                  th:each="error : ${#fields.errors('division')}" th:text="${error}">
                                            </span>
                                        </div>

                                        <div class="col-md-3" id="district">
                                            <label class="form-label fs-16-500-16" th:text="#{label.case.under.district} + ' *'">যে জেলার অধীনে এই মোকদ্দমা</label>
                                            <select
                                                th:classappend="${#fields.hasErrors('district')} ? 'is-invalid' : ''"
                                                id="districtSelect"
                                                name="district"
                                                class="form-select" aria-label="Default select example">
                                                <option value="" th:text="#{label.district.select}">জেলা নির্বাচন করুন</option>
                                                <option
                                                    th:each="district : ${districts}" th:value="${district.id}"
                                                    th:text="${#locale.toString() == 'en' ? district?.getNameEn() : district?.getNameBn() }"
                                                    th:selected="${district.id == petitionApplicationDto?.district?.id}">
                                                </option>
                                            </select>
                                            <span class="invalid-feedback" th:if="${#fields.hasErrors('district')}"
                                                  th:each="error : ${#fields.errors('district')}" th:text="${error}">
                                            </span>
                                        </div>

                                        <div class="col-md-3">
                                            <label class="form-label fs-16-500-16" th:text="#{label.court.type} + ' *'">আদালতের ধরন</label>
                                            <select id="courtTypeSelect"
                                                    name="courtType"
                                                    class="form-select" aria-label="Default select example">
                                                <option value="" th:text="#{label.select.court.type}"> নির্বাচন করুন</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3" id="court">
                                            <label class="form-label fs-16-500-16" for="courtSelect" th:text="#{label.case.under.court} + ' *'">
                                                যে আদালতের অধীনে এই মোকদ্দমা</label>
                                            <select
                                                th:classappend="${#fields.hasErrors('court')} ? 'is-invalid' : ''"
                                                class="form-select"
                                                name="court"
                                                id="courtSelect">
                                                <option value="" th:text="#{label.court.select}">আদালত নির্বাচন করুন</option>
                                                <option
                                                    th:each="court : ${courts}" th:value="${court.id}"
                                                    th:text="${#locale.toString() == 'en' ? court?.getNameEn() : court?.getNameBn() }"
                                                    th:selected="${court.id == petitionApplicationDto?.court?.id}">
                                                </option>
                                            </select>
                                            <span class="invalid-feedback" th:if="${#fields.hasErrors('court')}"
                                                  th:each="error : ${#fields.errors('court')}" th:text="${error}">
                                            </span>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--List-->
                    <div class="row">
                        <div class="col-sm-12 py-2 px-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title background-theme padding-tb-10 rounded-top">
                                        <span class="form-card-header ps-4" th:text="#{label.copy.list}">দলিল/নথির তালিকা</span>
                                    </div>

                                    <div class="table-responsive p-3">
                                        <table class="table stripped ps-5 pe-5">
                                            <thead>
                                            <tr>
                                                <th th:text="#{label.copy.name}">দলিল/নথির নাম</th>
                                                <th th:text="#{label.actions}">একশন</th>
                                            </tr>
                                            </thead>
                                            <tbody class="nothi-table-body">
                                            <tr th:each="nothi : ${petitionApplicationDto.getNothiName()}" th:if="${nothi != ''}">
                                                <td>
                                                    <input
                                                        th:value="${nothi}"
                                                        aria-label="nothiName"
                                                        th:placeholder="#{placeholder.type.name}"
                                                        class="form-control"
                                                        name="nothiName[]">
                                                </td>
                                                <td>
                                                    <button class="btn btn-outline-danger" onclick="remove(this)" th:text="#{button.delete}">
                                                        ডিলিট করুন
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input
                                                        aria-label="nothiName"
                                                        th:placeholder="#{placeholder.type.name}"
                                                        class="form-control"
                                                        name="nothiName[]">
                                                </td>
                                                <td>
                                                    <button class="btn btn-outline-danger" onclick="remove(this)" th:text="#{button.delete}">
                                                        ডিলিট করুন
                                                    </button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <div class="d-flex justify-content-center mt-4">
                                            <button type="button" class="btn btn-outline-primary add-table-row">
                                                <i class="fas fa-plus"></i>
                                                <span th:text="#{label.add.documents}"></span>
                                            </button>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!--other -->
                    <div class="row">
                        <div class="col-md-12 px-4 py-2">
                            <div class="d-flex flex-column flex-md-row justify-content-between w-100 gap-3">
                                <div class="w-100  d-flex">
                                    <div class="card w-100">
                                        <div class="card-body">
                                            <div class="card-title background-theme padding-tb-10 rounded-top">
                                                <span class="form-card-header ps-4" th:text="#{label.side.info}">পক্ষগণের তথ্য</span>
                                            </div>
                                            <div class="row px-4 py-2">
                                                <div class="col">
                                                    <label class="form-label fs-16-500-16" for="mokaddomaType2" th:text="#{label.side1.type}">
                                                        পক্ষ-১ এর ধরণ</label>
                                                    <input th:classappend="${#fields.hasErrors('side1Type')} ? 'is-invalid' : ''"
                                                           class="form-control" id="mokaddomaType2" type="text" name="side1Type"
                                                           th:field="*{side1Type}"
                                                           th:placeholder="#{placeholder.type}"/>
                                                    <span class="invalid-feedback" th:if="${#fields.hasErrors('side1Type')}"
                                                          th:each="error : ${#fields.errors('side1Type')}"
                                                          th:text="${error}"></span>
                                                </div>
                                                <div class="col">
                                                    <label class="form-label fs-16-500-16" for="exampleFormControlInput3" th:text="#{label.side1.name} + ' *'">
                                                        পক্ষ-১ এর প্রথম জনের নাম</label>
                                                    <input th:classappend="${#fields.hasErrors('side1Name')} ? 'is-invalid' : ''"
                                                           class="form-control" id="exampleFormControlInput3" type="text"
                                                           name="side1Name" th:field="*{side1Name}"
                                                           th:placeholder="#{placeholder.type.name}"/>
                                                    <span class="invalid-feedback" th:if="${#fields.hasErrors('side1Name')}"
                                                          th:each="error : ${#fields.errors('side1Name')}"
                                                          th:text="${error}"></span>
                                                </div>
                                                <div class="col  d-flex align-items-end">
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="flexCheckDefault" type="checkbox"
                                                               th:field="*{moreFromSide1}"/>
                                                        <label class="form-check-label" for="flexCheckDefault" th:text="#{label.side1.more}">
                                                            আরো বাদী পক্ষ রয়েছে</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-center align-items-center p-2" th:text="#{label.vs}">
                                                - বনাম -
                                            </div>
                                            <div class="row px-4 py-2 mb-2">
                                                <div class="col">
                                                    <label class="form-label fs-16-500-16" for="mokaddoma" th:text="#{label.side2.type}">পক্ষ-২ এর ধরণ</label>
                                                    <input th:classappend="${#fields.hasErrors('side2Type')} ? 'is-invalid' : ''"
                                                           class="form-control" id="mokaddoma" type="text" name="side2Type"
                                                           th:field="*{side2Type}"
                                                           th:placeholder="#{placeholder.type}"/>
                                                    <span class="invalid-feedback" th:if="${#fields.hasErrors('side2Type')}"
                                                          th:each="error : ${#fields.errors('side2Type')}"
                                                          th:text="${error}"></span>
                                                </div>
                                                <div class="col">
                                                    <label class="form-label fs-16-500-16" for="exampleFormControlInput1" th:text="#{label.side2.name} + ' *'">
                                                        পক্ষ-২ এর প্রথম জনের নাম</label>
                                                    <input th:classappend="${#fields.hasErrors('side2Name')} ? 'is-invalid' : ''"
                                                           class="form-control" id="exampleFormControlInput1" type="text"
                                                           name="side2Name" th:field="*{side2Name}"
                                                           th:placeholder="#{placeholder.type.name}"/>
                                                    <span class="invalid-feedback" th:if="${#fields.hasErrors('side2Name')}"
                                                          th:each="error : ${#fields.errors('side2Name')}"
                                                          th:text="${error}"></span>
                                                </div>
                                                <div class="col  d-flex align-items-end">
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="flexCheckDefault3" type="checkbox"
                                                               th:field="*{moreFromSide2}"/>
                                                        <label class="form-check-label" for="flexCheckDefault3" th:text="#{label.side2.more}">
                                                            আরো বিবাদী পক্ষ রয়েছে</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-100  d-flex flex-column gap-2">
                                    <div class="card flex-fill w-100">
                                        <div class="card-body">
                                            <div class="card-title background-theme padding-tb-10 rounded-top">
                                                <span class="form-card-header ps-4">মামলার তথ্য</span>
                                            </div>

                                            <div class="d-flex  align-items-center px-4 py-2">
                                                <div>
                                                    <div class="form-label fs-16-500-16" th:text="#{label.case.status}  + ' *'"></div>
                                                    <div class="form-check form-check-inline">
                                                        <input th:classappend="${#fields.hasErrors('caseStatus')} ? 'is-invalid' : ''"
                                                               class="form-check-input" id="ongoing" type="radio"
                                                               name="caseType" value="Ongoing" th:field="*{caseStatus}"/>
                                                        <label class="form-check-label" for="ongoing" th:text="#{label.ongoing}">চলমান</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input th:classappend="${#fields.hasErrors('caseStatus')} ? 'is-invalid' : ''"
                                                               class="form-check-input" id="pending" type="radio"
                                                               name="caseType" value="Pending" th:field="*{caseStatus}"/>
                                                        <label class="form-check-label" for="pending" th:text="#{label.pending}">স্থগিত</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input th:classappend="${#fields.hasErrors('caseStatus')} ? 'is-invalid' : ''"
                                                               class="form-check-input" id="settled" type="radio"
                                                               name="caseType" value="Settled" th:field="*{caseStatus}"/>
                                                        <label class="form-check-label" for="settled" th:text="#{label.settled}">নিষ্পত্তিকৃত</label>
                                                    </div>
                                                    <div class="mb-2">
                                                        <div style="font-size: 90%" class="text-danger"
                                                             th:if="${#fields.hasErrors('caseStatus')}"
                                                             th:each="error : ${#fields.errors('caseStatus')}"
                                                             th:text="${error}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ms-4 flex-grow-1">
                                                    <label class="form-label fs-16-500-16 " for="datepicker" th:text="#{label.settled.date}">
                                                        নিষ্পত্তিকৃত হয়ে থাকলে তার তারিখ</label>
                                                    <input class="form-control datetimepicker" id="datepicker" type="date"
                                                           name="dateOfSettlement" th:field="*{dateOfSettlement}"
                                                           placeholder="নিষ্পত্তির তারিখ নির্বাচন করুন"
                                                           data-options='{"disableMobile":true}'/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card flex-fill w-100">
                                        <div class="card-body">
                                            <div class="card-title background-theme padding-tb-10 rounded-top">
                                                <span class="form-card-header ps-4" th:text="#{label.applicant}">দরখাস্ত দাখিলকারী/আবেদনকারী</span>
                                            </div>
                                            <div class="d-flex justify-content-evenly align-items-center px-4 py-2">
                                                <div th:text="${Common.getCurrentLoggedInUser().getFullName()}">সপ্তর্ষি মুখার্জী</div>
                                                <div>
                                                    <div>
                                                        <label class="fs-16-500-16" th:text="#{label.applicant.side} + ' *'">যার পক্ষে আপিল করছেন</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input th:classappend="${#fields.hasErrors('appealingSide')} ? 'is-invalid' : ''"
                                                               class="form-check-input" id="pokkho1" type="radio"
                                                               name="inlineRadioOptions" value="Side1"
                                                               th:field="*{appealingSide}"/>
                                                        <label class="form-check-label " for="pokkho1" th:text="#{label.side1}">পক্ষ - ১</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input th:classappend="${#fields.hasErrors('appealingSide')} ? 'is-invalid' : ''"
                                                               class="form-check-input" id="pokkho2" type="radio"
                                                               name="inlineRadioOptions" value="side2"
                                                               th:field="*{appealingSide}"/>
                                                        <label class="form-check-label" for="pokkho2" th:text="#{label.side2}">পক্ষ - ২</label>
                                                    </div>
                                                    <span class="invalid-feedback" th:if="${#fields.hasErrors('appealingSide')}"
                                                          th:each="error : ${#fields.errors('appealingSide')}"
                                                          th:text="${error}"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>

                    <!--Remarks-->
                    <div class="row">
                        <div class="col-md-12 px-4 py-2">
                            <div class="d-flex flex-column flex-md-row justify-content-between w-100 gap-3">

                                <div class="w-100  d-flex">
                                    <div class="card w-100">
                                        <div class="card-body">
                                            <div class="card-title background-theme padding-tb-10 rounded-top">
                                                <span class="form-card-header ps-4" th:text="#{label.other.comment}">অন্যান্য মন্তব্য লিখুন (যদি থাকে)</span>
                                            </div>
                                            <div class="p-2">
                                            <textarea aria-label="details" rows="4" class="w-100 form-control"
                                                      name="comment"
                                                      th:field="*{comment}"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <!--Button-->
            <div class="row px-3 py-2 g-2">
                <div class="col-md-3 col-sm-12 ">
                    <button type="reset" class="btn btn-secondary w-100" th:text="#{button.reset}">রিসেট</button>
                    <!--                    <button type="reset" class="btn btn-outline-danger w-100">রিসেট</button>-->
                </div>
                <div class="offset-md-3 col-md-6 col-sm-12 d-flex gap-2">
                    <button data-bs-toggle="modal" data-bs-target="#approvalModal"
                            type="button" class="btn btn-primary flex-fill" th:text="#{label.petition.application}">পিটিশন দাখিল করুন</button>
                </div>
            </div>
            <div class="modal fade" id="approvalModal" tabindex="-1" aria-labelledby="approval" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header d-flex justify-content-between">
                            <h5 class="modal-title" th:text="#{label.petition.application}">পিটিশন দাখিল</h5>
                            <div type="button" class="btn" data-bs-dismiss="modal">
                                <i class="fa-solid fa-xmark"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center p-3" id="modalDetails">
                            <p class="fs-18-500-24" th:text="#{label.petition.confirmation}">
                                সকল তথ্য প্রধান করে আপনি কি <br>পিটিশন আবেদন করতে প্রুস্তুত ?</p>
                        </div>
                        <div class="d-flex justify-content-between gap-2 px-5 py-4">
                            <button type="submit" class="btn btn-primary flex-fill" th:text="#{button.apply}">দাখিল করুন</button>
                        </div>

                    </div>
                </div>
            </div>
        </form>


    </div>
</div>

@endsection
