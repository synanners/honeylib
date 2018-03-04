@extends('layouts.side-nav')

@section('content')
    <main class="py-4">
        <div class="container">
            <div class="col-md-12">
                <table id="customTable" class="table cell-border display table--add" cellspacing="0" width="100%">
                    <p class="p--header-table">Students</p>

                    <thead>
                    <tr class="tr-th--custom">
                        <th width="15%">Picture</th>
                        <th width="30%">Student Number</th>
                        <th width="20%">Name</th>
                        <th width="20%">Course</th>
                        <th width="20%">Time In</th>
                        <th width="20%">Time Out</th>
                        <th width="20%">Last Login</th>
                        <th width="25%">Active</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="tr-td--custom">
                        {{-- Columns --}}
                        <td class="td--content-left">LOGO HERE</td>
                        <td class="td--content-left">stud_num</td>
                        <td class="td--content-left">name</td>
                        <td class="td--content-left">course</td>
                        <td class="td--content-left">timein</td>
                        <td class="td--content-left">timeout</td>
                        <td class="td--content-left">lastlogin</td>
                        <td class="td--content-left">active</td>
                    </tr>
                    @foreach($students as $stud)
                        <tr class="tr-td--custom">
                            {{-- Columns --}}
                            <td class="td--content-left">{{ $stud->logo }}</td>
                            <td class="td--content-left">{{ $stud->sutd_num }}</td>
                            <td class="td--content-left">{{ $stud->name }}</td>
                            <td class="td--content-left">{{ $stud->course }}</td>
                            <td class="td--content-left">{{ $stud->timein }}</td>
                            <td class="td--content-left">{{ $stud->timeout }}</td>
                            <td class="td--content-left">{{ $stud->lastlogin }}</td>
                            <td class="td--content-left">{{ $stud->active }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection