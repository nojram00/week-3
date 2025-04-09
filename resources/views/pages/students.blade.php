<x-main-layout>
    <div class="p-10">
        <table class="w-full border-collapse">
            <thead>
                <tr>
                    <th class="border px-4 py-2 bg-gray-100 font-bold text-left">Student ID</th>
                    <th class="border px-4 py-2 bg-gray-100 font-bold text-left">Name</th>
                    <th class="border px-4 py-2 bg-gray-100 font-bold text-left">Age</th>
                    <th class="border px-4 py-2 bg-gray-100 font-bold text-left">Course</th>
                    <th class="border px-4 py-2 bg-gray-100 font-bold text-left"></th>

                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr class="@if($loop->even) bg-gray-50 @endif hover:bg-gray-100">
                        <td class="border px-4 py-2">{{ $student->id }}</td>
                        <td class="border px-4 py-2">{{ $student->name }}</td>
                        <td class="border px-4 py-2">{{ $student->age }}</td>
                        <td class="border px-4 py-2">{{ $student->course }}</td>
                        <td class="border px-4 py-2"><a href="{{ route('student', $student->id)}}">View</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-main-layout>
