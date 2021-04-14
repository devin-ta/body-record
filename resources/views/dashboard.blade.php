<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex flex-col p-4">
                    <div class="flex justify-between items-center">
                        <h1 class="text-gray-500 font-bold text-xl mb-0">Body condition history</h1>
                        <a href="{{ route('newData') }}" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                            Add new
                        </a>
                    </div>
                    <div class="w-100 pt-4">
                        <table id="status_table" class="display">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Blood Pressure</th>
                                <th>Heart Beat (BPM)</th>
                                <th>Body Temperature (°C)</th>
                                <th>Note</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($histories as $history)
                                <tr>
                                    <td class="text-center">{{ date('Y-m-d', strtotime($history->measured_at)) }}</td>
                                    <td class="text-center">{{ date('H:i', strtotime($history->measured_at)) }}</td>
                                    <td class="text-center">
                                        {{ $history->high_blood_pressure }} / {{ $history->low_blood_pressure }}
                                    </td>
                                    <td class="text-center">
                                        {{ $history->heart_beat }}
                                    </td>
                                    <td class="text-center">
                                        {{ $history->body_temp }}
                                    </td>
                                    <td class="text-center">
                                        {{ $history->note }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                $('#status_table').DataTable();
            });
        </script>
    </div>
</x-app-layout>
