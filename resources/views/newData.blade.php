<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add new record
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('addData') }}" method="post">
                    @csrf
                    <div class="w-full grid md:grid-cols-2 p-8 gap-8">
                        <div class="flex flex-col">
                            <p>Date</p>
                            <input type="date" name="date" class="rounded-md" id="date" required />
                        </div>
                        <div class="flex flex-col">
                            <p>Time</p>
                            <input type="time" name="time" class="rounded-md" id="time" required />
                        </div>
                        <div class="flex flex-col">
                            <p>High Blood Pressure</p>
                            <input type="number" name="high_blood_pressure" class="rounded-md" id="high_blood_pressure" required />
                        </div>
                        <div class="flex flex-col">
                            <p>Low Blood Pressure</p>
                            <input type="number" name="low_blood_pressure" class="rounded-md" id="low_blood_pressure" required />
                        </div>
                        <div class="flex flex-col">
                            <p>Heart Beat</p>
                            <input type="number" name="heart_beat" class="rounded-md" id="heart_beat" required />
                        </div>
                        <div class="flex flex-col">
                            <p>Body Temperature</p>
                            <input type="number" step="0.1" name="body_temp" class="rounded-md" id="body_temp" required />
                        </div>
                        <div class="flex flex-col col-span-2">
                            <p>Note</p>
                            <textarea name="note" class="rounded-md" id="note" required ></textarea>
                        </div>
                        <div class="flex items-center col-span-2 justify-end">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Add +
                            </button>
                            <a href="{{ route('dashboard') }}" class="ml-4 bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                Cancel
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
