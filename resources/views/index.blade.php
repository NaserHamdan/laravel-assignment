@extends('layouts.app')
@section('content')
    <p>Employee with most sales: {{ $employee['name'] }}</p>

    <p>costumer with largest number of orders: {{ $largestOrdersCustomer }}</p>

    <p>costumer that paid the most: {{ $mostPayingCustomer->customerNumber }}</p>

    <table>
        <tr>
            <th>Teams</th>
            <th>score</th>
            <th>rank</th>
        </tr>
        @foreach ($teams as $team)
            <tr>
                <td>
                    @foreach ($team as $tea)
                        <?php
                        $first = true;
                        ?>

                        @if (is_array($tea))
                            {{ $tea['team'] }}<br>
                        @else
                            <?php
                            $first = false;
                            ?>
                        @endif

                    @endforeach
                </td>
                <td>{{ $team[0]['score'] }}</td>
                <td>{{ $team['rank'] }}</td>
            </tr>
        @endforeach
    </table>
@endsection
