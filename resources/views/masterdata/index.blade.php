@extends('layout.private-layout')

@section('title', 'Courts list')

@section('main')
    <div class="card border-0 p-3 shadow">
        <h5 th:text="#{label.masterData.list}"> মাস্টার ডাটা লিস্ট </h5>
        <div class="mt-3 table-responsive scrollbar">
            <table class="table stripped p-3">
                <thead style="background: #E6EFFC">
                <tr >
                    <th scope="col" th:text="#{label.masterData}">মাস্টার ডাটা</th>
                    <th scope="col" th:text="#{label.masterData.parentMasterData}">প্যারেন্ট মাস্টার ডাটা</th>
                    <th scope="col" th:text="#{label.masterData.noOfItems}"> আইটেম এর পরিমাণ</th>
                    <th scope="col" class="d-flex justify-content-end me-4" th:text="#{label.actions}">একশন</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td th:text="#{label.division}">বিভাগ</td>
                    <td>-</td>
                    <td th:text="${masterDataDto.getDivisionCount()}"></td>
                    <td class="d-flex justify-content-end">
                        <a href="/config/divisions" class="ms-6 me-4" th:text="#{label.seeDetails}"> বিস্তারিত দেখুন </a></td>
                </tr>
                <tr>
                    <td th:text="#{label.district}">জেলা</td>
                    <td th:text="#{label.division}">বিভাগ</td>
                    <td th:text="${masterDataDto.getDistrictCount()}"></td>
                    <td class="d-flex justify-content-end">
                        <a href="/config/districts" class="ms-6 me-4" th:text="#{label.seeDetails}"> বিস্তারিত দেখুন </a></td>
                </tr>

                <tr>
                    <td >আদালতের ধরন</td>
                    <td th:text="#{label.district}">জেলা</td>
                    <td  th:text="${masterDataDto.getCourtType()}"></td>
                    <td class="d-flex justify-content-end">
                        <a href="/config/court-type-list" class="ms-6 me-4" th:text="#{label.seeDetails}"> বিস্তারিত দেখুন </a></td>
                </tr>


                <!--  <tr>
                      <td th:text="#{label.court}">আদালত</td>
                      <td th:text="#{label.district}">জেলা</td>
                      <td  th:text="${masterDataDto.getCourtCount()}"></td>
                      <td class="d-flex justify-content-end">
                          <a href="/config/courts" class="ms-6 me-4" th:text="#{label.seeDetails}"> বিস্তারিত দেখুন </a></td>
                  </tr>-->
                <!-- <tr>
                     <td th:text="#{label.caseType}">কেস এর ধরণ</td>
                     <td>-</td>
                     <td>৭ টি</td>
                     <td class="d-flex justify-content-end">
                         <a href="" class="ms-6 me-4" th:text="#{label.seeDetails}"> বিস্তারিত দেখুন </a></td>
                 </tr>-->
                <tr>
                    <td th:text="#{label.petition.type}"></td>
                    <td>-</td>
                    <td th:text="${masterDataDto.getPetitionTypeCount()}"></td>
                    <td class="d-flex justify-content-end">
                        <a href="/master-data/petition-types" class="ms-6 me-4" th:text="#{label.seeDetails}"> বিস্তারিত দেখুন </a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
