@extends('layouts.side-nav')

@section('content')
<div class="container">

    <div class="col-md-12">
        <table id="customTable" class="table cell-border display table--add" cellspacing="0" width="100%">
            <p class="p--header-table">Reservations</p>

            <thead>
            <tr class="tr-th--custom">
                <th width="30%">Reservation Number</th>
                <th width="20%">PC Name</th>
                <th width="25%">Start Time</th>
                <th width="25%">End Time</th>
                <th width="25%">Student</th>
                <th width="25%">Active</th>
            </tr>
            </thead>
            <tbody>
                <tr class="tr-td--custom">
                    <td class="td--content-left">Reservation Number</td>
                    <td class="td--content-left">PC Name</td>
                    <td class="td--content-left">Start Time</td>
                    <td class="td--content-left">End Time</td>
                    <td class="td--content-left">Student</td>
                    <td class="td--content-left">Active</td>
                </tr>
                <tr class="tr-td--custom">
                    <td class="td--content-left">Reservation Number</td>
                    <td class="td--content-left">PC Name</td>
                    <td class="td--content-left">Start Time</td>
                    <td class="td--content-left">End Time</td>
                    <td class="td--content-left">Student</td>
                    <td class="td--content-left">Active</td>
                </tr>
                @foreach($reports as $report)
                    <tr class="tr-td--custom">
                        {{-- Columns --}}
                        <td class="td--content-left">{{ $report->res_number }}</td>
                        <td class="td--content-left">{{ $report->pc_name }}</td>
                        <td class="td--content-left">{{ $report->starttime }}</td>
                        <td class="td--content-left">{{ $report->endtime }}</td>
                        <td class="td--content-left">{{ $report->student }}</td>
                        <td class="td--content-left">{{ $report->active }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
