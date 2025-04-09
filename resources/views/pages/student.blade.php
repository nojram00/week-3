<x-main-layout>
    <div class="p-10">
        <h1 class="text-2xl font-bold mb-4">Student Details</h1>
        <div class="bg-gray-100 shadow-md rounded-lg p-6 flex flex-col gap-5">
            <h2 class="text-xl font-semibold mb-4">Student ID: {{ $student->id }}</h2>
            <p><strong>Name:</strong> {{ $student->name }}</p>
            <p><strong>Age:</strong> {{ $student->age }}</p>
            <p><strong>Course:</strong> {{ $student->course }}</p>
            <p><strong>Address:</strong> {{ $student->address }}</p>
            <div>
                <a href="{{ route('students') }}" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded">Back to Students List</a>
            </div>
        </div>
    </div>
</x-main-layout>
